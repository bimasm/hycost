<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class UserController extends Controller
{
    //--- Start -------------------------------------------------------------------------- Forum
    public function User_Forum_Home()
    {
        return view('user.forum.landing.forum-home');
    }

    public function User_Forum_Kategori()
    {
        return view('user.forum.landing.forum-kategori');
    }

    public function User_Forum_Detail()
    {
        return view('user.forum.landing.forum-detail');
    }

    //---------------------------------------------------------------- Dashboard
    public function User_Dashboard_Forum()
    {
    	return view('user.forum.dashboard.user-dashboard-forum');
    }
    //---------------------------------------------------------------- Post
    public function User_SemuaPost_Forum()
    {
    	return view('user.forum.dashboard.user-post-semua-forum');
    }

    public function User_AddNewPost_Forum()
    {
    	return view('user.forum.dashboard.user-add-newpost-forum');
    }
    //---------------------------------------------------------------- Komentar
    public function User_SemuaKomentar_Forum()
    {
        return view('user.forum.dashboard.user-komentar-semua-forum');
    }
    //--- End ----------------------------------------------------------------------------- Forum

    //--- Start --------------------------------------------------------------------------- Monitoring
    //---------------------------------------------------------------- Dashboard
    public function User_Dashboard_Monitor()
    {
        return view('user.monitoring.user-dashboard-monitor');
    }
    //---------------------------------------------------------------- Label

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

    //---------------------------------------------------------------- Kebun

    public function User_SemuaKebun_Monitor()
    {
        return view('user.monitoring.kebun.user-kebun-semua-monitor');
    }

    //--- End ----------------------------------------------------------------------------- Monitoring

    public function User_Setting()
    {
        return view('user.user-setting');
    }
}
