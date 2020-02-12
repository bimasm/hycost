<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Admin;
use App\User;
use Auth;

class LoginController extends Controller
{
  public function getLogin()
  {
    return view('home-login');
  }

  public function getRegis()
  {
    return view('home-regis');
  }

  public function postLogin(Request $request)
  {

    if (Auth::guard('admin')->attempt(['username' => $request->email, 'password' => $request->password])) {
        // if successful, then redirect to their intended location
      return redirect()->intended('/admin');
    } else if (Auth::guard('staf')->attempt(['username' => $request->email, 'password' => $request->password])) {
      return redirect()->intended('/staf');
    } else if (Auth::guard('user')->attempt(['email' => $request->email, 'password' => $request->password])) {
        // if successful, then redirect to their intended location
      return redirect()->intended('/user');
    }else{
    	return redirect('/login');
    }

  }

  public function logout()
  {
    if (Auth::guard('admin')->check()) {
      Auth::guard('admin')->logout();
    } elseif (Auth::guard('staf')->check()) {
      Auth::guard('staf')->logout();
    } elseif (Auth::guard('user')->check()) {
      Auth::guard('user')->logout();
    }

    return redirect('/login');

  }
  public function register(Request $request)
    {
        $user = new User();
        
        $user->nama=$request->nama;
        $user->email=$request->email;
        $user->password=Hash::make($request->password);
        
        $user->save();
        return redirect()->route('login');

    }
}
