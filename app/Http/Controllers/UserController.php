<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class UserController extends Controller
{
<<<<<<< HEAD
    //--- Start ------------------------------------------------------------- Forum
    public function User_Dashboard_Forum()
    {
    	return view('user.forum.user-dashboard-forum');
=======
    public function User_Dashboard_Forum()
    {
    	return view('user.user-dashboard-forum');
>>>>>>> ec04a23068213a39e0ef0b95d16e12bcb2418607
    }

    public function User_SemuaPost_Forum()
    {
<<<<<<< HEAD
    	return view('user.forum.user-post-semua-forum');
=======
    	return view('user.user-post-semua-forum');
>>>>>>> ec04a23068213a39e0ef0b95d16e12bcb2418607
    }

    public function User_AddNewPost_Forum()
    {
<<<<<<< HEAD
    	return view('user.forum.user-add-newpost-forum');
=======
    	return view('user.user-add-newpost-forum');
>>>>>>> ec04a23068213a39e0ef0b95d16e12bcb2418607
    }

    public function User_SemuaKomentar_Forum()
    {
<<<<<<< HEAD
        return view('user.forum.user-komentar-semua-forum');
    }
    //--- End -------------------------------------------------------------- Forum

    //--- Start ------------------------------------------------------------- Monitoring
    public function User_Dashboard_Monitor()
    {
        return view('user.monitoring.user-dashboard-monitor');
    }

    public function User_SemuaLabel_Monitor()
    {
        return view('user.monitoring.Label.user-label-semua-monitor');
    }

    public function User_AddNewlabel_Monitor()
    {
        return view('user.monitoring.Label.user-label-add-newlabel-monitor');
    }

    //--- End --------------------------------------------------------------- Monitoring
=======
        return view('user.user-komentar-semua-forum');
    }
>>>>>>> ec04a23068213a39e0ef0b95d16e12bcb2418607

    public function User_Setting()
    {
        return view('user.user-setting');
    }
}
