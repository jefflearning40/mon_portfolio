<?php  
// Informations de connexion à la base de données  
$host = 'localhost'; 
$dbname = 'messagerie';  
$username = 'root';  
$password = ''; 

// Création de la connexion  
$conn = new mysqli($host, $username, $password, $dbname); 

// Vérifier la connexion  
if ($conn->connect_error) { 
    die("Échec de la connexion : " . $conn->connect_error); 
} 

// Vérifie si le formulaire a été soumis  
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    // Récupérer et échapper les données du formulaire  
    $name = $conn->real_escape_string(trim($_POST['name'])); 
    $email = $conn->real_escape_string(trim($_POST['email'])); 
    $subject = $conn->real_escape_string(trim($_POST['subject'])); 
    $message = $conn->real_escape_string(trim($_POST['message'])); 

    // Générer un code personnel  
    $codePersonnel = rand(1000, 9999); // Code à 4 chiffres  

    // Préparer et exécuter la requête d'insertion  
    $sql = "INSERT INTO messages (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')"; 

    // Vérifie si la requête a été exécutée avec succès  
    if ($conn->query($sql) === TRUE) { 
        // Envoyer un email avec le code personnel  
        $subjectCode = "Votre code secret";
        $messageCode = "Voici votre code secret pour accéder aux fichiers : $codePersonnel";
        mail($email, $subjectCode, $messageCode); // Assurez-vous que la fonction mail() est configurée correctement sur votre serveur

        // Stocker le code dans la session pour une utilisation ultérieure  
        session_start();
        $_SESSION['code'] = $codePersonnel; 

        // Redirection vers contact.php avec un paramètre indiquant le succès  
        header("Location: contact.php?success=1");
        exit(); 
    } else { 
        echo "Erreur : " . $sql . "<br>" . $conn->error; 
    } 
} 

// Fermer la connexion  
$conn->close();