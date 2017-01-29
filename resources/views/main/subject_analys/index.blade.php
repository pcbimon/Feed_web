

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
              <button type="button" class="btn btn-primary btn-lg " name="button" onclick="window.location='{{ url("subjectanalys/create") }}'"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> เพิ่มข้อมูลหัวข้อการวิเคราะห์ใหม่</button>
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
                  <th>แก้ไข/ลบ</th>
                </tr>
                </thead>
                <tbody>

                  @foreach($subjectanalys as $item)
          				<tr class="item{{$item->id}}">
          					<td>{{$item->id}}</td>
          					<td>{{$item->name}}</td>
                    <td>{{$item->price}}</td>
          					<td><button class="btn btn-info" onclick="window.location='{{ url("subjectanalys/$item->id/edit") }}'">
          							<span class="glyphicon glyphicon-edit"></span> Edit
          						</button>
          						<button class="delete-modal btn btn-danger"
          							data-id="{{$item->id}}" data-name="{{$item->TypeName}}" >
          							<span class="glyphicon glyphicon-trash"></span> Delete
          						</button></td>
          				</tr>
          				@endforeach
                </tbody>
              </table>
              <div id="DeleteModal" class="modal fade" role="dialog">
                <form class="form-horizontal" role="form" action="/muser/" method="POST" id="Deleteform">
            		<div class="modal-dialog">
            			<!-- Modal content-->
            			<div class="modal-content">
            				<div class="modal-header">
            					<button type="button" class="close" data-dismiss="modal">&times;</button>
            					<h4 class="modal-title">ลบข้อมูล</h4>
            				</div>
            				<div class="modal-body">

                        <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                          <input type="hidden" name="_method" value="Delete">
                        <div class="deleteContent">
              						Are you Sure you want to delete <span class="dname"></span> ? <span
              							class="hidden did"></span>
              					</div>

            					<div class="modal-footer">
              						<button type="submit" class="btn btn-danger">
              							<span  class='glyphicon glyphicon-ok'> </span> Delete
              						</button>
            						<button type="button" class="btn btn-warning" data-dismiss="modal">
            							<span class='glyphicon glyphicon-remove'></span> Close
            						</button>
            					</div>
            				</div>
            			</div>
            		</div>
                </form>
            	</div>


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

      $(document).on('click', '.delete-modal', function() {

          var id = $(this).data('id');
          $('.modal-title').text('Delete User');
          $('.did').text($(this).data('id'));

          $('.dname').html($(this).data('name'));
          $('#DeleteModal').modal('show');
          document.getElementById("Deleteform").action = "/subjectanalys/"+id;
      });
      $(document).on('click', '.create-modal', function() {
          $('#CreateModal').modal('show');
      });

  </script>
@endsection
