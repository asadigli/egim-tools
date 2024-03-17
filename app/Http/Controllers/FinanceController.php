<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FinanceController extends Controller
{
	public function loan_calculation($lang=null){
		if (!in_array($lang,['en','es','id','zh','tr','hi','az','de'])) {
			$lang='en';
		}
		app()->setLocale($lang);
		return view('form');
	}
  public function home($lang=null){
		if (!in_array($lang,['en','es','id','zh','tr','hi','az','de'])) {
			$lang='en';
		}
		app()->setLocale($lang);
		return view('fhome');
	}
}
