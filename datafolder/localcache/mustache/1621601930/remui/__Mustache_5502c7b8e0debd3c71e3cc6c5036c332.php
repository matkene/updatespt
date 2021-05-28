<?php

class __Mustache_5502c7b8e0debd3c71e3cc6c5036c332 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div data-region="loading-placeholder-content" aria-hidden="true">
';
        // 'cards' section
        $value = $context->find('cards');
        $buffer .= $this->section663ef805e81d43e196eca73c21d48f8f($context, $indent, $value);
        // 'list' section
        $value = $context->find('list');
        $buffer .= $this->section82f9856500f02425c6b3958beec45cc4($context, $indent, $value);
        // 'summary' section
        $value = $context->find('summary');
        $buffer .= $this->sectionEe7ecd02cae9635a46367e83e3f1d633($context, $indent, $value);
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section663ef805e81d43e196eca73c21d48f8f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="card-deck dashboard-card-deck one-row" style="height: 13rem">
        <div class="card dashboard-card border-0">
            <div class="card-img-top bg-pulse-grey w-100" style="height: 7rem">
            </div>
            <div class="card-body course-info-container pl-0">
                <div class="bg-pulse-grey w-100" style="height: 1rem"></div>
            </div>
        </div>
        <div class="card dashboard-card border-0">
            <div class="card-img-top bg-pulse-grey w-100" style="height: 7rem">
            </div>
            <div class="card-body course-info-container pl-0">
                <div class="bg-pulse-grey w-100" style="height: 1rem"></div>
            </div>
        </div>
        <div class="card dashboard-card border-0">
            <div class="card-img-top bg-pulse-grey w-100" style="height: 7rem">
            </div>
            <div class="card-body course-info-container pl-0">
                <div class="bg-pulse-grey w-100" style="height: 1rem"></div>
            </div>
        </div>
        <div class="card dashboard-card border-0">
            <div class="card-img-top bg-pulse-grey w-100" style="height: 7rem">
            </div>
            <div class="card-body course-info-container pl-0">
                <div class="bg-pulse-grey w-100" style="height: 1rem"></div>
            </div>
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
                
                $buffer .= $indent . '    <div class="card-deck dashboard-card-deck one-row" style="height: 13rem">
';
                $buffer .= $indent . '        <div class="card dashboard-card border-0">
';
                $buffer .= $indent . '            <div class="card-img-top bg-pulse-grey w-100" style="height: 7rem">
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '            <div class="card-body course-info-container pl-0">
';
                $buffer .= $indent . '                <div class="bg-pulse-grey w-100" style="height: 1rem"></div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '        <div class="card dashboard-card border-0">
';
                $buffer .= $indent . '            <div class="card-img-top bg-pulse-grey w-100" style="height: 7rem">
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '            <div class="card-body course-info-container pl-0">
';
                $buffer .= $indent . '                <div class="bg-pulse-grey w-100" style="height: 1rem"></div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '        <div class="card dashboard-card border-0">
';
                $buffer .= $indent . '            <div class="card-img-top bg-pulse-grey w-100" style="height: 7rem">
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '            <div class="card-body course-info-container pl-0">
';
                $buffer .= $indent . '                <div class="bg-pulse-grey w-100" style="height: 1rem"></div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '        <div class="card dashboard-card border-0">
';
                $buffer .= $indent . '            <div class="card-img-top bg-pulse-grey w-100" style="height: 7rem">
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '            <div class="card-body course-info-container pl-0">
';
                $buffer .= $indent . '                <div class="bg-pulse-grey w-100" style="height: 1rem"></div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section82f9856500f02425c6b3958beec45cc4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <ul class="list-group">
        <li class="list-group-item course-listitem">
            <div class="col-md-6 span6 p-0 d-flex align-items-center">
                <div class="bg-pulse-grey rounded-circle mr-2" style="height: 1rem; width: 1rem;"></div>
                <div class="bg-pulse-grey w-p50" style="height: 1rem; margin: 0.5rem 0"></div>
            </div>
        </li>
        <li class="list-group-item course-listitem">
            <div class="col-md-6 span6 p-0 d-flex align-items-center">
                <div class="bg-pulse-grey rounded-circle mr-2" style="height: 1rem; width: 1rem;"></div>
                <div class="bg-pulse-grey w-p50" style="height: 1rem; margin: 0.5rem 0"></div>
            </div>
        </li>
        <li class="list-group-item course-listitem">
            <div class="col-md-6 span6 p-0 d-flex align-items-center">
                <div class="bg-pulse-grey rounded-circle mr-2" style="height: 1rem; width: 1rem;"></div>
                <div class="bg-pulse-grey w-p50" style="height: 1rem; margin: 0.5rem 0"></div>
            </div>
        </li>
        <li class="list-group-item course-listitem">
            <div class="col-md-6 span6 p-0 d-flex align-items-center">
                <div class="bg-pulse-grey rounded-circle mr-2" style="height: 1rem; width: 1rem;"></div>
                <div class="bg-pulse-grey w-p50" style="height: 1rem; margin: 0.5rem 0"></div>
            </div>
        </li>
    </ul>
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
                
                $buffer .= $indent . '    <ul class="list-group">
';
                $buffer .= $indent . '        <li class="list-group-item course-listitem">
';
                $buffer .= $indent . '            <div class="col-md-6 span6 p-0 d-flex align-items-center">
';
                $buffer .= $indent . '                <div class="bg-pulse-grey rounded-circle mr-2" style="height: 1rem; width: 1rem;"></div>
';
                $buffer .= $indent . '                <div class="bg-pulse-grey w-p50" style="height: 1rem; margin: 0.5rem 0"></div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </li>
';
                $buffer .= $indent . '        <li class="list-group-item course-listitem">
';
                $buffer .= $indent . '            <div class="col-md-6 span6 p-0 d-flex align-items-center">
';
                $buffer .= $indent . '                <div class="bg-pulse-grey rounded-circle mr-2" style="height: 1rem; width: 1rem;"></div>
';
                $buffer .= $indent . '                <div class="bg-pulse-grey w-p50" style="height: 1rem; margin: 0.5rem 0"></div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </li>
';
                $buffer .= $indent . '        <li class="list-group-item course-listitem">
';
                $buffer .= $indent . '            <div class="col-md-6 span6 p-0 d-flex align-items-center">
';
                $buffer .= $indent . '                <div class="bg-pulse-grey rounded-circle mr-2" style="height: 1rem; width: 1rem;"></div>
';
                $buffer .= $indent . '                <div class="bg-pulse-grey w-p50" style="height: 1rem; margin: 0.5rem 0"></div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </li>
';
                $buffer .= $indent . '        <li class="list-group-item course-listitem">
';
                $buffer .= $indent . '            <div class="col-md-6 span6 p-0 d-flex align-items-center">
';
                $buffer .= $indent . '                <div class="bg-pulse-grey rounded-circle mr-2" style="height: 1rem; width: 1rem;"></div>
';
                $buffer .= $indent . '                <div class="bg-pulse-grey w-p50" style="height: 1rem; margin: 0.5rem 0"></div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </li>
';
                $buffer .= $indent . '    </ul>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEe7ecd02cae9635a46367e83e3f1d633(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="course-summaryitem m-b-1 p-2">
        <div class="d-flex">
            <div class="d-flex">
                <div class="bg-pulse-grey rounded-circle m-0 p-0 m-r-1" style="height: 7rem; width: 7rem;"></div>
            </div>
            <div class="d-flex w-p100 flex-column">
                <div class="bg-pulse-grey w-p50 m-b-1" style="height: 1rem; margin: 0.5rem 0"></div>
                <div class="bg-pulse-grey w-p100" style="height: 13rem"></div>
            </div>
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
                
                $buffer .= $indent . '    <div class="course-summaryitem m-b-1 p-2">
';
                $buffer .= $indent . '        <div class="d-flex">
';
                $buffer .= $indent . '            <div class="d-flex">
';
                $buffer .= $indent . '                <div class="bg-pulse-grey rounded-circle m-0 p-0 m-r-1" style="height: 7rem; width: 7rem;"></div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '            <div class="d-flex w-p100 flex-column">
';
                $buffer .= $indent . '                <div class="bg-pulse-grey w-p50 m-b-1" style="height: 1rem; margin: 0.5rem 0"></div>
';
                $buffer .= $indent . '                <div class="bg-pulse-grey w-p100" style="height: 13rem"></div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
