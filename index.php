<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--ส่วนที่เรามองเห็นได้ ของหน้าเว็บ-->
  <meta name="description" content="วิทยาลัยเทคนิคเทิง"><!-- คำอธิบาย-->
  <meta name="author" content="Phongpun Kajina"> <!-- ชื่อผู้พัฒนา-->
  <meta name="keywords" content="วิทยาลัยเทคนิคเทิง">
  <title>หน้าแรก</title>

  <link rel="icon" href="img/logo.png">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather:400,900,900i">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <link rel="stylesheet" href="css/index.css">
  <!-- ปิดไว้: stylesheet บรรทัดนี้ไม่มี href จึงไม่ถูกใช้งาน -->
  <link rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="css/loadding.css">
  <link rel="stylesheet" href="css/card-slider.css" />
  <link rel="stylesheet" href="css/footer.css">
  <link rel="stylesheet" href="css/news.css">
  <link rel="stylesheet" href="./css/popup.css">
  <link rel="stylesheet" href="css/Navbar.css">

</head>

<body>
  <?php include 'header.php'; ?>

  <?php /* ปิด popup ชั่วคราว เพราะไม่จำเป็นต่อหน้าแรก true/false */ ?>
  <?php if (true): ?>
    <div id="popup">
      <div id="popup-content">
        <button id="close-btn" onclick="closePopup()">×</button>
        <img src="./img/banner/B2.1.png" alt="popup">
      </div>
    </div>

    <script>
      setTimeout(function() { // ให้แสดงช้า 3 วินาที
        document.getElementById("popup").style.display = "block";
      }, 2000);

      function closePopup() {
        document.getElementById("popup").style.display = "none";
      }
      document.getElementById("popup").onclick = function(e) { //คลิกพื้นหลังแล้วปิด
        if (e.target.id === "popup") {
          closePopup();
        }
      };
    </script>
  <?php endif; ?>

  <?php include 'slideshowbanner.php'; ?>

  <!-- บริการ -->
  <div class="container-service">
    <a class="no-underline" href="https://std2018.vec.go.th/web/" target="_blank">
      <div class="service">
        <div class="icon">📄</div>
        <h2>ศธ.02</h2>
        <br>
        <p>ระบบบริหารสถานศึกษา ศธ.02 ออนไลน์</p>
      </div>
    </a>

    <a class="no-underline" href="https://student.vec.go.th/web/Login.htm?mode=indexStudent" target="_blank">
      <div class="service">
        <div class="icon">📅</div>
        <h2>นักเรียนนักศึกษา</h2>
        <br>
        <p>ระบบบริหารสถานศึกษา ศธ.02 ออนไลน์ สำหรับ นักเรียน นักศึกษา</p>
      </div>
    </a>

    <a class="no-underline" href="กิจกรรม/รูปกิจกรรมวิทยาลัย.html" target="_blank">
      <div class="service">
        <div class="icon">📊</div>
        <h2>ดาวโหลด</h2>
        <br>
        <p>รูปกิจกรรมนักเรียนนักศึกษา</p>
      </div>
    </a>

    <a class="no-underline" href="#" target="_blank">
      <div class="service">
        <div class="icon">📁</div>
        <h2>จัดการเอกสาร</h2>
        <br>
        <p>สำหรับบุคลากร และเจ้าหน้าที่เท่านั้น</p>
      </div>
    </a>
  </div>
  <!-- สิ้รสุด-ส่วนของบริการ -->

  <!-- ส่วนของประกาศจากวิทยาลัย -->
  <div class="card-slider">
    <div class="slider-container swiper">

      <div class="container-News">
        <h1>ประชาสัมพันธ์</h1>
        <div class="container-button">
          <a href="./announce.php"><button class="button">ประกาศทั้งหมด</button></a>
        </div>
      </div>
      <div class="slider-content">
        <div class="card-wrapper swiper-wrapper">
          <div class="card swiper-slide">
            <div class="image-content">

              <div class="card-image">
                <img src="img/ประกาศจากวิทยาลัยเทคนิคเทิง/1.jpg" class="card-img" alt="" />
              </div>
            </div>
            <div class="card-content">
              <h2 class="name">ข่าวสารสำหรับนักเรียน-นักศึกษา</h2>
              <p class="description">
                แผนพัฒนาคุณภาพการศึกษา ปีงบประมาณ 2568-2570
              </p>
              <div class="container-button">
                <a href="./img/document_pdf/แผนปฏิบัติราชการ_68.pdf"><button class="button">แผนปฏิบัติราชการ 2568</button></a>
                <a href="./img/document_pdf/แผนพัฒนาคุณภาพการศึกษา3ปี.pdf"><button class="button">แผนพัฒนาการศึกษา 3 ปี</button></a>
              </div>
            </div>
          </div>
          <div class="card swiper-slide">
            <div class="image-content">
              <div class="card-image">
                <img src="img/ประกาศจากวิทยาลัยเทคนิคเทิง/แผนปฏิบัติราชการ 2569.png" class="card-img" alt="" />
              </div>
            </div>
            <div class="card-content">
              <h2 class="name">ประกาศ วิทยาลัยเทคนิคเทิง</h2>
              <p class="description">
                แผนปฏิบัติราชการ ประจำปีการศึกษา 2569
              </p>
              <a href="img/ประกาศจากวิทยาลัยเทคนิคเทิง/แผนปฏิบัติราชการ 2569.pdf"><button
                  class="button">แผนปฏิบัติราชการ 2569</button></a>
            </div>
          </div>
          <div class="card swiper-slide">
            <div class="image-content">
              <div class="card-image">
                <img src="img/ประกาศจากวิทยาลัยเทคนิคเทิง/3.jpg" class="card-img" alt="" />
              </div>
            </div>

            <div class="card-content">
              <h2 class="name">ประกาศ วิทยาลัยเทคนิคเทิง</h2>
              <p class="description">
                ประกาศ เรื่องเเผยแพร่แผนการจัดซื้อจัดจ้าง ประจำปีงบประมาณ 2568...
              </p>
              <a href="เอกสาร pdf/ประกาศเผยแพร่แผนการจัดซื้อจัดจ้าง 2568.pdf"><button
                  class="button">รายละเอียดเพิ่มเติม</button></a>
            </div>
          </div>
          <div class="card swiper-slide">
            <div class="image-content">
              <div class="card-image">
                <img src="img/ประกาศจากวิทยาลัยเทคนิคเทิง/4.jpg" class="card-img" alt="" />
              </div>
            </div>
            <div class="card-content">
              <h2 class="name">ประกาศ วิทยาลัยเทคนิคเทิง</h2>
              <p class="description">
                เชิญชวนเข้าร่วมยื่นเสนอแนะรายละเอียดคุณลักษณะเฉพาะครุภัณฑ์...
              </p>
              <a href="เอกสาร pdf/new1-67.jpg"><button class="button">รายละเอียดเพิ่มเติม</button></a>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-button-next swiper-navBtn"></div>
      <div class="swiper-button-prev swiper-navBtn"></div>
      <div class="swiper-pagination"></div>
    </div>
  </div>
  <!-- สิ้นสุด-ส่วนของประกาศจากวิทยาลัย-->


  <div class="main-news">
    <div class="container-News">
      <h1>ประชาสัมพันธ์ วิทยาลัยเทคนิคเทิง</h1>
      <div class="container-button">
        <a href="https://www.facebook.com/profile.php?id=100063455347538"><button class="button">ข่าวสาร/กิจการมทั้งหมด</button></a>
      </div>
    </div>
    <div class="news-container">
      <div class="news-card">
        <img src="img/ข่าวสาร/เปิดประชุม.jpg" alt="ข่าวสาร 1">
        <div class="news-content">
          <div class="news-title">ยินดีต้อนรับ คณะกรรมการประเมินคุณภาพภายนอก</div>
          <div class="news-date">10-14 กุมภาพันธ์ 2568 </div>
          <div class="news-description">
            พิธีเปิดการประชุมองค์การนักวิชาชีพในอนาคตแห่งประเทศไทย ระดับชาติ ครั้งที่ 33 ณ โรงแรมธรรมรินทร์ ธนา
            อำเภอเมือง จังหวัดตรัง
          </div>
          <a href="#" class="read-more">อ่านต่อ</a>
        </div>
      </div>
      <div class="news-card">
        <img src="img/ข่าวสาร/โครงงาน.jpg" alt="ข่าวสาร 2">
        <div class="news-content">
          <div class="news-title">โครงการนิเทศการจัดแสดงผลงานวิชาโครงงาน</div>
          <div class="news-date">31 มกราคม 2025</div>
          <div class="news-description">วันศุกร์ ที่ 31 มกราคม 2568 ว่าที่ร้อยตรีสมฤทธิ์ ไกลถิ่น
            ผู้อำนวยการวิทยาลัยเทคนิคเทิง ได้มอบหมายให้ฝ่ายวิชาการ ได้ดำเนินการ "โครงการนิเทศการจัดแสดงผลงานวิชาโครงงาน"
          </div>
          <a href="#" class="read-more">อ่านต่อ</a>
        </div>
      </div>
      <div class="news-card">
        <img src="img/ข่าวสาร/โครงการศาล.jpg" alt="ข่าวสาร 1">
        <div class="news-content">
          <div class="news-title">โครงการศาลจังหวัดเทิงเคลื่อนที่เพื่อประชาสัมพันธ์และเผยแพร่ความรู้ด้านกฎหมาย</div>
          <div class="news-date">29 มกราคม 2025</div>
          <div class="news-description">
            วันพุธที่ 29 มกราคม 2568 ศาลจังหวัดเทิง ได้จัดกิจกรรมโครงการศาให้แก่นักศึกษา
            ระดับประกาศนียบัตรวิชาชีพชั้นสูง (ปวส.)
          </div>
          <a href="#" class="read-more">อ่านต่อ</a>
        </div>
      </div>
    </div>

    <!--ข่าวจัดซื้อจัดจ้าง-->
    <?php include 'pr_student.php'; ?>

  </div>



  <!-- ส่วนของข่าวสารทั่วไป -->

  <!-- ประตูสู่ความโป่งใส -->
  <div class="container-opendoor">
    <div class="text-opendoor">
      <p>เปิดประตูความโปร่งใส วิทยาลัยเทคนิคเทิง</p>
    </div>
    <a href="./ita_2569.php">
      <div class="opendoor">
        <p>Open</p>
      </div>
    </a>
  </div>
  <!-- สิ้นสุดประตูสู่ความโป่งใส -->

  <!-- ส่วนของ E-service -->
  <div class="containre-eservice">
    <div class="image-eservice">
      <img src="img/e-service.png" alt="บริการออนไลน์">
    </div>
    <div class="eservice">
      <h1>บริการออนไลน์</h1>
      <h2>E-SERVICE</h2>
      <div class="service-list">
        <div class="eservice-item "><a href="https://std2018.vec.go.th/web/Login.htm?mode=manual">ข้อมูลการใช้งาน</a>
        </div>
        <div class="eservice-item"><a
            href="https://student.vec.go.th/web/Login.htm?mode=indexStudenthttps://student.vec.go.th/web/Login.htm?mode=indexStudent">ผลการเรียน</a>
        </div>
        <div class="eservice-item"><a href="กิจกรรม/รับสมัครนักเรียนนักศึกษาปวช.html">สมัครนักศึกษา ปวช.</a></div>
        <div class="eservice-item"><a href="กิจกรรม/รับสมัครนักเรียนนักศึกษาปวส.html">สมัครนักศึกษา ปวส.</a></div>
        <div class="eservice-item"><a href="ข้อมูล/ข้อมูลหลักสูตรฯ.html">อาคารสถานที่</a></div>
        <div class="eservice-item"><a href="กิจกรรม/รูปกิจกรรมวิทยาลัย.html">กิจกรรม</a></div>
        <div class="eservice-item"><a href="กิจกรรม/ข้อมูลทางวิทยาลัย.html">ข้อมูลมหาวิทยาลัย</a></div>
        <div class="eservice-item"><a href="ติดค่อเรา.html">ติดต่อเรา</a></div>
        <div class="eservice-item"><a href="#">สื่อการเรียนการสอน</a></div>
        <div class="eservice-item"><a href="#">ระบบทวิภาคี</a></div>
        <div class="eservice-item"><a href="สาขา/แผนกวิชาช่างไฟฟ้า.html">แผนกช่างไฟฟ้า</a></div>
        <div class="eservice-item"><a href="สาขา/แผนกวิชาช่างยนต์.html">แผนกช่างยนต์</a></div>
        <div class="eservice-item"><a href="สาขา/แผนกวิชาช่างเชื่อม.html">แผนกช่างเชื่อม</a></div>
        <div class="eservice-item"><a href="สาขา/แผนกวิชาช่างก่อสร้าง.html">แผนกช่างก่อสร้าง</a></div>
        <div class="eservice-item"><a href="สาขา/แผนกวิชาช่างกลโรงงาน.html">แผนกช่างกลโรงงาน</a></div>
        <div class="eservice-item"><a href="สาขา/แผนกวิชาช่างอิเล็กทรอนิกส์.html">แผนกอิเล็กทรอนิกส์</a></div>
        <div class="eservice-item"><a href="สาขา/แผนกวิชาพณิชยการ.html">แผนกพาณิชยการ</a></div>
        <div class="eservice-item"><a href="สาขา/แผนกวิชาสามัญสัมพันธ์.html">แผนกวิชาสัมพันธ์</a></div>
        <div class="eservice-item large"><a href="สาขา/แผนกวิชาเทคโนโลยีสารสนเทศ.html">เทคโนโลยีสารสนเทศ</a></div>
      </div>
    </div>
  </div>
  <!-- สิ้นสุดส่วนของ E-service -->


  <!-- ข้อมุลนักเรียน -->
  <div class="sutdu-container">
    <div class="gridsss-item">
      <img src="img/k2.png" alt="Image 1" class="circle-image">
      <h1 class="counter" data-target="1116" style="color: #f4af00;">1116 คน</h1>
      <p style="color: white;">ผู้เรียนทั้งหมด (ข้อมูล ณ 24-7-2567)</p>
    </div>
    <div class="gridsss-item">
      <img src="img/k2.png" alt="Image 2" class="circle-image">
      <h1 class="counter" data-target="728" style="color: #f4af00;">728 คน</h1>
      <p style="color: white;">ระดับ ปวช. (ข้อมูล ณ 24-7-2567)</p>
    </div>
    <div class="gridsss-item">
      <img src="img/k2.png" alt="Image 3" class="circle-image">
      <h1 class="counter" data-target="388" style="color: #f4af00;">388 คน</h1>
      <p style="color: white;">ระดับ ปวส. (ข้อมูล ณ 24-7-2567)</p>
    </div>
    <div class="gridsss-item">
      <img src="img/k2.png" alt="Image 3" class="circle-image">
      <h1 class="counter" data-target="78" style="color: #f4af00;">78 คน</h1>
      <p style="color: white;">บุคลากร (ข้อมูล ณ 24-7-2567)</p>
    </div>
  </div>




  <!-- ส่วนอัตลักษณณ์ -->
  <div class="parallax1">
    <div class="parallax1-text">
      <h2>วิสัยทัศน์ วิทยาลัยเทคนิคเทิง</h2>
      <p>วิทยาลัยเทคนิคเทิง เป็นสถานศึกษาชั้นนำด้านอาชีพ และมุ่งมั่นผลิตกำลังคนเพื่อสนองความต้องการของตลาดแรงงาน</p>
    </div>
  </div>

  <!-- สิ้oสุด-ส่วนของข่าวสารทั่วไป-->
  <?php include 'footer.php'; ?>
  <script src="./js/slider.js"></script>
</body>

</html>