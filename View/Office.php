<?php
require_once "../Controller/ControllerOffice.php";

// include_once("../Wrapping.php");
if(isset($_POST['submit'])){
    insertOffice();
}

if(isset($_GET['delete'])){
    deleteOffice($_GET['delete']);
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Kantor Ku</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-link active" aria-current="page" href="Karyawan.php">Employee</a>
            <a class="nav-link" href="Office.php">Office</a>
            <a class="nav-link" href="OfficeKaryawan.php">Employee - Office</a>
        </div>
        </div>
    </div>
    </nav>
    
    <h1 class="text-center">List Kantor</h1>
    <table class="table table-dark mt-2 w-50 mx-auto">
        <thead>
            <tr>
                <th class="col">No</th>
                <th class="col">Nama</th>
                <th class="col">Alamat</th>
                <th class="col">Kota</th>
                <th class="col">No Telp</th>
                <th class="col">Aksi</th>
            </tr>
        </thead>

        <tbody>
        <?php
               $angka=0;
 
            foreach (indexOffice() as $index => $office) {
                $angka++;
                echo " 
                        <tr>
                            <td>".$angka."</td>
                            <td>".$office->nama."</td>
                            <td>".$office->alamat."</td>
                            <td>".$office->kota."</td>
                            <td>".$office->telp."</td>
                            <td><a href='office.php?delete=".$index."'><button class='btn btn-danger'>Delete</button></a></td>
                        </tr>";
            }
            ?>


        </tbody>
    </table>


    <h1 class="text-center mt-2">Tambah Kantor</h1>
    <form class="row g-3" method="POST" action="office.php">
       <div class="text-center">
            <div class="form-group text-center w-50 d-inline-block">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama" required>
            </div>

            <div class="form-group text-center w-50 d-inline-block">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan Alamat" required>
            </div>

            <div class="form-group text-center w-50 d-inline-block">
                <label for="kota" class="form-label">Kota</label>
                <input type="text" class="form-control" id="kota" name="kota" placeholder="Masukkan Kota" required>
            </div>

            
            <div class="form-group text-center w-50 d-inline-block">
                <label for="telp" class="form-label">No Telp</label>
                <input type="number" class="form-control" id="telp" name="telp" placeholder="Masukkan Nomor Telpon" required>
            </div>

        </div>
        <button name="submit" type="submit" class="d-block mx-auto mt-2 btn-sm btn btn-primary w-50">Submit</button>
   </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


  </body>
</html>