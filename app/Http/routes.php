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
// Route::post('2016/thailand/central-a/register', 'AcmIcpc2016ThailandCentralAController@register');
Route::post('2016/thailand/central-a/prep-course/register', 'AcmIcpc2016ThailandCentralAController@prepCourseRegister');
Route::get('2016/thailand/central-a/admin', 'AcmIcpc2016ThailandCentralAController@adminLogin');
Route::post('2016/thailand/central-a/admin', 'AcmIcpc2016ThailandCentralAController@adminShow');
Route::get('2016/thailand/central-a/scoreboard', 'AcmIcpc2016ThailandCentralAController@scoreboard');

Route::get('2016/asia/bangkok', 'AcmIcpc2016AsiaBangkokController@index');
