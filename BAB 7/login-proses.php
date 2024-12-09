<?php
session_start();
include 'koneksi.php'; // Koneksi ke database

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Ambil data pengguna dari database
    $stmt = $conn->prepare("SELECT id, password FROM tb_admin WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        // Verifikasi password
        if (password_verify($password, $user['password'])) {
            $_SESSION["user_email"] = $email; // Simpan email di session
            $_SESSION["user_status"] = "logged_in"; // Tandai status login
            echo "<script>alert('Login berhasil!'); window.location.href = 'admin.php';</script>";
        } else {
            echo "<script>alert('Password salah!'); window.location.href = 'login.php';</script>";
        }
    } else {
        echo "<script>alert('Email tidak terdaftar!'); window.location.href = 'login.php';</script>";
    }

    $stmt->close();
    $conn->close();
}
?>