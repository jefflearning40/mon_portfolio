<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Portfolio - Python & Arduino</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-success">
        <button class="navbar-toggler me-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <img src="assets/img/logo.png" alt="Logo" class="img-fluid d-inline-block align-top me-2" style="max-width: 80px; height: auto;">
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

<!-- Section des boutons pour PDF -->
<div class="container mt-4">
    <h2 class="text-center">Lire un PDF</h2>
    <div class="text-center">
        <button class="btn btn-primary mb-3 me-3" onclick="openPDF('uploads/documents/asm8080.pdf')">Assembleur 8080</button>
        <button class="btn btn-primary mb-3 me-3" onclick="openPDF('uploads/documents/arduino_lcd.pdf')">Arduino_LCD</button>
        <button class="btn btn-primary mb-3" onclick="openPDF('uploads/documents/password_python.pdf')">Password.py</button>
    </div>
    
    <h3 class="mt-4">Aperçu du PDF :</h3>
    <iframe id="pdfViewer" style="width: 100%; height: 500px;" frameborder="0"></iframe>
</div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="horloge.js"></script>

    <script>
        function openPDF(pdfPath) {
            document.getElementById('pdfViewer').src = pdfPath;
        }
    </script>
</body>
</html>