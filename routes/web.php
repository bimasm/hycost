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
//-- Start -------------------------------------------------------------------- Forum
Route::get('/user', 'UserController@User_Dashboard_Forum')
->name('UserDashboardForum')->middleware('auth:user');

Route::get('/post', 'UserController@User_SemuaPost_Forum')
->name('UserPostSemuaForum')->middleware('auth:user');

Route::get('/add-newpost', 'UserController@User_AddNewPost_Forum')
->name('UserPostAddNewPost')->middleware('auth:user');

Route::get('/komentar', 'UserController@User_SemuaKomentar_Forum')
->name('UserKomentarSemua')->middleware('auth:user');
<<<<<<< HEAD
//-- End ---------------------------------------------------------------------- Forum

//-- Start -------------------------------------------------------------------- Monitorng
Route::get('/user/monitor', 'UserController@User_Dashboard_Monitor')
->name('UserDashboardMonitor')->middleware('auth:user');

Route::get('/label', 'UserController@User_SemuaLabel_Monitor')
->name('UserSemuaLabelMonitor')->middleware('auth:user');

Route::get('/add-newlabel', 'UserController@User_AddNewlabel_Monitor')
->name('UserLabelAddNewMonitor')->middleware('auth:user');
//-- End ---------------------------------------------------------------------- Monitorng

=======
//-- End -------------------------------------------------------------------- Forum
>>>>>>> ec04a23068213a39e0ef0b95d16e12bcb2418607
Route::get('/setting', 'UserController@User_Setting')
->name('UserSetting')->middleware('auth:user');
//-- End ---------------------------------------------------------------------------------------- /User
