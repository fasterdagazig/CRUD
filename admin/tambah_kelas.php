<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">  
    <title>Tambah Kelas</title>
    
</head>
<body>
    
    <h3  class = "text-center"> Tambah Kelas</h3> 
    <div class = "container">
        <form  method="POST" action="proses_tambah_kelas.php">
            <div class="mb-3">
                <label for="nama_kelas" class="form-label">Nama Kelas</label>
                <input type="text" class="form-control" name="nama_kelas" placeholder="Masukkan nama kelas" required>
            </div>
            <div class="mb-3">
                <label for="kelompok" class="form-label">kelompok</label>
                <input type="text" class="form-control" name="kelompok" placeholder="Masukkan Kelompok"required> 
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
       
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>