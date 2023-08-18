<!DOCTYPE html>
<html>
<head>
    <title>Test PHP</title>
</head><!--allo-->





<body>

Lien vers une page PHP :
<a href="TestChat.php">Page des chats</a>


<br>
<?php echo '<p>Bonjour le monde</p>'; //ligne de php?>


<?php
session_start();
$_SESSION["couleur"] = "vert";
?>


<h1>Variables</h1>
<?php
$nom = "Martin";
$age = 45;
echo "Mon nom est $nom et j'ai $age ans.";
?>

</br>
<h1>Les Heures</h1>
<?php
// Définissez le fuseau horaire sur "America/Toronto"
date_default_timezone_set('America/Toronto');

// Obtenez la date et l'heure actuelles
$dateActuelle = new DateTime();

// Affichez l'heure avancée de l'Est (EDT)
echo "Heure avancée de l'Est (Canada) : " . $dateActuelle->format('d M y H:i:s');
?>

</br>

<h1>Les opérations</h1>
<?php

$nb1 = 10;
$nb2 = 5;

echo "La multiplication de $nb1 et $nb2 est " . ($nb1 * $nb2);
?>

</br>

<h1>Les Heures</h1>
<?php
// Obtenez la date et l'heure actuelles de l'ordinateur
$dateActuelle = new DateTime();

// Affichez l'heure locale de l'ordinateur
echo "Heure locale de l'ordinateur : " . $dateActuelle->format('Y-m-d H:i:s');
?>

</br>

<h1>Les tableaux</h1>

<?php //Les tableaux

$tableau1 = array("un", "deux", "trois");

echo $tableau1[0]; // affiche "un"

?>

</br>

<h1>Les dictionnaires</h1>

<?php //Les dictionnaires

$animaux = array(   		//Dictionnaires
 "chat" => "Tigris",
 "oiseau" => "Peruche"
);

echo $animaux["chat"]; // affiche "Tigris"

$tableau2[] = 3; // ajoute 3 à la fin du tableau
echo $tableau2[0]. "<br>";// le point sert a concatener

$couleurs = array("rouge", "vert", "bleu");
foreach ($couleurs as $couleur) {
    echo "Aimez-vous la couleur $couleur ?"; // affiche "Aimez-vous la couleur rouge ?", etc.
}

echo "<br>"; // Séparation

foreach ($animaux as $animal => $nom) {
    echo "Le $animal s'appelle $nom"; // affiche "Le chat s'appelle Tigris", etc.
}
?>



</br>

<h1>Les fonctions</h1>

<?php
function direBonjour(string $nom = ''): string
{
    return "Bonjour $nom";
}

function direEnchanter(string $enchante = ''): string
{
    return "Enchanté $enchante";
}
echo direBonjour();			//Appeler la fonction
echo "<br>";
echo direBonjour("Maryse");
echo "<br>"; // Séparation
echo direBonjour("Martin");

?>

</br>

<h1>Les classes</h1>

<?php

// Définition de la classe Chat
class Chat
{
    // Propriétés privées de la classe
    private int $vie = 0; // Le nombre de vies du chat (initialisé à 0)
    private string $nom; // Le nom du chat
    private const MAX_VIES = 9; // Le nombre maximum de vies pour le chat (constante de la classe)
    private static int $nbChats = 0; // Le nombre total de chats créés (statique)

    // Constructeur de la classe
    public function __construct(string $nom)
    {
        $this->nom = $nom; // Initialise le nom du chat
        self::$nbChats++; // Incrémente le compteur de chats créés
    }

    // Méthode pour augmenter les vies du chat
    public function prochaineVie(): void
    {
        if ($this->vie < self::MAX_VIES) {
            $this->vie++; // Augmente le nombre de vies du chat s'il n'a pas atteint le maximum
        }
    }

    // Méthode pour obtenir le nombre de vies actuelles du chat
    public function getVie(): int
    {
        return $this->vie; // Renvoie le nombre de vies du chat
    }

    // Méthode statique pour obtenir le nombre total de chats créés
    public static function getNbChats(): int
    {
        return self::$nbChats; // Renvoie le nombre total de chats créés(self :: veut dire que c'est une variable statique de la classe)
    }
}

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

?>

</br>

<?php

echo "Langue (cookie) {$_COOKIE["langue"]}";	// Accéder aux témoins

?>
</body>
</html>

