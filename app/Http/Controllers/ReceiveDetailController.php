<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\SubjectAnalysis;
use App\ReceiveDetail;

class ReceiveDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      // return '1';


        $analys = SubjectAnalysis::all();
        $orderno = $request->session()->get('orderno');
        $request_analysis = $request->session()->get('analys');
        $request_num = $request->session()->get('number_add');
        $sprice = $request->session()->get('sprice');
        return view('main.operation.receive.detailreceive',compact('orderno','analys','request_analysis','request_num','PSubID_First','PSubID_Last','sprice'));
    }
    public function addsubject(Request $request)
    {
      // return '1';
      $this->validate($request,[
        'subject_analys' => 'required',

      ]);

      // $orderno = $request->session()->get('orderno');
      // if (is_null($orderno)) {
      //   $orderno = 0;
      // }
      // if ($orderno == 0){
      $request->session()->forget('analys');
      $request->session()->forget('number_add');
      $request->session()->forget('PSubID_First');
      $request->session()->forget('PSubID_Last');
      $request->session()->forget('orderno');
      $request->session()->forget('count_psubid');
      $request->session()->forget('sprice');
        $number_topic = count($request->subject_analys);
        $PSubID_First = ReceiveDetail::whereYear('created_at', date('Y'))->count() + 1;
        $request->session()->put('number_add', $request->number_add);
          for ($i=0; $i < $number_topic; $i++) {
            // $request->session()->put('orderno', $orderno+1);
            $subject_analys = SubjectAnalysis::where('id', $request->subject_analys[$i])->first();
            $request->session()->push('analys', $subject_analys->name);
            $sprice = SubjectAnalysis::where('id', $request->subject_analys[$i])->first();
            $request->session()->push('sprice', $sprice->price);
          }
          // return $request->session()->all();
          return redirect('/received/detail');
          // return $request->all();
          // return $request->session()->get('number_add');
      // }
      // else {
      //   $request->session()->put('orderno', $orderno+1);
      //   $ID_LAST = $request->session()->get('PSubID_Last')[0];
      //   $number_topic = count($request->subject_analys);
      //   $PSubID_First = $ID_LAST + 1;
      //   $PSubID_Last = $PSubID_First + $request->number_add - 1;
      //   $request->session()->push('PSubID_First', $PSubID_First);
      //   $request->session()->push('PSubID_Last', $PSubID_Last);
      //     for ($i=0; $i < $number_topic; $i++) {
      //       $subject_analys = SubjectAnalysis::where('id', $request->subject_analys[$i])->first();
      //       $request->session()->push('analys', $subject_analys->name."/".$orderno);
      //       $request->session()->push('no', $request->number_add);
      //       // $request->session()->put('orderno', $orderno);
      //       $sprice = SubjectAnalysis::where('id', $request->subject_analys[$i])->first();
      //       $request->session()->push('sprice', $sprice->price);
      //     }
      //     // return $request->session()->all();
      //     // return redirect('/received/detail');
      //     return $request->session()->get('no')[0];
      // }

      // return redirect('/received/detail');
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
