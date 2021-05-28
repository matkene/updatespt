<?php

class __Mustache_d4550da3d1186dead65553a26ceca50a extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        // 'cannotview' inverted section
        $value = $context->find('cannotview');
        if (empty($value)) {
            
            $buffer .= $indent . '<div id="course-progress-';
            $value = $this->resolveValue($context->find('uniqid'), $context);
            $buffer .= call_user_func($this->mustache->getEscape(), $value);
            $buffer .= '" style="display: none;">
';
            $buffer .= $indent . '    <table id="DataTables_Teacher">
';
            $buffer .= $indent . '        <thead>
';
            $buffer .= $indent . '            <tr role="row">
';
            $buffer .= $indent . '            <th>#</th>
';
            $buffer .= $indent . '            <th>';
            // 'str' section
            $value = $context->find('str');
            $buffer .= $this->section404612bb3409ed52fcdbd24574f636b0($context, $indent, $value);
            $buffer .= '</th>
';
            $buffer .= $indent . '            <th>';
            // 'str' section
            $value = $context->find('str');
            $buffer .= $this->sectionDde632eb0ed0d463948118a51fbe7df7($context, $indent, $value);
            $buffer .= '</th>
';
            $buffer .= $indent . '            <th>';
            // 'str' section
            $value = $context->find('str');
            $buffer .= $this->section2e188b98e0c51f02196a3814a9fbaedb($context, $indent, $value);
            $buffer .= '</th>
';
            $buffer .= $indent . '            <th>';
            // 'str' section
            $value = $context->find('str');
            $buffer .= $this->section5cb491709d3f0aa4dd55276926cc56f8($context, $indent, $value);
            $buffer .= '</th>
';
            $buffer .= $indent . '            </tr>
';
            $buffer .= $indent . '        </thead>
';
            $buffer .= $indent . '        <tbody>
';
            // 'course_progress' section
            $value = $context->find('course_progress');
            $buffer .= $this->section622f466f5d92738eebd3bdd7ad5a8019($context, $indent, $value);
            $buffer .= $indent . '        </tbody>
';
            $buffer .= $indent . '    </table>
';
            $buffer .= $indent . '    <div class="student_progress_ele">
';
            $buffer .= $indent . '    </div>
';
            $buffer .= $indent . '</div>
';
            $buffer .= $indent . '
';
            $buffer .= $indent . '
';
            // 'js' section
            $value = $context->find('js');
            $buffer .= $this->section6fa3a1728f1a9008abcb7dc8b3443218($context, $indent, $value);
        }

        return $buffer;
    }

    private function section404612bb3409ed52fcdbd24574f636b0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'course,theme_remui';
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
                
                $buffer .= 'course,theme_remui';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDde632eb0ed0d463948118a51fbe7df7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'startdate,theme_remui';
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
                
                $buffer .= 'startdate,theme_remui';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2e188b98e0c51f02196a3814a9fbaedb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'enrolledstudents,theme_remui';
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
                
                $buffer .= 'enrolledstudents,theme_remui';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5cb491709d3f0aa4dd55276926cc56f8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'progress,theme_remui';
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
                
                $buffer .= 'progress,theme_remui';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section622f466f5d92738eebd3bdd7ad5a8019(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{> block_remuiblck/dashboard_teacher_view_row }}
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
                
                if ($partial = $this->mustache->loadPartial('block_remuiblck/dashboard_teacher_view_row')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6fa3a1728f1a9008abcb7dc8b3443218(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'theme_remui/babel-external-helpers\'], function(babelHelpers) {
  require([\'block_remuiblck/course_progress\'], function(courseprogress) {
      courseprogress.init(\'#course-progress-{{uniqid}}\');
  });
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
                
                $buffer .= $indent . 'require([\'theme_remui/babel-external-helpers\'], function(babelHelpers) {
';
                $buffer .= $indent . '  require([\'block_remuiblck/course_progress\'], function(courseprogress) {
';
                $buffer .= $indent . '      courseprogress.init(\'#course-progress-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '\');
';
                $buffer .= $indent . '  });
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
