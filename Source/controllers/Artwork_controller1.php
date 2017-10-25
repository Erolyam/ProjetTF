<?php
namespace controllers;
class Artwork_controller1
{

    private $modelArwork;
     private $modelComment;
    private $validation;

    // constructeur; pour le test mode $s est false
    function __construct($s) {
        // connecting to model
        if($s){
      require_once str_replace ("//", "\\", $_SERVER['DOCUMENT_ROOT']).'\ProjetTF\Source\models\Artwork_Model1.php';
          require_once str_replace ("//", "\\", $_SERVER['DOCUMENT_ROOT']).'\ProjetTF\Source\models\Comment_Model.php';
          require_once str_replace ("//", "\\", $_SERVER['DOCUMENT_ROOT']).'\ProjetTF\Source\utilities\CustomValidation.php';
           
        }
        $this->modelComment = new \models\Comment_Model();
        $this->modelArwork = new \models\Artwork_Model1();
        $this->validation = new \utilities\CustomValidation();
    }


      
                  public function view($idArtwork){
                  $Artwork = array();
                   $AllComment = array();

                          $Artwork = $this->modelArwork->getArtwork($idArtwork);

                          $Artwork = $Artwork->fetch_all(MYSQLI_ASSOC);       
           
                          $Artwork = serialize($Artwork);

                          $AllComment = $this->modelComment->get_comments($idArtwork);

                          $AllComment = $AllComment->fetch_all(MYSQLI_ASSOC);       
           
                          $AllComment = serialize($AllComment);
                    
            //return true;
            header('Location: ../views/Artwork/view.php?errorMssg='.urlencode($Artwork).'&comments='.urlencode($AllComment));
//    header('Location: ../views/Artwork/view.php?AllComment = '.urlencode($AllComment));
            return true;
        }
 public function getAllcategotie(){

 $getAllCategorie =   $this->modelArwork->getAllCategorie();

        return  $getAllCategorie ;
 }


      public function getAllcategotieByid($iDcat){

           $Artworkss =   $this->modelArwork->getAllArtworksByCate($iDcat);

             $Artwork = $Artworkss->fetch_all(MYSQLI_ASSOC);       
           
                          $Artworks = serialize($Artwork);
          if($Artworkss->num_rows >0 ){

            header('Location: ../views/Artwork/index.php?errorMssg='.urlencode($Artworks));
            return true;
          }else {
            return false;}
   
        
 }




         public function AddComment(){
      

        $Comment_data = array();
        $Comment_data['idArtwork']=$_POST['idArtwork'];
        $Comment_data['comment']=$_POST['comment'];
        

          $Artwork =$_POST['idArtwork'];

          $this->modelComment->AddComment($Comment_data);
                    
          $this->view($Artwork);
       return true;
        }

        public function UpdateComment(){
      
        session_start(); 
        $Comment_data = array();
        $Comment_data['id_comment']=$_POST['id_comment'];
        $Comment_data['comment']=$_POST['comment'];
        

          $Artwork = $_SESSION['idArtwork'] ;

          $this->modelComment->UpdateComment($Comment_data);
                    
          $this->view($Artwork);

        }



}



    ?>