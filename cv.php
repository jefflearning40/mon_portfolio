<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon CV</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-success">
        <button class="navbar-toggler me-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <img src="assets/img/logo.png" alt="Logo" class="img-fluid" style="max-width: 80px; height: auto;" class="d-inline-block align-top me-2">
        <a class="navbar-brand text-warning" href="#">Mon Portfolio</a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link text-white" href="index.php">Accueil <span class="visually-hidden">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="file.php">Fichiers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="contact.php">Contact</a>
                </li>
            </ul>
            <div class="text-white me-3" id="clock"></div> <!-- Horloge -->
            <div class="text-white" id="calendar"></div> <!-- Calendrier -->
        </div>
    </nav>

    <div class="container mt-3">
        <h1 class="text-center">Mon CV</h1>
        <h3 class="text-center">Réalisé avec CvDesigner</h3>
        <h4 class="text-center">
        <a href="https://cvdesignr.com/fr" target="_blank" rel="noopener noreferrer"> <!-- Lien modifié -->
            <img src="assets/img/logoCV.PNG" alt="">Visiter leur site  
        </a>
        <!-- Intégration du PDF -->
        <div class="text-center">
            <iframe src="assets/img/CV_2024-08-28_JEAN-FRANCOIS_LE DEUNF.pdf" style="width: 100%; height: 700px;" frameborder="0">
                Ce navigateur ne supporte pas l'affichage des PDF. Vous pouvez <a href="assets/img/CV_2024-08-28_JEAN-FRANCOIS_LE DEUNF.pdf">télécharger le CV ici</a>.
            </iframe>
        </div>
        
        <!-- Bouton de téléchargement -->
        <div class="text-center mt-4">
            <a href="assets/img/CV_2025-02-22_JEAN-FRANCOIS_LE DEUNF.pdf" class="btn btn-primary" download>Télécharger Mon CV</a>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>
    <script src="horloge.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>