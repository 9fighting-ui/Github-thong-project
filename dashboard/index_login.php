<?php


require_once __DIR__ . '/../includes/layout.php';

require_login();
$user = current_user();
$flash = get_flash();

render_auth_page_start('แผงควบคุม');
?>
<div class="nav-row">
  <div>
    <strong>แผงควบคุมผู้ใช้งาน</strong>
    <div class="muted">ผู้ใช้: <?= htmlspecialchars($user['full_name'] ?: $user['username']) ?> | บทบาท: <?= htmlspecialchars($user['role_name_th']) ?></div>
  </div>
  <div style="display:flex; gap:12px;">
    <a class="button alt" href="<?= htmlspecialchars(BASE_URL) ?>/<?= htmlspecialchars(role_dashboard_path($user['role_key'])) ?>">ไปยังหน้าบทบาทของฉัน</a>
    <a class="button warn" href="<?= htmlspecialchars(BASE_URL) ?>/logout.php">ออกจากระบบ</a>
  </div>
</div>

<?php if ($flash): ?>
  <div class="flash <?= htmlspecialchars($flash['type']) ?>"><?= htmlspecialchars($flash['message']) ?></div>
<?php endif; ?>

<div class="card">
  <h1>ระบบพร้อมสำหรับการต่อยอดเป็นโมดูลจริง</h1>
  <p>หน้าแดชบอร์ดนี้เป็นจุดรวมก่อนกระจายไปยังโมดูลเฉพาะของแต่ละกลุ่มผู้ใช้ โดยโครงฐานข้อมูลที่เพิ่มให้จะรองรับการพัฒนาต่อในส่วนทะเบียนเรียน บุคลากร นักเรียนนักศึกษา และบริการบุคคลทั่วไป</p>
  <div class="panel-list">
    <div class="panel"><h3>ระบบล็อกอินและสิทธิ์</h3><p class="muted">แยกตาราง users, roles, permissions, role_permissions เพื่อขยายสิทธิ์ได้ละเอียด</p></div>
    <div class="panel"><h3>ระบบทะเบียนเรียน</h3><p class="muted">รองรับหลักสูตร รายวิชา กลุ่มเรียน ภาคเรียน การลงทะเบียนเรียน และผลการลงทะเบียน</p></div>
    <div class="panel"><h3>ระบบบุคลากร</h3><p class="muted">เก็บข้อมูลครูและเจ้าหน้าที่ แผนก ตำแหน่ง และสถานะการทำงาน</p></div>
    <div class="panel"><h3>ระบบบริการประชาชน</h3><p class="muted">รองรับการสร้างคำร้องออนไลน์และติดตามสถานะโดยเชื่อมกับบัญชีบุคคลทั่วไป</p></div>
  </div>
</div>
<?php render_auth_page_end(); ?>
