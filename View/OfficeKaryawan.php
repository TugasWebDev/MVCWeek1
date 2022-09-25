<?php

require_once "../Controller/ControllerOfficeKaryawan.php";
require_once "../Controller/ControllerOffice.php";
require_once "../Controller/ControllerKaryawan.php";
include_once("../Wrapping.php");

// session_start();
// include_once("../Wrapping.php");

if (isset($_POST['submit'])) {
    insert();
}

if (isset($_GET['delete'])) {
    delete($_GET['delete']);
}


if (isset($_POST['edit'])) {
    editOfficeKaryawan($_POST['edit']);
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

<body style=" overflow-x: hidden;">
    <?php
    include_once("../header.php");
    ?>
    <h1 class="text-center">List Office Karyawan</h1>
    <table class="table table-dark mt-2 w-50 mx-auto">
        <thead>
            <tr>
                <th class="col">No</th>
                <th class="col">Employee</th>
                <th class="col">Jabatan</th>
                <th class="col">Usia</th>
                <th class="col">Alamat Office</th>
                <th class="col">Kota Office</th>
                <th class="col">Aksi</th>
            </tr>
        </thead>


        <tbody>

            <?php
            $angka = 0;
            $listKaryawan = indexKaryawan();
            $listOffice = indexOffice();
            // var_dump(index())
            ?>


            <?php foreach (index() as $index => $officeKaryawan) :
                $idKaryawan = $officeKaryawan->karyawan;
                $idOffice = $officeKaryawan->office;
            ?>
                <?php $angka++; ?>

                <tr>
                    <td><?= $angka ?></td>
                    <td><?= $listKaryawan[$idKaryawan]->nama ?></td>
                    <td><?= $listKaryawan[$idKaryawan]->jabatan ?></td>
                    <td><?= $listKaryawan[$idKaryawan]->usia ?></td>
                    <td><?= $listOffice[$idOffice]->alamat ?></td>
                    <td><?= $listOffice[$idOffice]->kota ?></td>


                    <!-- <td><?= $officeKaryawan->office ?></td> -->

                    <td>
                        <a href='detail.php?detailKaryawan=<?= $idKaryawan ?>&detailOffice=<?= $idOffice ?>'><button class='btn btn-primary'>Detail</button></a>
                        <a href='officeKaryawan.php?edit=<?= $index ?>&editIdKaryawan=<?= $idKaryawan ?>&editIdOffice=<?= $idOffice ?>'><button class='btn btn-warning'>Edit</button></a>
                        <a href='officeKaryawan.php?delete=<?= $index ?>'><button class='btn btn-danger'>Delete</button></a>
                    </td>

                </tr>

            <?php endforeach; ?>




        </tbody>


    </table>

    <h1 class="text-center mt-2"><?php echo isset($_GET['edit']) ? ' Edit' : 'Tambah' ?>List Office Karyawan</h1>

    <form class="row g-3" method="POST" action="officeKaryawan.php">
        <!-- inisialisasi id karyawan dan office -->
        <?php
           if (isset($_GET['edit'] )) {
            $IdkaryawanEdit = ambilId($_GET['edit'])->karyawan;
            $IdofficeEdit = ambilId($_GET['edit'])->office;
            var_dump($IdkaryawanEdit);
            var_dump($IdofficeEdit);
        }


        ?>
        <div class="text-center">
            <div class="form-group text-center w-50 d-inline-block">
                <label for="karyawan" class="form-label">Karyawan</label>

    
                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="karyawan" required>

                    <?php if (indexKaryawan() == null) : ?>
                        <option value="">Data Employee Belum Ada</option>
                    <?php elseif (indexKaryawan() != null) : ?>
                        <option value="<?php echo isset($IdkaryawanEdit) ? $IdkaryawanEdit  : '' ?>"> <?php echo isset($_GET['edit']) ? $_SESSION['listKaryawan'][$IdkaryawanEdit]->nama : 'Pilih Employee' ?></option>
                    <?php endif; ?>

                    <!-- loop data -->
                    <?php foreach (indexKaryawan()  as $index => $k) : ?>
                        <?php if ($k->nama == $_SESSION['listKaryawan'][$IdkaryawanEdit]->nama) : ?>

                        <?php else : ?>
                            <option value="<?= $index ?>"><?= $k->nama ?></option>
                        <?php endif; ?>

                    <?php endforeach; ?>


                </select>
            </div>


            <div class="form-group text-center w-50 d-inline-block">
                <label for="office" class="form-label">Office</label>
                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="office" required>


                    <?php if (indexOffice() == null) : ?>
                        <option value="">Data Office Belum Ada</option>
                    <?php elseif (indexOffice() != null) : ?>
                        <option value="<?php echo isset($IdofficeEdit) ? $IdofficeEdit  : '' ?>"><?php echo isset($_GET['edit']) ? $_SESSION['listOffice'][$IdofficeEdit]->nama : 'Pilih Office' ?></option>
                    <?php endif; ?>

                    <!-- loop data -->

                    <?php foreach (indexOffice()  as $index => $o) : ?>
                        <?php if ($o->nama == $_SESSION['listOffice'][$IdofficeEdit]->nama) : ?>

                        <?php else : ?>
                            <option value="<?= $index ?>"><?= $o->nama ?></option>
                        <?php endif; ?>

                    <?php endforeach; ?>

                </select>
            </div>




        </div>

        <button name="<?php echo isset($_GET['edit']) ? 'edit' : 'submit' ?>" value="<?php echo isset($_GET['edit']) ? $_GET['edit'] : '' ?>" type="submit" class="d-block mx-auto mt-2 btn-sm btn btn-primary w-50">Submit</button>
    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>