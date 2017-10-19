<?php
/**
 * Created by PhpStorm.
 * User: ciber_000
 * Date: 13/10/2017
 * Time: 12:42 AM
 */
namespace controllers;
class User_controller
{
    private $modelArwork1;
    private $model;
    private $validation;

    // constructeur; pour le test mode $s est false
    function __construct($s) {
        session_start();
        // connecting to model
        if($s){
            require_once str_replace ("//", "\\", $_SERVER['DOCUMENT_ROOT']).'\ProjetTF\Source\models\User_model.php';
             require_once str_replace ("//", "\\", $_SERVER['DOCUMENT_ROOT']).'\ProjetTF\Source\models\Artwork_Model1.php';
            //require_once '../models/User_model.php';
             require_once str_replace ("//", "\\", $_SERVER['DOCUMENT_ROOT']).'\ProjetTF\Source\utilities\CustomValidation.php';
            //require_once '../utilities/CustomValidation.php';
        }
        $this->model = new \models\User_model();
        $this->modelArwork1 = new \models\Artwork_Model1();
        $this->validation = new \utilities\CustomValidation();
    }

    public function register(){
        $v = $this->validation;
        $user_data = array();
        $user_data['name']=$v->normalize($_POST['name']);
        $user_data['lastname']=$v->normalize($_POST['lastname']);
        $user_data['age']=$v->normalize($_POST['age']);
        $user_data['username']=$v->normalize($_POST['username']);
        $user_data['email']=$v->normalize($_POST['email']);
        // Encrypt password
        $user_data['password']=hash('sha256', $_POST['password']);
        $user_data['passconf']=hash('sha256', $_POST['passconf']);
        if(isset($_FILES['photo'])){
            /*$file_data = addslashes(file_get_contents($_FILES['photo']['tmp_name']));
            $user_data['photo']=$file_data;*/
        }
        if($this->is_form_valid($user_data) === FALSE){
            header("Location: ../views/users/register.php");
            die();//To finish function after header redirection
        } else {
            $this->model->register($user_data);
            $_SESSION['message'] = 'Utilisateur ajouté correctement';
            header("Location: ../views/users/login.php");
            die();//To finish function after header redirection
        }
    }

    public function is_form_valid($user_data){
        $v = $this->validation;
        $flag = true;
        $error=0;
        if(!$v->validate_name($user_data['name'])){
            $flag = false;
            $error='Le prenom n\'est pas valide';
        }
        else if(!$v->validate_name($user_data['lastname'])){
            $flag = false;
            $error='Le nom n\'est pas valide';
        }
        else if(!$v->validate_username($user_data['username'])){
            $flag = false;
            $error='Le nom d\'utilisateur n\'est pas valide';
        }
        else if(!$v->validate_password($_POST['password'])){
            $flag = false;
            $error='Le mot de passe n\'est pas valide';
        }
        else if(!$v->validate_matches($user_data['password'],$user_data['passconf'])){
            $flag = false;
            $error='La confirmation du mot de passe n\'est pas correcte';
        }
        else if(!$v->validate_email($user_data['email'])){
            $flag = false;
            $error='Le email n\'est pas valide';
        }
        else if(!$v->validate_age($user_data['age'])){
            $flag = false;
            $error='L\'age n\'est pas valide';
        }
        else if(!$this->is_available_email($user_data['email'])){
            $flag = false;
            $error='Cet email est déjà utilisé';
        }
        else if(!$this->is_available_username($user_data['username'])){
            $flag = false;
            $error='Ce nom d\'utilisateur est déjà utilisé';
        }
        if(!$flag)
            $_SESSION['error'] = $error;
        return $flag;
    }
 // Log in user
        public function login(){
           
           


        $user_Login = array();
         $password =hash('sha256', $_POST['password']);
        //$password = $_POST['password'];
        $username = $_POST['username'];


              //  $password = hash('sha256',$password );
                // Get and encrypt the password
                // Login user
                $user_Login = $this->model->login($username, $password);

               // echo $idUser;modelArwork
             $allArtwork = array();
                if($user_Login->num_rows > 0){
                       
       while($row = $user_Login->fetch_row()){
               $idUser = $row[0];
        }

 // session_start(); 
                       $_SESSION['username'] = $username;
                       $_SESSION['idUser'] = $idUser;
                       $allArtwork = $this->modelArwork1->getAllArtworks();
           


        $allArtwork = $allArtwork->fetch_all(MYSQLI_ASSOC);       
           // $gg = $user_Login->num_rows;   
         $allArtwork = serialize($allArtwork);

//$tab = array("prenom" => "Hugo", "nom" => "ETIEVANT", "age" => 1980 );
         //<a href="test.php3?str=".addslashes(urlencode(serialize($tab)))."">
                   // $this->session->set_userdata($user_data);

                    // Set message
                    //$this->session->set_flashdata('user_loggedin', 'You are now logged in');
                   // json_encode($result);
                    
                    header('Location: ../views/gallerie/gallerie.php');

                 //   while ($row = mysql_fetch_array($result)) {
                   //       echo("ID : %s  Nom : %s".$row[0].$row[1]);
                                    }
                  //} 
                  
                  
              else {
                    // Set message
                    //$this->session->set_flashdata('login_failed', 'Login incorrect');

                 //   redirect('users/login');
                }       
            
        }


        public function logout(){
            // Unset user data
             session_start(); 
           session_unset('username');
           session_unset('idUser');

        header('Location: ../views/users/login.php');
           
        }



    public function is_available_email($email){
        return !$this->model->check_email_exists($email);
    }

    public function is_available_username($username){
        return !$this->model->check_username_exists($username);
    }
   
}