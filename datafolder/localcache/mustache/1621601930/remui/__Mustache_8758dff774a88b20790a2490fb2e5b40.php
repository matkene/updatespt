<?php

class __Mustache_8758dff774a88b20790a2490fb2e5b40 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        // 'haspages' section
        $value = $context->find('haspages');
        $buffer .= $this->section965e8e44d348c0dd87547d80d95a9a7a($context, $indent, $value);

        return $buffer;
    }

    private function section6082c1f5941a12f77083512a9a2e6a62(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'previous';
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
                
                $buffer .= 'previous';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4200caec828bb8568f53d4d7d581ee63(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <li class="page-item">
                    <a href="{{url}}" class="page-link mx-sm-5">
                        <span aria-hidden="true"><i class="fa fa-chevron-left font-size-12 text-muted" aria-hidden="true"></i></span>
                        <span class="sr-only">{{#str}}previous{{/str}}</span>
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
                
                $buffer .= $indent . '                <li class="page-item">
';
                $buffer .= $indent . '                    <a href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="page-link mx-sm-5">
';
                $buffer .= $indent . '                        <span aria-hidden="true"><i class="fa fa-chevron-left font-size-12 text-muted" aria-hidden="true"></i></span>
';
                $buffer .= $indent . '                        <span class="sr-only">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section6082c1f5941a12f77083512a9a2e6a62($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                    </a>
';
                $buffer .= $indent . '                </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD8159129bf31939d01a9363234b75e3a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <li class="page-item">
                    <a href="{{url}}" class="page-link">{{page}}</a>
                </li>
                <li class="page-item disabled">
                    <span class="page-link mx-sm-5">&hellip;</a>
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
                
                $buffer .= $indent . '                <li class="page-item">
';
                $buffer .= $indent . '                    <a href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="page-link">';
                $value = $this->resolveValue($context->find('page'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '                </li>
';
                $buffer .= $indent . '                <li class="page-item disabled">
';
                $buffer .= $indent . '                    <span class="page-link mx-sm-5">&hellip;</a>
';
                $buffer .= $indent . '                </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section272168152b78d65d6cd1b963529dbe3c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'active disableClick';
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
                
                $buffer .= 'active disableClick';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8ebd0299549bf1ad70236485de4fae2d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'currentinparentheses, theme_remui';
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
                
                $buffer .= 'currentinparentheses, theme_remui';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section12bdb15dde7e8d35da04ce484f831fa0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <span class="sr-only">{{#str}}currentinparentheses, theme_remui{{/str}}</span>
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
                
                $buffer .= $indent . '                            <span class="sr-only">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section8ebd0299549bf1ad70236485de4fae2d($context, $indent, $value);
                $buffer .= '</span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA58471671514e05634783b0bae0d7151(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <li class="page-item {{#active}}active disableClick{{/active}}">
                    <a href="{{url}}" class="page-link mx-sm-5">
                        {{page}}
                        {{#active}}
                            <span class="sr-only">{{#str}}currentinparentheses, theme_remui{{/str}}</span>
                        {{/active}}
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
                
                $buffer .= $indent . '                <li class="page-item ';
                // 'active' section
                $value = $context->find('active');
                $buffer .= $this->section272168152b78d65d6cd1b963529dbe3c($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                    <a href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="page-link mx-sm-5">
';
                $buffer .= $indent . '                        ';
                $value = $this->resolveValue($context->find('page'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '
';
                // 'active' section
                $value = $context->find('active');
                $buffer .= $this->section12bdb15dde7e8d35da04ce484f831fa0($context, $indent, $value);
                $buffer .= $indent . '                    </a>
';
                $buffer .= $indent . '                </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2f5115e382d46e3e0b9d215c484aa7d0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <li class="page-item disabled">
                    <span class="page-link">&hellip;</a>
                </li>
                <li class="page-item">
                    <a href="{{url}}" class="page-link">{{page}}</a>
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
                
                $buffer .= $indent . '                <li class="page-item disabled">
';
                $buffer .= $indent . '                    <span class="page-link">&hellip;</a>
';
                $buffer .= $indent . '                </li>
';
                $buffer .= $indent . '                <li class="page-item">
';
                $buffer .= $indent . '                    <a href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="page-link">';
                $value = $this->resolveValue($context->find('page'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '                </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBa8bb7b1bb267b8cc98d38fe4bf9f047(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'next';
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
                
                $buffer .= 'next';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section99c15be3f7ede80e4f77a5e1acebd52f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <li class="page-item">
                    <a href="{{url}}" class="page-link">
                        <span aria-hidden="true"><i class="fa fa-chevron-right font-size-12 text-muted" aria-hidden="true"></i></span>
                        <span class="sr-only">{{#str}}next{{/str}}</span>
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
                
                $buffer .= $indent . '                <li class="page-item">
';
                $buffer .= $indent . '                    <a href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="page-link">
';
                $buffer .= $indent . '                        <span aria-hidden="true"><i class="fa fa-chevron-right font-size-12 text-muted" aria-hidden="true"></i></span>
';
                $buffer .= $indent . '                        <span class="sr-only">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionBa8bb7b1bb267b8cc98d38fe4bf9f047($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                    </a>
';
                $buffer .= $indent . '                </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section965e8e44d348c0dd87547d80d95a9a7a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <nav aria-label="{{label}}">
        <ul class="pagination pagination-no-border">
            {{#previous}}
                <li class="page-item">
                    <a href="{{url}}" class="page-link mx-sm-5">
                        <span aria-hidden="true"><i class="fa fa-chevron-left font-size-12 text-muted" aria-hidden="true"></i></span>
                        <span class="sr-only">{{#str}}previous{{/str}}</span>
                    </a>
                </li>
            {{/previous}}
            {{#first}}
                <li class="page-item">
                    <a href="{{url}}" class="page-link">{{page}}</a>
                </li>
                <li class="page-item disabled">
                    <span class="page-link mx-sm-5">&hellip;</a>
                </li>
            {{/first}}
            {{#pages}}
                <li class="page-item {{#active}}active disableClick{{/active}}">
                    <a href="{{url}}" class="page-link mx-sm-5">
                        {{page}}
                        {{#active}}
                            <span class="sr-only">{{#str}}currentinparentheses, theme_remui{{/str}}</span>
                        {{/active}}
                    </a>
                </li>
            {{/pages}}
            {{#last}}
                <li class="page-item disabled">
                    <span class="page-link">&hellip;</a>
                </li>
                <li class="page-item">
                    <a href="{{url}}" class="page-link">{{page}}</a>
                </li>
            {{/last}}
            {{#next}}
                <li class="page-item">
                    <a href="{{url}}" class="page-link">
                        <span aria-hidden="true"><i class="fa fa-chevron-right font-size-12 text-muted" aria-hidden="true"></i></span>
                        <span class="sr-only">{{#str}}next{{/str}}</span>
                    </a>
                </li>
            {{/next}}
        </ul>
    </nav>
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
                
                $buffer .= $indent . '    <nav aria-label="';
                $value = $this->resolveValue($context->find('label'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '        <ul class="pagination pagination-no-border">
';
                // 'previous' section
                $value = $context->find('previous');
                $buffer .= $this->section4200caec828bb8568f53d4d7d581ee63($context, $indent, $value);
                // 'first' section
                $value = $context->find('first');
                $buffer .= $this->sectionD8159129bf31939d01a9363234b75e3a($context, $indent, $value);
                // 'pages' section
                $value = $context->find('pages');
                $buffer .= $this->sectionA58471671514e05634783b0bae0d7151($context, $indent, $value);
                // 'last' section
                $value = $context->find('last');
                $buffer .= $this->section2f5115e382d46e3e0b9d215c484aa7d0($context, $indent, $value);
                // 'next' section
                $value = $context->find('next');
                $buffer .= $this->section99c15be3f7ede80e4f77a5e1acebd52f($context, $indent, $value);
                $buffer .= $indent . '        </ul>
';
                $buffer .= $indent . '    </nav>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
