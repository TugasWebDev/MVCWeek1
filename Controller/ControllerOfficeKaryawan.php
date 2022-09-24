<?php


include_once("../Model/ModelOfficeKaryawan.php");



function insert()
{
    $Office = new OfficeKaryawan();
    $Office->karyawan = $_POST['karyawan'];
    $Office->office = $_POST['office'];
    // $Office->office = $_POST['kota'];
    array_push($_SESSION['listOfficeKaryawan'], $Office);
}

function index()
{
    return $_SESSION['listOfficeKaryawan'];
}

function delete($id)
{
    unset($_SESSION['listOfficeKaryawan'][$id]);
}

function editOfficeKaryawan($id){
    $_SESSION['listOfficeKaryawan'][$id]->setkaryawan($_POST['karyawan']);
    $_SESSION['listOfficeKaryawan'][$id]->setoffice($_POST['office']);

}


