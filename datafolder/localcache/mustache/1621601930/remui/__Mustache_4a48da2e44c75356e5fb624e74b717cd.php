<?php

class __Mustache_4a48da2e44c75356e5fb624e74b717cd extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="dropdown d-inline">
';
        $buffer .= $indent . '    <!-- <a href="#" class="dropdown-toggle" id="dropdown-';
        $value = $this->resolveValue($context->find('instance'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" title="';
        $value = $this->resolveValue($context->find('title'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">';
        $value = $this->resolveValue($context->find('actiontext'), $context);
        $buffer .= $value;
        $value = $this->resolveValue($context->find('menutrigger'), $context);
        $buffer .= $value;
        // 'icon' section
        $value = $context->find('icon');
        $buffer .= $this->section606e6621754ae76959f7024860b353d5($context, $indent, $value);
        // 'rawicon' section
        $value = $context->find('rawicon');
        $buffer .= $this->sectionFb8e8ddc9ca3702110812af7d06781d6($context, $indent, $value);
        // 'menutrigger' section
        $value = $context->find('menutrigger');
        $buffer .= $this->sectionB2b7dd14b5febc547904549ba2729da2($context, $indent, $value);
        $buffer .= '</a> -->
';
        $buffer .= $indent . '    <button type="button" class="btn btn-inverse dropdown-toggle" id="dropdown-';
        $value = $this->resolveValue($context->find('instance'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" title="';
        $value = $this->resolveValue($context->find('title'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" role="button" data-toggle="dropdown" data-original-title="Settings" aria-haspopup="true" aria-expanded="false" data-flip="false">
';
        $buffer .= $indent . '        <i class="icon fa fa-cog" aria-hidden="true"></i>
';
        $buffer .= $indent . '        ';
        $value = $this->resolveValue($context->find('actiontext'), $context);
        $buffer .= $value;
        $value = $this->resolveValue($context->find('menutrigger'), $context);
        $buffer .= $value;
        // 'menutrigger' section
        $value = $context->find('menutrigger');
        $buffer .= $this->sectionB2b7dd14b5febc547904549ba2729da2($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '    </button>
';
        // 'secondary' section
        $value = $context->find('secondary');
        $buffer .= $this->section04dc75e34520ffabc4f944ed86f0e28e($context, $indent, $value);
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section742f292d21ddb913fc8403f697e86cab(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{key}},{{component}},{{title}}';
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
                
                $value = $this->resolveValue($context->find('key'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ',';
                $value = $this->resolveValue($context->find('component'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ',';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section606e6621754ae76959f7024860b353d5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{#pix}}{{key}},{{component}},{{title}}{{/pix}}';
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
                
                // 'pix' section
                $value = $context->find('pix');
                $buffer .= $this->section742f292d21ddb913fc8403f697e86cab($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFb8e8ddc9ca3702110812af7d06781d6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{{.}}}';
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
                
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= $value;
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB2b7dd14b5febc547904549ba2729da2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<b class="caret"></b>';
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
                
                $buffer .= '<b class="caret"></b>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAd20463c348991d5bbd2fb97358ea7c0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' {{name}}="{{value}}"';
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
                
                $buffer .= ' ';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '="';
                $value = $this->resolveValue($context->find('value'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE1aa2fd25fafc048534b66e7545a9f28(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{value}}';
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
                
                $value = $this->resolveValue($context->find('value'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA0c6b3ed95b1e8becd1c3df3d7a55883(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{name}}={{#quote}}{{value}}{{/quote}}';
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
                
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '=';
                // 'quote' section
                $value = $context->find('quote');
                $buffer .= $this->sectionE1aa2fd25fafc048534b66e7545a9f28($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD60def43e2872f03f0ef6a4a082400b1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'aria-labelledby="actionmenuaction-{{instance}}"';
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
                
                $buffer .= 'aria-labelledby="actionmenuaction-';
                $value = $this->resolveValue($context->find('instance'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCd059ca9cc57dddd453569df0f3746b8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<span class="menu-action-text" id="actionmenuaction-{{instance}}">{{{text}}}</span>';
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
                
                $buffer .= '<span class="menu-action-text" id="actionmenuaction-';
                $value = $this->resolveValue($context->find('instance'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->find('text'), $context);
                $buffer .= $value;
                $buffer .= '</span>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5a9ad31e42edcee31850d724db283e34(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<a href="{{url}}" class="dropdown-item {{classes}}" {{#attributes}}{{name}}={{#quote}}{{value}}{{/quote}}{{/attributes}} {{#showtext}}aria-labelledby="actionmenuaction-{{instance}}"{{/showtext}}>{{#icon}}{{#pix}}{{key}},{{component}},{{title}}{{/pix}}{{/icon}}{{#showtext}}<span class="menu-action-text" id="actionmenuaction-{{instance}}">{{{text}}}</span>{{/showtext}}</a>';
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
                
                $buffer .= '<a href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="dropdown-item ';
                $value = $this->resolveValue($context->find('classes'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" ';
                // 'attributes' section
                $value = $context->find('attributes');
                $buffer .= $this->sectionA0c6b3ed95b1e8becd1c3df3d7a55883($context, $indent, $value);
                $buffer .= ' ';
                // 'showtext' section
                $value = $context->find('showtext');
                $buffer .= $this->sectionD60def43e2872f03f0ef6a4a082400b1($context, $indent, $value);
                $buffer .= '>';
                // 'icon' section
                $value = $context->find('icon');
                $buffer .= $this->section606e6621754ae76959f7024860b353d5($context, $indent, $value);
                // 'showtext' section
                $value = $context->find('showtext');
                $buffer .= $this->sectionCd059ca9cc57dddd453569df0f3746b8($context, $indent, $value);
                $buffer .= '</a>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5dcadd4c046d6ae7246de01cd0536384(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<div class="dropdown-divider"></div>';
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
                
                $buffer .= '<div class="dropdown-divider"></div>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0b38f30ec20e7d43a88b08ccaa46d477(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{#actionmenulink}}<a href="{{url}}" class="dropdown-item {{classes}}" {{#attributes}}{{name}}={{#quote}}{{value}}{{/quote}}{{/attributes}} {{#showtext}}aria-labelledby="actionmenuaction-{{instance}}"{{/showtext}}>{{#icon}}{{#pix}}{{key}},{{component}},{{title}}{{/pix}}{{/icon}}{{#showtext}}<span class="menu-action-text" id="actionmenuaction-{{instance}}">{{{text}}}</span>{{/showtext}}</a>{{/actionmenulink}}
                {{#actionmenufiller}}<div class="dropdown-divider"></div>{{/actionmenufiller}}
                {{^actionmenulink}}{{^actionmenufiller}}<div class="dropdown-item d-flex">{{> core/action_menu_item }}</div>{{/actionmenufiller}}{{/actionmenulink}}
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
                
                $buffer .= $indent . '                ';
                // 'actionmenulink' section
                $value = $context->find('actionmenulink');
                $buffer .= $this->section5a9ad31e42edcee31850d724db283e34($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                ';
                // 'actionmenufiller' section
                $value = $context->find('actionmenufiller');
                $buffer .= $this->section5dcadd4c046d6ae7246de01cd0536384($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                ';
                // 'actionmenulink' inverted section
                $value = $context->find('actionmenulink');
                if (empty($value)) {
                    
                    // 'actionmenufiller' inverted section
                    $value = $context->find('actionmenufiller');
                    if (empty($value)) {
                        
                        $buffer .= '<div class="dropdown-item d-flex">';
                        if ($partial = $this->mustache->loadPartial('core/action_menu_item')) {
                            $buffer .= $partial->renderInternal($context);
                        }
                        $buffer .= '</div>';
                    }
                }
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section04dc75e34520ffabc4f944ed86f0e28e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="dropdown-menu dropdown-menu-right {{classes}}"{{#attributes}} {{name}}="{{value}}"{{/attributes}}>
            {{#items}}
                {{#actionmenulink}}<a href="{{url}}" class="dropdown-item {{classes}}" {{#attributes}}{{name}}={{#quote}}{{value}}{{/quote}}{{/attributes}} {{#showtext}}aria-labelledby="actionmenuaction-{{instance}}"{{/showtext}}>{{#icon}}{{#pix}}{{key}},{{component}},{{title}}{{/pix}}{{/icon}}{{#showtext}}<span class="menu-action-text" id="actionmenuaction-{{instance}}">{{{text}}}</span>{{/showtext}}</a>{{/actionmenulink}}
                {{#actionmenufiller}}<div class="dropdown-divider"></div>{{/actionmenufiller}}
                {{^actionmenulink}}{{^actionmenufiller}}<div class="dropdown-item d-flex">{{> core/action_menu_item }}</div>{{/actionmenufiller}}{{/actionmenulink}}
            {{/items}}
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
                
                $buffer .= $indent . '        <div class="dropdown-menu dropdown-menu-right ';
                $value = $this->resolveValue($context->find('classes'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"';
                // 'attributes' section
                $value = $context->find('attributes');
                $buffer .= $this->sectionAd20463c348991d5bbd2fb97358ea7c0($context, $indent, $value);
                $buffer .= '>
';
                // 'items' section
                $value = $context->find('items');
                $buffer .= $this->section0b38f30ec20e7d43a88b08ccaa46d477($context, $indent, $value);
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
