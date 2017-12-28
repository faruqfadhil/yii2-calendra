<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Credentials: true");
header('Content-Type: application/json');

// include database and object files
include_once '../config/database.php';
include_once '../objects/kabupaten.php';

// get database connection
$database = new Database();
$db = $database->getConnection();

// prepare product object
$kabupaten = new Kabupaten($db);

// set ID property of product to be edited
$kabupaten->id_kab = isset($_GET['id_kab']) ? $_GET['id_kab'] : die();

// read the details of product to be edited
$kabupaten->readOne();

// create array

$kabupaten_arr = array(
    "status" => "sukses",
    "data" => array(
        "id_kab" =>  $kabupaten->id_kab,
        "id_prov" => $kabupaten->id_prov,
        "nama" => $kabupaten->nama,

    )
);

// make it json format
print_r(json_encode($kabupaten_arr));
?>