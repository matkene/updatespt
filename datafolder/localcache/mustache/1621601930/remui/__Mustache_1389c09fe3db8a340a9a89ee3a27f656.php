<?php

class __Mustache_1389c09fe3db8a340a9a89ee3a27f656 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<form class="form-inline">
';
        $buffer .= $indent . '            <div class="mr-auto">
';
        $buffer .= $indent . '        <label>';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionA4a479119347335a02c817b96e2e4d55($context, $indent, $value);
        $buffer .= '</label>
';
        $buffer .= $indent . '        <div class="dropdown per-page-filter m-b-1 d-inline-block" data-region="per-page-filter">
';
        $buffer .= $indent . '            <button id="perpage" type="button" class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
';
        $buffer .= $indent . '                <span class="d-sm-inline-block" data-active-item-text>
';
        $buffer .= $indent . '                    ';
        $value = $this->resolveValue($context->find('perpage'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '
';
        $buffer .= $indent . '                </span>
';
        $buffer .= $indent . '            </button>
';
        $buffer .= $indent . '            <ul class="dropdown-menu" data-show-active-item aria-labelledby="manageentriesperpage">
';
        $buffer .= $indent . '                <li>
';
        $buffer .= $indent . '                    <a class="dropdown-item ';
        // 'entries5' section
        $value = $context->find('entries5');
        $buffer .= $this->section989ab497c20f8f2947742ff570ba8aaa($context, $indent, $value);
        $buffer .= '" href="javascript:void(0)" data-display-option="entries" data-value="5" data-pref="entries" aria-label="5" aria-controls="entries-view-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">
';
        $buffer .= $indent . '                        5
';
        $buffer .= $indent . '                    </a>
';
        $buffer .= $indent . '                    <a class="dropdown-item ';
        // 'entries10' section
        $value = $context->find('entries10');
        $buffer .= $this->section989ab497c20f8f2947742ff570ba8aaa($context, $indent, $value);
        $buffer .= '" href="javascript:void(0)" data-display-option="entries" data-value="10" data-pref="entries" aria-label="10" aria-controls="entries-view-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">
';
        $buffer .= $indent . '                        10
';
        $buffer .= $indent . '                    </a>
';
        $buffer .= $indent . '                    <a class="dropdown-item ';
        // 'entries20' section
        $value = $context->find('entries20');
        $buffer .= $this->section989ab497c20f8f2947742ff570ba8aaa($context, $indent, $value);
        $buffer .= '" href="javascript:void(0)" data-display-option="entries" data-value="20" data-pref="entries" aria-label="20" aria-controls="entries-view-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">
';
        $buffer .= $indent . '                        20
';
        $buffer .= $indent . '                    </a>
';
        $buffer .= $indent . '                    <a class="dropdown-item ';
        // 'entries25' section
        $value = $context->find('entries25');
        $buffer .= $this->section989ab497c20f8f2947742ff570ba8aaa($context, $indent, $value);
        $buffer .= '" href="javascript:void(0)" data-display-option="entries" data-value="25" data-pref="entries" aria-label="25" aria-controls="entries-view-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">
';
        $buffer .= $indent . '                        25
';
        $buffer .= $indent . '                    </a>
';
        $buffer .= $indent . '                    <a class="dropdown-item ';
        // 'entries50' section
        $value = $context->find('entries50');
        $buffer .= $this->section989ab497c20f8f2947742ff570ba8aaa($context, $indent, $value);
        $buffer .= '" href="javascript:void(0)" data-display-option="entries" data-value="50" data-pref="entries" aria-label="50" aria-controls="entries-view-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">
';
        $buffer .= $indent . '                        50
';
        $buffer .= $indent . '                    </a>
';
        $buffer .= $indent . '                </li>
';
        $buffer .= $indent . '            </ul>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div class="d-flex">
';
        $buffer .= $indent . '        <label class="mr-5" data-region-pages></label>
';
        $buffer .= $indent . '        <button type="button" class="btn btn-default btn-outline" data-action-paginate data-previous><</button>
';
        $buffer .= $indent . '        <button type="button" class="btn btn-default btn-outline" data-action-paginate data-next>></button>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</form>
';

        return $buffer;
    }

    private function sectionA4a479119347335a02c817b96e2e4d55(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' showing, block_remuiblck ';
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
                
                $buffer .= ' showing, block_remuiblck ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section989ab497c20f8f2947742ff570ba8aaa(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' active ';
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
                
                $buffer .= ' active ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
