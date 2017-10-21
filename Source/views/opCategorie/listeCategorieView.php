<?php include str_replace ("//", "/", $_SERVER['DOCUMENT_ROOT']).'/ProjetTF/Source/views/templates/header.php';
include str_replace ("//", "/", $_SERVER['DOCUMENT_ROOT']).'/ProjetTF/Source/actions/listeCategorie.php'; ?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Liste des catégories</h2>
  <p>Il s'agit de la liste des catégories.</p>            
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Id</th>
        <th>Nom</th>
        <th>Supprimer</th>
      </tr>
    </thead>
    <tbody>


<?php
//$array_user = !empty($_GET['envoiInfo']) ? $GET['envoiInfo'] : NULL;

//$array_user = unserialize(stripslashes($_GET['envoiInfo']));

foreach  ($listCategories as $user_data) {    

?>

      <tr>
        <td> <?php echo $user_data['idCategory'] ?> </td>
        <td> <?php echo $user_data['name'] ?> </td>
        <td>  

          <p>
          <a href="../../actions/deleteCategory.php?idCategory=<?php echo $user_data['idCategory']?>" class="btn btn-primary btn-block">Supprimer la catégorie</a>
        </p> 
        </p> 


        </td>
        <?php
            }?>

    
      
      </tr>
  
    </tbody>
  </table>
</div>

<?php
    if (isset($_POST['idCategory'])) { echo ($_POST['idCategory']);} 
    ?>

<p>
          <a href="../opCategorie/opCategorieView.php" class="btn btn btn-success btn-block">Ajouter une nouvelle catégorie</a>
        </p> 


   

</body>
</html>


<?php include('../templates/footer.php');?>
