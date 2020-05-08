<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Post;
use App\Like;

use Auth;
use DB;

class UserActionsController extends Controller
{
    public function addpost(Request $request){
    	$x=new Post();

    	$x->id_user=Auth::guard('user')->user()->id;
    	$x->id_kategori=$request->kategori;
    	$x->judul=$request->judul;
    	$x->isi=$request->konten;
    	$file=$request->file('gambar');
        // if (!$file) {
        //     return redirect()->route('in.jurusan')->with('alert','foto harus diisi!');
        // }
        $file_name=$file->getClientOriginalName();
        $path=public_path('/img');
        $file->move($path,$file_name);
        $x->gambar='public/img/'.$file_name;
    	// $x->gambar=$request->gambar;
    	// dd($x);
        $x->like=0;
    	$x->save();
    	return redirect()->route('UserLandingForumDetail',str_replace(" ", "-", $x->judul));

    }
    public function dislike(Request $Request)
    {
        $pid=$Request->input('idpost');
        $like=Like::where('post_id',$pid)->where('user_id',Auth::guard('user')->user()->id)->value('id');
        $dis=Like::find($like);
        $dis->delete();
        $post=Post::find($pid);
        $jumlah=Post::where('id',$pid)->value('like');
        $post->like=$jumlah-1;
        $post->save();
        return back();
    }
    public function like(Request $Request)
    {
        $like=new Like();
        $like->user_id=Auth::guard('user')->user()->id;
        $like->post_id=$Request->input('idpost');
        $like->save();
        $post=Post::find($like->post_id);
        $jumlah=Post::where('id',$like->post_id)->value('like');
        $post->like=$jumlah+1;
        $post->save();
        return back();
    }
    public function search(Request $request){
        $data=Post::where('judul', 'like','%'.$request->search.'%')->get();
        // dd($data);
        
        $rekomendasi=DB::table('post')
                ->orderBy('like', 'desc')
                ->limit(5)
                ->get();
                
        // dd($rekomendasi);
        return view('user.forum.landing.search',compact('data','rekomendasi'));

    }
    
}
