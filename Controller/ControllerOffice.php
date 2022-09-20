<?php

include_once("../Model/ModelOffice.php");
session_start();
if(!isset($_SESSION['listOffice'])){
    $_SESSION['listOffice'] = array();
}

function insert(){
    $Office = new Office();
    $Office->nama = $_POST['nama'];
    $Office->alamat = $_POST['alamat'];
    $Office->kota = $_POST['kota'];
    $Office->telp = $_POST['telp'];
    array_push($_SESSION['listOffice'], $Office);
}

function index(){
    return $_SESSION['listOffice'];
}

function delete($id){
    unset($_SESSION['listOffice'][$id]);
}


