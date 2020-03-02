<?php

//-- Start ---------------------------------------------------------------------------------------- Home
Route::get('/', function () {
    return view('home-landing-page');
});
//-- End ---------------------------------------------------------------------------------------- /Home


//-- Start ---------------------------------------------------------------------------------------- Login
Route::get('/regis', 'LoginController@getRegis')->name('regis')->middleware('guest');
Route::get('/login', 'LoginController@getLogin')->name('login-page')->middleware('guest');
Route::post('/login', 'LoginController@postLogin')->name('login');
Route::post('/regis', 'LoginController@register');
Route::get('/logout', 'LoginController@logout');
//-- End ---------------------------------------------------------------------------------------- /Login


//-- Start ---------------------------------------------------------------------------------------- Admin
Route::get('/admin', function() {
  return view('admin');
})->middleware('auth:admin');
//-- End ---------------------------------------------------------------------------------------- /Admin


//-- Start ---------------------------------------------------------------------------------------- Staf
Route::get('/staf', function() {
  return view('staf');
})->middleware('auth:staf');
//-- End ---------------------------------------------------------------------------------------- /Staf


//-- Start ---------------------------------------------------------------------------------------- User
Route::get('/user', 'UserController@User_Dashboard')
->name('UserDashboard')->middleware('auth:user');
//-- End ---------------------------------------------------------------------------------------- /User
