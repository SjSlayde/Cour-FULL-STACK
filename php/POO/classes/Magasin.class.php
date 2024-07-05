<?php
class Magasins
{
   // Propriétés de la classe
   private $_nom;
   private $_adresse;
   private $_codePostal;
   private $_ville;
   private $_restauration;

   // Constructeur de la classe
   public function __construct($nom, $adresse, $codePostal, $ville, $restauration) 
   {
      $this->_nom = $nom;
      $this->_adresse = $adresse;
      $this->_codePostal = $codePostal;
      $this->_ville = $ville;
      $this->_restauration = $restauration;
   }

   // Méthodes pour obtenir les informations
   public function getNom() {
      return $this->_nom;
   }

   public function getAdresse() {
      return $this->_adresse;
   }

   public function getCodePostal() {
      return $this->_codePostal;
   }

   public function getVille() {
      return $this->_ville;
   }

   public function getRestauration() {
      // Vérifie si le magasin dispose d'un restaurant
      if ($this->_restauration == 'Yes') {
         return 'Oui, il y a un restaurant dans le magasin';
      } elseif ($this->_restauration == 'No') {
         return "Non, il n'y a pas de restaurant dans le magasin, donc les employés doivent avoir des tickets restaurants";
      } else {
         return "Veuillez renseigner le champ restauration par Yes ou No";
      }
   }
}
?>
