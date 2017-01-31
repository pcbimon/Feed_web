@extends('layouts.index')
@section('title')
  การจัดการผู้ใช้
@endsection
@section('content')
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script>
  $( document ).ready(function() {
    // add class active
    $("#analys").addClass('active');
    $("#customer").addClass('active');
  });
  </script>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        การจัดการข้อมูลผู้ใช้
        <small>Users Management</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">การจัดการผู้ใช้ระบบ</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-md-12">
          <!-- small box -->
          <div class="box box-info">
            <div class="box-header">
              <i class="fa fa-user-circle-o"></i>

              <h3 class="box-title">แก้ไขข้อมูลผู้ใช้</h3>

            </div>

            <div class="box-body">
                {!! Form::model($customer,(['method'=>'PUT','action'=>['CustomerController@update',$customer->id],'files'=>true,'class'=>'form-horizontal'])) !!}
                  <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                  <input type="hidden" name="_method" value="PUT">
                  @if (count($errors)>0)
                    <div class="alert alert-warning">
                      @foreach ($errors->all() as $error)
                        <strong>Warning! </strong>{{$error}}<br />
                      @endforeach
                    </div>
                  @endif
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="email">ชื่อ:</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="name" required="required" value="{{$customer->name}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="pwd">Email:</label>
                    <div class="col-sm-10">
                    <input type="email" class="form-control" name="email" required="required|email" value="{{$customer->email}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="pwd">ที่อยู่</label>
                    <div class="col-sm-10">
                    <textarea class="form-control" rows="5" name="address">{{$customer->address}}</textarea>
                  </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="pwd">รูปภาพ :</label>
                    <div class="col-sm-10">
                      <div class="input-group">
                        <img src="{{ URL::asset($customer->path_pic) }}" alt="" width="200px" height="200px"/><br><br>
                        <input name="file" type="file" class="filestyle" data-buttonText=" Browse" data-buttonName="btn-primary" accept="image/*">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="email">เบอร์โทรศัพท์:</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="telephone" required="required" value="{{$customer->telephone}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="email">เบอร์แฟกซ์:</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="fax" required="required" value="{{$customer->fax}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-3 col-md-offset-2">
                      <button type="submit" class="btn btn-primary">
                        <span class='glyphicon glyphicon glyphicon-ok'></span> Update Customer
                      </button>
                      <button type="button" class="btn btn-danger" onclick="window.location='{{ url("customer") }}'">
                        <span class='glyphicon glyphicon-remove'></span> Cancle
                      </button>
                    </div>
                  </div>
                {!! Form::close() !!}
            </div>

          </div>
        </div>



      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->



@endsection
@section('footerscript')

@endsection
