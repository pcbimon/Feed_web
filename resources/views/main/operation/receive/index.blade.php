@extends('layouts.index')
@section('title')
  การรับตัวอย่างอาหารสัตว์เพื่อวิคราะห์
@endsection
@section('content')
<style>
.stepwizard-step p {
margin-top: 10px;
}
.stepwizard-row {
display: table-row;
}
.stepwizard {
display: table;
width: 100%;
position: relative;
}
.stepwizard-step button[disabled] {
opacity: 1 !important;
filter: alpha(opacity=100) !important;
}
.stepwizard-row:before {
top: 14px;
bottom: 0;
position: absolute;
content: " ";
width: 100%;
height: 1px;
background-color: #ccc;
z-order: 0;
}
.stepwizard-step {
display: table-cell;
text-align: center;
position: relative;
}
.btn-circle {
width: 30px;
height: 30px;
text-align: center;
padding: 6px 0;
font-size: 12px;
line-height: 1.428571429;
border-radius: 15px;
}
.btn {
margin-bottom: 0px
}
.topic {
/* text-align:right; */
text-align: right;
}
.description {
/* text-align:right; */
text-align: left;
}
</style>
        <div class="content-wrapper">
      		<!-- Content Header (Page header) -->
      		<section class="content-header">
      			<h1>การรับตัวอย่างอาหารสัตว์เพื่อวิเคราะห์ <small>Receive Product Operation</small></h1>
      			<ol class="breadcrumb">
      				<li>
      					<a href="/"><i class="fa fa-dashboard"></i> Home</a>
      				</li>
      				<li><i class="fa fa-user"></i> หน่วยรับตัวอย่างอาหารสัตว์</li>
      				<li class="active">การรับตัวอย่างอาหารสัตว์</li>
      			</ol>
      		</section><!-- Main content -->
      		<section class="content">
      			<!-- Small boxes (Stat box) -->
      			<div class="row">
      				<div class="col-md-12">
      					<!-- small box -->
      					<div class="box box-info">
      						<div class="box-header">
      							<i class="fa fa-user-circle-o"></i>
      							<h3 class="box-title">การรับตัวอย่างอาหารสัตว์</h3>
      						</div>
      						<div class="box-body">
      							<div class="row">
      								<div class="col-md-12">
      									<div class="clear"></div><!-- ส่วนเนื้อหา -->
      									<div class="panel panel-boardered">
      										<div class="panel-body">
      											<!--Progress bar-->
      											<!--<div class="progress">
                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width:0%" id="myBar">

                            </div>
                          </div>-->
      											<div class="row form-group">
      												<div class="col-xs-12">
      													<ul class="nav nav-pills nav-justified thumbnail setup-panel">
      														<li class="active">
      															<a href="#step-1">
      															<h4 class="list-group-item-heading">ขั้นตอนที่ 1</h4>
      															<p class="list-group-item-text">ข้อมูลเบื้องต้น</p></a>
      														</li>
      														<li class="disabled">
      															<a href="#step-2">
      															<h4 class="list-group-item-heading">ขั้นตอนที่ 2</h4>
      															<p class="list-group-item-text">ข้อมูลการวิเคราะห์</p></a>
      														</li>
      														<li class="disabled">
      															<a href="#step-3">
      															<h4 class="list-group-item-heading">ขั้นตอนที่ 3</h4>
      															<p class="list-group-item-text">ตรวจสอบการรับตัวอย่าง</p></a>
      														</li>
      														<li class="disabled">
      															<a href="#step-4">
      															<h4 class="list-group-item-heading">ขั้นตอนที่ 4</h4>
      															<p class="list-group-item-text">บันทึกข้อมูลเสร็จสิ้น</p></a>
      														</li>
      													</ul>
      												</div>
      											</div>
      											<hr>
      											<div class="row setup-content" id="step-1">
      												<div class="col-xs-12">
                                <div class="row">
                                  <div class="col-md-12">
                                    @if (count($errors)>0)
                                      <div class="alert alert-warning alert-dismissable fade in">
                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                        @foreach ($errors->all() as $error)
                                            <strong>Warning! </strong>{{$error}}<br>
                                        @endforeach
                                      </div>
                                    @endif
                                  </div>
                                </div>
      													<div class="col-md-12">
      														<!-- ฟอร์มข้อมูลเบื้องต้น -->

      														<form class="form-horizontal" id="formCustomer" name="formIntro" method="post" action="receive/showcustomer">

      															<div class="form-group">
      																<label class="control-label col-sm-2" for="name">ชื่อผู้ขอใช้บริการ</label>
      																<div class="col-sm-8">
      																	<select class="selectpicker" data-live-search="true" data-size="5" data-width="100%" name="customer" title="กรุณาเลือกผู้ขอใช้บริการ" id="chooseuser" onchange="detailuser()">
                                          @foreach($customer as $item)
                                              <option value="{{$item->id}}" @if ($customerid==$item->id) {{ "selected" }} @endif>{{$item->name}}</option>
                                  				@endforeach
      																	</select>
                                        {{ csrf_field() }}
                                        {{-- <input class="form-control" id="test" placeholder="กรอกชื่อผู้ขอใช้บริการ" type="text"> --}}<br>
      																	<br>
      																	<div class="panel-group">
      																		<div class="panel panel-default">
      																			<div class="panel-heading">
      																				รายละเอียดผู้ใช้บริการ
      																			</div>
      																			<div class="panel-body">
      																				@if ($customerid == '') <label class="text-center col-md-12" for="name">คุณยังไม่ได้เลือกผู้ขอใช้บริการ</label>
                                              @else

                                                <label class="topic col-md-2" for="name">รหัส :</label> <label class="description col-md-10" for="name" id="CustomerID">{{$customerdetial->id}}</label><br>
      											                    <label class="topic col-md-2" for="name">ชื่อ :</label> <label class="description col-md-10" for="name" id="CustomerName">{{$customerdetial->name}}</label><br>
      																				  <label class="topic col-md-2" for="name">ที่อยู่ :</label> <label class="description col-md-10" for="name" id="CustomerAddress">{{$customerdetial->address}}</label><br>
      																				  <label class="topic col-md-2" for="name">Fax :</label> <label class="description col-md-10" id="CustomerFax">{{$customerdetial->fax}}</label><br>
      																				  <label class="topic col-md-2" for="name">โทรศัพท์:</label> <label class="description col-md-10" for="name" id="CustomerTell">{{$customerdetial->telephone}}</label><br>
      																				  <label class="topic col-md-2" for="name">Email :</label> <label class="description col-md-10" id="CustomerEmail">{{$customerdetial->email}}</label>

                                              @endif

      																			</div>
      																		</div>
      																	</div>
      																</div>
      																<div class="col-sm-2">
      																	<button class="btn btn-default" type="button">เพิ่มผู้ขอใช้บริการใหม่</button>
      																</div>
      															</div>
                                  </form>
                                  <form class="form-horizontal" id="formProduct" name="formIntro" data-width="100%" method="post"  action="receive/showproduct" >
      															<div class="form-group">

                                    <label class="control-label col-sm-2" for="name">ชื่อตัวอย่าง</label>
      																<div class="col-sm-8">
      																	<select class="selectpicker" data-live-search="true" data-size="5" data-width="100%" name="product" title="กรุณาเลือกตัวอย่างอาหารสัตว์" onchange="detailproduct()">
                                          @foreach($product as $item)
                                              <option value="{{$item->id}}" @if ($productid==$item->id) {{ "selected" }} @endif>{{$item->id}} : {{$item->name}}</option>
                                  				@endforeach
      																	</select>
                                        {{ csrf_field() }}
                                        <br>
      																	<br>
      																	<div class="panel-group">
      																		<div class="panel panel-default">
      																			<div class="panel-heading">
      																				รายละเอียดตัวอย่าง
      																			</div>
      																			<div class="panel-body">
                                              @if ($productid == '') <label class="text-center col-md-12" for="name">คุณยังไม่ได้เลือกตัวอย่างอาหารสัตว์</label>
                                              @else
                                                <label class="topic col-sm-2" for="name">รหัส :</label> <label class="description col-md-10" for="name" id="ProductID">{{$productdetail->id}}</label><br>
        																				<label class="topic col-sm-2" for="name">ชื่อ :</label> <label class="description col-md-10" for="name" id="ProductName">{{$productdetail->name}}</label><br>
        																				<label class="topic col-sm-2" for="name">จำนวน :</label> <label class="description col-md-10" for="name" id="ProductAddress">{{$productdetail->countable}} ตัวอย่าง</label><br>
        																				<label class="topic col-sm-2" for="name">แหล่งซื้อ :</label> <label class="description col-md-10" id="ProductFax">{{$productdetail->place_to_buy}}</label><br>
        																				<label class="topic col-sm-2" for="name">เครื่องหมาย:</label> <label class="description col-md-10" for="name" id="ProductTell">{{$productdetail->syntax}}</label><br>
        																				<label class="topic col-sm-2" for="name">ออกใบเสร็จให้ :</label> <label class="description col-md-10" id="ProductEmail">{{$productdetail->namebill}}</label>
                                              @endif

      																			</div>
      																		</div>
      																	</div>
      																</div>
      																<div class="col-sm-2">
      																	<button class="btn btn-default" type="button">เพิ่มตัวอย่างใหม่</button>
      																</div>
      															</div>
      														</form>
                                  <form class="form-horizontal" action="/receive/check" method="post">
                                    <div class="form-group">
                                      <div class="col-sm-offset-2 col-sm-8">
                                        <button class="btn btn-primary btn-block" type="submit">ถัดไป</button>
                                        {{ csrf_field() }}
                                        {{-- <button class="btn btn-primary btn-block" id="activate-step-2" type="submit">ถัดไป</button> --}}
                                      </div>
                                    </div>
                                  </form>


      													</div>
      												</div>
      											</div>



      										</div>
      									</div>
      								</div><!-- .row -->
      							</div><!-- .col-md-12 -->
      						</div>
      					</div>
      				</div>
      			</div><!-- /.row (main row) -->
      		</section><!-- /.content -->
      	</div>
  <!-- /.content-wrapper -->
@endsection
@section('footerscript')
  <script> $(document).ready(function() {
	var navListItems = $('ul.setup-panel li a'),
		allWells = $('.setup-content');
	allWells.hide();
	navListItems.click(function(e) {
		e.preventDefault();
		var $target = $($(this).attr('href')),
			$item = $(this).closest('li');
		if (!$item.hasClass('disabled')) {
			navListItems.closest('li').removeClass('active');
			$item.addClass('active');
			allWells.hide();
			$target.show();
		}
	});
	$('ul.setup-panel li.active a').trigger('click');
	// // DEMO ONLY //
	$('#activate-step-1').on('click', function(e) {
		// $('ul.setup-panel li:eq(2)').removeClass('disabled');
		$('ul.setup-panel li a[href="#step-1"]').trigger('click');
		//$(this).remove();
	})
	$('#activate-step-2').on('click', function(e) {
		$('ul.setup-panel li:eq(1)').removeClass('disabled');
		$('ul.setup-panel li a[href="#step-2"]').trigger('click');
		//$(this).remove();
	})
	$('#activate-step-3').on('click', function(e) {
		$('ul.setup-panel li:eq(2)').removeClass('disabled');
		$('ul.setup-panel li a[href="#step-3"]').trigger('click');
		//$(this).remove();
	})
	$('#activate-step-4').on('click', function(e) {
		$('ul.setup-panel li:eq(3)').removeClass('disabled');
		$('ul.setup-panel li a[href="#step-4"]').trigger('click');
		//$(this).remove();
	})

});
function detailuser() {
  $('#formCustomer').submit();
  };
function detailproduct() {
  $('#formProduct').submit();
  };
</script>
@endsection
