<?php 

    require 'config.php';

    $buku = query("SELECT * FROM buku");

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <!-- Bagian Navbar -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
  <div class="container">
    <a class="navbar-brand" href="#">Unibookstore</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="admin.php">Admin</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="penggadaan.php">Penggadaan</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Bagian Table -->
<div class="container mt-5">
    <a href="tambah.php" class="btn btn-primary btn-md">Tambah Data Buku</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID Buku</th>
      <th scope="col">Kategori</th>
      <th scope="col">Nama Buku</th>
      <th scope="col">Harga</th>
      <th scope="col">Stok</th>
      <th scope="col">Aksi</th>
      
    </tr>
  </thead>
  <tbody>
    <?php foreach($buku as $item) : ?>
        <?php 
            $kategoriBuku = "";
            switch($item['Kategori']) {
                case "KA001":
                $kategoriBuku = "Keilmuwan";
                break;
                case "KA002":
                $kategoriBuku = "Bisnis dan Manajemen";
                break;
            } ?>
    <tr>
      <th scope="row"><?= $item['IDBuku'] ?></th>
      <td><?= $kategoriBuku; ?></td>
      <td><?= $item['NamaBuku'] ?></td>
      <td><?= $item['Harga'] ?></td>
      <td><?= $item['Stok'] ?></td>
      <td>
        <a href="ubah.php?id=<?php echo $item['id'] ?>" class="btn btn-success btn-md">Ubah</a>
        <a href="hapus.php?id=<?php echo $item['id'] ?>" class="btn btn-danger btn-md">Hapus</a>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>