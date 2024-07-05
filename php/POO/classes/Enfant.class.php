<?php
class Primaire
{
   // Propriétés de la classe
   private $_existance;
   private $_age;

   // Constructeur de la classe
   public function __construct($existance, $age) 
   {
      $this->_existance = $existance;
      $this->_age = $age;
   }

   // Méthode pour obtenir le ticket
   public function getTicket()
   {
      // Vérifie si l'existence est "OUI"
      if ($this->_existance == 'OUI') {
         // Vérifie l'âge et retourne le message correspondant
         if ($this->_age >= 0 && $this->_age <= 10) {
            return 'Enfant de ' . $this->_age . ' droit à une prime de 20 euros';
         } elseif ($this->_age >= 11 && $this->_age <= 15) {
            return 'Enfant de ' . $this->_age . ' droit à une prime de 30 euros';
         } elseif ($this->_age >= 16 && $this->_age <= 18) {
            return 'Enfant de ' . $this->_age . ' droit à une prime de 50 euros';
         } else {
            return 'Adulte';
         }
      } else {
         return 'Pas d\'enfant';
      }
   }
} 
?>
