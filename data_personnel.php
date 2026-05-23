<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--ส่วนที่เรามองเห็นได้ ของหน้าเว็บ-->
  <meta name="description" content="วิทยาลัยเทคนิคเทิง"><!-- คำอธิบาย-->
  <meta name="author" content="Phongpun Kajina"> <!-- ชื่อผู้พัฒนา-->
  <meta name="keywords" content="วิทยาลัยเทคนิคเทิง">
  <title>ข้อมูลบุคลากร-วิทยาลัยเทคนิคเทิง</title>

  <link rel="icon" href="img/logo.png">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather:400,900,900i">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <link rel="stylesheet" href="css/index.css">
  <!--<link rel="stylesheet" type="text/css"> -->
  <link rel="stylesheet" href="css/loadding.css">
  <link rel="stylesheet" href="css/Navber.css">
  <link rel="stylesheet" href="css/footer.css">
  <style>
    body {
      font-family: "Sarabun", Helvetica, Arial, tahoma;
      font-family: 'Sarabun';
      margin-top: 120px;
      margin-left: 15px;
      color: #000000;
      -webkit-text-size-adjust: none;
      font-size: 10pt;
      font-family: "Sarabun", Helvetica, Arial, tahoma;
      /*font-style: normal;
    font-weight: 400;
    src: url(https://fonts.gstatic.com/s/sarabun/v17/DtVjJx26TKEr37c9aBtJn2QN.woff2) format('woff2');
    unicode-range: U +0100 -02BA, U +02BD -02C5, U +02C7 -02CC, U +02CE -02D7, U +02DD -02FF, U +0304, U +0308, U +0329, U +1D00 -1DBF, U +1E00 -1E9F, U +1EF2 -1EFF, U +2020, U +20A0 -20AB, U +20AD -20C0, U +2113, U +2C60 -2C7F, U + A720-A7FF;
*/
    }

    .row-hover:hover {
      background-color: #F0F0F0;
    }

    .text-center {
      text-align: center;
    }
  </style>

</head>

<body>
  <?php include 'header.php'; ?> <!-- เรียกใช้ หัวเว็บ-->

  <table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="95%">

    <tbody>
      <tr>
        <td width="300" valign="top">

          <table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="95%">
            <tbody>
              <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" style="">
                <td><a href="?p=&amp;sex_id=&amp;mod=&amp;title=ข้อมูลบุคลากรทั้งหมด#data"><b><big>ข้อมูลบุคลากรทั้งหมด</big></b></a></td>
                <td>
                  <center></center>
                </td>
              </tr>
              <tr>
                <td colspan="2">
                  <hr size="1">
                </td>
              </tr>
              <tr>
                <td colspan="2"><b><big>จำแนกตามเพศ</big></b></td>
              </tr>
              <tr>
                <td width="90%"><b>เพศ</b></td>
                <td width="10%" align="center"><b>
                    <center>จำนวน</center>
                  </b></td>
              </tr>

              <tr>
                <td colspan="2">
                  <hr size="1">
                </td>
              </tr>
              <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" style="">
                <td>• <a href="?p=&amp;sex_id=1&amp;mod=&amp;title=เพศชาย#data">ชาย</a></td>
                <td>
                  <center>36</center>
                </td>
              </tr>
              <tr>
                <td colspan="2">
                  <hr size="1">
                </td>
              </tr>
              <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" style="">
                <td>• <a href="?p=&amp;sex_id=2&amp;mod=&amp;title=เพศหญิง#data">หญิง</a></td>
                <td>
                  <center>34</center>
                </td>
              </tr>
              <tr>
                <td colspan="2">
                  <hr size="1">
                </td>
              </tr>
              <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" style="">
                <td>• <a href="?p=&amp;sex_id=0&amp;mod=&amp;title=เพศไม่ระบุข้อมูล#data">ไม่ระบุข้อมูล</a></td>
                <td>
                  <center>0</center>
                </td>
              </tr>
              <tr>
                <td colspan="2">
                  <hr size="1">
                </td>
              </tr>
              <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" style="">
                <td align="right"><b>รวม</b></td>
                <td>
                  <center>70</center>
                </td>
              </tr>
              <tr>
                <td colspan="2">
                  <hr size="1">
                </td>
              </tr>
            </tbody>
          </table>

          <hr size="1">

          <table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="95%">
            <tbody>
              <tr>
                <td colspan="2"><b><big>จำแนกตามตำแหน่งวิทยะฐานะ</big></b></td>
              </tr>
              <tr>
                <td width="90%"><b>ตำแหน่งวิทยะฐานะ</b></td>
                <td width="10%" align="center"><b>
                    <center>จำนวน</center>
                  </b></td>
              </tr>
              <tr>
                <td colspan="2">
                  <hr size="1">
                </td>
              </tr>
              <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
                <td>• <a href="?p=&amp;edu_id=80&amp;mod=&amp;title=ปริญญาเอกหรือเทียบเท่า#data">ครูชำนาญการพิเศษ (คศ.3)</a></td>
                <td>
                  <center>3</center>
                </td>
              </tr>
              <tr>
                <td colspan="2">
                  <hr size="1">
                </td>
              </tr>
              <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
                <td>• <a href="?p=&amp;edu_id=80&amp;mod=&amp;title=ปริญญาเอกหรือเทียบเท่า#data">ครูชำนาญการ (คศ.2)</a></td>
                <td>
                  <center>9</center>
                </td>
              </tr>
              <tr>
                <td colspan="2">
                  <hr size="1">
                </td>
              </tr>
              <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
                <td>• <a href="?p=&amp;edu_id=80&amp;mod=&amp;title=ปริญญาเอกหรือเทียบเท่า#data">ครู (คศ.1)</a></td>
                <td>
                  <center>7</center>
                </td>
              </tr>
              <tr>
                <td colspan="2">
                  <hr size="1">
                </td>
              </tr>
              <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
                <td>• <a href="?p=&amp;edu_id=80&amp;mod=&amp;title=ปริญญาเอกหรือเทียบเท่า#data">ครูผู้ช่วย</a></td>
                <td>
                  <center>1</center>
                </td>
              </tr>
              <tr>
                <td colspan="2">
                  <hr size="1">
                </td>
              </tr>
            </tbody>
          </table>

          <hr size="1">

          <table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="95%">
            <tbody>
              <tr>
                <td colspan="2"><b><big>จำแนกตามระดับการศึกษา</big></b></td>
              </tr>
              <tr>
                <td width="90%"><b>ระดับการศึกษา</b></td>
                <td width="10%" align="center"><b>
                    <center>จำนวน</center>
                  </b></td>
              </tr>
              <tr>
                <td colspan="2">
                  <hr size="1">
                </td>
              </tr>
              <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
                <td>• <a href="?p=&amp;edu_id=80&amp;mod=&amp;title=ปริญญาเอกหรือเทียบเท่า#data">ปริญญาเอกหรือเทียบเท่า</a></td>
                <td>
                  <center></center>
                </td>
              </tr>
              <tr>
                <td colspan="2">
                  <hr size="1">
                </td>
              </tr>
              <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
                <td>• <a href="?p=&amp;edu_id=60&amp;mod=&amp;title=ปริญญาโทหรือเทียบเท่า#data">ปริญญาโทหรือเทียบเท่า</a></td>
                <td>
                  <center>15</center>
                </td>
              </tr>
              <tr>
                <td colspan="2">
                  <hr size="1">
                </td>
              </tr>
              <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
                <td>• <a href="?p=&amp;edu_id=43&amp;mod=&amp;title=ประกาศนียบัตรบัณฑิต#data">ประกาศนียบัตรบัณฑิต</a></td>
                <td>
                  <center>1</center>
                </td>
              </tr>
              <tr>
                <td colspan="2">
                  <hr size="1">
                </td>
              </tr>
              <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
                <td>• <a href="?p=&amp;edu_id=42&amp;mod=&amp;title=ประกาศนียบัตรครูเทคนิคชั้นสูง (ปทส.)#data">ประกาศนียบัตรครูเทคนิคชั้นสูง (ปทส.)</a></td>
                <td>
                  <center>1</center>
                </td>
              </tr>
              <tr>
                <td colspan="2">
                  <hr size="1">
                </td>
              </tr>
              <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
                <td>• <a href="?p=&amp;edu_id=41&amp;mod=&amp;title=ปริญญาตรีหรือเทียบเท่า#data">ปริญญาตรีหรือเทียบเท่า</a></td>
                <td>
                  <center>58</center>
                </td>
              </tr>
              <tr>
                <td colspan="2">
                  <hr size="1">
                </td>
              </tr>
              <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
                <td>• <a href="?p=&amp;edu_id=30&amp;mod=&amp;title=ประกาศนียบัตรวิชาชีพชั้นสูง (ปวส.)#data">ประกาศนียบัตรวิชาชีพชั้นสูง (ปวส.)</a></td>
                <td>
                  <center>3</center>
                </td>
              </tr>
              <tr>
                <td colspan="2">
                  <hr size="1">
                </td>
              </tr>
              <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
                <td>• <a href="?p=&amp;edu_id=6&amp;mod=&amp;title=มัธยมศึกษาตอนปลาย (สายสามัญ)#data">มัธยมศึกษาตอนปลาย (สายสามัญ)</a></td>
                <td>
                  <center>5</center>
                </td>
              </tr>
              <tr>
                <td colspan="2">
                  <hr size="1">
                </td>
              </tr>
              <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
                <td>• <a href="?p=&amp;edu_id=5&amp;mod=&amp;title=มัธยมศึกษาตอนต้น#data">มัธยมศึกษาตอนต้น</a></td>
                <td>
                  <center>3</center>
                </td>
              </tr>
              <tr>
                <td colspan="2">
                  <hr size="1">
                </td>
              </tr>
              <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
                <td>• <a href="?p=&amp;edu_id=3&amp;mod=&amp;title=ประถมศึกษา#data">ประถมศึกษา</a></td>
                <td>
                  <center>2</center>
                </td>
              </tr>
              <tr>
                <td colspan="2">
                  <hr size="1">
                </td>
              </tr>
              <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
                <td>• <a href="?p=&amp;edu_id=0&amp;mod=&amp;title=ไม่ระบุ#data">ไม่ระบุ</a></td>
                <td>
                  <center>8</center>
                </td>
              </tr>
              <tr>
                <td colspan="2">
                  <hr size="1">
                </td>
              </tr>
            </tbody>
          </table>

          <hr size="1">

          <table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="95%">
            <tbody>
              <tr>
                <td colspan="2"><b><big>จำแนกตามแผนกและหน่วยงาน</big></b></td>
              </tr>
              <tr>
                <td width="90%"><b>แผนกและหน่วยงาน</b></td>
                <td width="10%" align="center"><b>
                    <center>จำนวน</center>
                  </b></td>
              </tr>
              <tr>
                <td colspan="2">
                  <hr size="1">
                </td>
              </tr>
              <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
                <td>• <a href="?p=&amp;people_dep_id=director&amp;mod=&amp;title=ผู้บริหารสถานศึกษา#data"><b>ผู้บริหารสถานศึกษา</b></a></td>
                <td></td>
              </tr>
              <tr>
                <td colspan="2">
                  <hr size="1">
                </td>
              </tr>
              <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
                <td>• <a href="?p=&amp;people_dep_id=1&amp;mod=&amp;title=วิทยาลัยเทคนิคเชียงใหม่#data">วิทยาลัยเทคนิคเทิง</a></td>
                <td>
                  <center>1</center>
                </td>
              </tr>
              <tr>
                <td colspan="2">
                  <hr size="1">
                </td>
              </tr>
              <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
                <td>• <a href="?p=&amp;people_dep_id=4&amp;mod=&amp;title=ฝ่ายบริหารทรัพยากร#data">ฝ่ายบริหารทรัพยากร</a></td>
                <td>
                  <center>1</center>
                </td>
              </tr>
              <tr>
                <td colspan="2">
                  <hr size="1">
                </td>
              </tr>
              <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
                <td>• <a href="?p=&amp;people_dep_id=3&amp;mod=&amp;title=ฝ่ายยุทธศาสตร์และแผนงาน#data">ฝ่ายยุทธศาสตร์และแผนงาน</a></td>
                <td>
                  <center>1</center>
                </td>
              </tr>
              <tr>
                <td colspan="2">
                  <hr size="1">
                </td>
              </tr>
              <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
                <td>• <a href="?p=&amp;people_dep_id=5&amp;mod=&amp;title=ฝ่ายพัฒนากิจการนักเรียน นักศึกษา#data">ฝ่ายพัฒนากิจการนักเรียน นักศึกษา</a></td>
                <td>
                  <center>1</center>
                </td>
              </tr>
              <tr>
                <td colspan="2">
                  <hr size="1">
                </td>
              </tr>
              <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
                <td>• <a href="?p=&amp;people_dep_id=2&amp;mod=&amp;title=ฝ่ายวิชาการ#data">ฝ่ายวิชาการ</a></td>
                <td>
                  <center>2</center>
                </td>
              </tr>
              <tr>
                <td colspan="2">
                  <hr size="1">
                </td>
              </tr>
              <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
                <td>• <a href="?p=&amp;people_dep_id=200&amp;mod=&amp;title=แผนกวิชาช่างยนต์#data">แผนกวิชาช่างยนต์</a></td>
                <td>
                  <center>6</center>
                </td>
              </tr>
              <tr>
                <td colspan="2">
                  <hr size="1">
                </td>
              </tr>
              <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
                <td>• <a href="?p=&amp;people_dep_id=207&amp;mod=&amp;title=แผนกวิชาช่างกลโรงงาน#data">แผนกวิชาช่างกลโรงงาน</a></td>
                <td>
                  <center>5</center>
                </td>
              </tr>
              <tr>
                <td colspan="2">
                  <hr size="1">
                </td>
              </tr>
              <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
                <td>• <a href="?p=&amp;people_dep_id=210&amp;mod=&amp;title=แผนกวิชาช่างเชื่อมโลหะ#data">แผนกวิชาช่างเชื่อมโลหะ</a></td>
                <td>
                  <center>3</center>
                </td>
              </tr>
              <tr>
                <td colspan="2">
                  <hr size="1">
                </td>
              </tr>
              <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
                <td>• <a href="?p=&amp;people_dep_id=211&amp;mod=&amp;title=แผนกวิชาช่างไฟฟ้า#data">แผนกวิชาช่างไฟฟ้า</a></td>
                <td>
                  <center>7</center>
                </td>
              </tr>
              <tr>
                <td colspan="2">
                  <hr size="1">
                </td>
              </tr>
              <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
                <td>• <a href="?p=&amp;people_dep_id=201&amp;mod=&amp;title=แผนกวิชาช่างอิเล็กทรอนิกส์#data">แผนกวิชาช่างอิเล็กทรอนิกส์</a></td>
                <td>
                  <center>4</center>
                </td>
              </tr>
              <tr>
                <td colspan="2">
                  <hr size="1">
                </td>
              </tr>
              <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
                <td>• <a href="?p=&amp;people_dep_id=212&amp;mod=&amp;title=แผนกวิชาช่างก่อสร้าง#data">แผนกวิชาช่างก่อสร้าง</a></td>
                <td>
                  <center>4</center>
                </td>
              </tr>
              <tr>
                <td colspan="2">
                  <hr size="1">
                </td>
              </tr>
              <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
                <td>• <a href="?p=&amp;people_dep_id=250&amp;mod=&amp;title=แผนกวิชาสามัญสัมพันธ์#data">สาขาวิชาการบัญชี</a></td>
                <td>
                  <center>7</center>
                </td>
              </tr>
              <tr>
                <td colspan="2">
                  <hr size="1">
                </td>
              </tr>
              <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
                <td>• <a href="?p=&amp;people_dep_id=209&amp;mod=&amp;title=แผนกวิชาเทคโนโลยีสารสนเทศ#data">แผนกคอมพิวเตอร์เทคโนโลยีสารสนเทศ</a></td>
                <td>
                  <center>3</center>
                </td>
              </tr>
              <tr>
                <td colspan="2">
                  <hr size="1">
                </td>
              </tr>
              <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
                <td>• <a href="?p=&amp;people_dep_id=250&amp;mod=&amp;title=แผนกวิชาสามัญสัมพันธ์#data">แผนกวิชาสามัญสัมพันธ์</a></td>
                <td>
                  <center>7</center>
                </td>
              </tr>
              <tr>
                <td colspan="2">
                  <hr size="1">
                </td>
              </tr>
              <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
                <td>• <a href="?p=&amp;people_dep_id=906&amp;mod=&amp;title=งานบริหารงานทั่วไป#data">งานบริหารงานทั่วไป</a></td>
                <td>
                  <center>3</center>
                </td>
              </tr>
              <tr>
                <td colspan="2">
                  <hr size="1">
                </td>
              </tr>
              <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
                <td>• <a href="?p=&amp;people_dep_id=326&amp;mod=&amp;title=งานบริหารและพัฒนาทรัพยากรบุคคล#data">งานบริหารและพัฒนาทรัพยากรบุคคล</a></td>
                <td>
                  <center>5</center>
                </td>
              </tr>
              <tr>
                <td colspan="2">
                  <hr size="1">
                </td>
              </tr>
              <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
                <td>• <a href="?p=&amp;people_dep_id=304&amp;mod=&amp;title=งานการเงิน#data">งานการเงิน</a></td>
                <td>
                  <center>6</center>
                </td>
              </tr>
              <tr>
                <td colspan="2">
                  <hr size="1">
                </td>
              </tr>
              <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
                <td>• <a href="?p=&amp;people_dep_id=310&amp;mod=&amp;title=งานการบัญชี#data">งานการบัญชี</a></td>
                <td>
                  <center>3</center>
                </td>
              </tr>
              <tr>
                <td colspan="2">
                  <hr size="1">
                </td>
              </tr>
              <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
                <td>• <a href="?p=&amp;people_dep_id=312&amp;mod=&amp;title=งานพัสดุ#data">งานพัสดุ</a></td>
                <td>
                  <center>3</center>
                </td>
              </tr>
              <tr>
                <td colspan="2">
                  <hr size="1">
                </td>
              </tr>
              <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
                <td>• <a href="?p=&amp;people_dep_id=339&amp;mod=&amp;title=งานพัสดุ (พนักงานขับรถยนต์)#data">งานพัสดุ (พนักงานขับรถยนต์)</a></td>
                <td>
                  <center>2</center>
                </td>
              </tr>
              <tr>
                <td colspan="2">
                  <hr size="1">
                </td>
              </tr>
              <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
                <td>• <a href="?p=&amp;people_dep_id=315&amp;mod=&amp;title=งานอาคารสถานที่#data">งานอาคารสถานที่</a></td>
                <td>
                  <center>17</center>
                </td>
              </tr>
              <tr>
                <td colspan="2">
                  <hr size="1">
                </td>
              </tr>
              <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
                <td>• <a href="?p=&amp;people_dep_id=302&amp;mod=&amp;title=งานทะเบียน#data">งานทะเบียน</a></td>
                <td>
                  <center>8</center>
                </td>
              </tr>
              <tr>
                <td colspan="2">
                  <hr size="1">
                </td>
              </tr>
              <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
                <td>• <a href="?p=&amp;people_dep_id=331&amp;mod=&amp;title=งานพัฒนายุทธศาสตร์แผนงานและงบประมาณ#data">งานพัฒนายุทธศาสตร์แผนงานและงบประมาณ</a></td>
                <td>
                  <center>5</center>
                </td>
              </tr>
              <tr>
                <td colspan="2">
                  <hr size="1">
                </td>
              </tr>
              <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
                <td>• <a href="?p=&amp;people_dep_id=307&amp;mod=&amp;title=งานมาตราฐานและการประกันคุณภาพการศึกษา#data">งานมาตราฐานและการประกันคุณภาพการศึกษา</a></td>
                <td>
                  <center>6</center>
                </td>
              </tr>

              <tr>
                <td colspan="2">
                  <hr size="1">
                </td>
              </tr>
              <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
                <td>• <a href="?p=&amp;people_dep_id=303&amp;mod=&amp;title=งานศูนย์ดิจิทัลและสื่อสารองค์กร (ศูนย์ข้อมูล)#data">งานศูนย์ดิจิทัลและสื่อสารองค์กร (ศูนย์ข้อมูล)</a></td>
                <td>
                  <center>4</center>
                </td>
              </tr>
              <tr>
                <td colspan="2">
                  <hr size="1">
                </td>
              </tr>
              <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
                <td>• <a href="?p=&amp;people_dep_id=322&amp;mod=&amp;title=งานส่งเสริมการวิจัย นวัตกรรมและสิ่งประดิษฐ์#data">งานส่งเสริมการวิจัย นวัตกรรมและสิ่งประดิษฐ์</a></td>
                <td>
                  <center>8</center>
                </td>
              </tr>
              <tr>
                <td colspan="2">
                  <hr size="1">
                </td>
              </tr>
              <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
                <td>• <a href="?p=&amp;people_dep_id=317&amp;mod=&amp;title=งานส่งเสริมธุรกิจและการเป็นผู้ประกอบการ#data">งานส่งเสริมธุรกิจและการเป็นผู้ประกอบการ</a></td>
                <td>
                  <center>6</center>
                </td>
              </tr>
              <tr>
                <td colspan="2">
                  <hr size="1">
                </td>
              </tr>
              <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
                <td>• <a href="?p=&amp;people_dep_id=317&amp;mod=&amp;title=งานส่งเสริมธุรกิจและการเป็นผู้ประกอบการ#data">งานติดตามและประเมินผลการอาชีวศึกษา</a></td>
                <td>
                  <center>6</center>
                </td>
              </tr>
              <tr>
                <td colspan="2">
                  <hr size="1">
                </td>
              </tr>
              <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
                <td>• <a href="?p=&amp;people_dep_id=328&amp;mod=&amp;title=งานกิจกรรมนักเรียน นักศึกษา#data">งานกิจกรรมนักเรียน นักศึกษา</a></td>
                <td>
                  <center>17</center>
                </td>
              </tr>
              <tr>
                <td colspan="2">
                  <hr size="1">
                </td>
              </tr>
              <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
                <td>• <a href="?p=&amp;people_dep_id=318&amp;mod=&amp;title=งานครูที่ปรึกษาและการแนะแนว#data">งานครูที่ปรึกษาและการแนะแนว</a></td>
                <td>
                  <center>12</center>
                </td>
              </tr>
              <tr>
                <td colspan="2">
                  <hr size="1">
                </td>
              </tr>
              <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
                <td>• <a href="?p=&amp;people_dep_id=330&amp;mod=&amp;title=งานปกครองและความปลอดภัยนักเรียน นักศึกษา#data">งานปกครองและความปลอดภัยนักเรียน นักศึกษา</a></td>
                <td>
                  <center>13</center>
                </td>
              </tr>
              <tr>
                <td colspan="2">
                  <hr size="1">
                </td>
              </tr>
              <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
                <td>• <a href="?p=&amp;people_dep_id=313&amp;mod=&amp;title=งานสวัสดิการนักเรียน นักศึกษา#data">งานสวัสดิการนักเรียน นักศึกษา</a></td>
                <td>
                  <center>4</center>
                </td>
              </tr>
              <tr>
                <td colspan="2">
                  <hr size="1">
                </td>
              </tr>
              <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
                <td>• <a href="?p=&amp;people_dep_id=320&amp;mod=&amp;title=งานโครงการพิเศษและการบริการสังคม#data">งานโครงการพิเศษและการบริการสังคม</a></td>
                <td>
                  <center>6</center>
                </td>
              </tr>
              <tr>
                <td colspan="2">
                  <hr size="1">
                </td>
              </tr>
              <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
                <td>• <a href="?p=&amp;people_dep_id=333&amp;mod=&amp;title=งานพัฒนาหลักสูตรและการจัดเรียนการเรียนรู้#data">งานพัฒนาหลักสูตรและการจัดเรียนการเรียนรู้</a></td>
                <td>
                  <center>6</center>
                </td>
              </tr>
              <tr>
                <td colspan="2">
                  <hr size="1">
                </td>
              </tr>
              <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
                <td>• <a href="?p=&amp;people_dep_id=319&amp;mod=&amp;title=งานวัดผลและประเมินผล#data">งานวัดผลและประเมินผล</a></td>
                <td>
                  <center>9</center>
                </td>
              </tr>
              <tr>
                <td colspan="2">
                  <hr size="1">
                </td>
              </tr>
              <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
                <td>• <a href="?p=&amp;people_dep_id=336&amp;mod=&amp;title=งานอาชีวศึกษาระบบทวิภาคีและความร่วมมือ#data">งานอาชีวศึกษาระบบทวิภาคีและความร่วมมือ</a></td>
                <td>
                  <center>1</center>
                </td>
              </tr>
              <tr>
                <td colspan="2">
                  <hr size="1">
                </td>
              </tr>
              <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
                <td>• <a href="?p=&amp;people_dep_id=305&amp;mod=&amp;title=งานวิทยบริการและเทคโนโลยีการศึกษา (สื่อการเรียนการสอน)#data">งานวิทยบริการและเทคโนโลยีการศึกษา (สื่อการเรียนการสอน)</a></td>
                <td>
                  <center>6</center>
                </td>
              </tr>

              <tr>
                <td colspan="2">
                  <hr size="1">
                </td>
              </tr>
              <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
                <td>• <a href="?p=&amp;people_dep_id=309&amp;mod=&amp;title=งานการศึกษาพิเศษและความเสมอภาคทางการศึกษา#data">งานการศึกษาพิเศษและความเสมอภาคทางการศึกษา</a></td>
                <td>
                  <center>6</center>
                </td>
              </tr>
              <tr>
                <td colspan="2">
                  <hr size="1">
                </td>
              </tr>
              <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
                <td>• <a href="?p=&amp;people_dep_id=401&amp;mod=&amp;title=ภาควิชาเทคโนโลยีสารสนเทศ#data">งานพัฒนาหลักสูตรสายเทคโนโลยีหรือสายปฎิบัติการ</a></td>
                <td>
                  <center>1</center>
                </td>
              </tr>
              <tr>
                <td colspan="2">
                  <hr size="1">
                </td>
              </tr>
              <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
                <td>• <a href="?p=&amp;people_dep_id=338&amp;mod=&amp;title=งานกิจกรรมลูกเสือ (หน่วย วิทยาลัยเทคนิคเชียงใหม่)#data">งานกิจกรรมลูกเสือ (หน่วย วิทยาลัยเทคนิคเทิง)</a></td>
                <td>
                  <center>2</center>
                </td>
              </tr>
              <tr>
                <td colspan="2">
                  <hr size="1">
                </td>
              </tr>
              <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
                <td>• <a href="?p=&amp;people_dep_id=341&amp;mod=&amp;title=งานกิจกรรม อ.ช.ท. (หน่วย วิทยาลัยเทคนิคเชียงใหม่)#data">งานกิจกรรม อ.ช.ท. (หน่วย วิทยาลัยเทคนิคเทิง)</a></td>
                <td>
                  <center>1</center>
                </td>
              </tr>
              <tr>
                <td colspan="2">
                  <hr size="1">
                </td>
              </tr>
              <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
                <td>• <a href="?p=&amp;people_dep_id=343&amp;mod=&amp;title=งานกิจกรรมนักศึกษาวิชาทหาร#data">งานกิจกรรมนักศึกษาวิชาทหาร</a></td>
                <td>
                  <center>2</center>
                </td>
              </tr>
              <tr>
                <td colspan="2">
                  <hr size="1">
                </td>
              </tr>
              <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
                <td>• <a href="?p=&amp;people_dep_id=404&amp;mod=&amp;title=งานศูนย์บ่มเพาะวิสาหกิจสถานศึกษา#data">งานศูนย์บ่มเพาะวิสาหกิจสถานศึกษา</a></td>
                <td>
                  <center>7</center>
                </td>
              </tr>

              <tr>
                <td colspan="2">
                  <hr size="1">
                </td>
              </tr>
              <tr onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top">
                <td>• <a href="?p=&amp;people_dep_id=999&amp;mod=&amp;title=ผู้ดูแลระบบหลัก#data">ผู้ดูแลระบบหลัก</a></td>
                <td>
                  <center>4</center>
                </td>
              </tr>
              <tr>
                <td colspan="2">
                  <hr size="1">
                </td>
              </tr>
            </tbody>
          </table>


          <hr size="1">

          <table align="center" border="0" cellpadding="0" cellspacing="0" class="table table-striped table-hover" width="95%">
            <tbody>
              <tr>
                <td colspan="2"><b><big>จำแนกตามตำแหน่งหน้าที่</big><b></b></b></td>
              </tr>
              <tr>
                <td width="90%"><b>ตำแหน่งหน้าที่</b></td>
                <td width="10%" align="center"><b>
                    <center>จำนวน <br>(ตำแหน่ง)</center>
                  </b></td>

              </tr>
            </tbody>
          </table>



        </td>
        <td width="70%" valign="top">
          <a name="data"></a>
          <b><big></big></b>
          <br><br>


          <br><br>
          <center><big><b>ผู้อำนวยการ</b></big>
            <hr size="1">
          </center><br><br>
          <table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="95%">

            <tbody>
              <tr valign="top">
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%" style=""><img src="./img/ceo.png" width="120" border="1"><br><b>ว่าที่ร้อยตรี สมฤทธิ์ ไกลถิ่น </b><br>ผู้อำนวยการ วิทยาลัยเทคนิคเทิง <br>ผู้บริหาร ชำนาญการพิเศษ <br><br><br></td>
              </tr>
            </tbody>
          </table><br><br>
          <center><big><b>รองผู้อำนวยการ</b></big>
            <hr size="1">
          </center><br><br>
          <table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="95%">
            <tbody>
              <tr>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%" style=""><img src="./img/ce1.png" width="120" border="1"><br><b>นายจตุพล ขันตี</b><br>รองผู้อำนวยการ ฝ่ายบริหารทรัพยากร <br>ผู้บริหาร ชำนาญการ<br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%" style=""><img src="./img/ce2.png" width="120" border="1"><br><b>นางสมศรี แสงศรีจันทร์</b><br>รองผู้อำนวยการ ฝ่ายยุทธศาสตร์และแผนงาน <br>ผู้บริหาร ชำนาญการ <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%" style=""><img src="./img/ce3.png" width="120" border="1"><br><b>นายลิขิต ขัดแก้ว</b><br>รองผู้อำนวยการ ฝ่ายพัฒนากิจการนักเรียน นักศึกษา<br>ผู้บริหาร ชำนาญการพิเศษ<br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%" style=""><img src="./img/ce4.png" width="120" border="1"><br><b>นายวิทยา พิชยาปรีชาพล</b><br>รองผู้อำนวยการ ฝ่ายวิชาการ <br>ผู้บริหาร ชำนาญการ<br><br><br></td>
              </tr>
              <tr valign="top"></tr>
            </tbody>
          </table><br><br>
          <center><big><b>หัวหน้าแผนก</b></big>
            <hr size="1">
          </center><br><br>
          <table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="95%">
            <tbody>
              <tr>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="./img/kru_section/kru_auto_mechanic/Sittichai_Wiangkham.jpg" width="120" border="1"><br><b>นายสิทธิชัย เวียงคำ </b><br>หัวหน้าแผนก วิชาช่างยนต์ <br>ครู ชำนาญการ<br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="./img/kru_section/kru_factory/f1.jpg" width="120" border="1"><br><b>นายธนกฤต เอมอยู่</b><br>หัวหน้าแผนก วิชาช่างกลโรงงาน <br>ครูผู้ช่วย แผนกวิชาช่างกลโรงงาน<br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="./img/kru_section/kru_welders/Chalermphop_jaiwong.jpg" width="120" border="1"><br><b>นายเฉลิมภพ ใจวงศ์ </b><br>หัวหน้าแผนก วิชาช่างเชื่อมโลหะ <br>พนักงานราชการ (ครู) แผนกวิชาช่างเชื่อมโลหะ<br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="./img/kru_section/kru_electrical/Supot_Tuekham.jpg" width="120" border="1"><br><b>นายสุพจน์ ตื้อคำ</b><br>หัวหน้าแผนก วิชาช่างไฟฟ้า <br>พนักงานราชการ (ครู) แผนกวิชาช่างไฟฟ้า<br><br><br></td>
              </tr>
              <tr valign="top">
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="./img/kru_section/kru_electronics/Niran_Srithong.jpg" width="120" border="1"><br><b>นายนิรันดร์ ศรีทอง </b><br>หัวหน้าแผนก วิชาช่างอิเล็กทรอนิกส์ <br>ครู<br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="./img/kru_section/kru_construction/Ramil_Ratchakhom.jpg" width="120" border="1"><br><b>นายรามิล ราชคมน์ </b><br>หัวหน้าแผนก วิชาช่างก่อสร้าง <br>ครู <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="./img/kru_section/kru_accountants/Naulsiri_Manrai.jpg" width="120" border="1"><br><b>นางนวลสิริ หมั่นไร่ </b><br>หัวหน้าสาขา วิชาการบัญชี <br>ครู <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="./img/kru_section/kru_it/Phongpun_Kajina1.jpg" width="120" border="1"><br><b>นายพงษ์พันธ์ กาจินะ</b><br>หัวหน้าแผนก คอมพิวเตอร์เทคโนโลยีสารสนเทศ <br>ครู<br><br><br></td>
              </tr>
              <tr valign="top">
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="./img/kru_section/kru_general/นายหล่ง สมฤทธิ์.jpg" width="120" border="1"><br><b>นายหล่ง สมฤทธิ์</b><br>หัวหน้าแผนก วิชาสามัญสัมพันธ์ <br>ครู ชำนาญการ<br><br><br></td>

              </tr>
              <tr valign="top"></tr>
            </tbody>
          </table><br><br>
          <center><big><b>หัวหน้างาน</b></big>
            <hr size="1">
          </center><br><br>
          <table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="95%">
            <tbody>
              <tr>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="./img/kru_section/images.png" width="120" border="1"><br><b>นาย... </b><br>หัวหน้างาน งานบริหารงานทั่วไป <br>ครูประจำ แผนกวิชา... <br>ครู ...<br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="./img/kru_section/images.png" width="120" border="1"><br><b>นาย...</b><br>หัวหน้างาน งานบริหารและพัฒนาทรัพยากรบุคคล <br>ครูประจำ แผนกวิชา...<br>ครู<br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="./img/kru_section/kru_accountants/Naulsiri_Manrai.jpg" width="120" border="1"></><br><b>นางนวลสิริ หมั่นไร่</b><br>หัวหน้างาน งานการเงิน <br>ครูประจำ สาขาวิชาการบัญชี<br>ครู <br>โฮมเพจ : <a href="www.hongkum@cmtc.ac.th" target="_blank"><img src="soc_login.png" border="0" width="16"></a><br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="./img/kru_section/kru_accountants/นางสาวณัฐชาพรรณ วงศ์ชัย.jpg" width="120" border="1"><br><b>นางสาวณัฐชาพรรณ วงศ์ชัย</b><br>หัวหน้างาน งานการบัญชี <br>ครูประจำ สาขาวิชาการบัญชี<br>ครู <br><br><br></td>
              </tr>
              <tr valign="top">
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="./img/kru_section/kru_electronics/Niran_Srithong.jpg" width="120" border="1"><br><b>นายนิรันดร์ ศรีทอง</b><br>หัวหน้างาน งานพัสดุ <br>ครูประจำ แผนกวิชาช่างอิเล็กทรอนิกส์ <br>ครู <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="./img/kru_section/kru_construction/Niruj_Inthep.jpg" width="120" border="1"><br><b>นายนิรุจน์ อินเทพ </b><br>หัวหน้างาน งานอาคารสถานที่ <br>ครูประจำ แผนกวิชาช่างก่อสร้าง<br>ครู <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="./img/kru_section/kru_accountants/Prakai_Ton_kanya.jpg" width="120" border="1"></a><br><b>นางประกาย ตันกันยา</b><br>หัวหน้างาน งานทะเบียน <br>ครูประจำ สาขาวิชาการบัญชี<br>พนักงานราชการ (ครู) สาขาวิชาการบัญชี<br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="./img/kru_section/kru_accountants/เครือฟ้า เชียงแขก ครูชำนาญการพิเศษ.jpg" width="120" border="1"></a><br><b>นางเครือฟ้า เชียงแขก</b><br>หัวหน้างาน งานพัฒนายุทธศาสตร์แผนงานและงบประมาณ <br>ครูประจำ สาขาวิชาการบัญชี<br>ครู ชำนาญการพิเศษ<br><br><br></td>
              </tr>
              <tr valign="top">
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="./img/kru_section/kru_auto_mechanic/Worawit_Panin.jpg" width="120" border="1"><br><b>นายวรวิช ปันอินทร์</b><br>หัวหน้างาน งานมาตรฐานและการประกันคุณภาพการศึกษา<br>ครูประจำ แผนกวิชาช่างยนต์ <br>พนักงานราชการ (ครู) แผนกวิชาช่างยนต์<br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="./img/kru_section/kru_it/Phongpun_Kajina1.jpg" width="120" border="1"><br><b>นายพงษ์พันธ์ กาจินะ</b><br>หัวหน้างาน งานศูนย์ดิจิทัลและสื่อสารองค์กร <br>ครูประจำ แผนกคอมพิวเตอร์เทคโนโลยีสารสนเทศ <br>ครู <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="./img/kru_section/kru_welders/Chalermphop_jaiwong.jpg" width="120" border="1"><br><b>นายเฉลิมภพ ใจวงศ์ </b><br>หัวหน้างาน งานส่งเสริมการวิจัย นวัตกรรม และสิ่งประดิษฐ์ <br>ครูประจำ แผนกวิชาช่างเชื่อมโลหะ <br>พนักงานราชการ (ครู) แผนกวิชาช่างเชื่อมโลหะ<br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="./img/kru_section/kru_accountants/ครูจตุพร เมืองมา พนักงานราชการ.jpg" width="120" border="1"><br><b>นางสาวจตุพร เมืองมา </b><br>หัวหน้างาน งานส่งเสริมธุรกิจและการเป็นผู้ประกอบการ <br>ครูประจำ สาขาวิชาการบัญชี<br>พนักงานราชการ (ครู) สาขาวิชาการบัญชี<br><br><br></td>
              </tr>
              <tr valign="top">
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="./img/kru_section/kru_accountants/เครือฟ้า เชียงแขก ครูชำนาญการพิเศษ.jpg" width="120" border="1"></a><br><b>นางเครือฟ้า เชียงแขก</b><br>หัวหน้างาน ติดตามและประเมินผลการอาชีวศึกษา <br>ครูประจำ สาขาวิชาการบัญชี<br>ครู ชำนาญการพิเศษ<br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="./img/kru_section/kru_factory/f2.jpg" width="120" border="1"><br><b>นายสันติ พลเยี่ยม</b><br>หัวหน้างาน งานกิจกรรมนักเรียนนักศึกษา <br>ครูประจำ แผนกวิชาช่างกลโรงงาน <br>พนักงานราชการ (ครู) แผนกวิชาช่างกลโรงงาน<br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="./img/kru_section/kru_general/Unchalee_Wiangkham.jpg" width="120" border="1"><br><b>นางอัญชลี เวียงคำ </b><br>หัวหน้างาน งานครูที่ปรึกษาและการแนะแนว <br>ครูประจำ แผนกวิชาสามัญสัมพันธ์ <br>ครู ชำนาญการ<br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="./img/kru_section/kru_general/Watcharapong_Manowong.jpg" width="120" border="1"><br><b>นายวัชรพงษ์ มะโนวงค์ </b><br>หัวหน้างาน งานปกครองและความปลอดภัยนักเรีนนักศึกษา <br>ครูประจำ แผนกวิชาสามัญสัมพันธ์ <br>พนักงานราชการ (ครู) แผนกวิชาสามัญสัมพันธ์<br><br><br></td>
              </tr>
              <tr valign="top">
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="./img/kru_section/kru_auto_mechanic/Somkid_Atathum.jpg" width="120" border="1"><br><b>นายสมคิด อะทะถ้ำ</b><br>หัวหน้างาน งานสวัสดิการนักเรียน นักศึกษา <br>ครูประจำ แผนกวิชาช่างยนต์ <br>พนักงานราชการ (ครู) แผนกวิชาช่างยนต์<br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="./img/kru_section/images.png" width="120" border="1"><br><b>นาย...</b><br>หัวหน้างาน งานโครงการพิเศษและการบริการสังคม <br>ครูประจำ แผนก...<br>ครู<br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="./img/kru_section/kru_electronics/Pornpoch_Sitti.jpg" width="120" border="1"><br><b>นายพรพจน์ สิทธิ</b><br>หัวหน้างาน งานพัฒนาหลักสูตรการเรียนการสอนและการจัดการเรียนรู้ <br>ครูประจำ แผนกวิชาช่างอิเล็กทรอนิกส์<br>พนักงานราชการ (ครู) แผนกวิชาช่างอิเล็กทรอนิกส์<br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="./img/kru_section/kru_general/Unchalee_Wiangkham.jpg" width="120" border="1"><br><b>นางอัญชลี เวียงคำ </b><br>หัวหน้างาน งานวัดผลและประเมินผล <br>ครูประจำ แผนกวิชาสามัญสัมพันธ์ <br>ครู ชำนาญการ<br><br><br></td>
              </tr>
              <tr valign="top">
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="./img/kru_section/images.png" width="120" border="1"><br><b>นายพงษ์ศิริ โฉมยา</b><br>หัวหน้างาน งานอาชีวศึกษาระบบทวิภาคีและความร่วมมือ<br>ครูประจำ แผนกวิชาช่างไฟฟ้า<br>ครู ชำนาญการ</a><br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="./img/kru_section/images.png" width="120" border="1"><br><b>นายสมคิด ไชยวงค์ </b><br>หัวหน้างาน งานวิทยบริการและเทคโนโลยีการศึกษา (สื่อการเรียนการสอน) <br>ครูประจำ แผนกวิชาช่างไฟฟ้า<br>พนักงานราชการ (ครู) แผนกวิชาช่างไฟฟ้า<br><br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="./img/kru_section/images.png" width="120" border="1"><br><b>นาย... </b><br>หัวหน้างาน งานการศึกษาพิเศษและความเสมอภาคทางการศึกษา<br>ครูประจำ แผนก...<br>ครู... <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="./img/kru_section/images.png" width="120" border="1"><br><b>นาย...</b><br>หัวหน้างาน งานพัฒนาหลักสูตรสายเทคโนโลยีหรือสายปฎิบัติการ<br>ครูประจำ แผนก...<br>ครู...<br><br><br></td>
              </tr>
            </tbody>
          </table><br><br>
          <center><big><b>ครูประจำ</b></big>
            <hr size="1">
          </center><br><br>
          <table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="95%">
            <tbody>
              <tr>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/55293_16080310103710.jpg" width="120" border="1"><br><b>นายนิมิต รัศมี </b><br>ครูประจำ แผนกวิชาเทคโนโลยียานยนต์ <br>บุคลากร/อาจารย์ผู้สอน ศูนย์ประสานงานการจัดการศึกษา ระดับปริญญาตรี <br>ครู ชำนาญการพิเศษ<br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/55293_16072813134250.jpg" width="120" border="1"><br><b>นายธวัช นนทธรรม </b><br>ครูประจำ แผนกวิชาเทคโนโลยียานยนต์ <br>บุคลากร/อาจารย์ผู้สอน ศูนย์ประสานงานการจัดการศึกษา ระดับปริญญาตรี <br>ครู ชำนาญการ<br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/55293_16080310102938.jpg" width="120" border="1"><br><b>นายธวัชชัย คุณสารวนิช </b><br>ครูประจำ แผนกวิชาช่างอิเล็กทรอนิกส์ <br>เจ้าหน้าที่ งานสวัสดิการนักเรียน นักศึกษา <br>เจ้าหน้าที่ งานส่งเสริมการวิจัย นวัตกรรมและสิ่งประดิษฐ์ <br>ผู้ช่วยหัวหน้างาน งานมาตราฐานและการประกันคุณภาพการศึกษา <br>ครู ชำนาญการ<br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/55293_16100615151809.jpg" width="120" border="1"><br><b>นายสาทร พึ่งพุ่มแก้ว </b><br>ครูประจำ แผนกวิชาช่างอิเล็กทรอนิกส์ <br>ครู ชำนาญการพิเศษ<br><br><br></td>
              </tr>
              <tr valign="top">
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_17091417173057.jpg" width="120" border="1"><br><b>นายอภิชาติ แก้วประดิษฐ์ </b><br>ครูประจำ แผนกวิชาช่างไฟฟ้า <br>เจ้าหน้าที่ งานครูที่ปรึกษาและการแนะแนว <br>เจ้าหน้าที่ งานอาชีวศึกษาระบบทวิภาคี <br>ครู ชำนาญการพิเศษ<br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/55293_16100615151921.jpg" width="120" border="1"><br><b>นางธมลวรรณ ปรมาธิกุล </b><br>ครูประจำ แผนกวิชาภาษาอังกฤษ <br>ครูประจำ แผนกวิชาสามัญสัมพันธ์ <br>ผู้ช่วยหัวหน้างาน งานวัดผลและประเมินผล <br>ผู้ช่วยหัวหน้างาน งานพัฒนายุทธศาสตร์แผนงานและงบประมาณ <br>บุคลากร/อาจารย์ผู้สอน ศูนย์ประสานงานการจัดการศึกษา ระดับปริญญาตรี <br>ครู ชำนาญการ<br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_17091418180631.jpg" width="120" border="1"><br><b>นายทวีศักดิ์ แก้วประดับ </b><br>ครูประจำ แผนกวิชาช่างก่อสร้าง <br>เจ้าหน้าที่ งานครูที่ปรึกษาและการแนะแนว <br>ครู ชำนาญการพิเศษ<br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/55293_16080310101048.jpg" width="120" border="1"><br><b>นางสาวพิมพ์ชนก มรุธานินทร์ </b><br>ครูประจำ แผนกวิชาสังคมศึกษา <br>ครูประจำ แผนกวิชาสามัญสัมพันธ์ <br>บุคลากร/อาจารย์ผู้สอน ศูนย์ประสานงานการจัดการศึกษา ระดับปริญญาตรี <br>ครู ชำนาญการ<br><br><br></td>
              </tr>
              <tr valign="top">
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/55293_16080310101008.jpg" width="120" border="1"><br><b>นางสาวพัชรินทร์ ปัญญา </b><br>ครูประจำ แผนกวิชาช่างก่อสร้าง <br>เจ้าหน้าที่ งานปกครองและความปลอดภัยนักเรียน นักศึกษา <br>ผู้ช่วยหัวหน้างาน งานอาคารสถานที่ <br>ครู ชำนาญการ<br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/55293_16080310103425.jpg" width="120" border="1"><br><b>นายนพดล ภูเขา </b><br>ครูประจำ แผนกวิชาช่างอิเล็กทรอนิกส์ <br>ครู ชำนาญการพิเศษ<br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/55293_16072813134703.jpg" width="120" border="1"><br><b>นายพิราม ภารังกูล </b><br>ครูประจำ แผนกวิชาเทคนิคพื้นฐาน <br>ครูประจำ แผนกเทคนิคกายอุปกรณ์ <br>ครู ชำนาญการพิเศษ<br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/55293_16080310105100.jpg" width="120" border="1"><br><b>นายอินชัย จันทะกี </b><br>ครูประจำ แผนกวิชาช่างไฟฟ้า <br>ผู้ช่วยหัวหน้าแผนก แผนกวิชาช่างไฟฟ้า <br>ครู ชำนาญการพิเศษ<br><br><br></td>
              </tr>
              <tr valign="top">
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/55293_16100615151950.jpg" width="120" border="1"><br><b>นางรัตน์ติยา ศรีมณี </b><br>ครูประจำ แผนกวิชาช่างสถาปัตยกรรม <br>ครู ชำนาญการพิเศษ<br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/55293_16080310103309.jpg" width="120" border="1"><br><b>นายนพดล กำมะหยี่ </b><br>ครูประจำ แผนกวิชาช่างเชื่อมโลหะ <br>ผู้ช่วยหัวหน้างาน งานกิจกรรมนักเรียน นักศึกษา <br>ผู้ช่วยหัวหน้างาน งานกิจกรรมนักศึกษาวิชาทหาร <br>ผู้ช่วยหัวหน้าแผนก แผนกวิชาช่างเชื่อมโลหะ <br>ครู ชำนาญการพิเศษ<br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/55293_16080310104743.jpg" width="120" border="1"><br><b>นายสุทธิรักษ์ โกช่วย </b><br>ครูประจำ แผนกวิชาภาษาไทย <br>ครูประจำ แผนกวิชาสามัญสัมพันธ์ <br>ครู ชำนาญการพิเศษ<br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_17091411110000.jpg" width="120" border="1"><br><b>นายจิรวัฒน์ หล่อสุวรรณ </b><br>ครูประจำ แผนกวิชาช่างก่อสร้าง <br>ผู้ช่วยหัวหน้างาน งานอาคารสถานที่ <br>ครู ชำนาญการ<br><br><br></td>
              </tr>
              <tr valign="top">
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_21061514140324.jpg" width="120" border="1"><br><b>นายอภิสิทธิ์ แสนยากุล </b><br>ครูประจำ แผนกวิชาช่างอิเล็กทรอนิกส์ <br>เจ้าหน้าที่ งานกิจกรรมนักเรียน นักศึกษา <br>เจ้าหน้าที่ งานปกครองและความปลอดภัยนักเรียน นักศึกษา <br>บุคลากร/อาจารย์ผู้สอน ศูนย์ประสานงานการจัดการศึกษา ระดับปริญญาตรี <br>ครู ชำนาญการ<br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_17091417175250.jpg" width="120" border="1"><br><b>นายนิติกร อ่อนนาง </b><br>ครูประจำ แผนกวิชาช่างอิเล็กทรอนิกส์ <br>เจ้าหน้าที่ งานกิจกรรมนักเรียน นักศึกษา <br>ครู ชำนาญการ<br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/55293_16080310101121.jpg" width="120" border="1"><br><b>นางกนกพร จันทรัตน์ </b><br>ครูประจำ แผนกวิชาภาษาอังกฤษ <br>ครูประจำ แผนกวิชาสามัญสัมพันธ์ <br>ครู <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19080915151454.jpg" width="120" border="1"><br><b>นายเอกสิษฐ์ นันติ </b><br>ครูประจำ แผนกวิชาช่างกลโรงงาน <br>ครูประจำ แผนกเทคนิคกายอุปกรณ์ <br>ผู้ช่วยหัวหน้าแผนก แผนกเทคนิคกายอุปกรณ์ <br>ครู ชำนาญการ<br><br><br></td>
              </tr>
              <tr valign="top">
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/55293_16072813134409.jpg" width="120" border="1"><br><b>นายนาวิน จักขุเรือง </b><br>ครูประจำ แผนกวิชาช่างยนต์ <br>ครู <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19080912121500.jpg" width="120" border="1"><br><b>นายศรพงษ์ เรือนสุข </b><br>ครูประจำ แผนกวิชาช่างอิเล็กทรอนิกส์ <br>เจ้าหน้าที่ งานพัสดุ <br>เจ้าหน้าที่ งานปกครองและความปลอดภัยนักเรียน นักศึกษา <br>ครู ชำนาญการ<br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/55293_16100615152117.jpg" width="120" border="1"><br><b>นายชีวิน สุพรรณพยัค </b><br>ครูประจำ แผนกวิชาช่างอิเล็กทรอนิกส์ <br>ครู ชำนาญการ<br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/55293_16100615152541.jpg" width="120" border="1"><br><b>นายสืบสกุล วรวัฒนเมธี </b><br>ครูประจำ แผนกวิชาช่างอิเล็กทรอนิกส์ <br>เจ้าหน้าที่ งานศูนย์บ่มเพาะวิสาหกิจสถานศึกษา <br>ผู้ช่วยหัวหน้างาน งานพัฒนายุทธศาสตร์แผนงานและงบประมาณ <br>ครู ชำนาญการ<br><br><br></td>
              </tr>
              <tr valign="top">
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/55293_16080310101854.jpg" width="120" border="1"><br><b>นางสาวปรียานุช คำเย็น </b><br>ครูประจำ แผนกวิชาช่างเชื่อมโลหะ <br>ผู้ช่วยหัวหน้างาน งานครูที่ปรึกษาและการแนะแนว <br>ครู <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_21061513135714.jpg" width="120" border="1"><br><b>นายประภัทร์ ขัติยะ </b><br>ครูประจำ แผนกวิชาช่างยนต์ <br>ผู้ช่วยหัวหน้างาน งานพัสดุ <br>ผู้ช่วยหัวหน้าแผนก แผนกวิชาช่างยนต์ <br>ครู <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_20081311115620.jpg" width="120" border="1"><br><b>นายธฤต ไชยมงคล </b><br>ครูประจำ แผนกวิชาเทคโนโลยีสารสนเทศ <br>เจ้าหน้าที่ งานการศึกษาพิเศษและความเสมอภาคทางการศึกษา <br>เจ้าหน้าที่ งานส่งเสริมการวิจัย นวัตกรรมและสิ่งประดิษฐ์ <br>ครู ชำนาญการ<br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><a href="http://kruwittaya.cmtc.ac.th" target="_blank"><img src="files/55293_16072813134136.jpg" width="120" border="1"></a><br><b>นายวิทยา สุภาอินทร์ </b><br>ครูประจำ แผนกวิชาช่างไฟฟ้า <br>ครู <br>โฮมเพจ : <a href="http://kruwittaya.cmtc.ac.th" target="_blank"><img src="soc_login.png" border="0" width="16"></a><br><br><br></td>
              </tr>
              <tr valign="top">
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/55293_16080310103016.jpg" width="120" border="1"><br><b>นายธีระวัฒน์ จันทรัตน์ </b><br>ครูประจำ แผนกวิชาช่างอิเล็กทรอนิกส์ <br>ครู ชำนาญการ<br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/64454_2204280992642.jpg" width="120" border="1"><br><b>นายสุรเดช ศิริ </b><br>ครูประจำ แผนกวิชาช่างอิเล็กทรอนิกส์ <br>ครู ชำนาญการ<br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_21112913131737.jpg" width="120" border="1"><br><b>นายรณกร วิกรรัตน์ </b><br>ครูประจำ แผนกวิชาช่างอิเล็กทรอนิกส์ <br>เจ้าหน้าที่ งานส่งเสริมการวิจัย นวัตกรรมและสิ่งประดิษฐ์ <br>ครู ชำนาญการ<br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_17091410103742.jpg" width="120" border="1"><br><b>นางสาวศิริมนัส เดชเจริญ </b><br>ครูประจำ แผนกวิชาภาษาอังกฤษ <br>ครูประจำ แผนกวิชาสามัญสัมพันธ์ <br>ผู้ช่วยหัวหน้างาน งานวัดผลและประเมินผล <br>ผู้ช่วยหัวหน้างาน งานปกครองและความปลอดภัยนักเรียน นักศึกษา <br>ผู้ช่วยหัวหน้าแผนก แผนกวิชาสามัญสัมพันธ์ <br>ครู <br><br><br></td>
              </tr>
              <tr valign="top">
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19080911115604.jpg" width="120" border="1"><br><b>นางสาวสุณิสา ทวีสุข </b><br>ครูประจำ แผนกวิชาภาษาอังกฤษ <br>ครูประจำ แผนกวิชาสามัญสัมพันธ์ <br>ผู้ช่วยหัวหน้างาน งานสวัสดิการนักเรียน นักศึกษา <br>ครู <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/55293_16072717172756.jpg" width="120" border="1"><br><b>นายสุภชาติ จงไกรจักร์ </b><br>ครูประจำ แผนกวิชาช่างก่อสร้าง <br>ผู้ช่วยหัวหน้าแผนก แผนกวิชาช่างก่อสร้าง <br>ครู <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><a href="https://kridsana.cmtc.ac.th" target="_blank"><img src="files/55293_16080310102245.jpg" width="120" border="1"></a><br><b>นายกฤษณะ มีสุข </b><br>ครูประจำ แผนกวิชาช่างอิเล็กทรอนิกส์ <br>เจ้าหน้าที่ งานส่งเสริมการวิจัย นวัตกรรมและสิ่งประดิษฐ์ <br>ผู้ช่วยหัวหน้างาน งานศูนย์ดิจิทัลและสื่อสารองค์กร <br>ผู้ช่วยหัวหน้างาน งานทะเบียน <br>ผู้ช่วยหัวหน้างาน งานศูนย์ดิจิทัลและสื่อสารองค์กร (ศูนย์ข้อมูล) <br>บุคลากร/อาจารย์ผู้สอน ศูนย์ประสานงานการจัดการศึกษา ระดับปริญญาตรี <br>ผู้ดูแลระบบ ผู้ดูแลระบบหลัก <br>ครู ชำนาญการพิเศษ<br>โฮมเพจ : <a href="https://kridsana.cmtc.ac.th" target="_blank"><img src="soc_login.png" border="0" width="16"></a><br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19080913131848.jpg" width="120" border="1"><br><b>นางสาวสิริเรศ จักร์แก้ว </b><br>ครูประจำ แผนกวิชาภาษาอังกฤษ <br>ครูประจำ แผนกวิชาสามัญสัมพันธ์ <br>ครู <br><br><br></td>
              </tr>
              <tr valign="top">
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/38318_21110911110514.jpg" width="120" border="1"><br><b>ว่าที่ ร.ต.สุรชัย คำก้อน </b><br>ครูประจำ แผนกวิชาช่างไฟฟ้า <br>ผู้ช่วยหัวหน้างาน งานอาคารสถานที่ <br>ผู้ช่วยหัวหน้างาน งานส่งเสริมการวิจัย นวัตกรรมและสิ่งประดิษฐ์ <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_17091410102431.jpg" width="120" border="1"><br><b>นายนพดล วังมณี </b><br>ครูประจำ แผนกวิชาเทคนิคอุตสาหกรรม <br>ผู้ช่วยหัวหน้าแผนก แผนกวิชาเทคนิคพื้นฐาน <br>ผู้ช่วยหัวหน้าแผนก แผนกวิชาเทคนิคอุตสาหกรรม <br>ครู <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19080912124108.jpg" width="120" border="1"><br><b>นายจำลอง สิงห์คำ </b><br>ครูประจำ แผนกวิชาช่างอิเล็กทรอนิกส์ <br>ผู้ช่วยหัวหน้าแผนก แผนกวิชาช่างอิเล็กทรอนิกส์ <br>ครู ชำนาญการ<br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/oldfiles/pms/35711001507731211230993438_1.png" width="120" border="1"><br><b>นายดวงจันทร์ วงศ์ษา </b><br>ครูประจำ แผนกวิชาช่างยนต์ <br>ครู <br><br><br></td>
              </tr>
              <tr valign="top">
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/38318_22062313133746.jpg" width="120" border="1"><br><b>นายวทัญญู ห้าวหาญ </b><br>ครูประจำ แผนกวิชาช่างไฟฟ้า <br>ผู้ช่วยหัวหน้างาน งานอาชีวศึกษาระบบทวิภาคี <br>ผู้ช่วยหัวหน้าแผนก แผนกวิชาช่างไฟฟ้า <br>ครู <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19080913133723.jpg" width="120" border="1"><br><b>นายวัชเรนท์ ตัวสะอาด </b><br>ครูประจำ แผนกวิชาภาษาไทย <br>ครูประจำ แผนกวิชาสามัญสัมพันธ์ <br>ผู้ช่วยหัวหน้างาน งานครูที่ปรึกษาและการแนะแนว <br>ครู <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19080915155554.jpg" width="120" border="1"><br><b>น.ส.ขวัญฤทัย เจริญปิยะวิวัฒน์ </b><br>ครูประจำ แผนกวิชาช่างก่อสร้าง <br>เจ้าหน้าที่ งานพัสดุ <br>ครู <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19080915153834.jpg" width="120" border="1"><br><b>นายขจรศักดิ์ ศิริสุภา </b><br>ครูประจำ แผนกวิชาช่างไฟฟ้า <br>ผู้ช่วยหัวหน้างาน งานปกครองและความปลอดภัยนักเรียน นักศึกษา <br>ครู <br><br><br></td>
              </tr>
              <tr valign="top">
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_20081311114450.jpg" width="120" border="1"><br><b>นายธณิตพงษ์ สุภาชาติ </b><br>ครูประจำ แผนกวิชาช่างยนต์ <br>หัวหน้าภาควิชา ภาควิชาเทคโนโลยียานยนต์ <br>บุคลากร/อาจารย์ผู้สอน ศูนย์ประสานงานการจัดการศึกษา ระดับปริญญาตรี <br>ครู ชำนาญการพิเศษ<br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_20081313130402.jpg" width="120" border="1"><br><b>นายคณิน ปงจันตา </b><br>ครูประจำ แผนกวิชาเทคนิคพื้นฐาน <br>เจ้าหน้าที่ งานมาตราฐานและการประกันคุณภาพการศึกษา <br>เจ้าหน้าที่ งานส่งเสริมธุรกิจและการเป็นผู้ประกอบการ <br>ครู <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นายสุรเชษฐ์ สุวรรณศิลป์ </b><br>ครูประจำ แผนกวิชาภาษาอังกฤษ <br>ผู้ช่วยหัวหน้างาน งานวิทยบริการและเทคโนโลยีการศึกษา (สื่อการเรียนการสอน) <br>ครู <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/74547_23090416160711.jpg" width="120" border="1"><br><b>นางสาวเกศรินทร์ รู้ฉลาด </b><br>ครูประจำ แผนกวิชาช่างกลโรงงาน <br>เจ้าหน้าที่ งานพัสดุ <br>เจ้าหน้าที่ งานกิจกรรมนักเรียน นักศึกษา <br>ผู้ช่วยหัวหน้างาน งานทะเบียน <br>ครู <br><br><br></td>
              </tr>
              <tr valign="top">
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/71575_22083110100950.jpg" width="120" border="1"><br><b>นางสาวพัทธ์ธีรา เพ็ชรพิจิตร </b><br>ครูประจำ แผนกวิชาสังคมศึกษา <br>ครูประจำ แผนกวิชาสามัญสัมพันธ์ <br>ผู้ช่วยหัวหน้างาน งานการบัญชี <br>ครู <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นางสาววาทินี เชิดชูสกุล </b><br>ครูประจำ แผนกวิชาภาษาอังกฤษ <br>ครูประจำ แผนกวิชาสามัญสัมพันธ์ <br>ผู้ช่วยหัวหน้างาน งานการศึกษาพิเศษและความเสมอภาคทางการศึกษา <br>ครู <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/47745_2211100994211.jpg" width="120" border="1"><br><b>นางสาวชนนิกานต์ จริตงาม </b><br>ครูประจำ แผนกวิชาธุรกิจการบินและการจัดการโลจิสติกส์ฯ <br>ผู้ช่วยหัวหน้างาน งานศูนย์บ่มเพาะวิสาหกิจสถานศึกษา <br>ครู <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นาย ธนเศรษฐ์ ชมก้อน </b><br>ครูประจำ แผนกวิชาช่างก่อสร้าง <br>ครู ชำนาญการ<br><br><br></td>
              </tr>
              <tr valign="top">
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/23872_23072511110148.jpg" width="120" border="1"><br><b>นายธนรัฐ ทัศเกตุ </b><br>ครูประจำ แผนกวิชาวิทยาศาสตร์ <br>ผู้ช่วยหัวหน้างาน งานทะเบียน <br>ครูผู้ช่วย แผนกวิชาสามัญสัมพันธ์ <br>ครู <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/12337_24100310102658.jpg" width="120" border="1"><br><b>นายธกฤต ยอดสอน </b><br>ครูประจำ แผนกวิชาช่างยนต์ <br>ครูผู้ช่วย <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/77055_24010510102930.jpg" width="120" border="1"><br><b>นายวัชระ พรมกามินทร์ </b><br>ครูประจำ แผนกวิชาวิทยาศาสตร์ <br>ผู้ช่วยหัวหน้างาน งานวัดผลและประเมินผล <br>ครูผู้ช่วย แผนกวิชาสามัญสัมพันธ์ <br>ครูผู้ช่วย <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50403_25021411113113.jpg" width="120" border="1"><br><b>นายธวัชชัย ปินใจยศ </b><br>ครูประจำ แผนกวิชาช่างก่อสร้าง <br><br><br></td>
              </tr>
              <tr valign="top"></tr>
            </tbody>
          </table><br><br>
          <center><big><b>ข้าราชการพลเรือน</b></big>
            <hr size="1">
          </center><br><br>
          <table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="95%">
            <tbody>
              <tr>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgr

oundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19080916162548.jpg" width="120" border="1"><br><b>นายชาญชัย ใบโพธิ์ </b><br>ข้าราชการพลเรือน งานวิทยบริการและเทคโนโลยีการศึกษา (สื่อการเรียนการสอน) <br><br><br></td>
              </tr>
            </tbody>
          </table><br><br>
          <center><big><b>ครูอัตราจ้าง</b></big>
            <hr size="1">
          </center><br><br>
          <table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="95%">
            <tbody>
              <tr>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>ธนพงษ์ หาญศิริวัฒนกิจ </b><br>ครูอัตราจ้าง แผนกวิชาช่างสถาปัตยกรรม <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_16100313132655.jpg" width="120" border="1"><br><b>นพ.พิรุณ คำอุ่น </b><br>ครูอัตราจ้าง แผนกเทคนิคกายอุปกรณ์ <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_16100313132814.jpg" width="120" border="1"><br><b>นางสาวนันทนา กลัดเกษา </b><br>ครูอัตราจ้าง แผนกเทคนิคกายอุปกรณ์ <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_16100313132709.jpg" width="120" border="1"><br><b>นพ.วิรัช พันธ์พานิช </b><br>ครูอัตราจ้าง แผนกเทคนิคกายอุปกรณ์ <br><br><br></td>
              </tr>
              <tr valign="top">
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_16100313132640.jpg" width="120" border="1"><br><b>รศ.นพ.วัชระ รุจิเวชพงศธร </b><br>ครูอัตราจ้าง แผนกเทคนิคกายอุปกรณ์ <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_16100313132907.jpg" width="120" border="1"><br><b>นายณภาคม ศรีคช </b><br>ครูอัตราจ้าง แผนกวิชาเทคโนโลยียานยนต์ <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_16100313132932.jpg" width="120" border="1"><br><b>นายสมนึก พิลา </b><br>ครูอัตราจ้าง แผนกวิชาเทคโนโลยียานยนต์ <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_16100313133003.jpg" width="120" border="1"><br><b>นายเสมอขวัญ ตันติกุล </b><br>ครูอัตราจ้าง แผนกวิชาเทคโนโลยียานยนต์ <br><br><br></td>
              </tr>
              <tr valign="top">
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_16100313132839.jpg" width="120" border="1"><br><b>นายสมพงษ์ บุญแลน </b><br>ครูอัตราจ้าง แผนกวิชาเทคโนโลยียานยนต์ <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_16100313132854.jpg" width="120" border="1"><br><b>ดร.นำพร ปัญโญใหญ่ </b><br>ครูอัตราจ้าง แผนกวิชาเทคโนโลยียานยนต์ <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_16100313133016.jpg" width="120" border="1"><br><b>นายภานุพงศ์ จุมปา </b><br>ครูอัตราจ้าง แผนกวิชาเทคโนโลยียานยนต์ <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_16100313132951.jpg" width="120" border="1"><br><b>นางสาวเกยูร จิตตางกูร </b><br>ครูอัตราจ้าง แผนกวิชาเทคโนโลยียานยนต์ <br>บุคลากร/อาจารย์ผู้สอน ศูนย์ประสานงานการจัดการศึกษา ระดับปริญญาตรี <br><br><br></td>
              </tr>
              <tr valign="top">
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_16100313132941.jpg" width="120" border="1"><br><b>นางศรัญญา กิจเจริญสิน </b><br>ครูอัตราจ้าง แผนกวิชาเทคโนโลยียานยนต์ <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_16100313132725.jpg" width="120" border="1"><br><b>ร.อ.นพ.มล.พุฒิพงศ์ เทวกุล </b><br>ครูอัตราจ้าง แผนกเทคนิคกายอุปกรณ์ <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_16100313132746.jpg" width="120" border="1"><br><b>นพ.สุวัฒน์ มหัตนิรันดร์กุล </b><br>ครูอัตราจ้าง แผนกเทคนิคกายอุปกรณ์ <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19080917171029.jpg" width="120" border="1"><br><b>นายโกศล อินทรประสิทธิ์ </b><br>ครูอัตราจ้าง แผนกเทคนิคกายอุปกรณ์ <br><br><br></td>
              </tr>
              <tr valign="top">
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19080916165550.jpg" width="120" border="1"><br><b>นางสาวสายฝน สฤษดิกุล </b><br>ครูอัตราจ้าง แผนกวิชาช่างอิเล็กทรอนิกส์ <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19080917173653.jpg" width="120" border="1"><br><b>นายพิวัธกาญจน์ เหมืองคำ </b><br>ครูอัตราจ้าง แผนกวิชาช่างก่อสร้าง <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_20081313131009.jpg" width="120" border="1"><br><b>นายพิพัฒน์ ชุมแสง </b><br>ครูอัตราจ้าง แผนกวิชาเมคคาทรอนิกส์ <br>ผู้ช่วยหัวหน้างาน งานครูที่ปรึกษาและการแนะแนว <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/38318_23011810104133.jpg" width="120" border="1"><br><b>นายพงษ์สิทธิ์ วังใจชิด </b><br>ครูอัตราจ้าง แผนกวิชาช่างไฟฟ้า <br><br><br></td>
              </tr>
              <tr valign="top">
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นายอนุชิต สร้างสกุล </b><br>ครูอัตราจ้าง แผนกวิชาเทคโนโลยียานยนต์ <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นายสมศักดิ์ แข็งแรง </b><br>ครูอัตราจ้าง แผนกวิชาเทคโนโลยียานยนต์ <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นายไกรลาศ ดอนชัย </b><br>ครูอัตราจ้าง แผนกวิชาเทคโนโลยียานยนต์ <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/08754_25101612122216.jpg" width="120" border="1"><br><b>น.ส.ฐิติพร ประกิจ </b><br>ครูอัตราจ้าง แผนกวิชาช่างเชื่อมโลหะ <br><br><br></td>
              </tr>
              <tr valign="top">
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นายธนภัทรพล แทนรอด </b><br>ครูอัตราจ้าง แผนกวิชาช่างเชื่อมโลหะ <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นายจิรายุ ดำหริ </b><br>ครูอัตราจ้าง แผนกวิชาช่างก่อสร้าง <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นายจักรพงศ์ จูหมื่นไวย์ </b><br>ครูอัตราจ้าง แผนกวิชาช่างเชื่อมโลหะ <br>ครู <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นายณัฐนนท์ สมภารจันทร์ </b><br>ครูอัตราจ้าง แผนกวิชาเทคนิคพื้นฐาน <br><br><br></td>
              </tr>
              <tr valign="top">
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/84361_26040813130222.jpg" width="120" border="1"><br><b>นายบวร วรรณเรือน </b><br>ครูอัตราจ้าง แผนกวิชาช่างกลโรงงาน <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/60025_25061611111037.jfif" width="120" border="1"><br><b>นางสาวณัฏฐณิชา พันธุสา </b><br>ครูอัตราจ้าง แผนกวิชาช่างกลโรงงาน <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/83285_23061722225940.jpg" width="120" border="1"><br><b>นางสาวกนกภรรณ พันธรัตน์ </b><br>ครูอัตราจ้าง แผนกวิชาเมคคาทรอนิกส์ <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นายพชรกฤต ป้วนป้อม </b><br>ครูอัตราจ้าง แผนกวิชาช่างยนต์ <br>ผู้ช่วยหัวหน้างาน งานโครงการพิเศษและการบริการสังคม <br><br><br></td>
              </tr>
              <tr valign="top">
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นางสาวธัญญารัตน์ คำสอน </b><br>ครูอัตราจ้าง แผนกวิชาช่างก่อสร้าง <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/38318_22062314143749.jpg" width="120" border="1"><br><b>นายอภิษฎา คำลือ </b><br>ครูอัตราจ้าง แผนกวิชาช่างไฟฟ้า <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นางสาวลินดา สีแสง </b><br>ครูอัตราจ้าง แผนกวิชาสามัญสัมพันธ์ <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นางสาวอมรรัตน์ ไคร้แค </b><br>ครูอัตราจ้าง แผนกวิชาช่างไฟฟ้า <br><br><br></td>
              </tr>
              <tr valign="top">
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นายเปรมศักดิ์ ดำรักษ์ </b><br>ครูอัตราจ้าง แผนกวิชาช่างยนต์ <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/22700_25100911113718.jpg" width="120" border="1"><br><b>นายพงศกร ลาปวงคำ </b><br>ครูอัตราจ้าง แผนกวิชาช่างยนต์ <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/27669_25060123232618.jpeg" width="120" border="1"><br><b>นายสมัชญ์ สุริยะชัยพันธ์ </b><br>ครูอัตราจ้าง แผนกวิชาช่างยนต์ <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นายเจษฎา บุลกุล </b><br>ครูอัตราจ้าง แผนกวิชาช่างยนต์ <br><br><br></td>
              </tr>
              <tr valign="top">
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/43960_25101610105659.jpg" width="120" border="1"><br><b>นางสาวปนัสยา อินเทพ </b><br>ครูอัตราจ้าง แผนกวิชาช่างก่อสร้าง <br>ครู <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นางสาวพัชราภรณ์ ปิ่นชุม </b><br>ครูอัตราจ้าง แผนกวิชาช่างไฟฟ้า <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นายปรัชญา ธิมา </b><br>ครูอัตราจ้าง แผนกวิชาช่างยนต์ <br><br><br></td>
              </tr>
            </tbody>
          </table><br><br>
          <center><big><b>ลูกจ้างอัตราจ้าง</b></big>
            <hr size="1">
          </center><br><br>
          <table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="95%">
            <tbody>
              <tr>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19082011111609.jpg" width="120" border="1"><br><b>นางจันทร์ทิพย์ ฉันทะ </b><br>ลูกจ้างอัตราจ้าง งานอาคารสถานที่ <br>เจ้าหน้าที่ งานอาคารสถานที่ <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19082010102124.jpg" width="120" border="1"><br><b>นางธนัชพร ทราบเขียว </b><br>ลูกจ้างอัตราจ้าง งานอาคารสถานที่ <br>เจ้าหน้าที่ งานอาคารสถานที่ <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19082010104241.jpg" width="120" border="1"><br><b>นางราตรี โกช่วย </b><br>ลูกจ้างอัตราจ้าง งานวิทยบริการและเทคโนโลยีการศึกษา (สื่อการเรียนการสอน) <br>เจ้าหน้าที่ งานวิทยบริการและเทคโนโลยีการศึกษา (สื่อการเรียนการสอน) <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19082011111805.jpg" width="120" border="1"><br><b>นายธนวัฒน์ บานชื่น </b><br>ลูกจ้างอัตราจ้าง งานอาคารสถานที่ <br>เจ้าหน้าที่ งานอาคารสถานที่ <br><br><br></td>
              </tr>
              <tr valign="top">
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19082011111547.jpg" width="120" border="1"><br><b>นายประสิทธิ์ ฉันทะ </b><br>ลูกจ้างอัตราจ้าง งานอาคารสถานที่ <br>เจ้าหน้าที่ งานอาคารสถานที่ <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19082010101943.jpg" width="120" border="1"><br><b>นางศรีสมร พนาบุญเจริญ </b><br>ลูกจ้างอัตราจ้าง งานอาคารสถานที่ <br>เจ้าหน้าที่ งานอาคารสถานที่ <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19082010101701.jpg" width="120" border="1"><br><b>นางอ้อยใจ ศรีดี </b><br>ลูกจ้างอัตราจ้าง งานอาคารสถานที่ <br>เจ้าหน้าที่ งานอาคารสถานที่ <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นายคมกริช จันทะรัตน์ </b><br>ลูกจ้างอัตราจ้าง งานพัสดุ (พนักงานขับรถยนต์) <br><br><br></td>
              </tr>
              <tr valign="top"></tr>
            </tbody>
          </table><br><br>
          <center><big><b>เจ้าหน้าที่</b></big>
            <hr size="1">
          </center><br><br>
          <table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="95%">
            <tbody>
              <tr>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19082011115453.jpg" width="120" border="1"><br><b>นายพิทักษ์ แก้วสมุทร์ </b><br>เจ้าหน้าที่ งานส่งเสริมธุรกิจและการเป็นผู้ประกอบการ <br>เจ้าหน้าที่ งานปกครองและความปลอดภัยนักเรียน นักศึกษา <br>เจ้าหน้าที่ งานศูนย์บ่มเพาะวิสาหกิจสถานศึกษา <br>พนักงานราชการ (ครู) แผนกวิชาช่างไฟฟ้า <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><a href="http://cmtc.ac.th" target="_blank"><img src="files/59895_26031715150421.jpg" width="120" border="1"></a><br><b>นายเอกพงศ์ ศักดิ์โสภิณ </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br>เจ้าหน้าที่ งานบริหารงานทั่วไป (งานเอกสารงานพิมพ์) <br>โฮมเพจ : <a href="http://cmtc.ac.th" target="_blank"><img src="soc_login.png" border="0" width="16"></a><br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19082010105844.jpg" width="120" border="1"><br><b>นายบุญรัตน์ เตวิยะ </b><br>เจ้าหน้าที่ งานศูนย์ดิจิทัลและสื่อสารองค์กร <br>เจ้าหน้าที่ งานศูนย์ดิจิทัลและสื่อสารองค์กร (ศูนย์ข้อมูล) <br>เจ้าหน้าที่ งานวิทยบริการและเทคโนโลยีการศึกษา (สื่อการเรียนการสอน) <br>ผู้ดูแลระบบ ผู้ดูแลระบบหลัก <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_21052815150419.jpg" width="120" border="1"><br><b>นายชุติชัย สมวงษา </b><br>เจ้าหน้าที่ งานส่งเสริมธุรกิจและการเป็นผู้ประกอบการ <br>พนักงานราชการ (ครู) แผนกวิชาช่างอิเล็กทรอนิกส์ <br>ผู้ช่วยหัวหน้างาน งานครูที่ปรึกษาและการแนะแนว <br><br><br></td>
              </tr>
              <tr valign="top">
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19082011112232.jpg" width="120" border="1"><br><b>นางสาวยศยา ศรีคำดี </b><br>เจ้าหน้าที่ งานวัดผลและประเมินผล <br>เจ้าหน้าที่ งานพัฒนาหลักสูตรและการจัดเรียนการเรียนรู้ <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19082010102037.jpg" width="120" border="1"><br><b>นางสาวศิริวิมล คำนันยา </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br>เจ้าหน้าที่ งานบริหารงานทั่วไป (งานสารบรรณ) <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19082010105354.jpg" width="120" border="1"><br><b>นางอภิญญา มีสุข </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br>เจ้าหน้าที่ งานส่งเสริมการวิจัย นวัตกรรมและสิ่งประดิษฐ์ <br>พนักงานราชการ (บริหารทั่วไป) งานบริหารงานทั่วไป <br>ผู้ดูแลระบบ ผู้ดูแลระบบหลัก <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_20082110102224.jpg" width="120" border="1"><br><b>นางสาวพิชยา ดื่มพุดซา </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br>เจ้าหน้าที่ งานบริหารและพัฒนาทรัพยากรบุคคล <br>พนักงานราชการ (บริหารทั่วไป) งานบริหารงานทั่วไป <br><br><br></td>
              </tr>
              <tr valign="top">
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19082011112644.jpg" width="120" border="1"><br><b>นางสาวกรรณิการ์ ทอนทะษร </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br>เจ้าหน้าที่ งานวัดผลและประเมินผล <br>เจ้าหน้าที่ งานพัฒนาหลักสูตรและการจัดเรียนการเรียนรู้ <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19082011112718.jpg" width="120" border="1"><br><b>นางวิชชุตา สุพรรณพยัค </b><br>เจ้าหน้าที่ งานวัดผลและประเมินผล <br>เจ้าหน้าที่ งานพัฒนาหลักสูตรและการจัดเรียนการเรียนรู้ <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19082010102241.jpg" width="120" border="1"><br><b>นางสาวเสาวลักษณ์ ใคร้โท้ง </b><br>เจ้าหน้าที่ งานการเงิน <br>พนักงานราชการ (บริหารทั่วไป) งานการเงิน <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/55293_1703030992436.jpg" width="120" border="1"><br><b>ว่าที่ ร.ต.กิตติศักดิ์ ฝั้นปันวงศ์ </b><br>เจ้าหน้าที่ งานการจัดการศึกษาระดับปริญญาตรี <br>พนักงานราชการ (ครู) แผนกวิชาช่างยนต์ <br>ผู้ช่วยหัวหน้างาน งานพัสดุ <br>ผู้ช่วยหัวหน้างาน งานครูที่ปรึกษาและการแนะแนว <br>บุคลากร/อาจารย์ผู้สอน ศูนย์ประสานงานการจัดการศึกษา ระดับปริญญาตรี <br><br><br></td>
              </tr>
              <tr valign="top">
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19082010103235.jpg" width="120" border="1"><br><b>นางสาวสิริมาศ จันต๊ะพิงค์ </b><br>เจ้าหน้าที่ งานบริหารและพัฒนาทรัพยากรบุคคล <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19082010104727.jpg" width="120" border="1"><br><b>นายวชิณุพงศ์ ทองคำ </b><br>เจ้าหน้าที่ งานส่งเสริมการวิจัย นวัตกรรมและสิ่งประดิษฐ์ <br>เจ้าหน้าที่ งานกิจกรรมนักเรียน นักศึกษา <br>เจ้าหน้าที่ งานปกครองและความปลอดภัยนักเรียน นักศึกษา <br>พนักงานราชการ (ครู) แผนกวิชาช่างไฟฟ้า <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19082011111311.jpg" width="120" border="1"><br><b>นายทวีรักษ์ จันที </b><br>เจ้าหน้าที่ งานการศึกษาพิเศษและความเสมอภาคทางการศึกษา <br>เจ้าหน้าที่ งานกิจกรรมนักเรียน นักศึกษา <br>พนักงานราชการ (ครู) แผนกวิชาช่างก่อสร้าง <br>ผู้ช่วยหัวหน้างาน งานอาคารสถานที่ <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/00993_24121715155130.jpg" width="120" border="1"><br><b>นายไพโรจน์ รัตต๊ะใส </b><br>เจ้าหน้าที่ งานวัดผลและประเมินผล <br>เจ้าหน้าที่ งานกิจกรรมนักเรียน นักศึกษา <br>เจ้าหน้าที่ งานปกครองและความปลอดภัยนักเรียน นักศึกษา <br>พนักงานราชการ (ครู) แผนกวิชาช่างไฟฟ้า <br>ผู้ช่วยหัวหน้างาน งานอาคารสถานที่ <br><br><br></td>
              </tr>
              <tr valign="top">
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/55293_1703030992409.jpg" width="120" border="1"><br><b>นายสุนทร ศรีวิกะ </b><br>เจ้าหน้าที่ งานอาชีวศึกษาระบบทวิภาคี <br>เจ้าหน้าที่ งานกิจกรรมนักเรียน นักศึกษา <br>เจ้าหน้าที่ งานปกครองและความปลอดภัยนักเรียน นักศึกษา <br>เจ้าหน้าที่ งานกิจกรรมลูกเสือ (หน่วย วิทยาลัยเทคนิคเทิง) <br>พนักงานราชการ (ครู) แผนกวิชาช่างยนต์ <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/70587_2502050994227.jpg" width="120" border="1"><br><b>นางสาวอัลิปรียา ปัญญาดี </b><br>เจ้าหน้าที่ งานทะเบียน <br>เจ้าหน้าที่ งานอาชีวศึกษาระบบทวิภาคี <br>พนักงานราชการ (บริหารทั่วไป) งานบริหารงานทั่วไป <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_20081313132133.jpg" width="120" border="1"><br><b>นางสาวอรญาพัชร์ ภัทรวงศ์เสถียร </b><br>เจ้าหน้าที่ งานการเงิน <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/38318_2106100884044.jpg" width="120" border="1"><br><b>นายพิษณุ เนตรผาบ </b><br>เจ้าหน้าที่ งานกิจกรรมนักเรียน นักศึกษา <br>พนักงานราชการ (ครู) แผนกวิชาช่างไฟฟ้า <br><br><br></td>
              </tr>
              <tr valign="top">
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_20081313132500.jpg" width="120" border="1"><br><b>นางปวีณา พรมแก้วงาม </b><br>เจ้าหน้าที่ งานสวัสดิการนักเรียน นักศึกษา <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>ว่าที่ ร.ต. วรเชษฐ์ อภิชัย </b><br>เจ้าหน้าที่ งานปกครองและความปลอดภัยนักเรียน นักศึกษา <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นางสาวธัญญารัตน์ สุปินะ </b><br>เจ้าหน้าที่ งานทะเบียน <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>ฝ่ายแผนงาน และความร่วมมือ </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
              </tr>
              <tr valign="top">
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นางสาวสุมิตรา แซ่เฒ่า </b><br>เจ้าหน้าที่ งานการเงิน <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>รัชดา ษมาจิตราษฎร </b><br>เจ้าหน้าที่ งานการเงิน <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/67830_25061215151208.jpg" width="120" border="1"><br><b>นางสาว ปวีณ์ธิดา เจริญภักดี </b><br>เจ้าหน้าที่ งานทะเบียน <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นางสาวจริยา มั่นเกษวิทย์ </b><br>เจ้าหน้าที่ งานอาชีวศึกษาระบบทวิภาคี <br><br><br></td>
              </tr>
              <tr valign="top">
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>น.ส. วิชุภัสณ์ ยานะ </b><br>เจ้าหน้าที่ งานครูที่ปรึกษาและการแนะแนว <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/00724_24071210103612.png" width="120" border="1"><br><b>นางสาวศุลีพร ศักดิ์เสรีชน </b><br>เจ้าหน้าที่ งานพัสดุ <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นางสาววราภรณ์ ทนันชัย </b><br>เจ้าหน้าที่ งานการบัญชี <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นางสาววรัญญา หน่อขัต </b><br>เจ้าหน้าที่ งานกิจกรรมนักเรียน นักศึกษา <br><br><br></td>
              </tr>
              <tr valign="top">
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นางสาวธัญญลักษณ์ ดวงชุ่ม </b><br>เจ้าหน้าที่ งานการศึกษาพิเศษและความเสมอภาคทางการศึกษา <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นางสาวสุชิราภรณ์ หน่อตง </b><br>เจ้าหน้าที่ งานมาตราฐานและการประกันคุณภาพการศึกษา <br>เจ้าหน้าที่ งานส่งเสริมธุรกิจและการเป็นผู้ประกอบการ <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นายมนัสพล คำยันต์ </b><br>เจ้าหน้าที่ งานพัสดุ (พนักงานขับรถยนต์) <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นางสาวศิริพร กระแสทองดี </b><br>เจ้าหน้าที่ งานโครงการพิเศษและการบริการสังคม <br><br><br></td>
              </tr>
              <tr valign="top">
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นางสาวลออรัตน์ กาหล้า </b><br>เจ้าหน้าที่ งานครูที่ปรึกษาและการแนะแนว <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นางสาวกนิษฐา กองพรม </b><br>เจ้าหน้าที่ งานทะเบียน <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นายนรินทร์ ใจขัติ </b><br>เจ้าหน้าที่ งานอาคารสถานที่ <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นางสาวธิดารัตน์ ดวงนุรัตน์ </b><br>เจ้าหน้าที่ งานพัฒนายุทธศาสตร์แผนงานและงบประมาณ <br><br><br></td>
              </tr>
              <tr valign="top">
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นางสาวกาญจนา มารยาทอ่อน </b><br>เจ้าหน้าที่ งานพัสดุ <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นายณัฐกานต์ อินติ </b><br>เจ้าหน้าที่ งานศูนย์ดิจิทัลและสื่อสารองค์กร <br>เจ้าหน้าที่ งานศูนย์ดิจิทัลและสื่อสารองค์กร (ศูนย์ข้อมูล) <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/22233_24071210101134.png" width="120" border="1"><br><b>งานพัสดุ </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>แผนกวิชาเทคโนโลยีสารสนเทศ วิชาเทคโนโลยีสารสนเทศ </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
              </tr>
              <tr valign="top">
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>ฝ่ายพัฒนากิจการนักเรียน นักศึกษา พัฒนากิจการนักเรียน นักศึกษา </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/11111_23101217175946.jpg" width="120" border="1"><br><b>แผนกวิชาช่างยนต์ วิชาช่างยนต์ </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>ผู้อำนวยการ วิทยาลัยเทคนิคเทิง </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>ฝ่ายบริหารทรัพยากร บริหารทรัพยากร </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
              </tr>
              <tr valign="top">
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>แผนกวิชาเทคนิคอุตสาหกรรม วิชาเทคนิคอุตสาหกรรม </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>แผนกวิชาช่างก่อสร้าง วิชาช่างก่อสร้าง </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>แผนกวิชาเมคคาทรอนิกส์ วิชาเมคคาทรอนิกส์ </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>แผนกวิชาช่างอิเล็กทรอนิกส์ วิชาช่างอิเล็กทรอนิกส์ </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
              </tr>
              <tr valign="top">
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>แผนกวิชาช่างไฟฟ้า วิชาช่างไฟฟ้า </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>งานบริหารงานทั่วไป บริหารงานทั่วไป </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>แผนกวิชาช่างสถาปัตยกรรม วิชาช่างสถาปัตยกรรม </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>งานศูนย์ข้อมูลสารสนเทศ ศูนย์ข้อมูลสารสนเทศ </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
              </tr>
              <tr valign="top">
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>งานการเงิน การเงิน </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>งานวิทยบริการและห้องสมุด วิทยบริการและห้องสมุด </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>งานประกันคุณภาพและมาตรฐานการศึกษา ประกันคุณภาพและมาตรฐานการศึกษา </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>งานประชาสัมพันธ์ ประชาสัมพันธ์ </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
              </tr>
              <tr valign="top">
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>งานครูที่ปรึกษา ครูที่ปรึกษา </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>งานการบัญชี การบัญชี </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>งานสวัสดิการนักเรียน นักศึกษา สวัสดิการนักเรียน นักศึกษา </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>งานอาคารสถานที่ อาคารสถานที่ </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
              </tr>
              <tr valign="top">
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>งานส่งเสริมผลิตผล การค้าและประกอบธุรกิจ ส่งเสริมผลิตผล การค้าและประกอบธุรกิจ </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>งานแนะแนวอาชีพและการจัดหางาน แนะแนวอาชีพและการจัดหางาน </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>งานวัดผลและประเมินผล วัดผลและประเมินผล </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/22240_24073118182223.png" width="120" border="1"><br><b>งานโครงการพิเศษและการบริการชุมชน โครงการพิเศษและการบริการชุมชน </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
              </tr>
              <tr valign="top">
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>งานวิจัย พัฒนา นวัตกรรม และสิ่งประดิษฐ์ วิจัย พัฒนา นวัตกรรม และสิ่งประดิษฐ์ </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>งานอาชีวศึกษาระบบทวิภาคี อาชีวศึกษาระบบทวิภาคี </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>งานบุคลากร บุคลากร </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br>เจ้าหน้าที่ งานบริหารและพัฒนาทรัพยากรบุคคล <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>งานกิจกรรมนักเรียน นักศึกษา กิจกรรมนักเรียน นักศึกษา </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
              </tr>
              <tr valign="top">
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>งานปกครอง ปกครอง </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>งานสื่อการเรียนการสอน สื่อการเรียนการสอน </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>งานพัฒนาหลักสูตรการเรียนการสอน พัฒนาหลักสูตรการเรียนการสอน </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>งานความร่วมมือ ความร่วมมือ </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
              </tr>
              <tr valign="top">
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>ฝ่ายวิชาการ วิชาการ </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>แผนกวิชาช่างเชื่อมโลหะ วิชาช่างเชื่อมโลหะ </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>แผนกวิชาช่างกลโรงงาน วิชาช่างกลโรงงาน </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>แผนกเทคนิคกายอุปกรณ์ เทคนิคกายอุปกรณ์ </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
              </tr>
              <tr valign="top">
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>แผนกวิชาสามัญสัมพันธ์ วิชาสามัญสัมพันธ์ </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>งานทะเบียน ทะเบียน </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>งานวางแผน และงบประมาณ </b><br>เจ้าหน้าที่ งานบริหารงานทั่วไป <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นางสาววราลักษณ์ แก้วนิล </b><br>เจ้าหน้าที่ งานส่งเสริมธุรกิจและการเป็นผู้ประกอบการ <br><br><br></td>
              </tr>
              <tr valign="top"></tr>
            </tbody>
          </table><br><br>
          <center><big><b>พนักงานราชการ (ครู)</b></big>
            <hr size="1">
          </center><br><br>
          <table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="95%">
            <tbody>
              <tr>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_21052815150316.jpg" width="120" border="1"><br><b>นายสุรพงศ์ วัฒนกีบุตร </b><br>พนักงานราชการ (ครู) แผนกวิชาช่างอิเล็กทรอนิกส์ <br>ผู้ช่วยหัวหน้างาน งานอาคารสถานที่ <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/55293_1703030992034.jpg" width="120" border="1"><br><b>นางสาวสุพรรษา เสมอเชื้อ </b><br>พนักงานราชการ (ครู) แผนกวิชาช่างไฟฟ้า <br>ผู้ช่วยหัวหน้างาน งานอาชีวศึกษาระบบทวิภาคี <br>ผู้ช่วยหัวหน้างาน งานพัฒนาหลักสูตรและการจัดเรียนการเรียนรู้ <br>ครู <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/55293_1703030992549.jpg" width="120" border="1"><br><b>นายวรุพงษ์ แก้วเมืองชัย </b><br>พนักงานราชการ (ครู) แผนกวิชาช่างยนต์ <br>ผู้ช่วยหัวหน้างาน งานโครงการพิเศษและการบริการสังคม <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><a href="http://itdev.cmtc.ac.th/kruwaraporn/" target="_blank"><img src="files/50773_2008210994906.jpg" width="120" border="1"></a><br><b>นางสาววราภรณ์ แผ่นฟ้า </b><br>พนักงานราชการ (ครู) แผนกวิชาเทคโนโลยีสารสนเทศ <br>โฮมเพจ : <a href="http://itdev.cmtc.ac.th/kruwaraporn/" target="_blank"><img src="soc_login.png" border="0" width="16"></a><br><br><br></td>
              </tr>
              <tr valign="top">
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19082010103304.jpg" width="120" border="1"><br><b>นายทศพล ทิพย์วงค์ </b><br>พนักงานราชการ (ครู) แผนกวิชาช่างอิเล็กทรอนิกส์ <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19082011113244.jpg" width="120" border="1"><br><b>นายอานนท์ ยงยศ </b><br>พนักงานราชการ (ครู) แผนกวิชาสามัญสัมพันธ์ <br>ผู้ช่วยหัวหน้างาน งานปกครองและความปลอดภัยนักเรียน นักศึกษา <br>ครู <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_21052815150350.jpg" width="120" border="1"><br><b>ว่าที่ ร.ต.ศุภกร ว่องธนาการ </b><br>พนักงานราชการ (ครู) แผนกวิชาช่างอิเล็กทรอนิกส์ <br>ครู <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19082011110646.jpg" width="120" border="1"><br><b>นายอาทิตย์ ศรีสุวรรณ </b><br>พนักงานราชการ (ครู) แผนกวิชาช่างก่อสร้าง <br>ผู้ช่วยหัวหน้างาน งานกิจกรรมนักเรียน นักศึกษา <br><br><br></td>
              </tr>
              <tr valign="top">
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19082011113118.jpg" width="120" border="1"><br><b>ว่าที่ ร.ต.ประพันธ์ นันตัง </b><br>พนักงานราชการ (ครู) แผนกวิชาช่างยนต์ <br>ผู้ช่วยหัวหน้างาน งานโครงการพิเศษและการบริการสังคม <br>ผู้ช่วยหัวหน้างาน งานอาชีวศึกษาระบบทวิภาคี <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_20081313130547.jpg" width="120" border="1"><br><b>นายอภินันท์ ปันบัว </b><br>พนักงานราชการ (ครู) แผนกวิชาช่างยนต์ <br>ผู้ช่วยหัวหน้างาน งานกิจกรรมนักเรียน นักศึกษา <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19082011115320.jpg" width="120" border="1"><br><b>นางสาวจันทร์จิรา กันทา </b><br>พนักงานราชการ (ครู) แผนกวิชาช่างสถาปัตยกรรม <br>ผู้ช่วยหัวหน้างาน งานอาคารสถานที่ <br>ผู้ช่วยหัวหน้าแผนก แผนกวิชาช่างสถาปัตยกรรม <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นาย วรวัฒน์ พิมสาร </b><br>พนักงานราชการ (ครู) แผนกวิชาช่างยนต์ <br><br><br></td>
              </tr>
              <tr valign="top">
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/25376_24071514140544.jpg" width="120" border="1"><br><b>นายฤทธิชัย ดอกบัว </b><br>พนักงานราชการ (ครู) แผนกวิชาช่างกลโรงงาน <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/17110_26010714142101.jpg" width="120" border="1"><br><b>นายวิเชียร คำปาต๋า </b><br>พนักงานราชการ (ครู) แผนกวิชาเทคโนโลยีสารสนเทศ <br><br><br></td>
              </tr>
            </tbody>
          </table><br><br>
          <center><big><b>ผู้ช่วยหัวหน้างาน</b></big>
            <hr size="1">
          </center><br><br>
          <table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="95%">
            <tbody>
              <tr>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19082010104608.jpg" width="120" border="1"><br><b>นางทองใบ คล้ายจินดา </b><br>ผู้ช่วยหัวหน้างาน งานบริหารงานทั่วไป <br>พนักงานราชการ (บริหารทั่วไป) งานบริหารงานทั่วไป <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/35741_22072217174206.jpg" width="120" border="1"><br><b>วรภาส แซ่เอียบ </b><br>ผู้ช่วยหัวหน้างาน งานวิทยบริการและเทคโนโลยีการศึกษา (สื่อการเรียนการสอน) <br>ครูผู้ช่วย แผนกวิชาสังคมศึกษา <br>ครูผู้ช่วย แผนกวิชาสามัญสัมพันธ์ <br>ครู <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/85085_22090114144906.jpg" width="120" border="1"><br><b>ปรวรรณ ทองหนูนุ้ย </b><br>ผู้ช่วยหัวหน้างาน งานครูที่ปรึกษาและการแนะแนว <br>ผู้ช่วยหัวหน้างาน งานศูนย์บ่มเพาะวิสาหกิจสถานศึกษา <br>ครูผู้ช่วย แผนกวิชาธุรกิจการบินและการจัดการโลจิสติกส์ฯ <br>ครูผู้ช่วย <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/38460_23110910105559.jpg" width="120" border="1"><br><b>นายพิพัฒน์ วงค์จักร์ </b><br>ผู้ช่วยหัวหน้างาน งานอาชีวศึกษาระบบทวิภาคี <br>ครูผู้ช่วย แผนกวิชาช่างไฟฟ้า <br><br><br></td>
              </tr>
              <tr valign="top"></tr>
            </tbody>
          </table><br><br>
          <center><big><b>ผู้ช่วยหัวหน้าแผนก</b></big>
            <hr size="1">
          </center><br><br>
          <table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="95%">
            <tbody>
              <tr>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นายทัศนัย สุวรรณชาตรี </b><br>ผู้ช่วยหัวหน้าแผนก แผนกวิชาเมคคาทรอนิกส์ <br>ครูผู้ช่วย แผนกวิชาเมคคาทรอนิกส์ <br><br><br></td>
              </tr>
            </tbody>
          </table><br><br>
          <center><big><b>พนักงานราชการ (บริหารทั่วไป)</b></big>
            <hr size="1">
          </center><br><br>
          <table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="95%">
            <tbody>
              <tr>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>น.ส.ปภัสนันท์ สุริยะ </b><br>พนักงานราชการ (บริหารทั่วไป) งานบริหารงานทั่วไป <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นางสาวญาณิศา อ่อนนุ่ม </b><br>พนักงานราชการ (บริหารทั่วไป) งานพัสดุ <br><br><br></td>
              </tr>
            </tbody>
          </table><br><br>
          <center><big><b>ครูผู้ช่วย</b></big>
            <hr size="1">
          </center><br><br>
          <table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="95%">
            <tbody>
              <tr>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/46193_22091912124802.jpeg" width="120" border="1"><br><b>เอกสิริ แก่นศักดิ์ศิริ </b><br>ครูผู้ช่วย แผนกวิชาคณิตศาสตร์ <br>ครูผู้ช่วย แผนกวิชาสามัญสัมพันธ์ <br>ครูผู้ช่วย <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/49108_24120117171451.jpg" width="120" border="1"><br><b>นางสาวรักษรินทร์ ศรีวรรณ </b><br>ครูผู้ช่วย แผนกวิชาช่างสถาปัตยกรรม <br>ครูผู้ช่วย <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/20373_25112010103425.jpg" width="120" border="1"><br><b>นางสาวนฐมนพรรณ สุวรรณชาตรี </b><br>ครูผู้ช่วย แผนกวิชาเทคโนโลยีสารสนเทศ <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นายภัทรชัย เบ็ญเจิด </b><br>ครูผู้ช่วย แผนกวิชาช่างไฟฟ้า <br><br><br></td>
              </tr>
              <tr valign="top">
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/18443_25032812122707.jpg" width="120" border="1"><br><b>นางสาวเขมจิรา บุญสุข </b><br>ครูผู้ช่วย แผนกวิชาช่างกลโรงงาน <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นางสาวศรุตา ตรังค์เอื้อสันติ </b><br>ครูผู้ช่วย แผนกวิชาสามัญสัมพันธ์ <br>ครูผู้ช่วย <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นางสาวสุมิตรา เพ็ชรชะนะ </b><br>ครูผู้ช่วย แผนกวิชาช่างสถาปัตยกรรม <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/54342_2602270990520.jpg" width="120" border="1"><br><b>นางสาวศิริลักษณ์ นาคแก้ว </b><br>ครูผู้ช่วย แผนกวิชาธุรกิจการบินและการจัดการโลจิสติกส์ฯ <br>ครูผู้ช่วย <br><br><br></td>
              </tr>
              <tr valign="top">
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นางสาวนวพรรษ บุญประสพ </b><br>ครูผู้ช่วย แผนกวิชาช่างสถาปัตยกรรม <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/67078_25020514141102.png" width="120" border="1"><br><b>นางสาวรตา คุณทาบุตร </b><br>ครูผู้ช่วย แผนกวิชาพื้นฐานและพลานามัย <br>ครูผู้ช่วย <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นายนัทธพงศ์ ฝั้นตุ่น </b><br>ครูผู้ช่วย แผนกวิชาช่างยนต์ <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/85678_2602020885104.jpg" width="120" border="1"><br><b>นางสาวอินทิรา อิ่มสว่าง </b><br>ครูผู้ช่วย แผนกวิชาช่างก่อสร้าง <br>ครูผู้ช่วย <br><br><br></td>
              </tr>
              <tr valign="top"></tr>
            </tbody>
          </table><br><br>
          <center><big><b>นักศึกษาฝึกสอน</b></big>
            <hr size="1">
          </center><br><br>
          <table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="95%">
            <tbody>
              <tr>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นายธนลภย์ ศิริ </b><br>นักศึกษาฝึกสอน แผนกวิชาช่างไฟฟ้า <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นายธนภัทร ศิริประเสริฐวิทย์ </b><br>นักศึกษาฝึกสอน แผนกวิชาช่างไฟฟ้า <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นางสาวนภัสชล ด้วงประสิทธิ์ </b><br>นักศึกษาฝึกสอน แผนกวิชาช่างไฟฟ้า <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นางสาวสุทธิดา กันทะวัง </b><br>นักศึกษาฝึกสอน แผนกวิชาช่างกลโรงงาน <br><br><br></td>
              </tr>
              <tr valign="top">
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นายเกียงไกร ชมมณี </b><br>นักศึกษาฝึกสอน แผนกวิชาสามัญสัมพันธ์ <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นายศุภกิจ วงค์นันตา </b><br>นักศึกษาฝึกสอน แผนกวิชาเทคนิคพื้นฐาน <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นายนัททวิต ธนะสาร </b><br>นักศึกษาฝึกสอน แผนกวิชาเทคนิคพื้นฐาน <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นายกวินภพ นิ่มพยา </b><br>นักศึกษาฝึกสอน แผนกวิชาสามัญสัมพันธ์ <br><br><br></td>
              </tr>
              <tr valign="top">
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นายคุณาวุธ จักรคำ </b><br>นักศึกษาฝึกสอน แผนกวิชาช่างเชื่อมโลหะ <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นายณัฐชนน ทิตย์สีแสง </b><br>นักศึกษาฝึกสอน แผนกวิชาช่างอิเล็กทรอนิกส์ <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>กาญต์ฐิดา เคลือแก้ว </b><br>นักศึกษาฝึกสอน แผนกวิชาช่างอิเล็กทรอนิกส์ <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>อรวรรณ ทองดี </b><br>นักศึกษาฝึกสอน แผนกวิชาช่างอิเล็กทรอนิกส์ <br><br><br></td>
              </tr>
              <tr valign="top">
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นายธนานุสรณ์ อยู่จันทร์ </b><br>นักศึกษาฝึกสอน แผนกวิชาเทคนิคพื้นฐาน <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นายธันธิยะ สมศรี </b><br>นักศึกษาฝึกสอน แผนกวิชาภาษาอังกฤษ <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นายก้องภพ เดชสะท้าน </b><br>นักศึกษาฝึกสอน แผนกวิชาภาษาอังกฤษ <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นายพีรพัฒน์ โนติ๊บ </b><br>นักศึกษาฝึกสอน แผนกวิชาภาษาไทย <br><br><br></td>
              </tr>
              <tr valign="top">
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นางสาวกชมน วรรณกุล </b><br>นักศึกษาฝึกสอน แผนกวิชาภาษาไทย <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นางสาวจิรัฐติกาล สินาปัน </b><br>นักศึกษาฝึกสอน แผนกวิชาภาษาไทย <br><br><br></td>
              </tr>
            </tbody>
          </table><br><br>
          <center><big><b>พระสงฆ์ (พระอาจารย์)</b></big>
            <hr size="1">
          </center><br><br>
          <table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="95%">
            <tbody>
              <tr>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_16100313133138.jpg" width="120" border="1"><br><b>prasoparatanawan saman </b><br>พระสงฆ์ (พระอาจารย์) แผนกวิชาสามัญสัมพันธ์ <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_16100313133116.jpg" width="120" border="1"><br><b>Prasrisawan Saman </b><br>พระสงฆ์ (พระอาจารย์) แผนกวิชาสามัญสัมพันธ์ <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_16100313133127.jpg" width="120" border="1"><br><b>prasiam saman </b><br>พระสงฆ์ (พระอาจารย์) แผนกวิชาสามัญสัมพันธ์ <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_16100313133150.jpg" width="120" border="1"><br><b>praarnont saman (พระ) </b><br>พระสงฆ์ (พระอาจารย์) แผนกวิชาสามัญสัมพันธ์ <br><br><br></td>
              </tr>
              <tr valign="top">
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_19080917174107.jpg" width="120" border="1"><br><b>พระวัชระ อติภทฺโท </b><br>พระสงฆ์ (พระอาจารย์) แผนกวิชาสามัญสัมพันธ์ <br><br><br></td>
              </tr>
            </tbody>
          </table><br><br>
          <center><big><b>นักศึกษาฝึกงาน</b></big>
            <hr size="1">
          </center><br><br>
          <table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="95%">
            <tbody>
              <tr>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นายณัฐพงศ์ ธิมา </b><br>นักศึกษาฝึกงาน แผนกวิชาช่างเชื่อมโลหะ <br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นายจิรัฎฐ์ รังรองธานินทร์ </b><br>นักศึกษาฝึกงาน แผนกวิชาสามัญสัมพันธ์ <br><br><br></td>
              </tr>
            </tbody>
          </table><br><br>
          <center><big><b>บุคลากร/อาจารย์ผู้สอน</b></big>
            <hr size="1">
          </center><br><br>
          <table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="95%">
            <tbody>
              <tr>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/55293_16080310103457.jpg" width="120" border="1"><br><b>นายนรินทร์ ศรีธิการ </b><br>บุคลากร/อาจารย์ผู้สอน ศูนย์ประสานงานการจัดการศึกษา ระดับปริญญาตรี <br>ครู ชำนาญการพิเศษ<br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/55293_16080310101818.jpg" width="120" border="1"><br><b>นางสาวชมนาด พรมมิจิตร </b><br>บุคลากร/อาจารย์ผู้สอน ศูนย์ประสานงานการจัดการศึกษา ระดับปริญญาตรี <br>ครู ชำนาญการพิเศษ<br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/55293_16080310101659.jpg" width="120" border="1"><br><b>นางสาวขวัญดารินทร์ จิตหาญ </b><br>บุคลากร/อาจารย์ผู้สอน ศูนย์ประสานงานการจัดการศึกษา ระดับปริญญาตรี <br>ครู ชำนาญการพิเศษ<br><br><br></td>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/55293_1703030992239.jpg" width="120" border="1"><br><b>นายเกรียงไกร อิ่นคำ </b><br>บุคลากร/อาจารย์ผู้สอน ศูนย์ประสานงานการจัดการศึกษา ระดับปริญญาตรี <br><br><br></td>
              </tr>
              <tr valign="top">
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="files/50773_20081313132846.jpg" width="120" border="1"><br><b>นางสาวณัฐนรี วงศ์ธิมา </b><br>บุคลากร/อาจารย์ผู้สอน ศูนย์ประสานงานการจัดการศึกษา ระดับปริญญาตรี <br><br><br></td>
              </tr>
            </tbody>
          </table><br><br>
          <center><big><b>ครูพิเศษ</b></big>
            <hr size="1">
          </center><br><br>
          <table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="95%">
            <tbody>
              <tr>
                <td onmouseover="this.style.backgroundColor='#F0F0F0'" onmouseout="this.style.backgroundColor=''" valign="top" align="center" width="25%"><img src="picture.png" width="120" border="1"><br><b>นายเจตตริน ละออง </b><br>ครูพิเศษ งานอาชีวศึกษาระบบทวิภาคีและความร่วมมือ <br>ครู <br><br><br>
                </td>
              </tr>
            </tbody>
          </table>


        </td>
      </tr>
    </tbody>
  </table>
</body>
<!-- ส่วนเนื้อหา
<div class="container-service">
  <br>Bordey Sessfasdfas
  <br>dfas;dlfasdfasd
  <br>fasdfasd
  <br>fasdf
  <br>asdfasd
  <br>fasdf
</div>
 สิ้นสุด-ส่วนเนื้อหา -->

<?php include 'footer.php'; ?> <!-- เรียกใช้ ท้ายเว็บ-->
</body>

</html>