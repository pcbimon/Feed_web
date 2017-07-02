<html><head><meta http-equiv="Content-Type" content="text/html;">
  <style>
    @page { margin: 180px 50px; }
    #header { position: fixed; left: 0px; top: -130px; right: 0px; height: 150px;  } .page:after { content: counter(page, decimal); }
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
              $y = 60;
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
      @foreach ($Receive as $element)
        Lab ID {{$element->analysid}} <br>
      @endforeach

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
      วันที่ {{$strDate}}
    </div>
    <div class="CustomerDetail">
      @foreach ($Customer as $element)
        <span style="display:inline-block; width: 60%;">ชื่อ-นามสกุล ผู้ส่งตัวอย่าง {{$element->name}}</span><span style="display:inline-block; width: 40%;">เบอร์โทรศัพท์ {{$element->telephone}}</span><br>
        <span style="display:inline-block; width: 30%;">ออกใบเสร็จในนาม</span><span style="display:inline-block; width: 50%;">ที่อยู่ {{$element->address}}</span>
      @endforeach
        </div>
    <table border="0px" width="100%">
      <tr>
        <th>ตัวอย่างส่งวิเคราะห์</th>
        <th>เครื่องหมายระบุตัวอย่าง</th>
        <th>Sample ID</th>
      </tr>
      @php
        $i = 0;
      @endphp
      @foreach ($GetProduct as $element1)
        <tr>
          <td>{{$element1->name}}</td>
          <td>{{$element1->syntax}}</td>
          <td>@php
            echo $psubid[$i];
            $i++;
          @endphp</td>
        </tr>
      @endforeach
      {{-- @for ($i = 0; $i < 4; $i++)
        <tr>
          <td>ขี้ไก่ {{$i+1}}</td>
          <td>ถุงซิบล๊อค</td>
          <td>{{$i+1}}/2560</td>
        </tr>
      @endfor --}}
    </table>
    <span style="display:inline-block; width: 100%;">ออกใบรายงานผลในนาม</span><br>
    <span style="display:inline-block; width: 100%;">รับผลการวิเคราะห์โดย
      <input type="checkbox" name="vehicle" value="Car"
      @for ($i = 0; $i < count($ReceiveBy); $i++)
        @if ($ReceiveBy[$i] == 'Self')
          checked
        @endif
      @endfor
      > รับผลเอง
      <input type="checkbox" name="vehicle" value="Car"
      @for ($i = 0; $i < count($ReceiveBy); $i++)
        @if ($ReceiveBy[$i] == 'Email')
          checked
        @endif
      @endfor
      > E-Mail
      <input type="checkbox" name="vehicle" value="Car"
      @for ($i = 0; $i < count($ReceiveBy); $i++)
        @if ($ReceiveBy[$i] == 'PostAddress')
          checked
        @endif
      @endfor
      > ไปรษณีย์ EMS (ชำระค่าบริการเพิ่ม 50บาท)
    </span><br>
    <span style="display:inline-block; width: 100%;">ออกรายงานผล
      <input type="checkbox" name="vehicle" value="Car"
      @for ($i = 0; $i < count($ReceiveLang); $i++)
        @if ($ReceiveLang[$i] == 'TH')
          checked
        @endif
      @endfor
      > ภาษาไทย หรือ
      <input type="checkbox" name="vehicle" value="Car"
      @for ($i = 0; $i < count($ReceiveLang); $i++)
        @if ($ReceiveLang[$i] == 'EN')
          checked
        @endif
      @endfor
      > ภาษาอังกฤษ  (หากต้องการมากกว่า 1 ฉบับ ต้องชำระค่าบริการเพิ่ม 100 บาท/ฉบับ)
    </span><br>
    <p style="page-break-before: always;"></p>
    {{-- BREAK PAGE --}}
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
        @php
          $total = 0;
          $summary = 0;
          // $no = 3;
        @endphp
        @foreach ($NumberReceive as $element)
          @foreach ($SubjectAnalysis as $item)
            <tr>
              <td>{{$item->name}}</td>
              <td><center>{{number_format(floatval($item->price))}}</center></td>
              <td><center>{{$element->no}}</center></td>
              <td><center>{{number_format($item->price * $element->no)}}</center></td>
              @php
                $total += $item->price * $element->no;
              @endphp
              <td>{{$item->operationname}}</td>
            </tr>
          @endforeach

        @endforeach

          <tr>
            <td colspan="3"><center>คิดเป็นเงินทั้งหมด</center></td>
            <td><center>{{number_format($total)}}</center></td>
            <td></td>
          </tr>
      </tbody>
    </table>
    <label class="bold">หมายเหตุ</label><input type="checkbox" name="vehicle"
    @for ($i = 0; $i < count($ReceiveOptional); $i++)
      @if ($ReceiveOptional[$i] == 'ตัวอย่างแห้งปกติจัดเก็บที่อุณหภูมิห้อง')
        checked
      @endif
    @endfor
    > ตัวอย่างแห้งปกติจัดเก็บที่อุณหภูมิห้อง
    <input type="checkbox" name="vehicle" value="Car"
    @for ($i = 0; $i < count($ReceiveOptional); $i++)
      @if ($ReceiveOptional[$i] == 'เก็บในตู้เย็น  8 องศา')
        checked
      @endif
    @endfor
    > เก็บในตู้เย็น  8 องศา
    <input type="checkbox" name="vehicle" value="Car"
    @for ($i = 0; $i < count($ReceiveOptional); $i++)
      @if ($ReceiveOptional[$i] == 'เก็บในตู้เย็นช่องแช่แข็ง 4 องศา')
        checked
      @endif
    @endfor
    > เก็บในตู้เย็นช่องแช่แข็ง 4 องศา
    <input type="checkbox" name="vehicle" value="Car"
    @for ($i = 0; $i < count($ReceiveOptional); $i++)
      @if ($ReceiveOptional[$i] == 'อื่น')
        checked
      @endif
    @endfor
    > อื่น <br>
    <div class="CustomerSign">
        ลงชื่อ........................................................ผู้ส่งตัวอย่าง <br>
        (...................................................................................)<br>
    </div>
    <hr>
    <p style="page-break-before: always;"></p>
    {{-- BREAK PAGE --}}
    <table class="table" border="1px" style="border-collapse: collapse;">
      <tbody>
        <tr>
          <td>
            <span style="display:inline-block; width: 100%;">เฉพาะเจ้าหน้าที่รับตัวอย่าง</span><br>
            <span style="display:inline-block; width: 50%;">ค่าวิเคราะห์</span><span style="display:inline-block; width: 50%;">เป็นเงิน {{number_format($total)}} บาท</span><br>
            <span style="display:inline-block; width: 50%;">ค่าเอกสารรายงานผล(มากกว่า 1ฉบับ)</span><span style="display:inline-block; width: 50%;">เป็นเงิน
              @for ($i = 0; $i < count($ReceiveLang); $i++)
                @if ($ReceiveLang[$i] == 'EN')
                  100
                  @php
                    $summary += 100;
                  @endphp
                @endif
              @endfor
               บาท</span><br>
            <span style="display:inline-block; width: 50%;">ค่าบริการส่ง EMS</span><span style="display:inline-block; width: 50%;">เป็นเงิน
              @for ($i = 0; $i < count($ReceiveBy); $i++)
                @if ($ReceiveBy[$i] == 'PostAddress')
                  50
                  @php
                    $summary += 50;
                  @endphp

                @endif
              @endfor
               บาท</span><br>
            <span style="display:inline-block; width: 50%;"></span><span style="display:inline-block; width: 50%;">รวมเงิน
              {{$total+$summary}}
               บาท</span>
          </td>
          <td>
            {{-- <br> --}}
            <span style="display:inline-block; width: 30%;">การชำระเงิน</span><span style="display:inline-block; width: 50%;"><input type="checkbox" name="vehicle" value="Car"
              @for ($i = 0; $i < count($ReceivePay); $i++)
                @if ($ReceivePay[$i] =='ชำระเงินสด')
                  checked
                @endif
              @endfor
              > ชำระเงินสด {{number_format($ReceiveAmount)}} บาท</span><br>
            <span style="display:inline-block; width: 30%;"></span><span style="display:inline-block; width: 50%;"><input type="checkbox" name="vehicle"
              @for ($i = 0; $i < count($ReceivePay); $i++)
                @if ($ReceivePay[$i] =='ธนาณัติ')
                  checked
                @endif
              @endfor
              > ธนาณัติ</span><br>
            <span style="display:inline-block; width: 30%;"></span><span style="display:inline-block; width: 50%;"><input type="checkbox" name="vehicle"
              @for ($i = 0; $i < count($ReceivePay); $i++)
                @if ($ReceivePay[$i] =='โอนเงิน')
                  checked
                @endif
              @endfor
              > โอนเงิน</span><br>
            <span style="display:inline-block; width: 100%;">ธนาคารไทยพาณิชย์ สาขาย่อยกำแพงแสน (ม.เกษตรศาสตร์)<br>เลขที่บัญชี 769-200001-0 ชื่อบัญชี ม.เกษตรศาสตร์ วิทยาเขตกำแพงแสน</span><br>
            <span style="display:inline-block; width: 100%;"><input type="checkbox" name="vehicle"
              @for ($i = 0; $i < count($ReceivePay); $i++)
                @if ($ReceivePay[$i] =='ค้างชำระ')
                  checked
                @endif
              @endfor
              >ค้างชำระ {{number_format($ReceiveAmount)}} บาท (เฉพาะนิสิต/บุคลากรภาควิชา)</span><br>
            <span style="display:inline-block; width: 100%; text-align:right;">ลงชื่อ.................................................ผู้รับตัวอย่าง</span><br><br>
          </td>
        </tr>
        <tr>
          <td>
            <label class="bold">การส่งตัวอย่างวิเคราะห์ทางไปรษณีย์</label><br>
            <div class="row">
              1. กรอกรายละเอียดในใบรับตัวอย่างให้ครบถ้วน ชัดเจน(สามารถดาวน์โหลดได้ ในเวปไซต์มก.กพส.)
            </div>
            <div class="row">
              2. แนบเอกสารใบส่งตัวอย่าง และเอกสารหลักฐานการโอนชำระค่าวิเคราะห์ หรือธนาณัติ มาพร้อมกับตัวอย่างที่ส่งวิเคราะห์
            </div>
            <div class="row">
              3. ห้องปฏิบัติการวิเคราะห์อาหารสัตว์ ภาควิชาสัตวบาล  คณะเกษตร มหาวิทยาลัยเกษตรศาสตร์ วิทยาเขตกำแพงแสน อ.กำแพงแสน จ.นครปฐม 73140
            </div>
            <div class="row">
              4. ติดต่อสอบถาม คุณวรรณี ชิวปรีชา E-mail:agrwnc@ku.ac.th หรือ คุณทิพรดา ทักษิณานันท์ E-mail:fagrtdt@ku.ac.th โทร 080-922-1060
            </div>
            {{-- <br> --}}
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


  </div>

</body></html>
