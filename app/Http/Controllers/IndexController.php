<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Response;
use App\User;

class IndexController extends Controller
{
        public function addItem(Request $request) {
        $rules = array (
            'name' => 'required'
        );
        $validator = Validator::make ( Input::all (), $rules );
        if ($validator->fails ())
          return Response::json ( array (
              'errors' => $validator->getMessageBag ()->toArray ()
          ) );
        else {
          $data = new User ();
          $data->name = $request->name;
          $data->save ();
          return response ()->json ( $data );
          return "123";
        }
      }
      public function readItems(Request $req) {
        $data = User::all ();
        return view ( 'welcome' )->withData ( $data );
      }
      public function editItem(Request $req) {
        $data = User::find ( $req->id );
        $data->name = $req->name;
        $data->save ();
        return response ()->json ( $data );
      }
      public function deleteItem(Request $req) {
        User::find ( $req->id )->delete ();
        return response ()->json ();
      }
}
