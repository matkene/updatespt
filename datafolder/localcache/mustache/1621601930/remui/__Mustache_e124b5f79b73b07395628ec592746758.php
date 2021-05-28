<?php

class __Mustache_e124b5f79b73b07395628ec592746758 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="';
        // 'isremuiblck' inverted section
        $value = $context->find('isremuiblck');
        if (empty($value)) {
            
            $buffer .= 'panel panel-bordered';
        }
        $buffer .= ' ';
        // 'hidden' section
        $value = $context->find('hidden');
        $buffer .= $this->section9a7fc588e5e2ac7453379d33a752316e($context, $indent, $value);
        $buffer .= ' block block_';
        $value = $this->resolveValue($context->find('type'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= ' ';
        // 'hascontrols' section
        $value = $context->find('hascontrols');
        $buffer .= $this->section12f3cb4be977f05616300fd1301c564b($context, $indent, $value);
        $buffer .= ' "
';
        $buffer .= $indent . 'id="';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" role="';
        $value = $this->resolveValue($context->find('ariarole'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" data-block="';
        $value = $this->resolveValue($context->find('type'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"
';
        // 'arialabel' section
        $value = $context->find('arialabel');
        $buffer .= $this->sectionDb14b0433b75775f6950a398f9e5ea76($context, $indent, $value);
        $buffer .= '
';
        // 'arialabel' inverted section
        $value = $context->find('arialabel');
        if (empty($value)) {
            
            $buffer .= $indent . ' ';
            // 'title' section
            $value = $context->find('title');
            $buffer .= $this->sectionA475f296584083f606e1fbb3973c6748($context, $indent, $value);
            $buffer .= ' ';
        }
        $buffer .= ' 
';
        // 'isremuiblck' section
        $value = $context->find('isremuiblck');
        $buffer .= $this->sectionE4c27cf1c91c9a8043f02a0a7a5a8ae6($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '>
';
        $buffer .= $indent . '    <div class="panel-heading ';
        // 'isremuiblck' inverted section
        $value = $context->find('isremuiblck');
        if (empty($value)) {
            
            $buffer .= 'card-block';
        }
        $buffer .= ' ">
';
        $buffer .= $indent . '        <div class="row m-0 p-0">
';
        $buffer .= $indent . '            ';
        // 'hascontrols' section
        $value = $context->find('hascontrols');
        $buffer .= $this->sectionFcf8438eeb80448ece7e62e4e857ed80($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '            ';
        // 'hascontrols' inverted section
        $value = $context->find('hascontrols');
        if (empty($value)) {
            
            $buffer .= '<div class="col-12 m-0 p-0">';
        }
        $buffer .= '
';
        // 'isremuiblck' section
        $value = $context->find('isremuiblck');
        $buffer .= $this->section005f945a4d41cecf6262ab50968b36e5($context, $indent, $value);
        // 'isremuiblck' inverted section
        $value = $context->find('isremuiblck');
        if (empty($value)) {
            
            // 'title' section
            $value = $context->find('title');
            $buffer .= $this->sectionE6a0f7daf7feb1e61f6f1b9a9f0b6925($context, $indent, $value);
        }
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            
';
        // 'hascontrols' section
        $value = $context->find('hascontrols');
        $buffer .= $this->section7460c66224103bf98c2e52f005d43e78($context, $indent, $value);
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div class="';
        // 'isremuiblck' inverted section
        $value = $context->find('isremuiblck');
        if (empty($value)) {
            
            $buffer .= 'panel-body px-20 pb-20 pt-0';
        }
        $buffer .= ' ';
        // 'dragable' section
        $value = $context->find('dragable');
        $buffer .= $this->section6d14598c61b1adbd187f8553e08a9930($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '        ';
        $value = $this->resolveValue($context->find('content'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '    </div>
';
        // 'footer' section
        $value = $context->find('footer');
        $buffer .= $this->section045bfe0df548f7af3ba0cfdab948cb44($context, $indent, $value);
        $buffer .= $indent . '        ';
        $value = $this->resolveValue($context->find('annotation'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section9a7fc588e5e2ac7453379d33a752316e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'hidden';
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
                
                $buffer .= 'hidden';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section12f3cb4be977f05616300fd1301c564b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'block_with_controls';
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
                
                $buffer .= 'block_with_controls';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6443b7c1cd72c62cb76e0217440a25a3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{{arialabel}}}';
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
                
                $value = $this->resolveValue($context->find('arialabel'), $context);
                $buffer .= $value;
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDb14b0433b75775f6950a398f9e5ea76(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' aria-label={{#quote}}{{{arialabel}}}{{/quote}} ';
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
                
                $buffer .= $indent . ' aria-label=';
                // 'quote' section
                $value = $context->find('quote');
                $buffer .= $this->section6443b7c1cd72c62cb76e0217440a25a3($context, $indent, $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA475f296584083f606e1fbb3973c6748(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' aria-labelledby="instance-{{blockinstanceid}}-header" ';
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
                
                $buffer .= ' aria-labelledby="instance-';
                $value = $this->resolveValue($context->find('blockinstanceid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '-header" ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE4c27cf1c91c9a8043f02a0a7a5a8ae6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'style="background-color: transparent;"';
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
                
                $buffer .= $indent . 'style="background-color: transparent;"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFcf8438eeb80448ece7e62e4e857ed80(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<div class="col-9 col-md-10 col-lg-10 m-0 p-0">';
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
                
                $buffer .= '<div class="col-9 col-md-10 col-lg-10 m-0 p-0">';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section90e19e5044ccafd424ccfa82799fcd61(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <h4 id="instance-{{blockinstanceid}}-header" class="p-20 m-0 wdm-block-title" title="{{{title}}}">{{{title}}}</h4>
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
                
                $buffer .= $indent . '                            <h4 id="instance-';
                $value = $this->resolveValue($context->find('blockinstanceid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '-header" class="p-20 m-0 wdm-block-title" title="';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= $value;
                $buffer .= '">';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= $value;
                $buffer .= '</h4>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section38a25e7776853b4c6334f894072658f2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        {{#title}}
                            <h4 id="instance-{{blockinstanceid}}-header" class="p-20 m-0 wdm-block-title" title="{{{title}}}">{{{title}}}</h4>
                        {{/title}}
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
                
                // 'title' section
                $value = $context->find('title');
                $buffer .= $this->section90e19e5044ccafd424ccfa82799fcd61($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section005f945a4d41cecf6262ab50968b36e5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    {{#hascontrols}}
                        {{#title}}
                            <h4 id="instance-{{blockinstanceid}}-header" class="p-20 m-0 wdm-block-title" title="{{{title}}}">{{{title}}}</h4>
                        {{/title}}
                    {{/hascontrols}}
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
                
                // 'hascontrols' section
                $value = $context->find('hascontrols');
                $buffer .= $this->section38a25e7776853b4c6334f894072658f2($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE6a0f7daf7feb1e61f6f1b9a9f0b6925(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <h4 id="instance-{{blockinstanceid}}-header" class="p-20 m-0 wdm-block-title"  title="{{{title}}}">{{{title}}}</h4>
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
                
                $buffer .= $indent . '                        <h4 id="instance-';
                $value = $this->resolveValue($context->find('blockinstanceid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '-header" class="p-20 m-0 wdm-block-title"  title="';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= $value;
                $buffer .= '">';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= $value;
                $buffer .= '</h4>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7460c66224103bf98c2e52f005d43e78(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="col-3 col-lg-2 col-md-2 mt-10">
                <div class="block-controls header float-right">
                {{{controls}}}
                </div>
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
                
                $buffer .= $indent . '            <div class="col-3 col-lg-2 col-md-2 mt-10">
';
                $buffer .= $indent . '                <div class="block-controls header float-right">
';
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->find('controls'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6d14598c61b1adbd187f8553e08a9930(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'drag';
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
                
                $buffer .= 'drag';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section045bfe0df548f7af3ba0cfdab948cb44(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="panel-footer border-top-0">{{{footer}}}</div>
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
                
                $buffer .= $indent . '    <div class="panel-footer border-top-0">';
                $value = $this->resolveValue($context->find('footer'), $context);
                $buffer .= $value;
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
