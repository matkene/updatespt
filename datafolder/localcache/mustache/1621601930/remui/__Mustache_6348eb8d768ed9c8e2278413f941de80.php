<?php

class __Mustache_6348eb8d768ed9c8e2278413f941de80 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $this->resolveValue($context->findDot('output.doctype'), $context);
        $buffer .= $indent . $value;
        $buffer .= '
';
        $buffer .= $indent . '<html ';
        $value = $this->resolveValue($context->findDot('output.htmlattributes'), $context);
        $buffer .= $value;
        $buffer .= '>
';
        $buffer .= $indent . '<head>
';
        $buffer .= $indent . '    <title>';
        $value = $this->resolveValue($context->findDot('output.page_title'), $context);
        $buffer .= $value;
        $buffer .= '</title>
';
        $buffer .= $indent . '    <link rel="shortcut icon" href="';
        $value = $this->resolveValue($context->findDot('output.favicon'), $context);
        $buffer .= $value;
        $buffer .= '" />
';
        $buffer .= $indent . '    ';
        $value = $this->resolveValue($context->findDot('output.standard_head_html'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '    <meta charset="utf-8">
';
        $buffer .= $indent . '    <meta http-equiv="X-UA-Compatible" content="IE=edge">
';
        $buffer .= $indent . '    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
';
        $buffer .= $indent . '</head>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<body ';
        $value = $this->resolveValue($context->find('bodyattributes'), $context);
        $buffer .= $value;
        $buffer .= ' data-isfolded="';
        $value = $this->resolveValue($context->find('isfolded'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div class="edwiser-notice position-fixed mt-10" style="display: none; z-index: 1500;left: 50%;transform: translateX(-50%);" role="alert">
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    ';
        $value = $this->resolveValue($context->findDot('output.standard_top_of_body_html'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '
';
        if ($partial = $this->mustache->loadPartial('theme_remui/header')) {
            $buffer .= $partial->renderInternal($context, $indent . '    ');
        }
        if ($partial = $this->mustache->loadPartial('theme_remui/sidebar')) {
            $buffer .= $partial->renderInternal($context, $indent . '    ');
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div class="page">
';
        $buffer .= $indent . '        <div class="floating-buttons page-settings" data-html2canvas-ignore>
';
        $buffer .= $indent . '            <button id="gotop" type="button" class=" btn btn-floating btn-primary ';
        // 'hasblock' section
        $value = $context->find('hasblock');
        $buffer .= $this->section382ff3bfba89fe72450348c0f262593a($context, $indent, $value);
        $buffer .= ' d-none align-items-center justify-content-center" data-toggle="tooltip" data-original-title="Go Top" data-placement="left" data-trigger="hover">
';
        $buffer .= $indent . '                <i class="fa fa-chevron-up" aria-hidden="true"></i>
';
        $buffer .= $indent . '            </button>
';
        // 'floating_buttons' section
        $value = $context->find('floating_buttons');
        $buffer .= $this->section390c2bba21cdaaa099783d3f040821d6($context, $indent, $value);
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        ';
        $value = $this->resolveValue($context->findDot('output.render_site_announcement'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '         <!-- blocks aside -->
';
        // 'init_rightsidebar' section
        $value = $context->find('init_rightsidebar');
        $buffer .= $this->section672d4e3b62623fd67356fbad5c4502e7($context, $indent, $value);
        $buffer .= $indent . '        <!-- end blocks aside -->
';

        return $buffer;
    }

    private function section382ff3bfba89fe72450348c0f262593a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'hasblock';
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
                
                $buffer .= 'hasblock';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section390c2bba21cdaaa099783d3f040821d6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{{floating_buttons}}}
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
                $value = $this->resolveValue($context->find('floating_buttons'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFd6ab0d4fca484d7fceb9f7650c40216(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' opencustom ';
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
                
                $buffer .= ' opencustom ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD8e10024ebe017c8f8cbc19eb3d88af7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <span class="unread-count-sidebarbutton font-size-10 badge badge-important animation-shake position-absolute" style="top: -20px;left: -10px;">{{unread_request_count}}</span>
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
                
                $buffer .= $indent . '                            <span class="unread-count-sidebarbutton font-size-10 badge badge-important animation-shake position-absolute" style="top: -20px;left: -10px;">';
                $value = $this->resolveValue($context->find('unread_request_count'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section32fa4b93084feebb584d725d275eb9cf(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <span class="unread-count-sidebarbutton font-size-10 badge badge-important animation-shake position-absolute" style="top: -5px;left: -5px;">{{unread_request_count}}</span>
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
                
                $buffer .= $indent . '                            <span class="unread-count-sidebarbutton font-size-10 badge badge-important animation-shake position-absolute" style="top: -5px;left: -5px;">';
                $value = $this->resolveValue($context->find('unread_request_count'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0ae4b3440846568ec79954f7fc9b4ea0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'unpinsidebar, theme_remui';
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
                
                $buffer .= 'unpinsidebar, theme_remui';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6c672f2910424e69ca04ee06a3ca5c53(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{#str}}unpinsidebar, theme_remui{{/str}}';
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
                
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section0ae4b3440846568ec79954f7fc9b4ea0($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2c94a430a4fc5676a9997c23bcab7f08(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'pinsidebar, theme_remui';
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
                
                $buffer .= 'pinsidebar, theme_remui';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE993168e99f0c58beb74758419f2549d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    {{^disablesidebarpinning}}
                        <div class="page-aside-pin">
                            <i class="fa fa-thumb-tack"  title="{{#pin_aside}}{{#str}}unpinsidebar, theme_remui{{/str}}{{/pin_aside}}{{^pin_aside}}{{#str}}pinsidebar, theme_remui{{/str}}{{/pin_aside}}" aria-hidden="true"></i>
                        </div>
                    {{/disablesidebarpinning}}
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
                
                // 'disablesidebarpinning' inverted section
                $value = $context->find('disablesidebarpinning');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                        <div class="page-aside-pin">
';
                    $buffer .= $indent . '                            <i class="fa fa-thumb-tack"  title="';
                    // 'pin_aside' section
                    $value = $context->find('pin_aside');
                    $buffer .= $this->section6c672f2910424e69ca04ee06a3ca5c53($context, $indent, $value);
                    // 'pin_aside' inverted section
                    $value = $context->find('pin_aside');
                    if (empty($value)) {
                        
                        // 'str' section
                        $value = $context->find('str');
                        $buffer .= $this->section2c94a430a4fc5676a9997c23bcab7f08($context, $indent, $value);
                    }
                    $buffer .= '" aria-hidden="true"></i>
';
                    $buffer .= $indent . '                        </div>
';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section81d288394f3947229e1ec1950b7de5e9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <li class="nav-item">
                                    <a class="nav-link active show" data-toggle="tab" href="#sidebar-blocks" role="tab" aria-selected="false">
                                    <i class="icon fa fa-th-large" aria-hidden="true"></i>
                                    </a>
                                </li>
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
                
                $buffer .= $indent . '                                <li class="nav-item">
';
                $buffer .= $indent . '                                    <a class="nav-link active show" data-toggle="tab" href="#sidebar-blocks" role="tab" aria-selected="false">
';
                $buffer .= $indent . '                                    <i class="icon fa fa-th-large" aria-hidden="true"></i>
';
                $buffer .= $indent . '                                    </a>
';
                $buffer .= $indent . '                                </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF3e503508a14742d313902176d7358b3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <li class="nav-item {{^hasblocks}}{{^messagetoggle}}active show{{/messagetoggle}}{{/hasblocks}}">
                                    <a class="nav-link" data-toggle="tab" href="#sidebar-settings" role="tab" aria-selected="false">
                                    <i class="icon fa-paint-brush" aria-hidden="true"></i>
                                    </a>
                                </li>
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
                
                $buffer .= $indent . '                                <li class="nav-item ';
                // 'hasblocks' inverted section
                $value = $context->find('hasblocks');
                if (empty($value)) {
                    
                    // 'messagetoggle' inverted section
                    $value = $context->find('messagetoggle');
                    if (empty($value)) {
                        
                        $buffer .= 'active show';
                    }
                }
                $buffer .= '">
';
                $buffer .= $indent . '                                    <a class="nav-link" data-toggle="tab" href="#sidebar-settings" role="tab" aria-selected="false">
';
                $buffer .= $indent . '                                    <i class="icon fa-paint-brush" aria-hidden="true"></i>
';
                $buffer .= $indent . '                                    </a>
';
                $buffer .= $indent . '                                </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section561f41effca6acc0bcac06b8ac836eb6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <div class="tab-pane fade p-0 active show" id="sidebar-blocks">
                                    {{{ sidepreblocks }}}
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
                
                $buffer .= $indent . '                                <div class="tab-pane fade p-0 active show" id="sidebar-blocks">
';
                $buffer .= $indent . '                                    ';
                $value = $this->resolveValue($context->find('sidepreblocks'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section338f4203957921d59158c45165d51e79(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    <div class="tab-pane fade px-15 py-15 {{^hasblocks}}active show{{/hasblocks}}" id="sidebar-message">
                                        {{{messagedrawer}}}
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
                
                $buffer .= $indent . '                                    <div class="tab-pane fade px-15 py-15 ';
                // 'hasblocks' inverted section
                $value = $context->find('hasblocks');
                if (empty($value)) {
                    
                    $buffer .= 'active show';
                }
                $buffer .= '" id="sidebar-message">
';
                $buffer .= $indent . '                                        ';
                $value = $this->resolveValue($context->find('messagedrawer'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9fd6420047662cb5fac88ccf89ba536e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'navbartype, theme_remui';
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
                
                $buffer .= 'navbartype, theme_remui';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7749362ecb5f8c27fe0f43d5e969d66c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' checked ';
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
                
                $buffer .= ' checked ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEb0b000ca9923c7ed9a39e8366d8d417(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' applysitecolor, theme_remui ';
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
                
                $buffer .= ' applysitecolor, theme_remui ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB2404512f6b426eb0644ec48aefd1c9b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'sidebarcolor, theme_remui';
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
                
                $buffer .= 'sidebarcolor, theme_remui';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE2de03f64d99824ea3bbaea504b5adec(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'sitecolor, theme_remui';
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
                
                $buffer .= 'sitecolor, theme_remui';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section808efc6c554fd6842ad300275d70cc85(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'display:inherit;';
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
                
                $buffer .= 'display:inherit;';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3392c4b9269d96a1a4379ccef49fc210(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' applysitewide, theme_remui ';
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
                
                $buffer .= ' applysitewide, theme_remui ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2516e4ec5e71b88fa87acd77119fbdfc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <div class="tab-pane fade  {{^hasblocks}}{{^messagedrawer}}active show{{/messagedrawer}}{{/hasblocks}}" id="sidebar-settings">
                                    <div class="site-skintools">
                                        <!-- navbr type -->
                                        <h5 class="site-skintools-title">{{#str}}navbartype, theme_remui{{/str}}</h5>
                                        <div id="skintoolsNavbar">
                                            <div class="checkbox-custom checkbox-inverse">
                                            <input id="skintoolsNavbar-inverse" name="navbartype" type="checkbox" value="navbar-inverse" {{# navbarinverse }} checked {{/ navbarinverse }}><label for="skintoolsNavbar-inverse">{{#str}} applysitecolor, theme_remui {{/str}}</label>
                                            </div>
                                        </div>

                                        <!-- sidebar color -->
                                        <div id="skintoolsSidebar">
                                            <h5 class="site-skintools-title">{{#str}}sidebarcolor, theme_remui{{/str}}</h5>
                                            <div class="radio-custom radio-dark">
                                            <input id="skintoolsSidebar-dark" type="radio" name="skintoolsSidebar" value="" checked><label for="skintoolsSidebar-dark">Dark</label>
                                            </div>
                                            <div class="radio-custom radio-light">
                                                <input id="skintoolsSidebar-light" type="radio" name="skintoolsSidebar" value="site-menubar-light" {{# sidebarcolor }} checked {{/sidebarcolor }}><label for="skintoolsSidebar-light">Light</label>
                                            </div>
                                        </div>

                                        <!-- site color -->
                                        <div id="skintoolsSiteColor">
                                            <h5 class="site-skintools-title">{{#str}}sitecolor, theme_remui{{/str}}</h5>
                                            <div class="radio-custom radio-primary">
                                            <input id="skintoolsNavbar-primary" name="skintoolsNavbar" type="radio" value="primary" {{# primary }} checked {{/ primary }}><label for="skintoolsNavbar-primary">primary</label>
                                            </div>
                                            <div class="radio-custom radio-brown">
                                            <input id="skintoolsNavbar-brown" name="skintoolsNavbar" type="radio" value="brown" {{# brown }} checked {{/ brown }}><label for="skintoolsNavbar-brown">brown</label>
                                            </div>
                                            <div class="radio-custom radio-cyan">
                                            <input id="skintoolsNavbar-cyan" name="skintoolsNavbar" type="radio" value="cyan" {{# cyan }} checked {{/ cyan }}><label for="skintoolsNavbar-cyan">cyan</label>
                                            </div>
                                            <div class="radio-custom radio-green">
                                            <input id="skintoolsNavbar-green" name="skintoolsNavbar" type="radio" value="green" {{# green }} checked {{/ green }}><label for="skintoolsNavbar-green">green</label>
                                            </div>
                                            <div class="radio-custom radio-grey">
                                            <input id="skintoolsNavbar-grey" name="skintoolsNavbar" type="radio" value="grey" {{# grey }} checked {{/ grey }}><label for="skintoolsNavbar-grey">grey</label>
                                            </div>
                                            <div class="radio-custom radio-indigo">
                                            <input id="skintoolsNavbar-indigo" name="skintoolsNavbar" type="radio" value="indigo" {{# indigo }} checked {{/ indigo }}><label for="skintoolsNavbar-indigo">indigo</label>
                                            </div>
                                            <div class="radio-custom radio-orange">
                                            <input id="skintoolsNavbar-orange" name="skintoolsNavbar" type="radio" value="orange" {{# orange }} checked {{/ orange }}><label for="skintoolsNavbar-orange">orange</label>
                                            </div>
                                            <div class="radio-custom radio-pink">
                                            <input id="skintoolsNavbar-pink" name="skintoolsNavbar" type="radio" value="pink" {{# pink }} checked {{/ pink }}><label for="skintoolsNavbar-pink">pink</label>
                                            </div>
                                            <div class="radio-custom radio-purple">
                                            <input id="skintoolsNavbar-purple" name="skintoolsNavbar" type="radio" value="purple" {{# purple }} checked {{/ purple }}><label for="skintoolsNavbar-purple">purple</label>
                                            </div>
                                            <div class="radio-custom radio-red">
                                            <input id="skintoolsNavbar-red" name="skintoolsNavbar" type="radio" value="red" {{# red }} checked {{/ red }}><label for="skintoolsNavbar-red">red</label>
                                            </div>
                                            <div class="radio-custom radio-teal">
                                            <input id="skintoolsNavbar-teal" name="skintoolsNavbar" type="radio" value="teal" {{# teal }} checked {{/ teal }}><label for="skintoolsNavbar-teal">teal</label>
                                            </div>
                                            <!--<div class="radio-custom radio-yellow">
                                            <input id="skintoolsNavbar-yellow" name="skintoolsNavbar" type="radio" value="yellow" {{# yellow }} checked {{/ yellow }}><label for="skintoolsNavbar-yellow">yellow</label>
                                            </div> -->
                                            <div class="radio-custom radio-customcolor">
                                            <input id="skintoolsNavbar-customcolor" name="skintoolsNavbar" type="radio" value="customcolor" {{# customcolor }} checked {{/ customcolor }}><label for="skintoolsNavbar-customcolor">Custom Color</label>
                                            </div>
                                        </div>

                                        <!-- site color picker-->
                                        <form method="post" class="text-center">
                                            <input type="color" name="customcolor" class="site-colorpicker w-full bg-white border-0 h-40" style="display:none; {{# customcolor }}display:inherit;{{/ customcolor }}" value="#62a8ea">
                                            <input type="hidden" name="choosen-color">
                                            <input type="hidden" name="sesskey" value="{{ sesskey }}">
                                            <input type="submit" name="applysitewidecolor" class="btn btn-primary my-10" value="{{#str}} applysitewide, theme_remui {{/ str }}">
                                        </form>
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
                
                $buffer .= $indent . '                                <div class="tab-pane fade  ';
                // 'hasblocks' inverted section
                $value = $context->find('hasblocks');
                if (empty($value)) {
                    
                    // 'messagedrawer' inverted section
                    $value = $context->find('messagedrawer');
                    if (empty($value)) {
                        
                        $buffer .= 'active show';
                    }
                }
                $buffer .= '" id="sidebar-settings">
';
                $buffer .= $indent . '                                    <div class="site-skintools">
';
                $buffer .= $indent . '                                        <!-- navbr type -->
';
                $buffer .= $indent . '                                        <h5 class="site-skintools-title">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section9fd6420047662cb5fac88ccf89ba536e($context, $indent, $value);
                $buffer .= '</h5>
';
                $buffer .= $indent . '                                        <div id="skintoolsNavbar">
';
                $buffer .= $indent . '                                            <div class="checkbox-custom checkbox-inverse">
';
                $buffer .= $indent . '                                            <input id="skintoolsNavbar-inverse" name="navbartype" type="checkbox" value="navbar-inverse" ';
                // 'navbarinverse' section
                $value = $context->find('navbarinverse');
                $buffer .= $this->section7749362ecb5f8c27fe0f43d5e969d66c($context, $indent, $value);
                $buffer .= '><label for="skintoolsNavbar-inverse">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionEb0b000ca9923c7ed9a39e8366d8d417($context, $indent, $value);
                $buffer .= '</label>
';
                $buffer .= $indent . '                                            </div>
';
                $buffer .= $indent . '                                        </div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '                                        <!-- sidebar color -->
';
                $buffer .= $indent . '                                        <div id="skintoolsSidebar">
';
                $buffer .= $indent . '                                            <h5 class="site-skintools-title">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionB2404512f6b426eb0644ec48aefd1c9b($context, $indent, $value);
                $buffer .= '</h5>
';
                $buffer .= $indent . '                                            <div class="radio-custom radio-dark">
';
                $buffer .= $indent . '                                            <input id="skintoolsSidebar-dark" type="radio" name="skintoolsSidebar" value="" checked><label for="skintoolsSidebar-dark">Dark</label>
';
                $buffer .= $indent . '                                            </div>
';
                $buffer .= $indent . '                                            <div class="radio-custom radio-light">
';
                $buffer .= $indent . '                                                <input id="skintoolsSidebar-light" type="radio" name="skintoolsSidebar" value="site-menubar-light" ';
                // 'sidebarcolor' section
                $value = $context->find('sidebarcolor');
                $buffer .= $this->section7749362ecb5f8c27fe0f43d5e969d66c($context, $indent, $value);
                $buffer .= '><label for="skintoolsSidebar-light">Light</label>
';
                $buffer .= $indent . '                                            </div>
';
                $buffer .= $indent . '                                        </div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '                                        <!-- site color -->
';
                $buffer .= $indent . '                                        <div id="skintoolsSiteColor">
';
                $buffer .= $indent . '                                            <h5 class="site-skintools-title">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionE2de03f64d99824ea3bbaea504b5adec($context, $indent, $value);
                $buffer .= '</h5>
';
                $buffer .= $indent . '                                            <div class="radio-custom radio-primary">
';
                $buffer .= $indent . '                                            <input id="skintoolsNavbar-primary" name="skintoolsNavbar" type="radio" value="primary" ';
                // 'primary' section
                $value = $context->find('primary');
                $buffer .= $this->section7749362ecb5f8c27fe0f43d5e969d66c($context, $indent, $value);
                $buffer .= '><label for="skintoolsNavbar-primary">primary</label>
';
                $buffer .= $indent . '                                            </div>
';
                $buffer .= $indent . '                                            <div class="radio-custom radio-brown">
';
                $buffer .= $indent . '                                            <input id="skintoolsNavbar-brown" name="skintoolsNavbar" type="radio" value="brown" ';
                // 'brown' section
                $value = $context->find('brown');
                $buffer .= $this->section7749362ecb5f8c27fe0f43d5e969d66c($context, $indent, $value);
                $buffer .= '><label for="skintoolsNavbar-brown">brown</label>
';
                $buffer .= $indent . '                                            </div>
';
                $buffer .= $indent . '                                            <div class="radio-custom radio-cyan">
';
                $buffer .= $indent . '                                            <input id="skintoolsNavbar-cyan" name="skintoolsNavbar" type="radio" value="cyan" ';
                // 'cyan' section
                $value = $context->find('cyan');
                $buffer .= $this->section7749362ecb5f8c27fe0f43d5e969d66c($context, $indent, $value);
                $buffer .= '><label for="skintoolsNavbar-cyan">cyan</label>
';
                $buffer .= $indent . '                                            </div>
';
                $buffer .= $indent . '                                            <div class="radio-custom radio-green">
';
                $buffer .= $indent . '                                            <input id="skintoolsNavbar-green" name="skintoolsNavbar" type="radio" value="green" ';
                // 'green' section
                $value = $context->find('green');
                $buffer .= $this->section7749362ecb5f8c27fe0f43d5e969d66c($context, $indent, $value);
                $buffer .= '><label for="skintoolsNavbar-green">green</label>
';
                $buffer .= $indent . '                                            </div>
';
                $buffer .= $indent . '                                            <div class="radio-custom radio-grey">
';
                $buffer .= $indent . '                                            <input id="skintoolsNavbar-grey" name="skintoolsNavbar" type="radio" value="grey" ';
                // 'grey' section
                $value = $context->find('grey');
                $buffer .= $this->section7749362ecb5f8c27fe0f43d5e969d66c($context, $indent, $value);
                $buffer .= '><label for="skintoolsNavbar-grey">grey</label>
';
                $buffer .= $indent . '                                            </div>
';
                $buffer .= $indent . '                                            <div class="radio-custom radio-indigo">
';
                $buffer .= $indent . '                                            <input id="skintoolsNavbar-indigo" name="skintoolsNavbar" type="radio" value="indigo" ';
                // 'indigo' section
                $value = $context->find('indigo');
                $buffer .= $this->section7749362ecb5f8c27fe0f43d5e969d66c($context, $indent, $value);
                $buffer .= '><label for="skintoolsNavbar-indigo">indigo</label>
';
                $buffer .= $indent . '                                            </div>
';
                $buffer .= $indent . '                                            <div class="radio-custom radio-orange">
';
                $buffer .= $indent . '                                            <input id="skintoolsNavbar-orange" name="skintoolsNavbar" type="radio" value="orange" ';
                // 'orange' section
                $value = $context->find('orange');
                $buffer .= $this->section7749362ecb5f8c27fe0f43d5e969d66c($context, $indent, $value);
                $buffer .= '><label for="skintoolsNavbar-orange">orange</label>
';
                $buffer .= $indent . '                                            </div>
';
                $buffer .= $indent . '                                            <div class="radio-custom radio-pink">
';
                $buffer .= $indent . '                                            <input id="skintoolsNavbar-pink" name="skintoolsNavbar" type="radio" value="pink" ';
                // 'pink' section
                $value = $context->find('pink');
                $buffer .= $this->section7749362ecb5f8c27fe0f43d5e969d66c($context, $indent, $value);
                $buffer .= '><label for="skintoolsNavbar-pink">pink</label>
';
                $buffer .= $indent . '                                            </div>
';
                $buffer .= $indent . '                                            <div class="radio-custom radio-purple">
';
                $buffer .= $indent . '                                            <input id="skintoolsNavbar-purple" name="skintoolsNavbar" type="radio" value="purple" ';
                // 'purple' section
                $value = $context->find('purple');
                $buffer .= $this->section7749362ecb5f8c27fe0f43d5e969d66c($context, $indent, $value);
                $buffer .= '><label for="skintoolsNavbar-purple">purple</label>
';
                $buffer .= $indent . '                                            </div>
';
                $buffer .= $indent . '                                            <div class="radio-custom radio-red">
';
                $buffer .= $indent . '                                            <input id="skintoolsNavbar-red" name="skintoolsNavbar" type="radio" value="red" ';
                // 'red' section
                $value = $context->find('red');
                $buffer .= $this->section7749362ecb5f8c27fe0f43d5e969d66c($context, $indent, $value);
                $buffer .= '><label for="skintoolsNavbar-red">red</label>
';
                $buffer .= $indent . '                                            </div>
';
                $buffer .= $indent . '                                            <div class="radio-custom radio-teal">
';
                $buffer .= $indent . '                                            <input id="skintoolsNavbar-teal" name="skintoolsNavbar" type="radio" value="teal" ';
                // 'teal' section
                $value = $context->find('teal');
                $buffer .= $this->section7749362ecb5f8c27fe0f43d5e969d66c($context, $indent, $value);
                $buffer .= '><label for="skintoolsNavbar-teal">teal</label>
';
                $buffer .= $indent . '                                            </div>
';
                $buffer .= $indent . '                                            <!--<div class="radio-custom radio-yellow">
';
                $buffer .= $indent . '                                            <input id="skintoolsNavbar-yellow" name="skintoolsNavbar" type="radio" value="yellow" ';
                // 'yellow' section
                $value = $context->find('yellow');
                $buffer .= $this->section7749362ecb5f8c27fe0f43d5e969d66c($context, $indent, $value);
                $buffer .= '><label for="skintoolsNavbar-yellow">yellow</label>
';
                $buffer .= $indent . '                                            </div> -->
';
                $buffer .= $indent . '                                            <div class="radio-custom radio-customcolor">
';
                $buffer .= $indent . '                                            <input id="skintoolsNavbar-customcolor" name="skintoolsNavbar" type="radio" value="customcolor" ';
                // 'customcolor' section
                $value = $context->find('customcolor');
                $buffer .= $this->section7749362ecb5f8c27fe0f43d5e969d66c($context, $indent, $value);
                $buffer .= '><label for="skintoolsNavbar-customcolor">Custom Color</label>
';
                $buffer .= $indent . '                                            </div>
';
                $buffer .= $indent . '                                        </div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '                                        <!-- site color picker-->
';
                $buffer .= $indent . '                                        <form method="post" class="text-center">
';
                $buffer .= $indent . '                                            <input type="color" name="customcolor" class="site-colorpicker w-full bg-white border-0 h-40" style="display:none; ';
                // 'customcolor' section
                $value = $context->find('customcolor');
                $buffer .= $this->section808efc6c554fd6842ad300275d70cc85($context, $indent, $value);
                $buffer .= '" value="#62a8ea">
';
                $buffer .= $indent . '                                            <input type="hidden" name="choosen-color">
';
                $buffer .= $indent . '                                            <input type="hidden" name="sesskey" value="';
                $value = $this->resolveValue($context->find('sesskey'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '                                            <input type="submit" name="applysitewidecolor" class="btn btn-primary my-10" value="';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section3392c4b9269d96a1a4379ccef49fc210($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                                        </form>
';
                $buffer .= $indent . '                                    </div>
';
                $buffer .= $indent . '                                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section672d4e3b62623fd67356fbad5c4502e7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="page-aside {{#pin_aside}} opencustom {{/pin_aside}} moodle-has-index" data-html2canvas-ignore>
                <div class="page-aside-switch d-lg-none">
                    <i class="wb-chevron-left" aria-hidden="true">
                        {{#unread_request_count}}
                            <span class="unread-count-sidebarbutton font-size-10 badge badge-important animation-shake position-absolute" style="top: -20px;left: -10px;">{{unread_request_count}}</span>
                        {{/unread_request_count}}
                    </i>
                    <i class="wb-chevron-right" aria-hidden="true"></i>
                </div>
                <div class="page-aside-switch-lg d-none d-lg-inline">
                    <i class="wb-chevron-left" aria-hidden="true">
                        {{#unread_request_count}}
                            <span class="unread-count-sidebarbutton font-size-10 badge badge-important animation-shake position-absolute" style="top: -5px;left: -5px;">{{unread_request_count}}</span>
                        {{/unread_request_count}}
                    </i>
                    {{#hasblocks}}
                    {{^disablesidebarpinning}}
                        <div class="page-aside-pin">
                            <i class="fa fa-thumb-tack"  title="{{#pin_aside}}{{#str}}unpinsidebar, theme_remui{{/str}}{{/pin_aside}}{{^pin_aside}}{{#str}}pinsidebar, theme_remui{{/str}}{{/pin_aside}}" aria-hidden="true"></i>
                        </div>
                    {{/disablesidebarpinning}}
                    {{/hasblocks}}
                </div>
                <div class="page-aside-inner page-aside-scroll">
                    <div data-role="container">
                        <div data-role="content">
                            <ul class="site-sidebar-nav nav nav-tabs nav-tabs-line" role="tablist">
                                {{#hasblocks}}
                                <li class="nav-item">
                                    <a class="nav-link active show" data-toggle="tab" href="#sidebar-blocks" role="tab" aria-selected="false">
                                    <i class="icon fa fa-th-large" aria-hidden="true"></i>
                                    </a>
                                </li>
                                {{/hasblocks}}

                                {{! message drawer toggle }}
                                {{{messagetoggle}}}

                                {{#usercanmanage}}
                                <li class="nav-item {{^hasblocks}}{{^messagetoggle}}active show{{/messagetoggle}}{{/hasblocks}}">
                                    <a class="nav-link" data-toggle="tab" href="#sidebar-settings" role="tab" aria-selected="false">
                                    <i class="icon fa-paint-brush" aria-hidden="true"></i>
                                    </a>
                                </li>
                                {{/usercanmanage}}
                            </ul>
                            <div class="site-sidebar-tab-content tab-content">
                                {{#hasblocks}}
                                <div class="tab-pane fade p-0 active show" id="sidebar-blocks">
                                    {{{ sidepreblocks }}}
                                </div>
                                {{/hasblocks}}

                                {{! message drawer html }}
                                {{#messagedrawer}}
                                    <div class="tab-pane fade px-15 py-15 {{^hasblocks}}active show{{/hasblocks}}" id="sidebar-message">
                                        {{{messagedrawer}}}
                                    </div>
                                {{/messagedrawer}}

                                {{#usercanmanage}}
                                <div class="tab-pane fade  {{^hasblocks}}{{^messagedrawer}}active show{{/messagedrawer}}{{/hasblocks}}" id="sidebar-settings">
                                    <div class="site-skintools">
                                        <!-- navbr type -->
                                        <h5 class="site-skintools-title">{{#str}}navbartype, theme_remui{{/str}}</h5>
                                        <div id="skintoolsNavbar">
                                            <div class="checkbox-custom checkbox-inverse">
                                            <input id="skintoolsNavbar-inverse" name="navbartype" type="checkbox" value="navbar-inverse" {{# navbarinverse }} checked {{/ navbarinverse }}><label for="skintoolsNavbar-inverse">{{#str}} applysitecolor, theme_remui {{/str}}</label>
                                            </div>
                                        </div>

                                        <!-- sidebar color -->
                                        <div id="skintoolsSidebar">
                                            <h5 class="site-skintools-title">{{#str}}sidebarcolor, theme_remui{{/str}}</h5>
                                            <div class="radio-custom radio-dark">
                                            <input id="skintoolsSidebar-dark" type="radio" name="skintoolsSidebar" value="" checked><label for="skintoolsSidebar-dark">Dark</label>
                                            </div>
                                            <div class="radio-custom radio-light">
                                                <input id="skintoolsSidebar-light" type="radio" name="skintoolsSidebar" value="site-menubar-light" {{# sidebarcolor }} checked {{/sidebarcolor }}><label for="skintoolsSidebar-light">Light</label>
                                            </div>
                                        </div>

                                        <!-- site color -->
                                        <div id="skintoolsSiteColor">
                                            <h5 class="site-skintools-title">{{#str}}sitecolor, theme_remui{{/str}}</h5>
                                            <div class="radio-custom radio-primary">
                                            <input id="skintoolsNavbar-primary" name="skintoolsNavbar" type="radio" value="primary" {{# primary }} checked {{/ primary }}><label for="skintoolsNavbar-primary">primary</label>
                                            </div>
                                            <div class="radio-custom radio-brown">
                                            <input id="skintoolsNavbar-brown" name="skintoolsNavbar" type="radio" value="brown" {{# brown }} checked {{/ brown }}><label for="skintoolsNavbar-brown">brown</label>
                                            </div>
                                            <div class="radio-custom radio-cyan">
                                            <input id="skintoolsNavbar-cyan" name="skintoolsNavbar" type="radio" value="cyan" {{# cyan }} checked {{/ cyan }}><label for="skintoolsNavbar-cyan">cyan</label>
                                            </div>
                                            <div class="radio-custom radio-green">
                                            <input id="skintoolsNavbar-green" name="skintoolsNavbar" type="radio" value="green" {{# green }} checked {{/ green }}><label for="skintoolsNavbar-green">green</label>
                                            </div>
                                            <div class="radio-custom radio-grey">
                                            <input id="skintoolsNavbar-grey" name="skintoolsNavbar" type="radio" value="grey" {{# grey }} checked {{/ grey }}><label for="skintoolsNavbar-grey">grey</label>
                                            </div>
                                            <div class="radio-custom radio-indigo">
                                            <input id="skintoolsNavbar-indigo" name="skintoolsNavbar" type="radio" value="indigo" {{# indigo }} checked {{/ indigo }}><label for="skintoolsNavbar-indigo">indigo</label>
                                            </div>
                                            <div class="radio-custom radio-orange">
                                            <input id="skintoolsNavbar-orange" name="skintoolsNavbar" type="radio" value="orange" {{# orange }} checked {{/ orange }}><label for="skintoolsNavbar-orange">orange</label>
                                            </div>
                                            <div class="radio-custom radio-pink">
                                            <input id="skintoolsNavbar-pink" name="skintoolsNavbar" type="radio" value="pink" {{# pink }} checked {{/ pink }}><label for="skintoolsNavbar-pink">pink</label>
                                            </div>
                                            <div class="radio-custom radio-purple">
                                            <input id="skintoolsNavbar-purple" name="skintoolsNavbar" type="radio" value="purple" {{# purple }} checked {{/ purple }}><label for="skintoolsNavbar-purple">purple</label>
                                            </div>
                                            <div class="radio-custom radio-red">
                                            <input id="skintoolsNavbar-red" name="skintoolsNavbar" type="radio" value="red" {{# red }} checked {{/ red }}><label for="skintoolsNavbar-red">red</label>
                                            </div>
                                            <div class="radio-custom radio-teal">
                                            <input id="skintoolsNavbar-teal" name="skintoolsNavbar" type="radio" value="teal" {{# teal }} checked {{/ teal }}><label for="skintoolsNavbar-teal">teal</label>
                                            </div>
                                            <!--<div class="radio-custom radio-yellow">
                                            <input id="skintoolsNavbar-yellow" name="skintoolsNavbar" type="radio" value="yellow" {{# yellow }} checked {{/ yellow }}><label for="skintoolsNavbar-yellow">yellow</label>
                                            </div> -->
                                            <div class="radio-custom radio-customcolor">
                                            <input id="skintoolsNavbar-customcolor" name="skintoolsNavbar" type="radio" value="customcolor" {{# customcolor }} checked {{/ customcolor }}><label for="skintoolsNavbar-customcolor">Custom Color</label>
                                            </div>
                                        </div>

                                        <!-- site color picker-->
                                        <form method="post" class="text-center">
                                            <input type="color" name="customcolor" class="site-colorpicker w-full bg-white border-0 h-40" style="display:none; {{# customcolor }}display:inherit;{{/ customcolor }}" value="#62a8ea">
                                            <input type="hidden" name="choosen-color">
                                            <input type="hidden" name="sesskey" value="{{ sesskey }}">
                                            <input type="submit" name="applysitewidecolor" class="btn btn-primary my-10" value="{{#str}} applysitewide, theme_remui {{/ str }}">
                                        </form>
                                    </div>
                                </div>
                                {{/usercanmanage}}
                            </div>
                        </div>
                    </div>
                </div>
                <!---page-aside-inner-->
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
                
                $buffer .= $indent . '            <div class="page-aside ';
                // 'pin_aside' section
                $value = $context->find('pin_aside');
                $buffer .= $this->sectionFd6ab0d4fca484d7fceb9f7650c40216($context, $indent, $value);
                $buffer .= ' moodle-has-index" data-html2canvas-ignore>
';
                $buffer .= $indent . '                <div class="page-aside-switch d-lg-none">
';
                $buffer .= $indent . '                    <i class="wb-chevron-left" aria-hidden="true">
';
                // 'unread_request_count' section
                $value = $context->find('unread_request_count');
                $buffer .= $this->sectionD8e10024ebe017c8f8cbc19eb3d88af7($context, $indent, $value);
                $buffer .= $indent . '                    </i>
';
                $buffer .= $indent . '                    <i class="wb-chevron-right" aria-hidden="true"></i>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '                <div class="page-aside-switch-lg d-none d-lg-inline">
';
                $buffer .= $indent . '                    <i class="wb-chevron-left" aria-hidden="true">
';
                // 'unread_request_count' section
                $value = $context->find('unread_request_count');
                $buffer .= $this->section32fa4b93084feebb584d725d275eb9cf($context, $indent, $value);
                $buffer .= $indent . '                    </i>
';
                // 'hasblocks' section
                $value = $context->find('hasblocks');
                $buffer .= $this->sectionE993168e99f0c58beb74758419f2549d($context, $indent, $value);
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '                <div class="page-aside-inner page-aside-scroll">
';
                $buffer .= $indent . '                    <div data-role="container">
';
                $buffer .= $indent . '                        <div data-role="content">
';
                $buffer .= $indent . '                            <ul class="site-sidebar-nav nav nav-tabs nav-tabs-line" role="tablist">
';
                // 'hasblocks' section
                $value = $context->find('hasblocks');
                $buffer .= $this->section81d288394f3947229e1ec1950b7de5e9($context, $indent, $value);
                $buffer .= $indent . '
';
                $buffer .= $indent . '                                ';
                $value = $this->resolveValue($context->find('messagetoggle'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '
';
                // 'usercanmanage' section
                $value = $context->find('usercanmanage');
                $buffer .= $this->sectionF3e503508a14742d313902176d7358b3($context, $indent, $value);
                $buffer .= $indent . '                            </ul>
';
                $buffer .= $indent . '                            <div class="site-sidebar-tab-content tab-content">
';
                // 'hasblocks' section
                $value = $context->find('hasblocks');
                $buffer .= $this->section561f41effca6acc0bcac06b8ac836eb6($context, $indent, $value);
                $buffer .= $indent . '
';
                // 'messagedrawer' section
                $value = $context->find('messagedrawer');
                $buffer .= $this->section338f4203957921d59158c45165d51e79($context, $indent, $value);
                $buffer .= $indent . '
';
                // 'usercanmanage' section
                $value = $context->find('usercanmanage');
                $buffer .= $this->section2516e4ec5e71b88fa87acd77119fbdfc($context, $indent, $value);
                $buffer .= $indent . '                            </div>
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '                <!---page-aside-inner-->
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
