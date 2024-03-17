@extends('layouts.master')
@section('head')
  @if(Request::is('*/css-minifier') | Request::is('css-minifier'))
   <title>{{__('app.CSS_minifier')}} | Egim.io</title>
   <meta name="Description" content="{{__('des.CSS_minifier')}}">
   <meta name="Keywords" content="{{__('key.CSS_minifier')}}">
  @elseif(Request::is('*/css-unminifier') | Request::is('css-unminifier'))
   <title>{{__('app.CSS_unminifier')}} | Egim.io</title>
   <meta name="Description" content="{{__('des.CSS_unminifier')}}">
   <meta name="Keywords" content="{{__('key.CSS_unminifier')}}">
  @elseif(Request::is('*/css-comment-cleaner') | Request::is('css-comment-cleaner'))
   <title>{{__('app.CSS_comment_cleaner')}} | Egim.io</title>
   <meta name="Description" content="{{__('des.CSS_comment_cleaner')}}">
   <meta name="Keywords" content="{{__('key.CSS_comment_cleaner')}}">
  @elseif(Request::is('*/css-font-design') | Request::is('css-font-design'))
   <title>{{__('app.Font_design')}} - Egim.io</title>
   <meta name="Description" content="{{__('des.Font_design')}}">
   <meta name="Keywords" content="{{__('key.Font_design')}}">
   <link href='https://fonts.googleapis.com/css?family=Annie Use Your Telescope' rel='stylesheet' id="glink">
   <style media="screen" id="textstyle">.example-text{ font-family: 'Annie Use Your Telescope'; font-style: normal; font-decoration:none; font-weight: bold; color: #1e08dc; font-size: 50px; text-transform: none; letter-spacing: 0; direction: ltr; word-spacing: 0; text-shadow: 2px 2px 2px #ffff00;}</style>
  @elseif(Request::is('*/btn-design') | Request::is('btn-design'))
   <title>{{__('app.Btn_designer')}} | Egim.io</title>
   <meta name="Description" content="{{__('des.Btn_designer')}}">
   <meta name="Keywords" content="{{__('key.Btn_designer')}}">
   <style type="text/css" id="btn-result">  .my-button { background-color: #1e08dc; border-radius: 5px; border: none; color: #f8f8f8; padding: 15px 32px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px;} </style>
  @elseif(Request::is('*/shadow-creator') | Request::is('shadow-creator'))
   <title>{{__('app.Shaddow_maker')}} | Egim.io</title>
   <meta name="Description" content="{{__('des.Shaddow_maker')}}">
   <meta name="Keywords" content="{{__('key.Shaddow_maker')}}">
   <style type="text/css" id="sdw-result">  .shaddow-div{ -webkit-box-shadow: 5px 5px 5px 5px rgba(30,8,220,0.5); -moz-box-shadow: 5px 5px 5px 5px rgba(30,8,220,0.5); box-shadow: 5px 5px 5px 5px rgba(30,8,220,0.5);} </style>
  @elseif(Request::is('*/character-counter') | Request::is('character-counter'))
   <title>{{__('app.Character_counter')}} | Egim.io</title>
   <meta name="Description" content="{{__('des.Character_counter')}}">
   <meta name="Keywords" content="{{__('key.Character_counter')}}">
  @elseif(Request::is('*/password-generator') | Request::is('password-generator'))
   <title>{{__('app.Password_generator')}} | Egim.io</title>
   <meta name="Description" content="{{__('des.Password_generator')}}">
   <meta name="Keywords" content="{{__('key.Password_generator')}}">
  @elseif(Request::is('*/rotate-div') | Request::is('rotate-div'))
   <title>{{__('app.Rotate_div')}} | Egim.io</title>
   <meta name="Description" content="{{__('des.Rotate_div')}}">
   <meta name="Keywords" content="{{__('key.Rotate_div')}}">
   <style type="text/css" id="rttresultdiv">  .rotate-div{ float: left; -ms-transform: rotate(7deg); -webkit-transform: rotate(7deg); transform: rotate(7deg);} </style>
  @endif
@endsection
@section('body')
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">@if(Request::is('*/css-minifier') | Request::is('css-minifier')) {{__('app.CSS_minifier')}} @elseif(Request::is('*/css-unminifier') | Request::is('css-unminifier')) {{__('app.CSS_unminifier')}}
                    @elseif(Request::is('*/css-comment-cleaner') | Request::is('css-comment-cleaner')) {{__('app.CSS_comment_cleaner')}}
                    @elseif(Request::is('*/css-font-design') | Request::is('css-font-design')) {{__('app.Font_design')}} @elseif(Request::is('*/btn-design') | Request::is('btn-design')) {{__('app.Btn_designer')}} @elseif(Request::is('*/shadow-creator') | Request::is('shadow-creator')) {{__('app.Shaddow_maker')}}
                    @elseif(Request::is('*/password-generator') | Request::is('password-generator')){{__('app.Password_generator')}} @elseif(Request::is('*/character-counter') | Request::is('character-counter')) {{__('app.Character_counter')}} @elseif(Request::is('*/rotate-div') | Request::is('rotate-div')) {{__('app.Rotate_div')}} @endif</h4>
                  <p class="card-category">@if(Request::is('*/css-minifier') | Request::is('css-minifier')) {{__('app.CSS_minifier')}} @elseif(Request::is('*/css-unminifier') | Request::is('css-unminifier')) {{__('app.CSS_unminifier')}}
                    @elseif(Request::is('*/css-comment-cleaner') | Request::is('css-comment-cleaner')) {{__('app.CSS_comment_cleaner')}}
                    @elseif(Request::is('*/css-font-design') | Request::is('css-font-design')) {{__('app.Font_design')}} @elseif(Request::is('*/btn-design') | Request::is('btn-design')) {{__('app.Btn_designer')}} @elseif(Request::is('*/shadow-creator') | Request::is('shadow-creator')) {{__('app.Shaddow_maker')}}
                    @elseif(Request::is('*/password-generator') | Request::is('password-generator')){{__('app.Password_generator')}} @elseif(Request::is('*/character-counter') | Request::is('character-counter')) {{__('app.Character_counter')}} @elseif(Request::is('*/rotate-div') | Request::is('rotate-div')) {{__('app.Rotate_div')}} @endif</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    @if(Request::is('*/css-minifier') | Request::is('css-minifier'))
                    <table class="table">
                      <tbody id="lcform">
                        <tr id="sdfasa"><td>{{__('app.Code')}}: ({{__('app.Characters')}} - <span id="mincharcount">0</span>)
                        </td></tr>
                        <tr>
                          <td>
                            <form id="minifierform">
                              <textarea id="css_text" oninput="minifiedcharcount(this.value)" class="form-control" rows="15" placeholder="{{__('app.Enter_code')}}..."></textarea>
                            </form>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <button onclick="resetcssminfunction()" class="btn btn-danger">{{__('app.Reset')}}</button>
                            <button class="btn btn-primary" onclick="cssminify_function()" id="minify_css">{{__('app.Minify')}}</button>
                            <button class="btn right" onclick="copycssminified()" title="{{__('app.Copy')}}"><i class="fa fa-clone"></i></button>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                    @elseif(Request::is('*/css-unminifier') | Request::is('css-unminifier'))
                    <table class="table">
                      <tbody id="lcform">
                        <tr id="sdfasa"><td>{{__('app.Code')}}: ({{__('app.Characters')}} - <span id="mincharcount">0</span>)
                        </td></tr>
                        <tr>
                          <td>
                            <form id="minifierform">
                              <textarea id="css_text" oninput="minifiedcharcount(this.value)" class="form-control" rows="15" placeholder="{{__('app.Enter_code')}}..."></textarea>
                            </form>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <button onclick="resetcssminfunction()" class="btn btn-danger">{{__('app.Reset')}}</button>
                            <button class="btn btn-primary" onclick="uncssminify_function()">{{__('app.Unminify')}}</button>
                            <button class="btn right" onclick="copycssminified()" title="{{__('app.Copy')}}"><i class="fa fa-clone"></i></button>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                    @elseif(Request::is('*/css-comment-cleaner') | Request::is('css-comment-cleaner'))
                    <table class="table">
                      <tbody id="lcform">
                        <tr id="sdfasa"><td>{{__('app.Code')}}: ({{__('app.Characters')}} - <span id="mincharcount">0</span>)</td></tr>
                        <tr>
                          <td>
                            <form id="minifierform">
                              <textarea id="css_text" oninput="minifiedcharcount(this.value)" class="form-control" rows="15" placeholder="{{__('app.Enter_code')}}..."></textarea>
                            </form>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <button onclick="resetcssminfunction()" class="btn btn-danger">{{__('app.Reset')}}</button>
                            <button class="btn btn-primary" onclick="csscommcleaner()">{{__('app.Clear')}}</button>
                            <button class="btn right" onclick="copycssminified()" title="{{__('app.Copy')}}"><i class="fa fa-clone"></i></button>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                    @elseif(Request::is('*/btn-design') | Request::is('btn-design'))
                    <table class="table">
                      <tbody>
                        <tr>
                            <div class="form-group">
                              {{__('app.Btn_color')}}:<input class="right" type="color" id="btncolor" oninput="btn_function()" value="#1e08dc"><hr>
                              {{__('app.Txt_color')}}:<input class="right" type="color" id="btn_txt_color" oninput="btn_function()" value="#f8f8f8"><hr>
                              {{__('app.Border_color')}}:<input class="right" type="color" id="btn_border_color" oninput="btn_function()" value="#16cdea"><hr>
                            </div>
                        </tr>
                        <tr><center>
                          <div class="form-group designing-btn">
                              <button class="my-button" type="button">{{__('app.Button')}}</button>
                          </div></center>
                        </tr><hr>
                        <tr>
                          <a class="right" data-toggle="collapse" id="cvb" data-target="#code-show">
                            <b id="viewcode">{{__('app.View_code')}}</b>
                            <b id="hidecode" style="display:none;">{{__('app.Hide_code')}}</b>
                          </a><br>
                          <div id="code-show" class="collapse">
                              <pre class="btn-result" id="btn-result-div">.my-button{<br> border-radius:8px; <br>background-color: #1e08dc; <br>border: 0px solid #16cdea; <br>color: #f8f8f8; <br>padding: 15px 32px; <br>text-align: center; <br>text-decoration: none; <br>display: inline-block; <br>font-size: 16px; <br>}</pre>
                            <hr>
                          </div>
                        </tr>
                        <tr>
                          <ul class="nav nav-tabs tblist">
                               <li><a data-toggle="tab" href="#tab1" class="tbbtn active">{{__('app.Btn_designer')}}</a></li>
                          </ul>
                             <div class="tab-content">
                               <div id="tab1" class="tab-pane fade in active show">
                                  <div class="form-group">
                                    <label for="btnradius">{{__('app.Radius')}}: <input type="text" maxlength="2" id="rresult" value="5" class="sm-form" oninput="btn_function2()" onkeypress='validate(event)'><b>px</b></label>
                                    <input type="range" min="1" max="50" value="5" class="percentslider"  oninput="btn_function()" id="btnradius">
                                  </div>
                                  <div class="form-group">
                                    <label for="btnfontsize">{{__('app.Font_size')}}: <input type="text" maxlength="2" id="fresult" value="10" class="sm-form" oninput="btn_function2()" onkeypress='validate(event)'><b>px</b></label>
                                    <input type="range" min="1" max="50" value="16" class="percentslider" oninput="btn_function()" id="btnfontsize">
                                  </div>
                                  <div class="form-group">
                                    <label for="btnborder">{{__('app.Border')}}: <input type="text" maxlength="2" id="bbresult" value="0" class="sm-form" oninput="btn_function2()" onkeypress='validate(event)'><b>px</b></label>
                                    <input type="range" min="0" max="20" value="0" class="percentslider" oninput="btn_function()" id="btnborder">
                                  </div>
                               </div>
                             </div>
                        </tr>
                      </tbody>
                    </table>
                    @elseif(Request::is('*/css-font-design') | Request::is('css-font-design'))
                    <table class="table">
                      <tbody>
                        <tr>
                            <div class="form-group">
                              {{__('app.Text_color')}}:<input class="right" type="color" id="textclr" oninput="text_maker()" value="#1e08dc"><hr>
                              {{__('app.Shadow_color')}}:<input class="right" type="color" id="shwcolor" oninput="text_maker()" value="#ffff00"><hr>
                            </div>
                        </tr>
                        <tr>
                          <center class="examtext">
                            <div class="form-group example-text">
                              <p id="texthere">{{__('app.Example_text')}}</p>
                            </div>
                            <div class="dropdown">
                              <a data-toggle="dropdown"><i class="fa fa-edit"></i></a>
                              <ul class="dropdown-menu">
                                <input type="text" class="mini-form" id="text" value="{{__('app.Example_text')}}" oninput="text_maker()">
                              </ul>
                            </div>
                          </center>
                        </tr>
                        <tr><hr>
                          <a class="right" data-toggle="collapse" id="cvb" data-target="#code-show">
                            <b id="viewcode">{{__('app.View_code')}}</b>
                            <b id="hidecode" style="display:none;">{{__('app.Hide_code')}}</b>
                          </a><br>
                          <div id="code-show" class="collapse">
                              <pre id="goog-link">link href='https://fonts.googleapis.com/css?family=Antic Didone'</pre>
                              <pre class="btn-result" id="font-result">.example-text{<br>font-family: 'Annie Use Your Telescope';<br>font-style: Normal;<br>font-weight: bold;<br>color: #1e08dc;<br>font-size: 50px;<br>text-decoration: None;<br>text-transform: None;<br>letter-spacing: 0px;<br>direction: ltr;<br>word-spacing: 0px;<br>text-shadow: 2px 2px 2px #ffff00;<br>}</pre>
                            <hr>
                          </div>
                        </tr>
                      </tbody>
                    </table>
                    <ul class="nav nav-tabs tblist">
                      <li><a data-toggle="tab" href="#tab2" class="tbbtn active">{{__('app.Font_size')}}</a></li>
                      <li><a data-toggle="tab" href="#tab1" class="tbbtn">{{__('app.Font_style')}}</a></li>
                      <li><a data-toggle="tab" href="#tab3" class="tbbtn">{{__('app.Shadow')}}</a></li>
                    </ul>
                    <div class="tab-content">
                         <div id="tab1" class="tab-pane fade">
                           <div class="form-group">
                             <label for="fontfam">{{__('app.Font')}}</label>
                             <select class="form-control" id="fontfam" oninput="text_maker()">
                               <option value="">{{__('app.Select_font')}}</option>
                               @include('layouts.fonts')
                             </select>
                           </div>
                           <div class="form-group">
                             <label for="fontfam">{{__('app.Text_decoration')}}</label>
                             <select class="form-control" id="textdoc" oninput="text_maker()">
                               <option>{{__('app.None')}}</option>
                               <option value="overline">{{__('app.Overline')}}</option>
                               <option value="line-through">{{__('app.line-through')}}</option>
                               <option value="underline">{{__('app.Underline')}}</option>
                               <option value="underline overline">{{__('app.Underline_and_overline')}}</option>
                             </select>
                           </div>
                           <div class="form-group">
                             <label for="fontfam">{{__('app.Text_transform')}}</label>
                             <select class="form-control" id="txttrans" oninput="text_maker()">
                               <option>{{__('app.None')}}</option>
                               <option value="uppercase">{{__('app.UPPERCASE')}}</option>
                               <option value="lowercase">{{__('app.Lowercase')}}</option>
                               <option value="capitalize">{{__('app.Capitalize')}}</option>
                             </select>
                           </div>
                           <div class="form-group">
                             <label for="fontfam">{{__('app.Font_style')}}</label>
                             <select class="form-control" id="fontstyle" oninput="text_maker()">
                               <option>{{__('app.Normal')}}</option>
                               <option value="italic">italic</option>
                               <option value="oblique">oblique</option>
                             </select>
                           </div>
                           <div class="form-group">
                             <label for="fontfam">{{__('app.Font_weight')}}</label>
                             <select class="form-control" id="fontweight" oninput="text_maker()">
                               <option value="normal">{{__('app.Normal')}}</option>
                               <option value="bold" selected>{{__('app.Bold')}}</option>
                               <option value="bolder">{{__('app.Bolder')}}</option>
                               <option value="lighter">{{__('app.Lighter')}}</option>
                               <option value="100">100</option>
                               <option value="200">200</option>
                               <option value="400">400</option>
                               <option value="500">500</option>
                               <option value="600">600</option>
                               <option value="700">700</option>
                               <option value="800">800</option>
                               <option value="900">900</option>
                               <option value="initial">{{__('app.Initial')}}</option>
                               <option value="inherit">{{__('app.Inherit')}}</option>
                             </select>
                           </div>
                           <div class="form-group">
                             <label for="fontfam">{{__('app.Direction')}}</label>
                             <select class="form-control" id="fontdirection" oninput="text_maker()">
                               <option value="ltr">Ltr</option>
                               <option value="rtl">Rtl</option>
                               <option value="initial">{{__('app.Initial')}}</option>
                             </select>
                           </div>
                         </div>
                         <div id="tab2" class="tab-pane fade in active show">
                           <div class="form-group">
                             <label for="btnradius">{{__('app.Font_size')}}: <input type="text" maxlength="2" id="rfntsize" value="50" class="sm-form" oninput="text_maker2()" onkeypress='validate(event)'><b>px</b></label>
                             <input type="range" min="1" max="100" value="50" class="percentslider" oninput="text_maker()" id="fntsize">
                           </div>
                           <div class="form-group">
                             <label for="btnradius">{{__('app.Letter_spacing')}}: <input type="text" maxlength="2" id="rltrspc" value="0" class="sm-form" oninput="text_maker2()" onkeypress='validate(event)'><b>px</b></label>
                             <input type="range" min="-100" max="100" value="0" class="percentslider"  oninput="text_maker()" id="ltrspc">
                           </div>
                           <div class="form-group">
                             <label for="btnradius">{{__('app.Word_spacing')}}: <input type="text" maxlength="2" id="rwrdspc" value="0" class="sm-form" oninput="text_maker2()" onkeypress='validate(event)'><b>px</b></label>
                             <input type="range" min="-100" max="100" value="0" class="percentslider"  oninput="text_maker()" id="wrdspc">
                           </div>
                         </div>
                         <div id="tab3" class="tab-pane fade">
                           <div class="form-group">
                             <label for="btnfontsize">{{__('app.Horizontal')}}: <input type="text" maxlength="2" id="rsdwhor" value="2" class="sm-form" oninput="text_maker2()" onkeypress='validate(event)'><b>px</b></label>
                             <input type="range" min="1" max="50" value="2" class="percentslider" oninput="text_maker()" id="sdwhor">
                           </div>
                           <div class="form-group">
                             <label for="btnborder">{{__('app.Vertical')}}: <input type="text" maxlength="2" id="rsdwver" value="2" class="sm-form" oninput="text_maker2()" onkeypress='validate(event)'><b>px</b></label>
                             <input type="range" min="0" max="20" value="2" class="percentslider" oninput="text_maker()" id="sdwver">
                           </div>
                           <div class="form-group">
                             <label for="btnborder">{{__('app.Blur')}}: <input type="text" maxlength="2" id="rsdwblr" value="2" class="sm-form" oninput="text_maker2()" onkeypress='validate(event)'><b>px</b></label>
                             <input type="range" min="0" max="20" value="2" class="percentslider" oninput="text_maker()" id="sdwblr">
                           </div>
                         </div>
                       </div>
                    @elseif(Request::is('*/shadow-creator') | Request::is('shadow-creator'))
                    <table class="table">
                      <tbody>
                        <tr>
                          <div class="form-group">
                              <b>{{__('app.Choose_color')}}: </b>
                              <input type="color" class="right" id="shw-color" value="#1e08dc" oninput="Sdw_function()">
                          </div><hr>
                          <div class="form-group">
                            <label class="rbt-cnt">{{__('app.Outline')}}
                              <input type="radio" name="type" value="outline" id="outline" oninput="Sdw_function()" checked>
                              <span class="checkmark"></span>
                            </label>
                            <label class="rbt-cnt">{{__('app.Inset')}}
                              <input type="radio" value="inset" name="type" id="inset" oninput="Sdw_function()">
                              <span class="checkmark"></span>
                            </label>
                          </div>
                        </tr>
                        <tr><hr>
                          <center>
                            <div class="shaddow-div"><b>{{__('app.Div_example')}}
                              <img src="/img/sample.png"  class="sdwpic"></b> </div>
                          </center><hr>
                          <a class="right" data-toggle="collapse" id="cvb" data-target="#code-show">
                            <b id="viewcode">{{__('app.View_code')}}</b>
                            <b id="hidecode" style="display:none;">{{__('app.Hide_code')}}</b>
                          </a><br>
                          <div id="code-show" class="collapse">
                              <pre id="sdw-result-div">.shadow-div{<br>-webkit-box-shadow: 5px 5px 5px 5px rgba(30,8,220,0.5); <br> -moz-box-shadow: 5px 5px 5px 5px rgba(30,8,220,0.5);<br>box-shadow: 5px 5px 5px 5px rgba(30,8,220,0.5);<br>}</pre>
                          <hr>
                          </div>
                        </tr>
                        <tr>
                          <div class="form-group">
                              <label for="high">{{__('app.Horizontal')}}: <input type="text" id="high-res" class="sm-form" onkeypress='validate(event)' value="5" max="100" maxlength="3" oninput="sdw_function2()"><b>px</b> </label>
                              <input type="range" min="-100" max="100" value="5" class="percentslider" id="high" oninput="Sdw_function()">
                          </div>
                           <div class="form-group">
                              <label for="left">{{__('app.Vertical')}}: <input type="text" class="sm-form" onkeypress='validate(event)' value="5" maxlength="3" id="left-res" oninput="sdw_function2()"><b>px</b></label>
                              <input type="range" min="-100" max="100" value="5" class="percentslider" id="left" oninput="Sdw_function()">
                            </div>
                            <div class="form-group">
                              <label for="blur">{{__('app.Radius')}}: <input type="text" class="sm-form" onkeypress='validate(event)' value="5" maxlength="3" id="blur-res" oninput="sdw_function2()"><b>px</b></label>
                              <input type="range" min="0" max="50" value="5" class="percentslider" id="blur" oninput="Sdw_function()">
                            </div>
                           <div class="form-group">
                             <label for="rad">{{__('app.Spread_Radius')}}: <input type="text" class="sm-form" onkeypress='validate(event)' value="5" maxlength="3" id="rad-res" oninput="sdw_function2()"><b>px</b></label>
                              <input type="range" min="-50" max="100" value="5" class="percentslider" id="rad" oninput="Sdw_function()">
                            </div>
                           <div class="form-group">
                             <label for="opacity">{{__('app.Opacity')}}: <input type="text" class="sm-form" onkeypress='validate(event)' value="0.5" maxlength="6" id="opac-res" oninput="sdw_function2()"></label>
                              <input type="range" min="0" max="100" value="50" class="percentslider" id="opacity" oninput="Sdw_function()">
                            </div>
                        </tr>
                      </tbody>
                    </table>
                    @elseif(Request::is('*/character-counter') | Request::is('character-counter'))
                    <table class="table">
                      <thead>
                        <th>{{__('app.Character_count')}}</th>
                        <th>{{__('app.Word_count')}}</th>
                        <th>{{__('app.Space_count')}}</th>
                        <th>{{__('app.Size')}}</th>
                      </thead>
                      <tbody>
                        <tr>
                          <td><span id="charcount">0</span></td>
                          <td><span id="wordcount">0</span></td>
                          <td> <span id="spaceCount">0</span></td>
                          <td><span id="size">0 Byte</span></td>
                        </tr>
                      </tbody>
                      <textarea id="countchar" onkeyup="charcountupdate(this.value)" class="form-control" rows="15" placeholder="{{__('app.Enter_text')}}..."></textarea>
                    </table>
                    @elseif(Request::is('*/password-generator') | Request::is('password-generator'))
                    <table class="table">
                      <tbody>
                        <tr>
                          <td>
                            <div class="form-group">
                              <h2 class="pwd-dsp"><input type="text" id="pssgnt" readonly><a class="sdfsdf" onclick="copypassword()"><i class="fa fa-clone"></i></a> </h2>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td class="sec">
                              <h4><b>{{__('app.Size')}}:</b> <input type="text" onkeypress='validate(event)' maxlength="4" id="rpssgntnmb" oninput="generatepwd2()" value="8" class="sm-form"> <small>({{__('app.Max_length_4096')}})</small> <strong class="red right" id="validate" style="display: none;">{{__('app.You_should_at_least_check_one')}}</strong> </h4>
                              <input type="range" min="1" max="40" value="8" class="percentslider" oninput="generatepwd()" id="pssgntnmb">
                            <div class="form-group">
                              <label class="rbt-cnt block">{{__('app.Numbers')}}: [0-9]
                                <input type="checkbox" id="pwd1" oninput="pwdbutton()" checked>
                                <span class="checkbmark"></span>
                              </label>
                              <label class="rbt-cnt block">{{__('app.Small_letters')}}: [a-z]
                                <input type="checkbox" id="pwd2" oninput="pwdbutton()">
                                <span class="checkbmark"></span>
                              </label>
                              <label class="rbt-cnt block">{{__('app.Capital_letters')}}: [A-Z]
                                <input type="checkbox" id="pwd4" oninput="pwdbutton()">
                                <span class="checkbmark"></span>
                              </label>
                              <label class="rbt-cnt block">{{__('app.Simple_symbols')}}: [!@#$%]
                                <input type="checkbox" id="pwd3" oninput="pwdbutton()">
                                <span class="checkbmark"></span>
                              </label>
                              <label class="rbt-cnt block">{{__('app.Complex_symbols')}}: [&'()*+,-./:;<=>?[]^_`{|}~]
                                <input type="checkbox" id="pwd5" oninput="pwdbutton()">
                                <span class="checkbmark"></span>
                              </label>
                            </div>
                              <button class="btn btn-primary right" onclick="pwdbutton()" type="button">{{__('app.Generate')}}</button>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                    @elseif(Request::is('*/rotate-div') | Request::is('rotate-div'))
                    <table class="table">
                      <tbody>
                        <tr>
                          <center>
                            <div class="rot-mdiv"><b class="rotate-div">{{__('app.Div_example')}}
                              <img src="/img/sample.png" width="120"></b>
                            </div>
                          </center>
                          <a class="right" data-toggle="collapse" id="cvb" data-target="#code-show">
                            <b id="viewcode">{{__('app.View_code')}}</b>
                            <b id="hidecode" style="display:none;">{{__('app.Hide_code')}}</b>
                          </a><br>
                          <div id="code-show" class="collapse">
                              <pre id="rtt-result-div">.rotate-div{<br>float: left;<br>-ms-transform: rotate(7deg); /* IE 9 */ <br>-webkit-transform: rotate(7deg); /* Safari */<br>transform: rotate(7deg);<br>}</pre>
                          </div>
                        </tr><hr>
                        <tr>
                            <div class="form-group">
                              <label class="rbt-cnt">{{__('app.Left')}}
                                <input type="radio" name="type" id="left" oninput="rotate_div_function()" checked>
                                <span class="checkmark"></span>
                              </label>
                              <label class="rbt-cnt">{{__('app.Right')}}
                                <input type="radio" name="type" id="right" oninput="rotate_div_function()">
                                <span class="checkmark"></span>
                              </label>
                            </div>
                            <div class="form-group">
                              <label for="rotdegree">{{__('app.Rotate')}}: <input type="text" id="rotate-res" value="7" class="sm-form" oninput="rotate_div_function2()" maxlength="3" onkeypress='validate(event)'> <b>deg</b></label>
                              <input type="range" min="0" max="360" value="5" class="percentslider" id="rotdegree" oninput="rotate_div_function()">
                            </div>
                        </tr>
                      </tbody>
                    </table>
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
