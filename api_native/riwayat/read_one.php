<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Credentials: true");
header('Content-Type: application/json');

// include database and object files
include_once '../config/database.php';
include_once '../objects/riwayat.php';

// get database connection
$database = new Database();
$db = $database->getConnection();

// prepare product object
$riwayat = new Riwayat($db);

// set ID property of product to be edited
$riwayat->id_pasien = isset($_GET['id_pasien']) ? $_GET['id_pasien'] : die();

// read the details of product to be edited
// initialize object

// query products
$stmt = $riwayat->read();
$num = $stmt->rowCount();

// check if more than 0 record found
if($num>0){

    // products array
    $riwayat_arr=array();
    $riwayat_arr["data"]=array();

    // retrieve our table contents
    // fetch() is faster than fetchAll()
    // http://stackoverflow.com/questions/2770630/pdofetchall-vs-pdofetch-in-a-loop
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        // extract row
        // this will make $row['name'] to
        // just $name only
        extract($row);


        $riwayat_item=array(
            "id_riwayat" => $riwayat->id_riwayat,
            "id_pasien" => $riwayat->id_pasien,
            "id_dokter" => $riwayat->id_dokter,
            "umur" => $riwayat->umur,
            "berat_badan" => $riwayat->berat_badan,
            "tinggi_badan" => $riwayat->tinggi_badan,
            "riwayat_kesehatan_keluarga" => $riwayat->riwayat_kesehatan_keluarga,
            "keluhan_utama" => $riwayat->keluhan_utama,
            "diagnosa" => $riwayat->diagnosa,
            "larangan" => $riwayat->larangan,
            "note" => $riwayat->note,
            "tgl_periksa" => $riwayat->tgl_periksa,
            "perawatan" => $riwayat->perawatan,
        );

        array_push($riwayat_arr["data"], $riwayat_item);
    }

    print_r(json_encode($riwayat_arr));
}

else{
    echo json_encode(
        array("message" => "No Riwayat found.")
    );
}
?>