<?php


include_once("../Wrapping.php");
if(!isset($_SESSION['listOffice'])){
    $_SESSION['listOffice'] = array();
}

function insertOffice(){
    $Office = new Office();
    $Office->nama = $_POST['nama'];
    $Office->alamat = $_POST['alamat'];
    $Office->kota = $_POST['kota'];
    $Office->telp = $_POST['telp'];
    array_push($_SESSION['listOffice'], $Office);
}

function indexOffice(){
    return $_SESSION['listOffice'];
}

function deleteOffice($id){
    foreach($_SESSION['listOfficeKaryawan'] as $k => $u) {
        if($u->office == $id) {
            unset($_SESSION['listOfficeKaryawan'][$k]);
        }
    }
   
    unset($_SESSION['listOffice'][$id]);
}


