# ระบบฐานข้อมูลวิทยาลัยเทคนิคเทิง

ไฟล์นี้สรุปโครงสร้างฐานข้อมูลและวิธีเริ่มใช้งานระบบล็อกอินที่เพิ่มเข้ามาในโปรเจกต์

## โครงสร้างหลัก

- `users` เก็บบัญชีผู้ใช้งานทั้งหมดของระบบ
- `roles`, `permissions`, `role_permissions`, `user_roles` ใช้กำหนดสิทธิ์ตามบทบาท
- `personnel_profiles` เก็บข้อมูลครูและเจ้าหน้าที่
- `student_profiles` เก็บข้อมูลนักเรียนนักศึกษา
- `public_profiles` เก็บข้อมูลบุคคลทั่วไป
- `departments`, `programs` ใช้เก็บข้อมูลแผนกและหลักสูตร
- `academic_terms`, `courses`, `course_sections`, `enrollments` รองรับระบบลงทะเบียนเรียน
- `service_requests` รองรับงานบริการออนไลน์และคำร้องจากบุคคลทั่วไป

## ขั้นตอนติดตั้งบน XAMPP

1. เปิด `phpMyAdmin`
2. Import ไฟล์ `database/ttc_college_system.sql`
3. ตรวจสอบค่าเชื่อมต่อใน `config/database.php`
4. เปิดหน้า `login.php`

## บัญชีตัวอย่างเริ่มต้น

- Username: `admin`
- Password: `Admin@1234`

## แนวทางต่อยอด

1. เพิ่มหน้า CRUD สำหรับ `users`, `personnel_profiles`, `student_profiles`
2. เพิ่มหน้าเปิดรายวิชาและลงทะเบียนเรียนจริง
3. เชื่อมเมนูหน้าเว็บหลักไปยังระบบล็อกอินและบริการออนไลน์
4. เพิ่มระบบ audit log และรีเซ็ตรหัสผ่าน
