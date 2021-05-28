<?php

class __Mustache_bb7193bfb2f331ae8811632108b08831 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<form action="';
        $value = $this->resolveValue($context->find('searchurl'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" id="';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" method="get" class="form-inline">
';
        $buffer .= $indent . '    <div class="form-group coursesearchbox invisiblefieldset w-p100">
';
        $buffer .= $indent . '    
';
        $buffer .= $indent . '        <input type="hidden" name="mycourses">
';
        // 'category' section
        $value = $context->find('category');
        $buffer .= $this->section5d03ca60fba05ff1539ad08f1b305d32($context, $indent, $value);
        $buffer .= $indent . '        <div class="input-group w-p100 d-flex  ">
';
        $buffer .= $indent . '            <input id="';
        $value = $this->resolveValue($context->find('inputid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" type="text" class="form-control" name="search" placeholder="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section00ec4f46ef2dd131f134e34ffd80d923($context, $indent, $value);
        $buffer .= '" value="';
        $value = $this->resolveValue($context->find('value'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">
';
        $buffer .= $indent . '            <span class="input-group-append">
';
        $buffer .= $indent . '            <button type="submit" class="btn btn-primary"><i class="icon wb-search" style="margin:-5px 3px -2px;" aria-hidden="true"></i></button>
';
        $buffer .= $indent . '            </span>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</form>
';

        return $buffer;
    }

    private function section5d03ca60fba05ff1539ad08f1b305d32(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <input type="hidden" name="categoryid" value="{{category}}">
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
                
                $buffer .= $indent . '            <input type="hidden" name="categoryid" value="';
                $value = $this->resolveValue($context->find('category'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section00ec4f46ef2dd131f134e34ffd80d923(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'searchcourses';
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
                
                $buffer .= 'searchcourses';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
