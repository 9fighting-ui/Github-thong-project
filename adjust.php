<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--ส่วนที่เรามองเห็นได้ ของหน้าเว็บ-->
  <meta name="description" content="วิทยาลัยเทคนิคเทิง"><!-- คำอธิบาย-->
  <meta name="author" content="Phongpun Kajina"> <!-- ชื่อผู้พัฒนา-->
  <meta name="keywords" content="วิทยาลัยเทคนิคเทิง">
  <title>ปรับปรุง</title>

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
  <link rel="stylesheet" href="./css/adjust.css">

</head>

<body>
  <!-- Back to top button เลื่อนขึ้น ลง ล่างขวา-->
  <a id="button-top"></a>
  <a href="#" id="messenger"><img src="img/messenger.svg" alt=""></a>

  <?php include 'header.php'; ?> <!-- เรียกใช้ หัวเว็บ-->
  <?php //include './slideshowbanner.php'; 
  ?><!-- เรียกใช้ แบนด์เนอร์สไลด์-->


  <!-- ส่วนเนื้อหา -->
  <!-- อยู่ระหว่างปรับปรุง -->
  <div class="maintenance">
    <div class="box">
      <img src="img/maintenance.png" alt="maintenance">
      <h1>🚧 อยู่ระหว่างปรับปรุงเว็บไซต์</h1>
      <p>
        ขออภัยในความไม่สะดวก<br>
        ขณะนี้เว็บไซต์วิทยาลัยเทคนิคเทิงกำลังอยู่ระหว่างการปรับปรุง<br>
        เพื่อเพิ่มประสิทธิภาพในการให้บริการ
      </p>

      <p class="contact">
        หากต้องการติดต่อเร่งด่วน กรุณาติดต่อผ่าน Facebook หรือโทรศัพท์ของวิทยาลัย
      </p>

      <a href="./index.php" class="btn-home">กลับหน้าหลัก</a>
    </div>
  </div>
  <!-- สิ้นสุด-ส่วนเนื้อหา -->

  <?php include 'footer.php'; ?> <!-- เรียกใช้ ท้ายเว็บ-->
</body>

</html>