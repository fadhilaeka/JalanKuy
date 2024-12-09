<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
    <script>
        function registerUser(event) {
            event.preventDefault(); // Mencegah form submit secara default

            const email = document.getElementById("email").value;
            const password = document.getElementById("password").value;
            const confirmPassword = document.getElementById("confirmPassword").value;

            if (password !== confirmPassword) {
                alert("Password tidak cocok!");
                return;
            }

            // Simpan data ke Local Storage
            localStorage.setItem(email, password);
            alert("Registrasi berhasil! Silakan login.");
            window.location.href = "login.php";
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

    <div class="form-register">
        <form onsubmit="registerUser(event)">
            <h3>Register</h3>
            <br>
            <input type="email" id="email" placeholder="Masukkan Email" required />
            <input type="password" id="password" placeholder="Masukkan Password" required />
            <input type="password" id="confirmPassword" placeholder="Masukkan Ulang Password" required />
            <button type="submit">Daftar</button>
            <a href="login.php" class="link-login">Sudah Punya Akun? Login Disini</a>
        </form>
    </div>
</body>
</html>