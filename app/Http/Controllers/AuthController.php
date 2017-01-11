<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function login()
    {
      return view('login');
    }
    public function handlelogin(Request $request)
    {
      $data = $request->only('email','password');
      if (\Auth::attempt($data)) {

        // return "Login Success";
        return redirect('main');
      }
      return back()->withInput();
    }
}
