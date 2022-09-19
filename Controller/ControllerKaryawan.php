<?php

include_once("../Model/ModelKaryawan.php");
session_start();
if(!isset($_SESSION['listKaryawan'])){
    $_SESSION['listKaryawan'] = array();
}

function insert(){
    $karyawan = new karyawan();
    $karyawan->nama = $_POST['nama'];
    $karyawan->jabatan = $_POST['jabatan'];
    $karyawan->usia = $_POST['usia'];
    array_push($_SESSION['listKaryawan'], $karyawan);
}

function index(){
    return $_SESSION['listKaryawan'];
}

function delete($id){
    unset($_SESSION['listKaryawan'][$id]);
}
