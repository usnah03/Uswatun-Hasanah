<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Tambah Hewan</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
  <h2 class="mb-4">Tambah Hewan</h2>
  <form method="POST">
    <div class="mb-3">
      <label>Nama Hewan</label>
      <input type="text" name="nama_hewan" class="form-control" required>
    </div>
    <div class="mb-3">
      <label>Jenis Hewan</label>
      <input type="text" name="jenis_hewan" class="form-control" required>
    </div>
    <div class="mb-3">
      <label>Asal</label>
      <input type="text" name="asal" class="form-control" required>
    </div>
    <div class="mb-3">
      <label>Jumlah</label>
      <input type="number" name="jumlah" class="form-control" required>
    </div>
    <button type="submit" name="simpan" class="btn btn-success">Simpan</button>
    <a href="index.php" class="btn btn-secondary">Kembali</a>
  </form>

  <?php
  if (isset($_POST['simpan'])) {
    $nama   = $_POST['nama_hewan'];
    $jenis  = $_POST['jenis_hewan'];
    $asal   = $_POST['asal'];
    $jumlah = $_POST['jumlah'];

    $sql = "INSERT INTO hewan1 (nama_hewan, jenis_hewan, asal, jumlah) 
            VALUES ('$nama', '$jenis', '$asal', '$jumlah')";
    if ($conn->query($sql)) {
      echo "<script>alert('Data berhasil ditambahkan!'); window.location='index.php';</script>";
    } else {
      echo "Error: " . $conn->error;
    }
  }
  ?>
</div>

</body>
</html>