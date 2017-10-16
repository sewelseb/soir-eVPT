<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title>VPT un cable | VPT</title>
    <!-- Bootstrap core CSS -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Custom styles for this template -->
    <link href="Vues/css/owl.carousel.css" rel="stylesheet">
    <link href="Vues/css/owl.theme.default.min.css"  rel="stylesheet">
    <link href="Vues/css/animate.css" rel="stylesheet">
    <link href="Vues/css/style.css" rel="stylesheet">
</head>
<body id="page-top">
<!-- Navigation -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header bhFont">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class=" " href="#page-top"><span class="bhFont">Soirée VPT</span></a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="hidden">
                    <a href="#page-top"></a>
                </li>
                <li>
                    <a class="page-scroll" href="#page-top">Home</a>
                </li>
                <li>
                    <a class="page-scroll" href="#about">Le thème</a>
                </li>
                <li>
                    <a class="page-scroll" href="#features">Lieu de la soirée</a>
                </li>
                <li>
                    <a class="page-scroll" href="#portfolio">Photos</a>
                </li>
<!--                <li>-->
<!--                    <a class="page-scroll" href="#partners">Partners</a>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <a class="page-scroll" href="#team">Team</a>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <a class="page-scroll" href="#contact">Contact</a>-->
<!--                </li>-->
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>
<!-- Header -->
<header>
    <div class="container-fluid">
        <div class="slider-container">


                <div class="item">
                    <div class="owl-slider-item">
                        <img src="Vues/images/background.jpg" class="img-responsive image-enthete" alt="portfolio"  >
                        <div class="intro-text">
                            <!--<H1 class="Text-Blanc">
                                <a href="http://www.asyouwish.be/vienne/" class="Text-Blanc">
                                    Cliquez ici pour voir les photos de la soirée.<br/>
                                </a>
                            </H1>-->

                            <H1 class="Text-Blanc"><span class="">Obtenir mon invitation</span></H1>

                            <?php
                                if (isset($_SESSION['connexionSuccessful']) && $_SESSION['connexionSuccessful'])
                                {
                                    ?>
                                    <div class="alert alert-success">
                                        <strong>Merci!</strong> Nous avons bien recu votre réponse à la soirée.
                                    </div>
                                    <?php
                                    $_SESSION['connexionSuccessful']=false;
                                }

                            ?>

                            <?php

                            if (isset($_SESSION['code']) && $_SESSION['code']==true)
                            {
                                ?>
                                    <div class="" id="form-de-reponse" >
                                <?php
                            }
                            else
                            {
                                ?>
                                    <div id="code">
                                        <div class="form-group ">
                                            <input class="form-control" placeholder="Code (sur l'invitation)" id="codeInput">
                                        </div>
                                        <div class="form-group ">
                                            <button class="form-control" id="testCode">Envoyer <i class="fa fa-arrow-right"></i></button>
                                        </div>
                                    </div>
                                    <div class="" id="form-de-reponse" hidden>
                                <?php
                            }
                            ?>
                                        <div class="row main-menu">
                                            <div class="col-lg-12 ">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <button class="btn btn-primary btn-lg btn-main btn-code-promo">Code promo</button>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <button class="btn btn-primary btn-lg btn-main btn-rally">Rallye</button>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <button class="btn btn-primary btn-lg btn-main  btn-register-form">Autre</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="from-register-by-code" hidden>
                                            <button class="btn btn-link return-to-main-menu"><i class="fa fa-arrow-left"></i> back</button>
                                            <form name="formulaireDeReponse" id="formulaireDeReponse" action="EnregistrementReponseCodePromo.php" method="POST" >


                                                <div class="form-group col-lg-6">
                                                    <input name="titre"  placeholder="Titre (ex: Comtesse, Monsieur, Baron, ...)" class="form-control " required>

                                                </div>
                                                <div class="form-group col-lg-6">

                                                    <input name="nom"  placeholder="Nom" class="form-control " required>

                                                </div>
                                                <div class="form-group col-lg-6">

                                                    <input name="prenom"  placeholder="Prénom" class="form-control " required>

                                                </div>
                                                <div class="form-group col-lg-6">

                                                    <input name="mail"  placeholder="E-mail" class="form-control " required>
                                                </div>
                                                <div class="form-group col-lg-6">

                                                    <input name="codePromo"  placeholder="Code Promo" class="form-control " required>

                                                </div>

                                                <div class="form-group col-lg-6">

                                                    <input type="submit" value="Envoyer" class="form-control btn btn-primary ">
                                                </div>
                                            </form>
                                        </div>
                                        <div class="from-register-by-rally" hidden>
                                            <button class="btn btn-link return-to-main-menu"><i class="fa fa-arrow-left"></i> back</button>
                                            <form name="formulaireDeReponse" id="formulaireDeReponse" action="EnregistrementReponseRally.php" method="POST" >


                                                <div class="form-group col-lg-6">
                                                    <input name="titre"  placeholder="Titre (ex: Comtesse, Monsieur, Baron, ...)" class="form-control " required>

                                                </div>
                                                <div class="form-group col-lg-6">

                                                    <input name="nom"  placeholder="Nom" class="form-control " required>

                                                </div>
                                                <div class="form-group col-lg-6">

                                                    <input name="prenom"  placeholder="Prénom" class="form-control " required>

                                                </div>
                                                <div class="form-group col-lg-6">

                                                    <input name="mail"  placeholder="E-mail" class="form-control " required>
                                                </div>
                                                <div class="form-group col-lg-6">

                                                    <select class="form-control " required>
                                                        <option value="Ballade">Ballade</option>
                                                        <option value="Nec Plus Ultra">Nec Plus Ultra</option>
                                                        <option value="Txto">Txto</option>
                                                        <option value="Carambole">Carambole</option>
                                                        <option value="Kiliwatch-Pleine Lune">Kiliwatch-Pleine Lune</option>
                                                    </select>

                                                </div>

                                                <div class="form-group col-lg-6">

                                                    <input type="submit" value="Envoyer" class="form-control btn btn-primary ">
                                                </div>
                                            </form>
                                        </div>

                                        <div class="from-register-other" hidden>
                                            <button class="btn btn-link return-to-main-menu"><i class="fa fa-arrow-left"></i> back</button>
                                            <form name="formulaireDeReponse" id="formulaireDeReponse" action="EnregistrementReponse.php" method="POST" >


                                                <div class="form-group col-lg-6">
                                                            <input name="titre" id="titre" placeholder="Titre (ex: Comtesse, Monsieur, Baron, ...)" class="form-control" required>

                                                </div>
                                                <div class="form-group col-lg-6">

                                                    <input name="nom" id="nom" placeholder="Nom" class="form-control" required>

                                                </div>
                                                <div class="form-group col-lg-6">

                                                    <input name="prenom" id="prenom" placeholder="Prénom" class="form-control" required>

                                                </div>
                                                <div class="form-group col-lg-6">

                                                    <input name="mail" id="mail" placeholder="E-mail" class="form-control" required>
                                                </div>
                                                <div class="form-group col-lg-6">

                                                    <span class="Text-Blanc">Présence à la soirée:</span>

                                                    <div class="radio">
                                                        <label class="radio-inline"><input type="radio" name="presence" id="presence" value="true"  > <span class="Text-Blanc">Je viens à la soirée</span> </input> <br/></label>
                                                    </div>
                                                    <div class="radio">
                                                        <label class="radio-inline"><input type="radio" name="presence" id="presence" value="false" > <span class="Text-Blanc">Je  ne viens pas à la soirée</span> </input></label>
                                                    </div>
                                                </div>
                                                <div class="form-group col-lg-6">
                                                    <textarea name="message" id="message" row="400" cols="50" placeholder="Message" class="form-control"></textarea>
                                                </div>
                                                <div class="form-group col-lg-6">

                                                    <input type="submit" value="Envoyer" class="form-control">
                                                </div>
                                            </form>
                                        </div>
                            </div>
                        </div>

                    </div>
                </div>



        </div>
    </div>
</header>
<div class="clearfix">

</div>



<section id="about" class="light-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="section-title">
                    <h2><b class="bhFont"><?php echo $theme; ?></b></h2>
                    <H3 class="bhFont big-font">
                        <b>Vienne, capitale de l’Autriche... Mais aussi pendant longtemps, capitale de l’empire autrichien puis austro-hongrois. Carrefour de l’Europe de l’Est, centre culturel important, la ville a durant cette période rayonné au travers tout le continent européen, tant artistiquement que intellectuellement.</b>
                    </H3>
                    <h3 class="bhFont big-font">
                        <b>Et si vous vous replongiez dans la Vienne d’autrefois ? Et si vous rêviez de vous balader dans les allées du parc du château de Schönbrunn ? Et si vous tendiez l’oreille à la musique des plus grands compositeurs ? Et si vous dansiez sur quelques mesures de valse ? Et si vous preniez un café au Sacher Cafe ? Et si tout cela était possible, ne fut-ce que pour une nuit ? Allons, laissez-vous tenter, laissez-vous surprendre !</b>
                    </h3>
                    <h3 class="bhFont big-font">
                        <b>Bienvenue à Vienne !</b>
                    </h3>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->
</section>

<section id="features" class="section-features">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="section-title">
                    <h2><b class="bhFont">Lieu de la soirée</b></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="section-text">
                    <h4>Adresse du jour: </h4>
                    <p>Palais des Colonies, Avenue des Palais, 3080 Tervuren</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="section-text">
                    <h4>Pour nous contacter:</h4>
                    <p><i class="fa fa-phone"></i> +32 477 24 69 49</p>
                    <p><i class="fa fa-envelope"></i> jlwaucquez@hotmail.com</p>
                </div>
            </div>
            <div class="col-md-6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2520.1465490693363!2d4.513644165912507!3d50.8284493679364!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c3d95b00c7a105%3A0x5153d89cce875dc!2sPalais+des+Colonies!5e0!3m2!1sfr!2sbe!4v1458138714188"  frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</section>

<section id="portfolio" class="light-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="section-title">
                    <h2><b class="bhFont">Photos</b></h2>
                    <p>
                        <a href="http://www.asyouwish.be/vienne/">
                            Les photos de la soirée sont disponibles ici.<br/>
                            http://www.asyouwish.be/vienne/
                        </a>
                    </p>
                </div>
            </div>
        </div>
<!--        <div class="row row-0-gutter">-->
<!--            <!-- start portfolio item -->
<!--            <div class="col-md-4 col-0-gutter">-->
<!--                <div class="ot-portfolio-item">-->
<!--                    <figure class="effect-bubba">-->
<!--                        <img src="Vues/images/demo/portfolio-1.jpg" alt="img02" class="img-responsive" />-->
<!--                        <figcaption>-->
<!--                            <h2>Dean & Letter</h2>-->
<!--                            <p>Branding, Design</p>-->
<!--                            <a href="#" data-toggle="modal" data-target="#Modal-1">View more</a>-->
<!--                        </figcaption>-->
<!--                    </figure>-->
<!--                </div>-->
<!--            </div>-->
<!--            <!-- end portfolio item -->
<!--            <!-- start portfolio item -->
<!--            <div class="col-md-4 col-0-gutter">-->
<!--                <div class="ot-portfolio-item">-->
<!--                    <figure class="effect-bubba">-->
<!--                        <img src="Vues/images/demo/portfolio-2.jpg" alt="img02" class="img-responsive" />-->
<!--                        <figcaption>-->
<!--                            <h2>Startup Framework</h2>-->
<!--                            <p>Branding, Web Design</p>-->
<!--                            <a href="#" data-toggle="modal" data-target="#Modal-2">View more</a>-->
<!--                        </figcaption>-->
<!--                    </figure>-->
<!--                </div>-->
<!--            </div>-->
<!--            <!-- end portfolio item -->
<!--            <!-- start portfolio item -->
<!--            <div class="col-md-4 col-0-gutter">-->
<!--                <div class="ot-portfolio-item">-->
<!--                    <figure class="effect-bubba">-->
<!--                        <img src="Vues/images/demo/portfolio-3.jpg" alt="img02" class="img-responsive" />-->
<!--                        <figcaption>-->
<!--                            <h2>Lamp & Velvet</h2>-->
<!--                            <p>Branding, Web Design</p>-->
<!--                            <a href="#" data-toggle="modal" data-target="#Modal-3">View more</a>-->
<!--                        </figcaption>-->
<!--                    </figure>-->
<!--                </div>-->
<!--            </div>-->
<!--            <!-- end portfolio item -->
<!--        </div>-->
<!--        <div class="row row-0-gutter">-->
<!--            <!-- start portfolio item -->
<!--            <div class="col-md-4 col-0-gutter">-->
<!--                <div class="ot-portfolio-item">-->
<!--                    <figure class="effect-bubba">-->
<!--                        <img src="Vues/images/demo/portfolio-4.jpg" alt="img02" class="img-responsive" />-->
<!--                        <figcaption>-->
<!--                            <h2>Smart Name</h2>-->
<!--                            <p>Branding, Design</p>-->
<!--                            <a href="#" data-toggle="modal" data-target="#Modal-4">View more</a>-->
<!--                        </figcaption>-->
<!--                    </figure>-->
<!--                </div>-->
<!--            </div>-->
<!--            <!-- end portfolio item -->
<!--            <!-- start portfolio item -->
<!--            <div class="col-md-4 col-0-gutter">-->
<!--                <div class="ot-portfolio-item">-->
<!--                    <figure class="effect-bubba">-->
<!--                        <img src="Vues/images/demo/portfolio-5.jpg" alt="img02" class="img-responsive" />-->
<!--                        <figcaption>-->
<!--                            <h2>Fast People</h2>-->
<!--                            <p>Branding, Web Design</p>-->
<!--                            <a href="#" data-toggle="modal" data-target="#Modal-5">View more</a>-->
<!--                        </figcaption>-->
<!--                    </figure>-->
<!--                </div>-->
<!--            </div>-->
<!--            <!-- end portfolio item -->
<!--            <!-- start portfolio item -->
<!--            <div class="col-md-4 col-0-gutter">-->
<!--                <div class="ot-portfolio-item">-->
<!--                    <figure class="effect-bubba">-->
<!--                        <img src="Vues/images/demo/portfolio-6.jpg" alt="img02" class="img-responsive" />-->
<!--                        <figcaption>-->
<!--                            <h2>Kites & Stars</h2>-->
<!--                            <p>Branding, Web Design</p>-->
<!--                            <a href="#" data-toggle="modal" data-target="#Modal-2">View more</a>-->
<!--                        </figcaption>-->
<!--                    </figure>-->
<!--                </div>-->
<!--            </div>-->
<!--            <!-- end portfolio item -->
<!--        </div>-->
    </div><!-- end container -->
</section>




<p id="back-top">
    <a href="#top"><i class="fa fa-angle-up"></i></a>
</p>
<footer>
    <div class="container text-center">
        <p>Site by Sébastien de Beauffort</p>
    </div>
</footer>

<!-- Modal for portfolio item 1 -->
<div class="modal fade" id="Modal-1" tabindex="-1" role="dialog" aria-labelledby="Modal-label-1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="Modal-label-1">Dean & Letter</h4>
            </div>
            <div class="modal-body">
                <img src="Vues/images/demo/portfolio-1.jpg" alt="img01" class="img-responsive" />
                <div class="modal-works"><span>Branding</span><span>Web Design</span></div>
                <p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal for portfolio item 2 -->
<div class="modal fade" id="Modal-2" tabindex="-1" role="dialog" aria-labelledby="Modal-label-2">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="Modal-label-2">Startup Framework</h4>
            </div>
            <div class="modal-body">
                <img src="Vues/images/demo/portfolio-2.jpg" alt="img01" class="img-responsive" />
                <div class="modal-works"><span>Branding</span><span>Web Design</span></div>
                <p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal for portfolio item 3 -->
<div class="modal fade" id="Modal-3" tabindex="-1" role="dialog" aria-labelledby="Modal-label-3">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="Modal-label-3">Lamp & Velvet</h4>
            </div>
            <div class="modal-body">
                <img src="images/demo/portfolio-3.jpg" alt="img01" class="img-responsive" />
                <div class="modal-works"><span>Branding</span><span>Web Design</span></div>
                <p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal for portfolio item 4 -->
<div class="modal fade" id="Modal-4" tabindex="-1" role="dialog" aria-labelledby="Modal-label-4">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="Modal-label-4">Smart Name</h4>
            </div>
            <div class="modal-body">
                <img src="Vues/images/demo/portfolio-4.jpg" alt="img01" class="img-responsive" />
                <div class="modal-works"><span>Branding</span><span>Web Design</span></div>
                <p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal for portfolio item 5 -->
<div class="modal fade" id="Modal-5" tabindex="-1" role="dialog" aria-labelledby="Modal-label-5">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="Modal-label-5">Fast People</h4>
            </div>
            <div class="modal-body">
                <img src="images/demo/portfolio-5.jpg" alt="img01" class="img-responsive" />
                <div class="modal-works"><span>Branding</span><span>Web Design</span></div>
                <p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Music: -->

<audio id="valseAccepte" controls hidden>
    <source src="music/valseAccepte.ogg" type="audio/ogg">
    <source src="music/valseAccepte.mp3" type="audio/mp3">


    Your browser does not support the audio element.
</audio>
<audio id="valseRefus" controls hidden>
    <source src="music/valseRefus.ogg" type="audio/ogg">
    <source src="music/valseRefus.mp3" type="audio/mp3">


    Your browser does not support the audio element.
</audio>



<!-- Bootstrap core JavaScript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script src="Vues/js/owl.carousel.min.js"></script>
<script src="Vues/js/cbpAnimatedHeader.js"></script>
<script src="Vues/js/jquery.appear.js"></script>
<script src="Vues/js/SmoothScroll.min.js"></script>
<script src="Vues/js/theme-scripts.js"></script>
<script src="Vues/js/jqwery.js"></script>
</body>
</html>