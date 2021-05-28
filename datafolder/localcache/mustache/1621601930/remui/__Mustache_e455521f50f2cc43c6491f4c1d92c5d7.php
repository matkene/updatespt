<?php

class __Mustache_e455521f50f2cc43c6491f4c1d92c5d7 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="px-0 py-3" aria-hidden="false" ';
        // 'isdrawer' inverted section
        $value = $context->find('isdrawer');
        if (empty($value)) {
            
            $buffer .= 'data-in-panel="true"';
        }
        $buffer .= ' data-region="view-overview">
';
        $buffer .= $indent . '    <div class="d-flex align-items-center mb-10">
';
        $buffer .= $indent . '       
';
        $buffer .= $indent . '    <div class="input-search w-p100 input-search-dark">
';
        $buffer .= $indent . '        <i class="input-search-icon wb-search" aria-hidden="true"></i>
';
        $buffer .= $indent . '        <input type="text" 
';
        $buffer .= $indent . '            class="form-control"
';
        $buffer .= $indent . '            placeholder="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section507b9f28a10a9aed70b7b7a308c6a3ca($context, $indent, $value);
        $buffer .= '"
';
        $buffer .= $indent . '            aria-label="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section507b9f28a10a9aed70b7b7a308c6a3ca($context, $indent, $value);
        $buffer .= '"
';
        $buffer .= $indent . '            data-region="view-overview-search-input">
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        
';
        $buffer .= $indent . '        <div class="d-flex">
';
        $buffer .= $indent . '            <a href="#" class="ml-2"
';
        $buffer .= $indent . '                data-route="view-settings"
';
        $buffer .= $indent . '                data-route-param="';
        $value = $this->resolveValue($context->findDot('loggedinuser.id'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"
';
        $buffer .= $indent . '                aria-label="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section6584ba6b6168cbf2f66e5fde26dfdaad($context, $indent, $value);
        $buffer .= '"
';
        $buffer .= $indent . '                role="button"
';
        $buffer .= $indent . '            >
';
        $buffer .= $indent . '                ';
        // 'pix' section
        $value = $context->find('pix');
        $buffer .= $this->section85e014b6b76dca204a4debe64d81f867($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '            </a>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div class="text-right py-5">
';
        $buffer .= $indent . '        <a href="#" data-route="view-contacts" role="button">
';
        $buffer .= $indent . '            ';
        // 'pix' section
        $value = $context->find('pix');
        $buffer .= $this->section32df13572962fae23483515947366d4b($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '            ';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionAe27671d8d1750e9af3adcc5df1cbf0d($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '            <span class="font-size-10 badge badge-pill badge-important ';
        // 'contactrequestcount' inverted section
        $value = $context->find('contactrequestcount');
        if (empty($value)) {
            
            $buffer .= 'hidden';
        }
        $buffer .= '"
';
        $buffer .= $indent . '            data-region="contact-request-count"
';
        $buffer .= $indent . '            aria-label="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section805e650638aa325ee8db2b322ff4bb8f($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '                ';
        $value = $this->resolveValue($context->find('contactrequestcount'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '
';
        $buffer .= $indent . '            </span>
';
        $buffer .= $indent . '        </a>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section507b9f28a10a9aed70b7b7a308c6a3ca(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' search, core_search ';
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
                
                $buffer .= ' search, core_search ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6584ba6b6168cbf2f66e5fde26dfdaad(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' settings, core_message ';
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
                
                $buffer .= ' settings, core_message ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section85e014b6b76dca204a4debe64d81f867(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' t/edit, core ';
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
                
                $buffer .= ' t/edit, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section32df13572962fae23483515947366d4b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' i/user, core ';
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
                
                $buffer .= ' i/user, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAe27671d8d1750e9af3adcc5df1cbf0d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' contacts, core_message ';
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
                
                $buffer .= ' contacts, core_message ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section805e650638aa325ee8db2b322ff4bb8f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' pendingcontactrequests, core_message, {{contactrequestcount}} ';
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
                
                $buffer .= ' pendingcontactrequests, core_message, ';
                $value = $this->resolveValue($context->find('contactrequestcount'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
