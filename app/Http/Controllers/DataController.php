<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Kategori;
use App\Post;
use App\Like;
use DB;
use Auth;

class DataController extends Controller
{
	public function Data_Post_Detail($id)
	{
		$data=Post::where('id', $id)->get();
		$response= $data;

		return response()->json(['data'=>$data]);
	}

	public function Data_Post_Kategori($id)
	{
		$data=Post::where('id_kategori', $id)->get();
		$response= $data;

		return response()->json(['data'=>$data]);
	}

	public function Data_Post_User()
	{
		

		$data=Post::where('id_user', Auth::guard('user')->user()->id)->get();
		$response= $data;

		return response()->json(['data'=>$data]);
	}
}
