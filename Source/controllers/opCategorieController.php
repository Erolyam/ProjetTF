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
    private $validation;

    // constructeur; pour le test mode $s est false
    function __construct($s)
    {
        //session_start();
        // connecting to model
        if ($s) {
            require_once __DIR__ . '../../models/opCategorieModel.php';
            require_once __DIR__ . '../../utilities/CustomValidation.php';
        }
        $this->model = new \models\opCategorieModel();
        $this->validation = new \utilities\CustomValidation();
    }

    public function addCategoryController()
    {
        $v = $this->validation;
        $category_data = array();
        $category_data['nomCat'] = trim($_POST['nomCat']);

        if ($this->is_form_valid($category_data) === FALSE) {
            header('Location: ../views/opCategorie/opCategorieView.php');
            die();//To finish function after header redirection
        } else {
            //Execute Query
            $this->model->addCategorie($category_data);
            $_SESSION['message'] = 'Categorie ajoutée correctement';
            header('Location: ../views/opCategorie/opCategorieView.php');
            die();//To finish function after header redirection
        }
    }

    public function deleteCategoryControllers($toDelete)
    {
        echo $toDelete;
        $this->model->deleteCategories($toDelete);
        header('Location: ../views/opCategorie/listeCategorieView.php');
    }

    public function getAllCategoriesControllers()
    {
        $user_data = $this->model->getAllCategories();
        $user_data = $user_data->fetch_all(MYSQLI_ASSOC);
        return $user_data;
    }


    public function is_form_valid($category_data)
    {
        $v = $this->validation;
        $flag = true;
        $error = 0;
        if (!$v->validate_name($category_data['nomCat'])) {
            $flag = false;
            $error = 'Le nom pour la categorie n\'est pas valide';
        }
        if (!$flag)
            $_SESSION['error'] = $error;
        return $flag;
    }
}