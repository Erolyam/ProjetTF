<?php
/**
 * Created by PhpStorm.
 * User: sloudiy2
 * Date: 17/10/17
 * Time: 10:48
 */
namespace controllers;
class ListingOeuvre_controller
{
    private $model;

    // constructeur; pour le test mode $s est false
    function __construct($s) {
        //session_start();
        // connecting to model
        if($s){
            require_once str_replace ("//", "\\", $_SERVER['DOCUMENT_ROOT']).'\ProjetTF\Source\models\listingOeuvre_model.php';

        }
        $this->model = new \models\listingOeuvre_model();
    }

    public function getAllArtworksControllers(){
        $artwork_data = $this->model->getAllArtwork();
        $artwork_data = $artwork_data->fetch_all(MYSQL_ASSOC);
        return $artwork_data;
    }

    public function getArtworksPerCategoryControllers($categoryId){
        $artwork_data = $this->model->getArtworkPerCategory($categoryId);
        $artwork_data = $artwork_data->fetch_all(MYSQL_ASSOC);
        return $artwork_data;
    }

    public function deleteControllers($toDelete){
        echo $toDelete;
        $this->model->deleteArtwork($toDelete);
        header('Location: ../views/oeuvre/listing');
    }
}