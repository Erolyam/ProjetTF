<html>
	<head>
   <meta charset="UTF-8">
		<title>Numéro Number One</title>
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
             <li><a href="Artwork">Galerie</a></li>
             <li><a href="Classement">Classement</a></li>
             <li><a href="Administration">Administration</a></li>

          </ul>
          <ul class="nav navbar-nav navbar-right">

            <li><a href="../users/login.php">Se connecter</a></li>
            <li><a href="users/register">Créer un compte</a></li>
 <?php session_start(); ?>



<?php if (isset($_SESSION['username'])){

    ?>
            <li><a href="posts/create">Ajouter une oeuvre</a></li>
            <li><a href="categories/create">Créer une catégorie</a></li>
            <li><a href="../../actions/logout.php">Déconnexion</a></li>
              <li ><a href="#" style="color.http.ResponseEn:yellow" > <?php echo $_SESSION['username']   ?></a></li>
<?php  }       ?>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container">
