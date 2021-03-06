<?php

namespace models;
class Comment_Model
{


    private $db;

    // constructor
    function __construct()
    {
        require_once 'DB_Connection.php';
        // connecting to database
        $conn = new \models\DB_Connection();
        $this->db = $conn->connect();
        if (!$this->db) {
            die("Connection failed: " . mysqli_connect_error());
        }
    }

// destructor
    function __destruct()
    {
        $this->db->close();
    }


    public function get_comments($idArtwork)
    {

        $sql = "select * from Comment where Artwork_idArtwork = " . $idArtwork . " order by date DESC ";

        $result = $this->db->query($sql);

        //echo  $result;

        return $result;


    }

    public function AddComment($Comment_data)
    {
        
        $sql = "INSERT INTO Comment(User_idUser,Artwork_idArtwork,comment,date) 
                         VALUES ('" . $Comment_data[idUser]. "','" . $Comment_data[idArtwork] .
            "','" . $Comment_data[comment] . "','" . date('Y-m-d H:i:s') .
            "' )";
        $this->db->query($sql);
        return true;

    }

    public function UpdateComment($Comment_data)
    {
        session_start();
        $sql = "update Comment  set comment = '" . $Comment_data[comment] . "' where idComment = '" . $Comment_data[idComment] .
            "' ";
        return $this->db->query($sql);

    }

public function deleteComment($idArt)
    {
       // session_start();
        $sql = "delete from  comment  where idComment = " .$idArt;
        return $this->db->query($sql);

    }
}




 