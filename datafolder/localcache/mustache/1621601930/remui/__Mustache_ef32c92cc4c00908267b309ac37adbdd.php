<?php

class __Mustache_ef32c92cc4c00908267b309ac37adbdd extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="form-group row ';
        // 'error' section
        $value = $context->find('error');
        $buffer .= $this->section4d4b829e8a762a460d7710f0a2273a46($context, $indent, $value);
        $buffer .= ' fitem ';
        // 'element.emptylabel' section
        $value = $context->findDot('element.emptylabel');
        $buffer .= $this->sectionFb944b85e4a412b1c1416b4d269c7c21($context, $indent, $value);
        $buffer .= ' ';
        // 'advanced' section
        $value = $context->find('advanced');
        $buffer .= $this->sectionB2a3879159edb3a7a33a1d8394a2c556($context, $indent, $value);
        $buffer .= ' ';
        $value = $this->resolveValue($context->findDot('element.extraclasses'), $context);
        $buffer .= $value;
        $buffer .= '" ';
        // 'element.groupname' section
        $value = $context->findDot('element.groupname');
        $buffer .= $this->sectionE32dd8819580c2040e2441120199ff04($context, $indent, $value);
        $buffer .= '>
';
        $buffer .= $indent . '    <div class="col-md-3">
';
        $buffer .= $indent . '        <span class="pull-xs-right text-nowrap">
';
        $buffer .= $indent . '            ';
        // 'required' section
        $value = $context->find('required');
        $buffer .= $this->section55a5d13dc046825f02136edbc9072d9a($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '            ';
        // 'advanced' section
        $value = $context->find('advanced');
        $buffer .= $this->sectionDff86beb7df6f52055c982374f1eb239($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '            ';
        $value = $this->resolveValue($context->find('helpbutton'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '        </span>
';
        // 'element.staticlabel' inverted section
        $value = $context->findDot('element.staticlabel');
        if (empty($value)) {
            
            $buffer .= $indent . '        <label class="col-form-label d-inline ';
            // 'element.hiddenlabel' section
            $value = $context->findDot('element.hiddenlabel');
            $buffer .= $this->sectionBd3e0eae730f027ebaa2c5d8144fd11d($context, $indent, $value);
            $buffer .= '" for="';
            $value = $this->resolveValue($context->findDot('element.id'), $context);
            $buffer .= call_user_func($this->mustache->getEscape(), $value);
            $buffer .= '">
';
            $buffer .= $indent . '            ';
            $value = $this->resolveValue($context->find('label'), $context);
            $buffer .= $value;
            $buffer .= '
';
            $buffer .= $indent . '        </label>
';
        }
        // 'element.staticlabel' section
        $value = $context->findDot('element.staticlabel');
        $buffer .= $this->section6b7fe2d3db6d79dcca06e3f896ec95c5($context, $indent, $value);
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div class="col-md-9 form-inline felement" data-fieldtype="';
        $value = $this->resolveValue($context->findDot('element.type'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">
';
        $blockFunction = $context->findInBlock('element');
        if (is_callable($blockFunction)) {
            $buffer .= call_user_func($blockFunction, $context);
        } else {
            $buffer .= $indent . '            <!-- Element goes here -->
';
        }
        $buffer .= $indent . '        <div class="form-control-feedback" id="id_error_';
        $value = $this->resolveValue($context->findDot('element.name'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" ';
        // 'error' inverted section
        $value = $context->find('error');
        if (empty($value)) {
            
            $buffer .= ' style="display: none;"';
        }
        $buffer .= '>
';
        $buffer .= $indent . '            ';
        $value = $this->resolveValue($context->find('error'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';
        // 'js' section
        $value = $context->find('js');
        $buffer .= $this->sectionC0573f7bc977debaccc6c190edc974e8($context, $indent, $value);

        return $buffer;
    }

    private function section4d4b829e8a762a460d7710f0a2273a46(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'has-danger';
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
                
                $buffer .= 'has-danger';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFb944b85e4a412b1c1416b4d269c7c21(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'femptylabel';
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
                
                $buffer .= 'femptylabel';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB2a3879159edb3a7a33a1d8394a2c556(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'advanced';
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
                
                $buffer .= 'advanced';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE32dd8819580c2040e2441120199ff04(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'data-groupname="{{.}}"';
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
                
                $buffer .= 'data-groupname="';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5197bd4c78ccebd47c9f052795fcb4e4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'required';
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
                
                $buffer .= 'required';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1a62044b8b32f10f428bdf36250d9aac(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'req, core, {{#str}}required{{/str}}';
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
                
                $buffer .= 'req, core, ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section5197bd4c78ccebd47c9f052795fcb4e4($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section55a5d13dc046825f02136edbc9072d9a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<abbr class="initialism text-danger" title="{{#str}}required{{/str}}">{{#pix}}req, core, {{#str}}required{{/str}}{{/pix}}</abbr>';
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
                
                $buffer .= '<abbr class="initialism text-danger" title="';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section5197bd4c78ccebd47c9f052795fcb4e4($context, $indent, $value);
                $buffer .= '">';
                // 'pix' section
                $value = $context->find('pix');
                $buffer .= $this->section1a62044b8b32f10f428bdf36250d9aac($context, $indent, $value);
                $buffer .= '</abbr>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDff86beb7df6f52055c982374f1eb239(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<abbr class="initialism text-info" title="{{#str}}advanced{{/str}}">!</abbr>';
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
                
                $buffer .= '<abbr class="initialism text-info" title="';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionB2a3879159edb3a7a33a1d8394a2c556($context, $indent, $value);
                $buffer .= '">!</abbr>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBd3e0eae730f027ebaa2c5d8144fd11d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'sr-only';
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
                
                $buffer .= 'sr-only';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6b7fe2d3db6d79dcca06e3f896ec95c5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <span class="col-form-label d-inline-block {{#element.hiddenlabel}}sr-only{{/element.hiddenlabel}}">
            {{{label}}}
        </span>
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
                
                $buffer .= $indent . '        <span class="col-form-label d-inline-block ';
                // 'element.hiddenlabel' section
                $value = $context->findDot('element.hiddenlabel');
                $buffer .= $this->sectionBd3e0eae730f027ebaa2c5d8144fd11d($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->find('label'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '        </span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD51d59cf174abfd59abe29508608fc20(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{element.id}}';
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
                
                $value = $this->resolveValue($context->findDot('element.id'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC0573f7bc977debaccc6c190edc974e8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'theme_remui/form-display-errors\'], function(module) {
    module.enhance({{#quote}}{{element.id}}{{/quote}});
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
                
                $buffer .= $indent . 'require([\'theme_remui/form-display-errors\'], function(module) {
';
                $buffer .= $indent . '    module.enhance(';
                // 'quote' section
                $value = $context->find('quote');
                $buffer .= $this->sectionD51d59cf174abfd59abe29508608fc20($context, $indent, $value);
                $buffer .= ');
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
