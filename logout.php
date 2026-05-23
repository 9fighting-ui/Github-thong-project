<?php


require_once __DIR__ . '/includes/auth.php';

logout_user();
set_flash('success', 'ออกจากระบบเรียบร้อยแล้ว');
redirect('login.php');
