<?php

class __Mustache_8f18a755f57a73996f0b89ef068d4343 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<!-- navbar-inverse -->
';
        $buffer .= $indent . '<nav class="site-navbar navbar navbar-default navbar-fixed-top moodle-has-zindex ';
        $value = $this->resolveValue($context->find('navbarinverse'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= ' ';
        // 'sitecolor' section
        $value = $context->find('sitecolor');
        $buffer .= $this->section04471ede18e4ed26602ca54c4f6a2077($context, $indent, $value);
        $buffer .= '" role="navigation">
';
        $buffer .= $indent . '    <div class="navbar-header d-flex justify-content-end ';
        // 'sitecolor' inverted section
        $value = $context->find('sitecolor');
        if (empty($value)) {
            
            $buffer .= ' bg-primary ';
        }
        $buffer .= '">
';
        $buffer .= $indent . '      <button type="button" class="navbar-toggler hamburger hamburger-close navbar-toggler-left hided mr-auto"
';
        $buffer .= $indent . '      data-toggle="menubar">
';
        $buffer .= $indent . '        <span class="sr-only">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section625e5ef2b01a2fe0f9381fa947e848ac($context, $indent, $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '        <span class="hamburger-bar"></span>
';
        $buffer .= $indent . '      </button>
';
        $buffer .= $indent . '      
';
        $buffer .= $indent . '      <div class="navbar-brand navbar-brand-center p-0 ';
        // 'sitecolor' section
        $value = $context->find('sitecolor');
        $buffer .= $this->section04471ede18e4ed26602ca54c4f6a2077($context, $indent, $value);
        $buffer .= '">
';
        // 'output.should_display_logo' section
        $value = $context->findDot('output.should_display_logo');
        $buffer .= $this->section99ce74d1eaa3ae3cc0da21531dd049aa($context, $indent, $value);
        $buffer .= $indent . '      </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '      ';
        $value = $this->resolveValue($context->findDot('output.search_box_icon_collapsed'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '      <button type="button" class="navbar-toggler collapsed" data-target="#site-navbar-collapse"
';
        $buffer .= $indent . '      data-toggle="collapse">
';
        $buffer .= $indent . '        <i class="icon fa fa-ellipsis-h" aria-hidden="true"></i>
';
        $buffer .= $indent . '      </button>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div class="navbar-container container-fluid pl-0" style="-ms-flex:1 1 0%;">
';
        $buffer .= $indent . '      <!-- Navbar Collapse -->
';
        $buffer .= $indent . '      <div class="collapse navbar-collapse navbar-collapse-toolbar" id="site-navbar-collapse">
';
        $buffer .= $indent . '        <!-- Navbar Toolbar -->
';
        $buffer .= $indent . '        <ul class="nav navbar-toolbar">
';
        $buffer .= $indent . '          <li class="nav-item hidden-float" id="toggleMenubar">
';
        $buffer .= $indent . '            <a class="nav-link px-10" data-toggle="menubar" data-toggle="menubardesktop" href="#" role="button">
';
        $buffer .= $indent . '              <i class="icon hamburger">
';
        $buffer .= $indent . '                <span class="sr-only">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section625e5ef2b01a2fe0f9381fa947e848ac($context, $indent, $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '                <span class="hamburger-bar"></span>
';
        $buffer .= $indent . '              </i>
';
        $buffer .= $indent . '            </a>
';
        $buffer .= $indent . '          </li>
';
        $buffer .= $indent . '          <li class="nav-item hidden-sm-down" id="toggleFullscreen">
';
        $buffer .= $indent . '            <a class="nav-link icon icon-fullscreen" data-toggle="fullscreen" href="#" role="button">
';
        $buffer .= $indent . '              <span class="sr-only">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionB9bd8f3b5663d613ef0e88e005b204af($context, $indent, $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '            </a>
';
        $buffer .= $indent . '          </li>
';
        $buffer .= $indent . '
';
        // 'hasrecent' section
        $value = $context->find('hasrecent');
        $buffer .= $this->section10051bef2e977cbc72707ce875d886c9($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '          ';
        $value = $this->resolveValue($context->findDot('output.custom_menu'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '          <li class="hideshow nav-item dropdown">
';
        $buffer .= $indent . '            <a href="javascript:void(0)" class="nav-link" data-toggle="dropdown" data-animation="scale-up">
';
        $buffer .= $indent . '              <i class="icon fa fa-ellipsis-h"></i>
';
        $buffer .= $indent . '            </a>
';
        $buffer .= $indent . '            <ul class="hideshow-ul dropdown-menu">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '            </ul>
';
        $buffer .= $indent . '          </li>
';
        $buffer .= $indent . '        </ul>
';
        $buffer .= $indent . '        <!-- End Navbar Toolbar -->
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <!-- Navbar Toolbar Right -->
';
        $buffer .= $indent . '        <!-- user_menu -->
';
        $buffer .= $indent . '        <ul class="nav navbar-toolbar navbar-right navbar-toolbar-right">
';
        $buffer .= $indent . '          ';
        $value = $this->resolveValue($context->findDot('output.search_box_icon'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '          
';
        $buffer .= $indent . '          <!-- navbar_plugin_output : \'message\', \'notifications\' and \'chat sidebar\' toggles -->
';
        $buffer .= $indent . '          ';
        $value = $this->resolveValue($context->findDot('output.navbar_plugin_output'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '          
';
        $buffer .= $indent . '          ';
        $value = $this->resolveValue($context->findDot('output.user_menu'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '
';
        // 'cansignup' section
        $value = $context->find('cansignup');
        $buffer .= $this->section4858c729e2f9d27e076e41835e2ab4a7($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '          ';
        $value = $this->resolveValue($context->findDot('output.navbar_plugin_output_custom_icons'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '        </ul>
';
        $buffer .= $indent . '        <!-- End Navbar Toolbar Right -->
';
        $buffer .= $indent . '      </div>
';
        $buffer .= $indent . '      <!-- End Navbar Collapse -->
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '      <!-- Site Navbar Seach -->
';
        $buffer .= $indent . '        ';
        $value = $this->resolveValue($context->findDot('output.search_box'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '      <!-- End Site Navbar Seach -->
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '  </nav>
';
        $buffer .= $indent . '  ';
        $value = $this->resolveValue($context->findDot('output.showLicenseNotice'), $context);
        $buffer .= $value;
        $buffer .= '
';

        return $buffer;
    }

    private function section04471ede18e4ed26602ca54c4f6a2077(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' bg-{{sitecolor}}-600 ';
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
                
                $buffer .= ' bg-';
                $value = $this->resolveValue($context->find('sitecolor'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '-600 ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section625e5ef2b01a2fe0f9381fa947e848ac(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'expand, core';
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
                
                $buffer .= 'expand, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0e8a031e4f498516fadd23a0a7ccbe02(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <a class="text-white text-center d-block h-full" style="line-height:66px;" href="{{{ config.wwwroot }}}">
              <span class="navbar-brand-logo mini w-full h-full"><i class="fa fa-{{siteicon}}"></i></span>
              <span class="navbar-brand-logo w-full h-full">
                  <i class="fa fa-{{siteicon}}"></i>
                  {{{ sitename }}}
              </span>
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
                
                $buffer .= $indent . '            <a class="text-white text-center d-block h-full" style="line-height:66px;" href="';
                $value = $this->resolveValue($context->findDot('config.wwwroot'), $context);
                $buffer .= $value;
                $buffer .= '">
';
                $buffer .= $indent . '              <span class="navbar-brand-logo mini w-full h-full"><i class="fa fa-';
                $value = $this->resolveValue($context->find('siteicon'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"></i></span>
';
                $buffer .= $indent . '              <span class="navbar-brand-logo w-full h-full">
';
                $buffer .= $indent . '                  <i class="fa fa-';
                $value = $this->resolveValue($context->find('siteicon'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"></i>
';
                $buffer .= $indent . '                  ';
                $value = $this->resolveValue($context->find('sitename'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '              </span>
';
                $buffer .= $indent . '            </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC249cbc5780288809fac4c521bb5ff9f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <a class="text-white text-center d-block h-full" href="{{{ config.wwwroot }}}">
              <span class="navbar-brand-logo mini h-full w-full" style="background-image: url({{ logominiurl }});
                    background-position: center; background-size: contain; background-repeat: no-repeat;"></span>

              <span class="navbar-brand-logo h-full w-full" style="background-image: url({{ logourl }});
                    background-position: center; background-size: contain; background-repeat: no-repeat;">
              </span>
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
                
                $buffer .= $indent . '            <a class="text-white text-center d-block h-full" href="';
                $value = $this->resolveValue($context->findDot('config.wwwroot'), $context);
                $buffer .= $value;
                $buffer .= '">
';
                $buffer .= $indent . '              <span class="navbar-brand-logo mini h-full w-full" style="background-image: url(';
                $value = $this->resolveValue($context->find('logominiurl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ');
';
                $buffer .= $indent . '                    background-position: center; background-size: contain; background-repeat: no-repeat;"></span>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '              <span class="navbar-brand-logo h-full w-full" style="background-image: url(';
                $value = $this->resolveValue($context->find('logourl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ');
';
                $buffer .= $indent . '                    background-position: center; background-size: contain; background-repeat: no-repeat;">
';
                $buffer .= $indent . '              </span>
';
                $buffer .= $indent . '            </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section99ce74d1eaa3ae3cc0da21531dd049aa(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
          {{# isiconsitename }}
            <a class="text-white text-center d-block h-full" style="line-height:66px;" href="{{{ config.wwwroot }}}">
              <span class="navbar-brand-logo mini w-full h-full"><i class="fa fa-{{siteicon}}"></i></span>
              <span class="navbar-brand-logo w-full h-full">
                  <i class="fa fa-{{siteicon}}"></i>
                  {{{ sitename }}}
              </span>
            </a>
          {{/ isiconsitename }}
          
          {{# islogo }}
            <a class="text-white text-center d-block h-full" href="{{{ config.wwwroot }}}">
              <span class="navbar-brand-logo mini h-full w-full" style="background-image: url({{ logominiurl }});
                    background-position: center; background-size: contain; background-repeat: no-repeat;"></span>

              <span class="navbar-brand-logo h-full w-full" style="background-image: url({{ logourl }});
                    background-position: center; background-size: contain; background-repeat: no-repeat;">
              </span>
            </a>
          {{/ islogo }}
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
                
                // 'isiconsitename' section
                $value = $context->find('isiconsitename');
                $buffer .= $this->section0e8a031e4f498516fadd23a0a7ccbe02($context, $indent, $value);
                $buffer .= $indent . '          
';
                // 'islogo' section
                $value = $context->find('islogo');
                $buffer .= $this->sectionC249cbc5780288809fac4c521bb5ff9f($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB9bd8f3b5663d613ef0e88e005b204af(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'togglefullscreen, theme_remui';
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
                
                $buffer .= 'togglefullscreen, theme_remui';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section83532a037ec5679d598d98c072b0d516(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'recent, theme_remui';
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
                
                $buffer .= 'recent, theme_remui';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF36e4937e72044f18f0201c984084ab9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <a class="dropdown-item" role="menuitem" href="{{{ config.wwwroot }}}/course/view.php?id={{{id}}}">{{{fullname}}}</a>
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
                
                $buffer .= $indent . '                    <a class="dropdown-item" role="menuitem" href="';
                $value = $this->resolveValue($context->findDot('config.wwwroot'), $context);
                $buffer .= $value;
                $buffer .= '/course/view.php?id=';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= $value;
                $buffer .= '">';
                $value = $this->resolveValue($context->find('fullname'), $context);
                $buffer .= $value;
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section10051bef2e977cbc72707ce875d886c9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <li class="nav-item dropdown " id="recentCourses">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="javascript:void(0)" data-animation="scale-up" aria-expanded="true" role="button">{{#str}}recent, theme_remui{{/str}}</a>
              <div class="dropdown-menu" role="menu">
                  {{#recentcourses}}
                    <a class="dropdown-item" role="menuitem" href="{{{ config.wwwroot }}}/course/view.php?id={{{id}}}">{{{fullname}}}</a>
                  {{/recentcourses}}
              </div>
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
                
                $buffer .= $indent . '            <li class="nav-item dropdown " id="recentCourses">
';
                $buffer .= $indent . '              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="javascript:void(0)" data-animation="scale-up" aria-expanded="true" role="button">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section83532a037ec5679d598d98c072b0d516($context, $indent, $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '              <div class="dropdown-menu" role="menu">
';
                // 'recentcourses' section
                $value = $context->find('recentcourses');
                $buffer .= $this->sectionF36e4937e72044f18f0201c984084ab9($context, $indent, $value);
                $buffer .= $indent . '              </div>
';
                $buffer .= $indent . '            </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section47f819a53e4575a4e7767be1939ab3bf(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'startsignup';
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
                
                $buffer .= 'startsignup';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4858c729e2f9d27e076e41835e2ab4a7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
          <li class="nav-item">
            <a href="{{signupurl}}" class="nav-link"><i class="icon fa fa-user-plus"></i> {{#str}}startsignup{{/str}}</a>
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
                
                $buffer .= $indent . '          <li class="nav-item">
';
                $buffer .= $indent . '            <a href="';
                $value = $this->resolveValue($context->find('signupurl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="nav-link"><i class="icon fa fa-user-plus"></i> ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section47f819a53e4575a4e7767be1939ab3bf($context, $indent, $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '          </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
