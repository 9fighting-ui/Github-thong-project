CREATE DATABASE IF NOT EXISTS `ttc_college_system`
  CHARACTER SET utf8mb4
  COLLATE utf8mb4_unicode_ci;

USE `ttc_college_system`;

SET NAMES utf8mb4;

CREATE TABLE IF NOT EXISTS roles (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    role_key VARCHAR(50) NOT NULL UNIQUE,
    role_name_th VARCHAR(100) NOT NULL,
    role_name_en VARCHAR(100) DEFAULT NULL,
    description TEXT DEFAULT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS permissions (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    permission_key VARCHAR(100) NOT NULL UNIQUE,
    permission_name_th VARCHAR(150) NOT NULL,
    description TEXT DEFAULT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS role_permissions (
    role_id INT UNSIGNED NOT NULL,
    permission_id INT UNSIGNED NOT NULL,
    PRIMARY KEY (role_id, permission_id),
    CONSTRAINT fk_role_permissions_role FOREIGN KEY (role_id) REFERENCES roles(id) ON DELETE CASCADE,
    CONSTRAINT fk_role_permissions_permission FOREIGN KEY (permission_id) REFERENCES permissions(id) ON DELETE CASCADE
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS users (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100) NOT NULL UNIQUE,
    password_hash VARCHAR(255) NOT NULL,
    primary_role_id INT UNSIGNED NOT NULL,
    email VARCHAR(150) DEFAULT NULL UNIQUE,
    phone VARCHAR(20) DEFAULT NULL,
    first_name_th VARCHAR(100) NOT NULL,
    last_name_th VARCHAR(100) NOT NULL,
    first_name_en VARCHAR(100) DEFAULT NULL,
    last_name_en VARCHAR(100) DEFAULT NULL,
    national_id VARCHAR(20) DEFAULT NULL UNIQUE,
    avatar_path VARCHAR(255) DEFAULT NULL,
    last_login_at DATETIME DEFAULT NULL,
    status ENUM('active', 'inactive', 'suspended') NOT NULL DEFAULT 'active',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    CONSTRAINT fk_users_primary_role FOREIGN KEY (primary_role_id) REFERENCES roles(id)
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS user_roles (
    user_id BIGINT UNSIGNED NOT NULL,
    role_id INT UNSIGNED NOT NULL,
    PRIMARY KEY (user_id, role_id),
    CONSTRAINT fk_user_roles_user FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE,
    CONSTRAINT fk_user_roles_role FOREIGN KEY (role_id) REFERENCES roles(id) ON DELETE CASCADE
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS departments (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    department_code VARCHAR(20) NOT NULL UNIQUE,
    department_name_th VARCHAR(150) NOT NULL,
    department_name_en VARCHAR(150) DEFAULT NULL,
    department_type ENUM('academic', 'support', 'administration') NOT NULL DEFAULT 'academic',
    phone VARCHAR(20) DEFAULT NULL,
    email VARCHAR(150) DEFAULT NULL,
    status ENUM('active', 'inactive') NOT NULL DEFAULT 'active',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS programs (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    department_id INT UNSIGNED NOT NULL,
    program_code VARCHAR(30) NOT NULL UNIQUE,
    program_name_th VARCHAR(200) NOT NULL,
    program_name_en VARCHAR(200) DEFAULT NULL,
    education_level ENUM('ปวช', 'ปวส', 'ระยะสั้น', 'ปริญญาตรี') NOT NULL,
    duration_years DECIMAL(3,1) DEFAULT 0,
    status ENUM('active', 'inactive') NOT NULL DEFAULT 'active',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    CONSTRAINT fk_programs_department FOREIGN KEY (department_id) REFERENCES departments(id)
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS personnel_profiles (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    user_id BIGINT UNSIGNED NOT NULL UNIQUE,
    personnel_code VARCHAR(30) NOT NULL UNIQUE,
    personnel_type ENUM('teacher', 'staff') NOT NULL,
    department_id INT UNSIGNED DEFAULT NULL,
    position_name_th VARCHAR(150) NOT NULL,
    academic_rank VARCHAR(100) DEFAULT NULL,
    employment_type VARCHAR(100) DEFAULT NULL,
    hire_date DATE DEFAULT NULL,
    advisor_program_id INT UNSIGNED DEFAULT NULL,
    status ENUM('active', 'retired', 'resigned', 'leave') NOT NULL DEFAULT 'active',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    CONSTRAINT fk_personnel_user FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE,
    CONSTRAINT fk_personnel_department FOREIGN KEY (department_id) REFERENCES departments(id),
    CONSTRAINT fk_personnel_program FOREIGN KEY (advisor_program_id) REFERENCES programs(id)
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS student_profiles (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    user_id BIGINT UNSIGNED NOT NULL UNIQUE,
    student_code VARCHAR(30) NOT NULL UNIQUE,
    citizen_code VARCHAR(20) DEFAULT NULL UNIQUE,
    program_id INT UNSIGNED NOT NULL,
    department_id INT UNSIGNED NOT NULL,
    enrollment_year YEAR NOT NULL,
    current_level VARCHAR(20) NOT NULL,
    group_name VARCHAR(50) DEFAULT NULL,
    advisor_personnel_id BIGINT UNSIGNED DEFAULT NULL,
    guardian_name VARCHAR(200) DEFAULT NULL,
    guardian_phone VARCHAR(20) DEFAULT NULL,
    birth_date DATE DEFAULT NULL,
    address TEXT DEFAULT NULL,
    status ENUM('studying', 'graduated', 'suspended', 'withdrawn') NOT NULL DEFAULT 'studying',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    CONSTRAINT fk_student_user FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE,
    CONSTRAINT fk_student_program FOREIGN KEY (program_id) REFERENCES programs(id),
    CONSTRAINT fk_student_department FOREIGN KEY (department_id) REFERENCES departments(id),
    CONSTRAINT fk_student_advisor FOREIGN KEY (advisor_personnel_id) REFERENCES personnel_profiles(id)
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS public_profiles (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    user_id BIGINT UNSIGNED NOT NULL UNIQUE,
    organization_name VARCHAR(200) DEFAULT NULL,
    contact_person VARCHAR(150) DEFAULT NULL,
    address TEXT DEFAULT NULL,
    user_group VARCHAR(100) DEFAULT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    CONSTRAINT fk_public_user FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS academic_terms (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    academic_year YEAR NOT NULL,
    term_no TINYINT UNSIGNED NOT NULL,
    start_date DATE DEFAULT NULL,
    end_date DATE DEFAULT NULL,
    registration_open DATE DEFAULT NULL,
    registration_close DATE DEFAULT NULL,
    is_active TINYINT(1) NOT NULL DEFAULT 1,
    UNIQUE KEY uq_term (academic_year, term_no)
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS courses (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    program_id INT UNSIGNED NOT NULL,
    course_code VARCHAR(30) NOT NULL UNIQUE,
    course_name_th VARCHAR(200) NOT NULL,
    course_name_en VARCHAR(200) DEFAULT NULL,
    credit DECIMAL(3,1) NOT NULL DEFAULT 0,
    theory_hours TINYINT UNSIGNED NOT NULL DEFAULT 0,
    practice_hours TINYINT UNSIGNED NOT NULL DEFAULT 0,
    course_type ENUM('general', 'vocational', 'activity', 'internship') NOT NULL DEFAULT 'vocational',
    status ENUM('active', 'inactive') NOT NULL DEFAULT 'active',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    CONSTRAINT fk_courses_program FOREIGN KEY (program_id) REFERENCES programs(id)
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS course_sections (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    course_id INT UNSIGNED NOT NULL,
    academic_term_id INT UNSIGNED NOT NULL,
    section_code VARCHAR(50) NOT NULL,
    teacher_personnel_id BIGINT UNSIGNED DEFAULT NULL,
    room_name VARCHAR(100) DEFAULT NULL,
    schedule_text VARCHAR(255) DEFAULT NULL,
    max_students INT UNSIGNED NOT NULL DEFAULT 40,
    status ENUM('open', 'closed', 'cancelled') NOT NULL DEFAULT 'open',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    UNIQUE KEY uq_course_section (course_id, academic_term_id, section_code),
    CONSTRAINT fk_course_sections_course FOREIGN KEY (course_id) REFERENCES courses(id),
    CONSTRAINT fk_course_sections_term FOREIGN KEY (academic_term_id) REFERENCES academic_terms(id),
    CONSTRAINT fk_course_sections_teacher FOREIGN KEY (teacher_personnel_id) REFERENCES personnel_profiles(id)
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS enrollments (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    student_id BIGINT UNSIGNED NOT NULL,
    course_section_id BIGINT UNSIGNED NOT NULL,
    enrolled_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    enrollment_status ENUM('registered', 'approved', 'dropped', 'completed') NOT NULL DEFAULT 'registered',
    grade VARCHAR(5) DEFAULT NULL,
    score DECIMAL(5,2) DEFAULT NULL,
    remark VARCHAR(255) DEFAULT NULL,
    UNIQUE KEY uq_student_section (student_id, course_section_id),
    CONSTRAINT fk_enrollments_student FOREIGN KEY (student_id) REFERENCES student_profiles(id) ON DELETE CASCADE,
    CONSTRAINT fk_enrollments_section FOREIGN KEY (course_section_id) REFERENCES course_sections(id) ON DELETE CASCADE
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS service_requests (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    requester_user_id BIGINT UNSIGNED NOT NULL,
    request_type VARCHAR(100) NOT NULL,
    subject VARCHAR(200) NOT NULL,
    detail TEXT NOT NULL,
    contact_channel VARCHAR(100) DEFAULT NULL,
    status ENUM('pending', 'in_progress', 'completed', 'rejected') NOT NULL DEFAULT 'pending',
    assigned_user_id BIGINT UNSIGNED DEFAULT NULL,
    requested_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    closed_at DATETIME DEFAULT NULL,
    CONSTRAINT fk_service_requests_requester FOREIGN KEY (requester_user_id) REFERENCES users(id) ON DELETE CASCADE,
    CONSTRAINT fk_service_requests_assignee FOREIGN KEY (assigned_user_id) REFERENCES users(id) ON DELETE SET NULL
) ENGINE=InnoDB;

INSERT INTO roles (role_key, role_name_th, role_name_en, description) VALUES
('admin', 'ผู้ดูแลระบบ', 'Administrator', 'ผู้ดูแลระบบหลักของวิทยาลัย'),
('teacher', 'ครู', 'Teacher', 'บุคลากรสายการสอน'),
('staff', 'เจ้าหน้าที่', 'Staff', 'บุคลากรสายสนับสนุน'),
('student', 'นักเรียนนักศึกษา', 'Student', 'ผู้เรียนในระบบวิทยาลัย'),
('guest', 'บุคคลทั่วไป', 'Public User', 'ผู้ใช้งานภายนอกหรือผู้รับบริการ')
ON DUPLICATE KEY UPDATE role_name_th = VALUES(role_name_th);

INSERT INTO permissions (permission_key, permission_name_th, description) VALUES
('manage_users', 'จัดการผู้ใช้', 'เพิ่ม แก้ไข ระงับบัญชีผู้ใช้งาน'),
('manage_roles', 'จัดการบทบาทและสิทธิ์', 'บริหาร role และ permission'),
('manage_courses', 'จัดการหลักสูตรและรายวิชา', 'บริหารข้อมูลหลักสูตร รายวิชา และภาคเรียน'),
('manage_enrollments', 'จัดการลงทะเบียนเรียน', 'ตรวจสอบและอนุมัติการลงทะเบียนเรียน'),
('manage_personnel', 'จัดการข้อมูลบุคลากร', 'ดูแลประวัติครูและเจ้าหน้าที่'),
('manage_students', 'จัดการข้อมูลนักเรียนนักศึกษา', 'ดูแลประวัติและสถานะนักศึกษา'),
('view_public_services', 'ดูคำร้องบริการ', 'ตรวจสอบคำร้องจากบุคคลทั่วไป'),
('submit_public_services', 'ส่งคำร้องบริการ', 'ยื่นคำร้องออนไลน์'),
('view_own_profile', 'ดูข้อมูลตนเอง', 'เข้าถึงข้อมูลส่วนตัว'),
('view_own_enrollments', 'ดูการลงทะเบียนของตน', 'ตรวจสอบรายวิชาและผลการเรียน')
ON DUPLICATE KEY UPDATE permission_name_th = VALUES(permission_name_th);

INSERT INTO role_permissions (role_id, permission_id)
SELECT r.id, p.id
FROM roles r
JOIN permissions p
WHERE
    (r.role_key = 'admin')
    OR (r.role_key = 'teacher' AND p.permission_key IN ('view_own_profile', 'manage_students', 'manage_enrollments'))
    OR (r.role_key = 'staff' AND p.permission_key IN ('view_own_profile', 'manage_personnel', 'view_public_services'))
    OR (r.role_key = 'student' AND p.permission_key IN ('view_own_profile', 'view_own_enrollments'))
    OR (r.role_key = 'guest' AND p.permission_key IN ('submit_public_services'))
ON DUPLICATE KEY UPDATE role_id = role_id;

INSERT INTO departments (department_code, department_name_th, department_name_en, department_type) VALUES
('ADM', 'ฝ่ายบริหารทั่วไป', 'Administration', 'administration'),
('ELE', 'แผนกวิชาช่างไฟฟ้า', 'Electrical Department', 'academic'),
('IT', 'แผนกวิชาคอมพิวเตอร์ธุรกิจและเทคโนโลยีสารสนเทศ', 'Information Technology Department', 'academic')
ON DUPLICATE KEY UPDATE department_name_th = VALUES(department_name_th);

INSERT INTO programs (department_id, program_code, program_name_th, education_level, duration_years, status)
SELECT d.id, 'IT-PVC', 'ประกาศนียบัตรวิชาชีพ สาขาคอมพิวเตอร์ธุรกิจ', 'ปวช', 3.0, 'active'
FROM departments d
WHERE d.department_code = 'IT'
ON DUPLICATE KEY UPDATE program_name_th = VALUES(program_name_th);

INSERT INTO academic_terms (academic_year, term_no, start_date, end_date, registration_open, registration_close, is_active)
VALUES (2026, 1, '2026-05-01', '2026-09-30', '2026-04-15', '2026-05-15', 1)
ON DUPLICATE KEY UPDATE is_active = VALUES(is_active);

INSERT INTO users (
    username, password_hash, primary_role_id, email, first_name_th, last_name_th, status
)
SELECT
    'admin',
    '$2y$10$BoMsX.0hKzCrbVWpKqFsU.Uln16JBDpPMq21LysIqwSIK7i03njTO',
    r.id,
    'admin@ttc.local',
    'ผู้ดูแล',
    'ระบบ',
    'active'
FROM roles r
WHERE r.role_key = 'admin'
ON DUPLICATE KEY UPDATE email = VALUES(email);

INSERT INTO user_roles (user_id, role_id)
SELECT u.id, r.id
FROM users u
JOIN roles r ON r.role_key = 'admin'
WHERE u.username = 'admin'
ON DUPLICATE KEY UPDATE user_id = user_id;
