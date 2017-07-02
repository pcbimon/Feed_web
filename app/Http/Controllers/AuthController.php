<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\TypeUser;
class AuthController extends Controller
{
    //
    public function login()
    {
      return view('login');
    }
    public function handlelogin(Request $request)
    {
      $this->validate($request,[
        'email'=> 'required|email',
        'password'=>'required'
      ]);
      $data = $request->only('email','password');
      if (\Auth::attempt($data)) {

        // return "Login Success";
        return redirect('main');
        
        //->with('typeuser'=>TypeUser::find(\Auth::user()->type_user_id)->TypeName);
        // return dd(TypeUser::find(\Auth::user()->type_user_id)->TypeName);
      }
      return back()->withInput();
    }
    public function logout()
    {
      \Auth::logout();
      return redirect()->route('login');
    }
}
