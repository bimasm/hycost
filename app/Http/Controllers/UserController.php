<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class UserController extends Controller
{
    //--- Start ------------------------------------------------------------- Forum
    public function User_Dashboard_Forum()
    {
    	return view('user.forum.user-dashboard-forum');
    }

    public function User_SemuaPost_Forum()
    {
    	return view('user.forum.user-post-semua-forum');
    }

    public function User_AddNewPost_Forum()
    {
    	return view('user.forum.user-add-newpost-forum');
    }

    public function User_SemuaKomentar_Forum()
    {
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

    public function User_CariLabel_Monitor()
    {
        return view('user.monitoring.Label.user-label-cari-newlabel-monitor');
    }

    public function User_DetailLabel_Monitor()
    {
        return view('user.monitoring.Label.user-label-detail-monitor');
    }

    //--- End --------------------------------------------------------------- Monitoring

    public function User_Setting()
    {
        return view('user.user-setting');
    }
}
