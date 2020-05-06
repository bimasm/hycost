<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Kategori;
use App\Post;
use App\Like;
use DB;
use App\Comment;
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

		foreach ($data as $key=>$dat){
			$data[$key]['id_kategori'] = \App\Kategori::where(['id' => $dat->id_kategori])->value('kategori');
		}

		return response()->json(['data'=>$data]);
	}

	public function Data_Post_Komen($id)
	{
		$data=Post::where('id', $id)->get();

		foreach ($data as $dt) {
			$asu=$dt->comments;
		}
		$response= $asu;

		return response()->json(['data'=>$response]);
	}
	public function Data_Post_Reply($id)
	{
		$data=Comment::where('id', $id)->get();

		foreach ($data as $dt) {
			$asu=$dt->replies;
		}
		$response= $asu;

		return response()->json(['data'=>$response]);
	}
}
