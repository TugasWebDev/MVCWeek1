<?php


include_once("../Wrapping.php");

if (!isset($_SESSION['listOfficeKaryawan'])) {
    $_SESSION['listOfficeKaryawan'] = array();
}

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



