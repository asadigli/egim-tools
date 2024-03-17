@if(Request::is('*/text-to-json-converter') | Request::is('text-to-json-converter') | Request::is('*/css-unminifier') | Request::is('css-unminifier') | Request::is('*/css-minifier') | Request::is('css-minifier') | Request::is('*/css-comment-cleaner') | Request::is('css-comment-cleaner'))
 <div class="notify-section notify-success" id="copiedmincss" style="display: none;">
    <p>{{__('app.Copied')}}</p>
    <a onclick="close_notify()">&#10008;</a>
</div>
<div class="notify-section notify-danger" id="text" style="display: none;">
    <p>{{__('app.Empty_field')}}</p>
    <a onclick="close_notify()">&#10008;</a>
</div>
<div class="notify-section notify-success" id="success-text" style="display: none;">
    <p>{{__('app.Success')}}</p>
    <a onclick="close_notify()">&#10008;</a>
</div>
@elseif(Request::is('*/color-picker') | Request::is('color-picker'))
<div class="notify-section notify-success" id="copied" style="display: none;">
    <p>{{__('app.Copied')}}</p>
    <a onclick="close_notify()">&#10008;</a>
</div>
@elseif(Request::is('*/rgb-hex-converter') | Request::is('rgb-hex-converter') | Request::is('*/password-generator') | Request::is('password-generator'))
<div class="notify-section notify-success" id="copied" style="display: none;">
    <p>{{__('app.Copied')}}</p>
    <a onclick="close_notify()">&#10008;</a>
</div>
@endif