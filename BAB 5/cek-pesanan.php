<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Cek Pesanan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
        <div class="logo"><img src="logo.png" alt="my-logo"></div>
        <div class="menu">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="booking.php">Booking</a></li>
                <li><a href="cek-pesanan.php">Cek Pesanan</a></li>
            </ul>     
        </div>
    </nav>

    <section id="cek_pesanan">
        <div class="tengah">
            <h1>Cek Pesanan Anda</h1>
            <form id="pesananForm">
                <label for="order_id">Masukkan Nama Pemesan Anda:</label><br>
                <input type="text" id="order_id" name="order_id" placeholder="Contoh: John Doe" required><br><br>
                <button type="submit">Cek Pesanan</button>
            </form>
            
            <div id="hasil" style="display:none;">
                <h2>Detail Pesanan</h2>
                <table id="pesananTable" border="1">
                    <thead>
                        <tr>
                            <th>Nama Pemesan</th>
                            <th>Tanggal</th>
                            <th>Transportasi</th>
                            <th>Asal</th>
                            <th>Tujuan</th>
                            <th>Waktu Keberangkatan</th>
                            <th>Kelas</th>
                            <th>Harga</th>
                            <th>Tindakan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Data akan diisi oleh JavaScript -->
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <script>
        document.getElementById("pesananForm").addEventListener("submit", function (event) {
            event.preventDefault(); // Mencegah form submit default
            
            const inputNama = document.getElementById("order_id").value; // Ambil nama dari input
            const allBookings = JSON.parse(localStorage.getItem("pesanan")) || []; // Ambil semua data pesanan dari LocalStorage
            
            // Filter data berdasarkan nama
            const filteredBookings = allBookings.filter(booking => booking.nama.toLowerCase() === inputNama.toLowerCase());

            if (filteredBookings.length > 0) {
                // Menampilkan data pesanan yang sesuai
                displayBookings(filteredBookings);
            } else {
                alert("Pesanan dengan nama tersebut tidak ditemukan.");
                document.getElementById("hasil").style.display = "none"; // Sembunyikan tabel jika tidak ada data
            }
        });

        function displayBookings(bookings) {
            const tableBody = document.querySelector("#pesananTable tbody");
            tableBody.innerphp = ""; // Kosongkan tabel sebelum menambahkan data
            
            bookings.forEach((booking, index) => {
                const row = document.createElement("tr");
                row.innerHTML = `
                    <td>${booking.nama}</td>
                    <td>${booking.tanggal}</td>
                    <td>${booking.transportation}</td>
                    <td>${booking.asal}</td>
                    <td>${booking.tujuan}</td>
                    <td>${booking.waktu}</td>
                    <td>${booking.kelas}</td>
                    <td>${booking.harga}</td>
                    <td>
                        <button class="btn-delete" onclick="deleteBooking(${index})">Cancel</button>
                    </td>
                `;
                tableBody.appendChild(row);
            });

            document.getElementById("hasil").style.display = "block"; // Tampilkan tabel setelah data ditemukan
        }

        function deleteBooking(index) {
            const allBookings = JSON.parse(localStorage.getItem("pesanan")) || [];
            const bookingToDelete = allBookings[index];

            if (confirm(`Apakah Anda yakin ingin membatalkan pesanan untuk ${bookingToDelete.nama}?`)) {
                allBookings.splice(index, 1); // Hapus data dari array
                localStorage.setItem("pesanan", JSON.stringify(allBookings)); // Simpan kembali ke Local Storage
                alert(`Pesanan ${bookingToDelete.nama} telah dibatalkan.`);
                displayBookings(allBookings); // Muat ulang data
            }
        }
    </script>
</body>
</html>