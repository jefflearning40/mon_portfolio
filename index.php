<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css">
    <title>Mon Portfolio</title>
   
</head>
<body>
   

    
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-success fixed-top">
        <button class="navbar-toggler me-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <img src="assets/img/logo.png" alt="Logo" class="img-fluid" style="max-width: 80px; height: auto;" class="d-inline-block align-top me-2">
        <a class="navbar-brand text-warning" href="#">Mon Portfolio</a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white d-flex align-items-center" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="assets/img/icon_IA.png" alt="Icon IA" style="width: 24px; height: 24px; margin-right: 5px;">
                    Recherche IA
                     </a>
                     <ul class="dropdown-menu custom-dropdown" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="creation_images.php">images crées</a></li>
                        <li><a class="dropdown-item" href="python_arduino_pdf.php">Python/Arduino pdf</a></li>
                        <li><a class="dropdown-item" href="cadenas.php">Password Generator</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="cv.php">Mon CV</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="contact.php">Contact</a>
                </li>
            </ul>
            <div class="text-white me-3" id="clock"></div> <!-- Horloge -->
            <div class="text-white" id="calendar"></div> <!-- Calendrier -->
        </div>
    </nav>

    <!-- En-tête -->
    <header class="text-white text-center py-5">
        <div class="container">
        <h1 class="display-4 custom-title">Bienvenue sur mon Portfolio</h1>
            <p class="lead">Decouvrez mes competences et projets.</p>
            <a href="cv.php" class="btn btn-warning btn-lg">Voir mon CV</a>
        </div>
    </header>

    <!-- Section des projets -->
    <section class="py-5">
        <div class="container">
            <h2 class="text-center py-4">Mes Projets</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img src="assets/img/sites web.jpg" class="card-img-top project-image" alt="Projet 1">
                        <div class="card-body">
                            <h5 class="card-title">Formation Web-Developeur</h5>
                            <p class="card-text">Créattion de sites Web.</p>
                            <a href="#carouselprojet1" class="btn btn-primary ">En savoir plus</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="assets/img/arduino1.jpg" class="card-img-top project-image" alt="Projet 2">
                        <div class="card-body">
                            <h5 class="card-title">Domotique</h5>
                            <p class="card-text">Programmation arduino.</p>
                            <a href="#projet3" class="btn btn-primary">Réalisations</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="assets/img/3d.jpg" class="card-img-top project-image" alt="Projet 3">
                        <div class="card-body">
                            <h5 class="card-title">Fusion360 et inkscape</h5>
                            <p class="card-text">club fablab iprimante 3D et decoupe.</p>
                            <a href="#carouselprojet2" class="btn btn-primary">Images</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ...................................................................projet 1........................................................................................ -->
    <!-- Carrousel -->
   
<section class="py-5 caroussel-section text-center">
    <div id="carouselprojet1" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
        <div class="carousel-item active" style="position: relative;">
    <img src="assets/img/LogoAFEC.png" class="d-block w-50 mx-auto" alt="LogoAfec.png">
    <div class="carousel-caption d-none d-md-block" style="position: absolute; bottom: 10px; left: 50%; transform: translateX(-50%);"> 
        <p class="text-dark">
            <a href="https://www.afec.fr/" target="_blank" class="text-dark"><h3>Afec.com</h3></a>
        </p>
    </div>
</div>
            <div class="carousel-item">
                <img src="assets/img/outildeveloppe.PNG" class="d-block w-50 mx-auto" alt="outildeveloppe.PNG">
            </div>
            <div class="carousel-item">
                <img src="assets/img/customer-server.webp" class="d-block w-50 mx-auto" alt="customer-server.webp">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselprojet1" data-bs-slide="prev">
    <img src="assets/img/gauche.png" alt="Précédent" style="width: 30px; height: 30px;"> <!-- Remplacez avec le chemin de votre image -->
    <span class="visually-hidden">Précédent</span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#carouselprojet1" data-bs-slide="next">
    <img src="assets/img/droite.png" alt="Suivant" style="width: 30px; height: 30px;"> <!-- Remplacez avec le chemin de votre image -->
    <span class="visually-hidden">Suivant</span>
</button>
    </div>
</section>

   
     <!-- ...................................................................projet 2........................................................................................ -->
    <!-- Carrousel les realisations-->
    <section class="py-5 caroussel-section text-center">
    <div id="carouselprojet2" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" style="position: relative;">
                <img src="assets/img/impression3D.jpg" class="d-block w-50 mx-auto" alt="impression3D">
            </div>
            <div class="carousel-item">
                <img src="assets/img/gravure_decoupe_laser.jpg" class="d-block w-50 mx-auto" alt="gravure_decoupe_laser">
            </div>
            <div class="carousel-item">
                <img src="assets/img/travaillaser1.png " class="d-block w-50 mx-auto" alt="travaillaser1">
            </div>
            <div class="carousel-item">
                <img src="assets/img/tyrolienne2.PNG" class="d-block w-50 mx-auto" alt="image3home">
            </div>
            <div class="carousel-item">
                <img src="assets/img/tyrolienne3.PNG" class="d-block w-50 mx-auto" alt="image3home">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselprojet2" data-bs-slide="prev">
    <img src="assets/img/gauche.png" alt="Précédent" style="width: 30px; height: 30px;"> <!-- Remplacez avec le chemin de votre image -->
    <span class="visually-hidden">Précédent</span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#carouselprojet2" data-bs-slide="next">
    <img src="assets/img/droite.png" alt="Suivant" style="width: 30px; height: 30px;"> <!-- Remplacez avec le chemin de votre image -->
    <span class="visually-hidden">Suivant</span>
</button>
    </div>
</section>
<!---------------------------------------------------------------------projet 3-------------------------------------------------  -->
<h1 class="text-center py-4">Les Projets Arduinos</h1>
<div class="container" id="projet3">
    <div class="row">
        <!-- Photo 1 -->
        <div class="col-md-4">
            <div class="card" > 
            <img src="assets/img/photo1.jpg" class="card-img-top project-image" alt="Projet 1" onclick="showImage(this.src, 'Atelier')">
                <div class="card-body">
                    <h5 class="card-title">Atelier</h5>
                    <p class="card-text">Composants électronique.</p>
                   
                </div>
            </div>
        </div>

        <!-- Photo 2 -->
        <div class="col-md-4">
            <div class="card" id="projet2">
            <img src="assets/img/photo2.jpg" class="card-img-top project-image" alt="Projet 2" onclick="showImage(this.src, 'Atelier')">
                <div class="card-body">
                    <h5 class="card-title">Atelier</h5>
                    <p class="card-text">Composants Arduino.</p>
                   
                </div>
            </div>
        </div>

        <!-- Photo 3 -->
        <div class="col-md-4">
            <div class="card" id="projet3">
                <img src="assets/img/photo3.jpg" class="card-img-top project-image" alt="Projet 3" onclick="showImage(this.src, 'Atelier Test')">
                <div class="card-body">
                    <h5 class="card-title">Atelier test</h5>
                    <p class="card-text">test carte Arduino uno.</p>
                </div>
            </div>
        </div>

        <!-- Photo 4 -->
        <div class="col-md-4">
            <div class="card" id="projet4">
                <img src="assets/img/photo4.jpg" class="card-img-top project-image" alt="Projet 4" onclick="showImage(this.src, 'Atelier mesure')">
                <div class="card-body">
                    <h5 class="card-title">Atelier Mesure</h5>
                    <p class="card-text">Controle oscilloscope.</p>
                    
                </div>
            </div>
        </div>

        <!-- Photo 5 -->
        <div class="col-md-4">
            <div class="card" id="projet5">
                <img src="assets/img/photo5.jpg" class="card-img-top project-image" alt="Projet 5" onclick="showImage(this.src, 'Programmation')">
                <div class="card-body">
                    <h5 class="card-title">Atelier Programmation</h5>
                    <p class="card-text">Utilisation de C++.</p>
                  
                </div>
            </div>
        </div>

        <!-- Photo 6 -->
        <div class="col-md-4">
            <div class="card" id="projet6">
                <img src="assets/img/photo6.jpg" class="card-img-top project-image" alt="Projet 6" onclick="showImage(this.src, 'Découverte')">
                <div class="card-body">
                    <h5 class="card-title">Programmation</h5>
                    <p class="card-text">Exemple de code C++.</p>
                    
                </div>
            </div>
        </div>

        <!-- Photo 7 -->
        <div class="col-md-4">
            <div class="card" id="projet7">
                <img src="assets/img/photo7.jpg" class="card-img-top project-image" alt="Projet 7" onclick="showImage(this.src, 'Découverte')">
                <div class="card-body">
                    <h5 class="card-title">Atelier Découverte</h5>
                    <p class="card-text">Affichages LCD.</p>
                    
                </div>
            </div>
        </div>

        <!-- Photo 8 -->
        <div class="col-md-4">
            <div class="card" id="projet8">
                <img src="assets/img/photo8.jpg" class="card-img-top project-image" alt="Projet 8" onclick="showImage(this.src, 'Conception')">
                <div class="card-body">
                    <h5 class="card-title">Atelier Découverte</h5>
                    <p class="card-text">Relais et LCD.</p>
                    
                </div>
            </div>
        </div>

        <!-- Photo 9 -->
        <div class="col-md-4">
            <div class="card" id="projet9">
                <img src="assets/img/photo9.jpg" class="card-img-top project-image" alt="Projet 9" onclick="showImage(this.src, 'Recherche')">
                <div class="card-body">
                    <h5 class="card-title">Recherche et Conception</h5>
                    <p class="card-text">LCD et Serrure codée.</p>
                    
                </div>
            </div>
        </div>
    </div>
    <div id="imageDisplay" class="image-display">
    <h2 id="imageTitle"></h2>
    <img id="largeImage" src="" alt="" />
    <a href="#projet3" class="btn btn-success text-white">
        <img src="assets/img/retour.png" alt="" class="w-25"> 
    </a>
</div>

<!-- Pied de page -->
<footer class="text-center py-1 text-white bg-primary">
        <div class="container-fluid">
            <p>&copy; 2025 Mon Portfolio. Tous droits réservés.</p>
        </div>
    </footer>
    <script src="script.js"></script>
    <script src="horloge.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>