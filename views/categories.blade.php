
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8" />
    <link rel="icon" href="asset/icon.png" />
    <link rel="stylesheet" href="{{asset('/admin.css')}}" />
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Categories</title>
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


            <h3>Data Entries</h3>
            <button type="button" class="btn btn-tambah">
                <a href="entrycategories">Add Data</a>
            </button>
            <button type="button" class="btn btn-tambah">
                <a href="cetak">Cetak Data</a>
            </button>
            <!-- Table Data -->
            <table class="table-data" id="dataTable">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Transportation</th>
                        <th scope="col">Kelas</th>
                        <th scope="col">Fasilitas</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                @foreach ($categories as $ct)
                <tbody>
                    <td>{{$ct->id}}</td>
                    <td>{{$ct->transportation}}</td>
                    <td>{{$ct->kelas}}</td>
                    <td>{{$ct->fasilitas}}</td>
                    <td>{{$ct->harga}}</td>
                    <td>
                                    <a href="editcategories/{{$ct->id}}" class='btn-edit'>Edit</a>
                                    <a href="delete/{{$ct->id}}" class='btn-delete'>Delete</a>
                                  </td>
                </tbody>
                @endforeach

            </table>
            <br>
            <button type="button" class="btn btn-cetak">
                <a href="categories-cetak.php">Print</a>
            </button>
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
    </script>
</body>
</html>

