<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Admin;
use App\User;
use App\Staf;
use Auth;

class LoginController extends Controller
{

  //---- Start -------------------------------------------------------------------------------------- Login View
  public function getLogin()
  {
    return view('home-login');
  }
  //---- End -------------------------------------------------------------------------------------- /Login View


  //---- Start -------------------------------------------------------------------------------------- /Regis View
  public function getRegis()
  {
    return view('home-regis');
  }
  //---- End -------------------------------------------------------------------------------------- /Regis View


  //---- Start -------------------------------------------------------------------------------------- Login BackEnd
  public function postLogin(Request $request)
  {
    if (Auth::guard('admin')->attempt(['username' => $request->email, 'password' => $request->password])) {
     return redirect()->intended('/admin');

   } else if (Auth::guard('staf')->attempt(['username' => $request->email, 'password' => $request->password])) {
    return redirect()->intended('/staf');

  } else if (Auth::guard('user')->attempt(['email' => $request->email, 'password' => $request->password])) {
    return redirect()->route('UserDashboardForum');
    
  } else{
   return redirect('/login');
 }

}
//---- End -------------------------------------------------------------------------------------- /Login BackEnd


//---- Start -------------------------------------------------------------------------------------- LogOut
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
//---- End -------------------------------------------------------------------------------------- /LogOut


//---- Start -------------------------------------------------------------------------------------- Regis BackEnd
public function register(Request $request)
{
  $user = new User();

  $user->nama=$request->nama;
  $user->email=$request->email;
  $user->password=Hash::make($request->password);

  $user->save();
  return redirect()->route('login');

}
//---- End -------------------------------------------------------------------------------------- /Regis BackEnd

}
