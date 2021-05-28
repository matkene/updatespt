<?php

class __Mustache_dc53af75f8d1a9b2ba67816a08168563 extends Mustache_Template
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
        // 'issinglecoursepage' inverted section
        $value = $context->find('issinglecoursepage');
        if (empty($value)) {
            
            $buffer .= $indent . '            <div class="panel">
';
            $buffer .= $indent . '                <div class="panel-body p-0">
';
        }
        $buffer .= $indent . '                <div id="region-main-box">
';
        // 'hasregionmainsettingsmenu' section
        $value = $context->find('hasregionmainsettingsmenu');
        $buffer .= $this->section5397030ddf7634f6279ac7a976f995da($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '                    <section id="region-main" class="float-none">
';
        $buffer .= $indent . '                        <div class="card card-block m-0">
';
        // 'hasregionmainsettingsmenu' section
        $value = $context->find('hasregionmainsettingsmenu');
        $buffer .= $this->section85b38e2ef114feb4bcec35483a18248f($context, $indent, $value);
        $buffer .= $indent . '
';
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
        $buffer .= $indent . '			    ';
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
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        // 'issinglecoursepage' inverted section
        $value = $context->find('issinglecoursepage');
        if (empty($value)) {
            
            $buffer .= $indent . '        </div>
';
            $buffer .= $indent . '        </div>
';
        }
        $buffer .= $indent . '        </div>
';
        if ($partial = $this->mustache->loadPartial('theme_remui/common_end')) {
            $buffer .= $partial->renderInternal($context, $indent . '    ');
        }
        $buffer .= $indent . '
';
        // 'js' section
        $value = $context->find('js');
        $buffer .= $this->section1c4fb8c7a29d4a828d89d7a79f105a65($context, $indent, $value);

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

    private function section1c4fb8c7a29d4a828d89d7a79f105a65(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'theme_remui/loader\', \'theme_remui/jquery-floatingscroll\'], function () {
  Breakpoints();
  jQuery(".path-grade-report-grader #region-main>.card").floatingScroll();
  // Grade table scrolling problem issue
    jQuery(document).ready(function () {
        jQuery(\'#page-grade-report-grader-index div.card.card-block\').scroll(function() {
            var scrollPercentage = this.scrollLeft
            if (scrollPercentage == 0) {
                scrollPercentage = 1;
            } else {
                scrollPercentage = parseInt(scrollPercentage) - 25;
            }

            jQuery(\'#page-grade-report-grader-index div.floater.sideonly\').each(function() {
                if (!jQuery(this).hasClass(\'floating\')) {
                    jQuery(this).addClass(\'floating\');
                    jQuery(this).css(\'margin\',\'0\');
                }
                if (scrollPercentage == 1) {
                    jQuery(this).removeClass(\'floating\');
                }
                jQuery(this).css({left : scrollPercentage+"px",  position:\'absolute\'});
            });
        });
    });
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
                
                $buffer .= $indent . 'require([\'theme_remui/loader\', \'theme_remui/jquery-floatingscroll\'], function () {
';
                $buffer .= $indent . '  Breakpoints();
';
                $buffer .= $indent . '  jQuery(".path-grade-report-grader #region-main>.card").floatingScroll();
';
                $buffer .= $indent . '  // Grade table scrolling problem issue
';
                $buffer .= $indent . '    jQuery(document).ready(function () {
';
                $buffer .= $indent . '        jQuery(\'#page-grade-report-grader-index div.card.card-block\').scroll(function() {
';
                $buffer .= $indent . '            var scrollPercentage = this.scrollLeft
';
                $buffer .= $indent . '            if (scrollPercentage == 0) {
';
                $buffer .= $indent . '                scrollPercentage = 1;
';
                $buffer .= $indent . '            } else {
';
                $buffer .= $indent . '                scrollPercentage = parseInt(scrollPercentage) - 25;
';
                $buffer .= $indent . '            }
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '            jQuery(\'#page-grade-report-grader-index div.floater.sideonly\').each(function() {
';
                $buffer .= $indent . '                if (!jQuery(this).hasClass(\'floating\')) {
';
                $buffer .= $indent . '                    jQuery(this).addClass(\'floating\');
';
                $buffer .= $indent . '                    jQuery(this).css(\'margin\',\'0\');
';
                $buffer .= $indent . '                }
';
                $buffer .= $indent . '                if (scrollPercentage == 1) {
';
                $buffer .= $indent . '                    jQuery(this).removeClass(\'floating\');
';
                $buffer .= $indent . '                }
';
                $buffer .= $indent . '                jQuery(this).css({left : scrollPercentage+"px",  position:\'absolute\'});
';
                $buffer .= $indent . '            });
';
                $buffer .= $indent . '        });
';
                $buffer .= $indent . '    });
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
