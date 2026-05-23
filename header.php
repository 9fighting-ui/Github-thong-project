 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--ส่วนที่เรามองเห็นได้ ของหน้าเว็บ-->
   <meta name="description" content="วิทยาลัยเทคนิคเทิง"><!-- คำอธิบาย-->
   <meta name="author" content="Phongpun Kajina"> <!-- ชื่อผู้พัฒนา-->
   <meta name="keywords" content="วิทยาลัยเทคนิคเทิง">
   <title>หน้าแรก</title>
<!--
   <link rel="icon" href="img/logo.png">
   <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Prompt:wght@300;400;500;600&display=swap">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather:400,900,900i">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
   <link rel="stylesheet" href="css/index.css">
   <link rel="stylesheet" href="css/loadding.css">
   <link rel="stylesheet" href="css/card-slider.css" />
   <link rel="stylesheet" href="css/footer.css">
   <link rel="stylesheet" href="css/News.css">
 -->

   <!-- โหลดสไตล์ของแถบนำทางหลักที่รองรับทั้งคอมพิวเตอร์และมือถือ -->
   <link rel="stylesheet" href="./css/navbar.css">
   <!--<link rel="stylesheet" href="./css/popup.css">-->
   <!-- โหลดสคริปต์ควบคุมเมนู responsive และการเข้าถึงด้วยคีย์บอร์ด -->
   <script src="./js/navbar.js" defer></script>
   <!--  
   <link rel="stylesheet" type="text/css">
   -->
   <!-- ส่วนควบคุมการเปิด/ปิดเมนูถูกย้ายไปจัดการใน js/navbar.js แล้ว -->
 </head>

 <!-- Back to top button ลื่อนขึ้น ลง ล่างขวา-->
 <a id="button-top"></a>
 <a href="https://www.facebook.com/profile.php?id=100063455347538" target="_blank" id="messenger"><img
     src="img/messenger.svg" alt=""></a>

 <!-- ส่วนของหน้าโหลดเว็บไซร์ -->
 <div id="loader" class="loader green-color">
   <div class="loader-container">
     <div class="loader-icon">
       <img src="./img/logo.jpg" alt="">
     </div>
   </div>
 </div>
 <!-- สิ้นสุด-ส่วนของหน้าโหลดเว็บไซร์ -->

 <!-- ส่วนของ Navbar -->
 <div class="navs">
   <header class="header">
     <!-- แถบด้านบนสำหรับข้อความและลิงก์โซเชียล -->
     <div class="top-bar">
       <div class="typing">
         <img src="img/king10.png" alt="สัญลักษณ์ประจำวิทยาลัย">
         <div class="typing-container" id="typing"></div>
       </div>
       <div class="icon-bar">
         <a href="https://www.facebook.com/profile.php?id=100063455347538" target="_blank" rel="noopener noreferrer">
           <img src="img/facebook.png" alt="Facebook Profile">
         </a>

         <a href="#" target="_blank" rel="noopener noreferrer">
           <img src="img/instagram.png" alt="instagram Profile">
         </a>

         <a href="https://www.tiktok.com/@thoeng_technical_college?is_from_webapp=1&sender_device=pc" target="_blank" rel="noopener noreferrer">
           <img src="./img/tiktok1.png" alt="TikTok Profile">
         </a>

         <a href="https://youtube.com/@ttcchannel3088?si=2FhA8i0Oo2T4UmaM" target="_blank" rel="noopener noreferrer">
           <img src="img/youtube.png" alt="YouTube Profile">
         </a>

         <a href="https://mail.google.com/mail/?view=cm&fs=1&to=tice.vec@gmail.com" target="_blank">
           <img src="img/email.png" alt="Email">
         </a>
       </div>
     </div>

     <div class="container-nav">
       <div class="header-main">
         <!-- โลโก้และชื่อวิทยาลัย -->
         <div class="logo">
           <img src="img/logo.png" alt="โลโก้วิทยาลัยเทคนิคเทิง">
           <div class="logo-text">
             <h2>วิทยาลัยเทคนิคเทิง</h2>
             <p>Thoeng Technical College</p>
           </div>
         </div>
         <!-- ปุ่มเปิดเมนูสำหรับหน้าจอขนาดเล็ก -->
         <button class="open-nav-menu" type="button" aria-label="เปิดเมนูนำทาง" aria-controls="site-navigation" aria-expanded="false">
           <span></span>
         </button>
         <!-- ฉากหลังทึบเมื่อเปิดเมนูบนมือถือ -->
         <div class="menu-overlay"></div>
         <!-- เมนูหลักของเว็บไซต์ รองรับเมนูหลายชั้น -->
         <nav class="nav-menu" id="site-navigation" aria-label="เมนูหลักของเว็บไซต์">
           <button class="close-nav-menu" type="button" aria-label="ปิดเมนูนำทาง">
             <img src="img/close.png" alt="ปิดเมนู">
           </button>
           <ul class="menu">
             <li class="menu-item">
               <a href="./index.php">หน้าแรก</a>
             </li>

             <li class="menu-item menu-item-has-children">
               <a href="#" data-toggle="sub-menu">ข้อมูลฯ <i class="plus"></i></a>
               <ul class="sub-menu">
                 <li class="menu-item menu-item-has-children">
                   <a href="#" data-toggle="sub-menu">• ข้อมูลพื้นฐาน</a>
                   <ul class="sub-menu">
                     <li class="menu-item"><a href="./history.php">• ข้อมูลทั่วไปสถานศึกษา</a></li>
                     <li class="menu-item"><a href="./data_student.php">• ข้อมูลนักเรียน-นักศึกษา</a></li>
                     <li class="menu-item"><a href="./data_personnel.php">• ข้อมูลครู/บุคลากรฯ</a></li>
                     <li class="menu-item"><a href="./adjust.php">• หลักสูตรที่เปิดสอน</a></li>
                     <li class="menu-item"><a href="./adjust.php">• ข้อมูลแผนงาน/งบประมาณ</a></li>
                     <li class="menu-item"><a href="./adjust.php">• ข้อมูลครุภัณฑ์</a></li>
                     <li class="menu-item"><a href="./building.php">• ข้อมูลอาคารสถานที่</a></li>
                     <li class="menu-item"><a href="./adjust.php">• ข้อมูลตลาดแรงงาน</a></li>
                     <li class="menu-item"><a href="./adjust.php">• ข้อมูลพื้นจังหวัดเชียงราย</a></li>
                   </ul>
                 </li>
                 <li class="menu-item"><a href="./information_executive.php">• ผู้บริหารสถานศึกษา</a></li>
                 <li class="menu-item"><a href="./structure.php">• โครงสร้างการบริหาร</a></li>
                 <li class="menu-item"><a href="./adjust.php">• กฎหมายที่เกี่ยวข้อง</a></li>
                 <li class="menu-item"><a href="./adjust.php">• ระเบียบบริหารสถานศึกษา</a></li>
                 <li class="menu-item"><a href="./no_gift_policy_page.php">• ประกาศเจตจำนงสุจริตฯ</a></li>
                 <li class="menu-item"><a href="./no_gift_policy_page.php">• นโยบายไม่รับของขวัญ</a></li>
                 <li class="menu-item"><a href="./adjust.php">• รางวัลความสำเร็จ</a></li>
               </ul>
             </li>

             <li class="menu-item menu-item-has-children">
               <a href="#" data-toggle="sub-menu">หน่วยงาน <i class="plus"></i></a>
               <ul class="sub-menu">

                 <li class="menu-item menu-item-has-children">
                   <a href="#" data-toggle="sub-menu">• ฝ่ายบริหารทรัพยากร</a>
                   <ul class="sub-menu">
                     <li class="menu-item"><a href="./adjust.php">• งานบริหารงานทั่วไป </a></li>
                     <li class="menu-item"><a href="./adjust.php">• งานบริหารและพัฒนาทรัพยากรบุคคล</a></li>
                     <li class="menu-item"><a href="./adjust.php">• งานการเงิน</a></li>
                     <li class="menu-item"><a href="./adjust.php">• งานการบัญชี</a></li>
                     <li class="menu-item"><a href="./adjust.php">• งานพัสดุ</a></li>
                     <li class="menu-item"><a href="./adjust.php">• งานอาคารสถานที</a></li>
                     <li class="menu-item"><a href="./adjust.php">• งานทะเบียน</a></li>
                   </ul>
                 </li>

                 <li class="menu-item menu-item-has-children">
                   <a href="#" data-toggle="sub-menu">• ฝ่ายยุทธศาสตร์และแผนงาน </a>
                   <ul class="sub-menu">
                     <li class="menu-item"><a href="./adjust.php">• งานพัฒนายุทศาสตร์ แผนงานงบประมาณ</a></li>
                     <li class="menu-item"><a href="./adjust.php">• งานมาตรฐานและการประกันคุณภาพ</a></li>
                     <li class="menu-item"><a href="./adjust.php">• งานศูนย์ดิจิทัลและสื่อสารองค์กร</a></li>
                     <li class="menu-item"><a href="./adjust.php">• งานส่งเสริมการวิจัย นวัตกรรมและสิ่งประดิษฐ์</a></li>
                     <li class="menu-item"><a href="./adjust.php">• งานส่งเสริมธุรกิจและการเป็นผู้ประกอบการ</a></li>
                     <li class="menu-item"><a href="./adjust.php">• งานติดตามและประเมินผลการอาชีวศึกษา</a></li>
                   </ul>
                 </li>

                 <li class="menu-item menu-item-has-children">
                   <a href="#" data-toggle="sub-menu">• ฝ่ายพัฒนากิจการนักเรียน นักศึกษา</a>
                   <ul class="sub-menu">
                     <li class="menu-item"><a href="./adjust.php">• งานกิจกรรมนักเรียนนักศึกษา</a></li>
                     <li class="menu-item"><a href="./adjust.php">• งานครูที่ปรึกษาและการแนะแนว</a></li>
                     <li class="menu-item"><a href="./adjust.php">• งานปกครองและความปลอดภัยนักเรีนนักศึกษา</a></li>
                     <li class="menu-item"><a href="./adjust.php">• งานสวัสดีการนักเรีนนักศึกษา</a></li>
                     <li class="menu-item"><a href="./adjust.php">• งานโครงการพิเศษและบริการ</a></li>
                   </ul>
                 </li>
                 <li class="menu-item menu-item-has-children">
                   <a href="#" data-toggle="sub-menu">• ฝ่ายวิชาการ</a>
                   <ul class="sub-menu">
                     <li class="menu-item"><a href="./adjust.php">• งานแผนกวิชา</a></li>
                     <li class="menu-item"><a href="./adjust.php">• งานพัฒนาหลักสูตรและการจัดการเรียนรู้</a></li>
                     <li class="menu-item"><a href="./adjust.php">• งานวัดผลและประเมินผล </a></li>
                     <li class="menu-item"><a href="./adjust.php">• งานอาชีวศึกษาระบบทวิภาคีและความร่วมมือ</a></li>
                     <li class="menu-item"><a href="./adjust.php">• งานวิทยบริการและเทคโนโลยีการศึกษา</a></li>
                     <li class="menu-item"><a href="./adjust.php">• งานการศึกษาพิเศษและความเสมอภาคทางการศึกษา</a></li>
                     <li class="menu-item"><a href="./adjust.php">• งานพีฒนาหลักสูตรสายเทคโนโลยีหรือสายปฎิบัติการ</a></li>
                   </ul>
                 </li>
               </ul>
             </li>
             <li class="menu-item menu-item-has-children">
               <a href="#" data-toggle="sub-menu">แผนกวิชา <i class="plus"></i></a>
               <ul class="sub-menu">
                 <li class="menu-item"><a href="./section_auto_mechanic.php">• แผนกวิชาช่างยนต์</a></li>
                 <li class="menu-item"><a href="./section_factory.php">• แผนกวิชาช่างกลโรงงาน</a></li>
                 <li class="menu-item"><a href="./section_welders.php">• แผนกวิชาช่างเชื่อมโลหะ</a></li>
                 <li class="menu-item"><a href="./section_electrical.php">• แผนกวิชาช่างไฟฟ้า</a></li>
                 <li class="menu-item"><a href="./section_electronics.php">• แผนกวิชาช่างอิเล็กทรอนิกส์</a></li>
                 <li class="menu-item"><a href="./section_construction.php">• แผนกวิชาช่างก่อสร้าง</a></li>
                 <li class="menu-item"><a href="./section_accountants.php">• สาขาวิชาการบัญชี</a></li>
                 <li class="menu-item"><a href="./section_it.php">• แผนกวิชาคอมพิวเตอร์เทคโนโลยีสารสนเทศ</a></li>
                 <li class="menu-item"><a href="./section_general.php">• แผนกวิชาสามัญ-สัมพันธ์</a></li>
               </ul>
             </li>

             <li class="menu-item menu-item-has-children">
               <a href="./adjust.php" data-toggle="sub-menu">บริการสารสนเทศ<i class="plus"></i></a>
               <ul class="sub-menu">                               
                  <li class="menu-item menu-item-has-children">
                   <a href="#" data-toggle="sub-menu">• สำหรับครู/บุคลากรฯ</a>
                   <ul class="sub-menu">
                     <li class="menu-item"><a href="#">• ระบบฝึกอบรมฯ(R-HRD)</a></li>    
                     <li class="menu-item"><a href="#">• ห้องสมุดออนไลน์</a></li>                    
                   </ul>
                 </li><li class="menu-item menu-item-has-children">
                   <a href="#" data-toggle="sub-menu">• สำหรับนักศึกษา/นักศึกษา</a>
                   <ul class="sub-menu">
                     <li class="menu-item"><a href="#">• สมัครเรียนออนไลน์</a></li>    
                     <li class="menu-item"><a href="#">• ลงทะเบียนเรียนออนไลน์</a></li> 
                     <li class="menu-item"><a href="#">• คู่มือนักเรียน/นักศึกษา</a></li>   
                     <li class="menu-item"><a href="#">• ห้องสมุดออนไลน์</a></li>                  
                   </ul>
                 </li>
                 <li class="menu-item"><a href="#">• สำหรับผู้ปกครอง</a></li>
                 <li class="menu-item"><a href="contact.php">• สำหรับศิษย์เก่า</a></li>
                 <li class="menu-item"><a href="contact.php">• ร้องเรียน/ร้องทุกข์</a></li>
               </ul>
             </li>

             <li class="menu-item menu-item-has-children">
               <a href="./adjust.php" data-toggle="sub-menu">ข่าวสาร<i class="plus"></i></a>
               <ul class="sub-menu">
                 <li class="menu-item"><a href="#">• ประชาสัมพันธ์</a></li>
                 <li class="menu-item"><a href="#">• จัดซื้อจัดจ้าง</a></li>
                 <li class="menu-item"><a href="#">• รับสมัครงาน</a></li>
               </ul>
             </li>             

           <li class="menu-item menu-item-has-children">
             <a href="#" data-toggle="sub-menu">ITA<i class="plus"></i></a>
             <ul class="sub-menu">
               <li class="menu-item"><a href="./ita_2568.php">ประจำปีงบประมาณ 2568<i class="plus"></i></a>
               </li>
               <li class="menu-item"><a href="./ita_2569.php">ประจำปีงบประมาณ 2569<i class="plus"></i></a>
               </li>
             </ul>
           </li>

           <!--<li class="menu-item">
               <a href="./login.php">Login</a>
             </li>-->

           <li class="menu-item">
             <a href="./contact.php">ติดต่อเรา</a>
           </li>
           </ul>
         </nav>
       </div>
     </div>
   </header>
 </div>
 <!-- สิ้นสุด-ส่วนของ Navbar -->