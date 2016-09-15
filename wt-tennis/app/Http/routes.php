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
	 Route::get('', 'HomeController@index');
   Route::get('home', 'HomeController@index');
});

/*link menu*/

Route::get('admin/logout', 'Auth\AuthController@getLogout');

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
Route::get('/results', function () {
    return view('results.results');
});

Route::get('contact', 'ContactController@index');
Route::post('contact', 'ContactController@store');

Route::get('youtube', 'EventStreamController@index');
Route::get('youtube/{id}', 'EventStreamController@show');

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

/*link admin*/
Route::get('admin', 'AdminController@login');
Route::get('admin/home', 'AdminController@index');
Route::post('admin/pro_login', 'AdminController@pro_login');
Route::resource('admin/user', 'UserAdminController');
Route::resource('admin/sponsor', 'SponsorController');
Route::resource('admin/event', 'EventController');
Route::resource('admin/event.category', 'CategoryController');
Route::resource('admin/gallery', 'GalleryController');
Route::post('admin/event/search', 'EventController@search');
Route::resource('admin/news', 'NewsController');
Route::resource('admin/news.comment', 'CommentController');
Route::resource('admin/participant', 'ParticipantController');
Route::resource('admin/participant.member', 'MemberController');
Route::get('admin/category-match', 'CategoryMatchController@index');
Route::get('admin/category-match/{id}', 'CategoryMatchController@show');
Route::get('admin/category-bracket', 'CategoryBracketController@index');
Route::get('admin/category-result/{id}', 'CategoryBracketController@show_result');
Route::get('admin/category-bracket/{id}', 'CategoryBracketController@show');
Route::resource('admin/category.match', 'MatchController');
Route::resource('admin/category.match.team', 'MatchTeamController');
Route::resource('admin/category.match.team.score', 'MatchScoreController');
Route::get('admin/event/get_event','EventController@getEvent');

Route::get('redirect/{provider}', 'SocialAuthController@redirect');
Route::get('callback/{provider}', 'SocialAuthController@callback');

Route::post('admin/participant/search', 'ParticipantController@search');
Route::post('admin/participant/validation/{id}', 'ParticipantController@validation');
