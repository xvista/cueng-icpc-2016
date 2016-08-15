<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return redirect('2016');
});

Route::get('2016', function () {
    return view('main');
});

Route::get('2016/thailand/central-a', 'AcmIcpc2016ThailandCentralAController@index');
Route::post('2016/thailand/central-a/register', 'AcmIcpc2016ThailandCentralAController@register');
