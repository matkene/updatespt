<?php

class __Mustache_c80288a91efeb2603d6cd09d0b7c9417 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        // 'caneditfrontpage' section
        $value = $context->find('caneditfrontpage');
        $buffer .= $this->section2618334139969e799556b6a5bbcc9fd2($context, $indent, $value);

        return $buffer;
    }

    private function section0d6557c9931e917aa5699bc051fab2da(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' preview ';
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
                
                $buffer .= ' preview ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAf057716dfd78f3b64621337a8f2f48f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <button type="button" class="hidden-sm-down btn btn-floating bg-cyan-600 d-flex align-items-center justify-content-center btns-animate animate-2 settings" data-toggle="tooltip" data-original-title="Settings" data-placement="left" data-trigger="hover">
            <i class="fa fa-cog" aria-hidden="true"></i>
        </button>

        <button type="button" class="hidden-sm-down btn btn-floating bg-purple-600 d-flex align-items-center justify-content-center btns-animate animate-2 publish " data-toggle="tooltip" data-original-title="Publish" data-placement="left" data-trigger="hover">
            <i class="fa fa-cloud-upload" aria-hidden="true"></i>
        </button>

        <button type="button" class="hidden-sm-down preview-section btn btn-floating bg-yellow-600 d-flex align-items-center justify-content-center btns-animate animate-1" data-toggle="tooltip" data-original-title="{{#str}} preview {{/str}}" data-placement="left" data-trigger="hover">
            <i class="fa fa-eye" aria-hidden="true"></i>
        </button>

        <button type="button" class="hidden-sm-down add-section btn btn-floating bg-green-600 d-flex align-items-center justify-content-center btns-animate animate-1" data-toggle="tooltip" data-original-title="Add Sections" data-placement="left" data-trigger="hover">
            <i class="fa fa-plus" aria-hidden="true"></i>
        </button>

        <button type="button" class=" editing-action btn btn-floating bg-orange-600 d-flex align-items-center justify-content-center" data-toggle="tooltip" data-original-title="Turn Editing Off" data-placement="left"  data-edit="{{customizepagevalue}}" data-trigger="hover">
            <i class="fa fa-times" aria-hidden="true"></i>
        </button>
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
                
                $buffer .= $indent . '        <button type="button" class="hidden-sm-down btn btn-floating bg-cyan-600 d-flex align-items-center justify-content-center btns-animate animate-2 settings" data-toggle="tooltip" data-original-title="Settings" data-placement="left" data-trigger="hover">
';
                $buffer .= $indent . '            <i class="fa fa-cog" aria-hidden="true"></i>
';
                $buffer .= $indent . '        </button>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '        <button type="button" class="hidden-sm-down btn btn-floating bg-purple-600 d-flex align-items-center justify-content-center btns-animate animate-2 publish " data-toggle="tooltip" data-original-title="Publish" data-placement="left" data-trigger="hover">
';
                $buffer .= $indent . '            <i class="fa fa-cloud-upload" aria-hidden="true"></i>
';
                $buffer .= $indent . '        </button>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '        <button type="button" class="hidden-sm-down preview-section btn btn-floating bg-yellow-600 d-flex align-items-center justify-content-center btns-animate animate-1" data-toggle="tooltip" data-original-title="';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section0d6557c9931e917aa5699bc051fab2da($context, $indent, $value);
                $buffer .= '" data-placement="left" data-trigger="hover">
';
                $buffer .= $indent . '            <i class="fa fa-eye" aria-hidden="true"></i>
';
                $buffer .= $indent . '        </button>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '        <button type="button" class="hidden-sm-down add-section btn btn-floating bg-green-600 d-flex align-items-center justify-content-center btns-animate animate-1" data-toggle="tooltip" data-original-title="Add Sections" data-placement="left" data-trigger="hover">
';
                $buffer .= $indent . '            <i class="fa fa-plus" aria-hidden="true"></i>
';
                $buffer .= $indent . '        </button>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '        <button type="button" class=" editing-action btn btn-floating bg-orange-600 d-flex align-items-center justify-content-center" data-toggle="tooltip" data-original-title="Turn Editing Off" data-placement="left"  data-edit="';
                $value = $this->resolveValue($context->find('customizepagevalue'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-trigger="hover">
';
                $buffer .= $indent . '            <i class="fa fa-times" aria-hidden="true"></i>
';
                $buffer .= $indent . '        </button>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2618334139969e799556b6a5bbcc9fd2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{#userisediting}}
        <button type="button" class="hidden-sm-down btn btn-floating bg-cyan-600 d-flex align-items-center justify-content-center btns-animate animate-2 settings" data-toggle="tooltip" data-original-title="Settings" data-placement="left" data-trigger="hover">
            <i class="fa fa-cog" aria-hidden="true"></i>
        </button>

        <button type="button" class="hidden-sm-down btn btn-floating bg-purple-600 d-flex align-items-center justify-content-center btns-animate animate-2 publish " data-toggle="tooltip" data-original-title="Publish" data-placement="left" data-trigger="hover">
            <i class="fa fa-cloud-upload" aria-hidden="true"></i>
        </button>

        <button type="button" class="hidden-sm-down preview-section btn btn-floating bg-yellow-600 d-flex align-items-center justify-content-center btns-animate animate-1" data-toggle="tooltip" data-original-title="{{#str}} preview {{/str}}" data-placement="left" data-trigger="hover">
            <i class="fa fa-eye" aria-hidden="true"></i>
        </button>

        <button type="button" class="hidden-sm-down add-section btn btn-floating bg-green-600 d-flex align-items-center justify-content-center btns-animate animate-1" data-toggle="tooltip" data-original-title="Add Sections" data-placement="left" data-trigger="hover">
            <i class="fa fa-plus" aria-hidden="true"></i>
        </button>

        <button type="button" class=" editing-action btn btn-floating bg-orange-600 d-flex align-items-center justify-content-center" data-toggle="tooltip" data-original-title="Turn Editing Off" data-placement="left"  data-edit="{{customizepagevalue}}" data-trigger="hover">
            <i class="fa fa-times" aria-hidden="true"></i>
        </button>
    {{/userisediting}}
    {{^userisediting}}
        <button type="button" class="hidden-sm-down editing-action btn btn-floating bg-orange-600 d-flex align-items-center justify-content-center" data-toggle="tooltip" data-original-title="Turn Editing On" data-placement="left"  data-edit="{{customizepagevalue}}" data-trigger="hover">
            <i class="fa fa-pencil" aria-hidden="true"></i>
        </button>
    {{/userisediting}}
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
                
                // 'userisediting' section
                $value = $context->find('userisediting');
                $buffer .= $this->sectionAf057716dfd78f3b64621337a8f2f48f($context, $indent, $value);
                // 'userisediting' inverted section
                $value = $context->find('userisediting');
                if (empty($value)) {
                    
                    $buffer .= $indent . '        <button type="button" class="hidden-sm-down editing-action btn btn-floating bg-orange-600 d-flex align-items-center justify-content-center" data-toggle="tooltip" data-original-title="Turn Editing On" data-placement="left"  data-edit="';
                    $value = $this->resolveValue($context->find('customizepagevalue'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '" data-trigger="hover">
';
                    $buffer .= $indent . '            <i class="fa fa-pencil" aria-hidden="true"></i>
';
                    $buffer .= $indent . '        </button>
';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
