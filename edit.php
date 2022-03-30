<?php
    include 'connection.php';
    $query = "SELECT * FROM mahasiswa WHERE nim = '$_GET[nim]'";
    $statement = pg_query($connection,$query);
    while($data= pg_fetch_array($statement)){
        $nim = $data['nim'];
        $nama = $data['nama'];
        $kelas = $data['kelas'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
</head>
<body>
<div class="container">
    <div class="card shadow mt-3" >
    <form method="post" action="edit_proses.php" >
        <div class="card-body" style="margin: auto;">
         <h3 class="text-center"><b>Edit Data</b></h3>
        <div class="form-group">
                
               
            <div class="form-group">
                <label class="mt-2mb-2" for="nim">NIM</label>
                <input type="text" readonly class="form-control" name="nim" id="nim" value="<?php echo $nim;?>"  required>
            </div>
            <div class="form-group">
                <label class="mt-5-mb-5" for="nama">Nama</label>
                <input type="text" class="form-control" name="nama" id="nama" placeholder="masukan nama"value ="<?php echo $nama; ?>" required>
            </div>
            <div class="form-group">
                <label for="prodi">kelas</label>
                <select class="form-control" name="kelas" id="kelas">
                    <option value="<?php echo $prodi; ?>"><?php echo $kelas; ?></option>
                    <option value="4A">4A</option>
                    <option value="4B">4B</option>
                    <option value="4C">4C</option>
                    <option value="4D">4D</option>
                </select>
            </div>
            <div class="form-group">
                <button type="button" class="btn btn-danger mt-3" onclick="history.back()">Batal</button>
            <input type="submit" name="submit" class="btn btn-primary mt-3" value="SIMPAN" onclick="return confirm('Apakah Anda yakin ?')">
            </div>
        </div>
        </form>
    </div>
       
    </div>
</body>
</html>