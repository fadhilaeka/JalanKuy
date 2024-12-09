<?php
session_start();
session_destroy(); // Menghapus semua session
echo "<script>alert('Anda telah logout!'); window.location.href = 'login.php';</script>";
?>