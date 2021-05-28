<?php

class __Mustache_c656e1dde20ed699a3bf5edd1850ac2b extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<style>
';
        $buffer .= $indent . '.sections-loader-wrapper {
';
        $buffer .= $indent . '    position: fixed;
';
        $buffer .= $indent . '    left: 0;
';
        $buffer .= $indent . '    top: 0;
';
        $buffer .= $indent . '    width: 100%;
';
        $buffer .= $indent . '    height: 100%;
';
        $buffer .= $indent . '    background: white;
';
        $buffer .= $indent . '    opacity: 0;
';
        $buffer .= $indent . '    transition: opacity 300ms linear;
';
        $buffer .= $indent . '    z-index: 1701;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '.sections-loader-wrapper.show {
';
        $buffer .= $indent . '    opacity: 1;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '.section-loader-wrapper {
';
        $buffer .= $indent . '    position: absolute;
';
        $buffer .= $indent . '    top: 0;
';
        $buffer .= $indent . '    left: 0;
';
        $buffer .= $indent . '    height: 100%;
';
        $buffer .= $indent . '    width: 100%;
';
        $buffer .= $indent . '    background: rgba(255,255,255,0.7);
';
        $buffer .= $indent . '    z-index: 3;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '.sections-loader-wrapper .sections-loader, .section-loader-wrapper .section-loader {
';
        $buffer .= $indent . '    position: absolute;
';
        $buffer .= $indent . '    left: 50%;
';
        $buffer .= $indent . '    top: 50%;
';
        $buffer .= $indent . '    transform: translate(-50%, -50%);
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '.sections-loader-wrapper .sections-loader img, .section-loader-wrapper .section-loader img {
';
        $buffer .= $indent . '    height: auto;
';
        $buffer .= $indent . '    width:  140px;
';
        $buffer .= $indent . '    max-width: 140px;
';
        $buffer .= $indent . '}
';
        // 'transparentheader' section
        $value = $context->find('transparentheader');
        $buffer .= $this->section73f11e7390271f16aaf1e281d354aa1d($context, $indent, $value);
        $buffer .= $indent . '</style>
';
        $buffer .= $indent . '<div class="sections-loader-wrapper show">
';
        $buffer .= $indent . '    <div class="sections-loader">
';
        // 'loader' section
        $value = $context->find('loader');
        $buffer .= $this->section8ea0f83071de86b26d1026c6661f9d6d($context, $indent, $value);
        // 'loader' inverted section
        $value = $context->find('loader');
        if (empty($value)) {
            
            $buffer .= $indent . '        ';
            // 'pix' section
            $value = $context->find('pix');
            $buffer .= $this->section71124ebac115908bcbe1976ab8ba2763($context, $indent, $value);
            $buffer .= '
';
        }
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';
        $value = $this->resolveValue($context->findDot('output.course_content_header'), $context);
        $buffer .= $indent . $value;
        $buffer .= '
';
        $buffer .= $indent . '    <div class="home-sections ';
        // 'userisediting' section
        $value = $context->find('userisediting');
        $buffer .= $this->sectionEe534bc00319ee64bce3640e9767ecc4($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <section ';
        // 'hasdefaultsections' section
        $value = $context->find('hasdefaultsections');
        $buffer .= $this->sectionBd5018c248b3b5842bf40b438092259f($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '    ';
        // 'hasdefaultsections' inverted section
        $value = $context->find('hasdefaultsections');
        if (empty($value)) {
            
            $buffer .= 'style="margin-top: -25px;"';
        }
        $buffer .= '>
';
        $buffer .= $indent . '        ';
        $value = $this->resolveValue($context->findDot('output.main_content'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '    </section>
';
        $buffer .= $indent . '
';
        $value = $this->resolveValue($context->findDot('output.course_content_footer'), $context);
        $buffer .= $indent . $value;
        $buffer .= '
';
        $buffer .= $indent . '
';
        // 'userisediting' section
        $value = $context->find('userisediting');
        $buffer .= $this->sectionC6ac18165d73b166ef49f066c0486b4c($context, $indent, $value);
        // 'js' section
        $value = $context->find('js');
        $buffer .= $this->sectionB6145ec38f1e580b8823ccaa835cea78($context, $indent, $value);

        return $buffer;
    }

    private function section73f11e7390271f16aaf1e281d354aa1d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
body#page-site-index.latest-frontpage.site-menubar-fold.animate-header .site-navbar .navbar-brand-logo i, body#page-site-index.latest-frontpage.site-menubar-fold.animate-header .site-navbar .nav-link {
    color: {{headercolor}};
}
body#page-site-index.latest-frontpage.site-menubar-fold.animate-header .site-navbar .navbar-container .hamburger .hamburger-bar, body#page-site-index.latest-frontpage.site-menubar-fold.animate-header .site-navbar .navbar-container .hamburger:after, body#page-site-index.latest-frontpage.site-menubar-fold.animate-header .site-navbar .navbar-container .hamburger:before {
    background: {{headercolor}};
}
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
                
                $buffer .= $indent . 'body#page-site-index.latest-frontpage.site-menubar-fold.animate-header .site-navbar .navbar-brand-logo i, body#page-site-index.latest-frontpage.site-menubar-fold.animate-header .site-navbar .nav-link {
';
                $buffer .= $indent . '    color: ';
                $value = $this->resolveValue($context->find('headercolor'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ';
';
                $buffer .= $indent . '}
';
                $buffer .= $indent . 'body#page-site-index.latest-frontpage.site-menubar-fold.animate-header .site-navbar .navbar-container .hamburger .hamburger-bar, body#page-site-index.latest-frontpage.site-menubar-fold.animate-header .site-navbar .navbar-container .hamburger:after, body#page-site-index.latest-frontpage.site-menubar-fold.animate-header .site-navbar .navbar-container .hamburger:before {
';
                $buffer .= $indent . '    background: ';
                $value = $this->resolveValue($context->find('headercolor'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ';
';
                $buffer .= $indent . '}
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8ea0f83071de86b26d1026c6661f9d6d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <img class="icon" src="{{loader}}"/>
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
                
                $buffer .= $indent . '        <img class="icon" src="';
                $value = $this->resolveValue($context->find('loader'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"/>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section71124ebac115908bcbe1976ab8ba2763(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' owl_loader, local_remuihomepage ';
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
                
                $buffer .= ' owl_loader, local_remuihomepage ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEe534bc00319ee64bce3640e9767ecc4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'editing';
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
                
                $buffer .= 'editing';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBd5018c248b3b5842bf40b438092259f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'class="default-sections panel invisible p-lg-50 p-md-30 p-20 m-b-0"';
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
                
                $buffer .= 'class="default-sections panel invisible p-lg-50 p-md-30 p-20 m-b-0"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFa2b9ba8548ba7fef9f019ea32f0f854(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'editingison, local_remuihomepage';
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
                
                $buffer .= 'editingison, local_remuihomepage';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC6ac18165d73b166ef49f066c0486b4c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="editing-alert">
        <p class="m-0">{{#str}}editingison, local_remuihomepage{{/str}}</p>
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
                
                $buffer .= $indent . '    <div class="editing-alert">
';
                $buffer .= $indent . '        <p class="m-0">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionFa2b9ba8548ba7fef9f019ea32f0f854($context, $indent, $value);
                $buffer .= '</p>
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB6145ec38f1e580b8823ccaa835cea78(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'local_remuihomepage/frontpage\'], function (FrontPage) {
    FrontPage.init({{contextid}}, {{userisediting}});
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
                
                $buffer .= $indent . 'require([\'local_remuihomepage/frontpage\'], function (FrontPage) {
';
                $buffer .= $indent . '    FrontPage.init(';
                $value = $this->resolveValue($context->find('contextid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ', ';
                $value = $this->resolveValue($context->find('userisediting'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
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
