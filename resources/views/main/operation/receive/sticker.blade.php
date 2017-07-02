
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
      @page {
        size: 288pt 180pt;
        margin:10px;
        font-size: 12px;
      }
      .QR{
        float: right;
        padding-right: 10%;
        width: 25%;
        /*background-color: #0099cc;*/
      }
      .content{
        float: left;
        width: 75%;
      }

    </style>
  </head>
  <body>
    @foreach ($NumberReceive as $element)
      @php
        $pagenum = $element->no;
      @endphp
    @endforeach
    @php
    $numItems = count($ReceiveDetail);
    $i = 0;
    @endphp
      @foreach ($ReceiveDetail as $element)
        <span style="display:inline-block; width: 50%;"><center>Lab 1</center></span><span style="display:inline-block; width: 50%;"><center>Lab 2</center></span><br>
        <div class="QR">
          <img src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->generate($element->psubid))!!} " width="72pt" height="72pt" style="border:1px solid #021a40;"><br>รหัสตัวอย่าง {{$element->psubid}}
        </div><br>
        <div class="content">
          รหัสตัวอย่าง {{$element->psubid}}<br>
          ชื่อตัวอย่าง {{$element->name}}<br>
          รายการวิเคราะห์ {{$element->subject}}<br>
          วันที่รับตัวอย่าง {{$element->created_at->format('d-m-Y')}} <br>
          ลักษณะทางกายภาพ สด แห้ง อื่นๆ..........<br>
          เก็บรักษา {{$element->ReceiveOptional}}<br>
        </div>
        @php
        if(++$i === $numItems) {

        }else {
          echo '<p style="page-break-before: always;"></p>';
          // {{-- BREAK PAGE --}}
        }
        @endphp

      @endforeach




  </body>
</html>
