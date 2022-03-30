<?php
include 'connection.php';

    $query_hapus = "DELETE FROM mahasiswa WHERE nim = '$_GET[nim]'";
    $hapus = pg_query($connection, $query_hapus);

    if($hapus){
        header("location:index.php");
    }else{
        header("location:index.php");
    }
?>