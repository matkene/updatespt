<?php

class __Mustache_2bd684e5048bcb35a0cfce4829386863 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<div id="course-cards-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" class="card-deck dashboard-card-deck ';
        $blockFunction = $context->findInBlock('classes');
        if (is_callable($blockFunction)) {
            $buffer .= call_user_func($blockFunction, $context);
        }
        $buffer .= ' slick-slider" data-region="card-deck" role="list">
';
        // 'courses' section
        $value = $context->find('courses');
        $buffer .= $this->section5c6d7799b9df0a38f5821b3a1e2b443d($context, $indent, $value);
        $buffer .= $indent . '</div>
';
        // 'js' section
        $value = $context->find('js');
        $buffer .= $this->section844ca71c366413cdcf18aeaabe724a13($context, $indent, $value);

        return $buffer;
    }

    private function section5c6d7799b9df0a38f5821b3a1e2b443d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{> core_course/coursecard }}
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
                
                if ($partial = $this->mustache->loadPartial('core_course/coursecard')) {
                    $buffer .= $partial->renderInternal($context, $indent . '    ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section844ca71c366413cdcf18aeaabe724a13(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'jquery\', \'theme_remui/slick\'], function($) {
    var colors = [\'#f2a654\', \'#fe6768\', \'#57c7d4\', \'#56c19a\', \'#526069\', \'#46657d\'];
    $(\'.wdm-course-card-body\').each(function(index, element) {
        index >= colors.length ? index = index % colors.length : index = index;
        $(element).css(\'background-color\', colors[index]);
    });
    $(\'.dashboard-card-deck\').css("overflow", "unset");
    $("#course-cards-{{uniqid}}").slick({
        dots: false,
        arrows: true,
        infinite: false,
        rtl: ($("html").attr("dir") == "rtl") ? true : false,
        opacity: 0,
        speed: 500,
        slidesToShow: 4,
        slidesToScroll: 4,
        responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3
            }
            }, {
            breakpoint: 800,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2
            }
            }, {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
            }
        ]
    });
    $(window).trigger(\'resize\');
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
                
                $buffer .= $indent . 'require([\'jquery\', \'theme_remui/slick\'], function($) {
';
                $buffer .= $indent . '    var colors = [\'#f2a654\', \'#fe6768\', \'#57c7d4\', \'#56c19a\', \'#526069\', \'#46657d\'];
';
                $buffer .= $indent . '    $(\'.wdm-course-card-body\').each(function(index, element) {
';
                $buffer .= $indent . '        index >= colors.length ? index = index % colors.length : index = index;
';
                $buffer .= $indent . '        $(element).css(\'background-color\', colors[index]);
';
                $buffer .= $indent . '    });
';
                $buffer .= $indent . '    $(\'.dashboard-card-deck\').css("overflow", "unset");
';
                $buffer .= $indent . '    $("#course-cards-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '").slick({
';
                $buffer .= $indent . '        dots: false,
';
                $buffer .= $indent . '        arrows: true,
';
                $buffer .= $indent . '        infinite: false,
';
                $buffer .= $indent . '        rtl: ($("html").attr("dir") == "rtl") ? true : false,
';
                $buffer .= $indent . '        opacity: 0,
';
                $buffer .= $indent . '        speed: 500,
';
                $buffer .= $indent . '        slidesToShow: 4,
';
                $buffer .= $indent . '        slidesToScroll: 4,
';
                $buffer .= $indent . '        responsive: [{
';
                $buffer .= $indent . '            breakpoint: 1024,
';
                $buffer .= $indent . '            settings: {
';
                $buffer .= $indent . '                slidesToShow: 3,
';
                $buffer .= $indent . '                slidesToScroll: 3
';
                $buffer .= $indent . '            }
';
                $buffer .= $indent . '            }, {
';
                $buffer .= $indent . '            breakpoint: 800,
';
                $buffer .= $indent . '            settings: {
';
                $buffer .= $indent . '                slidesToShow: 2,
';
                $buffer .= $indent . '                slidesToScroll: 2
';
                $buffer .= $indent . '            }
';
                $buffer .= $indent . '            }, {
';
                $buffer .= $indent . '            breakpoint: 480,
';
                $buffer .= $indent . '            settings: {
';
                $buffer .= $indent . '                slidesToShow: 1,
';
                $buffer .= $indent . '                slidesToScroll: 1
';
                $buffer .= $indent . '            }
';
                $buffer .= $indent . '            }
';
                $buffer .= $indent . '        ]
';
                $buffer .= $indent . '    });
';
                $buffer .= $indent . '    $(window).trigger(\'resize\');
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
