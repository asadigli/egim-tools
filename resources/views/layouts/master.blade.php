<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8"/>
  <link rel="apple-touch-icon" sizes="76x76" href="/img/logo.png">
  <link rel="icon" type="image/png" href="/img/logo.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.7.1/css/all.css" />
  <link rel="stylesheet" type="text/css" href="/css/egim.min.css?v={{md5(uniqid())}}" />
  @if(2==4)
  <link rel="stylesheet" type="text/css" href="/css/emath.css?v={{md5(uniqid())}}" />
  @endif
  <meta name="author" content="Egim IO">
  <meta name="theme-color" content="#0c90ef">
  @section('head')
  @show
</head>
<body>
  <div class="wrapper">
    <div class="sidebar">
      <div class="logo">
        <a @if(Request::is('finance') | Request::is('finance/*') | Request::is('*/finance') | Request::is('*/finance/*')) href="/{{Lang::locale()}}/finance" @elseif(Request::is('medical') | Request::is('medical/*') | Request::is('*/medical') | Request::is('*/medical/*'))  @else href="/{{app()->getLocale()}}" @endif class="simple-text logo-normal">
          <strong>Egim</strong>.io
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          @if(Request::is('finance') | Request::is('finance/*') | Request::is('*/finance') | Request::is('*/finance/*'))
          <li class="nav-item @if(Request::is('*/finance') | Request::is('finance'))active @endif">
            <a class="nav-link" href="/{{Lang::locale()}}/finance">
              <p>{{__('app.Home')}}</p>
            </a>
          </li>
          <li class="nav-item @if(Request::is('*/loan-calculation'))active @endif">
            <a class="nav-link" href="/{{Lang::locale()}}/finance/loan-calculation">
              <p>{{__('app.Loan_calculation')}}</p>
            </a>
          </li>
          <li class="nav-item @if(Request::is('*/present-value-calculation'))active @endif">
            <a class="nav-link" href="/{{Lang::locale()}}/finance/present-value-calculation">
              <p>{{__('app.Present_value_calculation')}}</p>
            </a>
          </li>
          <li class="nav-item @if(Request::is('*/future-value-calculation'))active @endif">
            <a class="nav-link" href="/{{Lang::locale()}}/finance/future-value-calculation">
              <p>{{__('app.Future_value_calculation')}}</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/{{app()->getLocale()}}">
              <p><strong>{{__('app.Tool_list')}}</strong></p>
            </a>
          </li>
          <li class="nav-item @if(Request::is('*/about') | Request::is('about'))active @endif">
            <a class="nav-link" href="/{{Lang::locale()}}/finance/about">
              <p>{{__('app.About')}}</p>
            </a>
          </li>
          @elseif(Request::is('medical') | Request::is('medical/*') | Request::is('*/medical') | Request::is('*/medical/*'))
          <li class="nav-item @if(Request::is('*/medical') | Request::is('medical'))active @endif">
            <a class="nav-link" href="/{{Lang::locale()}}/medical">
              <p>{{__('app.Home')}}</p>
            </a>
          </li>
          <li class="nav-item @if(Request::is('*/medical/terminology-meaning') | Request::is('medical/terminology-meaning'))active @endif">
            <a class="nav-link" href="/{{Lang::locale()}}/medical/terminology-meaning">
              <p>{{__('app.Terminologies')}}</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/{{app()->getLocale()}}">
              <p><strong>{{__('app.Tool_list')}}</strong></p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" @if(app()->getLocale() != null) href="/{{app()->getLocale()}}/finance" @else href="/finance" @endif>
              <p><strong>{{__('app.Finance')}}</strong></p>
            </a>
          </li>
          @else
          <li class="nav-item @if(Request::is(Config::get('app.locale')) | Request::is('/'))active @endif">
            <a class="nav-link" @if(app()->getLocale() != null) href="/{{app()->getLocale()}}" @else href="/" @endif>
              <p>{{__('app.Home')}}</p>
            </a>
          </li>
          <li class="nav-item @if(Request::is('*/css-minifier') | Request::is('css-minifier'))active @endif">
            <a class="nav-link" @if(app()->getLocale() != null) href="/{{app()->getLocale()}}/css-minifier" @else href="{{app()->getLocale()}}/css-minifier" @endif>
              <p>{{__('app.CSS_minifier')}} </p>
            </a>
          </li>
          <li class="nav-item @if(Request::is('*/password-generator') | Request::is('password-generator'))active @endif">
            <a class="nav-link" @if(app()->getLocale() != null) href="/{{app()->getLocale()}}/password-generator" @else href="/password-generator" @endif>
              <p>{{__('app.Password_generator')}}</p>
            </a>
          </li>
          <li class="nav-item @if(Request::is('*/btn-design') | Request::is('btn-design'))active @endif">
            <a class="nav-link" @if(app()->getLocale() != null) href="/{{app()->getLocale()}}/btn-design" @else href="/btn-design" @endif>
              <p>{{__('app.Btn_designer')}}</p>
            </a>
          </li>
          <li class="nav-item @if(Request::is('*/shadow-creator') | Request::is('shadow-creator'))active @endif">
            <a class="nav-link" @if(app()->getLocale() != null) href="/{{app()->getLocale()}}/shadow-creator" @else href="/shadow-creator" @endif>
              <p>{{__('app.Shaddow_maker')}}</p>
            </a>
          </li>
          <li class="nav-item @if(Request::is('*/character-counter') | Request::is('character-counter'))active @endif">
            <a class="nav-link" @if(app()->getLocale() != null) href="/{{app()->getLocale()}}/character-counter" @else href="/character-counter" @endif>
              <p>{{__('app.Character_counter')}}</p>
            </a>
          </li>
          <li class="nav-item @if(Request::is('*/color-picker') | Request::is('color-picker'))active @endif">
            <a class="nav-link" @if(app()->getLocale() != null) href="/{{app()->getLocale()}}/color-picker" @else href="/color-picker" @endif>
              <p>{{__('app.Color_picker')}}</p>
            </a>
          </li>
          @if(1==3)
          <li class="nav-item @if(Request::is('*/image-cropper') | Request::is('image-cropper'))active @endif">
            <a class="nav-link" @if(app()->getLocale() != null) href="/{{app()->getLocale()}}/image-cropper" @else href="/image-cropper" @endif>
              <p>{{__('app.Image_cropper')}}</p>
            </a>
          </li>
          <li class="nav-item @if(Request::is('math'))active @endif">
            <a class="nav-link" @if(app()->getLocale() != null) href="/{{app()->getLocale()}}/math" @else href="/math" @endif>
              <p><strong>{{__('app.Math_solver')}}</strong></p>
            </a>
          </li>
          @endif
          <li class="nav-item">
            <a class="nav-link" @if(app()->getLocale() != null) href="/{{app()->getLocale()}}/finance" @else href="/finance" @endif>
              <p><strong>{{__('app.Finance')}}</strong></p>
            </a>
          </li>
          <li class="nav-item @if(Request::is('*/about') | Request::is('about'))active @endif">
            <a class="nav-link" @if(app()->getLocale() != null) href="/{{app()->getLocale()}}/about" @else href="/about" @endif>
              <p>{{__('app.About')}}</p>
            </a>
          </li>
          @endif
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
              @if(Request::is('*/finance') | Request::is('finance/*') | Request::is('finance') | Request::is('*/finance/*'))
              <a class="navbar-brand" @if(app()->getLocale() != null) href="/{{app()->getLocale()}}/finance" @else href="/finance" @endif>{{__('app.Finance')}}
              @else
              <a class="navbar-brand" @if(app()->getLocale() != null) href="/{{app()->getLocale()}}" @else href="/" @endif>{{__('app.Tools')}}
              @endif
            </a>
          </div>
          <li class="dropdown language-selector">
            <a class="dropdown-toggle" data-toggle="dropdown" data-close-others="true">
              @if(app()->getLocale() != null) {{app()->getLocale()}} @else en @endif
              @if(in_array(app()->getLocale(), ['en','es','id','zh','tr','hi','az','de']) && !in_array(substr(Request::path(),0, 2), ['en','es','id','zh','tr','hi','az','de']))
                @php($ok = Request::path())
              @else
                @php($ok = substr(Request::path(), 3))
              @endif
            </a>
            <ul class="dropdown-menu dlm">
              <li><a @if(Request::is('/') | Request::is(Config::get('app.locale'))) href="/en" @else href="/en/{{$ok}}" @endif @if(Lang::locale() == 'en') class="active" @endif data-lang='en'><span>English</span></a></li>
              <li><a @if(Request::is('/') | Request::is(Config::get('app.locale'))) href="/az" @else href="/az/{{$ok}}" @endif @if(Lang::locale() == 'az') class="active" @endif data-lang='az'><span>Azerbaijani</span></a></li>
              <li><a @if(Request::is('/') | Request::is(Config::get('app.locale'))) href="/es" @else href="/es/{{$ok}}" @endif @if(Lang::locale() == 'es') class="active" @endif data-lang='es'><span>Spanish</span></a></li>
              <li><a @if(Request::is('/') | Request::is(Config::get('app.locale'))) href="/de" @else href="/de/{{$ok}}" @endif @if(Lang::locale() == 'de') class="active" @endif data-lang='de'><span>German</span></a></li>
              <li><a @if(Request::is('/') | Request::is(Config::get('app.locale'))) href="/id" @else href="/id/{{$ok}}" @endif @if(Lang::locale() == 'id') class="active" @endif data-lang='id'><span>Indonesian</span></a></li>
              <li><a @if(Request::is('/') | Request::is(Config::get('app.locale'))) href="/zh" @else href="/zh/{{$ok}}" @endif @if(Lang::locale() == 'zh') class="active" @endif data-lang='zh'><span>Chinese</span></a></li>
              <li><a @if(Request::is('/') | Request::is(Config::get('app.locale'))) href="/tr" @else href="/tr/{{$ok}}" @endif @if(Lang::locale() == 'tr') class="active" @endif data-lang='tr'><span>Turkish</span></a></li>
              <li><a @if(Request::is('/') | Request::is(Config::get('app.locale'))) href="/hi" @else href="/hi/{{$ok}}" @endif @if(Lang::locale() == 'hi') class="active" @endif data-lang='hi'><span>Hindi</span></a></li>
            </ul>
          </li>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
        </div>
      </nav>
@section('body')
@show
   <footer class="footer"><div class="container-fluid"><div class="copyright float-right">&copy; {{date('Y')}} <strong>Egim</strong>.io </div></div></footer>
  </div>
</div>
@include('layouts.popup')
@if(Request::is('*/image-cropper') | Request::is('image-cropper'))
@else
<script src="/js/jquery-2.0.3.min.js" defer></script>
@endif
<script src="/js/emath.js?v={{md5(uniqid())}}" defer></script>
@section('foot')
@show
</body>
</html>
