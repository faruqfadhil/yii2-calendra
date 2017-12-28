<?php
class kabupaten{

    // database connection and table name
    private $conn;
    private $table_name = "kabupaten";

    // object properties
    public $id_kab;
    public $id_prov;
    public $nama;

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
                id_kab = ?
            LIMIT
                0,1";

        // prepare query statement
        $stmt = $this->conn->prepare( $query );

        // bind id of product to be updated
        $stmt->bindParam(1, $this->id_kab);

        // execute query
        $stmt->execute();

        // get retrieved row
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        // set values to object properties
        $this->id_kab = $row['id_kab'];
        $this->id_prov = $row['id_prov'];
        $this->nama = $row['nama'];
    }
}
