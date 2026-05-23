<?php


require_once __DIR__ . '/../includes/layout.php';

require_login(['admin']);
$user = current_user();
render_auth_page_start('Admin Dashboard');
?>
<div class="nav-row">
  <div>
    <strong>Admin Dashboard</strong>
    <div class="muted">ผู้ใช้งาน <?= htmlspecialchars($user['full_name'] ?: $user['username']) ?></div>
  </div>
  <div style="display:flex; gap:12px;">
    <a class="button alt" href="<?= htmlspecialchars(BASE_URL) ?>/dashboard/index.php">หน้ารวม</a>
    <a class="button warn" href="<?= htmlspecialchars(BASE_URL) ?>/logout.php">ออกจากระบบ</a>
  </div>
</div>

<div class="card">
  <h1>ขอบเขตงานสำหรับผู้ดูแลระบบ</h1>
  <div class="panel-list">
    <div class="panel"><h3>จัดการผู้ใช้</h3><p class="muted">เพิ่ม แก้ไข ระงับบัญชี และรีเซ็ตรหัสผ่าน</p></div>
    <div class="panel"><h3>จัดการบทบาทและสิทธิ์</h3><p class="muted">กำหนดสิทธิ์เข้าถึงเมนู รายงาน และฟังก์ชันแต่ละโมดูล</p></div>
    <div class="panel"><h3>จัดการหลักสูตรและภาคเรียน</h3><p class="muted">ตั้งค่าปีการศึกษา ภาคเรียน กลุ่มเรียน และตารางเปิดสอน</p></div>
    <div class="panel"><h3>รายงานภาพรวม</h3><p class="muted">สรุปจำนวนนักศึกษา บุคลากร การลงทะเบียน และคำร้องบริการ</p></div>
  </div>
</div>
<?php render_auth_page_end(); ?>
