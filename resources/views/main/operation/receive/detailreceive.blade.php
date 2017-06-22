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
      															<a href="/">
      															<h4 class="list-group-item-heading">ขั้นตอนที่ 1</h4>
      															<p class="list-group-item-text">ข้อมูลเบื้องต้น</p></a>
      														</li>
      														<li class="active">
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

      											<div class="row setup-content" id="step-2">
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
                                <div class="row">
                                  {!! Form::open(['method' => 'POST', 'action' => 'ReceiveDetailController@addsubject', 'class' => 'form-horizontal']) !!}
                                    <div class="col-md-6">
                                      <div class="col-md-12">
                                         หัวข้อการวิเคราะห์
                                         <select class="form-control selectpicker" data-live-search="true" data-size="5" data-width="100%" name="subject_analys[]" title="กรุณาเลือกหัวข้อการวิเคราะห์" multiple>
                                          @foreach($analys as $item)
                                            <option value="{{$item->id}}"
                                              @for ($i = 0; $i < count($request_analysis); $i++)
                                                @if ($item->name == $request_analysis[$i])
                                                  selected
                                                @endif
                                              @endfor
                                              >{{$item->name}}</option>
                                          @endforeach
                                          </select>
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                        จำนวนตัวอย่าง <input class="form-control" type="number" name="number_add" value="{{$request_num}}" min="0" step="1" >
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                  <div class="col-md-12">
      															<button class="btn btn-primary btn-block" type="submit">เพิ่มหัวข้อการวิเคราะห์</button>
                                    {{ csrf_field() }}
                                    {!! Form::close() !!}
                                  </div>
                                </div>
                              </div>

      												<div class="row">
      														<div class="col-md-12">
      															<div class="table-responsive">
      																<table class="table table-hover">
      																	<thead>
      																		<tr>
      																			<th>#</th>
      																			<th>หัวข้อการวิเคราะห์</th>
      																			<th>ราคาต่อตัวอย่าง</th>
      																			<th>ค่าใช้จ่ายต่อรายการ</th>
      																		</tr>
      																	</thead>
      																	<tbody>
                                          @php
                                            $total = 0;
                                          @endphp
                                            @for ($i = 0; $i < count($request_analysis); $i++)
                                            <tr>
                                                <td>{{$i+1}}</td>
                                                <td>{{$request_analysis[$i]}}</td>
                                                <td>{{number_format($sprice[$i])}}</td>
                                                <td>{{number_format($request_num*$sprice[$i])}}</td>
                                                @php
                                                   $total = $total + ($request_num*$sprice[$i]);
                                                @endphp
                                            </tr>
                                            @endfor
      																		<tr>
      																			<td align="right" colspan="3">ค่าใช้จ่ายรวมสุทธิ</td>
      																			<td>{{number_format($total,2)}} บาท</td>
      																		</tr>
      																	</tbody>
      																</table>
      															</div>
      														</div>
      													</div>
                                <hr>
                                <h1>ตัวเลือกการจัดส่งและการชำระเงิน</h1>
                                <div class="col-xs-12">
                                    <div class="col-md-12">
                                      รับผลการวิเคราะห์โดย
                                      <label class="checkbox-inline"><input type="checkbox" value="">รับผลเอง</label>
                                      <label class="checkbox-inline"><input type="checkbox" value="">E-Mail</label>
                                      <label class="checkbox-inline"><input type="checkbox" value="">ไปรษณีย์ EMS (ชำระค่าบริการเพิ่ม 50บาท)</label>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="col-md-12">
                                      ออกรายงานผล
                                      <label class="checkbox-inline"><input type="checkbox" value="">ภาษาไทย</label>
                                      <label class="checkbox-inline"><input type="checkbox" value="">ภาษาอังกฤษ</label>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="col-md-12">
                                      หมายเหตุ
                                      <label class="checkbox-inline"><input type="checkbox" value="">ตัวอย่างแห้งปกติจัดเก็บที่อุณหภูมิห้อง</label>
                                      <label class="checkbox-inline"><input type="checkbox" value="">เก็บในตู้เย็น  8 องศา </label>
                                      <label class="checkbox-inline"><input type="checkbox" value="">เก็บในตู้เย็นช่องแช่แข็ง4 องศา  </label>
                                      <label class="checkbox-inline"><input type="checkbox" value="">อื่น  </label>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="col-md-12">
                                      การชำระเงิน
                                      <label class="checkbox-inline"><input type="checkbox" value="">ชำระเงินสด</label>
                                      <label class="checkbox-inline"><input type="checkbox" value="">ธนาณัติ</label>
                                      <label class="checkbox-inline"><input type="checkbox" value="">โอนเงิน</label>
                                      <label class="checkbox-inline"><input type="checkbox" value="">ค้างชำระ</label>
                                    </div>
                                </div>
                                <hr>
      													<div class="col-md-6">
      														<button class="btn btn-primary btn-block" id="activate-step-1" name="button" type="button">ก่อนหน้า</button>
      													</div>
                                {{-- {!! Form::open(['method' => 'get', 'url' => 'received/check', 'class' => 'form-horizontal']) !!}
                                <div class="col-md-6">
                                  <button class="btn btn-primary btn-block" id="activate-step-3" name="button" type="submit">ถัดไป</button>
                                </div>
                                {!! Form::close() !!} --}}
                                <form class="form-horizontal" action="/received/check" method="get">
                                  <div class="form-group">
                                    <div class="col-md-6">
                                      <button class="btn btn-primary btn-block" id="activate-step-3" name="button" type="submit">ถัดไป</button>
                                      {{ csrf_field() }}
                                    </div>
                                  </div>
                                </form>

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


});

</script>
@endsection
