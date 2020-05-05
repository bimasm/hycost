<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Kategori;
use App\Post;
use Auth;

class UserController extends Controller
{
    //--- Start -------------------------------------------------------------------------- Forum
    public function User_Forum_Home()
    {
        $data = Kategori::all();

        return view('user.forum.landing.forum-home',compact('data'));
    }

    public function User_Forum_Kategori($kategori)
    {
        $kat=Kategori::where('kategori', str_replace("-", " ", $kategori))->value('id');

        $data = Post::where('id_kategori', $kat)->get();
        // dd($data);

        return view('user.forum.landing.forum-kategori',compact('data'));
    }

    public function Data_Post_Detail($id)
    {
        $data=Post::where('id', $id)->get();
        $response= $data;

        return response()->json(['data'=>$data]);
    }

    public function User_Forum_Detail($judul)
    {
        $datas = Post::where('judul', str_replace("-", " ", $judul))->get();

        return view('user.forum.landing.forum-detail',compact('datas'));
    }

    public function User_Forum_Komentar()
    {
        return view('user.forum.dashboard.user-add-komentar-forum');
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
