<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

// include database and object files
include_once '../config/database.php';
include_once '../objects/pasien.php';

// instantiate database and product object
$database = new Database();
$db = $database->getConnection();

// initialize object
$pasien = new Pasien($db);

// query products
$stmt = $pasien->read();
$num = $stmt->rowCount();

// check if more than 0 record found
if($num>0){

    // products array
    $pasiens_arr=array();
    $pasiens_arr["data"]=array();

    // retrieve our table contents
    // fetch() is faster than fetchAll()
    // http://stackoverflow.com/questions/2770630/pdofetchall-vs-pdofetch-in-a-loop
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        // extract row
        // this will make $row['name'] to
        // just $name only
        extract($row);


        $product_item=array(
            "id_pasien" => $id_pasien,
            "nama_pasien"=> $nama_pasien,
            "alamat" => $alamat,
            "no_telp_pasien" => $no_telp_pasien,
            "gol_darah" => $gol_darah,
            "jenis_kelamin" => $jenis_kelamin,
            "nik" => $nik,
            "id_kota" => $id_kota,
            "id_provinsi" => $id_provinsi,
            "id_user" => $id_user,
            "email" => $email
        );

        array_push($pasiens_arr["data"], $product_item);
    }

    echo json_encode($pasiens_arr);
}

else{
    echo json_encode(
        array("message" => "No pasien found.")
    );
}
?>