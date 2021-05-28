<?php

class __Mustache_c2f085dd0d2f55151d5afb7ca3ffe068 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="dropdown status-filter" data-region="task-status-filter">
';
        $buffer .= $indent . '    <button id="taskstatus" type="button" class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" aria-label="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section9b1058f8ca55c8432187532cccfef87d($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '        ';
        // 'pix' section
        $value = $context->find('pix');
        $buffer .= $this->sectionC941581ed22833ebdc688d5da36a360a($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '        <span class="d-sm-inline-block" data-active-item-text>
';
        $buffer .= $indent . '            ';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section9a1924cb8f234b9e190d5b85e68ad861($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '        </span>
';
        $buffer .= $indent . '    </button>
';
        $buffer .= $indent . '    <ul class="dropdown-menu dropdown-menu-right" data-show-active-item data-active-item-text aria-labelledby="taskstatus">
';
        $buffer .= $indent . '        <li>
';
        $buffer .= $indent . '            <a class="dropdown-item active" href="#" data-filter="grouping" data-value="all" data-pref="all" aria-label="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section9a1924cb8f234b9e190d5b85e68ad861($context, $indent, $value);
        $buffer .= '" aria-controls="courses-view-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">
';
        $buffer .= $indent . '                ';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section9a1924cb8f234b9e190d5b85e68ad861($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '            </a>
';
        $buffer .= $indent . '        </li>
';
        $buffer .= $indent . '        <li>
';
        $buffer .= $indent . '            <a class="dropdown-item" href="#" data-filter="grouping" data-value="completed" data-pref="completed" aria-label="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section2d5e13f5d8c53410a1934f23b81b1893($context, $indent, $value);
        $buffer .= '" aria-controls="courses-view-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">
';
        $buffer .= $indent . '                ';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section2d5e13f5d8c53410a1934f23b81b1893($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '            </a>
';
        $buffer .= $indent . '        </li>
';
        $buffer .= $indent . '        <li>
';
        $buffer .= $indent . '            <a class="dropdown-item" href="#" data-filter="grouping" data-value="incomplete" data-pref="incomplete" aria-label="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section3b475726c10c009f57cbbc96b7165e6e($context, $indent, $value);
        $buffer .= '" aria-controls="courses-view-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">
';
        $buffer .= $indent . '                ';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section3b475726c10c009f57cbbc96b7165e6e($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '            </a>
';
        $buffer .= $indent . '        </li>
';
        $buffer .= $indent . '        <li>
';
        $buffer .= $indent . '            <a class="dropdown-item" href="#" data-filter="grouping" data-value="due" data-pref="due" aria-label="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section0dc0421e700f13f5e3cc5c5ffce39f0b($context, $indent, $value);
        $buffer .= '" aria-controls="courses-view-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">
';
        $buffer .= $indent . '                ';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section0dc0421e700f13f5e3cc5c5ffce39f0b($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '            </a>
';
        $buffer .= $indent . '        </li>
';
        $buffer .= $indent . '    </ul>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section9b1058f8ca55c8432187532cccfef87d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' tasks, block_remuiblck ';
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
                
                $buffer .= ' tasks, block_remuiblck ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC941581ed22833ebdc688d5da36a360a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' i/filter ';
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
                
                $buffer .= ' i/filter ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9a1924cb8f234b9e190d5b85e68ad861(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' all ';
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
                
                $buffer .= ' all ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2d5e13f5d8c53410a1934f23b81b1893(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' completed, core_completion ';
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
                
                $buffer .= ' completed, core_completion ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3b475726c10c009f57cbbc96b7165e6e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' incomplete, block_remuiblck ';
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
                
                $buffer .= ' incomplete, block_remuiblck ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0dc0421e700f13f5e3cc5c5ffce39f0b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' due, block_remuiblck ';
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
                
                $buffer .= ' due, block_remuiblck ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
