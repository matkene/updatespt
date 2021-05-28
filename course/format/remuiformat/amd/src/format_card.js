// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Enhancements to Cards components for easy course accessibility.
 *
 * @module     format/remuiformat
 * @copyright  WisdmLabs
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

define(['jquery', 'core/ajax', 'format_remuiformat/jquery.dragsort'], function ($, Ajax) {

    function init() {

        var cardminHeight = 200;
        $(document).ready(function(){
            inittest();
        });

        function touchHandler(event) {
            var touch = event.changedTouches[0];
            var simulatedEvent = document.createEvent("MouseEvent");
                simulatedEvent.initMouseEvent({
                    touchstart: "mousedown",
                    touchmove: "mousemove",
                    touchend: "mouseup"
                }[event.type], true, true, window, 1,
                touch.screenX, touch.screenY,
                touch.clientX, touch.clientY, false,
                false, false, false, 0, null);
            touch.target.dispatchEvent(simulatedEvent);
            event.preventDefault();
        }

        function inittest() {
            $('a.wdm-drag-drop').each(
                function(index, element) {
                    var sectionwrapper = element;
                    sectionwrapper.addEventListener("touchstart", touchHandler, true);
                    sectionwrapper.addEventListener("touchmove", touchHandler, true);
                    sectionwrapper.addEventListener("touchend", touchHandler, true);
                    sectionwrapper.addEventListener("touchcancel", touchHandler, true);
                }
            );
            // ...document.addEventListener("click", touchHandler, true);.
        }

        // Function to set Equal Height of all cards.
        var setEqualHeight = function (selector) {
            if (selector.length > 0) {
                var arr = [];
                var selector_height;
                selector.css("min-height", "initial");
                selector.each(function (index, elem) {
                    selector_height = elem.offsetHeight;
                    selector_height = (selector_height > cardminHeight) ? selector_height : cardminHeight;
                    arr.push(selector_height);
                });
                selector_height = Math.max.apply(null, arr) + 55;
                selector.css("min-height", selector_height);
            }
        }

        $(window).resize(function(){
            setEqualHeight($('.single-card'));
        });

        // Mark Completion.
        $('form.togglecompletion button').on('click', function() {
            var id = $(this).closest("form").find('input[name="id"]').val();
            if(id) {
                var completion = $('.wdm-completion-status-' + id).text().trim();
                if (completion == "Completed") {
                    $('.wdm-completion-status-' + id).html(M.util.get_string('markcomplete', 'format_remuiformat'));
                    $('.activity-check-' + id).removeClass("completed");
                } else {
                    $('.wdm-completion-status-' + id).html(M.util.get_string('completed', 'format_remuiformat'));
                    $('.activity-check-' + id).addClass("completed");
                }
                $(this).closest(".wdm-completion-container").toggleClass("text-muted");
            }
        });

        $('.form.togglecompletion').submit(function(e) {
            e.preventDefault();
        });

        // Set Equal height of cards on load.
        setEqualHeight($('.single-card'));
        $('#page-course-view-remuiformat span.section-modchooser-link').addClass("btn btn-primary");
        $('.single-card').css({opacity: 0.0, visibility: "visible"}).animate({opacity: 1.0}, 600, "swing");

        function getUrlParameter(sParam) {
            var sPageURL = decodeURIComponent(window.location.search.substring(1)),
            sURLVariables = sPageURL.split('&'),
            sParameterName,
            i;

            for (i = 0; i < sURLVariables.length; i++) {
                sParameterName = sURLVariables[i].split('=');

                if (sParameterName[0] === sParam) {
                    return sParameterName[1] === undefined ? true : sParameterName[1];
                }
            }
        }

        function saveOrder() {
            var section = $(this).data('section');
            var courseid = getUrlParameter('id');
            var data = $(".wdm-section-wrapper li").map(function() {
                return $(this).data("id");
            }).get();
            var sequence = data.toString();
            var sectionsave = Ajax.call([
                {
                    methodname: "format_remuiformat_move_activities",
                    args: { courseid : courseid, sectionid: section, sequence : sequence }
                }
            ]);
            sectionsave[0].done(function (response) {
                // ...console.log(response);.
            });
        }

        $('.wdm-section-wrapper').dragsort({
            dragSelector: "a.wdm-drag-drop",
            dragBetween: true,
            dragEnd: saveOrder,
            placeHolderTemplate: "<li class='placeHolder' style='border:1px solid gray;'></li>"
        });

        M.course = M.course || {};

        M.course.format = M.course.format || {};

        M.course.format.get_config = function () {
            return {
                container_node: 'ul',
                container_class: 'cards',
                section_node: 'li',
                section_class: 'section'
            };
        }

        /**
         * Swap section
         *
         * @param {YUI} Y YUI3 instance
         * @param {string} node1 node to swap to
         * @param {string} node2 node to swap with
         * @return {NodeList} section list
         */
        M.course.format.swap_sections = function (Y, node1, node2) {
            var CSS = {
                COURSECONTENT: 'course-content',
                SECTIONADDMENUS: 'section_add_menus'
            };

            var sectionlist = Y.Node.all('.' + CSS.COURSECONTENT + ' ' + M.course.format.get_section_selector(Y));
            // Swap menus.
            sectionlist.item(node1).one('.' + CSS.SECTIONADDMENUS).swap(sectionlist.item(node2).one('.' + CSS.SECTIONADDMENUS));
        }

        /**
         * Process sections after ajax response
         *
         * @param {YUI} Y YUI3 instance
         * @param {array} response ajax response
         * @param {string} sectionfrom first affected section
         * @param {string} sectionto last affected section
         * @return void
         */
        M.course.format.process_sections = function (Y, sectionlist, response, sectionfrom, sectionto) {
            var CSS = {
                SECTIONNAME: 'sectionname'
            },
            SELECTORS = {
                SECTIONLEFTSIDE: '.left .section-handle .icon'
            };

            if (response.action == 'move') {
                // If moving up swap around 'sectionfrom' and 'sectionto' so the that loop operates.
                if (sectionfrom > sectionto) {
                    var temp = sectionto;
                    sectionto = sectionfrom;
                    sectionfrom = temp;
                }

                // Update titles and move icons in all affected sections.
                var ele, str, stridx, newstr;

                for (var i = sectionfrom; i <= sectionto; i++) {
                    // Update section title.
                    var content = Y.Node.create('<span>' + response.sectiontitles[i] + '</span>');
                    sectionlist.item(i).all('.' + CSS.SECTIONNAME).setHTML(content);
                    // Update move icon.
                    ele = sectionlist.item(i).one(SELECTORS.SECTIONLEFTSIDE);
                    str = ele.getAttribute('alt');
                    stridx = str.lastIndexOf(' ');
                    newstr = str.substr(0, stridx + 1) + i;
                    ele.setAttribute('alt', newstr);
                    ele.setAttribute('title', newstr); // For FireFox as 'alt' is not refreshed.
                }
            }
        }
        // Call AJAX to set activity layout (Row or Card).
        $('.wdm-section-wrapper .single-card-container .wdm-activity-actions .wdm-show-in-row').on('click', function() {
            var courseid = getUrlParameter('id');
            var section = $(this).data('wdmsectionid');
            var activity = $(this).data('wdmactivityid');
            var selector = $(this);
            var activitysave = Ajax.call([
                {
                    methodname: "format_remuiformat_show_activity_in_row",
                    args: { courseid : courseid, sectionid: section, activityid : activity }
                }
            ]);
            activitysave[0].done(function (response) {
                $(selector).addClass('bg-primary');
                $('.wdm-change-layout-notify').show();
                $('.wdm-change-layout-notify').delay(2000).fadeOut('slow');
            });
        });
    }
    // Must return the init function.

    return {
        init: init
    }
});
