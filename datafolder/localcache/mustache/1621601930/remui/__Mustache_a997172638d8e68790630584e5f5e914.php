<?php

class __Mustache_a997172638d8e68790630584e5f5e914 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div id="tasks" class="table-responsive container p-0">
';
        $buffer .= $indent . '    <a data-region="add-task" class="btn btn-default add-item-toggle d-none">
';
        $buffer .= $indent . '        <i class="icon wb-plus" aria-hidden="true"></i>
';
        $buffer .= $indent . '        ';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section133b47369c6232c28d20bbd2a022f07c($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '    </a>
';
        $buffer .= $indent . '    <div class="filters row">
';
        $buffer .= $indent . '        <div class="filter-options col-sm-12 col-md-6 d-flex justify-content-start">
';
        $buffer .= $indent . '            <div class="input-search input-search-dark w-p100">
';
        $buffer .= $indent . '                <i class="input-search-icon wb-search" aria-hidden="true"></i>
';
        $buffer .= $indent . '                <input data-region="task-search-filter" type="text" class="form-control" name="" placeholder="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section94b12e49fbc081cf08f9ea6194aee5a3($context, $indent, $value);
        $buffer .= '" autocomplete="off">
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div class="filter-options col-sm-12 col-md-6 d-flex justify-content-end" >
';
        if ($partial = $this->mustache->loadPartial('block_remuiblck/task-duration-selector')) {
            $buffer .= $partial->renderInternal($context, $indent . '            ');
        }
        if ($partial = $this->mustache->loadPartial('block_remuiblck/task-status-selector')) {
            $buffer .= $partial->renderInternal($context, $indent . '            ');
        }
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <ul data-region="task-list" class="task-list list-group list-group-dividered unstyled">
';
        if ($partial = $this->mustache->loadPartial('block_remuiblck/placeholder-task-list-item')) {
            $buffer .= $partial->renderInternal($context, $indent . '        ');
        }
        if ($partial = $this->mustache->loadPartial('block_remuiblck/placeholder-task-list-item')) {
            $buffer .= $partial->renderInternal($context, $indent . '        ');
        }
        if ($partial = $this->mustache->loadPartial('block_remuiblck/placeholder-task-list-item')) {
            $buffer .= $partial->renderInternal($context, $indent . '        ');
        }
        $buffer .= $indent . '    </ul>
';
        $buffer .= $indent . '    <div class="task-processing">
';
        $buffer .= $indent . '        <div class="task-processing-icon"><i class="fa fa-cog fa-spin"></i></div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';
        // 'js' section
        $value = $context->find('js');
        $buffer .= $this->sectionD2291c6de77e2c408740b0dbbda22e10($context, $indent, $value);

        return $buffer;
    }

    private function section133b47369c6232c28d20bbd2a022f07c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' addtask, block_remuiblck ';
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
                
                $buffer .= ' addtask, block_remuiblck ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section94b12e49fbc081cf08f9ea6194aee5a3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' search, core_admin ';
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
                
                $buffer .= ' search, core_admin ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD2291c6de77e2c408740b0dbbda22e10(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'block_remuiblck/schedule_task\'], function(scheduletask) {
    scheduletask.init(\'#tasks\');
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
                
                $buffer .= $indent . 'require([\'block_remuiblck/schedule_task\'], function(scheduletask) {
';
                $buffer .= $indent . '    scheduletask.init(\'#tasks\');
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
