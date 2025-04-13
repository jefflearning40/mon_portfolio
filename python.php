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
                        <li><a class="dropdown-item" href="arduino.php">Arduino</a></li>
                        <li><a class="dropdown-item" href="python.php">Programmes python</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="index.php">Acceuil</a>
                </li>
                
            </ul>
            <div class="text-white me-3" id="clock"></div> <!-- Horloge -->
            <div class="text-white" id="calendar"></div> <!-- Calendrier -->
        </div>
    </nav>
    <?php
// Création d'un conteneur Python
$container = new DockerContainer('python:3.9-slim');

// Copie du fichier Python dans le conteneur
$container->copy('votre_fichier.py', '/app/votre_fichier.py');

// Exécution du fichier Python
$container->run('python /app/votre_fichier.py');
?>

    <script src="script.js"></script>
    <script src="horloge.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
