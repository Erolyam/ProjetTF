<?php include('../templates/header.php');?>
<form enctype="multipart/form-data" action="../../actions/user_register.php" method="post">
<?php
$allArtwors = unserialize(stripslashes($_GET['errorMssg']));

foreach  ( $allArtwors as $allArtwork) {
      
?>

	<h3><?php echo $allArtwork['title']; ?></h3>
	<div class="row">
		
		<div class="col-md-9">
			<small class="post-date">Posté le : <?php echo $allArtwork['date']; ?> dans <strong><?php echo $allArtwork['title']; ?></strong></small><br>
		<?php echo $allArtwork['description'] ; ?>
		<br><br>
		<p><a class="btn btn-default" href="../../actions/AllArtwork.php?idArtwork=<?php echo $allArtwork['idArtwork']; ?>">Afficher Plus  </a></p>
		</div>
	</div>
<?php   } ?>


</form>
<?php include('../templates/footer.php');?>