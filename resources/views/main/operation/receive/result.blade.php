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
.HeadAnalysis{
background-color: #d9d9d9;
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
      														<li class="">
      															<a href="#">
      															<h4 class="list-group-item-heading">ขั้นตอนที่ 1</h4>
      															<p class="list-group-item-text">ข้อมูลเบื้องต้น</p></a>
      														</li>
      														<li class="">
      															<a href="#">
      															<h4 class="list-group-item-heading">ขั้นตอนที่ 2</h4>
      															<p class="list-group-item-text">ข้อมูลการวิเคราะห์</p></a>
      														</li>
      														<li class="">
      															<a href="#">
      															<h4 class="list-group-item-heading">ขั้นตอนที่ 3</h4>
      															<p class="list-group-item-text">ตรวจสอบการรับตัวอย่าง</p></a>
      														</li>
      														<li class="active">
      															<a href="#step-4">
      															<h4 class="list-group-item-heading">ขั้นตอนที่ 4</h4>
      															<p class="list-group-item-text">บันทึกข้อมูลเสร็จสิ้น</p></a>
      														</li>
      													</ul>
      												</div>
      											</div>
      											<hr>

      											<div class="row setup-content" id="step-4">
      												<div class="col-xs-12">
      													<div class="row">
      														<div class="col-md-12">
                                    @if (count($errors)>0)
                                      <div class="alert alert-warning alert-dismissable fade in">
                                        @foreach ($errors->all() as $error)
                                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                            <strong>Warning! </strong>{{$error}}
                                        @endforeach
                                      </div>
                                    @endif
                                  </div>
                                </div>


                              </div>
                                <div class="row">
                                  <center>
                                    <h2>รับตัวอย่างเสร็จสิ้น</h2>
                                  </center>
                                  <center>
                                    <h3>รหัสอ้างอิง {{$LastReceiveID}}</h3>
                                  </center>

                                </div>
      													<div class="row">
      														<div class="col-md-12">
                                    {!! Form::open(['method' => 'POST', 'url' => '/received/print/pdf', 'class' => 'form-horizontal','target'=> '_blank']) !!}
                                      <div class="col-md-2 col-md-offset-5"><button type="submit" class="btn btn-primary btn-lg btn-block">พิมพ์ใบเสร็จ</button></div>
                                    {!! Form::close() !!}

      														</div>
      													</div>
                                <br>
                                <div class="row">
      														<div class="col-md-12">
                                    {!! Form::open(['method' => 'POST', 'url' => '/received/print/sticker', 'class' => 'form-horizontal','target'=> '_blank']) !!}
                                      <div class="col-md-2 col-md-offset-5"><button type="submit" class="btn btn-primary btn-lg btn-block">พิมพ์สติ๊กเกอร์</button></div>
                                    {!! Form::close() !!}
      														</div>
      													</div>
                                <br>
                                <div class="row">
      														<div class="col-md-12">
                                    <form action="/receive" method="get">
                                      <div class="col-md-2 col-md-offset-5"><button type="submit" class="btn btn-primary btn-lg btn-block">รับตัวอย่างใหม่</button></div>
                                    </form>
                                  </div>
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
  <!-- Add subject Modal -->

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


});

</script>
@endsection
