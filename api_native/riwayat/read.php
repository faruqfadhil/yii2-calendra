<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

// include database and object files
include_once '../config/database.php';
include_once '../objects/riwayat.php';

// instantiate database and product object
$database = new Database();
$db = $database->getConnection();

// initialize object
$riwayat = new Riwayat($db);

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
            "id_riwayat" => $id_riwayat,
            "id_pasien" => $id_pasien,
            "id_dokter" => $id_dokter,
            "umur" => $umur,
            "berat_badan" => $berat_badan,
            "tinggi_badan" => $tinggi_badan,
            "riwayat_kesehatan_keluarga" => $riwayat_kesehatan_keluarga,
            "keluhan_utama" => $keluhan_utama,
            "diagnosa" => $diagnosa,
            "larangan" => $larangan,
            "note" => $note,
            "tgl_periksa" => $tgl_periksa,
            "perawatan" => $perawatan,
        );

        array_push($riwayat_arr["data"], $riwayat_item);
    }

    echo json_encode($riwayat_arr);
}

else{
    echo json_encode(
        array("message" => "No Riwayat found.")
    );
}
?>