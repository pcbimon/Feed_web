<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $product = Product::all();
        return view('main.product.index',compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('main.product.create');
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
          'name' => 'required',
          'countable'=> 'required',
          'place_to_buy'=>'required',
          'syntax'=>'required',
          'namebill'=>'required',
        ]);
        $customer = new Customer;
        if ($file = $request->file('file')) {
          $name = $request->name.date("YmdHis").".".$file->getClientOriginalExtension();
          $file->move('img/product',$name);
          $input['path']=$name;//file <--name of column
          $pathpic = 'img/product/'.$input['path'];
        }
        else {
          $pathpic = "img/avatar5.png";
        }
        $customer->name = $request->name;
        $customer->countable = $request->countable;
        $customer->place_to_buy = $request->place_to_buy;
        $customer->syntax = $request->syntax;
        $customer->namebill = $request->namebill;
        $customer->path_pic = $pathpic;
        $customer->save();
        return redirect('product');
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
        $product = Product::findOrFail($id);
        return view('main.product.edit',compact('product'));
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
