@extends('layouts.master')
@section('head')
@if(Request::is('*/loan-calculation'))
  <meta name="description" content="{{__('des.Loan_calculation')}}">
  <meta name="keywords" content="{{__('key.Loan_calculation')}}">
  <title>{{__('app.Loan_calculation')}} | Egim.io</title>
@elseif(Request::is('*/present-value-calculation'))
  <meta name="description" content="{{__('des.Present_value_calculation')}}">
  <meta name="keywords" content="{{__('key.Present_value_calculation')}}">
  <title>{{__('app.Present_value_calculation')}} | Egim.io</title>
@elseif(Request::is('*/future-value-calculation'))
  <meta name="description" content="{{__('des.Future_value_calculation')}}">
  <meta name="keywords" content="{{__('key.Future_value_calculation')}}">
  <title>{{__('app.Future_value_calculation')}} | Egim.io</title>
@elseif(Request::is('*/bond-price-calculation'))
  <meta name="description" content="{{__('des.Bond_price_calculation')}}">
  <meta name="keywords" content="{{__('key.Bond_price_calculation')}}">
  <title>{{__('app.Bond_price_calculation')}} | Egim.io</title>
@elseif(Request::is('*/rate-of-return-calculation'))
  <meta name="description" content="{{__('des.Rate_of_return_calculation')}}">
  <meta name="keywords" content="{{__('key.Rate_of_return_calculation')}}">
  <title>{{__('app.Rate_of_return_calculation')}} | Egim.io</title>
@elseif(Request::is('*/inflation-calculation'))
  <meta name="description" content="{{__('des.Inflation_calculation')}}">
  <meta name="keywords" content="{{__('key.Inflation_calculation')}}">
  <title>{{__('app.Inflation_calculation_by_using_grp')}} | Egim.io</title>
@endif
@endsection
@section('body')
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">@if(Request::is('*/loan-calculation')) {{__('app.Loan_calculation')}} @elseif(Request::is('*/future-value-calculation')) {{__('app.Future_value_calculation')}} @elseif(Request::is('*/present-value-calculation')) {{__('app.Present_value_calculation')}}
                    @elseif(Request::is('*/bond-price-calculation')) {{__('app.Bond_price_calculation')}} @elseif(Request::is('*/inflation-calculation')) {{__('app.Inflation_calculation')}} @elseif(Request::is('*/rate-of-return-calculation')) {{__('app.Rate_of_return_calculation')}} @endif</h4>
                  <p class="card-category">@if(Request::is('*/loan-calculation')) {{__('app.Loan_calculation')}} @elseif(Request::is('*/future-value-calculation')) {{__('app.Future_value_calculation')}} @elseif(Request::is('*/present-value-calculation')) {{__('app.Present_value_calculation')}}
                    @elseif(Request::is('*/bond-price-calculation')) {{__('app.Bond_price_calculation')}} @elseif(Request::is('*/inflation-calculation')) {{__('app.Inflation_calculation_by_using_grp')}} @elseif(Request::is('*/rate-of-return-calculation')) {{__('app.Rate_of_return_calculation')}} @endif</p>
                </div>
                <div class="card-body">
                  @if(Request::is('*/loan-calculation'))
                  <div class="table-responsive">
                    <table class="table">
                      <tbody id="lcform">
                        <tr>
                          <td class="specsec">{{__('app.Loan_amount')}} <span id="currency">@if(Lang::locale() == 'az') (₼) @else ($) @endif </span> </td>
                          <td><input oninput="apr_calc_function()" type="number" id="amount" class="form-control" placeholder="{{__('app.Loan_amount')}}..."></td>
                        </tr>
                        <tr>
                          <td class="specsec">{{__('app.APR')}} (%) </td>
                          <td><input oninput="apr_calc_function()" type="number" id="apr" class="form-control" placeholder="{{__('app.APR')}}..."></td>
                        </tr>
                        <tr>
                          <td class="specsec">{{__('app.Time')}} </td>
                          <td><select oninput="apr_calc_function()" class="form-control" id="month">
                            @for($m=1;$m<=360;$m++)
                            <option value="{{$m}}" @if($m == 12) selected @endif> {{trans_choice('app.Month_s',$m)}} @if($m % 12 == 0) ({{trans_choice('app.year_s',$m/12)}}) @endif</option>
                            @endfor
                          </select>
                          </td>
                        </tr>
                        <tr>
                        <td class="specsec">{{__('app.Currency')}} </td>
                          <td>
                            <select oninput="apr_calc_function()" class="form-control" id="curr">
                              <option value="₼" @if(Lang::locale() == 'az') selected @endif>Manat (₼)</option>
                              <option value="$" @if(Lang::locale() == 'az') @else selected @endif >Dollar ($)</option>
                              <option value="€">EURO (€)</option>
                            </select>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                    <button class="btn btn-primary" onclick="calculatemanually()">{{__('app.Calculate')}}</button>
                    <button onclick="resetaprcalculation()" class="btn btn-danger right">{{__('app.Reset')}}</button>
                    <p id="warning" data-words="{{__('app.Fill_the_all_blanks')}},{{__('app.Reseted')}},{{__('app.Success')}}"></p>
                  </div>
                  <div class="table-responsive" id="resulttable" data-words="{{__('app.Time')}},{{__('app.Monthly_amount')}},{{__('app.Yearly_amount')}},{{__('app.Sum')}},{{__('app.Difference')}}"></div>
                  @elseif(Request::is('*/present-value-calculation'))
                  <div class="table-responsive">
                    <table class="table">
                      <tbody id="lcform">
                        <tr>
                          <td class="specsec">{{__('app.Amount')}}</td>
                          <td><input oninput="pvcalculate()" type="number" id="amount" class="form-control" placeholder="{{__('app.Amount')}}..."></td>
                        </tr>
                        <tr>
                          <td class="specsec">{{__('app.Interest_rate')}} (%) </td>
                          <td><input oninput="pvcalculate()" type="text" onkeypress='validate(event)' id="rate" class="form-control" maxlength="3" placeholder="{{__('app.Interest_rate')}}..." onkeypress='validate(event)'></td>
                        </tr>
                        <tr>
                          <td class="specsec">{{__('app.Time')}} </td>
                          <td>
                            <input type="number" oninput="pvcalculate()" class="form-control" id="time" placeholder="{{__('app.Time')}}">
                          </td>
                        </tr>
                        <tr>
                        <td class="specsec">{{__('app.Currency')}} </td>
                          <td>
                            <select oninput="pvcalculate()" class="form-control" id="curr">
                              <option value="$" selected>$</option>
                              <option value="₼">₼</option>
                              <option value="€">€</option>
                            </select>
                          </td>
                        </tr>
                        <tr>
                          <td class="specsec">
                            <b class="fail-func" style="display: none;">{{__('app.Fill_the_all_blanks')}}</b>
                            <b class="success-func" id="reseted" style="display: none;">{{__('app.Reseted')}}</b>
                            <b class="success-func" id="success" style="display: none;">{{__('app.Success')}}<i id="dots"></i> </b> </td>
                          <td>
                            <button type="button" class="btn btn-primary" onclick="pvcalcman()">{{__('app.Calculate')}}</button>
                            <button onclick="pvcalculatorreset()" class="btn btn-danger right">{{__('app.Reset')}}</button>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="table-responsive" id="resulttable" style="display: none;">
                    <table class="table">
                      <tbody>
                        <tr><hr>
                          <td>{{__('app.Result')}}:</td>
                          <td><div id="pvresult"></div></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  @elseif(Request::is('*/future-value-calculation'))
                  <div class="table-responsive">
                    <table class="table">
                      <tbody id="lcform">
                        <tr>
                          <td class="specsec">{{__('app.Amount')}}</td>
                          <td><input oninput="fvcalculate()" type="number" id="amount" class="form-control" placeholder="{{__('app.Amount')}}..."></td>
                        </tr>
                        <tr>
                          <td class="specsec">{{__('app.Interest_rate')}} (%) </td>
                          <td><input oninput="fvcalculate()" type="text" onkeypress='validate(event)' id="rate" class="form-control" maxlength="3" placeholder="{{__('app.Interest_rate')}}..."></td>
                        </tr>
                        <tr>
                          <td class="specsec">{{__('app.Time')}} </td>
                          <td>
                            <input type="number" oninput="fvcalculate()" class="form-control" id="time" placeholder="{{__('app.Time')}}">
                          </td>
                        </tr>
                        <tr>
                        <td class="specsec">{{__('app.Currency')}} </td>
                          <td>
                            <select oninput="fvcalculate()" class="form-control" id="curr">
                              <option value="$" selected>$</option>
                              <option value="₼">₼</option>
                              <option value="€">€</option>
                            </select>
                          </td>
                        </tr>
                        <tr>
                          <td class="specsec">
                            <b class="fail-func" style="display: none;">{{__('app.Fill_the_all_blanks')}}</b>
                            <b class="success-func" id="reseted" style="display: none;">{{__('app.Reseted')}}</b>
                            <b class="success-func" id="success" style="display: none;">{{__('app.Success')}}<i id="dots"></i> </b> </td>
                          <td>
                            <button type="button" class="btn btn-primary" onclick="fvcalcman()">{{__('app.Calculate')}}</button>
                            <button onclick="pvcalculatorreset()" class="btn btn-danger right">{{__('app.Reset')}}</button>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="table-responsive" id="resulttable" style="display: none;">
                    <table class="table">
                      <tbody>
                        <tr><hr>
                          <td>{{__('app.Result')}}:</td>
                          <td><div id="fvresult"></div></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  @elseif(Request::is('*/bond-price-calculation'))
                  <div class="table-responsive">
                    <table class="table">
                      <tbody id="lcform">
                        <tr>
                          <td class="specsec">{{__('app.Par_value')}}</td>
                          <td><input oninput="bondpricecalc()" type="number" id="pvalue" class="form-control" placeholder="{{__('app.Par_value')}}..."></td>
                        </tr>
                        <tr>
                          <td class="specsec">{{__('app.Coupon_rate')}} (%) </td>
                          <td><input oninput="bondpricecalc()" type="text" onkeypress='validate(event)' id="crate" class="form-control" maxlength="3" placeholder="{{__('app.Coupon_rate')}}..."></td>
                        </tr>
                        <tr>
                          <td class="specsec">{{__('app.Interest_rate')}} (%) </td>
                          <td><input oninput="bondpricecalc()" type="text" onkeypress='validate(event)' id="rate" class="form-control" maxlength="3" placeholder="{{__('app.Interest_rate')}}..."></td>
                        </tr>
                        <tr>
                          <td class="specsec">{{__('app.Time')}} </td>
                          <td>
                            <input type="number" oninput="bondpricecalc()" class="form-control" id="time" placeholder="{{__('app.Time')}}">
                          </td>
                        </tr>
                        <tr>
                        <td class="specsec">{{__('app.Currency')}} </td>
                          <td>
                            <select oninput="bondpricecalc()" class="form-control" id="curr">
                              <option value="$" selected>$</option>
                              <option value="₼">₼</option>
                              <option value="€">€</option>
                            </select>
                          </td>
                        </tr>
                        <tr>
                          <td class="specsec">
                            <b class="fail-func" style="display: none;">{{__('app.Fill_the_all_blanks')}}</b>
                            <b class="success-func" id="reseted" style="display: none;">{{__('app.Reseted')}}</b>
                            <b class="success-func" id="success" style="display: none;">{{__('app.Success')}}<i id="dots"></i> </b> </td>
                          <td>
                            <button type="button" class="btn btn-primary" onclick="bondpcalcman()">{{__('app.Calculate')}}</button>
                            <button onclick="bondcalcreset()" class="btn btn-danger right">{{__('app.Reset')}}</button>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="table-responsive" id="resulttable" style="display: none;">
                    <table class="table">
                      <tbody>
                        <tr><hr>
                          <td>{{__('app.Result')}}:</td>
                          <td><div id="bpresult"></div></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  @elseif(Request::is('*/rate-of-return-calculation'))
                  <div class="table-responsive">
                    <table class="table">
                      <tbody id="lcform">
                        <tr>
                          <td class="specsec">{{__('app.Initial_price')}}:</td>
                          <td><input oninput="returnratecalc()" type="number" id="initpayment" class="form-control" placeholder="{{__('app.Initial_price')}}..."></td>
                        </tr>
                        <tr>
                          <td class="specsec">{{__('app.Price_at_t_1')}}:</td>
                          <td><input oninput="returnratecalc()" type="number" id="nextprice" class="form-control" placeholder="{{__('app.Price_at_t_1')}}..."></td>
                        </tr>
                        <tr>
                          <td class="specsec">{{__('app.Coupon_payment')}}:</td>
                          <td>
                            <input oninput="returnratecalc()" type="number" id="cpayment" class="form-control" placeholder="{{__('app.Coupon_payment')}}">
                          </td>
                        </tr>
                        <tr>
                          <td class="specsec">
                            <b class="fail-func" style="display: none;">{{__('app.Fill_the_all_blanks')}}</b>
                            <b class="success-func" id="reseted" style="display: none;">{{__('app.Reseted')}}</b>
                            <b class="success-func" id="success" style="display: none;">{{__('app.Success')}}</b> </td>
                          <td>
                            <button type="button" class="btn btn-primary" onclick="returnratecalcman()">{{__('app.Calculate')}}</button>
                            <button onclick="ratofretreset()" class="btn btn-danger right">{{__('app.Reset')}}</button>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="table-responsive" id="resulttable" style="display: none;">
                    <table class="table">
                      <tbody>
                        <tr><hr>
                          <td>{{__('app.Result')}}:</td>
                          <td><div id="rrresult"></div></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  @elseif(Request::is('*/inflation-calculation'))
                  <div class="table-responsive">
                    <table class="table">
                      <tbody id="lcform">
                        <tr>
                          <td class="specsec">{{__('app.Real_GDP_at_time_t')}} (<span class="curry">$</span>)</td>
                          <td><input oninput="inflcalfunct()" type="number" id="rgdbatt" class="form-control" placeholder="{{__('app.Real_GDP_at_time_t')}}..."></td>
                        </tr>
                        <tr>
                          <td class="specsec">{{__('app.Real_GDP_at_time_t_plus_1')}} (<span class="curry">$</span>)</td>
                          <td><input oninput="inflcalfunct()" type="number" id="rgdbatt1" class="form-control" placeholder="{{__('app.Real_GDP_at_time_t_plus_1')}}..."></td>
                        </tr>
                        <tr>
                          <td class="specsec">{{__('app.Nominal_GDP_at_time_t')}} (<span class="curry">$</span>) </td>
                          <td><input oninput="inflcalfunct()" type="number" id="ngdpatt" class="form-control" placeholder="{{__('app.Nominal_GDP_at_time_t')}}..."></td>
                        </tr>
                        <tr>
                          <td class="specsec">{{__('app.Nominal_GDP_at_time_t_plus_1')}} (<span class="curry">$</span>) </td>
                          <td>
                            <input type="number" oninput="inflcalfunct()" class="form-control" id="ngdpatt1" placeholder="{{__('app.Nominal_GDP_at_time_t_plus_1')}}...">
                          </td>
                        </tr>
                        <tr>
                        <td class="specsec">{{__('app.Currency')}} </td>
                          <td>
                            <select oninput="inflcalfunct()" class="form-control" id="curr">
                              <option value="$" selected>$</option>
                              <option value="₼">₼</option>
                              <option value="€">€</option>
                            </select>
                          </td>
                        </tr>
                        <tr>
                          <td class="specsec">
                            <b class="fail-func" style="display: none;">{{__('app.Fill_the_all_blanks')}}</b>
                            <b class="success-func" id="reseted" style="display: none;">{{__('app.Reseted')}}</b>
                            <b class="success-func" id="success" style="display: none;">{{__('app.Success')}}<i id="dots"></i> </b> </td>
                          <td>
                            <button type="button" class="btn btn-primary" onclick="inflcalfunctman()">{{__('app.Calculate')}}</button>
                            <button onclick="inflcalcreset()" class="btn btn-danger right">{{__('app.Reset')}}</button>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="table-responsive" id="resulttable" style="display: none;">
                    <table class="table">
                      <tbody>
                        <tr><hr>
                          <td>{{__('app.Result')}}:</td>
                          <td><div id="bpresult"></div></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  @endif
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection
@section('foot')
@endsection
