<?php

class __Mustache_32deb3fe849f812d5876cbb674d9dd11 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '   <div class="site-menubar ';
        $value = $this->resolveValue($context->find('sidebarcolor'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= ' moodle-has-zindex">
';
        $buffer .= $indent . '    <div class="site-menubar-body">
';
        $buffer .= $indent . '      <div>
';
        $buffer .= $indent . '        <ul class="site-menu" data-plugin="menu">
';
        // 'isactivitypage' section
        $value = $context->find('isactivitypage');
        $buffer .= $this->sectionF17fe2fdda8e3dddbd3e0049cf7764eb($context, $indent, $value);
        $buffer .= $indent . '
';
        // 'isactivitypage' inverted section
        $value = $context->find('isactivitypage');
        if (empty($value)) {
            
            if ($partial = $this->mustache->loadPartial('theme_remui/flat_navigation')) {
                $buffer .= $partial->renderInternal($context, $indent . '            ');
            }
        }
        $buffer .= $indent . '        </ul>
';
        $buffer .= $indent . '      </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div class="site-menubar-footer">
';
        // 'output.check_user_site_admin' section
        $value = $context->findDot('output.check_user_site_admin');
        $buffer .= $this->sectionE36858c968c595a92c07280415f289f9($context, $indent, $value);
        $buffer .= $indent . '
';
        // 'output.check_user_site_admin' inverted section
        $value = $context->findDot('output.check_user_site_admin');
        if (empty($value)) {
            
            // 'output.check_user_course_creater' section
            $value = $context->findDot('output.check_user_course_creater');
            $buffer .= $this->section550c1da7c2ff3b0da568e772e1778e66($context, $indent, $value);
            // 'output.check_user_course_creater' inverted section
            $value = $context->findDot('output.check_user_course_creater');
            if (empty($value)) {
                
                $buffer .= $indent . '            <a href="';
                $value = $this->resolveValue($context->findDot('config.wwwroot'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '/course/index.php" class="fold-show w-p100" data-placement="top" data-toggle="tooltip" data-original-title="';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section76841790df3d84796d42d78d8defab52($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '              <span class="fa fa-archive" aria-hidden="true"></span>
';
                $buffer .= $indent . '            </a>
';
            }
            $buffer .= $indent . '
';
        }
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '  </div>
';

        return $buffer;
    }

    private function sectionF17fe2fdda8e3dddbd3e0049cf7764eb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
              {{> theme_remui/activity_navigation }}
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
                
                if ($partial = $this->mustache->loadPartial('theme_remui/activity_navigation')) {
                    $buffer .= $partial->renderInternal($context, $indent . '              ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9461766b16a41465af49cd0a2a4be1e1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'userlist, core';
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
                
                $buffer .= 'userlist, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section76841790df3d84796d42d78d8defab52(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'createarchivepage, theme_remui';
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
                
                $buffer .= 'createarchivepage, theme_remui';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8e8f4fe551b836ec4740ec0d00ce9096(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'createanewcourse, theme_remui';
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
                
                $buffer .= 'createanewcourse, theme_remui';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section654e3b674a90879ff1485c9f897ade25(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'remuisettings, theme_remui';
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
                
                $buffer .= 'remuisettings, theme_remui';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE36858c968c595a92c07280415f289f9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <a href="{{config.wwwroot}}/{{config.admin}}/user.php" class="col-3" data-placement="top" data-toggle="tooltip" data-original-title="{{#str}}userlist, core{{/str}}">
              <span class="fa fa-users" aria-hidden="true"></span>
            </a>
            <a href="{{config.wwwroot}}/course/index.php" class="col-3" data-placement="top" data-toggle="tooltip" data-original-title="{{#str}}createarchivepage, theme_remui{{/str}}">
              <span class="fa fa-archive" aria-hidden="true"></span>
            </a>
            <a href="{{ coursecreationlink }}" class="col-3" data-placement="top" data-toggle="tooltip" data-original-title="{{#str}}createanewcourse, theme_remui{{/str}}">
              <span class="fa fa-file" aria-hidden="true"></span>
            </a>
            <a href="{{config.wwwroot}}/{{config.admin}}/settings.php?section=themesettingremui" class="fold-show col-3" data-placement="top" data-toggle="tooltip" data-original-title="{{#str}}remuisettings, theme_remui{{/str}}">
              <span class="fa fa-cogs" aria-hidden="true"></span>
            </a>
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
                
                $buffer .= $indent . '            <a href="';
                $value = $this->resolveValue($context->findDot('config.wwwroot'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '/';
                $value = $this->resolveValue($context->findDot('config.admin'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '/user.php" class="col-3" data-placement="top" data-toggle="tooltip" data-original-title="';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section9461766b16a41465af49cd0a2a4be1e1($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '              <span class="fa fa-users" aria-hidden="true"></span>
';
                $buffer .= $indent . '            </a>
';
                $buffer .= $indent . '            <a href="';
                $value = $this->resolveValue($context->findDot('config.wwwroot'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '/course/index.php" class="col-3" data-placement="top" data-toggle="tooltip" data-original-title="';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section76841790df3d84796d42d78d8defab52($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '              <span class="fa fa-archive" aria-hidden="true"></span>
';
                $buffer .= $indent . '            </a>
';
                $buffer .= $indent . '            <a href="';
                $value = $this->resolveValue($context->find('coursecreationlink'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="col-3" data-placement="top" data-toggle="tooltip" data-original-title="';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section8e8f4fe551b836ec4740ec0d00ce9096($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '              <span class="fa fa-file" aria-hidden="true"></span>
';
                $buffer .= $indent . '            </a>
';
                $buffer .= $indent . '            <a href="';
                $value = $this->resolveValue($context->findDot('config.wwwroot'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '/';
                $value = $this->resolveValue($context->findDot('config.admin'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '/settings.php?section=themesettingremui" class="fold-show col-3" data-placement="top" data-toggle="tooltip" data-original-title="';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section654e3b674a90879ff1485c9f897ade25($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '              <span class="fa fa-cogs" aria-hidden="true"></span>
';
                $buffer .= $indent . '            </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section550c1da7c2ff3b0da568e772e1778e66(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
              <a href="{{config.wwwroot}}/course/index.php" class="fold-show w-p50" data-placement="top" data-toggle="tooltip" data-original-title="{{#str}}createarchivepage, theme_remui{{/str}}">
                <span class="fa fa-archive" aria-hidden="true"></span>
              </a>
              <a href="{{ coursecreationlink }}" class="w-p50" data-placement="top" data-toggle="tooltip" data-original-title="{{#str}}createanewcourse, theme_remui{{/str}}">
                <span class="fa fa-file" aria-hidden="true"></span>
              </a>
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
                
                $buffer .= $indent . '              <a href="';
                $value = $this->resolveValue($context->findDot('config.wwwroot'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '/course/index.php" class="fold-show w-p50" data-placement="top" data-toggle="tooltip" data-original-title="';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section76841790df3d84796d42d78d8defab52($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                <span class="fa fa-archive" aria-hidden="true"></span>
';
                $buffer .= $indent . '              </a>
';
                $buffer .= $indent . '              <a href="';
                $value = $this->resolveValue($context->find('coursecreationlink'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="w-p50" data-placement="top" data-toggle="tooltip" data-original-title="';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section8e8f4fe551b836ec4740ec0d00ce9096($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                <span class="fa fa-file" aria-hidden="true"></span>
';
                $buffer .= $indent . '              </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
