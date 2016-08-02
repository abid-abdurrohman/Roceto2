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
    return view('home.home');

Route::auth();

Route::get('/', 'HomeController@index');


});

/*link group*/

Route::resource('reg_futsal', 'Reg_futsalController');

Route::get('/reg_futsal2', function () {
    return view('reg_match.reg_futsal');
});

Route::resource('reg_basket', 'Reg_basketController');

Route::get('/reg_basket2', function () {
    return view('reg_match.reg_basket');
});

Route::resource('reg_bultang', 'Reg_bultangController');

Route::get('/reg_bultang2', function () {
    return view('reg_match.reg_bultang');
});

Route::resource('reg_voli', 'Reg_voliController');

Route::get('/reg_voli2', function () {
    return view('reg_match.reg_voli');
});

/*link individual*/
Route::resource('reg_lompat', 'Reg_lompatController');

Route::resource('reg_catur', 'Reg_caturController');

Route::resource('reg_marathon', 'Reg_marathonController');

Route::resource('reg_swim', 'Reg_swimController');



