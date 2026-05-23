<?php


require_once __DIR__ . '/../includes/layout.php';

require_login(['student']);
$user = current_user();
render_auth_page_start('Student Dashboard');
?>
<div class="nav-row">
  <div>
    <strong>ระบบนักเรียนนักศึกษา</strong>
    <div class="muted">ยินดีต้อนรับ <?= htmlspecialchars($user['full_name'] ?: $user['username']) ?></div>
  </div>
  <div style="display:flex; gap:12px;">
    <a class="button alt" href="<?= htmlspecialchars(BASE_URL) ?>/dashboard/index.php">หน้ารวม</a>
    <a class="button warn" href="<?= htmlspecialchars(BASE_URL) ?>/logout.php">ออกจากระบบ</a>
  </div>
</div>

<div class="card">
  <h1>พื้นที่สำหรับนักเรียนนักศึกษา</h1>
  <div class="panel-list">
    <div class="panel"><h3>ข้อมูลประจำตัว</h3><p class="muted">ดึงจาก student_profiles พร้อมข้อมูลหลักสูตรและแผนก</p></div>
    <div class="panel"><h3>ลงทะเบียนเรียน</h3><p class="muted">เชื่อมกับ course_sections และ enrollments</p></div>
    <div class="panel"><h3>ตารางเรียน</h3><p class="muted">ต่อยอดเป็นการแสดงกลุ่มเรียนและรายวิชาตามภาคเรียน</p></div>
    <div class="panel"><h3>คำร้องออนไลน์</h3><p class="muted">ใช้ขอเอกสาร รับรองสถานะ หรือยื่นคำร้องต่าง ๆ</p></div>
  </div>
</div>
<?php render_auth_page_end(); ?>
