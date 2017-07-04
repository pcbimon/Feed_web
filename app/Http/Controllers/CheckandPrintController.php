<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\SubjectAnalysis;
use App\ReceiveDetail;
class CheckandPrintController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      // return $request->all();
      // $this->validate($request,[
      //   'optionpurchase_amout' => 'required',
      // ]);
      $request->session()->forget('PickupBy');
      $request->session()->forget('PickupDes');
      $request->session()->forget('THForm');
      $request->session()->forget('ENForm');
      $request->session()->forget('Optional');
      $request->session()->forget('OptionPurchase');
      $request->session()->forget('OptionPurchaseAmout');
      if ($request->CheckSelf = "on") {
        $request->session()->push('PickupBy','Self');
        $request->session()->push('PickupDes','Self');
      }
      if ($request->email != "") {
        $request->session()->push('PickupBy','Email');
        $request->session()->push('PickupDes',$request->email);
      }
      if ($request->post_address != "") {
        $request->session()->push('PickupBy','PostAddress');
        $request->session()->push('PickupDes',$request->post_address);
      }
      $request->session()->put('THForm',$request->THForm);
      $request->session()->put('ENForm',$request->ENForm);
      for ($i=0; $i < count($request->optional); $i++) {
        $request->session()->push('Optional',$request->optional[$i]);
      }
      for ($i=0; $i < count($request->Lab_Opertaion); $i++) {
        $request->session()->push('Lab_Opertaion',$request->Lab_Opertaion[$i]);
      }
      $request->session()->put('OptionPurchase',$request->optionpurchase);
      $request->session()->put('OptionPurchaseAmout',$request->optionpurchase_amout);

      // return $request->session()->all();
      // return $request->all();
      $analys = SubjectAnalysis::all();
      $orderno = $request->session()->get('orderno');
      $request_analysis = $request->session()->get('analysname');
      $request_num = $request->session()->get('number_add');
      $sprice = $request->session()->get('sprice');
      $Lab_Opertaion = $request->session()->get('Lab_Opertaion');

      $PickupBy = $request->session()->get('PickupBy');
      $PickupDes = $request->session()->get('PickupDes');
      if ($request->LangTH == 'true') {
        $THForm = 'true';

      }
      else {
        $THForm = 'false';
      }
      if ($request->LangEN == 'true') {
        $ENForm = 'true';

      }
      else {
        $ENForm = 'false';
      }
      $OptionOptional = $request->session()->get('Optional');
      $OptionPurchase = $request->session()->get('OptionPurchase');
      $OptionPurchaseAmout = $request->session()->get('OptionPurchaseAmout');
      if (is_null($OptionOptional)) {
        $OptionOptional = 'ไม่มี';
      }
      return view('main.operation.receive.checkreceived',compact('orderno','analys','request_analysis','request_num','PSubID_First','PSubID_Last','sprice','PickupBy','PickupDes','THForm','ENForm','OptionOptional','OptionPurchase','OptionPurchaseAmout','Lab_Opertaion'));
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
    }
}
