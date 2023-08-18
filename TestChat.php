
<!DOCTYPE html>
<html>
<head>
    <style>
        /* Style pour le bouton */
        .button {
            display: inline-block;
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 8px;
        }

        /* Au survol du bouton */
        .button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>


<!-- Utilisation du bouton stylisé avec le lien vers votre page PHP ! -->
<a href="Index.php" class="button">Aller vers la page Index</a>

</body>
</html>
<br>

<br>
<?php



// Importe la définition de la classe Chat à partir du fichier Chat.php
require_once 'Chat.php';

// Crée une instance de Chat avec le nom "Tigris"
$monChat = new Chat("Tigris");

// Appelle la méthode pour augmenter les vies du chat deux fois
$monChat->prochaineVie();
$monChat->prochaineVie();

// Obtenir le nombre total de chats créés en utilisant la méthode statique
$nbChats = Chat::getNbChats();

// Affiche le nombre total de chats créés
echo "Il y a $nbChats chats <br>";



// Affiche le nombre de vies du chat spécifique que vous avez créé
echo "Mon chat a eu {$monChat->getVie()} vies <br>";


setcookie("langue","fr");  // Créer des témoins, (peut être dans une autre page)
echo "Langue {$_COOKIE["langue"]}";	// Accéder aux témoins, (peut être dans une autre page)

echo "<br>";

session_start();
echo $_SESSION["couleur"];

?>

