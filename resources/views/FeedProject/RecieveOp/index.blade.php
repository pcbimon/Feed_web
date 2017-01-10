@extends('voyager::master')

@section('css')
    <link rel="stylesheet" href="{{ config('voyager.assets_path') }}/css/media/media.css"/>
    <link rel="stylesheet" type="text/css" href="{{ config('voyager.assets_path') }}/js/select2/select2.min.css">
    <link rel="stylesheet" href="{{ config('voyager.assets_path') }}/css/media/dropzone.css"/>
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
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
    .btn{
      margin-bottom: 0px
    }
    .topic{
      /* text-align:right; */
      text-align:right;

    }
    .description{
      /* text-align:right; */
      text-align:left;

    }
        </style>
        <!-- Bootstrap Core CSS -->

@stop

@section('content')

    <div class="page-content container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="admin-section-title">
                    <h3><i class="voyager-images"></i> หน่วยรับตัวอย่าง</h3>
                </div>
                <div class="clear"></div>
                <!-- ส่วนเนื้อหา -->
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
                                  <li class="active"><a href="#step-1">
                                      <h4 class="list-group-item-heading">ขั้นตอนที่ 1</h4>
                                      <p class="list-group-item-text">ข้อมูลเบื้องต้น</p>
                                  </a></li>
                                  <li class="disabled"><a href="#step-2">
                                      <h4 class="list-group-item-heading">ขั้นตอนที่ 2</h4>
                                      <p class="list-group-item-text">ข้อมูลการวิเคราะห์</p>
                                  </a></li>
                                  <li class="disabled"><a href="#step-3">
                                      <h4 class="list-group-item-heading">ขั้นตอนที่ 3</h4>
                                      <p class="list-group-item-text">ตรวจสอบการรับตัวอย่าง</p>
                                  </a></li>
                                  <li class="disabled"><a href="#step-4">
                                      <h4 class="list-group-item-heading">ขั้นตอนที่ 4</h4>
                                      <p class="list-group-item-text">บันทึกข้อมูลเสร็จสิ้น</p>
                                  </a></li>
                              </ul>
                          </div>
                  	</div>
                    <hr />
                      <div class="row setup-content" id="step-1">
                          <div class="col-xs-12">
                              <div class="col-md-12 ">
                                <!-- ฟอร์มข้อมูลเบื้องต้น -->
                                <form class="form-horizontal" name="formIntro">
                                <div class="form-group">
                                  <label class="control-label col-sm-2" for="name">ชื่อผู้ขอใช้บริการ</label>
                                  <div class="col-sm-8">
                                    <input type="text" class="form-control" id="test" placeholder="กรอกชื่อผู้ขอใช้บริการ">
                                    <br />
                                    <div class="panel-group">
                                      <div class="panel panel-default">
                                        <div class="panel-heading">   รายละเอียดผู้ใช้บริการ</div>
                                        <div class="panel-body">
                                          <label class="topic col-md-2" for="name">รหัส : </label>
                                          <label class="description col-md-10" for="name" id="CustomerID">C20161231-000001 </label>
                                          <br />
                                          <label class="topic col-md-2" for="name">ชื่อ : </label>
                                          <label class="description col-md-10" for="name" id="CustomerName">นายปฏิพัทธ์ ชิวปรีชา </label>
                                          <br />
                                          <label class="topic col-md-2" for="name">ที่อยู่ : </label>
                                          <label class="description col-md-10" for="name" id="CustomerAddress">109 หมู่ 6 ต.ห้วยม่วง อ.กำแพงแสน จ.นครปฐม  73180  </label>
                                          <br />
                                          <label class="topic col-md-2" for="name">Fax : </label>
                                          <label class="description col-md-10" id="CustomerFax">034-555888 </label>
                                          <br />
                                          <label class="topic col-md-2" for="name">โทรศัพท์: </label>
                                          <label class="description col-md-10" for="name" id="CustomerTell">090-8885555 </label>
                                          <br />
                                          <label class="topic col-md-2" for="name">Email : </label>
                                          <label class="description col-md-10" id="CustomerEmail">patipat.chewprecha@mail.kmutt.ac.th </label>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-sm-2">
                                    <button type="button" class="btn btn-default">เพิ่มผู้ขอใช้บริการใหม่</button>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="control-label col-sm-2" for="name">ชื่อตัวอย่าง</label>
                                  <div class="col-sm-8">
                                    <input type="text" class="form-control" id="test" placeholder="กรอกชื่อตัวอย่าง">
                                    <br />

                                    <div class="panel-group">
                                      <div class="panel panel-default">
                                        <div class="panel-heading">   รายละเอียดตัวอย่าง</div>
                                        <div class="panel-body">
                                          <label class="topic col-sm-2" for="name">รหัส : </label>
                                          <label class="description col-md-10" for="name" id="ProductID">P20161231-000001 </label>
                                          <br />
                                          <label class="topic col-sm-2" for="name">ชื่อ : </label>
                                          <label class="description col-md-10" for="name" id="ProductName"> ปลาป่น</label>
                                          <br />
                                          <label class="topic col-sm-2" for="name">จำนวน : </label>
                                          <label class="description col-md-10" for="name" id="ProductAddress">20 ตัวอย่าง</label>
                                          <br />
                                          <label class="topic col-sm-2" for="name">แหล่งซื้อ : </label>
                                          <label class="description col-md-10" id="ProductFax">-</label>
                                          <br />
                                          <label class="topic col-sm-2" for="name">เครื่องหมาย: </label>
                                          <label class="description col-md-10" for="name" id="ProductTell">ถุงสีดำแห้ง และใส่ซิบไว้</label>
                                          <br />
                                          <label class="topic col-sm-2" for="name">ออกใบเสร็จให้ : </label>
                                          <label class="description col-md-10" id="ProductEmail">นายปฏิพัทธ์ ชิวปรีชา</label>
                                        </div>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="col-sm-2">
                                    <button type="button" class="btn btn-default">เพิ่มตัวอย่างใหม่</button>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <div class="col-sm-offset-2 col-sm-8">
                                    <button type="button" id="activate-step-2" class="btn btn-primary btn-block">ถัดไป</button>
                                  </div>
                                </div>

                              </form>
                              </div>
                          </div>
                      </div>
                      <div class="row setup-content" id="step-2">
                          <div class="col-xs-12">
                            <div class="row">
                              <div class="col-md-12">
                                <button type="button" class="btn btn-info btn-block" name="button">เพิ่มหัวข้อการวิเคราะห์</button>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-12">
                                <div class="table-responsive">
                                <table class="table table-hover">
                                <thead>
                                  <tr>
                                    <th>#</th>
                                    <th>รหัสตัวอย่างการวิเคราะห์</th>
                                    <th>รหัสหัวข้อการวิเคราะห์</th>
                                    <th>จำนวนตัวอย่าง</th>
                                    <th>ราคาต่อตัวอย่าง</th>
                                    <th>ค่าใช้จ่ายต่อรายการ</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                  </tr>
                                  <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                  </tr>
                                  <tr>
                                    <th scope="row">3</th>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                  </tr>
                                  <tr>
                                    <td colspan="5" align ="right">ค่าใช้จ่ายรวมสุทธิ</td>

                                    <td>11,250 บาท</td>
                                  </tr>

                                </tbody>
                              </table>
                              </div>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <button type="button" id="activate-step-1" class="btn btn-info btn-block" name="button">ก่อนหน้า</button>
                            </div>
                            <div class="col-md-6">
                              <button type="button" id="activate-step-3" class="btn btn-info btn-block" name="button">ถัดไป</button>
                            </div>
                          </div>
                      </div>
                      <div class="row setup-content" id="step-3">
                          <div class="col-xs-12">
                              <div class="col-md-12">
                                  <div class="col-md-6">
                                    <div class="panel-group">
                                      <div class="panel panel-default">
                                        <div class="panel-heading">   รายละเอียดผู้ใช้บริการ</div>
                                        <div class="panel-body">
                                          <label class="topic col-md-2" for="name">รหัส : </label>
                                          <label class="description col-md-10" for="name" id="CustomerID">C20161231-000001 </label>
                                          <br />
                                          <label class="topic col-md-2" for="name">ชื่อ : </label>
                                          <label class="description col-md-10" for="name" id="CustomerName">นายปฏิพัทธ์ ชิวปรีชา </label>
                                          <br />
                                          <label class="topic col-md-2" for="name">ที่อยู่ : </label>
                                          <label class="description col-md-10" for="name" id="CustomerAddress">109 หมู่ 6 ต.ห้วยม่วง อ.กำแพงแสน จ.นครปฐม  73180  </label>
                                          <br />
                                          <label class="topic col-md-2" for="name">Fax : </label>
                                          <label class="description col-md-10" id="CustomerFax">034-555888 </label>
                                          <br />
                                          <label class="topic col-md-2" for="name">โทรศัพท์: </label>
                                          <label class="description col-md-10" for="name" id="CustomerTell">090-8885555 </label>
                                          <br />
                                          <label class="topic col-md-2" for="name">Email : </label>
                                          <label class="description col-md-10" id="CustomerEmail">patipat.chewprecha@mail.kmutt.ac.th </label>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="panel-group">
                                      <div class="panel panel-default">
                                        <div class="panel-heading">   รายละเอียดตัวอย่าง</div>
                                        <div class="panel-body">
                                          <label class="topic col-sm-3" for="name">รหัส : </label>
                                          <label class="description col-md-9" for="name" id="ProductID">P20161231-000001 </label>
                                          <br />
                                          <label class="topic col-sm-3" for="name">ชื่อ : </label>
                                          <label class="description col-md-9" for="name" id="ProductName"> ปลาป่น</label>
                                          <br />
                                          <label class="topic col-sm-3" for="name">จำนวน : </label>
                                          <label class="description col-md-9" for="name" id="ProductAddress">20 ตัวอย่าง</label>
                                          <br />

                                          <label class="topic col-sm-3" for="name">เครื่องหมาย: </label>
                                          <label class="description col-md-9" for="name" id="ProductTell">ถุงสีดำแห้ง และใส่ซิบไว้</label>
                                          <br />
                                          <label class="topic col-sm-3" for="name">ออกใบเสร็จให้ : </label>
                                          <label class="description col-md-9" id="ProductEmail">นายปฏิพัทธ์ ชิวปรีชา</label>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                              </div>
                              <div class="col-md-12">
                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="table-responsive">
                                    <table class="table table-hover">
                                    <thead>
                                      <tr>
                                        <th>#</th>
                                        <th>รหัสตัวอย่างการวิเคราะห์</th>
                                        <th>รหัสหัวข้อการวิเคราะห์</th>
                                        <th>จำนวนตัวอย่าง</th>
                                        <th>ราคาต่อตัวอย่าง</th>
                                        <th>ค่าใช้จ่ายต่อรายการ</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                      </tr>
                                      <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                      </tr>
                                      <tr>
                                        <th scope="row">3</th>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                        <td>@twitter</td>
                                        <td>the Bird</td>
                                        <td>@twitter</td>
                                      </tr>
                                      <tr>
                                        <td colspan="5" align ="right">ค่าใช้จ่ายรวมสุทธิ</td>

                                        <td>11,250 บาท</td>
                                      </tr>

                                    </tbody>
                                  </table>
                                  </div>
                                  </div>
                                </div>
                              </div>
                          </div>
                          <div class="col-md-12">
                            <button type="button" id="activate-step-4" class="btn btn-info btn-block" name="button">บันทึกการรับการวิเคราะห์</button>
                          </div>
                      </div>
                      <div class="row setup-content" id="step-4">
                          <div class="col-xs-12 text-center">
                            <h1>บันทึกข้อมูลการรับตัวอย่างเสร็จสิ้น</h1>
                            <h1>รหัสการวิเคราะห์เลขที่  </h1>
                              <a href="" target="_blank" class="btn btn-outlined btn-primary btn-lg">ใบรายงานการรับตัวอย่าง</a>
                          </div>

                      </div>

                  </div>

                </div>



            </div><!-- .row -->
        </div><!-- .col-md-12 -->
    </div><!-- .page-content container-fluid -->


    <input type="hidden" id="storage_path" value="{{ storage_path() }}">


    <!-- Include our script files -->
    <script>
    $( document ).ready(function() {
      var navListItems = $('ul.setup-panel li a'),
        allWells = $('.setup-content');

    allWells.hide();

    navListItems.click(function(e)
    {
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

    // DEMO ONLY //
    $('#activate-step-1').on('click', function(e) {
        $('ul.setup-panel li:eq(2)').removeClass('disabled');
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

      var val = 0  + '%';
      var val_per = 0;

      $('#code').click(function () {
        if (val_per<100) {
          val_per += 10
          val = val_per + '%';
            $('.progress-bar').width(val).text(val)
        }

      })

    });
    </script>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <script src = ""{{ asset('js/bootstrap.js') }}""></script>
    <script src="{{ config('voyager.assets_path') }}/js/select2/select2.min.js"></script>
    <script src="{{ config('voyager.assets_path') }}/js/media/dropzone.js"></script>
    <script src="{{ config('voyager.assets_path') }}/js/media/media.js"></script>
    <script type="text/javascript">
        var media = new VoyagerMedia({
            baseUrl: "{{ route('voyager.dashboard') }}"
        });
        $(function () {
            media.init();
        });
    </script>
@stop
