

@extends('layouts.index')
@section('title')
  การจัดการหัวข้อการวิเคราะห์
@endsection
@section('content')

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

              <h3 class="box-title">การจัดการหัวข้อการวิเคราะห์</h3>

            </div>

            <div class="box-body">
              <br/><br/>
              {{-- Content --}}

              {{-- <div class="form-group{{ $errors->has('inputname') ? ' has-error' : '' }}">
                  {!! Form::label('inputname', 'Input label') !!}
                  {!! Form::text('inputname', null, ['class' => 'form-control', 'required' => 'required']) !!}
                  <small class="text-danger">{{ $errors->first('inputname') }}</small>
              </div> --}}

              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ลำดับ</th>
                  <th>หัวข้อการวิเคราะห์</th>
                  <th>ราคา</th>
                  
                </tr>
                </thead>
                <tbody>

                  @foreach($subjectanalys as $item)
          				<tr class="item{{$item->id}}">
          					<td>{{$item->id}}</td>
          					<td>{{$item->name}}</td>
                    <td>{{$item->price}}</td>

          				</tr>
          				@endforeach
                </tbody>
              </table>



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
  <script language="JavaScript" type="text/javascript">
    $( document ).ready(function() {
      $("#example1").DataTable({

      });
      });



  </script>
@endsection
