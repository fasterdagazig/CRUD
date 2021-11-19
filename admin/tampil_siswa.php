<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data siswa</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="tampil_kelas.php">Data Kelas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tampil_siswa.php">Data Siswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tampil_buku.php">List Buku</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled"></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Menu Add
                        </a>
                        <div class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item text-white" href="tambah_kelas.php">Add Kelas</a>
                            <a class="dropdown-item text-white" href="tambah_buku.php">Add Buku</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class = "container" >
        <br>
            <h1 class = text-danger>Data Siswa</h1>
        </br>
            <form action="tampil_siswa.php" method="post">
                <input type="text" name="cari" class="form-control"
                placeholder="Masukkan keyword pencarian berdasarkan id dan nama">
            </form>
        <br>
        <table class="table table-danger table-striped">
            <thead>
                <tr>
                    <th scope="col">id siswa</th>
                    <th scope="col">nama siswa</th>
                    <th scope="col">tanggal lahir</th>
                    <th scope="col">gender</th>
                    <th scope="col">alamat</th>
                    <th scope="col">username</th>
                    <th scope="col">nama kelas</th>
                    <th scope="col">aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include "koneksi.php";
                    if (isset($_POST["cari"]))
                    //if($_POST['cari'] i= NULL){}
                    {
                        $cari = $_POST["cari"];
                        $query_siswa = mysqli_query($koneksi, 
                        "select * from siswa join kelas on kelas.id_kelas = siswa.id_kelas where siswa.id_siswa='$cari'or siswa.nama_siswa like '%$cari%'");
                        //jika ada keyword pencarian
                    } else {
                        $query_siswa = mysqli_query($koneksi, "select * from siswa  join kelas on kelas.id_kelas = siswa.id_kelas ");
                        //jika tidak ada keyword pencarian
                    }
                    while($data_siswa=mysqli_fetch_array($query_siswa)){ ?>
                    <tr>
                        <td><?php echo $data_siswa["id_siswa"];?></td>
                        <td><?php echo $data_siswa["nama_siswa"];?></td>
                        <td><?php echo $data_siswa["tanggal_lahir"];?></td>
                        <td><?php echo $data_siswa["gender"];?></td>
                        <td><?php echo $data_siswa["alamat"];?></td>
                        <td><?php echo $data_siswa["username"];?></td>
                        <td><?php echo $data_siswa["nama_kelas"];?></td>  
                        <td>
                            <a href="ubah_siswa.php?id_siswa=<?=$data_siswa['id_siswa']?>" class="btn btn-success">Ubah</a>
                            <a href="hapus_siswa.php?id_siswa=<?=$data_siswa['id_siswa']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger" float="right">Hapus</a>
                        </td>
                    </tr>
                    <?php
                }
                ?>
               
            </tbody>
        </table>
        </br>
    </div>
    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>
