<?php 

    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "unibookstore_databae";

    $connection = mysqli_connect($server , $username , $password , $database);

    if(!$connection) {
        die('Koneksi Gagal!');
    } else {
        echo "Koneksi Terhubung";
    }

    function query($query) {
        global $connection;

        $result = mysqli_query($connection , $query);

        $rows = [];

        while($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }

        return $rows;
    }

    function tambah($data) {
        global $connection;

        $id = $_GET['IDBuku'];
        $newId = "KA100" . ($id + 1);
        $namaBuku = $data['namabuku'];
        $kategoriBuku = $data['kategoribuku'];
        $hargaBuku = $data['hargabuku'];
        $stokBuku = $data['stokbuku'];
        $penerbitBuku = $data['penerbitbuku'];

        $query = "INSERT INTO buku VALUES('', '$newId' , '$kategoriBuku' , '$namaBuku' , '$hargaBuku', '$stokBuku' , '$penerbitBuku')";

        mysqli_query($connection , $query);

        return mysqli_affected_rows($connection);

        



    }

?>