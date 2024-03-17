@extends('layouts.master')
@section('head')
  @if(Request::is('*/already-searched-words') | Request::is('already-searched-words'))
  <title>{{__('app.Statistics')}} | Egim.io</title>
  <meta name="keywords" content="{{__('key.Words_statistics')}}">
  <meta name="description" content="{{__('des.Words_statistics')}}">
  @endif
@endsection
@section('body')
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">@if(Request::is('/already-searched-words') | Request::is('*/already-searched-words')) {{__('app.Words_statistics')}} @endif</h4>
                  <p class="card-category">@if(Request::is('/already-searched-words') | Request::is('*/already-searched-words')) {{__('app.Words_statistics')}} @endif</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    @if(Request::is('/already-searched-words') | Request::is('*/already-searched-words'))
                    <table class="table">
                      <thead class="text-primary">
                        <input id="Searchtools" class="form-control" placeholder="{{__('app.Search')}}...">
                        </thead>
                      <tbody id="Searchtls">
                        @foreach($sws = App\Seawords::orderBy('count','desc')->get() as $sw)
                        <tr><td><a href="/{{ app()->getLocale() }}/start-with-letter/{{$sw->id}}"><h4>{{$sw->words}}</h4></a></td></tr>
                        @endforeach
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
