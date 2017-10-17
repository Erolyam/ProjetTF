<?php
/**
 * Created by PhpStorm.
 * User: sloudiy2
 * Date: 17/10/17
 * Time: 10:37
 */
namespace models;
class listingOeuvre_model
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

    function get_all_artwork(){
        $sql = "SELECT * FROM Artwork";
        $result = $this->db->query($sql);
        return $result;
    }

    function get_artwork_per_category($categoryId){
        $sql = "SELECT * FROM Artwork WHERE category_idCategory='".$categoryId."'";
        $result = $this->db->query($sql);
        return $result;
    }
}