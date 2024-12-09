<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <script>
        function loginUser(event) {
            event.preventDefault(); // Mencegah form submit secara default

            const email = document.getElementById("email").value;
            const password = document.getElementById("password").value;

            // Cek data di Local Storage
            const storedPassword = localStorage.getItem(email);

            if (storedPassword === null) {
                alert("Email tidak terdaftar!");
            } else if (storedPassword === password) {
                // Simpan informasi user dalam session
                <?php
                $_SESSION["user_email"] = "email"; // Menyimpan email pengguna di session
                $_SESSION["user_status"] = "logged_in"; // Menyimpan status login
                ?>

                alert("Login berhasil!");
                window.location.href = "admin.php"; // Arahkan pengguna ke halaman admin
            } else {
                alert("Password salah!");
            }
        }
    </script>
</head>
<body>
    <nav>
        <div class="logo">
            <img src="logo.png" alt="my-logo">
        </div>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="booking.php">Booking</a></li>
            <li><a href="cek-pesanan.php">Cek Pesanan</a></li>
            <li><a href="login.php" class="btn_login">LOGIN</a></li>
        </ul>     
    </nav>
    <div class="form-login">
        <form onsubmit="loginUser(event)">
            <h3>Login</h3>
            <br>
            <input type="email" id="email" placeholder="Masukkan Email" required />
            <input type="password" id="password" placeholder="Masukkan Password" required />
            <button type="submit">Login</button>
            <a href="register.php" class="link-register">Belum Punya Akun? Daftar Disini</a>
        </form>
    </div>
</body>
</html>