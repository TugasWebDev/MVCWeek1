<?php

session_start();


//karyawan
if(!isset($_SESSION['listKaryawan'])){
    //list karyawan
    $_SESSION['listKaryawan'] = array();
}


//office
if(!isset($_SESSION['listOffice'])){
    $_SESSION['listOffice'] = array();
}


//office karyawan
if (!isset($_SESSION['listOfficeKaryawan'])) {
    $_SESSION['listOfficeKaryawan'] = array();
}

?>