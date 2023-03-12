<?php
session_start();

// Hủy biến phiên cần xóa
unset($_SESSION['user']);
header('location: ../Front-end/index.php')
?>