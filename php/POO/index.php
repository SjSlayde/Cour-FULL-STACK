<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
class Animal 
{
    public $espece;
    private $taille;
    private $poids;
    private $nbpattes;

    public function manger() {
        // ...
    }

    public function avancer(int $nbpas) {
        // ...
    }
}

//appele de la classe
$oChien = new Animal();

$chien->_espece = "Chien";
$chien->_regimeAlimentaire = "Carnivore";
$chien->_taille = 110;
$chien->_poids = 16000;

class Voiture
{
    public $_marque;
    public $_puissanceFiscale;
    public $_vitesseMax;
    protected $_vitesseCourante;

    public function demarrer()
    {
        echo "je démarre.<br>";
    }

    public function avancer(int $nbKm)
    {
        static $x = 0; //static permet de garder en memoire la viriable meme apres l'arret de la fonction mais impossible de la sortir de la cette meme function tel quelle
        echo "la voiture avance de ".$nbKm." kilomètres.<br>";
    }
} // -- fin de la classe Voiture

// Il nous faut d'abord instancier un objet de la classe
$oVoiture = new Voiture();

// Ensuite seulement on peut appeler les méthodes en passant par l'objet nouvellement créé.
$oVoiture->demarrer();
$oVoiture->avancer(50);
?>
</body>
</html>