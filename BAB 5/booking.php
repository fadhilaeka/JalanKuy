<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="widht=device-width, initial-scale=1.0">
	<title>Layanan</title>
	<link rel="stylesheet" href="style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
</head>
<body>
    <nav>
        <div class="logo"><img src="logo.png" alt="my-logo"></div>
        <div class="menu">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="booking.php">Booking</a></li>
                <li><a href="cek-pesanan.php">Cek Pesanan</a></li>
                <li><a href="login.php"class="btn_login">LOGIN</a></li>
            </ul>     
        </div>
    </nav>
        <main>
            <div class="home-content">
                <h1>BOOKING</h1>
                <div class="form-booking">
                    <form id="dataForm">
                        <label for="nama">Nama</label>
                        <input class="input" type="text" name="nama" id="nama" placeholder="Nama" required />

                        <label for="">Tanggal</label>
                        <input class="tanggal" type="date" name="tanggal" id="tanggal" placeholder="Tanggal" required>                   
    
                        <div class="selection-container">
                            <div class="dropdown">
                                <h4>Transportasi</h4>
                                <select name="transportation" id="transportation">
                                    <option value="">Select Transportasi</option>
                                    <option value="Mobil">Mobil</option>
                                    <option value="Travel">Travel</option>
                                    <option value="Bus">Bus</option>
                                    <option value="Kereta Api">Kereta Api</option>
                                </select>
                            </div>
        
                            <div class="dropdown">
                                <h4>Asal</h4>
                                <select name="asal" id="asal">
                                    <option value="">Pilih Asal</option>
                                    <option value="Bangkalan">Bangkalan</option>
                                    <option value="Banyuwangi">Banyuwangi</option>
                                    <option value="Batu">Batu</option>
                                    <option value="Blitar">Blitar</option>
                                    <option value="Bojonegoro">Bojonegoro</option>
                                    <option value="Bondowoso">Bondowoso</option>
                                    <option value="Gresik">Gresik</option>
                                    <option value="Jember">Jember</option>
                                    <option value="Jombang">Jombang</option>
                                    <option value="Kediri">Kediri</option>
                                    <option value="Lamongan">Lamongan</option>
                                    <option value="Lumajang">Lumajang</option>
                                    <option value="Madiun">Madiun</option>
                                    <option value="Magetan">Magetan</option>
                                    <option value="Malang">Malang</option>
                                    <option value="Mojokerto">Mojokerto</option>
                                    <option value="Nganjuk">Nganjuk</option>
                                    <option value="Ngawi">Ngawi</option>
                                    <option value="Pacitan">Pacitan</option>
                                    <option value="Pamekasan">Pamekasan</option>
                                    <option value="Pasuruan">Pasuruan</option>
                                    <option value="Ponorogo">Ponorogo</option>
                                    <option value="Probolinggo">Probolinggo</option>
                                    <option value="Sampang">Sampang</option>
                                    <option value="Sidoarjo">Sidoarjo</option>
                                    <option value="Situbondo">Situbondo</option>
                                    <option value="Sumenep">Sumenep</option>
                                    <option value="Trenggalek">Trenggalek</option>
                                    <option value="Tuban">Tuban</option>
                                    <option value="Tulungagung">Tulungagung</option>
                                </select>
                            </div>
        
                            <div class="dropdown">
                                <h4>Tujuan</h4>
                                <select name="tujuan" id="tujuan">
                                    <option value="">Pilih Tujuan</option>
                                    <option value="Bangkalan">Bangkalan</option>
                                    <option value="Banyuwangi">Banyuwangi</option>
                                    <option value="Batu">Batu</option>
                                    <option value="Blitar">Blitar</option>
                                    <option value="Bojonegoro">Bojonegoro</option>
                                    <option value="Bondowoso">Bondowoso</option>
                                    <option value="Gresik">Gresik</option>
                                    <option value="Jember">Jember</option>
                                    <option value="Jombang">Jombang</option>
                                    <option value="Kediri">Kediri</option>
                                    <option value="Lamongan">Lamongan</option>
                                    <option value="Lumajang">Lumajang</option>
                                    <option value="Madiun">Madiun</option>
                                    <option value="Magetan">Magetan</option>
                                    <option value="Malang">Malang</option>
                                    <option value="Mojokerto">Mojokerto</option>
                                    <option value="Nganjuk">Nganjuk</option>
                                    <option value="Ngawi">Ngawi</option>
                                    <option value="Pacitan">Pacitan</option>
                                    <option value="Pamekasan">Pamekasan</option>
                                    <option value="Pasuruan">Pasuruan</option>
                                    <option value="Ponorogo">Ponorogo</option>
                                    <option value="Probolinggo">Probolinggo</option>
                                    <option value="Sampang">Sampang</option>
                                    <option value="Sidoarjo">Sidoarjo</option>
                                    <option value="Situbondo">Situbondo</option>
                                    <option value="Sumenep">Sumenep</option>
                                    <option value="Trenggalek">Trenggalek</option>
                                    <option value="Tuban">Tuban</option>
                                    <option value="Tulungagung">Tulungagung</option>
                                </select>
                            </div>
                        </div>

                        <label for="">Waktu Keberangkatan</label>
                        <input type="time" >

                        <div class="dropdown">
                            <h4>Kelas</h4>
                            <select name="to" id="to">
                                <option value="">Kelas</option>
                                <option value="ekonomi">Ekonomi</option>
                                <option value="bisnis">Bisnis</option>
                                <option value="vip">VIP</option>
                            </select>
                        </div>

                        <br>
                        <label for="harga">Harga</label>
                        <input class="input" type="number" name="harga" id="harga" placeholder="Harga" required />
                        
                        <button type="submit" class="btn btn-booking">Booking</button>
                    </form>
                </div>
            </div>
        </main>
    </div>
    <script>
        document.getElementById("dataForm").addEventListener("submit", function (event) {
            event.preventDefault(); // Mencegah form submit default
    
            // Ambil data dari form
            const nama = document.getElementById("nama").value;
            const tanggal = document.getElementById("tanggal").value;
            const transportation = document.getElementById("transportation").value;
            const asal = document.getElementById("asal").value;
            const tujuan = document.getElementById("tujuan").value;
            const waktu = document.querySelector('input[type="time"]').value;
            const kelas = document.querySelector('#to').value;
            const harga = document.getElementById("harga").value;
    
            // Simpan data baru ke Local Storage
            const newBooking = {
                nama,
                tanggal,
                transportation,
                asal,
                tujuan,
                waktu,
                kelas,
                harga
            };
    
            // Ambil data pesanan yang sudah ada, atau buat array baru jika kosong
            const existingBookings = JSON.parse(localStorage.getItem("pesanan")) || [];
            existingBookings.push(newBooking); // Tambahkan pesanan baru
            localStorage.setItem("pesanan", JSON.stringify(existingBookings)); // Simpan kembali ke Local Storage
    
            alert("Pesanan berhasil untuk: " + nama);
            window.location.href = "cek-pesanan.php"; // Pindah ke halaman cek pesanan
        });
    </script>    
</body>
</html>