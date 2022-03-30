<?php

    include('connection.php');
      
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $prodi = $_POST['kelas']; 

        $query_edit = "UPDATE mahasiswa SET nama='$nama', kelas='$prodi' WHERE nim = '$nim' ";
        $edit = pg_query($connection,$query_edit);

        if($edit){
            header("location:index.php");
        }else{
            header("location:index.php?id=$id");
        }
?>