<?php  
session_start(); // Démarrer la session  
$codePersonnel = isset($_SESSION['code']) ? $_SESSION['code'] : ''; // Récupérer le code de session  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
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
                    <a class="nav-link text-white" href="cv.php">Mon CV</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="file.php">Fichiers</a>
                </li>
            </ul>
            <div class="text-white me-3" id="clock"></div> <!-- Horloge -->
            <div class="text-white" id="calendar"></div> <!-- Calendrier -->
        </div>
    </nav>

    <!-- Contenu de la page de contact -->
    <div class="container mt-3">
        <h1 class="text-center">Contactez-moi</h1>
        <h3 class="text-center">Je serais ravi de recevoir vos messages</h3>

        <form action="process_contact.php" method="POST" class="text-center">
            <div class="mb-3 row">
                <label for="name" class="col-sm-2 col-form-label text-end label-bold">Nom</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control input-gray" name="name" id="name" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="email" class="col-sm-2 col-form-label text-end label-bold">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control input-gray" name="email" id="email" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="subject" class="col-sm-2 col-form-label text-end label-bold">Sujet</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control input-gray" name="subject" id="subject" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="message" class="col-sm-2 col-form-label text-end label-bold">Message</label>
                <div class="col-sm-10">
                    <textarea class="form-control input-gray" name="message" id="message" rows="4" required></textarea>
                </div>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Envoyer</button>
            </div>
        </form>
        <div class="text-center mt-3">
            <button id="deleteMessage" class="btn btn-danger">Supprimer le dernier message</button>
        </div>
    </div>

    <!-- Options JavaScript de Bootstrap (facultatif) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
    <script src="script.js"></script>
    <script src="horloge.js"></script>
    <script src="confirm.js"></script>
    <script src="suppression.js"></script>

    <script>
        // Rendre le code accessible en JavaScript  
        window.codePersonnel = "<?php echo $codePersonnel; ?>"; 
    </script>
</body>
</html>