<?php

namespace models;
use mageekguy\atoum\report\fields\test\travis;

class Vote_model
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

    public function like($idUser, $Artwork)
    {

        $permission = true;

        $sql = "SELECT `owner_idUser` FROM `artwork` WHERE `idArtwork` = ".$Artwork;
        $res = $this->db->query($sql);
        foreach ($res as $data) {
            $tmp = $data['owner_idUser'];
        }
        if($tmp == $idUser){
            $permission = false;
            $_SESSION['error'] = 'vous pouvez pas voter pour votre oeuvre';
        }
        if($permission) {
            $tmp = $this->exist($idUser, $Artwork);
            if ($tmp == false) {
                $sql = "INSERT INTO `vote` (`User_idUser`, `Artwork_idArtwork`, `like`, `date`) VALUES ('" . $idUser . "', '" . $Artwork . "', '1', '" . date('Y-m-d H:i:s') . "');";

                return $this->db->query($sql);
            } else {
                $sql = "UPDATE `vote` SET `like` = 1 WHERE `User_idUser` = " . $idUser . " AND `Artwork_idArtwork` = " . $Artwork . ";";

                return $this->db->query($sql);
            }
        }

    }

    public function dislike($idUser, $Artwork)
    {

        $permission = true;

        $sql = "SELECT `owner_idUser` FROM `artwork` WHERE `idArtwork` = ".$Artwork;
        $res = $this->db->query($sql);
        foreach ($res as $data) {
            $tmp = $data['owner_idUser'];
        }
        if($tmp == $idUser){
            $permission = false;
            $_SESSION['error'] = 'vous pouvez pas voter pour votre oeuvre';
        }

        if($permission) {

            $tmp = $this->exist($idUser, $Artwork);
            if ($tmp == false) {
                $sql = "INSERT INTO `vote` (`User_idUser`, `Artwork_idArtwork`, `like`, `date`) VALUES ('" . $idUser . "', '" . $Artwork . "', '0', '" . date('Y-m-d H:i:s') . "');";

                return $this->db->query($sql);
            } else {
                $sql = "UPDATE `vote` SET `like` = 0 WHERE `User_idUser` = " . $idUser . " AND `Artwork_idArtwork` = " . $Artwork . ";";

                return $this->db->query($sql);
            }
        }

    }

    public function exist($idUser, $Artwork)
    {


        $sql = "select * from vote WHERE User_idUser = " . $idUser . " AND Artwork_idArtwork =" . $Artwork;

        $res = $this->db->query($sql);

        $tmp = false;

        while ($row = $res->fetch_array()) {
            $tmp = $row;
        }

        $res->close();

        return $tmp;

    }

    public function existDetail($idUser, $Artwork)
    {

        $tmp = -1;

        if ($this->exist($idUser, $Artwork)) {
            $sql = "select `like` from vote WHERE User_idUser = " . $idUser . " AND Artwork_idArtwork =" . $Artwork;

            $res = $this->db->query($sql);

            foreach ($res as $data) {
                $tmp = $data['like'];
            }

            return $tmp;
        } else {
            return $tmp;
        }
    }
}