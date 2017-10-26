<?php
/**
 * Created by PhpStorm.
 * User: ciber_000
 * Date: 20/10/2017
 * Time: 12:45 AM
 */

namespace controllers;


class Ranking_controller
{
    private $model;

    // constructeur; pour le test mode $s est false
    function __construct($s)
    {
        //session_start();
        // connecting to model
        if ($s) {
            require_once '../../models/Ranking_model.php';
        }
        $this->model = new \models\Ranking_model();
    }

    public function getAllRankings($idCategorie, $days)
    {
        $rankings = $this->model->getRankingByCategoryAndTime($idCategorie, $days);
        $rankings = $rankings->fetch_all(MYSQLI_ASSOC);
        return $rankings;
    }


}