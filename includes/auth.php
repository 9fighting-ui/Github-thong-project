<?php


require_once __DIR__ . '/../config/database.php';

function set_flash(string $type, string $message): void
{
    $_SESSION['flash'] = [
        'type' => $type,
        'message' => $message,
    ];
}

function get_flash(): ?array
{
    if (!isset($_SESSION['flash'])) {
        return null;
    }

    $flash = $_SESSION['flash'];
    unset($_SESSION['flash']);

    return $flash;
}

function current_user(): ?array
{
    return $_SESSION['user'] ?? null;
}

function is_logged_in(): bool
{
    return current_user() !== null;
}

function login_user(string $username, string $password): bool
{
    $sql = "
        SELECT
            u.id,
            u.username,
            u.password_hash,
            u.first_name_th,
            u.last_name_th,
            u.email,
            r.role_key,
            r.role_name_th
        FROM users u
        INNER JOIN roles r ON r.id = u.primary_role_id
        WHERE u.username = ?
          AND u.status = 'active'
        LIMIT 1
    ";

    $stmt = db()->prepare($sql);
    $stmt->bind_param('s', $username);
    $stmt->execute();
    $user = $stmt->get_result()->fetch_assoc();
    $stmt->close();

    if (!$user || !password_verify($password, $user['password_hash'])) {
        return false;
    }

    $_SESSION['user'] = [
        'id' => (int) $user['id'],
        'username' => $user['username'],
        'full_name' => trim(($user['first_name_th'] ?? '') . ' ' . ($user['last_name_th'] ?? '')),
        'email' => $user['email'],
        'role_key' => $user['role_key'],
        'role_name_th' => $user['role_name_th'],
    ];

    return true;
}

function logout_user(): void
{
    unset($_SESSION['user']);
}

function redirect(string $path): never
{
    header('Location: ' . BASE_URL . '/' . ltrim($path, '/'));
    exit;
}

function require_login(?array $allowedRoles = null): void
{
    $user = current_user();

    if ($user === null) {
        set_flash('error', 'กรุณาเข้าสู่ระบบก่อนใช้งาน');
        redirect('login.php');
    }

    if ($allowedRoles !== null && !in_array($user['role_key'], $allowedRoles, true)) {
        set_flash('error', 'คุณไม่มีสิทธิ์เข้าถึงหน้านี้');
        redirect('dashboard/index.php');
    }
}

function role_dashboard_path(string $roleKey): string
{
    return match ($roleKey) {
        'admin' => 'dashboard/admin.php',
        'teacher', 'staff' => 'dashboard/personnel.php',
        'student' => 'dashboard/student.php',
        'guest' => 'dashboard/public.php',
        default => 'dashboard/index.php',
    };
}
