<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Post;
use Auth;

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
    	$x->save();
    	return redirect()->route('UserPostAddNewPost');

    }
}
