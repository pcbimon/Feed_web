{{-- <html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <style>
    @page { margin-top: 5px; }
    body { margin-top: 5px;}
    @font-face {
        font-family: 'THSarabunNew';-
        font-style: normal;
        font-weight: normal;
        src: url("http://127.0.0.1/fonts/THSarabunNew.ttf") format('truetype');
    }
    @font-face {
        font-family: 'THSarabunNew';
        font-style: normal;
        font-weight: bold;
        src: url("http://127.0.0.1/fonts/THSarabunNew Bold.ttf") format('truetype');
    }
    @font-face {
        font-family: 'THSarabunNew';
        font-style: italic;
        font-weight: normal;
        src: url("http://127.0.0.1/fonts/THSarabunNew Italic.ttf") format('truetype');
    }
    @font-face {
        font-family: 'THSarabunNew';
        font-style: italic;
        font-weight: bold;
        src: url("http://127.0.0.1/fonts/THSarabunNew BoldItalic.ttf") format('truetype');
    }
    h1 { font-family:  'THSarabunNew';
                color: blue;
              font-weight: italic;font-style: italic;
    }
    #header { position: fixed; left: 0px; top: 10px; right: 0px; height: 150px;}
    #footer { position: fixed; left: 0px; bottom: 10px; right: 0px; height: 150px; background-color: lightblue; }
    #footer .page:after { content: counter(page, upper-roman); }

    .Department{
      padding-left: 0%;
      font-weight: bold;
      font-size:18px;
    }
    .HeaderTitle{
      padding-left: 0%;
      font-weight: normal;
      font-size:16px;
    }
    .ReportTitle{
      text-align: center;
      font-weight: bold;
      font-size:18px;
    }
    .ReportTag{
      text-align: right;
      float: right;
      /*margin-top: 10%;*/
    }
    .ReportDate{
      padding-left: 50%;
      font-weight: normal;
      font-size:16px;
    }
    .AgrLogo{
      float: left;
    }
    .PageNumber{
      text-align: right;
      float: right;
    }
</style>

</head>
<body>
  <div id="header">
    <div class="AgrLogo">
      <img src="https://image.ibb.co/cuwXTQ/agr_logo.jpg" alt="agr_logo" border="0" width="100px" height="100px">
    </div>
    <div class="ReportTag">
      FM-001
    </div>
    <div class="Department">
      ฝ่ายปฏิบัติการวิเคราะห์อาหารสัตว์ <br></div>
    </div>
    <div class="PageNumber">
      หน้า....ของ....หน้า
    </div>
    <div class="HeaderTitle">
      ภาควิชาสัตวบาล คณะเกษตร กำแพงแสน มหาวิทยาลัยเกษตรศาสตร์ วิทยาเขตกำแพงแสน<br>โทร 034 351 892   034-281428  ต่อ 113  Fax. 034-351892
    </div>
    <div class="ReportTitle">
      ใบส่งตัวอย่างวิเคราะห์โภชนะในวัตถุดิบและอาหารสัตว์
    </div>

    <div class="ReportDate">
      วันที่......เดือน.......พ.ศ.......
    </div>
  </div>
  <div id="footer">
    <p class="page">Page </p>
  </div>
  <div id="content">
    <p>the first page</p>
    <p style="page-break-before: always;">the second page</p>
  </div>

</body>
</html> --}}
<html><head><meta http-equiv="Content-Type" content="text/html;">
  <style>
    @page { margin: 180px 50px; }
    #header { position: fixed; left: 0px; top: -180px; right: 0px; height: 150px;  } .page:after { content: counter(page, decimal); }
    #footer { position: fixed; left: 0px; bottom: -180px; right: 0px; height: 50px; }
    #footer .page:after { content: counter(page, decimal); }
    .ReportTag{
      text-align: right;
      float: right;
    }
    .Department{
      font-weight: bold;
      font-size:18px;
    }
    .PageNumber{
      text-align: right;
      float: right;
    }
    .ReportTitle{
      padding-left: 18%;
      font-weight: bold;
      font-size:18px;
    }
    .LabID{
      font-size:18px;
      font-weight: bold;
      float: right;
    }
    .ReportDate{
      padding-left: 50%;
    }
    .underline-bold{
      font-weight: bold;
      text-decoration: underline;
    }
    .CustomerSign{
      text-align: right;
    }
    .bold{
      font-weight: bold;
    }
    .StaffLeft{
      /*float: left;*/
      padding-left: 10px;
      border: 2px solid #000000;
      width: 337px;
    }
    .StaffRight{
      float: right;
      padding-left: 10px;
      border: 2px solid #000000;
      width: 49%;
    }
    .StaffRight2{
      float: right;
      padding-left: 10px;
      border: 2px solid #000000;
      width: 49%;
    }
    td, th {
      vertical-align:top;
      padding-left:10px;
    }
  </style>
</head><body>
  <div id="header">
    <img src="https://image.ibb.co/cuwXTQ/agr_logo.jpg" style="float:left" alt="agr_logo" border="0" width="100px" height="100px">
    <div class="ReportTag">FM-001</div>
    <div class="Department">
      ฝ่ายปฏิบัติการวิเคราะห์อาหารสัตว์ <br>
    </div>
    <div class="PageNumber">
      <script type="text/php">
          if ( isset($pdf) ) {
              $x = 509;
              $y = 23;
              $text = "หน้า {PAGE_NUM} ของ {PAGE_COUNT} หน้า";
              $font = $fontMetrics->get_font("THSarabunNew", "normal");
              $size = 13;
              $color = array(0,0,0);
              $word_space = 0.0;  //  default
              $char_space = 0.0;  //  default
              $angle = 0.0;   //  default
              $pdf->page_text($x, $y, $text, $font, $size, $color, $word_space, $char_space, $angle);
          }
      </script>
      {{-- หน้า ..... ของ....หน้า --}}
    </div>
    <div class="HeaderTitle">
      ภาควิชาสัตวบาล คณะเกษตร กำแพงแสน มหาวิทยาลัยเกษตรศาสตร์ วิทยาเขตกำแพงแสน<br>โทร 034 351 892   034-281428  ต่อ 113  Fax. 034-351892
    </div>
    <div class="LabID">
      Lab ID....... <br>เลขปฏิบัติการ.......
    </div>
    <div class="ReportTitle">
      ใบส่งตัวอย่างวิเคราะห์โภชนะในวัตถุดิบและอาหารสัตว์
    </div>
  </div>
  <div id="footer">
    บังคับใช้วันที่ 29/03/2560
    {{-- <p class="page">Page </p> --}}
  </div>
  <div id="content">
    <div class="ReportDate">
      วันที่......................เดือน....................................พ.ศ................................
    </div>
    <div class="CustomerDetail">
      <span style="display:inline-block; width: 60%;">ชื่อ-นามสกุล ผู้ส่งตัวอย่าง</span><span style="display:inline-block; width: 40%;">เบอร์โทรศัพท์</span><br>
      <span style="display:inline-block; width: 30%;">ออกใบเสร็จในนาม</span><span style="display:inline-block; width: 50%;">ที่อยู่</span>
    </div>
    <table border="0px" width="100%">
      <tr>
        <th>ตัวอย่างส่งวิเคราะห์</th>
        <th>เครื่องหมายระบุตัวอย่าง</th>
        <th>Sample ID</th>
      </tr>
      @for ($i = 0; $i < 4; $i++)
        <tr>
          <td>ขี้ไก่ {{$i+1}}</td>
          <td>ถุงซิบล๊อค</td>
          <td>{{$i+1}}/2560</td>
        </tr>
      @endfor
    </table>
    <span style="display:inline-block; width: 100%;">ออกใบรายงานผลในนาม</span><br>
    <span style="display:inline-block; width: 100%;">รับผลการวิเคราะห์โดย
      <input type="checkbox" name="vehicle" value="Car" checked> รับผลเอง
      <input type="checkbox" name="vehicle" value="Car" checked> E-Mail
      <input type="checkbox" name="vehicle" value="Car" checked> ไปรษณีย์ EMS (ชำระค่าบริการเพิ่ม 50บาท)
    </span><br>
    <span style="display:inline-block; width: 100%;">ออกรายงานผล
      <input type="checkbox" name="vehicle" value="Car" checked> ภาษาไทย หรือ
      <input type="checkbox" name="vehicle" value="Car" checked> ภาษาอังกฤษ  (หากต้องการมากกว่า 1 ฉบับ ต้องชำระค่าบริการเพิ่ม 100 บาท/ฉบับ)
    </span><br>
    <table class="table" border="1" style="border-collapse: collapse;" width="100%">
      <thead>
        <tr>
          <th>รายการวิเคราะห์</th>
          <th>ราคา/ตัวอย่าง(บาท)</th>
          <th>จำนวนตัวอย่าง</th>
          <th>เป็นเงิน(บาท)</th>
          <th>วิธีวิเคราะห์</th>
        </tr>
      </thead>
      <tbody>
        {{-- {{$data}} --}}
        @foreach ($SubjectAnalysis as $item)
          <tr>
            <td>{{$item->name}}</td>
            <td><center>{{$item->price}}</center></td>
            <td><center>{{$item->price}}</center></td>
            <td><center>{{$item->price}}</center></td>
            <td>{{$item->operationname}}</td>
          </tr>
        @endforeach
          <tr>
            <td colspan="3"><center>คิดเป็นเงินทั้งหมด</center></td>
            <td></td>
            <td></td>
          </tr>
      </tbody>
    </table>
    <label class="underline-bold">หมายเหตุ</label><input type="checkbox" name="vehicle" value="Car" checked> ตัวอย่างแห้งปกติจัดเก็บที่อุณหภูมิห้อง
    <input type="checkbox" name="vehicle" value="Car" checked> เก็บในตู้เย็น  8 องศา
    <input type="checkbox" name="vehicle" value="Car" checked> เก็บในตู้เย็นช่องแช่แข็ง4 องศา
    <input type="checkbox" name="vehicle" value="Car" checked> อื่น <br>
    <div class="CustomerSign">
        ลงชื่อ........................................................ผู้ส่งตัวอย่าง <br>
        (...................................................................................)<br>
    </div>
    <hr>
    <table class="table" border="1px" style="border-collapse: collapse;">
      <tbody>
        <tr>
          <td>
            <span style="display:inline-block; width: 100%;">เฉพาะเจ้าหน้าที่รับตัวอย่าง</span><br>
            <span style="display:inline-block; width: 50%;">ค่าวิเคราะห์</span><span style="display:inline-block; width: 50%;">เป็นเงิน ..... บาท</span><br>
            <span style="display:inline-block; width: 50%;">ค่าเอกสารรายงานผล(มากกว่า 1ฉบับ)</span><span style="display:inline-block; width: 50%;">เป็นเงิน ..... บาท</span><br>
            <span style="display:inline-block; width: 50%;">ค่าบริการส่ง EMS</span><span style="display:inline-block; width: 50%;">เป็นเงิน ..... บาท</span><br>
            <span style="display:inline-block; width: 50%;"></span><span style="display:inline-block; width: 50%;">รวมเงิน ..... บาท</span>

          </td>
          <td>
            {{-- <br> --}}
            <span style="display:inline-block; width: 30%;">การชำระเงิน</span><span style="display:inline-block; width: 50%;"><input type="checkbox" name="vehicle" value="Car"> ชำระเงินสด.................บาท</span><br>
            <span style="display:inline-block; width: 30%;"></span><span style="display:inline-block; width: 50%;"><input type="checkbox" name="vehicle" value="Car"> ธนาณัติ.................บาท</span><br>
            <span style="display:inline-block; width: 30%;"></span><span style="display:inline-block; width: 50%;"><input type="checkbox" name="vehicle" value="Car"> โอนเงิน.................บาท</span><br>
            <span style="display:inline-block; width: 100%;">ธนาคารไทยพาณิชย์ สาขาย่อยกำแพงแสน (ม.เกษตรศาสตร์)<br>เลขที่บัญชี 769-200001-0 ชื่อบัญชี ม.เกษตรศาสตร์ วิทยาเขตกำแพงแสน</span><br>
            <span style="display:inline-block; width: 100%;"><input type="checkbox" name="vehicle" value="Car">ค้างชำระ.............................................บาท (เฉพาะนิสิต/บุคลากรภาควิชา)</span><br>
            <span style="display:inline-block; width: 100%; text-align:right;">ลงชื่อ.................................................ผู้รับตัวอย่าง</span><br><br>
          </td>
        </tr>
        <tr>
          <td>
            <label class="bold">การส่งตัวอย่างวิเคราะห์ทางไปรษณีย์</label><br>
            <span style="display:inline-block; width: 100%;">1. กรอกรายละเอียดในใบรับตัวอย่างให้ครบถ้วน ชัดเจน(สามารถดาวน์โหลดได้ ในเวปไซต์มก.กพส.)</span><br>
            <span style="display:inline-block; width: 100%;">2. แนบเอกสารใบส่งตัวอย่าง และเอกสารหลักฐานการโอนชำระค่าวิเคราะห์ หรือธนาณัติ มาพร้อมกับตัวอย่างที่ส่งวิเคราะห์</span><br>
            <span style="display:inline-block; width: 100%;">3. ห้องปฏิบัติการวิเคราะห์อาหารสัตว์ ภาควิชาสัตวบาล  คณะเกษตร มหาวิทยาลัยเกษตรศาสตร์ วิทยาเขตกำแพงแสน อ.กำแพงแสน จ.นครปฐม 73140</span><br>
            <span style="display:inline-block; width: 100%;">4. ติดต่อสอบถาม คุณวรรณี ชิวปรีชา E-mail:agrwnc@ku.ac.th หรือ คุณทิพรดา ทักษิณานันท์ E-mail:fagrtdt@ku.ac.th โทร 080-922-1060</span><br>
            <br>
          </td>
          <td>
            <label class="bold">เจ้าหน้าที่การเงิน</label><br>
            <span style="display:inline-block; width: 100%;">เลขที่ใบเสร็จ....................................ลงวันที่...............................................</span><br>
            <br><center>
              <span style="display:inline-block; width: 100%;">ลงชื่อ.........................................ผู้รับเงิน</span>
            </center><br>
            <center>
              <span style="display:inline-block; width: 100%;">(…………………………….………………………)</span>
            </center><br>
          </td>
        </tr>
      </tbody>
    </table>
    {{-- <p>the first page</p> --}}

    {{-- <p style="page-break-before: always;">the second page</p> --}}
  </div>

</body></html>
