<?php
namespace models;
class gallerie_model{
    private $db;

    // constructor
    function __construct() {
        require_once 'DB_Connection.php';
        // connecting to database
        $conn = new \models\DB_Connection();
        $this->db = $conn->connect();
        if (!$this->db) {
            die("Connection failed: ".mysqli_connect_error());
        }
    }

    function getRecent(){
        $sql = "SELECT * FROM `Artwork` ORDER BY date DESC LIMIT 9";
        return $this->db->query($sql);
    }

    // destructor
    function __destruct() {
        $this->db->close();
    }

}