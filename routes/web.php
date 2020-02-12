<?php

Route::get('/', function () {
    return view('home-landing-page');
});
Route::get('/regis', 'LoginController@getRegis')->middleware('guest');

// hanya untuk tamu yg belum auth
Route::get('/login', 'LoginController@getLogin')->middleware('guest');
Route::post('/login', 'LoginController@postLogin')->name('login');
Route::post('/regis', 'LoginController@register')->name('regis');
Route::get('/logout', 'LoginController@logout');

Route::get('/admin', function() {
  return view('admin.admin-dashboard');
})->middleware('auth:admin');

Route::get('/staf', function() {
  return view('staff.staff-dashboard');
})->middleware('auth:staf');

Route::get('/user', function() {
  return view('home-landing-page');
})->middleware('auth:user');
