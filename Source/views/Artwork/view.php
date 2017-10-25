<?php include('../templates/header.php');?><?php
require_once '../../models/DB_Connection.php';
include str_replace ("//", "/", $_SERVER['DOCUMENT_ROOT']).'/ProjetTF/Source/actions/vote_exists.php';

  $conn = new \models\DB_Connection();
        $db = $conn->connect();

//$hh = $_GET['errorMssg'];



$Artworks = unserialize(stripslashes($_GET['errorMssg']));

$AllCom = unserialize(stripslashes($_GET['comments']));

foreach  ( $Artworks as $Artwork) {
      
      
?>

<small class="post-date">Ajouté le: <?php echo $Artwork['date']; ?></small><br>

<div class="post-body">

<div class="row">  
      <div class="col-sm-6 col-md-5"> <img class="img-rounded" src="/Documents/DSC_0355.jpg" width="480" height="300"></div>
      <div class="col-sm-6 col-md-7"><p><?php echo $Artwork['description']; ?></p></div>
    </div>
	
	 </div>
	
<?php

    if(isset($_SESSION['username'])){
//if($this->session->userdata('idUser') != $post['owner_idUser'] ) :  ?>


    <form action="../../actions/vote.php" method="post">


        <?php if($exist==-1){?>
        <button class="btn btn-success" name="like" type="submit">like</button>
        <button class="btn btn-danger" name="dislike" type="submit">dislike</button>
        <?php }?>

        <?php if($exist==-0){?>
            <button class="btn btn-success" name="like" type="submit">like</button>
            <button class="btn btn-danger" name="dislike" type="submit" disabled="disabled">dislike</button>
        <?php }?>

        <?php if($exist==1){?>
            <button class="btn btn-success" name="like" type="submit" disabled="disabled">like</button>
            <button class="btn btn-danger" name="dislike" type="submit">dislike</button>
        <?php }?>

    </form>
	<h3>Ajouter un commentaire</h3>
	<form enctype="multipart/form-data" action="../../actions/AllArtwork.php" method="post">
	<div class="form-group">
		<textarea name="comment" class="form-control"></textarea>
	</div>
	<?php $_SESSION['idArtwork'] = $Artwork['idArtwork'];  ?>
	<input type="hidden" name="idArtwork" value="<?php echo $Artwork['idArtwork']; ?>">
	<button class="btn btn-primary" name="AddComment" type="submit">Ajouter   </button>
</form>
<?php 
}else { ?>
 <form   action="../users/login.php">
		<input type="submit" value="Add commentaire" name="AddComment" class="btn btn-info">
</form>
    <form   action="../users/login.php">
        <input type="submit" value="like" name="like" class="btn btn-success">
        <input type="submit" value="dislike" name="dislike" class="btn btn-danger">
    </form>
<?php }	}
 ?>
<h3>Commentaires postés </h3>

	<?php foreach($AllCom as $comment) { ?>
		<div class="well">
			<strong><?php echo $comment['date']; ?></strong><br>
  <?php if(isset($_SESSION['username'])){ 
      if($_SESSION['idUser'] == $comment['User_idUser'] ) {


         ?>

           <form enctype="multipart/form-data" action="../../actions/AllArtwork.php" method="post">
                    <textarea name="comment"   disabled="true" id="<?php echo 'dd'.$comment['id_comment'] ?>" class="form-control"  ><?php echo $comment['comment'];  ?>
                    </textarea>
      <input type="button"  name="bouton" value="Editer" class="btn btn-warning" onclick="<?php echo 'dd'.$comment['id_comment']; ?>.disabled = false; edit.style.display='inline';">

                
                    <a class="btn btn-success pull-left" href="/comments/delete/<?php echo $comment['id_comment'] ?>">Supprimer</a>
            <input type="hidden" name="id_comment" value="<?php echo $comment['id_comment'] ?>">
                <input type="submit" value="Modfier" style="display: none;"  name="edit" class="btn btn-info">
            </form>
        <?php
}
 else {  ?>
        <h5><?php echo $comment['comment']; ?></h5>

        <?php } 


}
         else {  ?>
        <h5><?php echo $comment['comment']; ?></h5>

        <?php } ?>

		</div>
	<?php } ?>

<hr>

<?php include('../templates/footer.php');?>

