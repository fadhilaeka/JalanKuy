<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <link rel="icon" href="icon.png" />
    <link rel="stylesheet" href="admin.css" />
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Categories</title>
</head>

<body>
    <div class="sidebar">
        <div class="logo-details">
            <i class="bx bx-category"></i>
            <span class="logo_name">JALAN KUY</span>
        </div>
        <ul class="nav-links">
            <li>
                <a href="admin.php">
                    <i class="bx bx-grid-alt"></i>
                    <span class="links_name">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="categories.php" class="active">
                    <i class="bx bx-box"></i>
                    <span class="links_name">Categories</span>
                </a>
            </li>
            <li>
                <a href="#">
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
            <div class="selection-container">
                <div class="dropdown">
                    <h3>Transportasi</h3>
                    <select name="transportation" id="transportation">
                        <option value="">Select Transportasi</option>
                        <option value="Mobil">Mobil</option>
                        <option value="Travel">Travel</option>
                        <option value="Bus">Bus</option>
                        <option value="Kereta Api">Kereta Api</option>
                    </select>
                </div>
            </div>
            <button type="button" class="btn btn-tambah" onclick="searchSchedule()">Search</button>
            <h3>Add Data</h3>
            <button type="button" class="btn btn-tambah">
                <a href="entry-categories.php">Add Data</a>
            </button>
            <table class="table-data">
                <thead>
                    <tr>
                        <th>Transportasi</th>
                        <th>Kelas</th>
                        <th>Fasilitas</th>
                        <th>Harga</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
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

        //tampil data
        function searchSchedule() {
            let categoriesData = JSON.parse(localStorage.getItem('categories')) || [];
            const selectedTransportation = document.getElementById('transportation').value;

            if (selectedTransportation) {
                categoriesData = categoriesData.filter(item => item.transportation === selectedTransportation);
            }

            const tableBody = document.querySelector('.table-data tbody');
            tableBody.innerHTML = '';

            categoriesData.forEach((item, index) => {
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td>${item.transportation}</td>
                    <td>${item.kelas}</td>
                    <td>${item.fasilitas}</td>
                    <td>Rp. ${item.harga}</td>
                    <td>
                        <button class="btn-edit" onclick="editCategory(${index})">Edit</button>
                        <button class="btn-delete" onclick="deleteCategory(${index})">Hapus</button>
                    </td>
                `;
                tableBody.appendChild(row);
            });
        }

        function editCategory(index) {
            window.location.href = `entry-categories.php?edit=${index}`;
        }

        function deleteCategory(index) {
            let categoriesData = JSON.parse(localStorage.getItem('categories')) || [];
            categoriesData.splice(index, 1);
            localStorage.setItem('categories', JSON.stringify(categoriesData));
            searchSchedule();
        }

        // Load data saat halaman terbuka
        searchSchedule();
    </script>
</body>
</html>