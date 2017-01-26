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
        การจัดการข้อมูลประเภทผู้ใช้
        <small>Type Users Management</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><i class="fa fa-user"></i> ผู้ใช้</li>
        <li><a href="/tuser"><i class="fa fa-user"></i> การจัดการข้อมูลประเภทผู้ใช้</a></li>
        <li class="active">แก้ไขประเภทผู้ใช้</li>
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

              <h3 class="box-title">แก้ไขประเภทผู้ใช้</h3>

            </div>

            <div class="box-body">


                <form class="form-horizontal" action="/tuser/{{$typeusers->id}}" method="post" >
                {{-- <form class="form-horizontal" role="form" action="/muser" method="post"> --}}
                  {{-- {{ csrf_field() }} --}}
                  <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                  <input type="hidden" name="_method" value="PUT">


                  @if (count($errors)>0)
                    <div class="alert alert-warning">
                      @foreach ($errors->all() as $error)
                        <strong>Warning! </strong>{{$error}}
                      @endforeach
                    </div>
                  @endif
                          <div class="form-group">
                            <label class="control-label col-sm-2" for="email">ชื่อประเภท:</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" name="typeuser_name" required="required" value="{{$typeusers->TypeName}}">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-sm-2" for="email">ส่วนการดำเนินงาน:</label>
                            <div class="col-sm-3">
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
                            <div class="col-sm-3">
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
                            <div class="col-sm-3">
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

                          <div class="form-group">
                            {{-- <div class="col-md-3">

                            </div> --}}
                            <div class="col-md-3 col-md-offset-2">
                              <button type="submit" class="btn btn-primary">
                                <span class='glyphicon glyphicon glyphicon-ok'></span> Create Type User
                              </button>
                              <button type="button" class="btn btn-danger" onclick="window.location='{{ url("tuser") }}'">
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
$("#checkAll").click(function () {
    $(".check").prop('checked', $(this).prop('checked'));
});
</script>
@endsection
