<!DOCTYPE html>
<html lang="en">

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<title>Numéro Number One</title>

    <link href="<?php echo base_url("assets/bootstrap/dist/css/bootstrap.css"); ?>" rel="stylesheet">
    <link href="<?php echo base_url("assets/bootstrap/dist/css/font-awesome.min.css"); ?>" rel="stylesheet">
    <link href="<?php echo base_url("assets/bootstrap/dist/css/style.css"); ?>" rel="stylesheet">

<!-- Main css -->
<link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,700" rel="stylesheet">

<body>
    <nav class="navbar navbar-inverse">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="<?php echo base_url(); ?>">Numéro #1</a>
            </div>
            <div id="navbar">
                <ul class="nav navbar-nav">
                    <li><a href="<?php echo base_url(); ?>Artwork">Galerie</a></li>
                    <li><a href="<?php echo base_url(); ?>Classement">Classement</a></li>
                    <li><a href="<?php echo base_url(); ?>Administration">Administration</a></li>

                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <?php if(!$this->session->userdata('logged_in')) : ?>
                        <li><a href="<?php echo base_url(); ?>users/login">Se connecter</a></li>
                        <li><a href="<?php echo base_url(); ?>users/register">Créer un compte</a></li>
                    <?php endif; ?>
                    <?php if($this->session->userdata('logged_in')) : ?>


                        <li><a href="<?php echo base_url(); ?>posts/create">Ajouter une oeuvre</a></li>
                        <li><a href="<?php echo base_url(); ?>categories/create">Créer une catégorie</a></li>
                        <li><a href="<?php echo base_url(); ?>users/logout">Déconnexion</a></li>
                        <li ><a href="#" style="color:yellow" ><?php  echo $this->session->userdata('username') ;?></a></li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>


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
               <a href="index.html" class="navbar-brand"><i class="fa fa-magnet"></i></a>
          </div>
          <div class="collapse navbar-collapse">
               <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="index.html">Menu1</a></li>
                    <li><a href="about.html">Menu2</a></li>
                    <li><a href="blog.html">Menu3</a></li>
                    <li><a href="contact.html">Menu4</a></li>
               </ul>
          </div>

  </div>
</div>

<!-- Home Section -->

<section id="home">
     <div class="container">
          <div class="row">

               <div class="col-md-12 col-sm-12">
                    <h2>GALERIE</h2>
                    <hr>
               </div>

          </div>
     </div>
</section>

<!-- Portfolio Section -->
<div class="copyrights"></div>
<section id="portfolio">
     <div class="container">
          <div class="row">

               <div class="col-md-4 col-sm-6">
                    <a href="single-project.html">
                         <div class="portfolio-thumb">
                              <img src="images/portfolio-img1.jpg" class="img-responsive" alt="Portfolio">
                                   <div class="portfolio-overlay">
                                        <div class="portfolio-item">
                                             <h3>Project Name</h3>
                                             <small>Brand Identity</small>
                                        </div>
                                   </div>
                         </div>
                    </a>
               </div>

               <div class="col-md-4 col-sm-6">
                    <a href="single-project.html">
                         <div class="portfolio-thumb">
                              <img src="images/portfolio-img2.jpg" class="img-responsive" alt="Portfolio">
                                   <div class="portfolio-overlay">
                                        <div class="portfolio-item">
                                             <h3>Project Name</h3>
                                             <small>Web Development</small>
                                        </div>
                                   </div>
                         </div>
                    </a>
               </div>

               <div class="col-md-4 col-sm-6">
                    <a href="single-project.html">
                         <div class="portfolio-thumb">
                              <img src="images/portfolio-img3.jpg" class="img-responsive" alt="Portfolio">
                                   <div class="portfolio-overlay">
                                        <div class="portfolio-item">
                                             <h3>Project Name</h3>
                                             <small>Mobile App</small>
                                        </div>
                                   </div>
                         </div>
                    </a>
               </div>

               <div class="col-md-4 col-sm-6">
                    <a href="single-project.html">
                         <div class="portfolio-thumb">
                              <img src="images/portfolio-img4.jpg" class="img-responsive" alt="Portfolio">
                                   <div class="portfolio-overlay">
                                        <div class="portfolio-item">
                                             <h3>Project Name</h3>
                                             <small>Logo Design</small>
                                        </div>
                                   </div>
                         </div>
                    </a>
               </div>

               <div class="col-md-4 col-sm-6">
                    <a href="single-project.html">
                         <div class="portfolio-thumb">
                              <img src="images/portfolio-img5.jpg" class="img-responsive" alt="Portfolio">
                                   <div class="portfolio-overlay">
                                        <div class="portfolio-item">
                                             <h3>Project Name</h3>
                                             <small>Social marketing</small>
                                        </div>
                                   </div>
                         </div>
                    </a>
               </div>

               <div class="col-md-4 col-sm-6">
                    <a href="single-project.html">
                         <div class="portfolio-thumb">
                              <img src="images/portfolio-img6.jpg" class="img-responsive" alt="Portfolio">
                                   <div class="portfolio-overlay">
                                        <div class="portfolio-item">
                                             <h3>Project Name</h3>
                                             <small>Fyler Design</small>
                                        </div>
                                   </div>
                         </div>
                    </a>
               </div>



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
                    <p>projet TF<br/>groupe 5</p>
               </div>

               <div class="col-md-offset-1 col-md-4 col-sm-offset-1 col-sm-3">
                   <p>Ibrahim Akrach<br/>Quentin Guillien<br/>Sammy Loudiyi<br/>Diego Romero Rodriguez<br/>Bilal<br/>Yiwei Pang</p>
               </div>

               <div class="clearfix col-md-12 col-sm-12">
                    <hr>
               </div>

               <div class="col-md-6 col-sm-6">
                    <div class="footer-copyright">
                        <p>Templates by Magnet Studio</p>
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

<script src="<?php echo base_url("assets/bootstrap/dist/js/jquery.js"); ?>"></script>
<script src="<?php echo base_url("assets/bootstrap/dist/js/bootstrap.min.js"); ?>"></script>
<script src="<?php echo base_url("assets/bootstrap/dist/js/custom.js"); ?>"></script>

</body>
</html>