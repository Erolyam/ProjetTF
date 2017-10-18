<?php include str_replace ("//", "\\", $_SERVER['DOCUMENT_ROOT']).'\ProjetTF\Source\views\templates\header.php';
include str_replace ("//", "\\", $_SERVER['DOCUMENT_ROOT']).'\ProjetTF\Source\actions\administration.php'; ?>

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
  <h2>Liste des membres</h2>
  <p>Il s'agit de la liste des membres du site</p>            
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Id</th>
        <th>Email</th>
        <th>Username</th>
        <th>Name</th>
        <th>Last Name</th>
        <th>Role</th>
        <th>Age</th>
        <th>Supprimer</th>
      </tr>
    </thead>
    <tbody>


<?php
//$array_user = !empty($_GET['envoiInfo']) ? $GET['envoiInfo'] : NULL;

//$array_user = unserialize(stripslashes($_GET['envoiInfo']));

foreach  ($listUsers as $user_data) {    

?>

      <tr>
        <td> <?php echo $user_data['idUser'] ?> </td>
        <td> <?php echo $user_data['email'] ?> </td>
        <td> <?php echo $user_data['username'] ?> </td>
        <td> <?php echo $user_data['name'] ?> </td>
        <td> <?php echo $user_data['lastname'] ?> </td>
        <td> <?php echo $user_data['rol'] ?> </td>
        <td> <?php echo $user_data['age'] ?> </td>
        <td>  
        <p>
          <a href="../../actions/deleteUsers.php?idUser=<?php echo $user_data['idUser']?>" class="btn btn-primary btn-block">Supprimer utilisateur</a>
        </p> 


        </td>
        <?php
            }?>

    
      
      </tr>
  
    </tbody>
  </table>
</div>


    <?php
    if (isset($_POST['idUser'])) { echo ($_POST['idUser']);} 
    ?>

</body>
</html>


<?php include('../templates/footer.php');?>
