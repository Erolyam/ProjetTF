<?php include('../templates/header.php'); ?>
<?php include '../../actions/gallerie_action.php'; ?>


    <link rel="stylesheet" href="../../assets/bsGallerie/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/bsGallerie/css/font-awesome.min.css">


    <link rel="stylesheet" href="../../assets/bsGallerie/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,700" rel="stylesheet">
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
    <div class="copyrights">Template by Magnet Studio</div>
    <section id="portfolio">
        <div class="container">
            <div class="row">

                <?php foreach ($listArtwork as $data) {
                    ?>
                    <div class="col-md-4 col-sm-6">
                        <a href="../../actions/AllArtwork.php?idArtwork=<?php echo $data['idArtwork']; ?>">
                            <div class="portfolio-thumb">
                                <img src="<?php echo $data['artwork_picture']; ?>" class="img-responsive"
                                     alt="Portfolio">
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



<?php include('../templates/footer.php'); ?>