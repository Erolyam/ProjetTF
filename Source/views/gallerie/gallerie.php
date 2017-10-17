<?php include str_replace ("//", "\\", $_SERVER['DOCUMENT_ROOT']).'\ProjetTF\Source\actions\gallerie_action.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <title>Numéro #1_Galerie</title>

    <link rel="stylesheet" href="../../assets/bsGallerie/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/bsGallerie/css/font-awesome.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="../../assets/bsGallerie/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,700" rel="stylesheet">

</head>
<body>

<nav class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="">Numéro #1</a>
        </div>
        <div id="navbar">
            <ul class="nav navbar-nav">
                <li><a href="gallerie.php">Galerie</a></li>
                <li><a href="Classement">Classement</a></li>
                <li><a href="../administration/list_users.php">Administration</a></li>

            </ul>
            <ul class="nav navbar-nav navbar-right">

                <li><a href="../users/login.php">Se connecter</a></li>
                <li><a href="../users/register.php">Créer un compte</a></li>



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

    use controllers\gallerie_controller;
    use mageekguy\atoum\php;

    if(isset($_SESSION['message'])){
        echo '<p class="alert alert-success" name="message">'.$_SESSION['message'].'</p>';
        unset($_SESSION['message']);
    }
    if(isset($_SESSION['error'])){
        echo '<p class="alert alert-warning" name="error">'.$_SESSION['error'].'</p>';
        unset($_SESSION['error']);
    }
    ?>


<!-- PRE LOADER -->

<div class="preloader">
    <div class="sk-spinner sk-spinner-wordpress">
        <span class="sk-inner-circle"></span>
    </div>
</div>

<!-- Navigation section  -->

<div class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="container">

        <div class="navbar-header">
            <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
            </button>
            <a href="gallerie.php" class="navbar-brand"><i class="fa fa-magnet"></i></a>

    </div>
</div>

<!-- Home Section -->

<section id="home">
    <div class="container">
        <div class="row">

            <div class="col-md-12 col-sm-12">
                <h2>Galerie</h2>
                <hr>
            </div>

        </div>
    </div>
</section>

<!-- Portfolio Section -->
<div class="copyrights">Template by Magnet Studio </div>
<section id="portfolio">
    <div class="container">
        <div class="row">

            <?php foreach ($listArtwork as $data){
                ?>
                <div class="col-md-4 col-sm-6">
                    <a href="detail.html">
                        <div class="portfolio-thumb">
                            <img src="../../assets/bsGallerie/image/test.png" class="img-responsive" alt="Portfolio">
                            <div class="portfolio-overlay">
                                <div class="portfolio-item">
                                    <h3><?php echo $data['title'] ?></h3>
                                    <small><?php echo $data['description'] ?></small>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            <?php
            } ?>


        </div>
    </div>
</section>

<!-- Footer Section -->

<footer>
    <div class="container">
        <div class="row">

            <div class="col-md-3 col-sm-3">
                <i class="fa fa-magnet"></i>
            </div>

            <div class="col-md-4 col-sm-4">
                <p>Projet Test Fonctionnel</p>
            </div>

            <div class="col-md-offset-1 col-md-4 col-sm-offset-1 col-sm-3">
            </div>

            <div class="clearfix col-md-12 col-sm-12">
                <hr>
            </div>

            <div class="col-md-6 col-sm-6">
                <div class="footer-copyright">
                    <p>Template by Magnet Studio</p>
                </div>
            </div>

            <div class="col-md-6 col-sm-6">
                <ul class="social-icon">
                    <li><a href="#" class="fa fa-facebook"></a></li>
                    <li><a href="#" class="fa fa-twitter"></a></li>
                    <li><a href="#" class="fa fa-linkedin"></a></li>
                </ul>
            </div>

        </div>
    </div>
</footer>


<!-- SCRIPTS -->

<script src="../../assets/bsGallerie/js/jquery.js"></script>
<script src="../../assets/bsGallerie/js/bootstrap.min.js"></script>
<script src="../../assets/bsGallerie/js/custom.js"></script>

</body>
</html>