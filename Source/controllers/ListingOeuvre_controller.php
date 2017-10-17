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
        session_start();
        // connecting to model
        if($s){
            require_once '../models/listingOeuvre_model.php';

        }
        $this->model = new \models\listingOeuvre_model();
    }


}