<?php
include 'config.php';

// Cek apakah ada parameter id
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Ambil data berdasarkan id
    $result = $conn->query("SELECT * FROM hewan1 WHERE id_hewan = '$id'");
    if ($result->num_rows == 0) {
        echo "<script>alert('Data tidak ditemukan');window.location='index.php';</script>";
    } else {
        $data = $result->fetch_assoc();
    }
}

// Jika tombol update ditekan
if (isset($_POST['update'])) {
    $nama   = $_POST['nama_hewan'];
    $jenis  = $_POST['jenis_hewan'];
    $asal   = $_POST['asal'];
    $jumlah = $_POST['jumlah'];

    $sql = "UPDATE hewan1 SET 
                nama_hewan = '$nama',
                jenis_hewan = '$jenis',
                asal = '$asal',
                jumlah = '$jumlah'
            WHERE id_hewan = '$id'";

    if ($conn->query($sql)) {
        echo "<script>alert('Data berhasil diupdate');window.location='index.php';</script>";
    } else {
        echo "<script>alert('Gagal update data');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Edit Hewan</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
  <h2 class="mb-4 text-center"> Edit Data Hewan</h2>
  <div class="card shadow-sm p-4">
    <form method="POST">
      <div class="mb-3">
        <label class="form-label">Nama Hewan</label>
        <input type="text" name="nama_hewan" class="form-control" value="<?= $data['nama_hewan']; ?>" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Jenis Hewan</label>
        <input type="text" name="jenis_hewan" class="form-control" value="<?= $data['jenis_hewan']; ?>" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Asal</label>
        <input type="text" name="asal" class="form-control" value="<?= $data['asal']; ?>" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Jumlah</label>
        <input type="number" name="jumlah" class="form-control" value="<?= $data['jumlah']; ?>" required>
      </div>
      <div class="d-flex justify-content-between">
        <a href="index.php" class="btn btn-secondary">⬅ Kembali</a>
        <button type="submit" name="update" class="btn btn-primary"> Simpan Perubahan</button>
      </div>
    </form>
  </div>
</div>

</body>
</html>