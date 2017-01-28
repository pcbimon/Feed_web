@extends('layouts.main-footer')

@extends('layouts.index')
@section('title')
  การจัดการผู้ใช้
@endsection
@section('content')
@extends('layouts.menu')
  @extends('layouts.menutop')
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

              <h3 class="box-title">เพิ่มผู้ใช้ใหม่</h3>

            </div>

            <div class="box-body">


                {!! Form::open(['method'=>'POST','action'=>'UserController@store','files'=>true,'class'=>'form-horizontal']) !!}
                {{-- <form class="form-horizontal" role="form" action="/muser" method="post"> --}}
                  {{-- {{ csrf_field() }} --}}
                  <input type="hidden" name="_token" value="{!! csrf_token() !!}">



                  @if (count($errors)>0)
                    <div class="alert alert-warning">
                      @foreach ($errors->all() as $error)
                        <strong>Warning! </strong>{{$error}}
                      @endforeach
                    </div>
                  @endif
                          <div class="form-group">
                            <label class="control-label col-sm-2" for="email">ชื่อ:</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" name="user_name" required="required">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-sm-2" for="pwd">Email:</label>
                            <div class="col-sm-10">
                            <input type="email" class="form-control" name="email" required="required|email|unique:users,email">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-sm-2" for="pwd">รหัสผ่าน:</label>
                            <div class="col-sm-10">
                            <input type="password" class="form-control" name="password">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-sm-2" for="pwd">รูปภาพผู้ใช้ :</label>
                            <div class="col-sm-10">
                              <div class="input-group">
                                <input type="file" class="filestyle" data-buttonText=" Browse" data-buttonName="btn-primary">
                                {{-- <input type="file" class="form-control" accept="image/*" name="file"> --}}

                              </div>
                              {{-- <input type="file" name="pic" accept="image/*" class="btn btn-primary"> --}}
                              {{-- {!! Form::file('file', ['required' => 'required']) !!} --}}
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-sm-2" for="pwd">ระดับผู้ใช้:</label>
                            <div class="col-sm-10">
                              <select class="form-control" name="typeuser">
                              @foreach($typeusers as $item)
                                  <option value="{{$item->id}}">{{$item->TypeName}}</option>
                      				@endforeach
                            </select>
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="control-label col-sm-2" for="email">ส่วนการดำเนินงาน:</label>
                            <div class="col-sm-3">
                              <div class="panel panel-info">
                                <div class="panel-heading">หน่วยรับตัวอย่าง</div>
                                <div class="panel-body">
                                  <div class="checkbox">
                                    <label>
                                      <input type="checkbox" class="check" id="checkAll"> รับตัวอย่างอาหารสัตว์
                                    </label>
                                  </div>


                                </div>
                                </div>
                              </div>

                              <div class="col-sm-3">
                                <div class="panel panel-info">
                                  <div class="panel-heading">หน่วยวิเคราะห์</div>
                                  <div class="panel-body">
                                    @foreach ($SubjectAnalysis as $item)
                                      <div class="checkbox">
                                      <label>
                                        <input type="checkbox" class="check"> {{$item->name}}
                                      </label>
                                      </div>
                                    @endforeach
                                    <div class="checkbox">
                                      <label>
                                        <input type="checkbox" class="check" id="checkAll"> เลือกทั้งหมด
                                      </label>
                                    </div>




                                      
                                  </div>
                                  </div>
                                </div>
                                <div class="col-sm-3">
                                  <div class="panel panel-info">
                                    <div class="panel-heading">หน่วยตรวจสอบข้อมูล</div>
                                    <div class="panel-body">
                                      <div class="checkbox">
                                        <label>
                                          <input type="checkbox" class="check" id="checkAll"> Check All
                                        </label>
                                      </div>

                                        <div class="checkbox">
                                        <label>
                                          <input type="checkbox" class="check"> Check me out
                                        </label>
                                      </div>


                                        <div class="checkbox">
                                        <label>
                                          <input type="checkbox" class="check"> Check me out
                                        </label>
                                      </div>

                                        <div class="checkbox">
                                        <label>
                                          <input type="checkbox" class="check"> Check me out
                                        </label>
                                      </div>
                                    </div>
                                    </div>
                                  </div>
                          </div>

                          <div class="form-group">
                            {{-- <div class="col-md-3">

                            </div> --}}
                            <div class="col-md-3 col-md-offset-2">
                              <button type="submit" class="btn btn-primary">
                                <span class='glyphicon glyphicon glyphicon-ok'></span> Create User
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
<script>
$('#BSbtninfo').filestyle({
				buttonName : 'btn-info',
                buttonText : ' Select a File'});

                $("#checkAll").click(function () {
                    $(".check").prop('checked', $(this).prop('checked'));
                });

                </script>
@endsection
