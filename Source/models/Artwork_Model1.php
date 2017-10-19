<?php
namespace models;
class Artwork_Model1 {
	

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

public function getAllArtworks()
    {
        $sql  = "select * from Artwork";

         $result = $this->db->query($sql);

          //echo  $result;
          if($result){
                return $result;
            } else {
                return false;
            }

       
    }

    public function  getArtwork($id_artwork)
    {
        $sql  = "select * from Artwork where idArtwork = ".$id_artwork;

         $result = $this->db->query($sql);

          //echo  $result;
          if($result){
                return $result;
            } else {
                return false;
            }

       
    }



}




 