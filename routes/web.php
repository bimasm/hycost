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
Route::post('/loginEW', 'LoginController@postLoginEW')->name('loginEW');
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

//-- Start --------------------------------------------------------- Landing
Route::get('/forum/detail/dat/{id}', 'DataController@Data_Post_Detail')
->name('userlandingForumDataPost');
Route::get('/forum/kategori/dat/{id}', 'DataController@Data_Post_Kategori')
->name('userlandingForumDataKategori');
Route::get('/forum/komentar/dat/{id}', 'DataController@Data_Post_Komen')
->name('userlandingForumDataKomentar');
Route::get('/forum/reply/dat/{id}', 'DataController@Data_Post_Reply')
->name('userlandingForumDataReplyKomentar');

Route::get('/forum', 'UserController@User_Forum_Home')
->name('UserLandingForum');

Route::get('/forum/kategori/{kategori}', 'UserController@User_Forum_Kategori')
->name('UserLandingForumKategori');

Route::get('/forum/{judul}', 'UserController@User_Forum_Detail')
->name('UserLandingForumDetail');

Route::get('/forum/komentar/{judul}', 'UserController@User_Forum_Komentar')
->name('UserLandingForumKomentar')->middleware('auth:user');

Route::get('/forum/reply/{judul}/{id}', 'UserController@User_SubForum_Komentar')
->name('UserLandingForumSubKomentar')->middleware('auth:user');
//-- End ----------------------------------------------------------- Landing

//-- Start --------------------------------------------------------- Dashboard
Route::get('/post/data', 'DataController@Data_Post_User')
->name('UserDashboardPostData');

Route::get('/user', 'UserController@User_Dashboard_Forum')
->name('UserDashboardForum')->middleware('auth:user');

Route::get('/post', 'UserController@User_SemuaPost_Forum')
->name('UserPostSemuaForum')->middleware('auth:user');

Route::get('/add-newpost', 'UserController@User_AddNewPost_Forum')
->name('UserPostAddNewPost')->middleware('auth:user');
Route::post('/add-newpost', 'UserActionsController@addpost')
->name('AddNewPost')->middleware('auth:user');

Route::get('/komentar', 'UserController@User_SemuaKomentar_Forum')
->name('UserKomentarSemua')->middleware('auth:user');
//-- End ----------------------------------------------------------- Dashboard
//-- End ---------------------------------------------------------------------- Forum

//-- Start ------------------------------------------------------------------------------- Monitorng
Route::get('/user/monitor', 'UserController@User_Dashboard_Monitor')
->name('UserDashboardMonitor')->middleware('auth:user');

//--------------------------------------------------------------------------- Label
Route::get('/label', 'UserController@User_SemuaLabel_Monitor')
->name('UserSemuaLabelMonitor')->middleware('auth:user');

Route::get('/add-newlabel', 'UserController@User_AddNewlabel_Monitor')
->name('UserLabelAddNewMonitor')->middleware('auth:user');

Route::get('/cari-newlabel', 'UserController@User_CariLabel_Monitor')
->name('UserLabelCariNewMonitor')->middleware('auth:user');

Route::get('/detail-label', 'UserController@User_DetailLabel_Monitor')
->name('UserLabelDetailMonitor')->middleware('auth:user');
//--------------------------------------------------------------------------- Kebun
Route::get('/kebun', 'UserController@User_SemuaKebun_Monitor')
->name('UserSemuaKebunMonitor')->middleware('auth:user');

//-- End ----------------------------------------------------------------------------------- Monitorng

Route::get('/setting', 'UserController@User_Setting')
->name('UserSetting')->middleware('auth:user');
//-- End ---------------------------------------------------------------------------------------- /User

Route::post('like', 'UserActionsController@like')->name('likes')->middleware('auth:user');
Route::post('dislike', 'UserActionsController@dislike')->name('dislikes')->middleware('auth:user');
Route::post('/comment/store', 'CommentController@store')->name('comment.add')->middleware('auth:user');
Route::post('/reply/store', 'CommentController@replyStore')->name('reply.add')->middleware('auth:user');
Route::post('/forum/search', 'UserActionsController@search')
->name('Usersearch');

