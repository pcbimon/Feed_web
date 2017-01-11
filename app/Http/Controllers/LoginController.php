<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class LoginController extends Controller
{
    //
    public function checkuser(Request $email,$password)
    {
      return $email.",".$password;
    }
}
