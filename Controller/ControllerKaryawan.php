<?php


include_once("../Wrapping.php");
if(!isset($_SESSION['listKaryawan'])){
    //list karyawan
    $_SESSION['listKaryawan'] = array();
}

function insertKaryawan(){
    $karyawan = new karyawan();
    $karyawan->nama = $_POST['nama'];
    $karyawan->jabatan = $_POST['jabatan'];
    $karyawan->usia = $_POST['usia'];
    array_push($_SESSION['listKaryawan'], $karyawan);
}

function indexKaryawan(){
    return $_SESSION['listKaryawan'];
}

function deleteKaryawan($id){
    foreach($_SESSION['listOfficeKaryawan'] as $k => $u) {
        if($u->karyawan == $id) {
            unset($_SESSION['listOfficeKaryawan'][$k]);
        }
    }
    unset($_SESSION['listKaryawan'][$id]);
}


