<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Limelight&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Limelight&family=Lobster&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Limelight&family=Lato&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
    <title>CV | Koky Dramé</title>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="60">

    <nav class="navbar navbar-expand-md navbar-dark sticky-top">
        <a class="navbar-brand" href="#"></a>
            <!-- Toggler/collapsibe Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar">
                <i class="fas fa-bars fa-lg"></i>
            </button>
        <div class="collapse navbar-collapse justify-content-center" id="myNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="#about" class="nav-link">Moi</a>
                </li>
                <li class="nav-item">
                    <a href="#skills" class="nav-link">Compétences</a>
                </li>
                <li class="nav-item">
                    <a href="#experience" class="nav-link">Expériences</a>
                </li>
                <li class="nav-item">
                    <a href="#eductaion" class="nav-link">Education</a>
                </li>
                <li class="nav-item">
                    <a href="#portfolio" class="nav-link">Portfolio</a>
                </li>
                <li class="nav-item">
                    <a href="#recommandations" class="nav-link">Recommandations</a>
                </li>
            </ul>
        </div>
    </nav>

    <section class="container-fluid" id="about">
        <div class="col-xs-8 col-md-4 profile-picture">
            <img src="images/me3.jpeg" alt="Koky" class="rounded-circle">
        </div>
        <div class="heading">
            <h1>Hello, Moi c'est Koky</h1>
            <h3>Passioné de la Programmation</h3>
            <a href="docs/CV koky drame.pdf" class="button1" target="_blank">Télécharger CV</a>
        </div>
    </section>

    <section id="skills">
        <div class="red-divider">
        </div>
        <div class="heading">
            <h2>Compétences</h2>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="85%" aria-valuemin="0" aria-valuemax="100" style="width: 85%;">
                            <h5>HTML 85%</h5>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="85%" aria-valuemin="0" aria-valuemax="100" style="width: 85%;">
                            <h5>CSS 85%</h5>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="40%" aria-valuemin="0" aria-valuemax="100" style="width: 55%;">
                            <h5>JAVASCRIPT 40%</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="45%" aria-valuemin="0" aria-valuemax="100" style="width: 45%;">
                            <h5>JQUERY 45%</h5>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="65%" aria-valuemin="0" aria-valuemax="100" style="width: 65%;">
                            <h5>BOOTSTRAP 65%</h5>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="30%" aria-valuemin="0" aria-valuemax="100" style="width: 45%;">
                            <h5>FLUTTER 30%</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="experience">
        <div class="container">
            <div class="white-divider"></div>
            <div class="heading">
                <h2>Expérience Professionnelle</h2>
            </div>
            <ul class="timeline">
                <li>
                    <div class="timeline-badge"><i class="fas fa-briefcase"></i></div>
                    <div class="timeline-panel-container">
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h3>ASD</h3>
                                <h4>Assistant comptabel</h4>
                                <p class="text-muted"><small><i class="fas fa-clock" aria-hidden="true"></i></small>Juin-Août 2018</p>
                            </div>
                            <div class="timeline-body">
                                <p>Création d'un fichier Excel pour la gestion des versements</p>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="timeline-badge"><i class="fas fa-briefcase"></i></div>
                    <div class="timeline-panel-container-inverted">
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h3>XXXXXXXXX</h3>
                                <h4>----------------</h4>
                                <p class="text-muted"><small><i class="fas fa-clock" aria-hidden="true"></i></small>20xx-20xx</p>
                            </div>
                            <div class="timeline-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="timeline-badge"><i class="fas fa-briefcase"></i></div>
                    <div class="timeline-panel-container">
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h3>XXXXXXXXX</h3>
                                <h4>----------------</h4>
                                <p class="text-muted"><small><i class="fas fa-clock" aria-hidden="true"></i></small>20xx-20xx</p>
                            </div>
                            <div class="timeline-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>

    <section id="eductaion">
        <div class="container">
            <div class="red-divider"></div>
            <div class="heading">
                <h2>éducation</h2>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="education-block">
                        <h5>2006 - 2009</h5>
                        <span class="fas fa-graduation-cap"></span>
                        <h3>Ecole Franco-Arabe Imam Malick</h3>
                        <h4>CFEE</h4>
                        <div class="red-divider"></div>
                        <p>Veni Vidi Vici</p>
                        <p>Discipline et Réussite</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="education-block">
                        <h5>2009 - 2013</h5>
                        <span class="fas fa-graduation-cap"></span>
                        <h3>Ecole Franco-Arabe Fadilou Mbacké</h3>
                        <h4>BFEM</h4>
                        <div class="red-divider"></div>
                        <p>Veni Vidi Vici</p>
                        <p>Discipline et Réussite</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="education-block">
                        <h5>2017</h5>
                        <span class="fas fa-graduation-cap"></span>
                        <h3>Collège Moderne 3ème Millenaire</h3>
                        <h4>Baccalauréat</h4>
                        <div class="red-divider"></div>
                        <p>Veni Vidi Vici</p>
                        <p>Discipline et Réussite</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="portfolio">
        <div class="container">
            <div class="white-divider"></div>
            <div class="heading">
                <h2>Portfolio</h2>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <a href="https://www.facebook.com/koki.drame" class="thumbnail" target="_blank">
                        <img src="images/facebook.jpg" alt="Facebook | Koky Dramé">
                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="https://www.google.com" class="thumbnail" target="_blank">
                        <img src="images/google.jpg" alt="Google">
                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="https://www.twitter.com/kokydrame" class="thumbnail" target="_blank">
                        <img src="images/twitter.jpg" alt="Facebook | Koky Dramé">
                    </a>
                </div>
            </div><br><br>
            <div class="row">
                <div class="col-sm-4">
                    <a href="https://www.linkedin.com/in/koky-drame-29212a115/" class="thumbnail" target="_blank">
                        <img src="images/linkedin.png" alt="LinkedIn | Koky Dramé">
                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="https://github.com/koky-php" class="thumbnail" target="_blank">
                        <img src="images/github.jpg" alt="Github | Koky Dramé">
                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="https://gitlab.com/thiapathioli" class="thumbnail" target="_blank">
                        <img src="images/gitlab.png" alt="Gitlab | Koky Dramé">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="recommandations">
        <div class="container">
            <div class="red-divider"></div>
            <div class="heading">
                <h2>Recommandations</h2>
            </div>
            <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <h3>"Curieux et persévérant, Koky tombe amoureux de toute nouvelle technologie. Il est dynamique est motivé..."</h3>
                        <h4>Al Hussein Sall, Développeur JS</h4>
                    </div>
                    <div class="carousel-item">
                        <h3>"J'adore votre curiosité et votre esprit d'équipe, Koky..."</h3>
                        <h4>Imam Malick Ba, Développeur JS</h4>
                    </div>
                    <div class="carousel-item">
                        <h3>"Devant votre dévouement et votre quête interminable de savoir, je ne peux être qu'admirative..."</h3>
                        <h4>Mame Diarra Niang, Développeuse Web</h4>
                    </div>
                </div>

                <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                    <span class="fas fa-chevron-left fa-2x"></span>
                    <span class="sr-only">Précédent</span>
                </a>
                <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                    <span class="fas fa-chevron-right fa-2x"></span>
                    <span class="sr-only">Suivant</span>
                </a>

            </div>
        </div>
    </section>

    <footer class="text-center">
        <a href="#about"><i class="fas fa-chevron-up"></i></a>
        <h5>&copy; Thiapathioli 2020</h5>
    </footer>

</body>
</html>