<?php include('../templates/header.php');?>
<?php include str_replace ("//", "\\", $_SERVER['DOCUMENT_ROOT']).'\ProjetTF\Source\actions\gallerie_action.php'; ?>

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

<!-- PRE LOADER -->

<div class="preloader">
    <div class="sk-spinner sk-spinner-wordpress">
        <span class="sk-inner-circle"></span>
    </div>
</div>

<!-- Navigation section  -->

<div class="navbar navbar-static-top" role="navigation">
    <div class="container">

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

<!-- SCRIPTS -->

<script src="../../assets/bsGallerie/js/jquery.js"></script>
<script src="../../assets/bsGallerie/js/bootstrap.min.js"></script>
<script src="../../assets/bsGallerie/js/custom.js"></script>

<?php include('../templates/footer.php');?>