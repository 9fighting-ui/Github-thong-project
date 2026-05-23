<?php
session_start();

/* ตั้งค่าหน้าฟอร์มติดต่อ */
$contactEmail = 'tice.vec@gmail.com';
$status = null;
$statusMessage = '';
$showSuccessPopup = false;

if (empty($_SESSION['contact_csrf'])) {
  $_SESSION['contact_csrf'] = bin2hex(random_bytes(32));
}

/* เก็บค่าเดิมในฟอร์มไว้เมื่อมีข้อผิดพลาด */
$formData = [
  'full_name' => '',
  'email' => '',
  'subject' => '',
  'message' => '',
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $formData['full_name'] = trim($_POST['full_name'] ?? '');
  $formData['email'] = trim($_POST['email'] ?? '');
  $formData['subject'] = trim($_POST['subject'] ?? '');
  $formData['message'] = trim($_POST['message'] ?? '');

  $csrfToken = $_POST['csrf_token'] ?? '';
  $honeyPot = trim($_POST['company_name'] ?? '');
  $startedAt = (int) ($_POST['started_at'] ?? 0);
  $now = time();
  $secondsSpent = $startedAt > 0 ? ($now - $startedAt) : 0;
  $lastSubmit = (int) ($_SESSION['contact_last_submit'] ?? 0);

  if (!hash_equals($_SESSION['contact_csrf'], $csrfToken)) {
    $status = 'error';
    $statusMessage = 'ไม่สามารถยืนยันความถูกต้องของแบบฟอร์มได้ กรุณาลองใหม่อีกครั้ง';
  } elseif ($honeyPot !== '') {
    $status = 'error';
    $statusMessage = 'ระบบตรวจพบพฤติกรรมการส่งข้อมูลที่ไม่ถูกต้อง';
  } elseif ($secondsSpent > 0 && $secondsSpent < 4) {
    $status = 'error';
    $statusMessage = 'ส่งข้อมูลเร็วเกินไป กรุณาตรวจสอบข้อมูลแล้วลองส่งใหม่อีกครั้ง';
  } elseif ($lastSubmit > 0 && ($now - $lastSubmit) < 60) {
    $status = 'error';
    $statusMessage = 'กรุณารออย่างน้อย 1 นาทีก่อนส่งข้อความอีกครั้ง';
  } elseif ($formData['full_name'] === '' || $formData['email'] === '' || $formData['subject'] === '' || $formData['message'] === '') {
    $status = 'error';
    $statusMessage = 'กรุณากรอกข้อมูลให้ครบทุกช่อง';
  } elseif (!filter_var($formData['email'], FILTER_VALIDATE_EMAIL)) {
    $status = 'error';
    $statusMessage = 'รูปแบบอีเมลไม่ถูกต้อง';
  } elseif (mb_strlen($formData['message']) < 10) {
    $status = 'error';
    $statusMessage = 'กรุณากรอกข้อความอย่างน้อย 10 ตัวอักษร';
  } else {
    $safeName = str_replace(["\r", "\n"], ' ', $formData['full_name']);
    $safeEmail = filter_var($formData['email'], FILTER_SANITIZE_EMAIL);
    $safeSubject = str_replace(["\r", "\n"], ' ', $formData['subject']);
    $safeMessage = trim(str_replace("\r", '', $formData['message']));

    $mailSubject = 'ติดต่อจากเว็บไซต์: ' . $safeSubject;
    $mailBody = "มีผู้ส่งข้อความจากหน้า Contact\n\n"
      . "ชื่อ-นามสกุล: {$safeName}\n"
      . "อีเมลผู้ส่ง: {$safeEmail}\n"
      . "หัวข้อ: {$safeSubject}\n"
      . "เวลาที่ส่ง: " . date('Y-m-d H:i:s') . "\n\n"
      . "ข้อความ:\n{$safeMessage}\n";

    $headers = [
      'MIME-Version: 1.0',
      'Content-Type: text/plain; charset=UTF-8',
      'From: Website Contact <no-reply@thoeng.ac.th>',
      'Reply-To: ' . $safeEmail,
      'X-Mailer: PHP/' . phpversion(),
    ];

    $sent = mail($contactEmail, '=?UTF-8?B?' . base64_encode($mailSubject) . '?=', $mailBody, implode("\r\n", $headers));

    if ($sent) {
      $_SESSION['contact_last_submit'] = $now;
      $_SESSION['contact_success'] = true;
      $_SESSION['contact_csrf'] = bin2hex(random_bytes(32));
      header('Location: contact.php?sent=1');
      exit;
    }

    $status = 'error';
    $statusMessage = 'ไม่สามารถส่งอีเมลได้ในขณะนี้ กรุณาลองใหม่อีกครั้งภายหลัง';
  }
}

if (isset($_GET['sent']) && $_GET['sent'] === '1' && !empty($_SESSION['contact_success'])) {
  $showSuccessPopup = true;
  $status = 'success';
  $statusMessage = 'ส่งข้อมูลสำเร็จ ระบบได้ส่งข้อความไปยังอีเมลของวิทยาลัยแล้ว';
  $_SESSION['contact_success'] = false;
  $formData = [
    'full_name' => '',
    'email' => '',
    'subject' => '',
    'message' => '',
  ];
}
?>
<!DOCTYPE html>
<html lang="th">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="ติดต่อวิทยาลัยเทคนิคเทิง ส่งข้อความร้องเรียน ร้องทุกข์ หรือสอบถามข้อมูล">
  <meta name="author" content="Phongpun Kajina">
  <meta name="keywords" content="วิทยาลัยเทคนิคเทิง, ติดต่อเรา, ส่งข้อความ">
  <title>ติดต่อเรา</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/loadding.css">
  <link rel="stylesheet" href="css/navbar.css">
  <link rel="stylesheet" href="css/card-slider.css">
  <link rel="stylesheet" href="css/footer.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <link rel="stylesheet" href="css/news.css">
  <link rel="icon" href="img/logo.png">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Merriweather:400,900,900i" rel="stylesheet">
  <link rel="stylesheet" href="./css/contact.css">
</head>

<body>
  <?php include 'header.php'; ?>

  <main class="contact-page">
    <div class="contact-layout">
      <section class="contact-card contact-card--info">
        <span class="contact-badge">Contact Us</span>
        <h1>ติดต่อวิทยาลัยเทคนิคเทิง</h1>
        <p class="contact-lead">
          หากต้องการสอบถามข้อมูล แจ้งปัญหา ร้องเรียน ร้องทุกข์ หรือร้องทุจริต
          สามารถส่งข้อมูลผ่านแบบฟอร์มด้านขวาได้โดยตรง
        </p>

        <div class="contact-detail-list">
          <div class="contact-detail">
            <span class="contact-detail-icon"><i class="fas fa-map-marker-alt"></i></span>
            <div>
              <strong>ที่อยู่</strong>
              เลขที่ 191 หมู่ 15 ถนนพิศาล ตำบลเวียง อำเภอเทิง จังหวัดเชียงราย 57160
            </div>
          </div>

          <div class="contact-detail">
            <span class="contact-detail-icon"><i class="fas fa-phone-alt"></i></span>
            <div>
              <strong>โทรศัพท์</strong>
              053-795-526
            </div>
          </div>

          <div class="contact-detail">
            <span class="contact-detail-icon"><i class="fas fa-envelope"></i></span>
            <div>
              <strong>อีเมล</strong>
              <?php echo htmlspecialchars($contactEmail, ENT_QUOTES, 'UTF-8'); ?>
            </div>
          </div>
        </div>

        <p class="contact-note">
          ฟอร์มนี้มีระบบป้องกันสแปมเบื้องต้น เช่น token ตรวจสอบฟอร์ม, ช่องหลอกสำหรับบอท,
          การจำกัดเวลาส่งซ้ำ และการตรวจสอบเวลาในการกรอกข้อมูล
        </p>

        <div class="contact-map">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3756.692625775408!2d100.1964243749685!3d19.683114732633374!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30d7be4745440135%3A0xf56b260bbfacc9b8!2z4Lin4Li04LiX4Lii4Liy4Lil4Lix4Lii4LmA4LiX4LiE4LiZ4Li04LiE4LmA4LiX4Li04LiH!5e0!3m2!1sth!2sth!4v1774804666954!5m2!1sth!2sth"
            loading="lazy"
            allowfullscreen
            referrerpolicy="no-referrer-when-downgrade"
            title="แผนที่วิทยาลัยเทคนิคเทิง"></iframe>
        </div>
      </section>

      <section class="contact-card">
        <span class="contact-badge">Send Message</span>
        <h2>ส่งข้อความถึงเรา</h2>
        <p class="form-hint">กรุณากรอกข้อมูลให้ครบถ้วน ระบบจะส่งข้อความไปยังอีเมล <?php echo htmlspecialchars($contactEmail, ENT_QUOTES, 'UTF-8'); ?></p>

        <?php if ($status === 'error'): ?>
          <div class="contact-status contact-status--error">
            <?php echo htmlspecialchars($statusMessage, ENT_QUOTES, 'UTF-8'); ?>
          </div>
        <?php endif; ?>

        <?php if ($status === 'success' && !$showSuccessPopup): ?>
          <div class="contact-status contact-status--success">
            <?php echo htmlspecialchars($statusMessage, ENT_QUOTES, 'UTF-8'); ?>
          </div>
        <?php endif; ?>

        <form class="contact-form" method="post" action="contact.php" novalidate>
          <div class="contact-form-grid">
            <div class="form-group">
              <label for="full_name">ชื่อ-นามสกุล</label>
              <input id="full_name" name="full_name" type="text" maxlength="120" required value="<?php echo htmlspecialchars($formData['full_name'], ENT_QUOTES, 'UTF-8'); ?>">
            </div>

            <div class="form-group">
              <label for="email">อีเมล</label>
              <input id="email" name="email" type="email" maxlength="120" required value="<?php echo htmlspecialchars($formData['email'], ENT_QUOTES, 'UTF-8'); ?>">
            </div>

            <div class="form-group form-group--full">
              <label for="subject">หัวข้อ</label>
              <input id="subject" name="subject" type="text" maxlength="150" required value="<?php echo htmlspecialchars($formData['subject'], ENT_QUOTES, 'UTF-8'); ?>">
            </div>

            <div class="form-group form-group--full">
              <label for="message">ข้อความ</label>
              <textarea id="message" name="message" required><?php echo htmlspecialchars($formData['message'], ENT_QUOTES, 'UTF-8'); ?></textarea>
            </div>
          </div>

          <!-- ช่องหลอกเพื่อดักบอท ถ้าถูกกรอกแปลว่ามีโอกาสเป็นสแปม -->
          <div class="contact-honeypot" aria-hidden="true">
            <label for="company_name">Company</label>
            <input id="company_name" name="company_name" type="text" tabindex="-1" autocomplete="off">
          </div>

          <!-- ใช้ token และเวลาเริ่มต้นเพื่อช่วยป้องกันการยิงฟอร์มอัตโนมัติ -->
          <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars($_SESSION['contact_csrf'], ENT_QUOTES, 'UTF-8'); ?>">
          <input type="hidden" name="started_at" value="<?php echo time(); ?>">

          <p class="form-hint">
            ระบบจะตรวจสอบข้อมูลก่อนส่งอีเมล และจำกัดการส่งซ้ำภายในช่วงเวลาสั้น ๆ เพื่อป้องกันสแปม
          </p>

          <button class="contact-submit" type="submit">ส่งข้อความ</button>
        </form>
      </section>
    </div>
  </main>

  <div class="contact-popup<?php echo $showSuccessPopup ? ' is-visible' : ''; ?>" id="contactSuccessPopup" aria-hidden="<?php echo $showSuccessPopup ? 'false' : 'true'; ?>">
    <div class="contact-popup__dialog" role="dialog" aria-modal="true" aria-labelledby="contactPopupTitle">
      <h3 id="contactPopupTitle">ส่งข้อมูลสำเร็จ</h3>
      <p>ระบบได้ส่งอีเมลไปยัง <?php echo htmlspecialchars($contactEmail, ENT_QUOTES, 'UTF-8'); ?> เรียบร้อยแล้ว</p>
      <button class="contact-popup__close" type="button" id="contactPopupClose">ตกลง</button>
    </div>
  </div>

  <?php include 'footer.php'; ?>

  <script>
    (function() {
      const popup = document.getElementById('contactSuccessPopup');
      const closeButton = document.getElementById('contactPopupClose');

      if (!popup || !closeButton) {
        return;
      }

      function closePopup() {
        popup.classList.remove('is-visible');
        popup.setAttribute('aria-hidden', 'true');
        if (window.location.search.indexOf('sent=1') !== -1) {
          window.history.replaceState({}, document.title, 'contact.php');
        }
      }

      closeButton.addEventListener('click', closePopup);

      popup.addEventListener('click', function(event) {
        if (event.target === popup) {
          closePopup();
        }
      });

      document.addEventListener('keydown', function(event) {
        if (event.key === 'Escape' && popup.classList.contains('is-visible')) {
          closePopup();
        }
      });
    })();
  </script>
</body>

</html>
