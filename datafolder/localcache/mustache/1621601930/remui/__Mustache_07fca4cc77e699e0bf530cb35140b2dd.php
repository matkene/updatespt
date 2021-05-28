<?php

class __Mustache_07fca4cc77e699e0bf530cb35140b2dd extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '</div>
';
        $value = $this->resolveValue($context->findDot('output.standard_after_main_region_html'), $context);
        $buffer .= $indent . $value;
        $buffer .= '
';
        $buffer .= $indent . '    <!-- End Page -->
';
        $buffer .= $indent . '
';
        if ($partial = $this->mustache->loadPartial('theme_remui/footer')) {
            $buffer .= $partial->renderInternal($context, $indent . '    ');
        }
        $buffer .= $indent . '
';
        // 'js' section
        $value = $context->find('js');
        $buffer .= $this->sectionF7471e1b15f7082a5d4cd7da37894594($context, $indent, $value);
        $buffer .= $indent . '</body>
';
        $buffer .= $indent . '</html>
';

        return $buffer;
    }

    private function section903e4871fd3465465a4367a4eb1eeef6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        require([\'jquery\'], function (jQuery) {
            {{^editingenabled}}
            // Functions and code for Dictionary functionality

            // function getSelected data will give the selected text
            function getSelectedText() {
                if (window.getSelection) {
                    return window.getSelection().toString();
                } else if (document.selection) {
                    return document.selection.createRange().text;
                }
                return \'\';
            }

            // Event trigger for text selection
            jQuery(\'body\').mouseup(function(e){
                var search = getSelectedText();
                if(search.trim() == ""){
                    return;
                }
                var obj = getSelectionCoords();
                if(obj.x != \'undefined\' && obj.y != \'undefined\'){
                    // var x = obj.x-152;
                    var x = obj.x-122;
                    x += \'px\';
                    // var y = obj.y+12;
                    var y = obj.y+17;
                    y += \'px\';
                    getWord(x,y,\'headword\',search);
                }
            });

            // Ajax to fetch the word meaning
            function getWord(x,y,token,search){
                searchword = token+\'=\'+search;
                var url = "https://api.pearson.com/v2/dictionaries/entries?"+searchword;
                var settings = {
                    "async": true,
                    "crossDomain": true,
                    "url": url,
                    "method": "GET",
                    "success": function(response) {
                  
                        if(response != \'\' && response != null){
                            jQuery("#definition_layer").remove();
                        
                            var meaning = \'No definition found.\';
                            var i=0;
                            for(i=0;i<response.results.length;i++){
                                if(response.results[i].senses[0].definition != null){
                                    meaning = response.results[i].senses[0].definition;
                                    break;
                                }
                            }
                            var data = "<div id=\'definition_layer\' style=\'position:fixed; cursor:pointer;left:"+x+";top:"+y+";z-index:9999;\'>";
                            data += \'<div class="popover bs-popover-bottom w-400"><div class="arrow"></div><h3 class="popover-header">\'+search;
                            data += \'</h3><div class="popover-body"><p>\' + meaning + \'</p></div></div>\';
                            data += \'</div>\';
                            jQuery("body").append(data);  
                            
                        }
                    },
                    "failure": function(error) {
                    
                    }
                }
                jQuery.ajax(settings);
            }

            // Close the Tooltip Event
            jQuery(window).scroll(function(){
               jQuery("#definition_layer").remove();
            });

            jQuery(\'body\').click(function(){
                jQuery("#definition_layer").remove();
            });

            // Get location of selected text
            function getSelectionCoords(win) {
               win = win || window;
               var doc = win.document;
               var sel = doc.selection, range, rects, rect;
               var x = 0, y = 0;
               if (sel) {
                if (sel.toString().trim() == "" || sel.toString().trim() == "undefined") {
                      return false;
                   }
                   if (sel.type != "Control" && sel.toString != "") {
                       range = sel.createRange();
                       range.collapse(true);
                       x = range.boundingLeft;
                       y = range.boundingTop;
                   }
               } else if (win.getSelection) {
                   sel = win.getSelection();
                   console.log("SELECTED : "+sel.toString());
                   if (sel.toString().trim() == "" || sel.toString().trim() == "undefined") {
                      return false;
                   }
                   if (sel.rangeCount && sel.toString() != "") {
                       range = sel.getRangeAt(0).cloneRange();
                       if (range.getClientRects) {
                           range.collapse(true);
                           rects = range.getClientRects();
                           if (rects.length > 0) {
                               rect = rects[0];
                           }
                           x = rect.left;
                           y = rect.top;
                       }
                       // Fall back to inserting a temporary element
                       if (x == 0 && y == 0) {
                           var span = doc.createElement("span");
                           if (span.getClientRects) {
                               // Ensure span has dimensions and position by
                               // adding a zero-width space character
                               span.appendChild( doc.createTextNode("\\u200b") );
                               range.insertNode(span);
                               rect = span.getClientRects()[0];
                               x = rect.left;
                               y = rect.top;
                               var spanParent = span.parentNode;
                               spanParent.removeChild(span);

                               // Glue any broken text nodes back together
                               spanParent.normalize();
                           }
                       }
                   }
               }
               return { x: x, y: y };
            }
            {{/editingenabled}}
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
                
                $buffer .= $indent . '        require([\'jquery\'], function (jQuery) {
';
                // 'editingenabled' inverted section
                $value = $context->find('editingenabled');
                if (empty($value)) {
                    
                    $buffer .= $indent . '            // Functions and code for Dictionary functionality
';
                    $buffer .= $indent . '
';
                    $buffer .= $indent . '            // function getSelected data will give the selected text
';
                    $buffer .= $indent . '            function getSelectedText() {
';
                    $buffer .= $indent . '                if (window.getSelection) {
';
                    $buffer .= $indent . '                    return window.getSelection().toString();
';
                    $buffer .= $indent . '                } else if (document.selection) {
';
                    $buffer .= $indent . '                    return document.selection.createRange().text;
';
                    $buffer .= $indent . '                }
';
                    $buffer .= $indent . '                return \'\';
';
                    $buffer .= $indent . '            }
';
                    $buffer .= $indent . '
';
                    $buffer .= $indent . '            // Event trigger for text selection
';
                    $buffer .= $indent . '            jQuery(\'body\').mouseup(function(e){
';
                    $buffer .= $indent . '                var search = getSelectedText();
';
                    $buffer .= $indent . '                if(search.trim() == ""){
';
                    $buffer .= $indent . '                    return;
';
                    $buffer .= $indent . '                }
';
                    $buffer .= $indent . '                var obj = getSelectionCoords();
';
                    $buffer .= $indent . '                if(obj.x != \'undefined\' && obj.y != \'undefined\'){
';
                    $buffer .= $indent . '                    // var x = obj.x-152;
';
                    $buffer .= $indent . '                    var x = obj.x-122;
';
                    $buffer .= $indent . '                    x += \'px\';
';
                    $buffer .= $indent . '                    // var y = obj.y+12;
';
                    $buffer .= $indent . '                    var y = obj.y+17;
';
                    $buffer .= $indent . '                    y += \'px\';
';
                    $buffer .= $indent . '                    getWord(x,y,\'headword\',search);
';
                    $buffer .= $indent . '                }
';
                    $buffer .= $indent . '            });
';
                    $buffer .= $indent . '
';
                    $buffer .= $indent . '            // Ajax to fetch the word meaning
';
                    $buffer .= $indent . '            function getWord(x,y,token,search){
';
                    $buffer .= $indent . '                searchword = token+\'=\'+search;
';
                    $buffer .= $indent . '                var url = "https://api.pearson.com/v2/dictionaries/entries?"+searchword;
';
                    $buffer .= $indent . '                var settings = {
';
                    $buffer .= $indent . '                    "async": true,
';
                    $buffer .= $indent . '                    "crossDomain": true,
';
                    $buffer .= $indent . '                    "url": url,
';
                    $buffer .= $indent . '                    "method": "GET",
';
                    $buffer .= $indent . '                    "success": function(response) {
';
                    $buffer .= $indent . '                  
';
                    $buffer .= $indent . '                        if(response != \'\' && response != null){
';
                    $buffer .= $indent . '                            jQuery("#definition_layer").remove();
';
                    $buffer .= $indent . '                        
';
                    $buffer .= $indent . '                            var meaning = \'No definition found.\';
';
                    $buffer .= $indent . '                            var i=0;
';
                    $buffer .= $indent . '                            for(i=0;i<response.results.length;i++){
';
                    $buffer .= $indent . '                                if(response.results[i].senses[0].definition != null){
';
                    $buffer .= $indent . '                                    meaning = response.results[i].senses[0].definition;
';
                    $buffer .= $indent . '                                    break;
';
                    $buffer .= $indent . '                                }
';
                    $buffer .= $indent . '                            }
';
                    $buffer .= $indent . '                            var data = "<div id=\'definition_layer\' style=\'position:fixed; cursor:pointer;left:"+x+";top:"+y+";z-index:9999;\'>";
';
                    $buffer .= $indent . '                            data += \'<div class="popover bs-popover-bottom w-400"><div class="arrow"></div><h3 class="popover-header">\'+search;
';
                    $buffer .= $indent . '                            data += \'</h3><div class="popover-body"><p>\' + meaning + \'</p></div></div>\';
';
                    $buffer .= $indent . '                            data += \'</div>\';
';
                    $buffer .= $indent . '                            jQuery("body").append(data);  
';
                    $buffer .= $indent . '                            
';
                    $buffer .= $indent . '                        }
';
                    $buffer .= $indent . '                    },
';
                    $buffer .= $indent . '                    "failure": function(error) {
';
                    $buffer .= $indent . '                    
';
                    $buffer .= $indent . '                    }
';
                    $buffer .= $indent . '                }
';
                    $buffer .= $indent . '                jQuery.ajax(settings);
';
                    $buffer .= $indent . '            }
';
                    $buffer .= $indent . '
';
                    $buffer .= $indent . '            // Close the Tooltip Event
';
                    $buffer .= $indent . '            jQuery(window).scroll(function(){
';
                    $buffer .= $indent . '               jQuery("#definition_layer").remove();
';
                    $buffer .= $indent . '            });
';
                    $buffer .= $indent . '
';
                    $buffer .= $indent . '            jQuery(\'body\').click(function(){
';
                    $buffer .= $indent . '                jQuery("#definition_layer").remove();
';
                    $buffer .= $indent . '            });
';
                    $buffer .= $indent . '
';
                    $buffer .= $indent . '            // Get location of selected text
';
                    $buffer .= $indent . '            function getSelectionCoords(win) {
';
                    $buffer .= $indent . '               win = win || window;
';
                    $buffer .= $indent . '               var doc = win.document;
';
                    $buffer .= $indent . '               var sel = doc.selection, range, rects, rect;
';
                    $buffer .= $indent . '               var x = 0, y = 0;
';
                    $buffer .= $indent . '               if (sel) {
';
                    $buffer .= $indent . '                if (sel.toString().trim() == "" || sel.toString().trim() == "undefined") {
';
                    $buffer .= $indent . '                      return false;
';
                    $buffer .= $indent . '                   }
';
                    $buffer .= $indent . '                   if (sel.type != "Control" && sel.toString != "") {
';
                    $buffer .= $indent . '                       range = sel.createRange();
';
                    $buffer .= $indent . '                       range.collapse(true);
';
                    $buffer .= $indent . '                       x = range.boundingLeft;
';
                    $buffer .= $indent . '                       y = range.boundingTop;
';
                    $buffer .= $indent . '                   }
';
                    $buffer .= $indent . '               } else if (win.getSelection) {
';
                    $buffer .= $indent . '                   sel = win.getSelection();
';
                    $buffer .= $indent . '                   console.log("SELECTED : "+sel.toString());
';
                    $buffer .= $indent . '                   if (sel.toString().trim() == "" || sel.toString().trim() == "undefined") {
';
                    $buffer .= $indent . '                      return false;
';
                    $buffer .= $indent . '                   }
';
                    $buffer .= $indent . '                   if (sel.rangeCount && sel.toString() != "") {
';
                    $buffer .= $indent . '                       range = sel.getRangeAt(0).cloneRange();
';
                    $buffer .= $indent . '                       if (range.getClientRects) {
';
                    $buffer .= $indent . '                           range.collapse(true);
';
                    $buffer .= $indent . '                           rects = range.getClientRects();
';
                    $buffer .= $indent . '                           if (rects.length > 0) {
';
                    $buffer .= $indent . '                               rect = rects[0];
';
                    $buffer .= $indent . '                           }
';
                    $buffer .= $indent . '                           x = rect.left;
';
                    $buffer .= $indent . '                           y = rect.top;
';
                    $buffer .= $indent . '                       }
';
                    $buffer .= $indent . '                       // Fall back to inserting a temporary element
';
                    $buffer .= $indent . '                       if (x == 0 && y == 0) {
';
                    $buffer .= $indent . '                           var span = doc.createElement("span");
';
                    $buffer .= $indent . '                           if (span.getClientRects) {
';
                    $buffer .= $indent . '                               // Ensure span has dimensions and position by
';
                    $buffer .= $indent . '                               // adding a zero-width space character
';
                    $buffer .= $indent . '                               span.appendChild( doc.createTextNode("\\u200b") );
';
                    $buffer .= $indent . '                               range.insertNode(span);
';
                    $buffer .= $indent . '                               rect = span.getClientRects()[0];
';
                    $buffer .= $indent . '                               x = rect.left;
';
                    $buffer .= $indent . '                               y = rect.top;
';
                    $buffer .= $indent . '                               var spanParent = span.parentNode;
';
                    $buffer .= $indent . '                               spanParent.removeChild(span);
';
                    $buffer .= $indent . '
';
                    $buffer .= $indent . '                               // Glue any broken text nodes back together
';
                    $buffer .= $indent . '                               spanParent.normalize();
';
                    $buffer .= $indent . '                           }
';
                    $buffer .= $indent . '                       }
';
                    $buffer .= $indent . '                   }
';
                    $buffer .= $indent . '               }
';
                    $buffer .= $indent . '               return { x: x, y: y };
';
                    $buffer .= $indent . '            }
';
                }
                $buffer .= $indent . '        });
';
                $buffer .= $indent . '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF7471e1b15f7082a5d4cd7da37894594(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{#enabledictionary}}
        require([\'jquery\'], function (jQuery) {
            {{^editingenabled}}
            // Functions and code for Dictionary functionality

            // function getSelected data will give the selected text
            function getSelectedText() {
                if (window.getSelection) {
                    return window.getSelection().toString();
                } else if (document.selection) {
                    return document.selection.createRange().text;
                }
                return \'\';
            }

            // Event trigger for text selection
            jQuery(\'body\').mouseup(function(e){
                var search = getSelectedText();
                if(search.trim() == ""){
                    return;
                }
                var obj = getSelectionCoords();
                if(obj.x != \'undefined\' && obj.y != \'undefined\'){
                    // var x = obj.x-152;
                    var x = obj.x-122;
                    x += \'px\';
                    // var y = obj.y+12;
                    var y = obj.y+17;
                    y += \'px\';
                    getWord(x,y,\'headword\',search);
                }
            });

            // Ajax to fetch the word meaning
            function getWord(x,y,token,search){
                searchword = token+\'=\'+search;
                var url = "https://api.pearson.com/v2/dictionaries/entries?"+searchword;
                var settings = {
                    "async": true,
                    "crossDomain": true,
                    "url": url,
                    "method": "GET",
                    "success": function(response) {
                  
                        if(response != \'\' && response != null){
                            jQuery("#definition_layer").remove();
                        
                            var meaning = \'No definition found.\';
                            var i=0;
                            for(i=0;i<response.results.length;i++){
                                if(response.results[i].senses[0].definition != null){
                                    meaning = response.results[i].senses[0].definition;
                                    break;
                                }
                            }
                            var data = "<div id=\'definition_layer\' style=\'position:fixed; cursor:pointer;left:"+x+";top:"+y+";z-index:9999;\'>";
                            data += \'<div class="popover bs-popover-bottom w-400"><div class="arrow"></div><h3 class="popover-header">\'+search;
                            data += \'</h3><div class="popover-body"><p>\' + meaning + \'</p></div></div>\';
                            data += \'</div>\';
                            jQuery("body").append(data);  
                            
                        }
                    },
                    "failure": function(error) {
                    
                    }
                }
                jQuery.ajax(settings);
            }

            // Close the Tooltip Event
            jQuery(window).scroll(function(){
               jQuery("#definition_layer").remove();
            });

            jQuery(\'body\').click(function(){
                jQuery("#definition_layer").remove();
            });

            // Get location of selected text
            function getSelectionCoords(win) {
               win = win || window;
               var doc = win.document;
               var sel = doc.selection, range, rects, rect;
               var x = 0, y = 0;
               if (sel) {
                if (sel.toString().trim() == "" || sel.toString().trim() == "undefined") {
                      return false;
                   }
                   if (sel.type != "Control" && sel.toString != "") {
                       range = sel.createRange();
                       range.collapse(true);
                       x = range.boundingLeft;
                       y = range.boundingTop;
                   }
               } else if (win.getSelection) {
                   sel = win.getSelection();
                   console.log("SELECTED : "+sel.toString());
                   if (sel.toString().trim() == "" || sel.toString().trim() == "undefined") {
                      return false;
                   }
                   if (sel.rangeCount && sel.toString() != "") {
                       range = sel.getRangeAt(0).cloneRange();
                       if (range.getClientRects) {
                           range.collapse(true);
                           rects = range.getClientRects();
                           if (rects.length > 0) {
                               rect = rects[0];
                           }
                           x = rect.left;
                           y = rect.top;
                       }
                       // Fall back to inserting a temporary element
                       if (x == 0 && y == 0) {
                           var span = doc.createElement("span");
                           if (span.getClientRects) {
                               // Ensure span has dimensions and position by
                               // adding a zero-width space character
                               span.appendChild( doc.createTextNode("\\u200b") );
                               range.insertNode(span);
                               rect = span.getClientRects()[0];
                               x = rect.left;
                               y = rect.top;
                               var spanParent = span.parentNode;
                               spanParent.removeChild(span);

                               // Glue any broken text nodes back together
                               spanParent.normalize();
                           }
                       }
                   }
               }
               return { x: x, y: y };
            }
            {{/editingenabled}}
        });

    {{/enabledictionary}}
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
                
                // 'enabledictionary' section
                $value = $context->find('enabledictionary');
                $buffer .= $this->section903e4871fd3465465a4367a4eb1eeef6($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
