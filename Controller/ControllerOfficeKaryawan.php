<?php

include_once("../Controller/ControllerOfficeKaryawan.php");
include_once("../Model/ModelOfficeKaryawan.php");



function insert()
{
    $Office = new OfficeKaryawan();
    $Office->karyawan = $_POST['karyawan']; //idKaryawan
    $Office->office = $_POST['office']; //idOffice
    array_push($_SESSION['listOfficeKaryawan'], $Office);
}

function index()
{
    return $_SESSION['listOfficeKaryawan'];
}

function ambilId($id){
    return index()[$id];
}

function delete($id)
{
    unset($_SESSION['listOfficeKaryawan'][$id]);
}

function editOfficeKaryawan($id){
    $_SESSION['listOfficeKaryawan'][$id]->setkaryawan($_POST['karyawan']);
    $_SESSION['listOfficeKaryawan'][$id]->setoffice($_POST['office']);

}


