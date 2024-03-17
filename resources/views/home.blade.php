@extends('layouts.master')
@section('head')
  @if(Request::is(Config::get('app.locale')) | Request::is('/'))
  <title>{{__('app.Tool_list')}} | Egim.io</title>
  <meta name="keywords" content="{{__('key.Tool_Home')}}">
  <meta name="description" content="{{__('des.Tool_Home')}}">
  @elseif(Request::is('*/about') | Request::is('about'))
  <title>{{__('app.About_us')}} | Egim.io</title>
  <meta name="keywords" content="{{__('key.About_us')}}">
  <meta name="description" content="{{__('des.About_us')}}">
  @endif
@endsection
@section('body')
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">@if(Request::is(Config::get('app.locale')) | Request::is('/')) {{__('app.Tool_list')}} @elseif(Request::is('*/about') | Request::is('about')) {{__('app.About_us')}} @endif</h4>
                  <p class="card-category">@if(Request::is(Config::get('app.locale')) | Request::is('/')) {{__('app.Tool_list')}} @elseif(Request::is('*/about') | Request::is('about')) {{__('app.About_us')}} @endif</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    @if(Request::is(Config::get('app.locale')) | Request::is('/'))
                    <table class="table">
                      <thead class="text-primary">
                        <input id="Searchtools" class="form-control" placeholder="{{__('app.Search')}}...">
                        </thead>
                      <tbody id="Searchtls">
                        <tr><td><a href="/{{ app()->getLocale() }}/css-minifier"> <h4>{{__('app.CSS_minifier')}}</h4> </a></td></tr>
                        <tr><td><a href="/{{ app()->getLocale() }}/css-unminifier"> <h4>{{__('app.CSS_unminifier')}}</h4> </a></td></tr>
                        <tr><td><a href="/{{ app()->getLocale() }}/css-comment-cleaner"> <h4>{{__('app.CSS_comment_cleaner')}}</h4> </a></td></tr>
                        <tr><td><a href="/{{ app()->getLocale() }}/password-generator"> <h4>{{__('app.Password_generator')}}</h4> </a></td></tr>
                        <tr><td><a href="/{{ app()->getLocale() }}/btn-design"><h4>{{__('app.Btn_designer')}}</h4></a></td></tr>
                        <tr><td><a href="/{{ app()->getLocale() }}/css-font-design"><h4>{{__('app.Font_design')}}</h4></a></td></tr>
                        <tr><td><a href="/{{ app()->getLocale() }}/start-with-letter"><h4>{{__('app.Start_with_letter')}}</h4></a></td></tr>
                        <tr><td><a href="/{{ app()->getLocale() }}/shadow-creator"><h4>{{__('app.Shaddow_maker')}}</h4></a></td></tr>
                        <tr><td><a href="/{{ app()->getLocale() }}/character-counter"><h4>{{__('app.Character_counter')}}</h4></a></td></tr>
                        <tr><td><a href="/{{ app()->getLocale() }}/rotate-div"><h4>{{__('app.Rotate_div')}}</h4></a></td></tr>
                        <tr><td><a href="/{{ app()->getLocale() }}/border-radius-generator"><h4>{{__('app.Border_radius_maker')}}</h4></a></td></tr>
                        <tr><td><a href="/{{ app()->getLocale() }}/color-picker"><h4>{{__('app.Color_picker')}}</h4></a></td></tr>
                        <tr><td><a href="/{{ app()->getLocale() }}/rgb-hex-converter"><h4>{{__('app.RGB_HEX_converter')}}</h4></a></td></tr>
                        <tr><td><a href="/{{ app()->getLocale() }}/slug-maker"><h4>{{__('app.Slug_maker')}}</h4></a></td></tr>
                        <tr><td><a href="/{{ app()->getLocale() }}/text-to-json-converter"><h4>{{__('app.Text_to_Json_converter')}}</h4></a></td></tr>
                        @if(2==4)<tr><td><a href="/{{ app()->getLocale() }}/image-cropper"><h4>{{__('app.Image_cropper')}}</h4></a></td></tr>@endif
                      </tbody>
                    </table>
                    @elseif(Request::is('*/about') | Request::is('about'))
                    <h4 class="pg">{!! __('det.About_us') !!}</h4>
                    @endif
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection
@section('foot')
@endsection
