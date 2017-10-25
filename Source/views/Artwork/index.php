<?php 
include '../../actions/AllArtwork.php';
include '../../actions/oeuvre.php'; ?>
<?php include('../templates/header.php');?>

<div class="row">
  <div class="col-sm-3">
    <div class="sidebar-nav">
      <div class="navbar navbar-default" role="navigation">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <span class="visible-xs navbar-brand">Sidebar menu</span>
        </div>
        <div class="navbar-collapse collapse sidebar-navbar-collapse">
          <ul class="nav navbar-nav">
            
          <?php  foreach  ( $getAllCategorie as $getAllCategorie) {  ?>
            <li class="active"><a href="#">Menu Item 1</a></li>
            
            <li>
             

              <a href="../../actions/AllArtwork.php?cat=<?php echo $getAllCategorie['idCategory']; ?>"><?php echo $getAllCategorie['name']; ?></a></li>
           <?php }
      
?>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
  </div>


 <div class="col-sm-9">
<form enctype="multipart/form-data" action="../../actions/user_register.php" method="post">
<?php
//$allArtwors = unserialize(stripslashes($_GET['errorMssg']));
if (isset($_GET['errorMssg'])){
$Artworks = unserialize(stripslashes($_GET['errorMssg']));

  $list =$Artworks;
}
else{
$list =$listOeuvre;

}
foreach  ( $list as $allArtwork) {
      
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
</div>
<?php include('../templates/footer.php');?>