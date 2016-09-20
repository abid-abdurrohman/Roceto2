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

Route::group(['middleware' => ['web']], function () {
   Route::auth();
});

	Route::get('', 'HomeController@index');
   Route::get('home', 'HomeController@index');
/*link menu*/

Route::post('register/{id}/upload', 'BuktiBayarController@store');

Route::get('admin/logout', 'Auth\AuthController@getLogout');

Route::get('admin/participant/{id}/bukti_pembayaran', 'ParticipantController@bukti_pembayaran');



Route::get('login', 'LogController@login');
Route::get('register', 'LogController@register');

Route::get('profil', 'ProfileController@index');
Route::patch('profil{id}', 'ProfileController@update');

Route::get('team/{id}', 'ParticipantUserController@index');
Route::patch('team/{id}', 'ParticipantUserController@update');

Route::post('team/{id}', 'MemberUserController@store');
Route::patch('team/{id}/member/{member}', 'MemberUserController@update');
Route::delete('team/{id}/member/{member}', 'MemberUserController@destroy');

Route::get('/schedule', function() {
    return view('schedule.schedule');
});
Route::get('/bagan', function () {
    return view('bagan.bagan');
});

Route::get('tables', 'TableUserController@index');
Route::get('tables/{id}', 'TableUserController@show');

Route::get('contact', 'ContactController@index');
Route::post('contact', 'ContactController@store');

Route::get('youtube', 'EventStreamController@index');
Route::get('youtube/{id}', 'EventStreamController@show');

Route::get('result', 'ResultUserController@index');
Route::get('result/{id}', 'ResultUserController@show');

/*link news*/
Route::get('news', 'NewsUserController@index');
Route::get('news/{slug}', 'NewsUserController@show');
Route::post('comment/{id}', 'CommentUserController@store');

/*link gallery*/
Route::get('gallery', 'GalleryUserController@index');

/*link register*/
Route::get('join/{id}', 'RegisterController@index');
Route::post('join/{id}', 'RegisterController@store');
Route::patch('join/{id}', 'RegisterController@update');

Route::get('bracket/{id}', 'BracketUserController@show');
Route::get('bracket/{id}/getPDF', 'BracketUserController@getPDF');

/*link admin*/
Route::get('admin', 'AdminController@login');
Route::get('admin/home', 'AdminController@index');
Route::post('admin/pro_login', 'AdminController@pro_login');
Route::resource('admin/user', 'UserAdminController');
Route::resource('admin/sponsor', 'SponsorController');
Route::resource('admin/event', 'EventController');

Route::resource('admin/gallery', 'GalleryController');
Route::post('admin/event/search', 'EventController@search');
Route::resource('admin/news', 'NewsController');
Route::resource('admin/news.comment', 'CommentController');
Route::resource('admin/participant', 'ParticipantController');
Route::resource('admin/participant.member', 'MemberController');
Route::get('admin/event-match', 'EventMatchController@index');
Route::get('admin/event-match/{id}', 'EventMatchController@show');
Route::get('admin/event-bracket', 'EventBracketController@index');
Route::get('admin/event-result/{id}', 'EventBracketController@show_result');
Route::get('admin/event-bracket/{id}', 'EventBracketController@show');
Route::get('admin/match-score', 'EventMatchScoreController@index');
Route::get('admin/match-score/{id}', 'EventMatchScoreController@show');
Route::patch('admin/match-score/{id}/team/{id_team}', 'EventMatchScoreController@update');
Route::resource('admin/event-match.match', 'MatchController');
Route::resource('admin/event-match.match.team', 'MatchTeamController');
Route::get('admin/event/get_event','EventController@getEvent');

Route::get('redirect/{provider}', 'SocialAuthController@redirect');
Route::get('callback/{provider}', 'SocialAuthController@callback');

Route::post('admin/participant/search', 'ParticipantController@search');
Route::post('admin/participant/validation/{id}', 'ParticipantController@validation');
