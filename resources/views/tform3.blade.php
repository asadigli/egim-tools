@extends('layouts.master')
@section('head')
  @if(Request::is('*/text-to-json-converter') | Request::is('text-to-json-converter'))
   <title>{{__('app.Text_to_Json_converter')}} | Egim.io</title>
   <meta name="Description" content="{{__('des.Text_to_Json_converter')}}">
   <meta name="Keywords" content="{{__('key.Text_to_Json_converter')}}">
  @elseif(Request::is('*/combine-words-to-generate-name') | Request::is('combine-words-to-generate-name'))
   <title>{{__('app.Name_generator')}} | Egim.io</title>
   <meta name="Description" content="{{__('des.CSS_minifier')}}">
   <meta name="Keywords" content="{{__('key.CSS_minifier')}}">
  @elseif(Request::is('*/start-with-letter') | Request::is('start-with-letter'))
   <title>{{__('app.Start_with_letter')}} | Egim.io</title>
   <meta name="Description" content="{{__('des.Start_with_letter')}}">
   <meta name="Keywords" content="{{__('key.Start_with_letter')}}">
  @elseif(Request::is('*/start-with-letter/*') | Request::is('start-with-letter/*'))
      @if(isset($sw))
        <title>{{trans('app.Word_with',['word' => $sw->words])}}
        {{__('app.Start_with_letter')}} | Egim.io</title>
       <meta name="Description" content="{{__('des.Start_with_letter')}}:{{trans('app.Word_with',['word' => $sw->words])}}">
       <meta name="Keywords" content="{{__('key.Start_with_letter')}}:{{trans('app.Word_with',['word' => $sw->words])}}">
      @else
       <title>{{__('app.Start_with_letter')}} | Egim.io</title>
       <meta name="Description" content="{{__('des.Start_with_letter')}}">
       <meta name="Keywords" content="{{__('key.Start_with_letter')}}">
      @endif
  @endif
@endsection
@section('body')
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">@if(Request::is('*/text-to-json-converter') | Request::is('text-to-json-converter')) {{__('app.Text_to_Json_converter')}} @elseif(Request::is('*/combine-words-to-generate-name') | Request::is('combine-words-to-generate-name')) {{__('app.Name_generator')}}
                  @elseif(Request::is('*/start-with-letter') | Request::is('start-with-letter') | Request::is('*/start-with-letter/*') | Request::is('start-with-letter/*')) {{__('app.Start_with_letter')}} @endif</h4>
                  <p class="card-category">@if(Request::is('*/text-to-json-converter') | Request::is('text-to-json-converter')) {{__('app.Text_to_Json_converter')}} @elseif(Request::is('*/combine-words-to-generate-name') | Request::is('combine-words-to-generate-name')) {{__('app.Name_generator')}}
                  @elseif(Request::is('*/start-with-letter') | Request::is('start-with-letter')) {{__('app.Start_with_letter')}}
                  @elseif(Request::is('*/start-with-letter/*') | Request::is('start-with-letter/*')) @if(isset($sw)) {{trans('app.Word_with',['word' => $sw->words])}} @else {{__('app.Start_with_letter')}} @endif
                  @endif</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    @if(Request::is('*/text-to-json-converter') | Request::is('text-to-json-converter'))
                    <table class="table">
                      <tbody id="lcform">
                        <tr id="sdfasa"><td>{{__('app.Code')}}: ({{__('app.Characters')}} - <span id="mincharcount">0</span>)</td><td></td></tr>
                        <tr>
                          <td><textarea id="input" oninput="minifiedcharcount(this.value)" class="form-control" rows="15" placeholder="{{__('app.Enter_code')}}..."></textarea>
                          </td>
                          <td><textarea id="output" class="form-control" rows="15" placeholder="{{__('app.See_result')}}" readonly style="color:#a30003;"></textarea></td>
                        </tr>
                        <tr>
                          <td>
                            <button onclick="resettextjsonfunction()" class="btn btn-danger">{{__('app.Reset')}}</button>
                            <button class="btn btn-primary" onclick="texttojson()" id="minify_css">{{__('app.Make')}}</button>
                          </td>
                          <td><button class="btn right" onclick="copyjsoncode()" title="{{__('app.Copy')}}"><i class="fa fa-clone"></i></button></td>
                        </tr>
                        <tr>
                          <td></td>
                          <td>
                            <label for="file-upload" class="btn btn-success right"><i class="fa fa-cloud-upload"></i> {{__('app.Upload_a_file')}}</label>
                            <input id="file-upload" type="file" accept='text/plain' onchange='openFile(event)'/></td>
                        </tr>
                      </tbody>
                    </table>
                    @elseif(Request::is('*/combine-words-to-generate-name') | Request::is('combine-words-to-generate-name'))
                    <table class="table">
                      <tbody>
                        <tr>
                          <textarea id="words" class="form-control" rows="8" placeholder="{{__('app.Enter_words')}}" maxlength="200"></textarea>
                        </tr>
                        <tr>
                          <div class="form-group">
                            <label for="leftbottom">{{__('app.Length_of_name')}}</label>
                            <input type="range" min="0" max="150" value="20" class="percentslider" id="length" oninput="generateword()">
                          </div>
                        </tr>
                        <tr>
                          <button class="btn btn-primary right" onclick="generateword()">{{__('app.Make')}}</button>
                        </tr>
                      </tbody>
                    </table>
                    <table class="table"><tbody id="result"></tbody></table>
                    @elseif(Request::is('*/make-advanced-rich-text') | Request::is('make-advanced-rich-text'))
                    <table class="table">
                      <tbody>
                        <tr>
                          <textarea id="input" class="form-control richtext" style="width:99%;" oninput="richtext_function()"></textarea>
                        </tr><hr>
                        <tr>
                          <textarea id="output" class="form-control" rows="8" placeholder="{{__('app.See_result')}}"></textarea>
                        </tr>
                        <tr>
                          <button class="btn btn-primary right" onclick="richtext_function()">{{__('app.Make')}}</button>
                        </tr>
                      </tbody>
                    </table>
                    @elseif(Request::is('*/start-with-letter') | Request::is('start-with-letter') | Request::is('*/start-with-letter/*') | Request::is('start-with-letter/*'))
                    <div class="form-group">
                      <label></label>
                      <input type="text" class="form-control" @if(isset($sw)) value="{{$sw->words}}" @endif id="texthere" placeholder="{{__('app.Enter_here')}}...">
                    </div>
                    <div class="form-group">
                      <select class="form-control" id="lang" oninput="findrelatedword()">
                        <option value="en" @if(isset($sw)) @if($sw->words == 'en') selected @endif @else @if(Lang::locale() == 'az' | Lang::locale() == 'tr') @else selected @endif @endif>{{__('app.English_words')}}</option>
                        <option value="az" @if(isset($sw)) @if($sw->words == 'az') selected @endif @else @if(Lang::locale() == 'az') selected @endif @endif>{{__('app.Azerbaijani_words')}}</option>
                        <option value="tr" @if(isset($sw)) @if($sw->words == 'tr') selected @endif @else @if(Lang::locale() == 'tr') selected @endif @endif>{{__('app.Turkish_words')}}</option>
                        <option value="es" @if(isset($sw)) @if($sw->words == 'es') selected @endif @else @if(Lang::locale() == 'es') selected @endif @endif>{{__('app.Spain_words')}}</option>
                      </select>
                    </div>
                    <div class="form-group">
                       <label class="rbt-cnt">{{__('app.Start_with')}}
                          <input type="radio" name="type" value="0" id="start" oninput="findrelatedword()" @if(isset($sw)) @if($sw->type == 0) checked @endif @else checked @endif>
                          <span class="checkmark"></span>
                       </label>
                       <label class="rbt-cnt">{{__('app.End_with')}}
                          <input type="radio" value="0" name="type" id="end" oninput="findrelatedword()" @if(isset($sw)) @if($sw->type == 1) checked @endif @endif>
                          <span class="checkmark"></span>
                      </label>
                    </div>
                    <div class="form-group">
                        <label for="lefttop">{{__('app.Words_length')}}: <span id="result-size">5</span></b> </label>
                        <input type="range" min="1" max="50" value="5" class="percentslider" id="totallength" oninput="findrelatedword()">
                    </div>
                    <label class="rbt-cnt block">{{__('app.All_lengths')}}
                      <input type="checkbox" id="alllengths" oninput="findrelatedword()">
                      <span class="checkbmark"></span>
                    </label>
                    <div class="form-group"><label></label>
                      <button type="submit" class="btn btn-primary right" onclick="findrelatedword()">{{__('app.Check')}}</button></div>
                      <h3 id="nothing" style="display: none;text-align:center;">{{__('app.Nothing_found')}}</h3>
                    <table class="table">
                      <tbody id="words">
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
@if(Request::is('*/make-advanced-rich-text') | Request::is('make-advanced-rich-text'))
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<script src="/js/tnc.js"></script>
@endif
@endsection
