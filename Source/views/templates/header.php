<html>
<head>
    <title>Numéro Number One</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/MyStyle.css">
    <link rel="stylesheet" href="../../assets/js/MyJS.css">
    <script src="../../assets/bsGallerie/js/jquery.js"></script>
    <script src="../../assets/bsGallerie/js/bootstrap.min.js"></script>
    <script src="../../assets/bsGallerie/js/custom.js"></script>


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
                <li><a href="../ranking/ranking.php">Classement</a></li>
                <?php if (isset($_SESSION['role']) && $_SESSION['role'] == "ADMIN") { ?>
                    <li><a href="../administration/list_users.php">Administration</a></li>
                <?php } ?>
                <li><a href="../oeuvre/listing.php">Oeuvres</a></li>
                <li><a href="../artwork/">Oeuvres par catégorie</a></li>
                <li><a href="../opCategorie/listeCategorieView.php">Liste des catégories</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">


                <?php session_start(); ?>



                <?php if (isset($_SESSION['username'])) {

                    ?>

                    <li><a href="../../actions/logout.php">Déconnexion</a></li>


                    <li><a href="#" style="color.http.ResponseEn:yellow"> <?php echo $_SESSION['username'] ?></a></li>
                <?php } else { ?>


                    <li><a href="../users/login.php">Se connecter</a></li>
                    <li><a href="../users/register.php">Créer un compte</a></li>

                <?php } ?>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <?php

    if (isset($_SESSION['message'])) {
        echo '<p class="alert alert-success" name="message">' . $_SESSION['message'] . '</p>';
        unset($_SESSION['message']);
    }
    if (isset($_SESSION['error'])) {
        echo '<p class="alert alert-warning" name="error">' . $_SESSION['error'] . '</p>';
        unset($_SESSION['error']);
    }
    if (isset($_SESSION['login_failed'])) {
        echo '<p class="alert alert-danger">' . $_SESSION['login_failed'] . '</p>';
        unset($_SESSION['login_failed']);
    }

    ?>
