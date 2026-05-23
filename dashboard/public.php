<?php


require_once __DIR__ . '/../includes/layout.php';

require_login(['guest']);
$user = current_user();
render_auth_page_start('Public Dashboard');
?>
<div class="nav-row">
  <div>
    <strong>ระบบบุคคลทั่วไป</strong>
    <div class="muted">ผู้ใช้งาน <?= htmlspecialchars($user['full_name'] ?: $user['username']) ?></div>
  </div>
  <div style="display:flex; gap:12px;">
    <a class="button alt" href="<?= htmlspecialchars(BASE_URL) ?>/dashboard/index.php">หน้ารวม</a>
    <a class="button warn" href="<?= htmlspecialchars(BASE_URL) ?>/logout.php">ออกจากระบบ</a>
  </div>
</div>

<div class="card">
  <h1>พื้นที่บริการออนไลน์สำหรับบุคคลทั่วไป</h1>
  <div class="panel-list">
    <div class="panel"><h3>สมัครใช้บริการ</h3><p class="muted">ลงทะเบียนบัญชีเพื่อยื่นคำร้องหรือขอข้อมูลจากวิทยาลัย</p></div>
    <div class="panel"><h3>ติดตามคำร้อง</h3><p class="muted">ใช้ตาราง service_requests ติดตามสถานะดำเนินงาน</p></div>
    <div class="panel"><h3>ข้อมูลสาธารณะ</h3><p class="muted">เชื่อมข่าวประชาสัมพันธ์ เอกสารดาวน์โหลด และแบบฟอร์มออนไลน์</p></div>
    <div class="panel"><h3>รับสมัครนักศึกษา</h3><p class="muted">ต่อยอดเชื่อมข้อมูลผู้สมัครเข้าเรียนในอนาคตได้</p></div>
  </div>
</div>
<?php render_auth_page_end(); ?>
