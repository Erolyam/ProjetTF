<?php
/**
 * Created by PhpStorm.
 * User: ciber_000
 * Date: 13/10/2017
 * Time: 12:42 AM
 */
namespace controllers;
class admin_controller
{
    private $model;
    // private $validation;
    //D:\xampp\htdocs\
    // constructeur; pour le test mode $s est false
    function __construct($s) {
       // session_start();
        // connecting to model
        if($s){
            require_once str_replace ("//", "/", $_SERVER['DOCUMENT_ROOT']).'/ProjetTF/Source/models/Admin_model.php';
           // require_once '../utilities/CustomValidation.php';
        }
        $this->model = new \models\Admin_model();
        //$this->validation = new \utilities\CustomValidation();
    }
    
    public function getAllUsersControllers(){
        $user_data = $this->model->getAllUsers();
        $user_data = $user_data->fetch_all(MYSQLI_ASSOC);
        return $user_data;
    }



     public function deleteControllers($toDelete){
        echo $toDelete;
        $this->model->deleteUsers($toDelete);
        header('Location: ../views/administration/list_users.php');
     }

}