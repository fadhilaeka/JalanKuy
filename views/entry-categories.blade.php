<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8" />
    <link rel="icon" href="asset/icon.png" />
    <link rel="stylesheet" href="admin.css" />
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Data Entry</title>
</head>
<body>
    <div class="sidebar">
        <div class="logo-details">
            <i class="bx bx-category"></i>
            <span class="logo_name">Logo</span>
        </div>
        <ul class="nav-links">
            <li>
                <a href="admin.php" class="active">
                    <i class="bx bx-grid-alt"></i>
                    <span class="links_name">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="categories.php">
                    <i class="bx bx-box"></i>
                    <span class="links_name">Categories</span>
                </a>
            </li>
            <li>
                <a href="login.php">
                    <i class="bx bx-log-out"></i>
                    <span class="links_name">Log out</span>
                </a>
            </li>
        </ul>
    </div>
    <section class="home-section">
        <nav>
            <div class="sidebar-button">
                <i class="bx bx-menu sidebarBtn"></i>
            </div>
        </nav>
        <div class="home-content">
            <h3>Entry Data</h3>
            <div class="form-login">
                <form action="post" method="POST">
                    @csrf
                    <label for="transportation">Transportation</label>
                    <input class="input" type="text" name="transportation" id="transportation" placeholder="Transportation" required />

                    <label for="kelas">Kelas</label>
                    <input class="input" type="text" name="kelas" id="kelas" placeholder="Kelas" required />
                    
                    <label for="fasilitas">Fasilitas</label>
                    <input class="input" type="text" name="fasilitas" id="fasilitas" placeholder="Fasilitas" required />
                    
                    <label for="harga">Harga</label>
                    <input class="input" type="text" name="harga" id="harga" placeholder="Harga" required />
                    
                    <button type="submit" class="btn btn-simpan">Simpan</button>
                </form>
            </div>
        </div>
    </section>
    <script>
        let sidebar = document.querySelector(".sidebar");
        let sidebarBtn = document.querySelector(".sidebarBtn");
        sidebarBtn.onclick = function () {
            sidebar.classList.toggle("active");
            if (sidebar.classList.contains("active")) {
                sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
            } else sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
        };

        // Ambil parameter dari URL
        const urlParams = new URLSearchParams(window.location.search);
        const editIndex = urlParams.get('edit');
        const categoriesData = JSON.parse(localStorage.getItem('categories')) || [];

        if (editIndex !== null) {
            const item = categoriesData[editIndex];
            if (item) {
                // Pre-fill data ke form
                document.getElementById('transportation').value = item.transportation;
                document.getElementById('kelas').value = item.kelas;
                document.getElementById('fasilitas').value = item.fasilitas;
                document.getElementById('harga').value = item.harga;
            }
        }

        document.getElementById('dataForm').addEventListener('submit', function (event) {
            event.preventDefault(); // Mencegah submit default form

            // Ambil nilai input
            const transportation = document.getElementById('transportation').value;
            const kelas = document.getElementById('kelas').value;
            const fasilitas = document.getElementById('fasilitas').value;
            const harga = document.getElementById('harga').value;

            // Validasi input
            if (!transportation || !kelas || !fasilitas || !harga) {
                alert('Semua kolom wajib diisi!');
                return;
            }

            // Ambil data dari localStorage
            const categoriesData = JSON.parse(localStorage.getItem('categories')) || [];

            // Cek apakah ini mode edit atau tambah data baru
            if (editIndex !== null) {
                // Perbarui data (mode edit)
                categoriesData[parseInt(editIndex)] = { transportation, kelas, fasilitas, harga };
                alert('Data berhasil diperbarui!');
            } else {
                // Tambahkan data baru
                categoriesData.push({ transportation, kelas, fasilitas, harga });
                alert('Data berhasil disimpan!');
            }

            // Simpan kembali ke localStorage
            localStorage.setItem('categories', JSON.stringify(categoriesData));

            // Redirect ke halaman Categories
            window.location.href = 'categories.php';
        });
    </script>
</body>
</html>