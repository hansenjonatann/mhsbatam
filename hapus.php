<?php 

require 'config.php';

$id = $_GET['id'];

if(hapus($id) > 0){
    echo "<script>
        alert('Data berhasil dihapus')
        window.location.href = 'index.php'
    </script>";
} else {
    echo "<script>
        alert('Data tidak berhasil dihapus')
        window.location.href = 'admin.php'
    </script>";
}


?>