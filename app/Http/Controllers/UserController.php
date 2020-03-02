<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class UserController extends Controller
{
    public function User_Dashboard()
    {
    	return view('user.user-dashboard');
    }
}
