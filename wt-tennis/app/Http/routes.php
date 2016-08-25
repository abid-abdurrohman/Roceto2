<?php
use Illuminate\Support\Facades\Mail;
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

Route::get('/mail', function (){
    Mail::send('emails.welcome', ['name' => 'Annisa Gusviany M.S'], function($message){
      $message->to('maudyannisa@gmail.com')->from('muhammadabdurrohman1995@gmail.com')->subject('Welcome!');
    });
});

Route::get('admin/bracket', function (){
    return view('admin.bracket.index');
});

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
Route::get('/contact', function () {
    return view('contact.contact');
});


/*link news*/
Route::get('news', 'NewsUserController@index');
Route::get('news/{slug}', 'NewsUserController@show');

/*link gallery*/
Route::get('gallery', 'GalleryUserController@index');

/*link group*/
Route::get('reg_futsal', 'RegisterController@regFutsal');
Route::post('reg_futsal', 'RegisterController@store_regFutsal');
Route::get('reg_basket', 'RegisterController@regBasket');
Route::post('reg_basket', 'RegisterController@store_regBasket');
Route::get('reg_bultang', 'RegisterController@regBultang');
Route::post('reg_bultang', 'RegisterController@store_regBultang');
Route::get('reg_voli', 'RegisterController@regVoli');
Route::post('reg_voli', 'RegisterController@store_regVoli');

/*link individual*/
Route::get('reg_lompat', 'RegisterController@regLompat');
Route::post('reg_lompat', 'RegisterController@store_regLompat');
Route::get('reg_catur', 'RegisterController@regCatur');
Route::post('reg_catur', 'RegisterController@store_regCatur');
Route::get('reg_marathon', 'RegisterController@regMarathon');
Route::post('reg_marathon', 'RegisterController@store_regMarathon');
Route::get('reg_swim', 'RegisterController@regSwim');
Route::post('reg_swim', 'RegisterController@store_regSwim');

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

Route::get('redirect/{provider}', 'SocialAuthController@redirect');
Route::get('callback/{provider}', 'SocialAuthController@callback');

Route::post('admin/participant/search', 'ParticipantController@search');
Route::post('admin/participant/validation/{id}', 'ParticipantController@validation');
