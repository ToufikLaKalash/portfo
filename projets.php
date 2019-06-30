<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Projets - GISSELMANN Olivier</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="L'ensemble de mes projets et réalisations" />
	<meta name="author" content="GISSELMANN Olivier" />

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Oxygen:300,400" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
        <nav class="fh5co-nav" role="navigation">
            <div class="container-wrap">
                <div class="top-menu">
                    <div class="row">
                        <div class="col-xs-2">
                            <div id="fh5co-logo"><a href="index.php">Portfolio</a></div>
                        </div>
                        <div class="col-xs-10 text-right menu-1">
                            <ul>
                                <li><a href="index.php">Accueil</a></li>
                                <li class="active"><a href="projets.php">Projets</a></li>
                                <li><a href="présentation.php">Présentation</a></li>
                                <li><a href="contact.php">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
	<div class="container-wrap">
		<aside id="fh5co-hero">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url(images/img_bg_3.jpg);">
			   		<div class="overlay-gradient"></div>
		   			<div class="row">
			   			<div class="col-md-6 col-md-offset-3 slider-text slider-text-bg">
			   				<div class="slider-text-inner text-center">
			   					<h1>Mes Projets</h1>
									<h2>Vous pouvez trouver ici la liste de tous mes projets réalisés récemment.</h2>
			   				</div>
			   			</div>
			   		</div>
			   	</li>		   	
			  	</ul>
		  	</div>
		</aside>		
		<div id="fh5co-work">
			<div class="row">
                <?php
                require "App/ProjetsReview.php";
                require 'App/Projets.php';

                if(isset($_GET['id']) && !empty($_GET['id'])){
                    $projet = new Projets($_GET['id']);
                    echo $projet->createProject();
                }else{

                    $p1 = new ProjetsReview(1, 'Projet UF Infra', '2018 - 2019', 'images/projets-1.jpg');
                    echo $p1->createPreview('Projet orienté infrastructure réseau et conception.');

                    $p2 = new ProjetsReview(2, 'Projet UF Dev', '2018 - 2019', 'images/projets-2.jpg');
                    echo $p2->createPreview('Projet orienté objets connectés et développement.');

                    $p3 = new ProjetsReview(3, 'Projet UF Web', '2018 - 2019', 'images/projets-3.jpg');
                    echo $p3->createPreview('Projet orienté conception et réalisation d\'une application web.');

                    $p4 = new ProjetsReview(4, 'Projet BAC', '2017 - 2018', 'images/projets-4.jpg');
                    echo $p4->createPreview('Projet de BAC visant à réaliser et automatiser une serre hydroponique.');

                    $p5 = new ProjetsReview(5, 'Projet YDays', '2018 - 2019', 'images/projets-5.jpg');
                    echo $p5->createPreview('Projet de start-up visant à concevoir et attaquer un site web présentant des failles');

                    $p5 = new ProjetsReview(5, 'Projet test', '2099 - 2099', 'images/projets-4.jpg');
                    echo $p5->createPreview('Projet de test');
                }
                ?>
			</div>
		</div>
	</div><!-- END container-wrap -->

	<div class="container-wrap">
        <footer id="fh5co-footer" role="contentinfo">
            <div class="row">
                <div class="col-md-3 fh5co-widget">
                    <h4>A Propos de moi</h4>
                    <p>Actuellement étudiant en informatique dans l'école d'Ynov Aix.</p>
                </div>
                <div class="col-md-3 col-md-push-1">
                    <h4>Parcours scolaire</h4>
                    <ul class="fh5co-footer-links">
                        <li>Ingésup Ynov - Aix-en-Provence | 2018 - Maintenant</li>
                        <li>Lycée Adam de Craponne - Salon de Provence | 2015 - 2018</li>
                        <li>Collège Viala Lacoste - Salon de Provence | 2011 - 2015</li>
                        <li>Ecole primaire Les Bressons - Salon de Provence | 2006 - 2011</li>
                    </ul>
                </div>

                <div class="col-md-3 col-md-push-1">
                    <h4>Liens</h4>
                    <ul class="fh5co-footer-links">
                        <li><a href="index.php">Accueil</a></li>
                        <li><a href="projets.php">Projets</a></li>
                        <li><a href="présentation.php">Présentation</a></li>
                        <li><a href="contact.php">Contact</a></li>
                        <li><a href="admin.php">Admin</a></li>
                    </ul>
                </div>

                <div class="col-md-3">
                    <h4>Informations de contact</h4>
                    <ul class="fh5co-footer-links">
                        <li>4 Avenue du 8 mai, <br> 13090 Aix-en-Provence</li>
                        <li><a href="tel://0783706410">07 83 70 64 10</a></li>
                        <li><a href="mailto:olivier.gisselmann@ynov.com">olivier.gisselmann@ynov.com</a></li>
                    </ul>
                </div>

            </div>

            <div class="row copyright">
                <div class="col-md-12 text-center">
                    <p>
                        <small class="block">&copy; 2019 GISSELMANN. Tous Droits Réservés.</small>
                    </p>
                    <p>
                    <ul class="fh5co-social-icons">
                        <li><a href="#"><i class="icon-twitter"></i></a></li>
                        <li><a href="#"><i class="icon-facebook"></i></a></li>
                        <li><a href="https://www.linkedin.com/in/olivier-gisselmann/"><i class="icon-linkedin"></i></a></li>
                    </ul>
                    </p>
                </div>
            </div>
        </footer>
	</div><!-- END container-wrap -->
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Counters -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>

