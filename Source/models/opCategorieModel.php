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

    public function getACategory($name){
        $sql = "SELECT idCategory FROM Category WHERE = 'Film'";
        //echo 'Hernie '.$sql;
        $result = $this->db->query($sql);
        
        //echo 'zboub'.$name;
        return $result; 
    }

    public function addArtwork($toAdd){

        if (!empty($toAdd)) { 
            $idCat = $this->getACategory($toAdd['category']);
             //echo 'Paradis '.$idCat;
            // Insert user
            $sql = "INSERT INTO Artwork(title,date,description,category_idCategory,owner_idUser) 
                             VALUES ('".$toAdd['title']."','".date('Y-m-d')."','".$toAdd['description']."','1','".$_SESSION['idUser']."')";
            echo 'Paradis '.$sql;
            
           /* echo ' Again titre '.$toAdd['title'].' et date ';
            echo date('Y-m-d').' et description ';
            echo $toAdd['description'].' et idCat ';
            echo $idCat.' et idUser';
            echo $_SESSION['idUser'].' et title';*/
           // echo $toAdd['category'].'.';


            return $this->db->query($sql);
        }
    }

    //SELECT `idCategory` FROM `category` WHERE `name`='Film' 

    public function addCategorie($toAdd){
        // Insert user
        $sql = "INSERT INTO Category(name) 
                         VALUES ('".$toAdd['nomCat']."')";
        return $this->db->query($sql);
    }
    
    public function deleteCategories($idCategory){
        $sql = 'DELETE FROM Category WHERE idCategory ='.$idCategory;
            echo $sql;
        return $result = $this->db->query($sql);
    }

    public function getAllCategories(){
        $sql = "SELECT * FROM Category";
        $result = $this->db->query($sql);
        return $result; 
    }




  }