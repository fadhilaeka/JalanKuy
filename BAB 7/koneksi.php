<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "db_layanan_transportasi";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
} else {
    echo "Koneksi berhasil!";
}
?>