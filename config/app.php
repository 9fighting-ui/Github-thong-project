<?php


if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

date_default_timezone_set('Asia/Bangkok');

define('APP_NAME', 'ระบบวิทยาลัยเทคนิคเทิง');
define('BASE_URL', '/WWWTTC2569');
