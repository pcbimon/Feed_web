<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
// use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    //
    public function checkuser(Request $request)
    {

      $user = User::where('email', $request->username)->get();
      return $user;
      // if (Hash::check($request->pass, $user->password))
      // {
      //     return 'login';
      // }

      // if ($user > 0) {
      //   return "login success";
      // }
      // return $request->username.",".$request->pass;
    }
}
