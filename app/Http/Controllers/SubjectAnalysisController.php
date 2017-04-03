<?php

namespace App\Http\Controllers;
use App\User;
use App\TypeUser;
use App\SubjectAnalysis;
use Illuminate\Http\Request;

class SubjectAnalysisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        if (TypeUser::find(\Auth::user()->type_user_id)->TypeName != "Reception" and TypeUser::find(\Auth::user()->type_user_id)->TypeName != "Administator") {
          return redirect('main');
        }
        $subjectanalys = SubjectAnalysis::all();
        return view('main.subject_analys.index',compact('subjectanalys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        if (TypeUser::find(\Auth::user()->type_user_id)->TypeName != "Reception" and TypeUser::find(\Auth::user()->type_user_id)->TypeName != "Administator") {
          return redirect('main');
        }
        return view('main.subject_analys.create');
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
        if (TypeUser::find(\Auth::user()->type_user_id)->TypeName != "Reception" and TypeUser::find(\Auth::user()->type_user_id)->TypeName != "Administator" and TypeUser::find(\Auth::user()->type_user_id)->TypeName != "Inspector") {
          return redirect('main');
        }
        $this->validate($request,[
          'subject_name' => 'required',
          'subject_price' => 'required'
        ]);
        $subjectanalys = new SubjectAnalysis;
        $subjectanalys->name = $request->subject_name;
        $subjectanalys->price = $request->subject_price;
        $subjectanalys->save();
        return redirect('subjectanalys');
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
        if (TypeUser::find(\Auth::user()->type_user_id)->TypeName != "Reception" and TypeUser::find(\Auth::user()->type_user_id)->TypeName != "Administator" ) {
          return redirect('main');
        }
        $subjectanalys = SubjectAnalysis::findOrFail($id);
        return view('main.subject_analys.edit',compact('subjectanalys'));
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
        if (TypeUser::find(\Auth::user()->type_user_id)->TypeName != "Reception" and TypeUser::find(\Auth::user()->type_user_id)->TypeName != "Administator" ) {
          return redirect('main');
        }
        $subjectanalys = SubjectAnalysis::where('id',$id)->first();
        $subjectanalys->name = $request->subject_name;
        $subjectanalys->price = $request->subject_price;
        $subjectanalys->save();
        return redirect('subjectanalys');
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
        if (TypeUser::find(\Auth::user()->type_user_id)->TypeName != "Reception" and TypeUser::find(\Auth::user()->type_user_id)->TypeName != "Administator") {
          return redirect('main');
        }
        $subjectanalys = SubjectAnalysis::where('id',$id)->delete();
        return redirect('subjectanalys');
    }
    public function ViewOnly()
    {
      if (TypeUser::find(\Auth::user()->type_user_id)->TypeName != "Administator" and TypeUser::find(\Auth::user()->type_user_id)->TypeName != "Inspector") {
        return redirect('main');
      }
      $subjectanalys = SubjectAnalysis::all();
      return view('main.subject_analys.view',compact('subjectanalys'));
    }
}
