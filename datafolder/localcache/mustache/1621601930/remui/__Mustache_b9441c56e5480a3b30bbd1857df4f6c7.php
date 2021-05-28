<?php

class __Mustache_b9441c56e5480a3b30bbd1857df4f6c7 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        if ($partial = $this->mustache->loadPartial('theme_remui/common_start')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <div class="page-main">
';
        $buffer .= $indent . '        <div class="container">
';
        $buffer .= $indent . '            ';
        $value = $this->resolveValue($context->findDot('output.full_header'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '            <div class="page-content">
';
        $buffer .= $indent . '                <div id="region-main-box">
';
        // 'hasregionmainsettingsmenu' section
        $value = $context->find('hasregionmainsettingsmenu');
        $buffer .= $this->section5397030ddf7634f6279ac7a976f995da($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '                    <section id="region-main" class="float-none">
';
        $buffer .= $indent . '                        <div class="card card-block">
';
        // 'hasregionmainsettingsmenu' section
        $value = $context->find('hasregionmainsettingsmenu');
        $buffer .= $this->section85b38e2ef114feb4bcec35483a18248f($context, $indent, $value);
        // 'notstudent' section
        $value = $context->find('notstudent');
        $buffer .= $this->sectionB8da0bb58bd72bf8d014a9ea5ff82a90($context, $indent, $value);
        $buffer .= $indent . '                            ';
        $value = $this->resolveValue($context->findDot('output.course_content_header'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '                            ';
        $value = $this->resolveValue($context->findDot('output.main_content'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '			                ';
        $value = $this->resolveValue($context->findDot('output.activity_navigation'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '                            ';
        $value = $this->resolveValue($context->findDot('output.course_content_footer'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '                        </div>
';
        $buffer .= $indent . '                    </section>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        </div>
';
        if ($partial = $this->mustache->loadPartial('theme_remui/common_end')) {
            $buffer .= $partial->renderInternal($context, $indent . '    ');
        }
        $buffer .= $indent . '
';
        // 'js' section
        $value = $context->find('js');
        $buffer .= $this->section2bccf1407dbb012e247f0047401c37de($context, $indent, $value);

        return $buffer;
    }

    private function section8ae768dbd9f60a7f7df4aaf3cee7aa89(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'has-blocks';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'has-blocks';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5397030ddf7634f6279ac7a976f995da(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <div id="region-main-settings-menu" class="hidden-print {{#hasblocks}}has-blocks{{/hasblocks}}">
                            <div> {{{ output.region_main_settings_menu }}} </div>
                        </div>
                    ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <div id="region-main-settings-menu" class="hidden-print ';
                // 'hasblocks' section
                $value = $context->find('hasblocks');
                $buffer .= $this->section8ae768dbd9f60a7f7df4aaf3cee7aa89($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                            <div> ';
                $value = $this->resolveValue($context->findDot('output.region_main_settings_menu'), $context);
                $buffer .= $value;
                $buffer .= ' </div>
';
                $buffer .= $indent . '                        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section85b38e2ef114feb4bcec35483a18248f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <div class="region_main_settings_menu_proxy"></div>
                            ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                <div class="region_main_settings_menu_proxy"></div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE2a063f388372bb6ca7caf9545e6d17e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    {{> theme_remui/course_stats }}
                                ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('theme_remui/course_stats')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                                    ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB8da0bb58bd72bf8d014a9ea5ff82a90(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                {{#iscoursestatsshow}}
                                    {{> theme_remui/course_stats }}
                                {{/iscoursestatsshow}}
                            ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                // 'iscoursestatsshow' section
                $value = $context->find('iscoursestatsshow');
                $buffer .= $this->sectionE2a063f388372bb6ca7caf9545e6d17e($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section80bb171a0d2da874e993d1cbe9930888(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        // Get course ID from URL
        // Function to get the details from the URL
        function getUrlParameter(sParam) {
            var sPageURL = decodeURIComponent(window.location.search.substring(1)),
            sURLVariables = sPageURL.split(\'&\'),
            sParameterName,
            i;

            for (i = 0; i < sURLVariables.length; i++) {
                sParameterName = sURLVariables[i].split(\'=\');

                if (sParameterName[0] === sParam) {
                    return sParameterName[1] === undefined ? true : sParameterName[1];
                }
            }
        }

        var courseid = getUrlParameter(\'id\');
        // AJAX call to get course stats
        if(typeof courseid !== "undefined") {
            jQuery.ajax({
                type: "GET",
                async: true,
                url: M.cfg.wwwroot + \'/theme/remui/request_handler.php?action=get_coursestats_ajax&courseid=\' + courseid + \'&sesskey=\' + M.cfg.sesskey,
                success: function(response) {
                    // When course stats block is ready then render the respose value
                    jQuery(\'.course-stats\').ready(function() {
                        jQuery.each(response, function(index, value) {
                            var courseStatsDiv = \'#wdm_course-stats .stats-card .course-stats-\' + index;
                            $(courseStatsDiv).text(value);
                        })
                    });
                },
                error: function(xhr, status, error) {
                    console.log("Failed to load course stats");
                }
            });
        }
    ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        // Get course ID from URL
';
                $buffer .= $indent . '        // Function to get the details from the URL
';
                $buffer .= $indent . '        function getUrlParameter(sParam) {
';
                $buffer .= $indent . '            var sPageURL = decodeURIComponent(window.location.search.substring(1)),
';
                $buffer .= $indent . '            sURLVariables = sPageURL.split(\'&\'),
';
                $buffer .= $indent . '            sParameterName,
';
                $buffer .= $indent . '            i;
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '            for (i = 0; i < sURLVariables.length; i++) {
';
                $buffer .= $indent . '                sParameterName = sURLVariables[i].split(\'=\');
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '                if (sParameterName[0] === sParam) {
';
                $buffer .= $indent . '                    return sParameterName[1] === undefined ? true : sParameterName[1];
';
                $buffer .= $indent . '                }
';
                $buffer .= $indent . '            }
';
                $buffer .= $indent . '        }
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '        var courseid = getUrlParameter(\'id\');
';
                $buffer .= $indent . '        // AJAX call to get course stats
';
                $buffer .= $indent . '        if(typeof courseid !== "undefined") {
';
                $buffer .= $indent . '            jQuery.ajax({
';
                $buffer .= $indent . '                type: "GET",
';
                $buffer .= $indent . '                async: true,
';
                $buffer .= $indent . '                url: M.cfg.wwwroot + \'/theme/remui/request_handler.php?action=get_coursestats_ajax&courseid=\' + courseid + \'&sesskey=\' + M.cfg.sesskey,
';
                $buffer .= $indent . '                success: function(response) {
';
                $buffer .= $indent . '                    // When course stats block is ready then render the respose value
';
                $buffer .= $indent . '                    jQuery(\'.course-stats\').ready(function() {
';
                $buffer .= $indent . '                        jQuery.each(response, function(index, value) {
';
                $buffer .= $indent . '                            var courseStatsDiv = \'#wdm_course-stats .stats-card .course-stats-\' + index;
';
                $buffer .= $indent . '                            $(courseStatsDiv).text(value);
';
                $buffer .= $indent . '                        })
';
                $buffer .= $indent . '                    });
';
                $buffer .= $indent . '                },
';
                $buffer .= $indent . '                error: function(xhr, status, error) {
';
                $buffer .= $indent . '                    console.log("Failed to load course stats");
';
                $buffer .= $indent . '                }
';
                $buffer .= $indent . '            });
';
                $buffer .= $indent . '        }
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2bccf1407dbb012e247f0047401c37de(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'theme_remui/loader\'], function () {
    Breakpoints();
    
    // Topics click in sidebar 
    window.addEventListener("hashchange", function () {
        window.scrollTo(window.scrollX, window.scrollY - 80);
    });

    // show load more button conditionally
    jQuery(\'body#page-course-view-topics .sectionname > span.wdm-sectionname > i, body#page-course-view-weeks .sectionname > span.wdm-sectionname > i\').click(function(){
        jQuery(this).toggleClass(\'fa-angle-down\');
        jQuery(this).toggleClass(\'fa-angle-up\');
        jQuery(this).parent().parent().siblings("ul").slideToggle();
    });
    
    {{#iscoursestatsshow}}
        // Get course ID from URL
        // Function to get the details from the URL
        function getUrlParameter(sParam) {
            var sPageURL = decodeURIComponent(window.location.search.substring(1)),
            sURLVariables = sPageURL.split(\'&\'),
            sParameterName,
            i;

            for (i = 0; i < sURLVariables.length; i++) {
                sParameterName = sURLVariables[i].split(\'=\');

                if (sParameterName[0] === sParam) {
                    return sParameterName[1] === undefined ? true : sParameterName[1];
                }
            }
        }

        var courseid = getUrlParameter(\'id\');
        // AJAX call to get course stats
        if(typeof courseid !== "undefined") {
            jQuery.ajax({
                type: "GET",
                async: true,
                url: M.cfg.wwwroot + \'/theme/remui/request_handler.php?action=get_coursestats_ajax&courseid=\' + courseid + \'&sesskey=\' + M.cfg.sesskey,
                success: function(response) {
                    // When course stats block is ready then render the respose value
                    jQuery(\'.course-stats\').ready(function() {
                        jQuery.each(response, function(index, value) {
                            var courseStatsDiv = \'#wdm_course-stats .stats-card .course-stats-\' + index;
                            $(courseStatsDiv).text(value);
                        })
                    });
                },
                error: function(xhr, status, error) {
                    console.log("Failed to load course stats");
                }
            });
        }
    {{/iscoursestatsshow}}
});
';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . 'require([\'theme_remui/loader\'], function () {
';
                $buffer .= $indent . '    Breakpoints();
';
                $buffer .= $indent . '    
';
                $buffer .= $indent . '    // Topics click in sidebar 
';
                $buffer .= $indent . '    window.addEventListener("hashchange", function () {
';
                $buffer .= $indent . '        window.scrollTo(window.scrollX, window.scrollY - 80);
';
                $buffer .= $indent . '    });
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    // show load more button conditionally
';
                $buffer .= $indent . '    jQuery(\'body#page-course-view-topics .sectionname > span.wdm-sectionname > i, body#page-course-view-weeks .sectionname > span.wdm-sectionname > i\').click(function(){
';
                $buffer .= $indent . '        jQuery(this).toggleClass(\'fa-angle-down\');
';
                $buffer .= $indent . '        jQuery(this).toggleClass(\'fa-angle-up\');
';
                $buffer .= $indent . '        jQuery(this).parent().parent().siblings("ul").slideToggle();
';
                $buffer .= $indent . '    });
';
                $buffer .= $indent . '    
';
                // 'iscoursestatsshow' section
                $value = $context->find('iscoursestatsshow');
                $buffer .= $this->section80bb171a0d2da874e993d1cbe9930888($context, $indent, $value);
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
