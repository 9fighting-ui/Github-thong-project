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
          <td colspan="6"><b><big>บทสรุปข้อมูลนักเรียน</big><b></b></b></td>
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
          <td>ช่างไฟฟ้า/1 (บช.1/1) </td>
          <td align="center">1</td>
          <td align="center">13</td>
          <td align="center">14</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>682010402</td>
          <td>ช่างไฟฟ้า/2 (ชฟ. A L2 ) </td>
          <td align="center">13</td>
          <td align="center">3</td>
          <td align="center">16</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>682010403</td>
          <td>ช่างไฟฟ้า/3 (ชฟ. B L3 ) </td>
          <td align="center">19</td>
          <td align="center">0</td>
          <td align="center">19</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>682010404</td>
          <td>ช่างไฟฟ้า/4 (ชฟ. B L4 ) </td>
          <td align="center">15</td>
          <td align="center">2</td>
          <td align="center">17</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>682010405</td>
          <td>ช่างไฟฟ้า/5 (ชฟ. C L5 ) </td>
          <td align="center">12</td>
          <td align="center">0</td>
          <td align="center">12</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>682010406</td>
          <td>ช่างไฟฟ้า/6 (ชฟ. C L6 ) </td>
          <td align="center">12</td>
          <td align="center">1</td>
          <td align="center">13</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"><b>ปวช.2</b></td>
          <td><b>ช่างยนต์</b></td>
          <td><b>ช่างยนต์</b></td>
          <td align="center"><b>167</b></td>
          <td align="center"><b>4</b></td>
          <td align="center"><b>171</b></td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>682010101</td>
          <td>ช่างยนต์/1 (ชย. A L1 ) </td>
          <td align="center">19</td>
          <td align="center">0</td>
          <td align="center">19</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>682010102</td>
          <td>ช่างยนต์/2 (ชย. A L2 ) </td>
          <td align="center">18</td>
          <td align="center">0</td>
          <td align="center">18</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>682010103</td>
          <td>ช่างยนต์/3 (ชย. B L3 ) </td>
          <td align="center">16</td>
          <td align="center">0</td>
          <td align="center">16</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>682010104</td>
          <td>ช่างยนต์/4 (ชย. B L4 ) </td>
          <td align="center">16</td>
          <td align="center">0</td>
          <td align="center">16</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>682010105</td>
          <td>ช่างยนต์/5 (ชย. C L5 ) </td>
          <td align="center">14</td>
          <td align="center">0</td>
          <td align="center">14</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" style="">
          <td align="center"></td>
          <td>682010106</td>
          <td>ช่างยนต์/6 (ชย. C L6 ) </td>
          <td align="center">15</td>
          <td align="center">1</td>
          <td align="center">16</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>682010107</td>
          <td>ช่างยนต์/7 (ชย. D L7 ) </td>
          <td align="center">17</td>
          <td align="center">0</td>
          <td align="center">17</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>682010108</td>
          <td>ช่างยนต์/8 (ชย. D L8 ) </td>
          <td align="center">14</td>
          <td align="center">1</td>
          <td align="center">15</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>682010109</td>
          <td>ช่างยนต์/9 (ชย.ทวิศึกษา L9 ) </td>
          <td align="center">38</td>
          <td align="center">2</td>
          <td align="center">40</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"><b>ปวช.2</b></td>
          <td><b>เทคโนโลยีสารสนเทศ </b></td>
          <td><b>เทคโนโลยีสารสนเทศ</b></td>
          <td align="center"><b>30</b></td>
          <td align="center"><b>5</b></td>
          <td align="center"><b>35</b></td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>682190101</td>
          <td>เทคโนโลยีสารสนเทศ/1 (ทท L1 ) </td>
          <td align="center">30</td>
          <td align="center">5</td>
          <td align="center">35</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"><b>ปวช.2</b></td>
          <td><b>เมคคาทรอนิกส์และหุ่นยนต์</b></td>
          <td><b>เมคคาทรอนิกส์และหุ่นยนต์</b></td>
          <td align="center"><b>14</b></td>
          <td align="center"><b>1</b></td>
          <td align="center"><b>15</b></td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>682012701</td>
          <td>เมคคาทรอนิกส์และหุ่นยนต์/1 (มค. L1 ) </td>
          <td align="center">14</td>
          <td align="center">1</td>
          <td align="center">15</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"><b>ปวช.2</b></td>
          <td><b>โลจิสติกส์</b></td>
          <td><b>โลจิสติกส์</b></td>
          <td align="center"><b>6</b></td>
          <td align="center"><b>8</b></td>
          <td align="center"><b>14</b></td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>682140101</td>
          <td>โลจิสติกส์/1 (ลจ. L1 ) </td>
          <td align="center">6</td>
          <td align="center">8</td>
          <td align="center">14</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"><b>ปวช.2</b></td>
          <td><b>สถาปัตยกรรม</b></td>
          <td><b>สถาปัตยกรรม</b></td>
          <td align="center"><b>20</b></td>
          <td align="center"><b>13</b></td>
          <td align="center"><b>33</b></td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>682010801</td>
          <td>สถาปัตยกรรม/1 (สถ. L1 ) </td>
          <td align="center">16</td>
          <td align="center">1</td>
          <td align="center">17</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>682010802</td>
          <td>สถาปัตยกรรม/2 (สถ. L2 ) </td>
          <td align="center">4</td>
          <td align="center">12</td>
          <td align="center">16</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"><b>ปวช.2</b></td>
          <td><b>อิเล็กทรอนิกส์</b></td>
          <td><b>อิเล็กทรอนิกส์</b></td>
          <td align="center"><b>20</b></td>
          <td align="center"><b>3</b></td>
          <td align="center"><b>23</b></td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>682010501</td>
          <td>อิเล็กทรอนิกส์/1 (ชอ. L1 ) </td>
          <td align="center">20</td>
          <td align="center">3</td>
          <td align="center">23</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"><b>ปวช.3</b></td>
          <td><b>ช่างกลโรงงาน</b></td>
          <td><b>เครื่องมือกล</b></td>
          <td align="center"><b>18</b></td>
          <td align="center"><b>0</b></td>
          <td align="center"><b>18</b></td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>652010201</td>
          <td>เครื่องมือกล/1 (ชก.3L1 ) </td>
          <td align="center">4</td>
          <td align="center">0</td>
          <td align="center">4</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>662010201</td>
          <td>เครื่องมือกล/1 (ชก.3L1 ) </td>
          <td align="center">14</td>
          <td align="center">0</td>
          <td align="center">14</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"><b>ปวช.3</b></td>
          <td><b>ช่างกลโรงงาน</b></td>
          <td><b>ช่างกลโรงงาน</b></td>
          <td align="center"><b>23</b></td>
          <td align="center"><b>1</b></td>
          <td align="center"><b>24</b></td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>672010201</td>
          <td>ช่างกลโรงงาน/1 (ชก.L1 ) </td>
          <td align="center">23</td>
          <td align="center">1</td>
          <td align="center">24</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"><b>ปวช.3</b></td>
          <td><b>ช่างก่อสร้าง</b></td>
          <td><b>ก่อสร้าง</b></td>
          <td align="center"><b>24</b></td>
          <td align="center"><b>5</b></td>
          <td align="center"><b>29</b></td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>632010602</td>
          <td>ก่อสร้าง/2 (ชส.3เอL2 ) </td>
          <td align="center">0</td>
          <td align="center">1</td>
          <td align="center">1</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>652010602</td>
          <td>ก่อสร้าง/2 (ชส.3เอL2 ) </td>
          <td align="center">2</td>
          <td align="center">0</td>
          <td align="center">2</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>652010603</td>
          <td>ก่อสร้าง/3 (ชส.3บีL3 ) </td>
          <td align="center">2</td>
          <td align="center">0</td>
          <td align="center">2</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>662010601</td>
          <td>ก่อสร้าง/1 (ชส.3เอL1 ) </td>
          <td align="center">7</td>
          <td align="center">2</td>
          <td align="center">9</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>662010603</td>
          <td>ก่อสร้าง/3 (ชส.3บีL3 ) </td>
          <td align="center">13</td>
          <td align="center">2</td>
          <td align="center">15</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"><b>ปวช.3</b></td>
          <td><b>ช่างก่อสร้าง</b></td>
          <td><b>ช่างก่อสร้าง</b></td>
          <td align="center"><b>56</b></td>
          <td align="center"><b>4</b></td>
          <td align="center"><b>60</b></td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>672010601</td>
          <td>ช่างก่อสร้าง/1 (ชส.เอL1 ) </td>
          <td align="center">29</td>
          <td align="center">2</td>
          <td align="center">31</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>672010603</td>
          <td>ช่างก่อสร้าง/3 (ชส.บีL3 ) </td>
          <td align="center">27</td>
          <td align="center">2</td>
          <td align="center">29</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"><b>ปวช.3</b></td>
          <td><b>ช่างเชื่อมโลหะ</b></td>
          <td><b>ช่างเชื่อมโลหะ</b></td>
          <td align="center"><b>15</b></td>
          <td align="center"><b>0</b></td>
          <td align="center"><b>15</b></td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>672010301</td>
          <td>ช่างเชื่อมโลหะ/1 (ชช.L1 ) </td>
          <td align="center">15</td>
          <td align="center">0</td>
          <td align="center">15</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"><b>ปวช.3</b></td>
          <td><b>ช่างเชื่อมโลหะ</b></td>
          <td><b>ผลิตภัณฑ์</b></td>
          <td align="center"><b>5</b></td>
          <td align="center"><b>0</b></td>
          <td align="center"><b>5</b></td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>642010302</td>
          <td>ผลิตภัณฑ์/2 (ชช.3 L2 ) </td>
          <td align="center">1</td>
          <td align="center">0</td>
          <td align="center">1</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>662010301</td>
          <td>ผลิตภัณฑ์/1 (ชช.3L1 ) </td>
          <td align="center">4</td>
          <td align="center">0</td>
          <td align="center">4</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"><b>ปวช.3</b></td>
          <td><b>ช่างเทคนิคคอมพิวเตอร์</b></td>
          <td><b>ช่างเทคนิคคอมพิวเตอร์</b></td>
          <td align="center"><b>20</b></td>
          <td align="center"><b>5</b></td>
          <td align="center"><b>25</b></td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>672190901</td>
          <td>ช่างเทคนิคคอมพิวเตอร์/1 (ทค.L1 ) </td>
          <td align="center">20</td>
          <td align="center">4</td>
          <td align="center">24</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>672190903</td>
          <td>ช่างเทคนิคคอมพิวเตอร์/3 (ทค.L3 (พิเศษ) ) </td>
          <td align="center">0</td>
          <td align="center">1</td>
          <td align="center">1</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"><b>ปวช.3</b></td>
          <td><b>ช่างเทคนิคคอมพิวเตอร์</b></td>
          <td><b>เทคนิคคอมพิวเตอร์</b></td>
          <td align="center"><b>5</b></td>
          <td align="center"><b>0</b></td>
          <td align="center"><b>5</b></td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>662012801</td>
          <td>เทคนิคคอมพิวเตอร์/1 (ทค.3 L1 ) </td>
          <td align="center">5</td>
          <td align="center">0</td>
          <td align="center">5</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"><b>ปวช.3</b></td>
          <td><b>ช่างไฟฟ้ากำลัง</b></td>
          <td><b>ไฟฟ้ากำลัง</b></td>
          <td align="center"><b>74</b></td>
          <td align="center"><b>4</b></td>
          <td align="center"><b>78</b></td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>632010405</td>
          <td>ไฟฟ้ากำลัง/5 (ชฟ.3ซีL5 ) </td>
          <td align="center">1</td>
          <td align="center">0</td>
          <td align="center">1</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>642010401</td>
          <td>ไฟฟ้ากำลัง/1 (ชฟ.3เอL1 ) </td>
          <td align="center">3</td>
          <td align="center">0</td>
          <td align="center">3</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>642010402</td>
          <td>ไฟฟ้ากำลัง/2 (ชฟ.3เอL2 ) </td>
          <td align="center">2</td>
          <td align="center">0</td>
          <td align="center">2</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>642010406</td>
          <td>ไฟฟ้ากำลัง/6 (ชฟ.3ซีL6 ) </td>
          <td align="center">1</td>
          <td align="center">0</td>
          <td align="center">1</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>652010401</td>
          <td>ไฟฟ้ากำลัง/1 (ชฟ.3เอL1 ) </td>
          <td align="center">1</td>
          <td align="center">0</td>
          <td align="center">1</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>652010403</td>
          <td>ไฟฟ้ากำลัง/3 (ชฟ.3บีL3 ) </td>
          <td align="center">1</td>
          <td align="center">0</td>
          <td align="center">1</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>652010405</td>
          <td>ไฟฟ้ากำลัง/5 (ชฟ.3ซีL5 ) </td>
          <td align="center">8</td>
          <td align="center">0</td>
          <td align="center">8</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>662010401</td>
          <td>ไฟฟ้ากำลัง/1 (ชฟ.3เอL1 ) </td>
          <td align="center">9</td>
          <td align="center">0</td>
          <td align="center">9</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" style="">
          <td align="center"></td>
          <td>662010403</td>
          <td>ไฟฟ้ากำลัง/3 (ชฟ.3บีL3 ) </td>
          <td align="center">5</td>
          <td align="center">0</td>
          <td align="center">5</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>662010404</td>
          <td>ไฟฟ้ากำลัง/4 (ชฟ.3บีL4 ) </td>
          <td align="center">5</td>
          <td align="center">0</td>
          <td align="center">5</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>662010405</td>
          <td>ไฟฟ้ากำลัง/5 (ชฟ.3ซีL5 ) </td>
          <td align="center">6</td>
          <td align="center">0</td>
          <td align="center">6</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>662010407</td>
          <td>ไฟฟ้ากำลัง/7 (ชฟ.3ดีL7 ทวิศึกษา ) </td>
          <td align="center">31</td>
          <td align="center">4</td>
          <td align="center">35</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>662010410</td>
          <td>ไฟฟ้ากำลัง/10 (ชฟ.3ซี พ. L5 ) </td>
          <td align="center">1</td>
          <td align="center">0</td>
          <td align="center">1</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"><b>ปวช.3</b></td>
          <td><b>ช่างไฟฟ้า</b></td>
          <td><b>ช่างไฟฟ้า</b></td>
          <td align="center"><b>92</b></td>
          <td align="center"><b>6</b></td>
          <td align="center"><b>98</b></td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>672010401</td>
          <td>ช่างไฟฟ้า/1 (ชฟ.เอL1 ) </td>
          <td align="center">34</td>
          <td align="center">1</td>
          <td align="center">35</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>672010403</td>
          <td>ช่างไฟฟ้า/3 (ชฟ.บีL3 ) </td>
          <td align="center">20</td>
          <td align="center">2</td>
          <td align="center">22</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>672010404</td>
          <td>ช่างไฟฟ้า/4 (ชฟ.บีL4 ) </td>
          <td align="center">15</td>
          <td align="center">0</td>
          <td align="center">15</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>672010405</td>
          <td>ช่างไฟฟ้า/5 (ชฟ.ซีL5 ) </td>
          <td align="center">23</td>
          <td align="center">3</td>
          <td align="center">26</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"><b>ปวช.3</b></td>
          <td><b>ช่างยนต์</b></td>
          <td><b>ช่างยนต์</b></td>
          <td align="center"><b>148</b></td>
          <td align="center"><b>12</b></td>
          <td align="center"><b>160</b></td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>672010101</td>
          <td>ช่างยนต์/1 (ชย.เอL1 ) </td>
          <td align="center">19</td>
          <td align="center">2</td>
          <td align="center">21</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>672010102</td>
          <td>ช่างยนต์/2 (ชย.เอL2 ) </td>
          <td align="center">15</td>
          <td align="center">0</td>
          <td align="center">15</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>672010103</td>
          <td>ช่างยนต์/3 (ชย.บีL3 ) </td>
          <td align="center">31</td>
          <td align="center">0</td>
          <td align="center">31</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>672010105</td>
          <td>ช่างยนต์/5 (ชย.ซีL5 ) </td>
          <td align="center">21</td>
          <td align="center">0</td>
          <td align="center">21</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>672010106</td>
          <td>ช่างยนต์/6 (ชย.ซีL6 ) </td>
          <td align="center">16</td>
          <td align="center">1</td>
          <td align="center">17</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>672010107</td>
          <td>ช่างยนต์/7 (ชย.ดีL7 ) </td>
          <td align="center">15</td>
          <td align="center">2</td>
          <td align="center">17</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>672010109</td>
          <td>ช่างยนต์/9 (ชย.ทวิฯ ) </td>
          <td align="center">31</td>
          <td align="center">7</td>
          <td align="center">38</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"><b>ปวช.3</b></td>
          <td><b>ช่างยนต์</b></td>
          <td><b>ยานยนต์</b></td>
          <td align="center"><b>54</b></td>
          <td align="center"><b>0</b></td>
          <td align="center"><b>54</b></td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>652010103</td>
          <td>ยานยนต์/3 (ชย.3บีL3 ) </td>
          <td align="center">2</td>
          <td align="center">0</td>
          <td align="center">2</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>652010105</td>
          <td>ยานยนต์/5 (ชย.3ซีL5 ) </td>
          <td align="center">5</td>
          <td align="center">0</td>
          <td align="center">5</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>652010106</td>
          <td>ยานยนต์/6 (ชย.3ซีL6 ) </td>
          <td align="center">3</td>
          <td align="center">0</td>
          <td align="center">3</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" style="">
          <td align="center"></td>
          <td>652010107</td>
          <td>ยานยนต์/7 (ชย.3ดีL7 ) </td>
          <td align="center">1</td>
          <td align="center">0</td>
          <td align="center">1</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" style="">
          <td align="center"></td>
          <td>662010101</td>
          <td>ยานยนต์/1 (ชย.3เอL1 ) </td>
          <td align="center">7</td>
          <td align="center">0</td>
          <td align="center">7</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>662010103</td>
          <td>ยานยนต์/3 (ชย.3บีL3 ) </td>
          <td align="center">12</td>
          <td align="center">0</td>
          <td align="center">12</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>662010105</td>
          <td>ยานยนต์/5 (ชย.3ซีL5 ) </td>
          <td align="center">8</td>
          <td align="center">0</td>
          <td align="center">8</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" style="">
          <td align="center"></td>
          <td>662010107</td>
          <td>ยานยนต์/7 (ชย.3ดีL7 ) </td>
          <td align="center">16</td>
          <td align="center">0</td>
          <td align="center">16</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" style="">
          <td align="center"><b>ปวช.3</b></td>
          <td><b>ช่างอิเล็กทรอนิกส์</b></td>
          <td><b>อิเล็กทรอนิกส์</b></td>
          <td align="center"><b>8</b></td>
          <td align="center"><b>0</b></td>
          <td align="center"><b>8</b></td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" style="">
          <td align="center"></td>
          <td>642010501</td>
          <td>อิเล็กทรอนิกส์/1 (ชอ.3 L1 ) </td>
          <td align="center">1</td>
          <td align="center">0</td>
          <td align="center">1</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>662010501</td>
          <td>อิเล็กทรอนิกส์/1 (ชอ.3L1 ) </td>
          <td align="center">7</td>
          <td align="center">0</td>
          <td align="center">7</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" style="">
          <td align="center"><b>ปวช.3</b></td>
          <td><b>เทคโนโลยีสารสนเทศ</b></td>
          <td><b>เทคโนโลยีสารสนเทศ</b></td>
          <td align="center"><b>27</b></td>
          <td align="center"><b>3</b></td>
          <td align="center"><b>30</b></td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>642090101</td>
          <td>เทคโนโลยีสารสนเทศ/1 (ชท.3L1 ) </td>
          <td align="center">1</td>
          <td align="center">0</td>
          <td align="center">1</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>662090101</td>
          <td>เทคโนโลยีสารสนเทศ/1 (ทท.3 L1 ) </td>
          <td align="center">4</td>
          <td align="center">2</td>
          <td align="center">6</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>672190101</td>
          <td>เทคโนโลยีสารสนเทศ/1 (ททL1 ) </td>
          <td align="center">22</td>
          <td align="center">1</td>
          <td align="center">23</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"><b>ปวช.3</b></td>
          <td><b>เมคคาทรอนิกส์</b></td>
          <td><b>เมคคาทรอนิกส์</b></td>
          <td align="center"><b>6</b></td>
          <td align="center"><b>3</b></td>
          <td align="center"><b>9</b></td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>642012701</td>
          <td>เมคคาทรอนิกส์/1 (มค.3 L1 ) </td>
          <td align="center">1</td>
          <td align="center">0</td>
          <td align="center">1</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>662012701</td>
          <td>เมคคาทรอนิกส์/1 (มค.3 L1 ) </td>
          <td align="center">5</td>
          <td align="center">3</td>
          <td align="center">8</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"><b>ปวช.3</b></td>
          <td><b>เมคคาทรอนิกส์และหุ่นยนต์</b></td>
          <td><b>เมคคาทรอนิกส์และหุ่นยนต์</b></td>
          <td align="center"><b>8</b></td>
          <td align="center"><b>1</b></td>
          <td align="center"><b>9</b></td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>672012701</td>
          <td>เมคคาทรอนิกส์และหุ่นยนต์/1 (มค.L1 ) </td>
          <td align="center">8</td>
          <td align="center">1</td>
          <td align="center">9</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"><b>ปวช.3</b></td>
          <td><b>โลจิสติกส์</b></td>
          <td><b>โลจิสติกส์</b></td>
          <td align="center"><b>4</b></td>
          <td align="center"><b>6</b></td>
          <td align="center"><b>10</b></td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>662021401</td>
          <td>โลจิสติกส์/1 (ลจ.3 ) </td>
          <td align="center">2</td>
          <td align="center">2</td>
          <td align="center">4</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>672140101</td>
          <td>โลจิสติกส์/1 (ลจ.L1 ) </td>
          <td align="center">2</td>
          <td align="center">4</td>
          <td align="center">6</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"><b>ปวช.3</b></td>
          <td><b>สถาปัตยกรรม</b></td>
          <td><b>สถาปัตยกรรม</b></td>
          <td align="center"><b>16</b></td>
          <td align="center"><b>12</b></td>
          <td align="center"><b>28</b></td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" style="">
          <td align="center"></td>
          <td>652010801</td>
          <td>สถาปัตยกรรม/1 (ชถ.3L1 ) </td>
          <td align="center">3</td>
          <td align="center">2</td>
          <td align="center">5</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" style="">
          <td align="center"></td>
          <td>662010801</td>
          <td>สถาปัตยกรรม/1 (ชถ.3 L1 ) </td>
          <td align="center">1</td>
          <td align="center">3</td>
          <td align="center">4</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" style="">
          <td align="center"></td>
          <td>672010801</td>
          <td>สถาปัตยกรรม/1 (สถ.L1 ) </td>
          <td align="center">12</td>
          <td align="center">7</td>
          <td align="center">19</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"><b>ปวช.3</b></td>
          <td><b>อิเล็กทรอนิกส์</b></td>
          <td><b>อิเล็กทรอนิกส์</b></td>
          <td align="center"><b>27</b></td>
          <td align="center"><b>6</b></td>
          <td align="center"><b>33</b></td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>672010501</td>
          <td>อิเล็กทรอนิกส์/1 (ชอL1 ) </td>
          <td align="center">27</td>
          <td align="center">6</td>
          <td align="center">33</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"><b>ปวส.2</b></td>
          <td><b>การจัดการโลจิสติกส์และซัพพลายเชน</b></td>
          <td><b>การจัดการโลจิสติกส์และซัพพลายเชน</b></td>
          <td align="center"><b>7</b></td>
          <td align="center"><b>21</b></td>
          <td align="center"><b>28</b></td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>673140101</td>
          <td>การจัดการโลจิสติกส์และซัพพลายเชน/1 (ลจ.ทวิภาคี ภาคปกติL1 ) </td>
          <td align="center">1</td>
          <td align="center">0</td>
          <td align="center">1</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>683140101</td>
          <td>การจัดการโลจิสติกส์และซัพพลายเชน/1 (ลจ./ทวิภาคี/ม.6 L1 ) </td>
          <td align="center">5</td>
          <td align="center">20</td>
          <td align="center">25</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>683140102</td>
          <td>การจัดการโลจิสติกส์และซัพพลายเชน/2 (ลจ./ทวิภาคี/สายตรง L2 ) </td>
          <td align="center">0</td>
          <td align="center">1</td>
          <td align="center">1</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>683140103</td>
          <td>การจัดการโลจิสติกส์และซัพพลายเชน/3 (ลจ. ทวิภาคี ม.6 พิเศษ L3 ) </td>
          <td align="center">1</td>
          <td align="center">0</td>
          <td align="center">1</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"><b>ปวส.2</b></td>
          <td><b>ช่างก่อสร้าง</b></td>
          <td><b>ก่อสร้าง</b></td>
          <td align="center"><b>4</b></td>
          <td align="center"><b>0</b></td>
          <td align="center"><b>4</b></td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>663010604</td>
          <td>ก่อสร้าง/4 (กส.2/ปกติ/ตรง-บีL4 ) </td>
          <td align="center">1</td>
          <td align="center">0</td>
          <td align="center">1</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>663010605</td>
          <td>ก่อสร้าง/5 (กส.2/ปกติ/ตรง-ซีL5 ) </td>
          <td align="center">2</td>
          <td align="center">0</td>
          <td align="center">2</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>663010607</td>
          <td>ก่อสร้าง/7 (กส.2/ปกติ/ม.6/เอ-L7 ) </td>
          <td align="center">1</td>
          <td align="center">0</td>
          <td align="center">1</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"><b>ปวส.2</b></td>
          <td><b>ช่างก่อสร้าง</b></td>
          <td><b>ช่างก่อสร้าง</b></td>
          <td align="center"><b>164</b></td>
          <td align="center"><b>15</b></td>
          <td align="center"><b>179</b></td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" style="">
          <td align="center"></td>
          <td>673010601</td>
          <td>ช่างก่อสร้าง/1 (กส.ตรงเอL1 ) </td>
          <td align="center">2</td>
          <td align="center">0</td>
          <td align="center">2</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>673010603</td>
          <td>ช่างก่อสร้าง/3 (กส.ตรงบีL3 ) </td>
          <td align="center">2</td>
          <td align="center">0</td>
          <td align="center">2</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>673010604</td>
          <td>ช่างก่อสร้าง/4 (กส.ตรงบีL4 ) </td>
          <td align="center">7</td>
          <td align="center">1</td>
          <td align="center">8</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>673010605</td>
          <td>ช่างก่อสร้าง/5 (กส.ตรงซีL5 ) </td>
          <td align="center">6</td>
          <td align="center">0</td>
          <td align="center">6</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>673010607</td>
          <td>ช่างก่อสร้าง/7 (กส.ม.6เอL7 ) </td>
          <td align="center">5</td>
          <td align="center">0</td>
          <td align="center">5</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>673010608</td>
          <td>ช่างก่อสร้าง/8 (กส.ม.6เอL8 ) </td>
          <td align="center">4</td>
          <td align="center">0</td>
          <td align="center">4</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>673010609</td>
          <td>ช่างก่อสร้าง/9 (กส.ม.6บีL9 ) </td>
          <td align="center">14</td>
          <td align="center">0</td>
          <td align="center">14</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>683010601</td>
          <td>ช่างก่อสร้าง/1 (กส./สายตรง A L1 ) </td>
          <td align="center">20</td>
          <td align="center">0</td>
          <td align="center">20</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>683010602</td>
          <td>ช่างก่อสร้าง/2 (กส./สายตรง A L2 ) </td>
          <td align="center">14</td>
          <td align="center">4</td>
          <td align="center">18</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>683010603</td>
          <td>ช่างก่อสร้าง/3 (กส./สายตรง B L3 ) </td>
          <td align="center">27</td>
          <td align="center">3</td>
          <td align="center">30</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" style="">
          <td align="center"></td>
          <td>683010605</td>
          <td>ช่างก่อสร้าง/5 (กส./ม. 6 A L5 ) </td>
          <td align="center">17</td>
          <td align="center">1</td>
          <td align="center">18</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" style="">
          <td align="center"></td>
          <td>683010606</td>
          <td>ช่างก่อสร้าง/6 (กส./ม.6 A L6 ) </td>
          <td align="center">17</td>
          <td align="center">2</td>
          <td align="center">19</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>683010607</td>
          <td>ช่างก่อสร้าง/7 (กส./ม.6 B L7 ) </td>
          <td align="center">19</td>
          <td align="center">0</td>
          <td align="center">19</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>683010608</td>
          <td>ช่างก่อสร้าง/8 (กส./ม.6 B L8 ) </td>
          <td align="center">10</td>
          <td align="center">4</td>
          <td align="center">14</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"><b>ปวส.2</b></td>
          <td><b>ช่างกายอุปกรณ์</b></td>
          <td><b>ช่างกายอุปกรณ์</b></td>
          <td align="center"><b>8</b></td>
          <td align="center"><b>1</b></td>
          <td align="center"><b>9</b></td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>683130101</td>
          <td>ช่างกายอุปกรณ์/1 (กอ./สายตรง ม.6 L1 ) </td>
          <td align="center">8</td>
          <td align="center">1</td>
          <td align="center">9</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"><b>ปวส.2</b></td>
          <td><b>เทคนิคการผลิต</b></td>
          <td><b>เทคนิคการผลิต</b></td>
          <td align="center"><b>51</b></td>
          <td align="center"><b>1</b></td>
          <td align="center"><b>52</b></td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>673010201</td>
          <td>เทคนิคการผลิต/1 (ทผ.ตรงL1 ) </td>
          <td align="center">1</td>
          <td align="center">0</td>
          <td align="center">1</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>673010203</td>
          <td>เทคนิคการผลิต/3 (ทผ.ม.6L3 ) </td>
          <td align="center">4</td>
          <td align="center">0</td>
          <td align="center">4</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>683010201</td>
          <td>เทคนิคการผลิต/1 (ทผ./สายตรง L1 ) </td>
          <td align="center">13</td>
          <td align="center">1</td>
          <td align="center">14</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>683010202</td>
          <td>เทคนิคการผลิต/2 (ทผ./ม.6 L2 ) </td>
          <td align="center">33</td>
          <td align="center">0</td>
          <td align="center">33</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"><b>ปวส.2</b></td>
          <td><b>เทคนิคเครื่องกล</b></td>
          <td><b>เทคนิคเครื่องกล</b></td>
          <td align="center"><b>142</b></td>
          <td align="center"><b>1</b></td>
          <td align="center"><b>143</b></td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>673010102</td>
          <td>เทคนิคเครื่องกล/2 (ทก.ตรง เอL2 ) </td>
          <td align="center">1</td>
          <td align="center">0</td>
          <td align="center">1</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>673010103</td>
          <td>เทคนิคเครื่องกล/3 (ทก.ม.6 เอL3 ) </td>
          <td align="center">6</td>
          <td align="center">0</td>
          <td align="center">6</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>673010104</td>
          <td>เทคนิคเครื่องกล/4 (ทก.ม.6 เอL4 ) </td>
          <td align="center">3</td>
          <td align="center">0</td>
          <td align="center">3</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>673010106</td>
          <td>เทคนิคเครื่องกล/6 (ทก.ทวิภาคี ตรง เอL6 ) </td>
          <td align="center">2</td>
          <td align="center">0</td>
          <td align="center">2</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>683010101</td>
          <td>เทคนิคเครื่องกล/1 (ทก./สายตรง L1 ) </td>
          <td align="center">20</td>
          <td align="center">0</td>
          <td align="center">20</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>683010102</td>
          <td>เทคนิคเครื่องกล/2 (ทก./สายตรง L2 ) </td>
          <td align="center">18</td>
          <td align="center">1</td>
          <td align="center">19</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>683010103</td>
          <td>เทคนิคเครื่องกล/3 (ทก./ม.6 L3 ) </td>
          <td align="center">17</td>
          <td align="center">0</td>
          <td align="center">17</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>683010104</td>
          <td>เทคนิคเครื่องกล/4 (ทก./ม.6 L4 ) </td>
          <td align="center">18</td>
          <td align="center">0</td>
          <td align="center">18</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>683010105</td>
          <td>เทคนิคเครื่องกล/5 (ทก./ทวิภาคี/สายตรง A L5 ) </td>
          <td align="center">29</td>
          <td align="center">0</td>
          <td align="center">29</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>683010106</td>
          <td>เทคนิคเครื่องกล/6 (ทก./ทวิภาคี/สายตรง B L6 ) </td>
          <td align="center">28</td>
          <td align="center">0</td>
          <td align="center">28</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"><b>ปวส.2</b></td>
          <td><b>เทคนิคเครื่องกล</b></td>
          <td><b>เทคนิคยานยนต์</b></td>
          <td align="center"><b>1</b></td>
          <td align="center"><b>0</b></td>
          <td align="center"><b>1</b></td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>653010106</td>
          <td>เทคนิคยานยนต์/6 (ทย.2/ปกติ/ม.6/เอ-L6 ) </td>
          <td align="center">1</td>
          <td align="center">0</td>
          <td align="center">1</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"><b>ปวส.2</b></td>
          <td><b>เทคนิคยานยนต์ไฟฟ้า</b></td>
          <td><b>เทคนิคยานยนต์ไฟฟ้า</b></td>
          <td align="center"><b>33</b></td>
          <td align="center"><b>3</b></td>
          <td align="center"><b>36</b></td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>673014301</td>
          <td>เทคนิคยานยนต์ไฟฟ้า/1 (ทฟ ทวิภาคี ตรงL1 ) </td>
          <td align="center">3</td>
          <td align="center">0</td>
          <td align="center">3</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>683014301</td>
          <td>เทคนิคยานยนต์ไฟฟ้า/1 (ยฟ/ทวิภาคี/สายตรง L1 ) </td>
          <td align="center">16</td>
          <td align="center">2</td>
          <td align="center">18</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>683014302</td>
          <td>เทคนิคยานยนต์ไฟฟ้า/2 (ยฟ/ทวิภาคี/สายตรง L2 ) </td>
          <td align="center">14</td>
          <td align="center">1</td>
          <td align="center">15</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"><b>ปวส.2</b></td>
          <td><b>เทคนิคโลหะ</b></td>
          <td><b>เทคนิคโลหะ</b></td>
          <td align="center"><b>40</b></td>
          <td align="center"><b>0</b></td>
          <td align="center"><b>40</b></td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>673010301</td>
          <td>เทคนิคโลหะ/1 (ทล.ตรงL1 ) </td>
          <td align="center">1</td>
          <td align="center">0</td>
          <td align="center">1</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>673010303</td>
          <td>เทคนิคโลหะ/3 (ทล.ม.6L3 ) </td>
          <td align="center">3</td>
          <td align="center">0</td>
          <td align="center">3</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>683010301</td>
          <td>เทคนิคโลหะ/1 (ทล./สายตรง L1 ) </td>
          <td align="center">16</td>
          <td align="center">0</td>
          <td align="center">16</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>683010302</td>
          <td>เทคนิคโลหะ/2 (ทล./ม.6 L2 ) </td>
          <td align="center">20</td>
          <td align="center">0</td>
          <td align="center">20</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"><b>ปวส.2</b></td>
          <td><b>เทคนิคสถาปัตยกรรม</b></td>
          <td><b>เทคนิคสถาปัตยกรรม</b></td>
          <td align="center"><b>29</b></td>
          <td align="center"><b>9</b></td>
          <td align="center"><b>38</b></td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>673010801</td>
          <td>เทคนิคสถาปัตยกรรม/1 (สถ.ตรงL1 ) </td>
          <td align="center">2</td>
          <td align="center">1</td>
          <td align="center">3</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>673010803</td>
          <td>เทคนิคสถาปัตยกรรม/3 (สถ.ม.6L3 ) </td>
          <td align="center">8</td>
          <td align="center">1</td>
          <td align="center">9</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>683010801</td>
          <td>เทคนิคสถาปัตยกรรม/1 (สถ/สายตรง L1 ) </td>
          <td align="center">4</td>
          <td align="center">4</td>
          <td align="center">8</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>683010802</td>
          <td>เทคนิคสถาปัตยกรรม/2 (สถ/ม.6 L2 ) </td>
          <td align="center">15</td>
          <td align="center">3</td>
          <td align="center">18</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"><b>ปวส.2</b></td>
          <td><b>เทคโนโลยีคอมพิวเตอร์</b></td>
          <td><b>คอมพิวเตอร์ระบบเครือข่าย</b></td>
          <td align="center"><b>3</b></td>
          <td align="center"><b>0</b></td>
          <td align="center"><b>3</b></td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>663012803</td>
          <td>คอมพิวเตอร์ระบบเครือข่าย/3 (คข.2/ปกติ/ม.6-L3 ) </td>
          <td align="center">3</td>
          <td align="center">0</td>
          <td align="center">3</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"><b>ปวส.2</b></td>
          <td><b>เทคโนโลยีคอมพิวเตอร์</b></td>
          <td><b>เทคโนโลยีคอมพิวเตอร์</b></td>
          <td align="center"><b>19</b></td>
          <td align="center"><b>2</b></td>
          <td align="center"><b>21</b></td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>673190901</td>
          <td>เทคโนโลยีคอมพิวเตอร์/1 (ทค.ตรงL1 ) </td>
          <td align="center">1</td>
          <td align="center">0</td>
          <td align="center">1</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>673190903</td>
          <td>เทคโนโลยีคอมพิวเตอร์/3 (ทค.ม.6 L3 ) </td>
          <td align="center">3</td>
          <td align="center">1</td>
          <td align="center">4</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>683190901</td>
          <td>เทคโนโลยีคอมพิวเตอร์/1 (ทค./สายตรง L1 ) </td>
          <td align="center">7</td>
          <td align="center">0</td>
          <td align="center">7</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>683190902</td>
          <td>เทคโนโลยีคอมพิวเตอร์/2 (ทค./ม.6 L2 ) </td>
          <td align="center">8</td>
          <td align="center">1</td>
          <td align="center">9</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"><b>ปวส.2</b></td>
          <td><b>เทคโนโลยีสารสนเทศ </b></td>
          <td><b>เทคโนโลยีสารสนเทศ</b></td>
          <td align="center"><b>53</b></td>
          <td align="center"><b>5</b></td>
          <td align="center"><b>58</b></td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>673190101</td>
          <td>เทคโนโลยีสารสนเทศ/1 (ทท.ตรงL1 ) </td>
          <td align="center">1</td>
          <td align="center">1</td>
          <td align="center">2</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>673190103</td>
          <td>เทคโนโลยีสารสนเทศ/3 (ทท.ม.6L3 ) </td>
          <td align="center">1</td>
          <td align="center">0</td>
          <td align="center">1</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>683190101</td>
          <td>เทคโนโลยีสารสนเทศ/1 (ทท/สายตรง L1 ) </td>
          <td align="center">35</td>
          <td align="center">1</td>
          <td align="center">36</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>683190102</td>
          <td>เทคโนโลยีสารสนเทศ/2 (ทท/ม.6 L2 ) </td>
          <td align="center">16</td>
          <td align="center">3</td>
          <td align="center">19</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"><b>ปวส.2</b></td>
          <td><b>เทคโนโลยีสารสนเทศ</b></td>
          <td><b>นักพัฒนาซอฟต์แวร์คอมพิวเตอร์</b></td>
          <td align="center"><b>2</b></td>
          <td align="center"><b>0</b></td>
          <td align="center"><b>2</b></td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>653090102</td>
          <td>นักพัฒนาซอฟต์แวร์คอมพิวเตอร์/2 (ทท.2/ปกติ/ม.6L2 ) </td>
          <td align="center">2</td>
          <td align="center">0</td>
          <td align="center">2</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"><b>ปวส.2</b></td>
          <td><b>เทคโนโลยีอิเล็กทรอนิกส์</b></td>
          <td><b>เทคโนโลยีอิเล็กทรอนิกส์</b></td>
          <td align="center"><b>44</b></td>
          <td align="center"><b>15</b></td>
          <td align="center"><b>59</b></td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>683010501</td>
          <td>เทคโนโลยีอิเล็กทรอนิกส์/1 (ทอ./ม.6 L1 ) </td>
          <td align="center">20</td>
          <td align="center">4</td>
          <td align="center">24</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>683010502</td>
          <td>เทคโนโลยีอิเล็กทรอนิกส์/2 (ทอ./สายตรง L2 ) </td>
          <td align="center">24</td>
          <td align="center">11</td>
          <td align="center">35</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"><b>ปวส.2</b></td>
          <td><b>ธุรกิจการบิน</b></td>
          <td><b>ธุรกิจการบิน</b></td>
          <td align="center"><b>0</b></td>
          <td align="center"><b>9</b></td>
          <td align="center"><b>9</b></td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>683140401</td>
          <td>ธุรกิจการบิน/1 (ธบ. L1 ) </td>
          <td align="center">0</td>
          <td align="center">9</td>
          <td align="center">9</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"><b>ปวส.2</b></td>
          <td><b>ไฟฟ้า</b></td>
          <td><b>ไฟฟ้ากำลัง</b></td>
          <td align="center"><b>1</b></td>
          <td align="center"><b>0</b></td>
          <td align="center"><b>1</b></td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>663010407</td>
          <td>ไฟฟ้ากำลัง/7 (ฟก.2/ปกติ/ม.6/เอ-L7 ) </td>
          <td align="center">1</td>
          <td align="center">0</td>
          <td align="center">1</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"><b>ปวส.2</b></td>
          <td><b>ไฟฟ้า</b></td>
          <td><b>ไฟฟ้า</b></td>
          <td align="center"><b>201</b></td>
          <td align="center"><b>13</b></td>
          <td align="center"><b>214</b></td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>673010401</td>
          <td>ไฟฟ้า/1 (ฟฟ.ตรง เอL1 ) </td>
          <td align="center">0</td>
          <td align="center">2</td>
          <td align="center">2</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>673010402</td>
          <td>ไฟฟ้า/2 (ฟฟ.ตรง เอL2 ) </td>
          <td align="center">1</td>
          <td align="center">0</td>
          <td align="center">1</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>673010403</td>
          <td>ไฟฟ้า/3 (ฟฟ.ตรง บีL3 ) </td>
          <td align="center">2</td>
          <td align="center">0</td>
          <td align="center">2</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>673010404</td>
          <td>ไฟฟ้า/4 (ฟฟ.ตรง บีL4 ) </td>
          <td align="center">3</td>
          <td align="center">0</td>
          <td align="center">3</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>673010405</td>
          <td>ไฟฟ้า/5 (ฟฟ.ตรง ซีL5 ) </td>
          <td align="center">5</td>
          <td align="center">0</td>
          <td align="center">5</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>673010407</td>
          <td>ไฟฟ้า/7 (ฟฟ.ม.6เอL7 ) </td>
          <td align="center">1</td>
          <td align="center">0</td>
          <td align="center">1</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>673010409</td>
          <td>ไฟฟ้า/9 (ฟฟ.ม.6บีL9 ) </td>
          <td align="center">5</td>
          <td align="center">0</td>
          <td align="center">5</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>683010401</td>
          <td>ไฟฟ้า/1 (ฟฟ./สายตรง A L1 ) </td>
          <td align="center">23</td>
          <td align="center">0</td>
          <td align="center">23</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>683010402</td>
          <td>ไฟฟ้า/2 (ฟฟ./สายตรง A L2 ) </td>
          <td align="center">22</td>
          <td align="center">0</td>
          <td align="center">22</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>683010403</td>
          <td>ไฟฟ้า/3 (ฟฟ./สายตรง B L3 ) </td>
          <td align="center">17</td>
          <td align="center">0</td>
          <td align="center">17</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>683010404</td>
          <td>ไฟฟ้า/4 (ฟฟ./สายตรง B L4 ) </td>
          <td align="center">15</td>
          <td align="center">2</td>
          <td align="center">17</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>683010405</td>
          <td>ไฟฟ้า/5 (ฟฟ./สายตรง C L5 ) </td>
          <td align="center">23</td>
          <td align="center">0</td>
          <td align="center">23</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>683010406</td>
          <td>ไฟฟ้า/6 (ฟฟ./สายตรง C L6 ) </td>
          <td align="center">12</td>
          <td align="center">2</td>
          <td align="center">14</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>683010407</td>
          <td>ไฟฟ้า/7 (ฟฟ./ม.6 A L7 ) </td>
          <td align="center">22</td>
          <td align="center">0</td>
          <td align="center">22</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>683010408</td>
          <td>ไฟฟ้า/8 (ฟฟ./ม.6 A L8 ) </td>
          <td align="center">17</td>
          <td align="center">1</td>
          <td align="center">18</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>683010409</td>
          <td>ไฟฟ้า/9 (ฟฟ./ม.6 B L9 ) </td>
          <td align="center">17</td>
          <td align="center">0</td>
          <td align="center">17</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>683010410</td>
          <td>ไฟฟ้า/10 (ฟฟ./ม.6 B L10 ) </td>
          <td align="center">16</td>
          <td align="center">6</td>
          <td align="center">22</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"><b>ปวส.2</b></td>
          <td><b>เมคคาทรอนิกส์และหุ่นยนต์</b></td>
          <td><b>เมคคาทรอนิกส์และหุ่นยนต์</b></td>
          <td align="center"><b>17</b></td>
          <td align="center"><b>1</b></td>
          <td align="center"><b>18</b></td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>683012701</td>
          <td>เมคคาทรอนิกส์และหุ่นยนต์/1 (มค./ทวิภาคี/สายตรง L1 ) </td>
          <td align="center">7</td>
          <td align="center">0</td>
          <td align="center">7</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>683012702</td>
          <td>เมคคาทรอนิกส์และหุ่นยนต์/2 (มค./ทวิภาคี/ม.6 L2 ) </td>
          <td align="center">10</td>
          <td align="center">1</td>
          <td align="center">11</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"><b>ปวส.2</b></td>
          <td><b>อิเล็กทรอนิกส์</b></td>
          <td><b>อิเล็กทรอนิกส์การแพทย์</b></td>
          <td align="center"><b>1</b></td>
          <td align="center"><b>0</b></td>
          <td align="center"><b>1</b></td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
          <td align="center"></td>
          <td>663010501</td>
          <td>อิเล็กทรอนิกส์การแพทย์/1 (อพ.2/ปกติ/ตรง-L1 ) </td>
          <td align="center">1</td>
          <td align="center">0</td>
          <td align="center">1</td>
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

    <br>
    <center>


      <script>
        $(function() {
          //-------------
          //- BAR CHART -
          //-------------
          var barChartCanvas = $("#barChart").get(0).getContext("2d");
          var barChart = new Chart(barChartCanvas);
          var barChartData = {

            labels: ["ปวช.1", "ปวช.2", "ปวช.3", "ปวส.2"],
            datasets: [{
                label: "",
                pointStrokeColor: "#c1c7d1",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(115, 163, 31, 1)",
                data: [1, 480, 630, 820]
              },
              {
                label: "",
                pointStrokeColor: "rgba(60,141,188,1)",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(236,0,140,1)",
                data: [0, 54, 68, 96]
              }
            ]
          };
          barChartData.datasets[0].fillColor = "#38b449";
          barChartData.datasets[0].strokeColor = "#38b449";
          barChartData.datasets[0].pointColor = "#38b449";
          barChartData.datasets[1].fillColor = "#86959e";
          barChartData.datasets[1].strokeColor = "#86959e";
          barChartData.datasets[1].pointColor = "#86959e";
          var barChartOptions = {
            //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
            scaleBeginAtZero: true,
            //Boolean - Whether grid lines are shown across the chart
            scaleShowGridLines: true,
            //String - Colour of the grid lines
            scaleGridLineColor: "rgba(0,0,0,.05)",
            //Number - Width of the grid lines
            scaleGridLineWidth: 1,
            //Boolean - Whether to show horizontal lines (except X axis)
            scaleShowHorizontalLines: true,
            //Boolean - Whether to show vertical lines (except Y axis)
            scaleShowVerticalLines: true,
            //Boolean - If there is a stroke on each bar
            barShowStroke: true,
            //Number - Pixel width of the bar stroke
            barStrokeWidth: 2,
            //Number - Spacing between each of the X value sets
            barValueSpacing: 5,
            //Number - Spacing between data sets within X values
            barDatasetSpacing: 1,
            //String - A legend template
            legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].fillColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>",
            //Boolean - whether to make the chart responsive
            responsive: true,
            maintainAspectRatio: false
          };

          barChartOptions.datasetFill = false;
          barChart.Bar(barChartData, barChartOptions);
        });
      </script>

      <div class="chart-responsive"><canvas id="barChart" height="1000" width="1030" style="width: 1030px; height: 1000px;"></canvas></div>
    </center>
    <br>
    <div id="cboxOverlay" style="display: none;"></div>
    <div id="colorbox" class="" role="dialog" tabindex="-1" style="display: none;">
      <div id="cboxWrapper">
        <div>
          <div id="cboxTopLeft" style="float: left;"></div>
          <div id="cboxTopCenter" style="float: left;"></div>
          <div id="cboxTopRight" style="float: left;"></div>
        </div>
        <div style="clear: left;">
          <div id="cboxMiddleLeft" style="float: left;"></div>
          <div id="cboxContent" style="float: left;">
            <div id="cboxTitle" style="float: left;"></div>
            <div id="cboxCurrent" style="float: left;"></div><button type="button" id="cboxPrevious"></button><button type="button" id="cboxNext"></button><button id="cboxSlideshow"></button>
            <div id="cboxLoadingOverlay" style="float: left;"></div>
            <div id="cboxLoadingGraphic" style="float: left;"></div>
          </div>
          <div id="cboxMiddleRight" style="float: left;"></div>
        </div>
        <div style="clear: left;">
          <div id="cboxBottomLeft" style="float: left;"></div>
          <div id="cboxBottomCenter" style="float: left;"></div>
          <div id="cboxBottomRight" style="float: left;"></div>
        </div>
      </div>
      <div style="position: absolute; width: 9999px; visibility: hidden; display: none; max-width: none;"></div>
    </div>
  </div>
  <!--สิ้นสุด-ส่วนเนื้อหา -->

  <?php include 'footer.php'; ?> <!-- เรียกใช้ ท้ายเว็บ-->
</body>

</html>