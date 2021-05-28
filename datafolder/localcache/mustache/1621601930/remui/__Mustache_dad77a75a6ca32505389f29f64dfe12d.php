<?php

class __Mustache_dad77a75a6ca32505389f29f64dfe12d extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<li class="list-inline-item">
';
        $buffer .= $indent . '    <div class="bg-pulse-grey" style="width: 75px; height: 75px; border-radius: 50%;" alt="User Image"></div>
';
        $buffer .= $indent . '    <div class="users-list-name bg-pulse-grey" style="width: 75px; height: 24px; margin-top: 2px;"></div>
';
        $buffer .= $indent . '</li>
';

        return $buffer;
    }
}
