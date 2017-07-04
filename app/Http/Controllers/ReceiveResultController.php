<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Receive;
use App\ReceiveDetail;
use App\SubjectAnalysis;
use App\Customer;
use PDF;

class ReceiveResultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $LastReceiveID = $request->session()->get('LastReceiveID');
        return view('main.operation.receive.result',compact('LastReceiveID'));
    }

    public function PrintReport(Request $request)
    {
      // $Receive = Receive::all();
      // $ReceiveDetail = ReceiveDetail::all();
      $Receive = Receive::where('id', '=',$request->session()->get('LastReceiveID'))->get();
      $GetProduct = Receive::join('products','receives.productid','=','products.id')
                        ->join('product_details','receives.productid','=','product_details.id_product')
                        // ->join('receive_details','receives.id','=','receive_details.id')
                        ->where('receives.id', '=', $request->session()->get('LastReceiveID'))
                        ->select('products.name','product_details.syntax')
                        ->distinct()
                        ->get();
      $ReceiveDetail = ReceiveDetail::where('id', '=', $request->session()->get('LastReceiveID'))
                        ->select('receive_details.psubid')
                        ->orderBy('receive_details.no')
                        ->distinct()
                        ->get();
      $SubjectAnalysis = SubjectAnalysis::join('receive_details','receive_details.subjectid','=','subject_analyses.id')
                        ->select('subject_analyses.*')
                        ->where('receive_details.id', '=', $request->session()->get('LastReceiveID'))
                        ->distinct()
                        ->get();
      $NumberReceive = Receive::where('id', $request->session()->get('LastReceiveID'))->get();
      $Customer = Customer::join('receives','receives.customerid','=','customers.id')
                  ->where('receives.id', '=', $request->session()->get('LastReceiveID'))
                  ->get();
      $psubid = array();
      foreach ($ReceiveDetail as $key) {
        array_push($psubid,$key->psubid);
      }
      function DateThai($strDate)
    	{
    		$strYear = date("Y",strtotime($strDate))+543;
    		$strMonth= date("n",strtotime($strDate));
    		$strDay= date("j",strtotime($strDate));
    		$strMonthCut = Array("","มกราคม","กุมภาพันธ์ ","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม");
    		$strMonthThai=$strMonthCut[$strMonth];
    		return "$strDay $strMonthThai $strYear";
    	}
      $strDate = DateThai(date('d-m-Y'));
      foreach ($Receive as $key) {
        $ReceiveBy = explode(',',$key->ReceiveBy);
        $ReceiveLang = explode(',',$key->ReceiveLang);
        $ReceivePay = explode(',',$key->ReceivePay);
        $ReceiveAmount = $key->ReceiveAmount;
        $ReceiveOptional = explode(',',$key->ReceiveOptional);
      }
      // return $ReceivePay;
      $pdf = PDF::loadView('main.operation.receive.pdf', ['psubid'=> $psubid,
                          'SubjectAnalysis'=> $SubjectAnalysis,
                          'NumberReceive'=>$NumberReceive,
                          'Customer'=>$Customer,
                          'Receive'=>$Receive,
                          'GetProduct'=>$GetProduct,
                          'strDate'=>$strDate,
                          'Customer'=>$Customer,
                          'ReceiveBy'=>$ReceiveBy,
                          'ReceiveLang'=>$ReceiveLang,
                          'ReceivePay'=>$ReceivePay,
                          'ReceiveAmount'=>$ReceiveAmount,
                          'ReceiveOptional'=>$ReceiveOptional
                        ]);
      return $pdf->stream();
    }

    public function PrintSticker(Request $request)
    {
      // รหัสการวิเคราะห์
      $Receive = Receive::where('id', '=',$request->session()->get('LastReceiveID'))->get();
      // ชื่อตัวอย่าง
      $GetProduct = Receive::join('products','receives.productid','=','products.id')
                        ->join('product_details','receives.productid','=','product_details.id_product')
                        ->where('receives.id', '=', $request->session()->get('LastReceiveID'))
                        ->select('products.name')
                        ->distinct()
                        ->get();
      // รหัสตัวอย่าง
      $ReceiveDetail = ReceiveDetail::join('receives','receives.id','=','receive_details.id')
                        ->join('subject_analyses','receive_details.subjectid','=','subject_analyses.id')
                        ->join('products','receives.productid','=','products.id')
                        ->select('receive_details.psubid','products.name','receives.created_at','subject_analyses.name as subject','receives.ReceiveOptional')
                        ->where('receive_details.id', '=', $request->session()->get('LastReceiveID'))
                        ->orderBy('receive_details.no')
                        // ->distinct()
                        ->get();
      // รายการวิเคราะห์
      $SubjectAnalysis = SubjectAnalysis::join('receive_details','receive_details.subjectid','=','subject_analyses.id')
                        ->select('subject_analyses.*')
                        ->where('receive_details.id', '=', $request->session()->get('LastReceiveID'))
                        ->distinct()
                        ->get();
      // จำนวนตัวอย่าง
      $NumberReceive = Receive::where('id', $request->session()->get('LastReceiveID'))->get();

      $psubid = array();
      foreach ($ReceiveDetail as $key) {
        array_push($psubid,$key->psubid);
      }
      // วันที
      $strDate = date('d-m-Y');
      // การเก็บรักษา
      foreach ($Receive as $key) {
        $ReceiveOptional = explode(',',$key->ReceiveOptional);
      }
      // return $ReceiveDetail;
      $pdf = PDF::loadView('main.operation.receive.sticker', ['psubid'=> $psubid,
                          'ReceiveDetail'=>$ReceiveDetail,
                          'SubjectAnalysis'=> $SubjectAnalysis,
                          'NumberReceive'=>$NumberReceive,
                          'Receive'=>$Receive,
                          'GetProduct'=>$GetProduct,
                          'strDate'=>$strDate,
                          'ReceiveOptional'=>$ReceiveOptional
                        ]);
      return $pdf->stream();
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
        $Receive = new Receive;

        $analys = SubjectAnalysis::all();

        $userid = \Auth::id();
        $customerid = $request->session()->get('customerid');
        $productid = $request->session()->get('productid');

        $request_analysis_id = $request->session()->get('analysid');
        $request_num = $request->session()->get('number_add');
        $sprice = $request->session()->get('sprice');
        $PickupBy = '';
        $PickupDes = '';
        $PickupLang = '';
        $PickupLang = '';
        $OptionOptional = '';

        for ($i=0; $i < count($request->session()->get('PickupBy')); $i++) {
          $PickupBy .= $request->session()->get('PickupBy')[$i].',';
        }
        for ($i=0; $i < count($request->session()->get('PickupDes')); $i++) {
          $PickupDes .= $request->session()->get('PickupDes')[$i].',';
        }
        $Lab_Opertaion = $request->session()->get('Lab_Opertaion');
        if ($request->session()->get('THForm') != '') {
          $PickupLang .= 'TH,';
        }
        if ($request->session()->get('ENForm') != '') {
          $PickupLang .= 'EN';
        }
        for ($i=0; $i < count($request->session()->get('Optional')); $i++) {
          $OptionOptional .= $request->session()->get('Optional')[$i].',';
        }
        // $PickupBy = $request->session()->get('PickupBy');
        // $PickupDes = $request->session()->get('PickupDes');
        // $THForm = $request->session()->get('THForm');
        // $ENForm = $request->session()->get('ENForm');
        // $OptionOptional = $request->session()->get('Optional');
        $OptionPurchase = $request->session()->get('OptionPurchase');
        $OptionPurchaseAmout = $request->session()->get('OptionPurchaseAmout');
        $YearNow = date('Y');
        $CountReceive = Receive::whereYear('created_at','=',$YearNow)->count()+1;
        $analysid = $CountReceive . '/'. $YearNow;
        $Receive->userid = $userid;
        $Receive->customerid = $customerid;
        $Receive->productid = $productid;
        $Receive->analysid = $analysid;
        $Receive->no = $request_num;
        $Receive->ReceiveBy = $PickupBy;
        $Receive->ReceiveDesc = $PickupDes;
        $Receive->ReceiveLang = $PickupLang;
        $Receive->ReceivePay = $OptionPurchase;
        $Receive->ReceiveAmount = $OptionPurchaseAmout;
        $Receive->ReceiveOptional = $OptionOptional;
        $Receive->save();

        $LastReceiveID = $Receive->id;
        $CountReceiveProduct = ReceiveDetail::whereYear('created_at','=',date('Y'))->count()+1;
        // return $request_analysis_id[0].','.$request_analysis_id[1].','.$request_analysis_id[2];
        // return '1';
        $result = 0;
        $countproduct = $request_num;
        $countsubject = count($request_analysis_id);
        for ($i=0;$i < $countproduct; $i++) {
          for ($j=0; $j < $countsubject; $j++) {
            $ReceiveDetail = new ReceiveDetail;
            $ReceiveDetail->id = $LastReceiveID;
            $ReceiveDetail->psubid = $CountReceiveProduct.'/'.$YearNow;
            $ReceiveDetail->subjectid = $request_analysis_id[$j];
            $ReceiveDetail->labid = $Lab_Opertaion[$j];
            $ReceiveDetail->result = 0;
            $ReceiveDetail->save();
          }
          $CountReceiveProduct += 1;
        }
        $request->session()->put('LastReceiveID',$LastReceiveID);
        $request->session()->forget('customerid');
        $request->session()->forget('productid');

        $request->session()->forget('analysid');
        $request->session()->forget('analysname');
        $request->session()->forget('number_add');
        $request->session()->forget('count_psubid');
        $request->session()->forget('sprice');
        $request->session()->forget('Lab_Opertaion');

        $request->session()->forget('PickupBy');
        $request->session()->forget('PickupDes');
        $request->session()->forget('THForm');
        $request->session()->forget('ENForm');
        $request->session()->forget('Optional');
        $request->session()->forget('OptionPurchase');
        $request->session()->forget('OptionPurchaseAmout');
        return redirect('received/print');
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
