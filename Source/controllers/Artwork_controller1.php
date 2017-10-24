<?php
namespace controllers;
class Artwork_controller1
{

    private $modelArtwork;
    private $modelComment;
    private $validation;

    // constructeur; pour le test mode $s est false
    function __construct($s)
    {
        // connecting to model
        if ($s) {
            require_once '../models/Artwork_Model1.php';
            require_once '../models/Comment_Model.php';
            require_once '../utilities/CustomValidation.php';
            require_once '../models/Vote_model.php';

        }
        $this->modelComment = new \models\Comment_Model();
        $this->modelArtwork = new \models\Artwork_Model1();
        //  $this->modelCategorie = new \models\opCategorieModel();
        $this->validation = new \utilities\CustomValidation();

        $this->modelVote = new \models\Vote_model();
    }


    public function view($idArtwork)
    {

        $Artwork = $this->modelArtwork->getArtwork($idArtwork);

        $Artwork = $Artwork->fetch_all(MYSQLI_ASSOC);

        $Artwork = serialize($Artwork);

        $AllComment = $this->modelComment->get_comments($idArtwork);

        $AllComment = $AllComment->fetch_all(MYSQLI_ASSOC);

        $AllComment = serialize($AllComment);

        header('Location: ../views/Artwork/view.php?errorMssg=' . urlencode($Artwork) . '&comments=' . urlencode($AllComment));

    }

    public function AddComment()
    {

        $Comment_data = array();
        $Comment_data['idArtwork'] = $_POST['idArtwork'];
        $Comment_data['comment'] = $_POST['comment'];


        $Artwork = $_POST['idArtwork'];

        $this->modelComment->AddComment($Comment_data);

        $this->view($Artwork);

    }

    public function UpdateComment()
    {

        session_start();
        $Comment_data = array();
        $Comment_data['id_comment'] = $_POST['id_comment'];
        $Comment_data['comment'] = $_POST['comment'];

        $Artwork = $_SESSION['idArtwork'];

        $this->modelComment->UpdateComment($Comment_data);

        $this->view($Artwork);

    }
}

?>