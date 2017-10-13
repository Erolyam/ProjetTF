<html>
	<head>
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

            <li><a href="users/login">Se connecter</a></li>
            <li><a href="users/register">Créer un compte</a></li>



            <li><a href="posts/create">Ajouter une oeuvre</a></li>
            <li><a href="categories/create">Créer une catégorie</a></li>
            <li><a href="users/logout">Déconnexion</a></li>
              <li ><a href="#" style="color:yellow" ></a></li>

          </ul>
        </div>
      </div>
    </nav>

    <div class="container">
        <?php
        session_start();
        if(isset($_SESSION['message'])){
            echo '<p class="alert alert-success">'.$_SESSION['message'].'</p>';
            unset($_SESSION['message']);
        }
        if(isset($_SESSION['error'])){
            echo '<p class="alert alert-warning">'.$_SESSION['error'].'</p>';
            unset($_SESSION['error']);
        }
        ?>