<?php
class pasien{

    // database connection and table name
    private $conn;
    private $table_name = "pasien";

    // object properties
    public $id_pasien;
    public $nama_pasien;
    public $alamat;
    public $no_telp_pasien;
    public $gol_darah;
    public $jenis_kelamin;
    public $nik;
    public $id_kota;
    public $id_provinsi;
    public $id_user;
    public $email;

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
                id_user = ?
            LIMIT
                0,1";

        // prepare query statement
        $stmt = $this->conn->prepare( $query );

        // bind id of product to be updated
        $stmt->bindParam(1, $this->id_user);

        // execute query
        $stmt->execute();

        // get retrieved row
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        // set values to object properties
        $this->id_pasien = $row['id_pasien'];
        $this->nama_pasien= $row['nama_pasien'];
        $this->alamat = $row['alamat'];
        $this->no_telp_pasien= $row['no_telp_pasien'];
        $this->gol_darah = $row['gol_darah'];
        $this->jenis_kelamin = $row['jenis_kelamin'];
        $this->nik = $row['nik'];
        $this->id_kota = $row['id_kota'];
        $this->id_provinsi = $row['id_provinsi'];
        $this->id_user = $row['id_user'];
        $this->email = $row['email'];
    }
}
