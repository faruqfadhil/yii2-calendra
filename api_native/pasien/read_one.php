<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Credentials: true");
header('Content-Type: application/json');

// include database and object files
include_once '../config/database.php';
include_once '../objects/pasien.php';

// get database connection
$database = new Database();
$db = $database->getConnection();

// prepare product object
$pasien = new Pasien($db);

// set ID property of product to be edited
$pasien->id_user = isset($_GET['id_user']) ? $_GET['id_user'] : die();

// read the details of product to be edited
$pasien->readOne();

// create array

$pasien_arr = array(
    "status" => "sukses",
    "data" => array(
        "id_pasien" => $pasien->id_pasien,
        "nama_pasien"=> $pasien->nama_pasien,
        "alamat" => $pasien->alamat,
        "no_telp_pasien" => $pasien->no_telp_pasien,
        "gol_darah" => $pasien->gol_darah,
        "jenis_kelamin" => $pasien->jenis_kelamin,
        "nik" => $pasien->nik,
        "id_kota" => $pasien->id_kota,
        "id_provinsi" => $pasien->id_provinsi,
        "id_user" => $pasien->id_user,
        "email" => $pasien->email
    )
);

// make it json format
print_r(json_encode($pasien_arr));
?>