<?php
/**
 * Created by PhpStorm.
 * User: ciber_000
 * Date: 13/10/2017
 * Time: 12:18 AM
 */
namespace models;
class User_model
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

    public function register($user_data){
        // Insert user
        $sql = "INSERT INTO User(email, username, password, name, lastname, age, profile_picture) 
				VALUES ('".$user_data[email]."','".$user_data[username].
                                    "','".$user_data[password]."','".$user_data[name].
                                    "','".$user_data[lastname]."',".$user_data[age].",null)";
        return $this->db->query($sql);
    }

   // Log user in
        public function login($username, $password){
            // Validate
           $sql = "SELECT * FROM user where username ='".$username ."' and password = '".$password."' ";
         
            $result = $this->db->query($sql);

          //echo  $result;
            if($result){
                return $result;
            } else {
                return false;
            }
        }

    function check_username_exists($username)
    {
        $sql = "SELECT * FROM user WHERE username = '".$username."'";
        $result = $this->db->query($sql);
        return $result->num_rows > 0;
    }

    function check_email_exists($email)
    {
        $sql = "SELECT * FROM user WHERE email = '".$email."'";
        $result = $this->db->query($sql);
        return $result->num_rows > 0;
    }
}