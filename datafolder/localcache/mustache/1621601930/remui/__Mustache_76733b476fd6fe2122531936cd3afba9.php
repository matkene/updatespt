<?php

class __Mustache_76733b476fd6fe2122531936cd3afba9 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<div id="block-recentlyaccessedcourses-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" class="block-recentlyaccessedcourses block-cards" data-region="recentlyaccessedcourses"
';
        $buffer .= $indent . '     data-userid="';
        $value = $this->resolveValue($context->find('userid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">
';
        $buffer .= $indent . '    <div class="container-fluid p-0">
';
        if ($partial = $this->mustache->loadPartial('block_recentlyaccessedcourses/recentlyaccessedcourses-view')) {
            $buffer .= $partial->renderInternal($context, $indent . '        ');
        }
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';
        // 'js' section
        $value = $context->find('js');
        $buffer .= $this->sectionC3cef702da62fdb0cc5127fba4514285($context, $indent, $value);

        return $buffer;
    }

    private function sectionC3cef702da62fdb0cc5127fba4514285(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require(
[
    \'jquery\',
    \'theme_remui/recentlyaccessedcourses\'
],
function(
    $,
    Main
) {
    var root = $(\'#block-recentlyaccessedcourses-{{uniqid}}\');
    var userid = root.attr(\'data-userid\');

    Main.init(userid, root);
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
                
                $buffer .= $indent . 'require(
';
                $buffer .= $indent . '[
';
                $buffer .= $indent . '    \'jquery\',
';
                $buffer .= $indent . '    \'theme_remui/recentlyaccessedcourses\'
';
                $buffer .= $indent . '],
';
                $buffer .= $indent . 'function(
';
                $buffer .= $indent . '    $,
';
                $buffer .= $indent . '    Main
';
                $buffer .= $indent . ') {
';
                $buffer .= $indent . '    var root = $(\'#block-recentlyaccessedcourses-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '\');
';
                $buffer .= $indent . '    var userid = root.attr(\'data-userid\');
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    Main.init(userid, root);
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
