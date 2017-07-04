<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\SubjectAnalysis;
use App\ReceiveDetail;
use App\ProductDetail;
use App\LabOperation;

class ReceiveDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $LabOperation = LabOperation::all();
        $analys = SubjectAnalysis::all();
        $request_analysis = $request->session()->get('analysname');
        $request_num = ProductDetail::where('id_product','=',$request->session()->get('productid'))->count();
        $sprice = $request->session()->get('sprice');
        return view('main.operation.receive.detailreceive',compact('analys','request_analysis','request_num','sprice','LabOperation'));
    }
    public function addsubject(Request $request)
    {
      $this->validate($request,[
        'subject_analys' => 'required',
      ]);

      $request_num = ProductDetail::where('id_product','=',$request->session()->get('productid'))->count();
      $request->session()->forget('analysid');
      $request->session()->forget('analysname');
      $request->session()->forget('number_add');
      $request->session()->forget('count_psubid');
      $request->session()->forget('sprice');
        $number_topic = count($request->subject_analys);
        $request->session()->put('number_add',$request_num);
          for ($i=0; $i < $number_topic; $i++) {
            $subject_analys = SubjectAnalysis::where('id', $request->subject_analys[$i])->first();
            $request->session()->push('analysid', $subject_analys->id);
            $request->session()->push('analysname', $subject_analys->name);
            $sprice = SubjectAnalysis::where('id', $request->subject_analys[$i])->first();
            $request->session()->push('sprice', $sprice->price);
          }
          return redirect('/received/detail');
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
        return '1';
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
        return '1';
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
        return '1';
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
        return '1';
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
        return '1';
    }
}
