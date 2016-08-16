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

/*link menu*/
Route::get('/', function () {
    return view('home.home');
});

Route::auth();
Route::get('/login', function () {
    return view('log.login');
});
Route::get('/tim', function () {
    return view('peserta.tim');
});
Route::get('/individual', function () {
    return view('peserta.individual');
});
Route::get('/match', function () {
    return view('matches.match');
});
Route::get('turnamen', function() {
    return view('turnamen.turnamen');
});
Route::get('/results', function () {
    return view('results.results');
});
Route::get('/news', function () {
    return view('news.news');
});
Route::get('/contact', function () {
    return view('contact.contact');
});


/*link group*/
Route::resource('reg_futsal', 'Reg_futsalController');
Route::resource('reg_basket', 'Reg_basketController');
Route::resource('reg_bultang', 'Reg_bultangController');
Route::resource('reg_voli', 'Reg_voliController');


/*link individual*/
Route::resource('reg_lompat', 'Reg_lompatController');
Route::resource('reg_catur', 'Reg_caturController');
Route::resource('reg_marathon', 'Reg_marathonController');
Route::resource('reg_swim', 'Reg_swimController');

/*link admin*/
Route::get('admin', 'AdminController@login');
Route::get('admin/home', 'AdminController@index');
Route::post('admin/pro_login', 'AdminController@pro_login');
Route::resource('admin/event', 'EventController');
Route::post('admin/event/search', 'EventController@search');
Route::resource('admin/news', 'NewsController');
Route::resource('admin/participant', 'ParticipantController');
