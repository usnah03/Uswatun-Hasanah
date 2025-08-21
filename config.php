<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "db_hewan1";

// Koneksi ke database
$conn = new mysqli($host, $user, $pass, $db);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>