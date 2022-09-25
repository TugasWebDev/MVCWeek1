<?php

include_once("../Controller/ControllerOfficeKaryawan.php");
include_once("../Model/ModelKaryawan.php");

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

function editKaryawan($id){
    $_SESSION['listKaryawan'][$id]->setnama($_POST['nama']);
    $_SESSION['listKaryawan'][$id]->setjabatan($_POST['jabatan']);
    $_SESSION['listKaryawan'][$id]->setusia($_POST['usia']);

}

function deleteKaryawan($id){
    foreach($_SESSION['listOfficeKaryawan'] as $k => $u) {
        if($u->karyawan == $id) {
            unset($_SESSION['listOfficeKaryawan'][$k]);
        }
    }
    unset($_SESSION['listKaryawan'][$id]);
}


