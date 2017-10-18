<?php
/**
 * Created by PhpStorm.
 * User: ciber_000
 * Date: 13/10/2017
 * Time: 12:42 AM
 */
namespace controllers;
class opCategorieController
{
    private $model;
   // private $validation;
//D:\xampp\htdocs\
    // constructeur; pour le test mode $s est false
    function __construct($s) {
       // session_start();
        // connecting to model
        if($s){
            require_once str_replace ("//", "\\", $_SERVER['DOCUMENT_ROOT']).'\ProjetTF\Source\models\opCategorieModel.php';
           // require_once '../utilities/CustomValidation.php';
        }
        $this->model = new \models\opCategorieModel();
        //$this->validation = new \utilities\CustomValidation();
    }

   /* public function getAllUsersContollers(){
       // $v = $this->validation;
        $user_data = array();
        $user_data=$this->model->getAllUsers();

     
        }
    }*/
    
        public function addCategoryController($toAdd){
       // $v = $this->validation;
        //$user_data = array();
        //$user_data=$this->model->getAllUsers();

        //$user_data = $this->model->getAllUsers();
        echo $toAdd;
        $this->model->addCategorie($toAdd);
         header('Location: ../views/opCategorie/opCategorieView.php');
                     

        //header('Location: ../views/administration/list_users.php');
   
        }

}