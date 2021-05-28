<?php

class __Mustache_3edae2bf7ba50b04f42c476357734efc extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        // 'pluginicon' section
        $value = $context->find('pluginicon');
        $buffer .= $this->section344baa8dcde0e89b390a065e53b85cc5($context, $indent, $value);
        // 'pluginicon' inverted section
        $value = $context->find('pluginicon');
        if (empty($value)) {
            
            $buffer .= $indent . '    <i class="site-menu-icon ';
            $value = $this->resolveValue($context->find('remuiicon'), $context);
            $buffer .= $value;
            $buffer .= '" aria-hidden="true"></i>
';
        }

        return $buffer;
    }

    private function section344baa8dcde0e89b390a065e53b85cc5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="site-menu-icon">
        <img src="{{pluginicon}}"/>
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
                
                $buffer .= $indent . '    <div class="site-menu-icon">
';
                $buffer .= $indent . '        <img src="';
                $value = $this->resolveValue($context->find('pluginicon'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"/>
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
