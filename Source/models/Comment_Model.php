<?php
namespace models;
class Comment_Model {
	     

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


     public function get_comments($idArtwork){
                  
            $sql  = "select * from Comment where Artwork_idArtwork = ".$idArtwork." order by date DESC ";

         $result = $this->db->query($sql);

          //echo  $result;
        
                return $result;
           

           
        }

     public function AddComment($Comment_data){
                  session_start(); 
           $sql = "INSERT INTO Comment(User_idUser,Artwork_idArtwork,comment,date) 
                         VALUES ('". $_SESSION['idUser']."','".$Comment_data[idArtwork].
                                    "','".$Comment_data[comment]."','".date('Y-m-d H:i:s').
                                    "' )";
        return $this->db->query($sql);
           
        }

         public function UpdateComment($Comment_data){
                  session_start(); 
 $sql = "update Comment  set comment = '".$Comment_data[comment]."' where id_comment = '".$Comment_data[id_comment].
                                    "' ";
        return $this->db->query($sql);
           
        }


}




 