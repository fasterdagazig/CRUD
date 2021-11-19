<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ubah siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>
    <?php
    include "koneksi.php";
    $qry_get_kelas = mysqli_query($koneksi, "select* from kelas where id_kelas = '".$_GET['id_kelas']."'");
    $dt_kelas=mysqli_fetch_array($qry_get_kelas);
    ?>
    <div class="p-3 mb-2 bg-secondary text-white">
    <div class = "container">
    <h3  class = "text-center"> Tambah Kelas</h3> 
    <form action="proses_ubah_kelas.php" method="post">
        <input type = "hidden" name="id_kelas" value ="<?=$dt_kelas['id_kelas']?>">
        Nama Kelas :
        <br><input type ="text" name ="nama kelas" value ="<?=$dt_kelas['nama_kelas']?>" class = "form-control"></br>
        
        Kelompok :
        <br><input type ="text" name ="kelompok" value ="<?=$dt_kelas['kelompok']?>" class = "form-control"></br>
        
        <br>
        <input type="submit" name="simpan" value="Ubah Kelas" class="btn btn-dark">
        </br>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    </div>
</body>
</html>