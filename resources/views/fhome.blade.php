@extends('layouts.master')
@section('head')
  @if(Request::is('*/finance') | Request::is('finance'))
  <title>{{__('app.Finance_calculator_list')}} | Egim.io</title>
  <meta name="keywords" content="{{__('key.Finance_calculator_list')}}">
  <meta name="description" content="{{__('des.Finance_calculator_list')}}">
  @elseif(Request::is('*/finance/about') | Request::is('finance/about'))
  <title>{{__('app.About_us')}} | Egim.io</title>
  <meta name="keywords" content="{{__('key.About_finance')}}">
  <meta name="description" content="{{__('des.About_finance')}}">
  @endif
@endsection
@section('body')
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">@if(Request::is('*/finance') | Request::is('finance')) {{__('app.Finance_calculator_list')}} @elseif(Request::is('*/finance/about') | Request::is('finance/about')) {{__('app.About_us')}} @endif</h4>
                  <p class="card-category">@if(Request::is('*/finance') | Request::is('finance')) {{__('app.Finance_calculator_details')}} @elseif(Request::is('*/finance/about') | Request::is('finance/about')) {{__('app.About_us')}} @endif</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    @if(Request::is('*/finance') | Request::is('finance'))
                    <table class="table">
                      <thead class="text-primary">
                        <input id="Searchcalculator" class="form-control" name="" placeholder="{{__('app.Search')}}...">
                      <tbody id="Searchtr">
                        <tr><td><a @if(app()->getLocale() != null) href="/{{app()->getLocale()}}/finance/loan-calculation" @else href="/finance/loan-calculation" @endif><h4>{{__('app.Loan_calculation')}}</h4></a></td></tr>
                        <tr><td><a @if(app()->getLocale() != null) href="/{{app()->getLocale()}}/finance/present-value-calculation" @else href="/finance/present-value-calculation" @endif><h4>{{__('app.Present_value_calculation')}}</h4></a></td></tr>
                        <tr><td><a @if(app()->getLocale() != null) href="/{{app()->getLocale()}}/finance/future-value-calculation" @else href="/finance/future-value-calculation" @endif><h4>{{__('app.Future_value_calculation')}}</h4></a></td></tr>
                        <tr><td><a @if(app()->getLocale() != null) href="/{{app()->getLocale()}}/finance/bond-price-calculation" @else href="/finance/bond-price-calculation" @endif><h4>{{__('app.Bond_price_calculation')}}</h4></a></td></tr>
                        <tr><td><a @if(app()->getLocale() != null) href="/{{app()->getLocale()}}/finance/rate-of-return-calculation" @else href="/finance/rate-of-return-calculation" @endif><h4>{{__('app.Rate_of_return_calculation')}}</h4></a></td></tr>
                        <tr><td><a @if(app()->getLocale() != null) href="/{{app()->getLocale()}}/finance/inflation-calculation" @else href="/finance/inflation-calculation" @endif><h4>{{__('app.Inflation_calculation_by_using_grp')}}</h4></a></td></tr>
                      </tbody>
                    </table>
                    @elseif(Request::is('*/finance/about') | Request::is('finance/about'))
                    <h4 class="pg">{!! __('det.About_finance') !!}</h4>
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
