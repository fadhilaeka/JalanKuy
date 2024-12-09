<?php
// Cek apakah cookie sudah diset
$cookie_name = "user";
if (isset($_COOKIE[$cookie_name])) {
    $cookie_value = $_COOKIE[$cookie_name];
} else {
    $cookie_value = null;
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>JALAN KUY</title>
    <link rel="stylesheet" href="style.css">
    <script>
        // Fungsi untuk menampilkan pop-up konfirmasi untuk menerima cookie
        function showCookiePopup() {
            let consent = confirm("Apakah Anda ingin menerima cookie?");
            if (consent) {
                // Set cookie jika setuju
                document.cookie = "user=username; path=/; max-age=" + 86400 * 30; // Set cookie untuk 30 hari
                alert("Cookie telah diset.");
                window.location.reload(); // Muat ulang halaman setelah cookie diset
            } else {
                alert("Anda tidak menerima cookie.");
            }
        }

        // Mengecek apakah cookie sudah diset saat halaman dimuat
        window.onload = function() {
            if (!document.cookie.includes("user=")) {
                showCookiePopup();
            }
        };
    </script>
</head>
<body>
    <nav>
        <div class="logo"><img src="logo.png" alt="my-logo"></div>
        <div class="menu">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="booking.php">Booking</a></li>
                <li><a href="cek-pesanan.php">Cek Pesanan</a></li>
                <li><a href="login.php" class="btn_login">LOGIN</a></li>
            </ul>     
        </div>
    </nav>
    <section id="index">
        <div class="img">
            <img src="Kereta Api.jpg">
        </div>
        <div class="kolom">
            <h2>WELCOME DI JALAN KUY</h2><br>
            <h2>Solusi Transportasi Andal</h2>
            <h2>untuk Semua Kebutuhan Anda</h2>
            <p>Nikmati perjalanan tanpa hambatan dengan layanan transportasi terbaik dari kami.</p>
            <p><a href="login.php" class="btn_login">Silahkan Login Disini Untuk Memulai</a></p>
        </div>
    </section>
    <section id="layanan">
        <div class="tengah">
        <h2>BOOKING</h2>
            <div class="transportasi-list">
                <div class="transportasi">
                    <img src="Mobil.png"/><p>Mobil</p>
                </div>

                <div class="transportasi">
                    <img src="Travel.png"/><p>Travel</p>
                </div>
                <div class="transportasi">
                    <img src="Bus.png"/><p>Bus</p>
                </div>
                <div class="transportasi">
                    <img src="Kereta Api 2.png"/>
                    <p>Kereta Api</p>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <h1>MOBIL</h1>
        <div class="card">
            <div class="header">
                <h2>Kelas Ekonomi</h2>
                <p>Rp. 100.000 - Rp. 200.000</p>
            </div>
            <ul>
                <li>Kendaraan: Mobil standar dengan kapasitas maksimal 4 penumpang.</li>
                <li>Fasilitas: AC, dan musik.</li>
                <li>Barang Bawaan: Maksimal 10 kg.</li>
            </ul>
        </div>
        <div class="card">
            <div class="header">
                <h2>Kelas Bisnis</h2>
                <p>Rp. 200.000 - Rp. 300.000</p>
            </div>
            <ul>
                <li>Kendaraan: Mobil mewah dengan kapasitas maksimal 4 penumpang.</li>
                <li>Fasilitas: AC, musik, air mineral, dan WiFi.</li>
                <li>Barang Bawaan: Maksimal 15 kg.</li>
            </ul>
        </div>
        <div class="card">
            <div class="header">
                <h2>Kelas VIP</h2>
                <p>Rp. 400.000 - Rp. 500.000</p>
            </div>
            <ul>
                <li>Kendaraan: Mobil premium dengan kapasitas maksimal 4 penumpang.</li>
                <li>Fasilitas: AC, musik, air mineral, WiFi, snack, dan minuman non-alkohol.</li>
                <li>Barang Bawaan: Maksimal 20 kg.</li>
            </ul>
        </div>
    </div>
    <div class="container">
        <h1>TRAVEL</h1>
        <div class="card">
            <div class="header">
                <h2>Kelas Ekonomi</h2>
                <p>Rp. 100.000 - Rp. 150.000 / org</p>
            </div>
            <ul>
                <li>Kendaraan: Mobil travel standar dengan kapasitas maksimal 10 penumpang.</li>
                <li>Fasilitas: AC, dan air mineral.</li>
                <li>Barang Bawaan: Maksimal 15 kg.</li>
            </ul>
        </div>
        <div class="card">
            <div class="header">
                <h2>Kelas Bisnis</h2>
                <p>Rp. 200.000 - Rp. 300.000 / org</p>
            </div>
            <ul>
                <li>Kendaraan: Mobil travel mewah dengan kapasitas maksimal 10 penumpang.</li>
                <li>Fasilitas: AC, air mineral, WiFi, dan snack.</li>
                <li>Barang Bawaan: Maksimal 15 kg.</li>
            </ul>
        </div>
        <div class="card">
            <div class="header">
                <h2>Kelas VIP</h2>
                <p>Rp. 350.000 - Rp. 400.000 / org</p>
            </div>
            <ul>
                <li>Kendaraan: Mobil travel premium dengan kapasitas maksimal 7 penumpang.</li>
                <li>Fasilitas: AC, air mineral, WiFi, snack, minuman non-alkohol, dan makan berat 1x.</li>
                <li>Barang Bawaan: Maksimal 20 kg.</li>
            </ul>
        </div>
    </div>
    <div class="container">
        <h1>BUS</h1>
        <div class="card">
            <div class="header">
                <h2>Kelas Ekonomi</h2>
                <p>Rp. 75.000 - Rp. 100.000 / org</p>
            </div>
            <ul>
                <li>Kendaraan:  Bus standar dengan kapasitas maksimal 50 penumpang.</li>
                <li>Fasilitas: AC, dan air mineral.</li>
                <li>Barang Bawaan: Maksimal 20 kg.</li>
            </ul>
        </div>
        <div class="card">
            <div class="header">
                <h2>Kelas Bisnis</h2>
                <p>Rp. 125.000 - Rp. 150.000 / org</p>
            </div>
            <ul>
                <li>Kendaraan: Bus standar dengan kapasitas maksimal 40 penumpang.</li>
                <li>Fasilitas: AC, air mineral, WiFi, dan snack.</li>
                <li>Barang Bawaan: Maksimal 25 kg.</li>
            </ul>
        </div>
        <div class="card">
            <div class="header">
                <h2>Kelas VIP</h2>
                <p>Rp. 175.000 - Rp. 250.000 / org</p>
            </div>
            <ul>
                <li>Kendaraan: Bus standar dengan kapasitas maksimal 30 penumpang.</li>
                <li>Fasilitas: AC, air mineral, WiFi, snack, minuman non-alkohol, dan makan berat 1x, bantal, dan selimut.</li>
                <li>Barang Bawaan: Maksimal 30 kg.</li>
            </ul>
        </div>
    </div>
    <div class="container">
        <h1>KERETA API</h1>
        <div class="card">
            <div class="header">
                <h2>Kelas Ekonomi</h2>
                <p>Rp. 50.000 - Rp. 100.000 / org</p>
            </div>
            <ul>
                <li>Fasilitas: Tempat duduk standar, AC, air mineral, dan snack.</li>
                <li>Barang Bawaan: Maksimal 20 kg.</li>
            </ul>
        </div>
        <div class="card">
            <div class="header">
                <h2>Kelas Bisnis</h2>
                <p>Rp. 100.000 - Rp. 200.000 / org</p>
            </div>
            <ul>
                <li>Fasilitas:  Tempat duduk yang lebih luas, AC, air mineral, WiFi, snack, dan makan berat 1x.</li>
                <li>Barang Bawaan: Maksimal 25 kg.</li>
            </ul>
        </div>
        <div class="card">
            <div class="header">
                <h2>Kelas VIP</h2>
                <p>Rp. 200.000 - Rp. 500.000 / org</p>
            </div>
            <ul>
                <li>Fasilitas: AC, air mineral, WiFi, snack, minuman non-alkohol, makan berat 1x, bantal, dan selimut.</li>
                <li>Barang Bawaan: Maksimal 20 kg.</li>
            </ul>
        </div>
    </div>
</body>
</html>