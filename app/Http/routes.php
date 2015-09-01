<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function() {
	return redirect('/');
});

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Password reset link request routes...
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

// Password reset routes...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');

// Admin
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {

    Route::get('/', 'DashboardController@index');

    Route::resource('alumni', 'Admin\AlumniController');
    Route::resource('news', 'Admin\NewsController');
    Route::resource('research_area', 'Admin\ResearchAreaController', ['except' => 'show']);
    Route::resource('course', 'Admin\CourseController');
    Route::resource('faculty', 'Admin\FacultyController');
    Route::resource('research_group', 'Admin\ResearchGroupController');

});