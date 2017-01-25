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

              <h3 class="box-title">การจัดการผู้ใช้ระบบ</h3>

            </div>

            <div class="box-body">
              <button type="button" class="btn btn-primary btn-lg " name="button" onclick="window.location='{{ url("muser/create") }}'"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> เพิ่มข้อมูลผู้ใช้ใหม่</button>
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
                  <th>ลำดับผู้ใช้</th>
                  <th>ชื่อ</th>
                  <th>อีเมล์</th>
                  <th>ระดับผู้ใช้</th>
                  <th>รูป</th>
                  <th>แก้ไข/ลบ</th>
                </tr>
                </thead>
                <tbody>

                  @foreach($users as $item)
          				<tr class="item{{$item->id}}">
          					<td>{{$item->id}}</td>
          					<td>{{$item->name}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->TypeName}}</td>
                    <td><img src= {{ URL::asset($item->path_pic) }} width="100px" height="100px"></td>
          					<td><button class="btn btn-info" onclick="window.location='{{ url("muser/$item->id/edit") }}'">
          							<span class="glyphicon glyphicon-edit"></span> Edit
          						</button>
          						<button class="delete-modal btn btn-danger"
          							data-id="{{$item->id}}" data-name="{{$item->name}}" >
          							<span class="glyphicon glyphicon-trash"></span> Delete
          						</button></td>
          				</tr>
          				@endforeach
                </tbody>
              </table>
              <div id="CreateModal" class="modal fade" role="dialog">
                {!! Form::open(['method'=>'POST','action'=>'UserController@store','files'=>true,'class'=>'form-horizontal']) !!}
                {{-- <form class="form-horizontal" role="form" action="/muser" method="post"> --}}
                  {{-- {{ csrf_field() }} --}}
                  <input type="hidden" name="_token" value="{!! csrf_token() !!}">
            		<div class="modal-dialog">
            			<!-- Modal content-->
            			<div class="modal-content">
            				<div class="modal-header">
            					<button type="button" class="close" data-dismiss="modal">&times;</button>
            					<h4 class="modal-title">สร้างผู้ใช้ใหม่</h4>
            				</div>
            				<div class="modal-body">
                          <div class="form-group">
                            <label class="control-label col-sm-2" for="email">ชื่อ:</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" name="user_name" required="required">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-sm-2" for="pwd">Email:</label>
                            <div class="col-sm-10">
                            <input type="email" class="form-control" name="user_email" required="required|email|unique:users,email">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-sm-2" for="pwd">รหัสผ่าน:</label>
                            <div class="col-sm-10">
                            <input type="password" class="form-control" name="password">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-sm-2" for="pwd">ระดับผู้ใช้:</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" name="user_lavel">
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="control-label col-sm-2" for="pwd">รูปภาพผู้ใช้ :</label>
                            <div class="col-sm-10">
                              <div class="input-group">
                                <input type="file" class="form-control" accept="image/*" name="file">
                                {{-- <span class="input-group-btn">
                                  <button class="btn btn-secondary" type="button">Go!</button>
                                </span> --}}
                              </div>
                              {{-- <input type="file" name="pic" accept="image/*" class="btn btn-primary"> --}}
                              {{-- {!! Form::file('file', ['required' => 'required']) !!} --}}
                            </div>
                          </div>

            					<div class="modal-footer">
              						<button type="submit" class="btn btn-primary">
              							<span class='glyphicon glyphicon glyphicon-ok'></span> Create User
              						</button>
            						<button type="button" class="btn btn-warning" data-dismiss="modal">
            							<span class='glyphicon glyphicon-remove'></span> Close
            						</button>
            					</div>
            				</div>
            			</div>
            		</div>
                {!! Form::close() !!}
            	</div>

              <div id="UpdateModal" class="modal fade" role="dialog">
                <form class="form-horizontal" role="form" action="" method="POST" id="Updateform">
                  <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                  <input type="hidden" name="_method" value="PUT">
            		<div class="modal-dialog">
            			<!-- Modal content-->
            			<div class="modal-content">
            				<div class="modal-header">
            					<button type="button" class="close" data-dismiss="modal">&times;</button>
            					<h4 class="modal-title">แก้ไขข้อมูล</h4>
            				</div>
            				<div class="modal-body">

            						<div class="form-group">
            							<label class="control-label col-sm-2" for="id">ID:</label>
            							<div class="col-sm-10">
            								<input type="text" class="form-control" name="id" id="fid" disabled>
            							</div>
            						</div>
            						<div class="form-group">
            							<label class="control-label col-sm-2" for="name">Name:</label>
            							<div class="col-sm-10">
            								<input type="name" class="form-control" name="user_name" id="n">
            							</div>
            						</div>
                        <div class="form-group">
            							<label class="control-label col-sm-2" for="name">Email:</label>
            							<div class="col-sm-10">
            								<input type="name" class="form-control" name="user_email" id="mail">
            							</div>
            						</div>


            					<div class="modal-footer">
              						<button type="submit" class="btn btn-success">
              							<span class='glyphicon glyphicon-pencil'> </span>Update
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
      $(document).on('click', '.edit-modal', function() {
          var id = $(this).data('id');
          $('#fid').val($(this).data('id'));
          $('#n').val($(this).data('name'));
          $('#mail').val($(this).data('mail'));
          $('#UpdateModal').modal('show');
          document.getElementById("Updateform").action = "/muser/"+id;
      });
      $(document).on('click', '.delete-modal', function() {

          var id = $(this).data('id');
          $('.modal-title').text('Delete User');
          $('.did').text($(this).data('id'));

          $('.dname').html($(this).data('name'));
          $('#DeleteModal').modal('show');
          document.getElementById("Deleteform").action = "/muser/"+id;
      });
      $(document).on('click', '.create-modal', function() {
          $('#CreateModal').modal('show');
      });

  </script>
@endsection
