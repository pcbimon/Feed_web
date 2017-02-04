<?php

namespace App\Http\Controllers;
use App\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $customers = Customer::all();
        return view('main.customer.index',compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('main.customer.create');
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
          'email'=> 'required|email',
          'address'=>'required',
          'telephone'=>'required',
          'fax'=>'required',
        ]);
        $customer = new Customer;
        if ($file = $request->file('file')) {
          $name = $request->email.date("Ymd").$request->telephone.".".$file->getClientOriginalExtension();
          $file->move('img/customer',$name);
          $input['path']=$name;//file <--name of column
          $pathpic = 'img/customer/'.$input['path'];
        }
        else {
          $pathpic = "img/avatar5.png";
        }
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->address = $request->address;
        $customer->telephone = $request->telephone;
        $customer->fax = $request->fax;
        $customer->path_pic = $pathpic;
        $customer->save();
        return redirect('customer');
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
        $customer = Customer::findOrFail($id);
        return view('main.customer.edit',compact('customer'));
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
      $customer = Customer::where('id',$id)->first();
      $this->validate($request,[
        'name' => 'required',
        'email'=> 'required|email',
        'address'=>'required',
        'telephone'=>'required',
        'fax'=>'required',
      ]);
      if ($file = $request->file('file')) {
        $name = $request->email.date("Ymd").$request->telephone.".".$file->getClientOriginalExtension();
        $file->move('img/customer',$name);
        $input['path']=$name;//file <--name of column
        $pathpic = 'img/customer/'.$input['path'];
      }
      else {
        $pathpic = $customer->path_pic;
      }

      $customer->name = $request->name;
      $customer->email = $request->email;
      $customer->address = $request->address;
      $customer->telephone = $request->telephone;
      $customer->fax = $request->fax;
      $customer->path_pic = $pathpic;
      $customer->save();

      return redirect('customer');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customer = Customer::where('id', $id)->delete();
        // Delete Pic Uploaded
        $customerpic = Customer::where('id',$id)->first();
        if ($customerpic->path_pic != 'img/avatar5.png') {
          File::delete($customerpic->path_pic);
        }
        return redirect('customer');
    }
}
