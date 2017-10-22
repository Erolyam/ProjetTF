<?php include('../templates/header.php');
if(!isset($_SESSION['role']) || $_SESSION['role']!="ADMIN"){
    header("Location: ../errors/403.php");
    die();
}
?>
<form enctype="multipart/form-data" action="../../actions/opCategorie.php" method="post">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<h1 class="text-center">Ajouter une catégorie</h1>
			<div class="form-group">
				<label>Nom </label>
                <input type="text" name="nomCat" class="form-control" placeholder="Nom de la catégorie">
			</div>
			<button type="submit" class="btn btn-primary btn-block">Ajouter</button>
		</div>
	</div>
</form>
<?php include('../templates/footer.php');?>
