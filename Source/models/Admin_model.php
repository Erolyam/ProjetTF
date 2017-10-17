<?php
namespace models;
class Admin_model
{
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

    // destructor
    function __destruct() {
        $this->db->close();
    }
   
    



    public function getAllUsers(){
        $sql = "SELECT * FROM User";
        $result = $this->db->query($sql);
        return $result; 
    }







}