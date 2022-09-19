<?php
require_once "../Controller/ControllerOfficeKaryawan.php";

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
            <a class="nav-link" href="OfficeKaryawan.php">  Employee - Office</a>
        </div>
        </div>
    </div>
    </nav>
    <?php var_dump($_SESSION)?>
    <h1 class="text-center">List Office Karyawan</h1>
    <table class="table table-dark mt-2 w-50 mx-auto">
        <thead>
            <tr>
                <th class="col">No</th>
                <th class="col">Employee</th>
                <th class="col">Office</th>
            </tr>
        </thead>


        <tbody>
        <?php
               $angka=0;
               var_dump(index());
            foreach (index() as $index => $officeKaryawan) {
                $angka++;
                echo " 
                        <tr>
                            <td>".$angka."</td>
                            <td>".$officeKaryawan->karyawan."</td>
                            <td>".$officeKaryawan->office."</td>
                            <td><a href='officeKaryawan.php?delete=".$index."'><button class='btn btn-primary'>Delete</button></a></td>
                        </tr>";
            }
            ?>


        </tbody>
    </table>


    <h1 class="text-center mt-2">List Office Karyawan</h1>
    <form class="row g-3" method="POST" action="karyawan.php">
       <div class="text-center">
            <div class="form-group text-center w-50 d-inline-block">
                <label for="karyawan" class="form-label">Karyawan</label>
               
                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="karyawan">
                    <?php
                        foreach (karyawan() as $k) {
                            echo "<option value=''>";
                            echo $k->nama;
                            echo "</option>";
                        }
                    ?>
              

                </select>
            </div>

          
            <div class="form-group text-center w-50 d-inline-block">
                <label for="office" class="form-label">Office</label>
                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="office">
                <?php
                        foreach (office() as $k) {
                            echo "<option value=''>";
                            echo $k->nama;
                            echo "</option>";
                        }
                    ?>
                </select>
            </div>


        </div>

        <button name="submit" type="submit" class="d-block mx-auto mt-2 btn-sm btn btn-primary w-50">Submit</button>
   </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


  </body>
</html>