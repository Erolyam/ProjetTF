<?php
/**
 * Created by PhpStorm.
 * User: ciber_000
 * Date: 19/10/2017
 * Time: 12:36 AM
 */

namespace controllers;


class Artwork_controller
{
    private $model;

    function __construct() {
        //session_start();
        // connecting to model
        require_once str_replace ("//", "\\", $_SERVER['DOCUMENT_ROOT']).'\ProjetTF\Source\models\Artwork_model.php';

        $this->model = new \models\Artwork_model();

    }

    public function getArtworkById($idArtwork){
        $artwork = $this->model->getArtworkById($idArtwork);
        if($artwork->num_rows > 0){
            $artwork = $artwork->fetch_all(MYSQLI_ASSOC);
            $artwork = $artwork[0];
            return $artwork;
        }else{
            return null;
        }

    }

    public function getArtwork(){
        $recent9 = $this->model->getRecent();
        $recent9 = $recent9->fetch_all(MYSQLI_ASSOC);
        return $recent9;
    }

    public function getAllArtworksControllers(){
        $artwork_data = $this->model->getAllArtwork();
        $artwork_data = $artwork_data->fetch_all(MYSQLI_ASSOC);
        return $artwork_data;
    }

    public function getArtworksPerCategoryControllers($categoryId){
        $artwork_data = $this->model->getArtworkPerCategory($categoryId);
        $artwork_data = $artwork_data->fetch_all(MYSQLI_ASSOC);
        return $artwork_data;
    }
}