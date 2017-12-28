<?php
class Riwayat{

    // database connection and table name
    private $conn;
    private $table_name = "riwayat";

    // object properties
    public $id_riwayat;
    public $id_pasien;
    public $id_dokter;
    public $umur;
    public $berat_badan;
    public $tinggi_badan;
    public $riwayat_kesehatan_keluarga;
    public $keluhan_utama;
    public $diagnosa;
    public $larangan;
    public $note;
    public $tgl_periksa;
    public $perawatan;

    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }


// read products
    function read(){

        // select all query
        $query = "SELECT * 
            FROM
                " . $this->table_name;

        // prepare query statement
        $stmt = $this->conn->prepare($query);

        // execute query
        $stmt->execute();

        return $stmt;
    }
    // used when filling up the update product form
    function readOne(){

        // query to read single record
        $query = "SELECT
                  *
            FROM
                " . $this->table_name . "
            WHERE
                id_pasien = ?
            LIMIT
                0,1";

        // prepare query statement
        $stmt = $this->conn->prepare( $query );

        // bind id of product to be updated
        $stmt->bindParam(1, $this->id_pasien);

        // execute query
        $stmt->execute();

        // get retrieved row
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        // set values to object properties
        $this->id_riwayat= $row['id_riwayat'];
        $this->id_pasien = $row['id_pasien'];
        $this->id_dokter = $row['id_dokter'];
        $this->umur= $row['umur'];
        $this->berat_badan= $row['berat_badan'];
        $this->tinggi_badan= $row['tinggi_badan'];
        $this->riwayat_kesehatan_keluarga= $row['riwayat_kesehatan_keluarga'];
        $this->keluhan_utama= $row['keluhan_utama'];
        $this->diagnosa= $row['diagnosa'];
        $this->larangan= $row['larangan'];
        $this->note= $row['note'];
        $this->tgl_periksa= $row['tgl_periksa'];
        $this->perawatan= $row['perawatan'];
    }
}
