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
Route::get('', 'HomeController@index');

Route::get('home', 'HomeController@index');

Route::get('admin/logout', 'Auth\AuthController@getLogout');

Route::get('/login', function () {
    return view('log.login');
});
Route::get('/tim', function () {
    return view('peserta.tim');
});
Route::get('/individual', function () {
    return view('peserta.individual');
});
Route::get('/gallery', function () {
    return view('gallery.gallery');
});
Route::get('/video', function () {
    return view('video.video');
});
Route::get('/match', function () {
    return view('matches.match');
});
Route::get('/jadwal', function() {
    return view('jadwal.jadwal');
});
Route::get('/bagan', function() {
    return view('bagan.bagan');
});
Route::get('/results', function () {
    return view('results.results');
});

Route::get('contact', 'ContactController@index');
Route::post('contact', 'ContactController@store');

/*link news*/
Route::get('news', 'NewsUserController@index');
Route::get('news/{slug}', 'NewsUserController@show');

/*link gallery*/
Route::get('gallery', 'GalleryUserController@index');

/*link register*/
Route::get('register/{id}', 'RegisterController@index');
Route::post('register/{id}', 'RegisterController@store');

/*link admin*/
Route::get('admin', 'AdminController@login');
Route::get('admin/home', 'AdminController@index');
Route::post('admin/pro_login', 'AdminController@pro_login');
Route::resource('admin/event', 'EventController');
Route::resource('admin/event.category', 'CategoryController');
Route::resource('admin/gallery', 'GalleryController');
Route::post('admin/event/search', 'EventController@search');
Route::resource('admin/news', 'NewsController');
Route::resource('admin/participant', 'ParticipantController');
Route::resource('admin/participant.member', 'MemberController');
Route::get('admin/category', 'CategoryMatchController@index');
Route::get('admin/category/{id}', 'CategoryMatchController@show');
Route::resource('admin/category.match', 'MatchController');

Route::get('redirect/{provider}', 'SocialAuthController@redirect');
Route::get('callback/{provider}', 'SocialAuthController@callback');

Route::post('admin/participant/search', 'ParticipantController@search');
Route::post('admin/participant/validation/{id}', 'ParticipantController@validation');
