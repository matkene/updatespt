<?php

class __Mustache_95bb56889374560425315d1e37a23e45 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        // 'caneditfrontpage' section
        $value = $context->find('caneditfrontpage');
        $buffer .= $this->section81ed94361e590a6e7e2b5c3cff549322($context, $indent, $value);

        return $buffer;
    }

    private function section81ed94361e590a6e7e2b5c3cff549322(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="take-screenshot-section w-100 mx-auto text-center" data-html2canvas-ignore>
        <a href="#" class="show-screenshot-modal d-block" data-toggle="modal" data-target="#screenshotShareModal">
            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAA7EAAAOxAGVKw4bAAAF6klEQVRoge2YX4hVVRTGv3W4DCHDMIgMg0TBMEiESFiISEQUSkh/CXqoiIoiMSifKoJ8C4KIAqnHSoqkepAIgzJ6KC2iIsu0rDT7a2XpVDY248z69XD2ue6zPefec+8MvTQfDLPOvnuv8619vrP2WkdawAL+37C5LAYGJJ0naQRoScrMTEBm1nbdipY4IDObkTQt6WdJX5rZdL8cWt2ndMQ9km6TNGhmGZCF8SwQlSQVdjTmkmYknZD0nKRH5sijNwACLgNmaQB372TPAuvc/b8LwN1HgR1NyDcM8HVgtB8uWfcpZZDr+0pJa3pY081eLelqTkuwMWrfgeC8BQyY2UAgnkkal3S3pOFeb1YHMxsKPj9z9y8luZk5MC1p2sxmoqRQXltBPAPGzexSSecGoouUB9uStBS4OAQzn3BJu4CfQpaakTQpaQI4aGZvSTqcBlK6cvclkjaY2fXAmJkNqg+ZpaAiI/Vgu5mdkLRf0lZJz4fr8g2A84CP3b2UKebpJW37nKsN7HT3s0tPwN2XSdoiaV0U+adm9p2k8yWN9bijvwE/FzsFDJrZKLBkDk9CkXxekHS/mf3QAhYpP4wujQjul3STpGPKNb/dzE5HHekwusGkpLckvQrskXQCmDYzmdmA8sNuhaRrJF1mZos6+etkS7pW0l7gCbn7GuDH+HEDm+LZ7v5oB4X84u7PAaWn1AnAmLtvBX4hHIZ9yOkbd18l4MGEPMDj0c0EvJxqOmAvcAsw1JR85HcQuBn4pMtJXWmH6/sEvFqxq0eBW4EV7n4P8FfFnO+BVeRFXF8AWsBFwVfPcPfXBXyUDHbMQuG3z4HVCZkMGAHWAVvDnN+BI8AnYWxdmFNKze6+CthXxaGLvU/AviRNdcPvwB3kpXQcwBpgm7sfj30lj/64u28DLk7WDgC3u/vRXuTk7l8JOFDFsm4x8AownBBYSb7jTarTWXc/AFyUPIVhd9/eYH2MgwIOpsQ7PIlTwMqIuMg1vK9uQeozsg8AqykXdxe4+1QPEvo2K4gU/0Pernvv9oS/Aosl3SVpWeynzmdijwF3Bh8FPpW0p2Z+pZ1JahWEY+I1ZF4zs7jzGJd0pUJVW3XwdDiYWma2XnlLWoy5me2omV9lZ+0nEBMuJhVjYcG0me1WGVcRNSJVQXfBqKTrkrF3lffLXQFk7XQWEy4IFGNhfAKYSHxckAZaZacBpbpPfE5IOtZkrZSXypVBxBII9qTO3Jml8dw6u9iMGnskdkjexEw2WVsEUBro8B7En0qKsZkmO9UlwJnYZ2iUsg7z27aZZe1PIQ0kNKS8M4udHJqrhCQdji+AsyQNzbuEzGwIWKoy3qvamdTuIoM0MYwCw40llA50kdDa5GZvSvqsZn7HoIL9haQ3Yodmtjbut7ttTuMsFOwrgMHofoeBF8mbmZ4kFNZsAw5F44skre+0GWdICGgfTF2ykEJXtj6aP2lmzyrvxGp3qUYGb0t6OsuyyYjcFZLO6ZK1yoEA39fVPzUF3UfAeLIrQ+6+3d3/6FbZhjmvEDVB7q7g84PKRfU4IuCbmtK3/T/5/STwmLunFekIsAl4h7zoS/3NAruBTe4+mqwdDj7/rtiwTva3Rt5srKjp/utwTNJDZvZUQmRA0tmSVkq6EBgJvn4FPjazDyX9YMnndGCDpIcVCjuaS2i/gGd6lFBhnwI2AotpVveUEGQzDGx091NnqqMRtgq4EZiqI1whodg+DjwJLO81AGC5u28pOrgGG5baU8DNApa5+/tVkxtiiryh2QgsaUB8CbAB2OvuJ/skT+C8zMib8RvM7HHl5W18s16/mE0AuyTtNLNDkv5UnqqHzWxM0uXKP8vP9cv2r5LuBV4qSAy6+wNhN0vRdpFQJ3s2+Dvl7rP9fPupsafc/UHKB6rk7oPAZnJdzyvmi3zgtjkmX8qX5JXp+ZLuBi4xs8WSzupHTvNlS/oHOGZmb0t6UtL+uK2tTPhRIOPKy+j098Yk6CPFtsnlvv4EvjazEvEFLGABOf4FEByPmk56/KYAAAAASUVORK5CYII=" alt="take screenshot button" class="camera-img">
        </a>

        <div class="flash fixed-top w-p100 h-p100 bg-white"></div>
        <canvas id="videofixCanvas" class="d-none"></canvas>

        <!-- Screenshot share Modal -->
        <div class="modal modal-slide-from-bottom" id="screenshotShareModal">
            <div class="modal-dialog modal-lg modal-simple modal-bottom">
                <div class="modal-content rounded-0">
                    <!-- Modal Close -->
                    <button type="button" class="close position-absolute mx-10 my-5" data-dismiss="modal" style="right: 0;z-index: 1;">×</button>

                    <!-- Modal body -->
                    <div class="modal-body p-0">
                        <section class="taken-screenshot" style="display:none;">
                            <div class="card-group">
                                <!-- preview screenshot -->
                                <div class="screenshot-container card card-block p-0">
                                    <a href="" class="preview-screenshot" target="_blank">
                                        <div class="vertical-align screenshot text-center bg-primary p-30 h-400">
                                        </div>
                                    </a>
                                </div>

                                <div class="card card-block d-block p-20">
                                    <h3 class="screenshot-success font-weight-300 m-0 mb-15">Screenshot uploaded successfully.</h3>

                                    <h4 class="font-weight-300 my-25">Share Now</h4>

                                    <!-- share links -->
                                    <a href="" target="_blank" data-network="facebook" class="social-share btn-round btn-lg btn social-facebook mx-5 w-55"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="" target="_blank" data-network="twitter" class="social-share btn-round btn-lg btn social-twitter mx-5 w-55"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    <a href="" target="_blank" data-network="linkedin" class="social-share btn-round btn-lg btn social-linkedin mx-5 w-55"><i class="fa fa-linkedin" aria-hidden="true"></i></a>

                                    <!-- download image link -->
                                    <a href="" target="_blank" class="btn-round btn-lg btn btn-info download-screenshot mx-5 w-55" download><i class="fa fa-download" aria-hidden="true"></i></a>

                                    <h4 class="font-weight-300 my-25">Not happy?</h4>

                                    <button type="button" class="btn btn-warning delete-screenshot">Delete and Capture Again</button>
                                </div>
                            </div>
                        </section>

                        <section class="take-screenshot p-40">
                            <h3 class="screenshot-heading font-weight-300 m-0 mb-15">Share your Moodle homepage with the World.</h3>
                            <a href="#" id="take_screenshot" class="btn btn-primary text-uppercase mt-25">CAPTURE SCREENSHOT</a>
                            <label class="failed-screenshot-message text-danger"></label>
                        </section>
                    </div>
                </div>
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
                
                $buffer .= $indent . '    <div class="take-screenshot-section w-100 mx-auto text-center" data-html2canvas-ignore>
';
                $buffer .= $indent . '        <a href="#" class="show-screenshot-modal d-block" data-toggle="modal" data-target="#screenshotShareModal">
';
                $buffer .= $indent . '            <img src="data:image/png;base64,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" alt="take screenshot button" class="camera-img">
';
                $buffer .= $indent . '        </a>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '        <div class="flash fixed-top w-p100 h-p100 bg-white"></div>
';
                $buffer .= $indent . '        <canvas id="videofixCanvas" class="d-none"></canvas>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '        <!-- Screenshot share Modal -->
';
                $buffer .= $indent . '        <div class="modal modal-slide-from-bottom" id="screenshotShareModal">
';
                $buffer .= $indent . '            <div class="modal-dialog modal-lg modal-simple modal-bottom">
';
                $buffer .= $indent . '                <div class="modal-content rounded-0">
';
                $buffer .= $indent . '                    <!-- Modal Close -->
';
                $buffer .= $indent . '                    <button type="button" class="close position-absolute mx-10 my-5" data-dismiss="modal" style="right: 0;z-index: 1;">×</button>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '                    <!-- Modal body -->
';
                $buffer .= $indent . '                    <div class="modal-body p-0">
';
                $buffer .= $indent . '                        <section class="taken-screenshot" style="display:none;">
';
                $buffer .= $indent . '                            <div class="card-group">
';
                $buffer .= $indent . '                                <!-- preview screenshot -->
';
                $buffer .= $indent . '                                <div class="screenshot-container card card-block p-0">
';
                $buffer .= $indent . '                                    <a href="" class="preview-screenshot" target="_blank">
';
                $buffer .= $indent . '                                        <div class="vertical-align screenshot text-center bg-primary p-30 h-400">
';
                $buffer .= $indent . '                                        </div>
';
                $buffer .= $indent . '                                    </a>
';
                $buffer .= $indent . '                                </div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '                                <div class="card card-block d-block p-20">
';
                $buffer .= $indent . '                                    <h3 class="screenshot-success font-weight-300 m-0 mb-15">Screenshot uploaded successfully.</h3>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '                                    <h4 class="font-weight-300 my-25">Share Now</h4>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '                                    <!-- share links -->
';
                $buffer .= $indent . '                                    <a href="" target="_blank" data-network="facebook" class="social-share btn-round btn-lg btn social-facebook mx-5 w-55"><i class="fa fa-facebook" aria-hidden="true"></i></a>
';
                $buffer .= $indent . '                                    <a href="" target="_blank" data-network="twitter" class="social-share btn-round btn-lg btn social-twitter mx-5 w-55"><i class="fa fa-twitter" aria-hidden="true"></i></a>
';
                $buffer .= $indent . '                                    <a href="" target="_blank" data-network="linkedin" class="social-share btn-round btn-lg btn social-linkedin mx-5 w-55"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '                                    <!-- download image link -->
';
                $buffer .= $indent . '                                    <a href="" target="_blank" class="btn-round btn-lg btn btn-info download-screenshot mx-5 w-55" download><i class="fa fa-download" aria-hidden="true"></i></a>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '                                    <h4 class="font-weight-300 my-25">Not happy?</h4>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '                                    <button type="button" class="btn btn-warning delete-screenshot">Delete and Capture Again</button>
';
                $buffer .= $indent . '                                </div>
';
                $buffer .= $indent . '                            </div>
';
                $buffer .= $indent . '                        </section>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '                        <section class="take-screenshot p-40">
';
                $buffer .= $indent . '                            <h3 class="screenshot-heading font-weight-300 m-0 mb-15">Share your Moodle homepage with the World.</h3>
';
                $buffer .= $indent . '                            <a href="#" id="take_screenshot" class="btn btn-primary text-uppercase mt-25">CAPTURE SCREENSHOT</a>
';
                $buffer .= $indent . '                            <label class="failed-screenshot-message text-danger"></label>
';
                $buffer .= $indent . '                        </section>
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </div>
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
