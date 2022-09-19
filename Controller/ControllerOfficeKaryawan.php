<?php

include_once("../Model/ModelOffice.php");
include_once("../Model/ModelKaryawan.php");
include_once("../Model/ModelOfficeKaryawan.php");
session_start();
if(!isset($_SESSION['listOfficeKaryawan'])){
    $_SESSION['listOfficeKaryawan'] = array();
}

function insert(){
    $Office = new Office();
    $Office->karyawan = $_POST['karyawan'];
    $Office->office = $_POST['office'];
    array_push($_SESSION['listOfficeKaryawan'], $Office);
}

function index(){
    return $_SESSION['listOfficeKaryawan'];
}

function delete($id){
    unset($_SESSION['listOfficeKaryawan'][$id]);
}

// data karyawan & officce
function karyawan(){
    return $_SESSION['listKaryawan'];
}
function office(){
    return $_SESSION['listOffice'];
}


