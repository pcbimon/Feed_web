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
      // $request->session()->forget('analys');
      // $request->session()->forget('no');
      // $request->session()->forget('psubid');
      // $request->session()->forget('orderno');
      // $request->session()->forget('count_psubid');
      // $request->session()->forget('sprice');

        $analys = SubjectAnalysis::all();
        $request_analysis = $request->session()->get('analys');
        $request_number = $request->session()->get('no');
        $psubid = $request->session()->get('psubid');
        $sprice = $request->session()->get('sprice');
        return view('main.operation.receive.detailreceive',compact('analys','request_analysis','request_number','psubid','sprice'));
    }
    public function addsubject(Request $request)
    {
      // return '1';
      $this->validate($request,[
        'subject_analys' => 'required',
        'number_add' => 'required',
      ]);

      $orderno = $request->session()->get('orderno');
      if (is_null($orderno)) {
        $orderno = 0;
      }
      // $request->session()->put('Cpsubid',0);
      // if ($orderno == 0)
      // $number_topic = count($request->subject_analys);
      //   for ($i=0; $i < $number_topic; $i++) {
      //     $subject_analys = SubjectAnalysis::where('id', $request->subject_analys[$i])->first();
      //     $request->session()->push('analys', $subject_analys->name);
      //   }
      //
      //   $request->session()->push('no', $request->number_add);
      //   $count_psubid = ReceiveDetail::whereYear('created_at', date('Y'))->count();
      //   $count_psubid += 1;
      //   $request->session()->put('Cpsubid',1);
      //   $psubid = ($count_psubid)."/".date('Y');
      //   $request->session()->push('psubid', $psubid);
      //   $orderno = 1;
      //   $request->session()->put('orderno', $orderno);
      //   $sprice = SubjectAnalysis::where('id', $request->subject_analys)->first();
      //   $request->session()->push('sprice', $sprice->price);
      //   // return $request->session()->all();
      //   return redirect('/received/detail');
      // }
      // else {
      //   $subject_analys = SubjectAnalysis::where('id', $request->subject_analys)->first();
      //   $request->session()->push('analys', $subject_analys->name);
      //   $request->session()->push('no', $request->number_add);
      //   $count_psubid = $request->session()->get('Cpsubid');
      //   $count_psubid +=1;
      //   $psubid = ($count_psubid)."/".date('Y');
      //   $request->session()->push('psubid', $psubid);
      //   $request->session()->put('orderno', $orderno);
      //   $sprice = SubjectAnalysis::where('id', $request->subject_analys)->first();
      //   $request->session()->push('sprice', $sprice->price);
      //   // return $request->session()->all();
      //   return redirect('/received/detail');
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
