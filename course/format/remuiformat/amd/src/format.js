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
 * Enhancements to all components for easy course accessibility.
 *
 * @module     format/remuiformat
 * @copyright  WisdmLabs
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

 define(['jquery', 'core/str'],
function ($, str) {
    function init(arr) {
        str.get_strings([
            {'key' : 'showallsectionperpage', 'component':'format_remuiformat'},
        ]).done(function(ss) {
            $(document).ready(function(){
                var sectionlayout_val;
                // Hide and show the course settings on course format selection.
                $("#id_remuicourseformat").change(function(){
                    var layout_value = $("#id_remuicourseformat").val();
                    if (layout_value == 0) {
                        $("#id_coursedisplay option[value='0']").remove();
                        $('#id_coursedisplay').val(1).trigger('change');
                        $("#id_remuicourseimage_filemanager").parent().parent().hide();
                        $("#id_remuiteacherdisplay").parent().parent().hide();
                        $("#id_remuidefaultsectionview").parent().parent().hide();
                    } else {
                        $('#id_coursedisplay').append('<option value="0">' + ss[0] + '</option>');
                        var oldcoursedisplay = window.localStorage.getItem('coursedisplay');
                        $('#id_coursedisplay').val(oldcoursedisplay).trigger('change');
                        $("#id_remuicourseimage_filemanager").parent().parent().show();
                        $("#id_remuiteacherdisplay").parent().parent().show();
                    }
                    sectionlayout_val = $("#id_coursedisplay").val();
                    if (sectionlayout_val == 1) {
                        $("#id_remuidefaultsectionview").parent().parent().hide();
                    } else {
                        $("#id_remuidefaultsectionview").parent().parent().show();
                    }
                });
                var layout_value = $("#id_remuicourseformat").val();
                window.localStorage.setItem('coursedisplay', $("#id_coursedisplay").val());

                if (layout_value == 0) {
                    $("#id_coursedisplay").find("option").eq(1).hide();
                    $("#id_remuicourseimage_filemanager").parent().parent().hide();
                    $("#id_remuiteacherdisplay").parent().parent().hide();
                    $("#id_remuidefaultsectionview").parent().parent().hide();
                } else {
                    $("#id_remuicourseimage_filemanager").parent().parent().show();
                    $("#id_remuiteacherdisplay").parent().parent().show();
                    sectionlayout_val = $("#id_coursedisplay").val();
                    if (sectionlayout_val == 1) {
                        $("#id_remuidefaultsectionview").parent().parent().hide();
                    }
                }
                $("#id_coursedisplay").change(function(){
                    sectionlayout_val = $("#id_coursedisplay").val();
                    if (sectionlayout_val == 1) {
                        $("#id_remuidefaultsectionview").parent().parent().hide();
                    } else {
                        $("#id_remuidefaultsectionview").parent().parent().show();
                    }
                });
            });
        }
        ).fail(function(){

        });
    }

    // Must return the init function.
    return {
        init: init
    }
});