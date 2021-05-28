<?php

class __Mustache_cee7c3edbdc174c8c32dd992d110c883 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="dropdown duration-filter mr-2" data-region="task-duration-filter">
';
        $buffer .= $indent . '    <button id="taskduration" type="button" class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" aria-label="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionA63a7b30fd5848dd5caaacc1323131cd($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '        ';
        // 'pix' section
        $value = $context->find('pix');
        $buffer .= $this->section79b77fc02f219580d4079c16462fb869($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '        <span class="d-sm-inline-block" data-active-item-text>
';
        $buffer .= $indent . '            ';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section4e3d0118d9508a09db0617bcf04570b2($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '        </span>
';
        $buffer .= $indent . '    </button>
';
        $buffer .= $indent . '    <ul class="dropdown-menu dropdown-menu-right" data-show-active-item data-active-item-text aria-labelledby="taskduration">
';
        $buffer .= $indent . '        <li>
';
        $buffer .= $indent . '            <a class="dropdown-item" href="#" data-filter="grouping" data-value="all" data-pref="all" aria-label="';
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
        $buffer .= $indent . '            <a class="dropdown-item active" href="#" data-filter="grouping" data-value="today" data-pref="today" aria-label="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section4e3d0118d9508a09db0617bcf04570b2($context, $indent, $value);
        $buffer .= '" aria-controls="courses-view-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">
';
        $buffer .= $indent . '                ';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section4e3d0118d9508a09db0617bcf04570b2($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '            </a>
';
        $buffer .= $indent . '        </li>
';
        $buffer .= $indent . '        <li>
';
        $buffer .= $indent . '            <a class="dropdown-item" href="#" data-filter="grouping" data-value="next7days" data-pref="next7days" aria-label="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionA65b198ce264a7378d79f06a10ce98fa($context, $indent, $value);
        $buffer .= '" aria-controls="courses-view-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">
';
        $buffer .= $indent . '                ';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionA65b198ce264a7378d79f06a10ce98fa($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '            </a>
';
        $buffer .= $indent . '        </li>
';
        $buffer .= $indent . '        <li>
';
        $buffer .= $indent . '            <a class="dropdown-item" href="#" data-filter="grouping" data-value="next30days" data-pref="next30days" aria-label="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section400ad442e81f0c2e41f847d2747d11c9($context, $indent, $value);
        $buffer .= '" aria-controls="courses-view-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">
';
        $buffer .= $indent . '                ';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section400ad442e81f0c2e41f847d2747d11c9($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '            </a>
';
        $buffer .= $indent . '        </li>
';
        $buffer .= $indent . '        <li>
';
        $buffer .= $indent . '            <a class="dropdown-item" href="#" data-filter="grouping" data-value="next3months" data-pref="next3months" aria-label="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionD7ebe2830f180601f8f64369046f55f7($context, $indent, $value);
        $buffer .= '" aria-controls="courses-view-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">
';
        $buffer .= $indent . '                ';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionD7ebe2830f180601f8f64369046f55f7($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '            </a>
';
        $buffer .= $indent . '        </li>
';
        $buffer .= $indent . '        <li>
';
        $buffer .= $indent . '            <a class="dropdown-item" href="#" data-filter="grouping" data-value="next6months" data-pref="next6months" aria-label="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section8a1fe1167d7281f789598de66f26b041($context, $indent, $value);
        $buffer .= '" aria-controls="courses-view-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">
';
        $buffer .= $indent . '                ';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section8a1fe1167d7281f789598de66f26b041($context, $indent, $value);
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

    private function sectionA63a7b30fd5848dd5caaacc1323131cd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' eventduration, core_calendar ';
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
                
                $buffer .= ' eventduration, core_calendar ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section79b77fc02f219580d4079c16462fb869(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' i/duration ';
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
                
                $buffer .= ' i/duration ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4e3d0118d9508a09db0617bcf04570b2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' today ';
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
                
                $buffer .= ' today ';
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

    private function sectionA65b198ce264a7378d79f06a10ce98fa(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' next7days, block_remuiblck ';
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
                
                $buffer .= ' next7days, block_remuiblck ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section400ad442e81f0c2e41f847d2747d11c9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' next30days, block_remuiblck ';
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
                
                $buffer .= ' next30days, block_remuiblck ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD7ebe2830f180601f8f64369046f55f7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' next3months, block_remuiblck ';
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
                
                $buffer .= ' next3months, block_remuiblck ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8a1fe1167d7281f789598de66f26b041(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' next6months, block_remuiblck ';
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
                
                $buffer .= ' next6months, block_remuiblck ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
