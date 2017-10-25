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
         
                return $result;
            

       
    }

    public function getAllArtworksByCate($id)
    {
        $sql  = "select * from Artwork where category_idCategory =".$id;

         $result = $this->db->query($sql);

         
                return $result;
           

       
    }

    public function  getArtwork($id_artwork)
    {
        $sql  = "select * from Artwork where idArtwork = ".$id_artwork;

         $result = $this->db->query($sql);

          //echo  $result;
         
                return $result;
           
    }
    
public function getAllCategorie()
    {
        $sql  = "select * from category";

         $result = $this->db->query($sql);

          //echo  $result;
         
                return $result;
          

       
    }



}




 