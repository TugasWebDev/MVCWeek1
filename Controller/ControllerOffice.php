<?php


include_once("../Model/ModelOffice.php");



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

function editOffice($id){
    $_SESSION['listOffice'][$id]->setnama($_POST['nama']);
    $_SESSION['listOffice'][$id]->setalamat($_POST['alamat']);
    $_SESSION['listOffice'][$id]->setkota($_POST['kota']);
    $_SESSION['listOffice'][$id]->settelp($_POST['telp']);

}

function deleteOffice($id){
    foreach($_SESSION['listOfficeKaryawan'] as $k => $u) {
        if($u->office == $id) {
            unset($_SESSION['listOfficeKaryawan'][$k]);
        }
    }
   
    unset($_SESSION['listOffice'][$id]);
}


