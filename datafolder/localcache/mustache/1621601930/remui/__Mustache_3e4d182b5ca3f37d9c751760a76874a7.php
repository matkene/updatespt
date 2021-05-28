<?php

class __Mustache_3e4d182b5ca3f37d9c751760a76874a7 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        // 'cannotview' inverted section
        $value = $context->find('cannotview');
        if (empty($value)) {
            
            $buffer .= $indent . '<div id="recent_active_forum" class="table-responsive" style="overflow-x: auto;">
';
            $buffer .= $indent . '    <table class="table">
';
            $buffer .= $indent . '        <thead>
';
            $buffer .= $indent . '            <tr>
';
            $buffer .= $indent . '                <th style="height: 38px; width: 20%;"><div class="bg-pulse-grey mb-1" style="width: 80%; height: 100%;"></div></th>
';
            $buffer .= $indent . '                <th style="height: 38px;"><div class="bg-pulse-grey mb-1" style="width: 80%; height: 100%;"></div></th>
';
            $buffer .= $indent . '                <th style="height: 38px; width: 15%;"><div class="bg-pulse-grey mb-1" style="width: 80%; height: 100%;"></div></th>
';
            $buffer .= $indent . '                <th style="height: 38px; width: 15%;"><div class="bg-pulse-grey mb-1" style="width: 80%; height: 100%;"></div></th>
';
            $buffer .= $indent . '                <th style="height: 38px; width: 15%;"><div class="bg-pulse-grey mb-1" style="width: 80%; height: 100%;"></div></th>
';
            $buffer .= $indent . '            </tr>
';
            $buffer .= $indent . '        </thead>
';
            $buffer .= $indent . '        <tbody>
';
            $buffer .= $indent . '            <tr>
';
            $buffer .= $indent . '                <td style="height: 38px; width: 20%;"><div class="bg-pulse-grey mb-1" style="width: 80%; height: 100%;"></div></td>
';
            $buffer .= $indent . '                <td style="height: 38px;"><div class="bg-pulse-grey mb-1" style="width: 80%; height: 100%;"></div></td>
';
            $buffer .= $indent . '                <td style="height: 38px; width: 15%;"><div class="bg-pulse-grey mb-1" style="width: 40px; height: 40px; border-radius: 50%"></div></td>
';
            $buffer .= $indent . '                <td style="height: 38px; width: 15%;"><div class="bg-pulse-grey mb-1" style="width: 80%; height: 100%;"></div></td>
';
            $buffer .= $indent . '                <td style="height: 38px; width: 15%;"><div class="bg-pulse-grey mb-1" style="width: 40px; height: 17px; border-radius: 2rem;"></div></td>
';
            $buffer .= $indent . '            </tr>
';
            $buffer .= $indent . '            <tr>
';
            $buffer .= $indent . '                <td style="height: 38px; width: 20%;"><div class="bg-pulse-grey mb-1" style="width: 80%; height: 100%;"></div></td>
';
            $buffer .= $indent . '                <td style="height: 38px;"><div class="bg-pulse-grey mb-1" style="width: 80%; height: 100%;"></div></td>
';
            $buffer .= $indent . '                <td style="height: 38px; width: 15%;"><div class="bg-pulse-grey mb-1" style="width: 40px; height: 40px; border-radius: 50%"></div></td>
';
            $buffer .= $indent . '                <td style="height: 38px; width: 15%;"><div class="bg-pulse-grey mb-1" style="width: 80%; height: 100%;"></div></td>
';
            $buffer .= $indent . '                <td style="height: 38px; width: 15%;"><div class="bg-pulse-grey mb-1" style="width: 40px; height: 17px; border-radius: 2rem;"></div></td>
';
            $buffer .= $indent . '            </tr>
';
            $buffer .= $indent . '        </tbody>
';
            $buffer .= $indent . '    </table>
';
            $buffer .= $indent . '</div>
';
            // 'js' section
            $value = $context->find('js');
            $buffer .= $this->sectionC4c5457a148e1041c3ba75ee01f2a009($context, $indent, $value);
        }

        return $buffer;
    }

    private function sectionC4c5457a148e1041c3ba75ee01f2a009(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'block_remuiblck/recent_active_forum\'], function(recentActiveForum) {
  recentActiveForum.init(\'#recent_active_forum\');
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
                
                $buffer .= $indent . 'require([\'block_remuiblck/recent_active_forum\'], function(recentActiveForum) {
';
                $buffer .= $indent . '  recentActiveForum.init(\'#recent_active_forum\');
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
