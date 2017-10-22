<?php
/**
 * Created by PhpStorm.
 * User: Ibo
 * Date: 13/10/2017
 * Time: 12:42 AM
 */
namespace controllers;
class addArtworkController
{
    private $model;

    function __construct($s) {
      if(!isset($_SESSION)) 
    { 
        session_start(); 
    }        
        // connecting to model
        if($s){
            require_once str_replace ("//", "/", $_SERVER['DOCUMENT_ROOT']).'/ProjetTF/Source/models/opCategorieModel.php';
           // require_once '../utilities/CustomValidation.php';
        }
        $this->model = new \models\opCategorieModel();
        //$this->validation = new \utilities\CustomValidation();
    }

  	public function getAllCategoriesController(){       
      $user_data = $this->model->getAllCategories();
      $user_data = $user_data->fetch_all(MYSQLI_ASSOC);
      return $user_data;       
    }

    public function addArtworkController($category_data){
      $this->model->addArtwork($category_data);
     // header('Location: ../Artwork/addArtwork.php');
    }

}
   
   


