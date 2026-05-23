<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--ส่วนที่เรามองเห็นได้ ของหน้าเว็บ-->
  <meta name="description" content="วิทยาลัยเทคนิคเทิง"><!-- คำอธิบาย-->
  <meta name="author" content="Phongpun Kajina"> <!-- ชื่อผู้พัฒนา-->
  <meta name="keywords" content="วิทยาลัยเทคนิคเทิง">
  <title>ข้อมูลนักเรียนนักศึกษา-วิทยาลัยเทคนิคเทิง</title>

  <link rel="icon" href="img/logo.png">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather:400,900,900i">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="css/loadding.css">
  <link rel="stylesheet" href="css/Navber.css">
  <link rel="stylesheet" href="css/card-slider.css" />
  <link rel="stylesheet" href="css/footer.css">
  <link rel="stylesheet" href="css/News.css">
  <link rel="stylesheet" href="css/popup.css">

  <style>
    body {
      margin-top: 150px;
      margin-left: 10px;
      font-family: "Sarabun", Helvetica, Arial, sans-serif;
      font-size: 14px;
      /* -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
      -webkit-text-size-adjust: none;
      box-sizing: border-box;
      
      
      line-height: 1.42857143;
      color: #333;
      background-color: #fff;
      min-height: 100%;
      -webkit-font-smoothing: antialiased;
      
      font-weight: 400;
      overflow-x: hidden;
      overflow-y: auto;*/

    }

    /* Reset พื้นฐาน */
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    /* ตารางหลัก */
    .table {
      width: 100%;
      border-collapse: collapse;
      font-family: "Tahoma", sans-serif;
    }

    /* หัวตาราง */
    .table th,
    .table td {
      padding: 10px;
      border: 1px solid #ddd;
    }

    /* หัวข้อ */
    .table thead th {
      background-color: #800000;
      color: #fff;
      text-align: center;
    }

    /* ลายสลับ */
    .table-striped tbody tr:nth-child(even) {
      background-color: #f9f9f9;
    }

    /* Hover */
    .table-hover tbody tr:hover {
      background-color: #f0f0f0;
      transition: 0.3s;
    }

    /* จัดตำแหน่ง */
    .text-center {
      text-align: center;
    }

    .text-bold {
      font-weight: bold;
    }

    /* หัวเรื่อง */
    .table-title {
      text-align: center;
      font-size: 1.5rem;
      padding: 15px;
    }

    /* 🔽 Responsive สำหรับ Tablet */
    @media (max-width: 992px) {

      .table th,
      .table td {
        padding: 8px;
        font-size: 0.9rem;
      }
    }

    /* 🔽 Responsive สำหรับ Mobile */
    @media (max-width: 768px) {

      .table thead {
        display: none;
        /* ซ่อนหัวตาราง */
      }

      .table,
      .table tbody,
      .table tr,
      .table td {
        display: block;
        width: 100%;
      }

      .table tr {
        margin-bottom: 15px;
        border: 1px solid #ddd;
        padding: 10px;
        background: #fff;
      }

      .table td {
        text-align: right;
        padding-left: 50%;
        position: relative;
      }

      .table td::before {
        content: attr(data-label);
        position: absolute;
        left: 10px;
        width: 50%;
        text-align: left;
        font-weight: bold;
      }
    }
  </style>
</head>

<body>
  <?php include 'header.php'; ?> <!-- เรียกใช้ หัวเว็บ-->
  <!-- ส่วนเนื้อหา -->
  <div>

    <table align="center" border="0" cellpadding="0" cellspacing="0" class="table table-striped table-hover">
      <tbody>
        <tr>
          <td colspan="6"><b><big>บทสรุปข้อมูลนักเรียน ระดับ ชั้น ปวช.1 </big><b></b></b></td>
        </tr>
        <tr>
          <td width="10%" align="center"><b>ระดับชั้น</b></td>
          <td width="30%"><b>สาขาวิชา</b></td>
          <td width="30%"><b>สาขางาน</b></td>
          <td width="10%" align="center"><b>ชาย</b></td>
          <td width="10%" align="center"><b>หญิง</b></td>
          <td width="10%" align="center"><b>รวม</b></td>

          <!-- ปวช.1 -->
          <!-- ช่างยนต์-->
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" style="">
          <td align="center"><b>ปวช.1</b></td>
          <td><b>ช่างยนต์</b></td>
          <td><b>ช่างยนต์</b></td>
          <td align="center"><b>45</b></td>
          <td align="center"><b>1</b></td>
          <td align="center"><b>46</b></td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" style="">
          <td align="center"></td>
          <td>682010405</td>
          <td>ช่างยนต์ (ชย.1/1A) </td>
          <td align="center">16</td>
          <td align="center">0</td>
          <td align="center">16</td>

        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" style="">
          <td align="center"></td>
          <td>682010405</td>
          <td>ช่างยนต์ (ชย.1/1B) </td>
          <td align="center">15</td>
          <td align="center">1</td>
          <td align="center">16</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" style="">
          <td align="center"></td>
          <td>682010405</td>
          <td>ช่างยนต์ (ชย.1/2A) </td>
          <td align="center">17</td>
          <td align="center">0</td>
          <td align="center">17</td>
        </tr>

        <!-- ช่างกล-->
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" style="">
          <td align="center"><b>ปวช.1</b></td>
          <td><b>ช่างกลโรงงาน</b></td>
          <td><b>ช่างกลโรงงาน</b></td>
          <td align="center"><b>8</b></td>
          <td align="center"><b>0</b></td>
          <td align="center"><b>8</b></td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" style="">
          <td align="center"></td>
          <td>682010201</td>
          <td>ช่างกลโรงงาน (ชก.1/1) </td>
          <td align="center">8</td>
          <td align="center">0</td>
          <td align="center">8</td>
        </tr>

        <!-- ช่างไฟฟ้า-->
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" style="">
          <td align="center"><b>ปวช.1</b></td>
          <td><b>ช่างไฟฟ้า</b></td>
          <td><b>ช่างไฟฟ้า</b></td>
          <td align="center"><b>31</b></td>
          <td align="center"><b>1</b></td>
          <td align="center"><b>32</b></td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" style="">
          <td align="center"></td>
          <td>682010601</td>
          <td>ช่างไฟฟ้า (ชฟ.1/1A) </td>
          <td align="center">16</td>
          <td align="center">0</td>
          <td align="center">16</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" style="">
          <td align="center"></td>
          <td>682010601</td>
          <td>ช่างไฟฟ้า (ชฟ.1/1B) </td>
          <td align="center">15</td>
          <td align="center">1</td>
          <td align="center">16</td>
        </tr>

        <!-- ช่างอิเล็กทรอนิกส์-->
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" style="">
          <td align="center"><b>ปวช.1</b></td>
          <td><b>ช่างอิเล็กทรอนิกส์</b></td>
          <td><b>ช่างอิเล็กทรอนิกส์</b></td>
          <td align="center"><b>4</b></td>
          <td align="center"><b>6</b></td>
          <td align="center"><b>10</b></td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>682010301</td>
          <td>ช่างอิเล็กทรอนิกส์ (ชอ.1/1) </td>
          <td align="center">4</td>
          <td align="center">6</td>
          <td align="center">10</td>
        </tr>

        <!-- ช่างก่อสร้าง-->
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"><b>ปวช.1</b></td>
          <td><b>ช่างก่อสร้าง</b></td>
          <td><b>ช่างก่อสร้าง</b></td>
          <td align="center"><b>10</b></td>
          <td align="center"><b>1</b></td>
          <td align="center"><b>11</b></td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>682190901</td>
          <td>ช่างก่อสร้าง(ชส.1/1) </td>
          <td align="center">10</td>
          <td align="center">1</td>
          <td align="center">11</td>
        </tr>

        <!-- บัญชี-->
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"><b>ปวช.1</b></td>
          <td><b>สาขาวิชาการบัญชี</b></td>
          <td><b>สาขาวิชาการบัญชี</b></td>
          <td align="center"><b>1</b></td>
          <td align="center"><b>13</b></td>
          <td align="center"><b>14</b></td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>682010401</td>
          <td>การบัญชี ( บช. 1/1 ) </td>
          <td align="center">1</td>
          <td align="center">13</td>
          <td align="center">14</td>
        </tr>
        
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"><b>ปวช.1</b></td>
          <td><b>เทคโนโลยีธุรกิจดิจิทัล</b></td>
          <td><b>เทคโนโลยีธุรกิจดิจิทัล</b></td>
          <td align="center"><b>7</b></td>
          <td align="center"><b>8</b></td>
          <td align="center"><b>15</b></td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>682010101</td>
          <td>ช่างยนต์/1 ( ธด. 1/1 ) </td>
          <td align="center">7</td>
          <td align="center">8</td>
          <td align="center">15</td>
        </tr>
        
      </tbody>
    </table>

    <table align="center" border="0" cellpadding="0" cellspacing="0" class="table table-striped table-hover">
      <tbody>
        <tr>
          <td colspan="6"><b><big>บทสรุปข้อมูลนักเรียน ระดับ ชั้น ปวช.2 </big><b></b></b></td>
        </tr>
        <tr>
          <td width="10%" align="center"><b>ระดับชั้น</b></td>
          <td width="30%"><b>สาขาวิชา</b></td>
          <td width="30%"><b>สาขางาน</b></td>
          <td width="10%" align="center"><b>ชาย</b></td>
          <td width="10%" align="center"><b>หญิง</b></td>
          <td width="10%" align="center"><b>รวม</b></td>

          <!-- ปวช.1 -->
          <!-- ช่างยนต์-->
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" style="">
          <td align="center"><b>ปวช.1</b></td>
          <td><b>ช่างยนต์</b></td>
          <td><b>ช่างยนต์</b></td>
          <td align="center"><b>45</b></td>
          <td align="center"><b>1</b></td>
          <td align="center"><b>46</b></td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" style="">
          <td align="center"></td>
          <td>682010405</td>
          <td>ช่างยนต์ (ชย.1/1A) </td>
          <td align="center">16</td>
          <td align="center">0</td>
          <td align="center">16</td>

        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" style="">
          <td align="center"></td>
          <td>682010405</td>
          <td>ช่างยนต์ (ชย.1/1B) </td>
          <td align="center">15</td>
          <td align="center">1</td>
          <td align="center">16</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" style="">
          <td align="center"></td>
          <td>682010405</td>
          <td>ช่างยนต์ (ชย.1/2A) </td>
          <td align="center">17</td>
          <td align="center">0</td>
          <td align="center">17</td>
        </tr>

        <!-- ช่างกล-->
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" style="">
          <td align="center"><b>ปวช.1</b></td>
          <td><b>ช่างกลโรงงาน</b></td>
          <td><b>ช่างกลโรงงาน</b></td>
          <td align="center"><b>8</b></td>
          <td align="center"><b>0</b></td>
          <td align="center"><b>8</b></td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" style="">
          <td align="center"></td>
          <td>682010201</td>
          <td>ช่างกลโรงงาน (ชก.1/1) </td>
          <td align="center">8</td>
          <td align="center">0</td>
          <td align="center">8</td>
        </tr>

        <!-- ช่างไฟฟ้า-->
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" style="">
          <td align="center"><b>ปวช.1</b></td>
          <td><b>ช่างไฟฟ้า</b></td>
          <td><b>ช่างไฟฟ้า</b></td>
          <td align="center"><b>31</b></td>
          <td align="center"><b>1</b></td>
          <td align="center"><b>32</b></td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" style="">
          <td align="center"></td>
          <td>682010601</td>
          <td>ช่างไฟฟ้า (ชฟ.1/1A) </td>
          <td align="center">16</td>
          <td align="center">0</td>
          <td align="center">16</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" style="">
          <td align="center"></td>
          <td>682010601</td>
          <td>ช่างไฟฟ้า (ชฟ.1/1B) </td>
          <td align="center">15</td>
          <td align="center">1</td>
          <td align="center">16</td>
        </tr>

        <!-- ช่างอิเล็กทรอนิกส์-->
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" style="">
          <td align="center"><b>ปวช.1</b></td>
          <td><b>ช่างอิเล็กทรอนิกส์</b></td>
          <td><b>ช่างอิเล็กทรอนิกส์</b></td>
          <td align="center"><b>4</b></td>
          <td align="center"><b>6</b></td>
          <td align="center"><b>10</b></td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>682010301</td>
          <td>ช่างอิเล็กทรอนิกส์ (ชอ.1/1) </td>
          <td align="center">4</td>
          <td align="center">6</td>
          <td align="center">10</td>
        </tr>

        <!-- ช่างก่อสร้าง-->
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"><b>ปวช.1</b></td>
          <td><b>ช่างก่อสร้าง</b></td>
          <td><b>ช่างก่อสร้าง</b></td>
          <td align="center"><b>10</b></td>
          <td align="center"><b>1</b></td>
          <td align="center"><b>11</b></td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>682190901</td>
          <td>ช่างก่อสร้าง(ชส.1/1) </td>
          <td align="center">10</td>
          <td align="center">1</td>
          <td align="center">11</td>
        </tr>

        <!-- บัญชี-->
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"><b>ปวช.1</b></td>
          <td><b>สาขาวิชาการบัญชี</b></td>
          <td><b>สาขาวิชาการบัญชี</b></td>
          <td align="center"><b>1</b></td>
          <td align="center"><b>13</b></td>
          <td align="center"><b>14</b></td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>682010401</td>
          <td>การบัญชี ( บช. 1/1 ) </td>
          <td align="center">1</td>
          <td align="center">13</td>
          <td align="center">14</td>
        </tr>
        
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"><b>ปวช.1</b></td>
          <td><b>เทคโนโลยีธุรกิจดิจิทัล</b></td>
          <td><b>เทคโนโลยีธุรกิจดิจิทัล</b></td>
          <td align="center"><b>7</b></td>
          <td align="center"><b>8</b></td>
          <td align="center"><b>15</b></td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>682010101</td>
          <td>ช่างยนต์/1 ( ธด. 1/1 ) </td>
          <td align="center">19</td>
          <td align="center">0</td>
          <td align="center">19</td>
        </tr>
        
      </tbody>
    </table>
    <table align="center" border="0" cellpadding="0" cellspacing="0" class="table table-striped table-hover">
      <tbody>
        <tr>
          <td colspan="4"><b><big>บทสรุปจำนวนนักเรียน จำแนกตามระดับชั้น</big><b></b></b></td>
        </tr>
        <tr>
          <td width="55%" align="center"><b>ระดับชั้น</b></td>
          <td width="15%" align="center"><b>ชาย</b></td>
          <td width="15%" align="center"><b>หญิง</b></td>
          <td width="15%" align="center"><b>รวม</b></td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center">ปวช.1</td>
          <td align="center">1</td>
          <td align="center">0</td>
          <td align="center">1</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center">ปวช.2</td>
          <td align="center">480</td>
          <td align="center">54</td>
          <td align="center">534</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center">ปวช.3</td>
          <td align="center">630</td>
          <td align="center">68</td>
          <td align="center">698</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center">ปวส.2</td>
          <td align="center">820</td>
          <td align="center">96</td>
          <td align="center">916</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"><b>รวม</b></td>
          <td align="center"><b>1931</b></td>
          <td align="center"><b>218</b></td>
          <td align="center"><b>2149</b></td>
        </tr>
      </tbody>
    </table>

   
  <!--สิ้นสุด-ส่วนเนื้อหา -->

  <?php include 'footer.php'; ?> <!-- เรียกใช้ ท้ายเว็บ-->
</body>

</html>