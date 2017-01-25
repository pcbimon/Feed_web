<?php

namespace App\Http\Controllers;
use App\User;
use App\TypeUser;
use Illuminate\Http\Request;

class TypeUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $typeusers = TypeUser::all();
        // $typeusers = TypeUser::find(1)->users()->get();
        // $typeusers = TypeUser::
        // return $users;
        return view('main.typeuser.index',compact('typeusers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('main.typeuser.create');
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
        $this->validate($request,[
          'typeuser_name' => 'required'
          // 'user_level'=> 'required'
        ]);
        $typeusers = new TypeUser;
        $typeusers->TypeName = $request->typeuser_name;
        $typeusers->save();
        return redirect('tuser');

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
        $typeusers = TypeUser::findOrFail($id);
        // return $typeusers;
        return view('main.typeuser.edit',compact('typeusers'));
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
        $typeusers = TypeUser::where('id',$id)->first();
        $typeusers->typename = $request->typeuser_name;
        $typeusers->save();
        return redirect('tuser');
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
        $typeusers = TypeUser::where('id',$id)->delete();
        return redirect('tuser');
    }
}
