<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class UserController extends Controller
{
    public function User_Dashboard_Forum()
    {
    	return view('user.user-dashboard-forum');
    }

    public function User_SemuaPost_Forum()
    {
    	return view('user.user-post-semua-forum');
    }

    public function User_AddNewPost_Forum()
    {
    	return view('user.user-add-newpost-forum');
    }

    public function User_SemuaKomentar_Forum()
    {
        return view('user.user-komentar-semua-forum');
    }

    public function User_Setting()
    {
        return view('user.user-setting');
    }
}
