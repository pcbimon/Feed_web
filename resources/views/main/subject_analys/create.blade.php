@extends('layouts.main-footer')

@extends('layouts.index')
@section('title')
  การจัดการหัวข้อการวิเคราะห์
@endsection
@section('content')
@extends('layouts.menu')
  @extends('layouts.menutop')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        การจัดการหัวข้อการวิเคราะห์
        <small>Subject Analysis Management</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">การจัดการหัวข้อการวิเคราะห์</li>
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


                  {!! Form::open(['method'=>'POST','action'=>'SubjectAnalysisController@store','class'=>'form-horizontal']) !!}
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
                            <label class="control-label col-sm-2">ชื่อหัวข้อการวิเคราะห์:</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" name="subject_name" required="required">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-sm-2" >ราคา:</label>
                            <div class="col-sm-10">
                            <input type="number" class="form-control" name="subject_price" required="required" min="1">
                            </div>

                          </div>

                          <div class="form-group">
                            {{-- <div class="col-md-3">

                            </div> --}}
                            <div class="col-md-10 col-md-offset-2">
                              <button type="submit" class="btn btn-primary">
                                <span class='glyphicon glyphicon glyphicon-ok'></span> Create New Subject of Analysis
                              </button>
                              <button type="button" class="btn btn-danger" onclick="window.location='{{ url("subjectanalys") }}'">
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
