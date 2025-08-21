<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Database Hewan</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
  <h2 class="mb-4 text-center"> Data Hewan</h2>
  <a href="tambah.php" class="btn btn-success mb-3">+ Tambah Hewan</a>
  <table class="table table-bordered table-striped shadow-sm">
    <thead class="table-dark">
      <tr>
        <th>ID Hewan</th>
        <th>Nama Hewan</th>
        <th>Jenis Hewan</th>
        <th>Asal</th>
        <th>Jumlah</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $result = $conn->query("SELECT * FROM hewan1");
      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
          echo "<tr>
                  <td>".$row['id_hewan']."</td>
                  <td>".$row['nama_hewan']."</td>
                  <td>".$row['jenis_hewan']."</td>
                  <td>".$row['asal']."</td>
                  <td>".$row['jumlah']."</td>
                  <td>
                    <a href='edit.php?id=".$row['id_hewan']."' class='btn btn-warning btn-sm'>Edit</a>
                    <a href='hapus.php?id=".$row['id_hewan']."' class='btn btn-danger btn-sm' onclick='return confirm(\"Yakin hapus data?\")'>Hapus</a>
                  </td>
                </tr>";
        }
      } else {
        echo "<tr><td colspan='6' class='text-center'>Data kosong</td></tr>";
      }
      ?>
    </tbody>
  </table>
</div>

</body>
</html>