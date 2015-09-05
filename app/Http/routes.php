<?php

// Frontend Routes
Route::get('/', 'Frontend\PagesController@home');
Route::get('/contact', 'Frontend\PagesController@contact');

Route::resource('/alumni', 'Frontend\AlumniController', ['only' => ['index', 'show']]);
Route::resource('/faculty', 'Frontend\FacultyController', ['only' => ['index', 'show']]);
Route::resource('/journal', 'Frontend\JournalController', ['only' => ['index', 'show']]);
Route::resource('/conference', 'Frontend\ConferenceController', ['only' => ['index', 'show']]);
Route::resource('/research_group', 'Frontend\ResearchGroupController', ['only' => ['index', 'show']]);

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

// Admin Routes
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {

    Route::get('/', 'Admin\DashboardController@index');

    Route::get('/profile', 'Auth\ProfileController@edit');
    Route::post('/profile', 'Auth\ProfileController@update');

    Route::resource('alumni', 'Admin\AlumniController');
    Route::resource('news', 'Admin\NewsController');
    Route::resource('research_area', 'Admin\ResearchAreaController', ['except' => 'show']);
    Route::resource('course', 'Admin\CourseController');
    Route::resource('research_group', 'Admin\ResearchGroupController');

    Route::resource('faculty', 'Admin\FacultyController');
    Route::resource('faculty.education', 'Admin\EducationController', ['except' => 'index']);
    Route::resource('faculty.publication', 'Admin\PublicationController', ['except' => 'index']);

});