<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\TypeUser;
use App\SubjectAnalysis;
use App\SectionUser;

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
        // $users = User::join('type_users','type_user_id','=','type_users.id')->get();
        $users = User::join('type_users','type_user_id','=','type_users.id')->select('users.*','type_users.TypeName')->get();
        // $typeusers = TypeUser::find(1)->users()->get();
        // $typeusers = TypeUser::
        // return $users;
        return view('main.user_management',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $typeusers = TypeUser::all();
        $SubjectAnalysis = SubjectAnalysis::all();
        return view('main.user.create',compact('typeusers','SubjectAnalysis'));

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
          'user_name' => 'required',
          'email'=> 'required|email|unique:users',
          'password'=>'required',
        ]);
        $pic = "";
        $user = new User;
        if ($file = $request->file('file')) {
          $name = $request->email;
          // $name = $request->user_email;
          $file->move('img/user',$name);
          $input['path']=$name;//file <--name of column
          $pathpic = 'img/user/'.$input['path'];
        }
        else {
          $pathpic = "img/avatar5.png";
        }
        $user->name = $request->user_name;
        $user->email = $request->email;
        $user->type_user_id = $request->typeuser;
        $user->password = Hash::make($request->password);
        $user->path_pic = $pathpic;

        $user->save();
        $lastID = User::latest()->first();
        $number_topic = count($request->anayls_topic);

        for ($i=0; $i < $number_topic; $i++) {
          $section_user = new SectionUser;
          $section_user->iduser = $lastID->id;
          $section_user->idsubject = $request->anayls_topic[$i];
          $section_user->save();
        }

        // return $lastID->id;
        return redirect('muser');



        // return $pic;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      // $user = User::findOrFail($id);
      // return view('user.edit',compact('user'));
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
        $user = User::findOrFail($id);
        $sectionuser = SectionUser::select('iduser','idsubject')->where('iduser', '=', $id)->get();
        $typeusers = TypeUser::all();
        $SubjectAnalysis = SubjectAnalysis::all();
        // foreach ($sectionuser as $user) {
        //     echo $user->idsubject[0];
        // }
        // return $sectionuser;
        return view('main.user.edit',compact('user','typeusers','SubjectAnalysis','sectionuser'));
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
        $this->validate($request,[
          'user_name' => 'required',
          'email'=> 'required|email|unique:users,email,'.$user->id,
          'password'=>'required',
          // 'user_level'=> 'required'
        ]);
        if ($file = $request->file('file')) {
          $name = $request->email;
          $file->move('img/user',$name);
          $input['path']=$name;//file <--name of column
          $pathpic = 'img/user/'.$input['path'];
        }
        else {
          $pathpic = "img/avatar5.png";
        }

        $user->name = $request->user_name;
        $user->type_user_id = $request->typeuser;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->path_pic = $pathpic;
        $user->save();
        // update Subject Analysis
        $getID = $user->id;
        $number_topic = count($request->anayls_topic);
        // Delete old section
        SectionUser::where('iduser', $getID)->delete();
        // Add new Section
        for ($i=0; $i < $number_topic; $i++) {
          $section_user = new SectionUser;
          $section_user->iduser = $getID;
          $section_user->idsubject = $request->anayls_topic[$i];
          $section_user->save();
        }

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
    public function check_email($email)
    {
      $user = User::where('email', $email)->count();
    }
}
