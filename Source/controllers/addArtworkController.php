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
    private $validation;

    function __construct($s)
    {
        if (!isset($_SESSION)) {
            session_start();
        }
        // connecting to model
        if ($s) {
            require_once __DIR__ . '../../models/opCategorieModel.php';
            require_once __DIR__ . '../../utilities/CustomValidation.php';
        }
        $this->model = new \models\opCategorieModel();
        $this->validation = new \utilities\CustomValidation();
    }

    public function getAllCategoriesController()
    {
        $user_data = $this->model->getAllCategories();
        $user_data = $user_data->fetch_all(MYSQLI_ASSOC);
        return $user_data;
    }


    public function addArtworkController()
    {
        $artwork_data = array();
        $artwork_data['title'] = trim($_POST['title']);
        $artwork_data['description'] = trim($_POST['description']);
        $artwork_data['category'] = $_POST['category'];
        if ($this->is_form_valid($artwork_data) === FALSE) {
            header("Location: ../views/Artwork/addArtwork.php");
            die();//To finish function after header redirection
        } else {
            if (isset($_FILES['photo'])) {
                $destination = __DIR__.'../../images/artworkPhoto_' . md5($artwork_data['title']);
                if (move_uploaded_file($_FILES['photo']['tmp_name'], $destination) || $_FILES["photo"]['name'][0] == '') {
                    if ($_FILES["photo"]['name'][0] == '')
                        $artwork_data['photo'] = "";
                    else
                        $artwork_data['photo'] = "../../images/artworkPhoto_" . md5($artwork_data['title']);
                    if ($this->model->addArtwork($artwork_data)) {
                        $_SESSION['message'] = 'Oeuvre ajoutée correctement';
                        header("Location: ../views/gallerie/gallerie.php");
                    } else {
                        $_SESSION['error'] = 'Erreur de BD: ';
                        header("Location: ../views/Artwork/addArtwork.php");
                    }
                    die();//To finish function after header redirection
                } else {
                    $_SESSION['error'] = 'Erreur avec l\'image attachée: ';
                    header("Location: ../views/Artwork/addArtwork.php");
                    die();
                }
            }
        }
    }

    public function is_form_valid($artwork_data)
    {
        $v = $this->validation;
        $flag = true;
        $error = 0;
        if (!$v->validate_title($artwork_data['title'])) {
            $flag = false;
            $error = 'Le title n\'est pas valide';
        } else if (!$v->validate_description($artwork_data['description'])) {
            $flag = false;
            $error = 'La description n\'est pas valide';
        }
        if (!$flag)
            $_SESSION['error'] = $error;
        return $flag;
    }


}
   
   


