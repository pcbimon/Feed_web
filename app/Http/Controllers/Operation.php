<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Operation extends Controller
{
    //
    public function user_management()
    {
      return view('main.user_management');
    }
}
