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
        $product = new Product;
        if ($file = $request->file('file')) {
          $name = $request->name.date("YmdHis").".".$file->getClientOriginalExtension();
          $file->move('img/product',$name);
          $input['path']=$name;//file <--name of column
          $pathpic = 'img/product/'.$input['path'];
        }
        else {
          $pathpic = "img/testproduct.png";
        }
        $product->name = $request->name;
        $product->countable = $request->countable;
        $product->place_to_buy = $request->place_to_buy;
        $product->syntax = $request->syntax;
        $product->namebill = $request->namebill;
        $product->path_pic = $pathpic;
        $product->save();
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
      $product = Product::where('id',$id)->first();
      $this->validate($request,[
        'name' => 'required',
        'countable'=> 'required',
        'place_to_buy'=>'required',
        'syntax'=>'required',
        'namebill'=>'required',
      ]);
      if ($file = $request->file('file')) {
        $name = $request->name.date("YmdHis").".".$file->getClientOriginalExtension();
        $file->move('img/product',$name);
        $input['path']=$name;//file <--name of column
        $pathpic = 'img/product/'.$input['path'];
      }
      else {
        $pathpic = $product->path_pic;
      }

      $product->name = $request->name;
      $product->countable = $request->countable;
      $product->place_to_buy = $request->place_to_buy;
      $product->syntax = $request->syntax;
      $product->namebill = $request->namebill;
      $product->path_pic = $pathpic;
      $product->save();
      return redirect('product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $product = Product::where('id', $id)->delete();
      // Delete Pic Uploaded
      $productpic = Product::where('id',$id)->first();
      if ($productpic->path_pic != 'img/avatar5.png') {
        File::delete($productpic->path_pic);
      }
      return redirect('product');
    }
}
