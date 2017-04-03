<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Product;
use App\SubjectAnalysis;

class ReceiveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      if (TypeUser::find(\Auth::user()->type_user_id)->TypeName != "Reception" and TypeUser::find(\Auth::user()->type_user_id)->TypeName != "Administator") {
        return redirect('main');
      }
        //Delete All Session
        // $request->session()->flush();
        $customer = Customer::all();
        $product = Product::all();
        $customerid = $request->session()->get('customerid');
        $productid = $request->session()->get('productid');
        if ($customerid != '') {
          $customerdetial = Customer::find($customerid);
        }
        if ($productid != '') {
          $productdetail = Product::find($productid);
        }
        // return $customerdetial;
        return view('main.operation.receive.index',compact('customerid','productid','customer','product','customerdetial','productdetail'));
    }

    public function receivedetail(Request $request)
    {
      if ($request->session()->get('customerid') == '' || $request->session()->get('productid') == '' ) {
        return redirect('/receive');
      }
      else {
        return redirect('/received/detail');
      }
      // return $request->all();

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
    public function showcustomer(Request $request)
    {
      // return $request->all();
      $customer = Customer::find($request->customer);
      $request->session()->put('customerid', $customer->id);
      // return $request->session()->get('customerid');
      return redirect('/receive');
    }
    public function showproduct(Request $request)
    {

      // return $request->all();
      $product = Product::find($request->product);
      $request->session()->put('productid', $product->id);
      // return $request->session()->get('customerid');
      return redirect('/receive');
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
    public function DeleteAllSesstion(Request $request)
    {
      $request->session()->flush();
      return redirect('/receive');
    }
}
