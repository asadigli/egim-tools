@extends('layouts.master')
@section('head')
  @if(Request::is('*/terminology-meaning') | Request::is('terminology-meaning'))
   <title>{{__('app.Terminologies')}} | Egim.io</title>
   <meta name="Description" content="{{__('des.Terminologies')}}">
   <meta name="Keywords" content="{{__('key.Terminologies')}}">
  @endif
@endsection
@section('body')
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">@if(Request::is('*/terminology-meaning') | Request::is('terminology-meaning')) {{__('app.Terminologies')}} @endif</h4>
                  <p class="card-category">@if(Request::is('*/terminology-meaning') | Request::is('terminology-meaning')) {{__('app.Medical_terminologies')}} @endif</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    @if(Request::is('*/terminology-meaning') | Request::is('terminology-meaning'))
                    <textarea id="entered_word" oninput="getsuggterm()" class="form-control" rows="8" placeholder="{{__('app.Enter_word')}}..."></textarea>
                    <div class="auto-comp-tm" style="display: none;">
                      <ul id="termsugg"></ul>
                    </div>
                    <select class="form-control" id="lang" oninput="getmeaning()">
                      <option value="az">{{__('app.Azerbaijani')}}</option>
                      <option value="en">{{__('app.English')}}</option>
                      <option value="tr">{{__('app.Turkish')}}</option>
                      <option value="es">{{__('app.Spanish')}}</option>
                    </select>
                    <textarea id="meaning" class="form-control" rows="8" placeholder="{{__('app.Meaning_here')}}" readonly style="font-size:bold;"></textarea>
                    <textarea id="meaningedit" class="form-control" rows="8" placeholder="{{__('app.Suggest_meaning')}}" style="display: none;"></textarea>
                    <table class="table">
                      <tbody id="lcform">
                        <tr>
                          <td><a style="color:blue;" onclick="changeeditable()" title="{{__('app.Edit')}}" id="editbtn">{{__('app.Edit_meaning')}}</i></a>
                          <b style="display: none;" id="success" class="green">{{__('app.Success')}}</b>
                          </td>
                          <td>
                            <button class="btn btn-primary right" id="getmeaning" onclick="getmeaning()">{{__('app.Translate')}}</button>
                            <button class="btn btn-success right" id="sendmeaning" style="display: none;">{{__('app.Submit')}}</button>
                          </td>
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
@if(Request::is('*/make-advanced-rich-text') | Request::is('make-advanced-rich-text'))
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<script src="/js/tnc.js"></script>
@endif
@endsection
