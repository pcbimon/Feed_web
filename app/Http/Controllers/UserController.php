<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = User::latest()->get();
        // return $user;
        return view('main.user_management',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        // return redirect('muser');
        // return $request->all();
        $input = $request->all();
        if ($file = $request->file('file')) {
          $name = $file->getClientOriginalName();
          $file->move('img/user',$name);
          $input['path']=$name;//file <--name of column

        }
        $pathpic = 'img/user/'.$input['path'];
        // return $pathpic;
        $user = new User;
        $user->name = $request->user_name;
        $user->email = $request->user_email;
        $user->password = Hash::make($request->password);
        $user->path_pic = $pathpic;
        // return $request->all();
        $user->save();
        return redirect('muser');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $user = User::where('id',$id)->first();
        $user->name = $request->user_name;
        $user->email = $request->user_email;
        $user->save();
        // $post->update($request->all());
        return redirect('muser');
        // return $request->all();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $user = User::where('id',$id)->delete();
        return redirect('muser');
    }
    public function main()
    {
      return view('main.index');
    }
    public function user_management()
    {
      return view('main.user_management');
    }
}
