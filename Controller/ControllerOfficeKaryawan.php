<?php
include_once("../Model/ModelOffice.php");
include_once("../Model/ModelKaryawan.php");
include_once("../Model/ModelOfficeKaryawan.php");
session_start();
if(!isset($_SESSION['listOfficeKaryawan'])){
    $_SESSION['listOfficeKaryawan'] = array();
}

function insert(){
    $Office = new OfficeKaryawan();
    $Office->karyawan = $_POST['karyawan'];
    $Office->office = $_POST['office'];
    // $Office->office = $_POST['kota'];
    array_push($_SESSION['listOfficeKaryawan'], $Office);
}

function index(){
    return $_SESSION['listOfficeKaryawan'];
}

function delete($id){
    unset($_SESSION['listOfficeKaryawan'][$id]);
}

// //random
// function Random(){
//     return sizeof($_SESSION['listOfficeKaryawan']);
// }
// //cari
// function Search($value)
//   {
//       return (array_search($value, $_SESSION['listKaryawan']));
//   }

//detail
// function findObjectById($id){
// $array = array($_SESSION['listKaryawan']);

// if ( isset( $array[$id] ) ) {
//     return $array[$id];
// }

// return false;
// }




// data karyawan & officce

function karyawan(){
    return $_SESSION['listKaryawan'];
}
function office(){
    return $_SESSION['listOffice'];
}


