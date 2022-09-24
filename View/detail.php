<?php
require_once "../Controller/ControllerOffice.php";
require_once "../Controller/ControllerKaryawan.php";
include_once("../Wrapping.php");


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
          <a class="nav-link" href="OfficeKaryawan.php"> Employee - Office</a>
        </div>
      </div>
    </div>
  </nav>

  <div class="container">
    <h1 class="mt-3">Halaman Detail</h1>
    <div class="mt-4 p-5 bg-dark text-white rounded">

      <div class="d-flex justify-content-evenly">
        <div class="d-flex flex-column">
          <?php
          $detailKaryawan = indexKaryawan()[$_GET['detailKaryawan']];
          $detailOffice = indexOffice()[$_GET['detailOffice']]
          ?>




          <p>Nama Employee : <?= $detailKaryawan->nama ?></p>
          <p>Jabatan Employee : <?= $detailKaryawan->jabatan ?></p>
          <p>Usia Employee : <?= $detailKaryawan->usia ?></p>


        </div>
        <div class="d-flex flex-column">
          <p>Nama Office : <?= $detailOffice->nama ?></p>
          <p>Alamat Office : <?= $detailOffice->alamat ?></p>
          <p>Kota Office : <?= $detailOffice->kota ?></p>
          <p>Nomor Telpon Office : <?= $detailOffice->telp ?></p>
        </div>
      </div>

      <div class="w-100 text-center">
       <a  href="OfficeKaryawan.php"><button class="btn btn-sm btn-primary"> Kembali </button></a>
      </div>
     

    </div>


  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>