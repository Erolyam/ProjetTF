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
    // private $validation;
    //D:\xampp\htdocs\
    // constructeur; pour le test mode $s est false
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
           // $v = $this->validation;
            //$category_data = array();
           // $category_data['nomCat']=$v->normalize($_POST['nomCat']);
           // if($this->is_form_valid($category_data) === FALSE){
              //  header('Location: ../views/opCategorie/opCategorieView.php');
             //   die();//To finish function after header redirection
           // } else {
                //Execute Query
                $this->model->addArtwork($category_data);
               // $_SESSION['message'] = 'Artwork ajouté correctement';
               // header('Location: ../views/Artwork/addArtwork.php');
               // die();//To finish function after header redirection
            //}
        }

        public function getACategory($category_data){
           // $v = $this->validation;
            //$category_data = array();
           // $category_data['nomCat']=$v->normalize($_POST['nomCat']);
           // if($this->is_form_valid($category_data) === FALSE){
              //  header('Location: ../views/opCategorie/opCategorieView.php');
             //   die();//To finish function after header redirection
           // } else {
                //Execute Query
                $this->model->getACategory($category_data);
               // $_SESSION['message'] = 'Artwork ajouté correctement';
               // header('Location: ../views/Artwork/addArtwork.php');
               // die();//To finish function after header redirection
            //}
        }
    



}
   
   /* public function getAllCategoriesController(){       
        $user_data = $this->model->getAllCategories();
        $user_data = $user_data->fetch_all(MYSQLI_ASSOC);
        return $user_data;       
    }*/




