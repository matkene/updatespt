<?php

class __Mustache_f363b352d00ae620367fd6e8edf33e21 extends Mustache_Template
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
        $buffer .= $indent . '    <div class="page-main">
';
        $buffer .= $indent . '    <div class="container">
';
        $buffer .= $indent . '        ';
        $value = $this->resolveValue($context->findDot('output.full_header'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <div class="page-content">
';
        $buffer .= $indent . '            
';
        $buffer .= $indent . '            <!-- Filters -->
';
        $buffer .= $indent . '            <div class="row category-filters pb-20 d-none">
';
        $buffer .= $indent . '                ';
        $value = $this->resolveValue($context->find('allfilters'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '            <div class="nav-tabs-horizontal courses-tabs" data-plugin="tabs">
';
        $buffer .= $indent . '                <ul class="nav nav-tabs nav nav-tabs nav-tabs-line" role="tablist">
';
        // 'tabcontent' section
        $value = $context->find('tabcontent');
        $buffer .= $this->sectionA49e8af0eb02b5670660101ece81de2d($context, $indent, $value);
        $buffer .= $indent . '                </ul>
';
        $buffer .= $indent . '                <div class="tab-content mt-10 ';
        // 'latest_card' section
        $value = $context->find('latest_card');
        $buffer .= $this->section07857a971f2c2659b76e78c846f0bef0($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '                    <div class="courses-loader-wrap w-p100 h-p100">
';
        $buffer .= $indent . '                        <i class="h3 fa-spin fa fa-circle-o-notch" aria-hidden="true"></i>
';
        $buffer .= $indent . '                    </div>
';
        // 'tabcontent' section
        $value = $context->find('tabcontent');
        $buffer .= $this->section83349c709fc35d2d3ce75de686a39547($context, $indent, $value);
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div id="region-main-box" class="hidden">
';
        // 'hasregionmainsettingsmenu' section
        $value = $context->find('hasregionmainsettingsmenu');
        $buffer .= $this->section682ba32fcd4b7e19ef22738370d2543f($context, $indent, $value);
        $buffer .= $indent . '            <section id="region-main" ';
        // 'hasblocks' section
        $value = $context->find('hasblocks');
        $buffer .= $this->section1070627cc6d04a30fbc9aa223e9e57ed($context, $indent, $value);
        $buffer .= '>
';
        // 'hasregionmainsettingsmenu' section
        $value = $context->find('hasregionmainsettingsmenu');
        $buffer .= $this->sectionC92a9a4db7ad0fa861c622177ab91a4d($context, $indent, $value);
        $buffer .= $indent . '                ';
        $value = $this->resolveValue($context->findDot('output.course_content_header'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '                ';
        $value = $this->resolveValue($context->findDot('output.main_content'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '                ';
        $value = $this->resolveValue($context->findDot('output.course_content_footer'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '            </section>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>  
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    </div>
';
        if ($partial = $this->mustache->loadPartial('theme_remui/common_end')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '
';
        // 'js' section
        $value = $context->find('js');
        $buffer .= $this->section46dbeb235f84dd8bbe06539bca7d5e3a($context, $indent, $value);

        return $buffer;
    }

    private function section394210065fc120f40f05534a4cb50829(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'active show';
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
                
                $buffer .= 'active show';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA49e8af0eb02b5670660101ece81de2d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <li class="nav-item" role="presentation">
                        <a id="{{name}}tab" class="nav-link {{#isActive}}active show{{/isActive}}" data-toggle="tab" href="#{{name}}region" aria-controls="{{name}}region" role="tab" aria-selected="true">
                            {{text}}
                        </a>
                    </li>
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
                
                $buffer .= $indent . '                    <li class="nav-item" role="presentation">
';
                $buffer .= $indent . '                        <a id="';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= 'tab" class="nav-link ';
                // 'isActive' section
                $value = $context->find('isActive');
                $buffer .= $this->section394210065fc120f40f05534a4cb50829($context, $indent, $value);
                $buffer .= '" data-toggle="tab" href="#';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= 'region" aria-controls="';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= 'region" role="tab" aria-selected="true">
';
                $buffer .= $indent . '                            ';
                $value = $this->resolveValue($context->find('text'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '
';
                $buffer .= $indent . '                        </a>
';
                $buffer .= $indent . '                    </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section07857a971f2c2659b76e78c846f0bef0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'latest-cards';
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
                
                $buffer .= 'latest-cards';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section83349c709fc35d2d3ce75de686a39547(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="tab-pane {{#isActive}}active show{{/isActive}}" id="{{name}}region" role="tabpanel">
                        <div class="row content">
                            
                        </div>
                        <div class="pagination" id="{{name}}pagination"></div>
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
                
                $buffer .= $indent . '                    <div class="tab-pane ';
                // 'isActive' section
                $value = $context->find('isActive');
                $buffer .= $this->section394210065fc120f40f05534a4cb50829($context, $indent, $value);
                $buffer .= '" id="';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= 'region" role="tabpanel">
';
                $buffer .= $indent . '                        <div class="row content">
';
                $buffer .= $indent . '                            
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                        <div class="pagination" id="';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= 'pagination"></div>
';
                $buffer .= $indent . '                    </div>
';
                $context->pop();
            }
        }
    
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

    private function section682ba32fcd4b7e19ef22738370d2543f(Mustache_Context $context, $indent, $value)
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
                
                $buffer .= $indent . '                <div id="region-main-settings-menu" class="hidden-print ';
                // 'hasblocks' section
                $value = $context->find('hasblocks');
                $buffer .= $this->section8ae768dbd9f60a7f7df4aaf3cee7aa89($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                    <div> ';
                $value = $this->resolveValue($context->findDot('output.region_main_settings_menu'), $context);
                $buffer .= $value;
                $buffer .= ' </div>
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1070627cc6d04a30fbc9aa223e9e57ed(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'class="has-blocks"';
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
                
                $buffer .= 'class="has-blocks"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC92a9a4db7ad0fa861c622177ab91a4d(Mustache_Context $context, $indent, $value)
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
                
                $buffer .= $indent . '                    <div class="region_main_settings_menu_proxy"></div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section46dbeb235f84dd8bbe06539bca7d5e3a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'theme_remui/loader\',  \'theme_remui/coursecategory\'], function (l, c) {
    Breakpoints();
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
                
                $buffer .= $indent . 'require([\'theme_remui/loader\',  \'theme_remui/coursecategory\'], function (l, c) {
';
                $buffer .= $indent . '    Breakpoints();
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
