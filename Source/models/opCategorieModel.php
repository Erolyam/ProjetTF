<?php
/**
 * Created by PhpStorm.
 * User: ciber_000
 * Date: 13/10/2017
 * Time: 12:18 AM
 */
namespace models;
class opCategorieModel
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

    public function addCategorie($toAdd){
        // Insert user
        $sql = "INSERT INTO Category(name) 
                         VALUES ('".$toAdd['nomCat']."')";
        return $this->db->query($sql);
    }

    

  }