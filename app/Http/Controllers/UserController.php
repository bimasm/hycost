<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Kategori;
use App\Post;
use App\Like;
use App\Comment;
use Auth;

class UserController extends Controller
{
    //--- Start -------------------------------------------------------------------------- Forum
    public function User_Forum_Home()
    {
        $data = Kategori::all();
        $rekomendasi = DB::table('Post')->limit(5)->get();

        return view('user.forum.landing.forum-home',compact('data','rekomendasi'));
    }

    public function User_Forum_Kategori($kategori)
    {
        $kat=Kategori::where('kategori', str_replace("-", " ", $kategori))->value('id');
        $data = Post::where('id_kategori', $kat)->paginate(6);
        $datas = DB::table('Post')->where('id_kategori', $kat)->limit(1)->get();

        $rekomendasi = Post::where('id_kategori', $kat)->limit(5)->get();

        // dd($data);

        return view('user.forum.landing.forum-kategori',compact('data','datas','rekomendasi'));
    }

    public function User_Forum_Detail($judul)
    {
        $datas = Post::where('judul', str_replace("-", " ", $judul))->get();
        $post = Post::where('judul', str_replace("-", " ", $judul))->value('id');
        $posts=Post::find($post);
        $like=Like::where('post_id', $post)->orderByDesc('id')->limit(2)->get();
        // dd($like);
        $jml=Like::where('post_id', $post)->count();
        $likes=Like::where('post_id', $post)->orderByDesc('id')->get();
        $tot=$jml-2;

        $rekomendasi = DB::table('Post')->limit(5)->get();

        return view('user.forum.landing.forum-detail',compact('datas','like','tot','posts','likes','rekomendasi'));
    }

    public function User_Forum_Komentar($judul)
    {
        $post=Post::where('judul', str_replace("-", " ", $judul))->get();
        return view('user.forum.dashboard.user-add-komentar-forum', compact("post"));
    }

    public function User_SubForum_Komentar($judul,$id)
    {
        $post=Post::where('judul', str_replace("-", " ", $judul))->value('id');
        $cm=$id;
        return view('user.forum.dashboard.user-add-subkomentar-forum', compact("post","cm"));
    }

    // public function User_Forum_Rekomendasi()
    // {
    //     $data=Post::all()->orderByDesc('id')->limit(4)->get();

    //     return view('user.app.right-post', compact("data"));
    // }

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
        $kategori=Kategori::all();
        return view('user.forum.dashboard.user-add-newpost-forum', compact('kategori'));
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
