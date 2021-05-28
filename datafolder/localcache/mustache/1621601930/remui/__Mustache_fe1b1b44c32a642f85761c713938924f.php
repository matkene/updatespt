<?php

class __Mustache_fe1b1b44c32a642f85761c713938924f extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="row">
';
        // 'sectiondata' section
        $value = $context->find('sectiondata');
        $buffer .= $this->section15beb53fda9713b6960d71aafef62802($context, $indent, $value);
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        // 'js' section
        $value = $context->find('js');
        $buffer .= $this->section6f95247232258275d85c29322e1d69a2($context, $indent, $value);

        return $buffer;
    }

    private function section546c9dd8ee21aab120852d17cee8acce(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'id="{{id}}"';
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
                
                $buffer .= 'id="';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC444fdafbd8b5102c5573b7dfa5a82dd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'class="{{classes}}"';
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
                
                $buffer .= 'class="';
                $value = $this->resolveValue($context->find('classes'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6d14598c61b1adbd187f8553e08a9930(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'drag';
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
                
                $buffer .= 'drag';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8f09926946461fa64b243992ecaa8ee1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<a class="panel-action fa fa-arrows" aria-hidden="true"></a>';
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
                
                $buffer .= '<a class="panel-action fa fa-arrows" aria-hidden="true"></a>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section66197d6bf1e1326ee275269759311842(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <div class="panel-actions">
                            {{#dragable}}<a class="panel-action fa fa-arrows" aria-hidden="true"></a>{{/dragable}}
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
                
                $buffer .= $indent . '                            <div class="panel-actions">
';
                $buffer .= $indent . '                            ';
                // 'dragable' section
                $value = $context->find('dragable');
                $buffer .= $this->section8f09926946461fa64b243992ecaa8ee1($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3c69ca25644cc0ced9771c50b853b012(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="panel panel-bordered {{classes}}" id="{{id}}">
                    <div class="panel-heading {{#dragable}}drag{{/dragable}}">
                        <h4 class="p-20 m-0">{{blockname}}</h4>
                        {{#editing}}
                            <div class="panel-actions">
                            {{#dragable}}<a class="panel-action fa fa-arrows" aria-hidden="true"></a>{{/dragable}}
                            </div>
                        {{/editing}}
                    </div>
                    <div class="panel-body {{#dragable}}drag{{/dragable}} px-20 pb-20 pt-0">
                        {{{content}}}
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
                
                $buffer .= $indent . '                <div class="panel panel-bordered ';
                $value = $this->resolveValue($context->find('classes'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" id="';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '                    <div class="panel-heading ';
                // 'dragable' section
                $value = $context->find('dragable');
                $buffer .= $this->section6d14598c61b1adbd187f8553e08a9930($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                        <h4 class="p-20 m-0">';
                $value = $this->resolveValue($context->find('blockname'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</h4>
';
                // 'editing' section
                $value = $context->find('editing');
                $buffer .= $this->section66197d6bf1e1326ee275269759311842($context, $indent, $value);
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                    <div class="panel-body ';
                // 'dragable' section
                $value = $context->find('dragable');
                $buffer .= $this->section6d14598c61b1adbd187f8553e08a9930($context, $indent, $value);
                $buffer .= ' px-20 pb-20 pt-0">
';
                $buffer .= $indent . '                        ';
                $value = $this->resolveValue($context->find('content'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section15beb53fda9713b6960d71aafef62802(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <section {{#editing}}id="{{id}}"{{/editing}}  {{#classes}}class="{{classes}}"{{/classes}}>
            {{#content}}
                <div class="panel panel-bordered {{classes}}" id="{{id}}">
                    <div class="panel-heading {{#dragable}}drag{{/dragable}}">
                        <h4 class="p-20 m-0">{{blockname}}</h4>
                        {{#editing}}
                            <div class="panel-actions">
                            {{#dragable}}<a class="panel-action fa fa-arrows" aria-hidden="true"></a>{{/dragable}}
                            </div>
                        {{/editing}}
                    </div>
                    <div class="panel-body {{#dragable}}drag{{/dragable}} px-20 pb-20 pt-0">
                        {{{content}}}
                    </div>
                </div>
            {{/content}}
        </section>
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
                
                $buffer .= $indent . '        <section ';
                // 'editing' section
                $value = $context->find('editing');
                $buffer .= $this->section546c9dd8ee21aab120852d17cee8acce($context, $indent, $value);
                $buffer .= '  ';
                // 'classes' section
                $value = $context->find('classes');
                $buffer .= $this->sectionC444fdafbd8b5102c5573b7dfa5a82dd($context, $indent, $value);
                $buffer .= '>
';
                // 'content' section
                $value = $context->find('content');
                $buffer .= $this->section3c69ca25644cc0ced9771c50b853b012($context, $indent, $value);
                $buffer .= $indent . '        </section>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6f95247232258275d85c29322e1d69a2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'jquery\',\'jqueryui\'], function(jQuery, jQueryui){

    jQuery( "#sortable1, #sortable2, #sortable3" ).sortable({
        connectWith: ".connectedSortable",
        placeholder: "sort-highlight",
        forcePlaceholderSize: true,
        handle: ".drag",
        zIndex: 999999,
        stop:function(){
    
            var sortables   = [\'#sortable1\', \'#sortable2\', \'#sortable3\'];            
            var preferences = [\'remui_layout_top\', \'remui_layout_left\', \'remui_layout_right\'];            

            for(var loop=0; loop < sortables.length; loop++){

                var data = $(sortables[loop]).sortable(\'toArray\');
                var sortable = data.slice(1, data.length);
                
                M.util.set_user_preference(preferences[loop], JSON.stringify(sortable));
                
                if(sortable.length == 0)
                {
                    $(sortables[loop]).addClass(\'blankheight\');
                }else{
                    $(sortables[loop]).removeClass(\'blankheight\');
                }

            }

            {{! ar sortable1 = $(\'#sortable1\').sortable(\'toArray\');
            var sortable2 = $(\'#sortable2\').sortable(\'toArray\');
            var sortable3 = $(\'#sortable3\').sortable(\'toArray\');

            sortable1 = sortable1.slice(1, sortable1.length);
            sortable2 = sortable2.slice(1, sortable2.length);   
            sortable3 = sortable3.slice(1, sortable3.length);
            console.log(sortable1);
            console.log(sortable2);
            console.log(sortable3);
            M.util.set_user_preference("remui_layout_top", JSON.stringify(sortable1));
            M.util.set_user_preference("remui_layout_left", JSON.stringify(sortable2));
            M.util.set_user_preference("remui_layout_right", JSON.stringify(sortable3));
            if(sortable1.length == 0)
            {
                $(\'#sortable1\').addClass(\'blankheight\');
            }else{
                $(\'#sortable1\').removeClass(\'blankheight\');
            } }}


            {{! 
                $(\'#sortable1, #sortable2\').prepend($(\'#nonemptyright\')); // making it to the first element of sortable3
                $(\'#sortable1, #sortable3\').prepend($(\'#nonemptyleft\')); // making it to the first element of sortable2
                $(\'#sortable2, #sortable3\').prepend($(\'#nonemptytop\'));  // making it to the first element of sortable1
            }}
        }
    }).disableSelection();

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
                
                $buffer .= $indent . 'require([\'jquery\',\'jqueryui\'], function(jQuery, jQueryui){
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    jQuery( "#sortable1, #sortable2, #sortable3" ).sortable({
';
                $buffer .= $indent . '        connectWith: ".connectedSortable",
';
                $buffer .= $indent . '        placeholder: "sort-highlight",
';
                $buffer .= $indent . '        forcePlaceholderSize: true,
';
                $buffer .= $indent . '        handle: ".drag",
';
                $buffer .= $indent . '        zIndex: 999999,
';
                $buffer .= $indent . '        stop:function(){
';
                $buffer .= $indent . '    
';
                $buffer .= $indent . '            var sortables   = [\'#sortable1\', \'#sortable2\', \'#sortable3\'];            
';
                $buffer .= $indent . '            var preferences = [\'remui_layout_top\', \'remui_layout_left\', \'remui_layout_right\'];            
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '            for(var loop=0; loop < sortables.length; loop++){
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '                var data = $(sortables[loop]).sortable(\'toArray\');
';
                $buffer .= $indent . '                var sortable = data.slice(1, data.length);
';
                $buffer .= $indent . '                
';
                $buffer .= $indent . '                M.util.set_user_preference(preferences[loop], JSON.stringify(sortable));
';
                $buffer .= $indent . '                
';
                $buffer .= $indent . '                if(sortable.length == 0)
';
                $buffer .= $indent . '                {
';
                $buffer .= $indent . '                    $(sortables[loop]).addClass(\'blankheight\');
';
                $buffer .= $indent . '                }else{
';
                $buffer .= $indent . '                    $(sortables[loop]).removeClass(\'blankheight\');
';
                $buffer .= $indent . '                }
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '            }
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '        }
';
                $buffer .= $indent . '    }).disableSelection();
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '});
';
                $buffer .= $indent . ' 
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
