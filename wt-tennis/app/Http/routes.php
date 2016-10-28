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

     /* Register */
     Route::post('register/{id}/upload', 'BuktiBayarController@store');
     Route::get('register/pembayaran', 'ParticipantController@pembayaran');
     Route::post('register/pembayaran', 'ParticipantController@postPembayaran');

     /* Auth */
     Route::get('login', 'LogController@login');
     Route::get('register', 'LogController@register');
     Route::get('redirect/{provider}', 'SocialAuthController@redirect');
     Route::get('callback/{provider}', 'SocialAuthController@callback');
     Route::get('user/activation/{token}', 'Auth\AuthController@activateUser')->name('user.activate');

     /* Schedule */
     Route::get('schedule', 'ScheduleUserController@index');

     /* Tables */
     Route::get('tables', 'TableUserController@index');
     Route::get('tables/{id}', 'TableUserController@show');

     /* Contact */
     Route::get('contact', 'ContactController@index');
     Route::post('contact', 'ContactController@store');

     /* Matches */
     Route::get('match', 'EventStreamController@index');
     Route::get('match/{id}', 'EventStreamController@show');

     /* Result */
     Route::get('results', 'ResultUserController@index');

     /* Fixtures */
     Route::get('fixtures', 'FixturesUserController@index');

     /* News */
     Route::get('news', 'NewsUserController@index');
     Route::get('news/{slug}', 'NewsUserController@show');

     /* Tags */
     Route::get('tags/{id}', 'TagUserController@index');

     /* Gallery */
     Route::get('gallery', 'GalleryUserController@index');

     /* Join */
     Route::get('join/{id}', 'RegisterController@index');
     Route::post('join/{id}', 'RegisterController@store');
     Route::patch('join/{id}', 'RegisterController@update');

     /* Bracket */
     Route::get('bracket', 'BracketUserController@index');
     Route::get('bracket/{id}', 'BracketUserController@show');
     Route::get('bracket/{id}/getPDF', 'BracketUserController@getPDF');
});
Route::group(['middleware' => 'auth'], function () {
    /* Profile */
    Route::get('profil', 'ProfileController@index');
    Route::patch('profil{id}', 'ProfileController@update');

    /* Register */
    Route::post('register/{id}/upload', 'BuktiBayarController@store');

    /* Team */
    Route::post('team/{id}', 'MemberUserController@store');
    Route::get('team/{id}', 'ParticipantUserController@index');
    Route::patch('team/{id}', 'ParticipantUserController@update');
    Route::patch('team/{id}/member/{member}', 'MemberUserController@update');
    Route::delete('team/{id}/member/{member}', 'MemberUserController@destroy');
});

Route::group(['middleware' => 'admin'], function () {
    // Route::get('admin', 'AdminController@login');
    Route::get('admin', 'AdminController@index');

    /* Auth */
    Route::post('admin/pro_login', 'AdminController@pro_login');
    Route::get('admin/logout', 'Auth\AuthController@getLogout');

    /* User */
    Route::resource('admin/user', 'UserAdminController');
    Route::patch('admin/user/{id}/make_admin', 'UserAdminController@make_admin');

    /* Sponsor */
    Route::resource('admin/sponsor', 'SponsorController');

    /* Event */
    Route::resource('admin/event', 'EventController');
    Route::get('admin/event/get_event','EventController@getEvent');
    Route::post('admin/event/search', 'EventController@search');

    /* Tag */
    Route::resource('admin/tag', 'TagController');

    /* Rank */
    Route::resource('admin/rank', 'RankController');

    /* Gallery */
    Route::resource('admin/gallery', 'GalleryController');

    /* Schedulle */
    Route::resource('admin/schedule', 'ScheduleController');

    /* News */
    Route::resource('admin/news', 'NewsController');
    Route::resource('admin/news.comment', 'CommentController');

    /* Match */
    Route::get('admin/event-match', 'EventMatchController@index');
    Route::post('admin/event-match/{id}/auto_add', 'MatchController@auto_add');
    Route::resource('admin/event-match.part.match', 'MatchController');
    Route::post('admin/event-match.part/{id_part}/auto_team', 'MatchController@auto_team');
    Route::resource('admin/event-match.part.match.team', 'MatchTeamController');
    Route::get('admin/event-match/{id}/part/{id_part}/match-score/{id_match}', 'EventMatchScoreController@show');
    Route::post('admin/event-match/{id}/part/{id_part}/match-score/{id_match}', 'EventMatchScoreController@endmatch');
    Route::patch('admin/event-match/{id}/part/{id_part}/match-score/{id_match}', 'EventMatchScoreController@startmatch');
    Route::patch('admin/event-match/{id}/part/{id_part}/match-score/{id_match}/team/{id_team}', 'EventMatchScoreController@update');

    /* EventStatistic */
    Route::get('admin/event-statistic', 'EventStatisticController@index');
    Route::get('admin/event-statistic/{id}', 'EventStatisticController@show');
    Route::resource('admin/event-statistic.statistic', 'StatisticController');

    /* Result */
    Route::get('admin/result', 'ResultController@index');

    /* Participant */
    Route::get('admin/participant-user', 'ParticipantController@event_index');
    Route::get('admin/participant-user/{user_id}', 'ParticipantController@show_event');
    Route::resource('admin/participant-user.participant', 'ParticipantController');
    Route::resource('admin/participant-user.participant.member', 'MemberController');
    Route::get('admin/participant-user.participant/{user_id}/bukti_pembayaran', 'ParticipantController@bukti_pembayaran');
    Route::post('admin/participant-user.participant/{user_id}/bukti_pembayaran', 'ParticipantController@validation');
    Route::post('admin/participant/search', 'ParticipantController@search');

    /* Pemasukan */
    Route::get('admin/pemasukan', 'PemasukanController@index');
    Route::post('admin/pemasukan', 'PemasukanController@store');
});
