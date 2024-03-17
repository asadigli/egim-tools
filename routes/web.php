<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/about', 'ToolController@home');
Route::get('/', 'ToolController@home');
Route::get('/get-words/{text}/{type}/{lang}/{length}','ToolController@getwords');
Route::get('/get-meaning-of-terminology/{word?}/{lang?}','MedController@getmeaning');
Route::get('/get-suggestion-of-terminology/{part?}/{lang?}','MedController@getsugg');
Route::post('/add-meaning','MedController@addmeaning');

//tool-form view
Route::get('/css-minifier','ToolController@tool_form');
Route::get('/css-comment-cleaner','ToolController@tool_form');
Route::get('/css-unminifier','ToolController@tool_form');
Route::get('/btn-design','ToolController@tool_form');
Route::get('/css-font-design','ToolController@tool_form');
Route::get('/shadow-creator','ToolController@tool_form');
Route::get('/character-counter','ToolController@tool_form');
Route::get('/password-generator','ToolController@tool_form');
Route::get('/rotate-div','ToolController@tool_form');


//t-form2 view
Route::get('/color-picker','ToolController@tool_form2');
Route::get('/rgb-hex-converter','ToolController@tool_form2');
Route::get('/border-radius-generator','ToolController@tool_form2');
Route::get('/slug-maker','ToolController@tool_form2');
Route::get('/image-cropper','ToolController@tool_form2');

//tform3 view
Route::get('/text-to-json-converter','ToolController@tform3');
Route::get('/combine-words-to-generate-name','ToolController@tform3');
Route::get('/make-advanced-rich-text','ToolController@tform3');
Route::get('/start-with-letter/{id?}','ToolController@tform3_spec');


Route::get('/already-searched-words','ToolController@list');

//math section
Route::redirect('/math', '/finance');

Route::group(['prefix' => 'finance'], function(){
	Route::get('/', 'FinanceController@home');
	Route::get('/loan-calculation', 'FinanceController@loan_calculation');
	Route::get('/present-value-calculation', 'FinanceController@loan_calculation');
	Route::get('/future-value-calculation', 'FinanceController@loan_calculation');
	Route::get('/bond-price-calculation', 'FinanceController@loan_calculation');
	Route::get('/rate-of-return-calculation', 'FinanceController@loan_calculation');
	Route::get('/about', 'FinanceController@home');
	Route::get('/inflation-calculation', 'FinanceController@loan_calculation');
});


Route::group(['prefix' => 'medical'], function(){
	Route::get('/terminology-meaning','MedController@form');
});




Route::group(['prefix' => '/{lang?}'], function ($lang=null){
	Route::get('/about', 'ToolController@home');
	Route::get('/', 'ToolController@home');

	//tool-form view
	Route::get('/css-minifier','ToolController@tool_form');
	Route::get('/css-unminifier','ToolController@tool_form');
	Route::get('/css-comment-cleaner','ToolController@tool_form');
	Route::get('/btn-design','ToolController@tool_form');
	Route::get('/css-font-design','ToolController@tool_form');
	Route::get('/shadow-creator','ToolController@tool_form');
	Route::get('/character-counter','ToolController@tool_form');
	Route::get('/password-generator','ToolController@tool_form');
	Route::get('/rotate-div','ToolController@tool_form');


	//t-form2 view
	Route::get('/color-picker','ToolController@tool_form2');
	Route::get('/rgb-hex-converter','ToolController@tool_form2');
	Route::get('/border-radius-generator','ToolController@tool_form2');
	Route::get('/slug-maker','ToolController@tool_form2');
	Route::get('/image-cropper','ToolController@tool_form2');

	//tform3 view
	Route::get('/text-to-json-converter','ToolController@tform3');
	Route::get('/combine-words-to-generate-name','ToolController@tform3');
	Route::get('/make-advanced-rich-text','ToolController@tform3');
	Route::get('/start-with-letter/{part?}','ToolController@tform3_spec');

	Route::get('/already-searched-words','ToolController@list');

	//math section
	Route::group(['prefix' => 'finance'], function(){
		Route::get('/', 'FinanceController@home');
		Route::get('/loan-calculation', 'FinanceController@loan_calculation');
		Route::get('/present-value-calculation', 'FinanceController@loan_calculation');
		Route::get('/future-value-calculation', 'FinanceController@loan_calculation');
		Route::get('/bond-price-calculation', 'FinanceController@loan_calculation');
		Route::get('/rate-of-return-calculation', 'FinanceController@loan_calculation');
		Route::get('/about', 'FinanceController@home');
		Route::get('/inflation-calculation', 'FinanceController@loan_calculation');
	});
	Route::group(['prefix' => 'medical'], function(){
		Route::get('/terminology-meaning','MedController@form');
	});
});
