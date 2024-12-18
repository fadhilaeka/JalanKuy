<?php
session_start();
if (!isset($_SESSION['user_status']) || $_SESSION['user_status'] !== "logged_in") {
    echo "<script>alert('Anda harus login terlebih dahulu!'); window.location.href = 'login.php';</script>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<link rel="icon" href="icon.png">
	<link rel="stylesheet" href="admin.css">
	<link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin</title>
</head>

<body>
	<div class="sidebar">
		<div class="logo-details">
			<i class="bx bx-category"></i>
			<span class="logo_name">JALAN KUY</span>
		</div>
		<ul class="nav-links">
			<li>
				<a href="#" class="active">
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
				<a href="logout.php">
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
		<h1 id="welcomeMessage">Welcome, <?php echo $_SESSION['user_email']; ?>!</h1>
		</div>
	</section>
	<script>
		// Fungsi untuk sidebar
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