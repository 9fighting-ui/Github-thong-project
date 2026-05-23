<?php


require_once __DIR__ . '/includes/layout.php';

if (is_logged_in()) {
    redirect(role_dashboard_path(current_user()['role_key']));
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $password = $_POST['password'] ?? '';

    if ($username === '' || $password === '') {
        set_flash('error', 'กรุณากรอกชื่อผู้ใช้และรหัสผ่านให้ครบถ้วน');
    } elseif (!login_user($username, $password)) {
        set_flash('error', 'ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง');
    } else {
        set_flash('success', 'เข้าสู่ระบบสำเร็จ');
        redirect(role_dashboard_path(current_user()['role_key']));
    }
}

$flash = get_flash();
render_auth_page_start('เข้าสู่ระบบ');
?>
<div class="nav-row">
  <div>
    <strong><?= htmlspecialchars(APP_NAME) ?></strong>
    <div class="muted">Login Gateway และโครงสร้างระบบสารสนเทศของวิทยาลัย</div>
  </div>
  <a class="button alt" href="<?= htmlspecialchars(BASE_URL) ?>../index.php">กลับหน้าเว็บไซต์</a>
</div>

<?php if ($flash): ?>
  <div class="flash <?= htmlspecialchars($flash['type']) ?>"><?= htmlspecialchars($flash['message']) ?></div>
<?php endif; ?>

<section class="hero">
  <div class="card hero-banner">
    <span class="badge">College Information System</span>
    <h1>ระบบวิทยาลัยเทคนิคเทิง รองรับผู้ใช้งาน 4 กลุ่ม</h1>
    <p>วางฐานข้อมูลให้รองรับ admin, ครูและเจ้าหน้าที่, นักเรียนนักศึกษา, และบุคคลทั่วไป พร้อมต่อยอดระบบทะเบียนเรียน ระบบบุคลากร ระบบนักเรียนนักศึกษา และงานบริการออนไลน์ได้ในโครงเดียวกัน</p>
    <div class="stats">
      <div class="stat">Admin: จัดการผู้ใช้ สิทธิ์ หน่วยงาน หลักสูตร รายวิชา และข้อมูลภาพรวม</div>
      <div class="stat">บุคลากร: เข้าดูข้อมูลประจำตัว ภาระสอน รายวิชาที่รับผิดชอบ และข้อมูลนักศึกษา</div>
      <div class="stat">นักเรียนนักศึกษา: ดูข้อมูลส่วนตัว ตารางเรียน และสถานะลงทะเบียนเรียน</div>
      <div class="stat">บุคคลทั่วไป: สมัครขอรับบริการออนไลน์ ติดตามคำร้อง และเข้าถึงข้อมูลสาธารณะ</div>
    </div>
  </div>

  <div class="card">
    <h2>เข้าสู่ระบบ</h2>
    <p class="muted">บัญชีตัวอย่างเริ่มต้น: admin / Admin@1234</p>
    <form method="post">
      <label>
        ชื่อผู้ใช้
        <input type="text" name="username" placeholder="กรอกชื่อผู้ใช้" required>
      </label>
      <label>
        รหัสผ่าน
        <input type="password" name="password" placeholder="กรอกรหัสผ่าน" required>
      </label>
      <button type="submit">เข้าสู่ระบบ</button>
    </form>
  </div>
</section>
<?php render_auth_page_end(); ?>
