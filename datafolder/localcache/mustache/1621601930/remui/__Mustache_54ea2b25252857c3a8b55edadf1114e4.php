<?php

class __Mustache_54ea2b25252857c3a8b55edadf1114e4 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        // 'cannotview' inverted section
        $value = $context->find('cannotview');
        if (empty($value)) {
            
            $buffer .= $indent . '<div id="quiz_overview" class="remuiblck-courseanalysis">
';
            $buffer .= $indent . '     <div class="w-full">
';
            $buffer .= $indent . '        <div class="col-md-12 p-0">
';
            $buffer .= $indent . '            <select id=\'coursecategorylist\' class=\'form-control mb-10\'>
';
            $buffer .= $indent . '                <option value="">';
            // 'str' section
            $value = $context->find('str');
            $buffer .= $this->section48a2de42b27acc023dafeb2a796f288c($context, $indent, $value);
            $buffer .= '</option>
';
            // 'quizcourse' section
            $value = $context->find('quizcourse');
            $buffer .= $this->sectionCf971992d9d6f3294a259916008126fd($context, $indent, $value);
            $buffer .= $indent . '            </select>
';
            $buffer .= $indent . '        </div>
';
            $buffer .= $indent . '        <div class="col-md-12 p-0">
';
            $buffer .= $indent . '            <div id="analysis-chart-area">
';
            $buffer .= $indent . '                <div class="analysis-chart-wrapper">
';
            $buffer .= $indent . '                    <canvas id="analysischart"></canvas>
';
            $buffer .= $indent . '                </div>
';
            $buffer .= $indent . '                <div class="analysis-chart-pagination d-none">
';
            if ($partial = $this->mustache->loadPartial('block_remuiblck/per-page-and-pagination-selector')) {
                $buffer .= $partial->renderInternal($context, $indent . '                    ');
            }
            $buffer .= $indent . '                </div>
';
            $buffer .= $indent . '            </div>
';
            $buffer .= $indent . '        </div>
';
            $buffer .= $indent . '
';
            $buffer .= $indent . '        <div id = "course-stats" class="row px-15 justify-content-center">
';
            $buffer .= $indent . '            <div class="col-md-4 col-sm-6 py-20 d-flex align-items-center flex-column">
';
            $buffer .= $indent . '                <div id="highestgradelabel" class="counter-label font-size-20 font-weight-600">';
            // 'str' section
            $value = $context->find('str');
            $buffer .= $this->section299b2cc1aa6bafd698ff3761c0bd7c3b($context, $indent, $value);
            $buffer .= '</div>
';
            $buffer .= $indent . '                <div id="highestgrade" class="counter-label display-4 green-500">0</div>
';
            $buffer .= $indent . '                <div id="highestactivity" class="counter-label text-center"></div>
';
            $buffer .= $indent . '            </div>
';
            $buffer .= $indent . '            <div class="col-md-4 col-sm-6 py-20 d-flex align-items-center flex-column">
';
            $buffer .= $indent . '                <div id="lowestgradelabel" class="counter-label font-size-20 font-weight-600">';
            // 'str' section
            $value = $context->find('str');
            $buffer .= $this->section438bb50b1b7454855cb77f375e36d0e5($context, $indent, $value);
            $buffer .= '</div>
';
            $buffer .= $indent . '                <div id="lowestgrade" class="counter-label display-4 red-500">0</div>
';
            $buffer .= $indent . '                <div id="lowestactivity" class="counter-label  text-center"></div>
';
            $buffer .= $indent . '            </div>
';
            $buffer .= $indent . '            <div class="col-md-4 col-sm-6 py-20 d-flex align-items-center flex-column">
';
            $buffer .= $indent . '                <div id="averagegradelabel" class="counter-label font-size-20 font-weight-600">';
            // 'str' section
            $value = $context->find('str');
            $buffer .= $this->section0af6df24c3d0febff625d9d86380bc1d($context, $indent, $value);
            $buffer .= '</div>
';
            $buffer .= $indent . '                <div id="averagegrade" class="counter-label display-4 purple-500">0</div>
';
            $buffer .= $indent . '                <div id="allactivities" class="counter-label text-center">';
            // 'str' section
            $value = $context->find('str');
            $buffer .= $this->section0d7965a6054282527c4544ab6148d923($context, $indent, $value);
            $buffer .= '</div>
';
            $buffer .= $indent . '            </div>
';
            $buffer .= $indent . '        </div>
';
            $buffer .= $indent . '    </div>
';
            $buffer .= $indent . '
';
            $buffer .= $indent . '</div>
';
            $buffer .= $indent . '
';
            // 'js' section
            $value = $context->find('js');
            $buffer .= $this->section2daf67c262752d72c12bc8545425ddee($context, $indent, $value);
        }

        return $buffer;
    }

    private function section48a2de42b27acc023dafeb2a796f288c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'selectacourse, theme_remui';
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
                
                $buffer .= 'selectacourse, theme_remui';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCf971992d9d6f3294a259916008126fd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <option data-id="{{id}}">{{{name}}}</option>
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
                
                $buffer .= $indent . '                    <option data-id="';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= $value;
                $buffer .= '</option>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section299b2cc1aa6bafd698ff3761c0bd7c3b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'highestgrade, theme_remui';
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
                
                $buffer .= 'highestgrade, theme_remui';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section438bb50b1b7454855cb77f375e36d0e5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'lowestgrade, theme_remui';
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
                
                $buffer .= 'lowestgrade, theme_remui';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0af6df24c3d0febff625d9d86380bc1d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'averagegrade, theme_remui';
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
                
                $buffer .= 'averagegrade, theme_remui';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0d7965a6054282527c4544ab6148d923(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'allActivities, theme_remui';
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
                
                $buffer .= 'allActivities, theme_remui';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2daf67c262752d72c12bc8545425ddee(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'block_remuiblck/courseanalytics\'], function(courseanalytics){
    courseanalytics.init(\'#quiz_overview\');
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
                
                $buffer .= $indent . 'require([\'block_remuiblck/courseanalytics\'], function(courseanalytics){
';
                $buffer .= $indent . '    courseanalytics.init(\'#quiz_overview\');
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
