<?php 

    require 'config.php';

    $id = $_GET['id'];


    $buku = query("SELECT * FROM buku")[0];

    if(isset($_POST['kirim'])) {
        if(ubah($_POST) > 0 ) {
            echo "<script>
                    alert('Data berhasil diubah!')
                    window.location.href = 'admin.php'
            </script>";
        }else {
            echo "<script>
                    alert('Data  tidak berhasil diubah!')
                    window.location.href = 'admin.php'
            </script>";
        }
    }

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Unibookstore - Update Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
    <form action="" method="post">
      <input type="hidden" name="id" value="<?= $buku['id'] ?>">
  <div class="mb-3">
    <label for="namaBuku" class="form-label">Nama Buku</label>
    <input type="text" class="form-control" id="namaBuku" name="namabuku" value="<?= $buku['NamaBuku'] ?>"   required>
  </div>
  <div class="mb-3">
    <label for="kategoriBuku" class="form-label">Kategori Buku</label>
    <select name="kategoribuku" id="kategoriBuku" class="form-control">
        <option value="KA001">Keilmuwan</option>
        <option value="KA002">Bisnis dan Manajemen</option>
    </select>
  </div>
  <div class="mb-3">
    <label for="hargaBuku" class="form-label">Harga Buku</label>
   <input type="text" name="hargabuku" id="hargaBuku" class="form-control" value="<?= $buku['Harga'] ?>">
  </div>
  <div class="mb-3">
    <label for="stokBuku" class="form-label">Stok Buku</label>
   <input type="text" name="stokbuku" id="stokBuku" class="form-control" value="<?= $buku['Stok'] ?>">
  </div>
  <div class="mb-3">
    <label for="penerbitBuku" class="form-label">Stok Buku</label>
    <select name="penerbitbuku" id="penerbitBuku" class="form-control">
        <option value="">Pilih Penerbit Buku</option>
        <option value="BP01">Eko</option>
        <option value="BP02">Julianto</option>
        <option value="BP03">Santoso</option>
    </select>
</div>
  <button type="submit" name="kirim" class="btn btn-primary btn-md">Tambah Data</button>

  
  
  </form>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>