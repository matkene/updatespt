<?php

class __Mustache_86b2eddacec8df57fa27be8e4d6343e0 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        // 'isteacher' section
        $value = $context->find('isteacher');
        $buffer .= $this->sectionC1b9c937dbd7f295a3ad7c59686e2d12($context, $indent, $value);

        return $buffer;
    }

    private function section0f48aceda1e9929132854ada51fbceee(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'block_remuiblck/manage_courses\'], function(managecourse) {
    managecourse.init(\'#managecourses\');
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
                
                $buffer .= $indent . 'require([\'block_remuiblck/manage_courses\'], function(managecourse) {
';
                $buffer .= $indent . '    managecourse.init(\'#managecourses\');
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC1b9c937dbd7f295a3ad7c59686e2d12(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<div id="manage_courses" class="container">
    <div class="filters justify-content-end">
        {{> block_remuiblck/manage-courses-display-selector }}
    </div>
    <div data-region="manage-courses-list">
        {{> block_remuiblck/placeholders-manage-courses }}
    </div>
    <div class="mt-10">
        {{> block_remuiblck/per-page-and-pagination-selector }}
    </div>
</div>
{{#js}}
require([\'block_remuiblck/manage_courses\'], function(managecourse) {
    managecourse.init(\'#managecourses\');
});
{{/js}}
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
                
                $buffer .= $indent . '<div id="manage_courses" class="container">
';
                $buffer .= $indent . '    <div class="filters justify-content-end">
';
                if ($partial = $this->mustache->loadPartial('block_remuiblck/manage-courses-display-selector')) {
                    $buffer .= $partial->renderInternal($context, $indent . '        ');
                }
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '    <div data-region="manage-courses-list">
';
                if ($partial = $this->mustache->loadPartial('block_remuiblck/placeholders-manage-courses')) {
                    $buffer .= $partial->renderInternal($context, $indent . '        ');
                }
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '    <div class="mt-10">
';
                if ($partial = $this->mustache->loadPartial('block_remuiblck/per-page-and-pagination-selector')) {
                    $buffer .= $partial->renderInternal($context, $indent . '        ');
                }
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '</div>
';
                // 'js' section
                $value = $context->find('js');
                $buffer .= $this->section0f48aceda1e9929132854ada51fbceee($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
