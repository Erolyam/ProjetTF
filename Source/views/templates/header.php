<html>
	<head>
		<title>Numéro Number One</title>
     <meta charset="UTF-8">
		<link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/MyStyle.css">
    <link rel="stylesheet" href="../../assets/js/MyJS.css">
	</head>
	<body>
	<nav class="navbar navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="">Numéro #1</a>
        </div>
        <div id="navbar">
          <ul class="nav navbar-nav">
             <li><a href="../gallerie/gallerie.php">Galerie</a></li>
             <li><a href="Classement">Classement</a></li>
             <li><a href="../administration/list_users.php">Administration</a></li>
             <li><a href="../oeuvre/listing.php">Liste des oeuvres</a></li>
             <li><a href="../oeuvre/listingPerCategory.php">Liste des oeuvres par catégorie</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">

           


 <?php session_start(); ?>



<?php if (isset($_SESSION['username'])){

    ?>
            <li><a href="posts/create">Ajouter une oeuvre</a></li>
            <li><a href="categories/create">Créer une catégorie</a></li>
             <li><a href="../../actions/logout.php">Déconnexion</a></li>
              <li ><a href="#" style="color.http.ResponseEn:yellow" > <?php echo $_SESSION['username']   ?></a></li>
<?php  }   else {    ?>



 <li><a href="users/login">Se connecter</a></li>
            <li><a href="users/register">Créer un compte</a></li>

            <?php  }    ?>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container">
        <?php
      
        if(isset($_SESSION['message'])){
            echo '<p class="alert alert-success" name="message">'.$_SESSION['message'].'</p>';
            unset($_SESSION['message']);
        }
        if(isset($_SESSION['error'])){
            echo '<p class="alert alert-warning" name="error">'.$_SESSION['error'].'</p>';
            unset($_SESSION['error']);
        }
        ?>
