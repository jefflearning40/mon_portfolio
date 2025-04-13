<?php  
// Fonction pour générer un mot de passe aléatoire sans caractères spéciaux  
function generatePassword($length = 12) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; // Retrait des caractères spéciaux  
    $charactersLength = strlen($characters);
    $randomPassword = '';
    
    for ($i = 0; $i < $length; $i++) {
        $randomPassword .= $characters[rand(0, $charactersLength - 1)];
    }
    
    return $randomPassword;
}

// Initialiser le mot de passe et la longueur  
$password = '';
$length = 12; // Longueur par défaut

// Vérifier si le formulaire a été soumis  
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer la longueur du mot de passe à partir du formulaire  
    if (isset($_POST['length']) && is_numeric($_POST['length'])) {
        $length = intval($_POST['length']);
    }
    $password = generatePassword($length);
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Mon Portfolio</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script> <!-- Inclusion de SweetAlert2 -->
    <style>
        .password-display {
            font-size: 3.5rem; /* Taille de la police */
            font-weight: bold; /* Épaisseur de la police */
            font-family: 'Courier New', Courier, monospace; /* Police de caractères */
            color: #007BFF; /* Couleur de la police */
            display: inline-block; /* Nécessaire pour appliquer la transformation */
            animation: rotate 6s infinite; /* Animation de rotation (6 secondes pour ralentir) */
        }

        @keyframes rotate {
            0% {
                transform: rotateY(0deg);
            }
            50% {
                transform: rotateY(180deg);
            }
            100% {
                transform: rotateY(360deg);
            }
        }
    </style>
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

    <div class="container mt-5" style="margin-top: 100px;">
        <h1 class="text-center">Générateur de Mot de Passe</h1>
        <form method="post" class="text-center mt-4">
            <div class="mb-3">
                <label for="length" class="form-label">Longueur du mot de passe :</label>
                <input type="number" id="length" name="length" class="form-control d-inline-block" style="width: auto;" value="<?php echo htmlspecialchars($length); ?>" min="1" max="50" required>
            </div>
            <input type="submit" value="Générer un nouveau mot de passe" class="btn btn-primary">
        </form>
        
        <div class="text-center mt-5">
            <p class="password-display" id="passwordDisplay"><?php echo htmlspecialchars($password); ?></p>
        </div>
        
        <div class="text-center mt-4"> <!-- Nouveau conteneur pour le bouton de copie -->
            <button class="btn btn-success mt-3" onclick="copyToClipboard()">Copier le mot de passe</button>
        </div>
    </div>

    <script>
        function copyToClipboard() {
            const passwordText = document.getElementById("passwordDisplay").innerText; // Récupérer le texte du mot de passe  
            navigator.clipboard.writeText(passwordText).then(() => {
                Swal.fire({
                    title: 'Succès !',
                    text: 'Mot de passe copié dans le presse-papiers !',
                    icon: 'success',
                    confirmButtonText: 'OK'
                }); // Afficher SweetAlert2  
            }, (err) => {
                console.error("Erreur lors de la copie : ", err);
                Swal.fire({
                    title: 'Erreur !',
                    text: 'Échec de la copie du mot de passe.',
                    icon: 'error',
                    confirmButtonText: 'OK'
                });
            });
        }
    </script>

    <script src="script.js"></script>
    <script src="horloge.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>