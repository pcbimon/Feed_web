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
        Dashboard
        <small>Control panel</small>
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
              <button type="button" class="btn btn-primary create-modal" name="button">เพิ่มข้อมูลผู้ใช้ใหม่</button>
              <br/><br/>
              {{-- Content --}}

              {{-- <div class="form-group{{ $errors->has('inputname') ? ' has-error' : '' }}">
                  {!! Form::label('inputname', 'Input label') !!}
                  {!! Form::text('inputname', null, ['class' => 'form-control', 'required' => 'required']) !!}
                  <small class="text-danger">{{ $errors->first('inputname') }}</small>
              </div> --}}
              {{ csrf_field() }}
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
                    <td>ผู้ดูแลระบบ</td>
                    <td><img src="{{$item->path_pic}}" alt="userpic" width="100px" height="100px"></td>
          					<td><button class="edit-modal btn btn-info" data-id="{{$item->id}}"
          							data-name="{{$item->name}}" data-mail ="{{$item->email}}">
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
              <div id="myModal" class="modal fade" role="dialog">
            		<div class="modal-dialog">
            			<!-- Modal content-->
            			<div class="modal-content">
            				<div class="modal-header">
            					<button type="button" class="close" data-dismiss="modal">&times;</button>
            					<h4 class="modal-title"></h4>
            				</div>
            				<div class="modal-body">
            					<form class="form-horizontal" role="form">
            						<div class="form-group">
            							<label class="control-label col-sm-2" for="id">ID:</label>
            							<div class="col-sm-10">
            								<input type="text" class="form-control" id="fid" disabled>
            							</div>
            						</div>
            						<div class="form-group">
            							<label class="control-label col-sm-2" for="name">Name:</label>
            							<div class="col-sm-10">
            								<input type="name" class="form-control" id="n">
            							</div>
            						</div>
                        <div class="form-group">
            							<label class="control-label col-sm-2" for="name">Email:</label>
            							<div class="col-sm-10">
            								<input type="name" class="form-control" id="mail">
            							</div>
            						</div>
            					</form>
            					<div class="deleteContent">
            						Are you Sure you want to delete <span class="dname"></span> ? <span
            							class="hidden did"></span>
            					</div>
                      <div class="CreateContent">
                        <form>
                          <div class="form-group">
                            <label for="email">ชื่อ:</label>
                            <input type="email" class="form-control" id="email">
                          </div>
                          <div class="form-group">
                            <label for="pwd">Email:</label>
                            <input type="password" class="form-control" id="pwd">
                          </div>
                          <div class="form-group">
                            <label for="pwd">รหัสผ่าน:</label>
                            <input type="password" class="form-control" id="pwd">
                          </div>
                          <div class="form-group">
                            <label for="pwd">ระดับผู้ใช้:</label>
                            <input type="text" class="form-control" id="leveluser">
                          </div>

                        </form>

            					</div>
            					<div class="modal-footer">
            						<button type="button" class="btn actionBtn" data-dismiss="modal">
            							<span id="footer_action_button" class='glyphicon'> </span>
            						</button>
            						<button type="button" class="btn btn-warning" data-dismiss="modal">
            							<span class='glyphicon glyphicon-remove'></span> Close
            						</button>
            					</div>
            				</div>
            			</div>
            		</div>
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
          $('#footer_action_button').text(" Update");
          $('#footer_action_button').addClass('glyphicon-check');
          $('#footer_action_button').removeClass('glyphicon-trash');
          $('.actionBtn').addClass('btn-success');
          $('.actionBtn').removeClass('btn-danger');
          $('.actionBtn').addClass('edit');
          $('.modal-title').text('Edit');
          $('.deleteContent').hide();
          $('.form-horizontal').show();
          $('.CreateContent').hide();
          $('#fid').val($(this).data('id'));
          $('#n').val($(this).data('name'));
          $('#mail').val($(this).data('mail'));
          $('#myModal').modal('show');
      });
      $(document).on('click', '.delete-modal', function() {
          $('#footer_action_button').text(" Delete");
          $('#footer_action_button').removeClass('glyphicon-check');
          $('#footer_action_button').addClass('glyphicon-trash');
          $('.actionBtn').removeClass('btn-success');
          $('.actionBtn').addClass('btn-danger');
          $('.actionBtn').addClass('delete');
          $('.modal-title').text('Delete User');
          $('.did').text($(this).data('id'));
          $('.deleteContent').show();
          $('.CreateContent').hide();
          $('.form-horizontal').hide();
          $('.dname').html($(this).data('name'));
          $('#myModal').modal('show');
      });
      $(document).on('click', '.create-modal', function() {
          $('#footer_action_button').text(" Create");
          $('#footer_action_button').addClass('glyphicon-check');
          $('#footer_action_button').removeClass('glyphicon-trash');
          $('.actionBtn').addClass('btn-success');
          $('.actionBtn').addClass('create');
          $('.modal-title').text('Create User');
          $('.deleteContent').hide();
          $('.CreateContent').show();
          $('.form-horizontal').hide();
          $('.dname').html($(this).data('name'));
          $('#myModal').modal('show');
      });
  </script>
@endsection
