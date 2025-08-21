<?php
include 'config.php';

// Cek apakah ada parameter id
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Query hapus data
    $sql = "DELETE FROM hewan1 WHERE id_hewan = '$id'";

    if ($conn->query($sql)) {
        echo "<script>alert('Data berhasil dihapus');window.location='index.php';</script>";
    } else {
        echo "<script>alert('Gagal menghapus data');window.location='index.php';</script>";
    }
} else {
    // Jika tidak ada id di URL
    echo "<script>alert('ID tidak ditemukan');window.location='index.php';</script>";
}
?>