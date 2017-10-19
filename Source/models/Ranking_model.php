<?php
/**
 * Created by PhpStorm.
 * User: ciber_000
 * Date: 20/10/2017
 * Time: 12:36 AM
 */

namespace models;


class Ranking_model
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

    function getRankingByCategoryAndTime($idCategory,$days){
        $sql = "SELECT a.title as title, (SUM(IF(v.like,1,0)) - SUM(IF(not v.like,1,0))) as votes
                FROM Artwork a LEFT OUTER JOIN Vote v 
                ON v.Artwork_idArtwork = a.idArtwork
                JOIN Category c ON c.idCategory = a.Category_idCategory
                WHERE c.idCategory=$idCategory and v.date BETWEEN DATE_SUB(NOW(), INTERVAL $days DAY) AND NOW()
                GROUP BY a.title
                ORDER BY votes desc
                LIMIT 3";
        $result = $this->db->query($sql);
        return $result;
    }
}