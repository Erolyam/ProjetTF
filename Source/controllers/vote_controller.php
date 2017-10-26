<?php

namespace controllers;
class vote_controller
{

    private $modelArtwork;
    private $modelComment;
    private $modelVote;
    private $validation;

    // constructeur; pour le test mode $s est false
    function __construct($s)
    {
        // connecting to model
        if ($s) {
            include __DIR__ . '../../models/Artwork_Model1.php';
            include __DIR__ . '../../models/Comment_Model.php';
            include __DIR__ . '../../utilities/CustomValidation.php';
            include __DIR__ . '../../models/Vote_model.php';

        }
        $this->modelComment = new \models\Comment_Model();
        $this->modelArtwork = new \models\Artwork_Model1();
        $this->validation = new \utilities\CustomValidation();

        $this->modelVote = new \models\Vote_model();

        if (!isset($_SESSION['idUser'])) {
            $_SESSION['idUser'] = -1;
        }
    }


    public function view($idArtwork)
    {

        $Artwork = $this->modelArtwork->getArtwork($idArtwork);

        $Artwork = $Artwork->fetch_all(MYSQLI_ASSOC);

        $Artwork = serialize($Artwork);

        $AllComment = $this->modelComment->get_comments($idArtwork);

        $AllComment = $AllComment->fetch_all(MYSQLI_ASSOC);

        $AllComment = serialize($AllComment);

        session_start();
        $_SESSION['idArtwork'] = $idArtwork;

        header('Location: ../views/Artwork/view.php?errorMssg=' . urlencode($Artwork) . '&comments=' . urlencode($AllComment));

    }

    public function like()
    {
        session_start();
        $Artwork = $_SESSION['idArtwork'];
        $idUser = $_SESSION['idUser'];
        $this->modelVote->like($idUser, $Artwork);
        $_SESSION['message'] = 'success';
        $this->view($Artwork);
    }

    public function dislike()
    {
        session_start();
        $Artwork = $_SESSION['idArtwork'];
        $idUser = $_SESSION['idUser'];
        $this->modelVote->dislike($idUser, $Artwork);
        $_SESSION['message'] = 'success';
        $this->view($Artwork);
    }

    public function exist()
    {
        session_start();
        $Artwork = $_SESSION['idArtwork'];
        $idUser = $_SESSION['idUser'];
        return $this->modelVote->exist($idUser, $Artwork);
    }

    public function existDetail()
    {
        $Artwork = $_SESSION['idArtwork'];
        $idUser = $_SESSION['idUser'];
        return $this->modelVote->existDetail($idUser, $Artwork);
    }
}


?>