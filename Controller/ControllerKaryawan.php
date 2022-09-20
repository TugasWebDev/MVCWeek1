<?php

include_once("../Model/ModelKaryawan.php");
session_start();
if(!isset($_SESSION['listKaryawan']) && !isset($_SESSION['id'])){
    //list karyawan
    $_SESSION['listKaryawan'] = array();
    //id
    $_SESSION['id'];
}

function insert(){
    $karyawan = new karyawan();
    $karyawan->id = $_POST['id'];
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

//id
function SetId(int $value){
    
    $_SESSION['id']=$value + 1;
    return $_SESSION['id'];
    
}
