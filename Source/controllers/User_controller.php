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
    private $model;
    private $validation;

    // constructeur; pour le test mode $s est false
    function __construct($s) {
        // connecting to model
        if($s){
            require_once '../models/User_model.php';
            require_once '../utilities/CustomValidation.php';
        }
        $this->model = new \models\User_model();
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
            echo "Error";
        } else {
            $this->model->register($user_data);
            echo "OK";
            //redirect('Artwork');
        }
    }

    public function is_form_valid($user_data){
        $v = $this->validation;
        $flag = true;
        $error=0;
        if(!$v->validate_name($user_data['name'])){
            $flag = false;
            $error=1;
        }
        else if(!$v->validate_name($user_data['lastname'])){
            $flag = false;
            $error=2;
        }
        else if(!$v->validate_username($user_data['username'])){
            $flag = false;
            $error=3;
        }
        else if(!$v->validate_password($_POST['password'])){
            $flag = false;
            $error=4;
        }
        else if(!$v->validate_matches($user_data['password'],$user_data['passconf'])){
            $flag = false;
            $error=5;
        }
        else if(!$v->validate_email($user_data['email'])){
            $flag = false;
            $error=6;
        }
        else if(!$v->validate_age($user_data['age'])){
            $flag = false;
            $error=7;
        }
        else if(!$this->is_available_email($user_data['email'])){
            $flag = false;
            $error=8;
        }
        else if(!$this->is_available_username($user_data['username'])){
            $flag = false;
            $error=9;
        }
        echo $error;
        return $flag;
    }

    public function is_available_email($email){
        return !$this->model->check_email_exists($email);
    }

    public function is_available_username($username){
        return !$this->model->check_username_exists($username);
    }
}