@extends('layouts.index')
@section('title')
  การจัดการผู้ใช้
@endsection
@section('content')
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script>
  $( document ).ready(function() {
    var getdata = document.getElementById('typeuser').value;
    // alert(getdata);
    if(getdata == 4)
    $("#panel").slideDown("slow");
    else {
    $("#panel").hide();
    }
  });
  function check() {
    var data = document.getElementById('typeuser').value;
    // alert(data);
      if (data==4) {
        $("#panel").slideDown("slow");
      }
      else{
        $("#panel").slideUp("slow");
      }
    };
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
                {!! Form::model($user,(['method'=>'PUT','action'=>['UserController@update',$user->id],'files'=>true,'class'=>'form-horizontal'])) !!}




                {{-- <form class="form-horizontal" action="/muser/{{$user->id}}" method="post" File="true" > --}}
                {{-- {!! Form::open($user,['method'=>'PUT','action'=>['UserController@update',$user->id],'files'=>true,'class'=>'form-horizontal']) !!} --}}
                {{-- <form class="form-horizontal" role="form" action="/muser" method="post"> --}}
                  {{-- {{ csrf_field() }} --}}
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
                            <input type="text" class="form-control" name="user_name" required="required" value="{{$user->name}}">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-sm-2" for="pwd">Email:</label>
                            <div class="col-sm-10">
                            <input type="email" class="form-control" name="email" required="required|email|unique:users,email" value="{{$user->email}}">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-sm-2" for="pwd">รหัสผ่านใหม่:</label>
                            <div class="col-sm-10">
                            <input type="password" class="form-control" name="password"  required="required">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-sm-2" for="pwd">รูปภาพผู้ใช้ :</label>
                            <div class="col-sm-10">
                              <div class="input-group">
                                <img src="{{ URL::asset($user->path_pic) }}" alt="" width="200px" height="200px">
                                <br>
                                <br>
                                <input name="file" type="file" class="filestyle" data-buttonText=" Browse" data-buttonName="btn-primary" accept="image/*">

                              </div>
                              {{-- <input type="file" name="pic" accept="image/*" class="btn btn-primary"> --}}
                              {{-- {!! Form::file('file', ['required' => 'required']) !!} --}}
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-sm-2" for="pwd">ระดับผู้ใช้:</label>
                            <div class="col-sm-10">
                              {{-- {{$user->type_user_id}} --}}
                              <select class="form-control" id="typeuser" name="typeuser" onchange="check()">
                              @foreach($typeusers as $item)
                                @if ($user->type_user_id == $item->id)
                                  <option value="{{$item->id}}" selected>{{$item->TypeName}}</option>
                                @else
                                  <option value="{{$item->id}}">{{$item->TypeName}}</option>
                                @endif

                      				@endforeach
                            </select>
                            </div>
                          </div>
                          <div id="panel">
                          <div class="form-group">
                            <label class="control-label col-sm-2" for="email">ส่วนการดำเนินงาน:</label>
                              <div class="col-sm-3">
                                <div class="panel panel-info">
                                  <div class="panel-heading">หน่วยวิเคราะห์</div>
                                  <div class="panel-body">
                                    <select class="selectpicker" name="anayls_topic[]" multiple data-live-search="true" data-width="75%" data-size="5" data-selected-text-format="count">
                                      @foreach ($SubjectAnalysis as $item)

                                            <option value="{{$item->id}}" class="select"@for ($i = 0; $i < count($sectionuser); $i++) @if($sectionuser[$i]->idsubject == $item->id) {{ "selected" }} @break @endif @endfor>{{$item->name}}</option>


                                      @endforeach


                                    </select>
                                  </div>
                                  </div>
                                </div>

                          </div>
                          </div>
                          <div class="form-group">
                            {{-- <div class="col-md-3">

                            </div> --}}
                            <div class="col-md-10 col-md-offset-2">
                              <button type="submit" class="btn btn-primary">
                                <span class='glyphicon glyphicon glyphicon-ok'></span> Update User
                              </button>
                              <button type="button" class="btn btn-danger" onclick="window.location='{{ url("muser") }}'">
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
