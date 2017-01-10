<!DOCTYPE html>
<html lang="en">

@extends('index.header')
<body id="page-top" class="index">

  <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
      <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header page-scroll">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                  <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
              </button>
              <a class="navbar-brand" href="#page-top">Feed Analysis Lab</a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">
                  <li class="hidden">
                      <a href="#page-top"></a>
                  </li>
                  <li class="page-scroll">
                      <a href="#portfolio">Organizational</a>
                  </li>
                  <li class="page-scroll">
                      <a href="#about">About</a>
                  </li>

                  <li class="page-scroll">
                      <a href="{{ url('admin/login') }}" target="_blank">Login</a><!--{{ url('admin') }}-->
                  </li>
              </ul>
          </div>
          <!-- /.navbar-collapse -->
      </div>
      <!-- /.container-fluid -->
  </nav>


    <!-- Header -->
    <header>
        <div class="container">
            <div class="row">
                <img class="img-responsive" src="img/profile.png" width="30%" height="30%" alt="">
                <div class="col-md-12">

                    <div class="intro-text">
                        <span class="name">Feed Analysis Laboratory Animal Science KPS</span>
                        <hr class="star-light">
                        <span class="skills"><descripthead>Management System for Feed Analysis</descripthead></span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Feed Analysis Laboratory Animal Science</h2><h4>Organization Sturcture</h4>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                      <center><img class="card-img-top img-circle" width="250px" height="250px" src="img/SectionRecieve.jpg" alt="Card image cap"></center>
                      <div class="card-block">
                        <h4 class="card-title"><descriptcard><center>หน่วยรับตัวอย่าง</center></descriptcard></h4>
                        <p class="card-text text-center"><descriptcard>การบริการรับตัวอย่าง วัตถุดิบ และอาหารสัตว์ <br>ติดต่อสอบถามข้อมูล</descriptcard></p>
                        <center><a href="#" class="btn btn-primary" data-toggle="modal" data-target="#portfolioModal1">รายละเอียด</a></center>
                      </div>
                    </div>
                    <br />
                </div>
                <div class="col-md-4">
                    <div class="card">
                      <center><img class="card-img-top img-circle" width="250px" height="250px" src="img/SectionAnalysis.jpg" alt="Card image cap"></center>
                      <div class="card-block">
                        <h4 class="card-title"><descriptcard><center>หน่วยปฏิบัติการวิเคราะห์</center></descriptcard></h4>
                          <p class="card-text text-center"><descriptcard>การตรวจสอบทางกายภาพ เคมี และชีวภาพในวัตถุดิบและอาหารสัตว์</descriptcard></p>

                        <center><a href="#" class="btn btn-primary" data-toggle="modal" data-target="#portfolioModal2">รายละเอียด</a></center>
                      </div>
                    </div>
                    <br />
                </div>
                <div class="col-md-4">
                    <div class="card">
                      <center><img class="card-img-top img-circle" width="250px" height="250px" src="img/SectionInspec.jpg" alt="Card image cap"></center>
                      <div class="card-block">
                        <h4 class="card-title"><descriptcard><center>หน่วยตรวจสอบและควบคุม</center></descriptcard></h4>

                        <p class="card-text text-center"><descriptcard>การควบคุมคุณภาพและการตรวจสอบผลวิเคราะห์</descriptcard></p>

                        <center><a href="#" class="btn btn-primary" data-toggle="modal" data-target="#portfolioModal3">รายละเอียด</a></center>
                      </div>
                    </div>
                    <br />
                </div>
            </div>
        </div>
    </section>

    <!-- หน่วยรับการวิเคราะห์ Modals -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>หน่วยรับตัวอย่าง</h2>
                            <hr class="star-primary">
                            <img src="img/SectionRecieve.jpg"  width="250px" height="250px" class="img-responsive img-centered img-circle" alt="">
                            <p>การบริการรับตัวอย่าง วัตถุดิบ และอาหารสัตว์ ติดต่อสอบถามข้อมูล</p>
                            <br>

                            <h3>สำหรับผู้ใช้บริการ</h3>
                            <hr class="star-primary">
                            <ul class="list-inline item-details">

                                <li>
                                  <a href="pdf/ServiceRecieveForm.pdf" target="_blank" class="btn btn-outlined btn-primary">ใบขอรับการวิเคราะห์</a>
                                </li>
                                <li>
                                    <a href="pdf/ServicePrice.pdf" target="_blank" class="btn btn-outlined btn-primary">ราคารายการวิเคราะห์</a>
                                </li>

                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- หน่วยรับการวิเคราะห์ Modals -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>หน่วยวิเคราะห์ตัวอย่าง</h2>
                            <hr class="star-primary">
                            <img src="img/SectionAnalysis.jpg"  width="250px" height="250px" class="img-responsive img-centered img-circle" alt="">
                            <p>การตรวจสอบทางกายภาพ เคมี และชีวภาพในวัตถุดิบและอาหารสัตว์</p>
                            <br>

                            <h3>สำหรับเจ้าหน้าที่วิเคราะห์</h3>
                            <hr class="star-primary">
                            <ul class="list-inline item-details">

                              <!--<li>
                                <a href="pdf/ServiceRecieveForm.pdf" class="btn btn-outlined btn-primary">ใบขอรับการวิเคราะห์</a>
                              </li>
                              <li>
                                  <a href="pdf/ServicePrice.pdf" class="btn btn-outlined btn-primary">ราคารายการวิเคราะห์</a>
                              </li>-->

                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- หน่วยรับการวิเคราะห์ Modals -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>หน่วยตรวจสอบและควบคุม</h2>
                            <hr class="star-primary">
                            <img src="img/SectionInspec.jpg"  width="250px" height="250px" class="img-responsive img-centered img-circle" alt="">
                            <p>การควบคุมคุณภาพและการตรวจสอบผลวิเคราะห์</p>
                            <br>

                            <h3>สำหรับผู้ควบคุมห้องปฏิบัติการ</h3>
                            <hr class="star-primary">
                            <ul class="list-inline item-details">

                              <!--<li>
                                <a href="pdf/ServiceRecieveForm.pdf" class="btn btn-outlined btn-primary">ใบขอรับการวิเคราะห์</a>
                              </li>
                              <li>
                                  <a href="pdf/ServicePrice.pdf" class="btn btn-outlined btn-primary">ราคารายการวิเคราะห์</a>
                              </li>-->

                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="success" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>About</h2>
                    <hr class="star-light">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-2">
                    <p>ห้องฏิบัติการวิเคราะห์อาหารสัตว์ ภาควิชาสัตวบาล คณะเกษตร กำแพงแสน มหาวิทยาลัยเกษตรศาสตร์ วิทยาเขตกำแพงแสน เปิดให้บริการวิเคราะห์วัตถุดิบและอาหารสัตว์</p>
                </div>
                <div class="col-lg-4">
                    <p>ให้บริการกับบุคคลทั่วไป เกษตรกร นักวิจัยภาครัฐและภาคเอกชน เปิดบริการทุกวันในวันและเวลาราชการ <br>ติดต่อสอบถามที่เบอร์ <br> 034-351892 , 090-6499811</p>
                </div>
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <audio autoplay controls loop>

                    <source src="http://www.rdpb.go.th/RDPB/Upload/Download/04%20%E0%B9%80%E0%B8%81%E0%B8%A9%E0%B8%95%E0%B8%A3%E0%B8%A8%E0%B8%B2%E0%B8%AA%E0%B8%95%E0%B8%A3%E0%B9%8C.mp3" type="audio/mpeg" />
                    <a href="http://www.rdpb.go.th/RDPB/Upload/Download/04%20%E0%B9%80%E0%B8%81%E0%B8%A9%E0%B8%95%E0%B8%A3%E0%B8%A8%E0%B8%B2%E0%B8%AA%E0%B8%95%E0%B8%A3%E0%B9%8C.mp3">เกษตรศาสตร์</a>
                </audio>
                </div>

            </div>
        </div>
    </section>




    <!-- Footer -->
    <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4">
                        <h3>Location</h3>
                        <p>ห้องฏิบัติการวิเคราะห์อาหารสัตว์ <br>ภาควิชาสัตวบาล คณะเกษตรกำแพงแสน มหาวิทยาลัยเกษตรศาสตร์<br>วิทยาเขตกำแพงแสน <br />อ.กำแพงแสน จ.นครปฐม

                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Contact</h3>
                        <ul class="list-inline">

                            <li>
                                <a href="mailto:agrwnc@ku.ac.th" class="btn-social btn-outline"><i class="fa fa-fw fa-envelope"></i></a>
                            </li>
                            <li>
                                <a href="callto:034351892" class="btn-social btn-outline"><i class="fa fa-fw fa-phone"></i></a>
                            </li>


                        </ul>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Map</h3>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d967.7276100558335!2d99.97247972918734!3d14.023322799385767!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e2fedceca90e25%3A0xd3a99b51316e7c7c!2z4Lir4LmJ4Lit4LiH4Lib4LiP4Li04Lia4Lix4LiV4Li04LiB4Liy4Lij4Lin4Li04LmA4LiE4Lij4Liy4Liw4Lir4LmM4Lit4Liy4Lir4Liy4Lij4Liq4Lix4LiV4Lin4LmM!5e0!3m2!1sth!2sth!4v1482563937867" width="400" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; MSFA 2016
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>


    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/freelancer.min.js"></script>

</body>

</html>
