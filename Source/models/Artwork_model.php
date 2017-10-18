<?php
/**
 * Created by PhpStorm.
 * User: ciber_000
 * Date: 19/10/2017
 * Time: 12:11 AM
 */
namespace models;
class Artwork_model
{
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

    function getArtworkById($idArtwork){
        $sql = "SELECT * FROM Artwork WHERE idArtwork=".$idArtwork;
        return $this->db->query($sql);
    }

    function getRecent(){
        $sql = "SELECT * FROM Artwork ORDER BY date DESC LIMIT 9";
        return $this->db->query($sql);
    }

    function getAllArtwork(){
        $sql = "SELECT * FROM Artwork";
        $result = $this->db->query($sql);
        return $result;
    }

    function getArtworkPerCategory($categoryId){
        $sql = "SELECT * FROM Artwork WHERE category_idCategory='".$categoryId."'";
        $result = $this->db->query($sql);
        return $result;
    }

    // destructor
    function __destruct() {
        $this->db->close();
    }
}