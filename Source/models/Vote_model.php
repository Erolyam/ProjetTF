<?php
namespace models;
class Vote_model{

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

    public function like(){

        $tmp = $this->exist();
        if ($tmp==false){
            $sql = "INSERT INTO `Vote` (`User_idUser`, `Artwork_idArtwork`, `like`, `date`) VALUES ('".$_SESSION['idUser']."', '".$_SESSION['idArtwork']."', '1', '".date('Y-m-d H:i:s')."');";

            return $this->db->query($sql);
        }

    }

    public function dislike(){

        $tmp = $this->exist();
        if ($tmp==false){
            $sql = "INSERT INTO `Vote` (`User_idUser`, `Artwork_idArtwork`, `like`, `date`) VALUES ('".$_SESSION['idUser']."', '".$_SESSION['idArtwork']."', '0', '".date('Y-m-d H:i:s')."');";

            return $this->db->query($sql);
        }

    }

    public function exist(){


        $sql = "select * from Vote WHERE User_idUser = ".$_SESSION['idUser']." AND Artwork_idArtwork =".$_SESSION['idArtwork'];

        $res = $this->db->query($sql);

        while($row=$res->fetch_array()){
            $tmp = $row;
        }

        $res->close();

        return $tmp;
    }
}