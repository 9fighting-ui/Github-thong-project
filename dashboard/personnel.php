<?php


require_once __DIR__ . '/../includes/layout.php';

require_login(['teacher', 'staff']);
$user = current_user();
render_auth_page_start('Personnel Dashboard');
?>
<div class="nav-row">
  <div>
    <strong>ระบบบุคลากร</strong>
    <div class="muted">บทบาท <?= htmlspecialchars($user['role_name_th']) ?></div>
  </div>
  <div style="display:flex; gap:12px;">
    <a class="button alt" href="<?= htmlspecialchars(BASE_URL) ?>/dashboard/index.php">หน้ารวม</a>
    <a class="button warn" href="<?= htmlspecialchars(BASE_URL) ?>/logout.php">ออกจากระบบ</a>
  </div>
</div>

<div class="card">
  <h1>พื้นที่สำหรับครูและเจ้าหน้าที่</h1>
  <div class="panel-list">
    <div class="panel"><h3>ข้อมูลบุคลากร</h3><p class="muted">เชื่อมกับตาราง personnel_profiles และ departments</p></div>
    <div class="panel"><h3>ภาระสอนและงานรับผิดชอบ</h3><p class="muted">รองรับการเชื่อมรายวิชา กลุ่มเรียน และหน้าที่งานภายในวิทยาลัย</p></div>
    <div class="panel"><h3>จัดการข้อมูลนักศึกษา</h3><p class="muted">ครูที่ปรึกษาและครูผู้สอนสามารถดูข้อมูลนักศึกษาในความรับผิดชอบ</p></div>
    <div class="panel"><h3>เอกสารและคำร้อง</h3><p class="muted">ต่อยอดเป็นระบบเอกสารภายในและอนุมัติคำร้องได้</p></div>
  </div>
</div>
<?php render_auth_page_end(); ?>
