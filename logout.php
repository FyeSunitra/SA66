<?php
// เริ่ม session
session_start();

// ทำลายทุก session
session_destroy();

// นำผู้ใช้กลับไปยังหน้าล็อกอิน
header("Location: login.php");
exit();
?>
