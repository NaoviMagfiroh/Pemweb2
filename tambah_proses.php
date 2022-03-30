<?php
    include 'connection.php';

    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];

    $query_tambah = "INSERT INTO mahasiswa (nim,nama,kelas) VALUES ('$nim','$nama','$kelas')";
    $tambah = pg_query($connection,$query_tambah);

    if($tambah){
        header("location: index.php");
    }else{
        header("location: tambah.php");
    }

?>