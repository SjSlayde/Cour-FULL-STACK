<?php
require_once('Personnage.class.php');
require_once('Employe.class.php');
require_once('Magasin.class.php');
require_once('Enfant.class.php');


// $p = new Personnage();
//     $p->setNommage("Lebowski");
//     $p->setPrenomage("Jeff");
//     $p->setAge("45");
//     $p->setGenre("Masculin")  ; 
    
//     foreach($p as $key => $value){
//         echo $key . " : " . $value . "<br>";
//     };

// Création des instances de Magasins
$magasin = new Magasins('Magasin de Paris', '123 rue de Rivoli', '75001', 'Paris', 'Yes');
$magasin2 = new Magasins("Magasin d'amiens", "45 rue pinsard" , "80000" , "Amiens", 'No');

// Création des instances d'Enfant
$enfant1 = new Primaire("OUI","8");
$enfant2 = new Primaire("OUI","11");
$enfant3 = new Primaire("OUI","14");
$enfant4 = new Primaire("OUI","18");
$enfant5 = new Primaire("NON","0");

// Création des instances d'Employe et initialisation
$emp1 = new Employe();
        $emp1->setNommage("Tuche");
        $emp1->setPrenomage("Jo");
        $emp1->setdateembauche('10-02-1997');
        $emp1->setposte('soudeur');
        $emp1->setsalaire('15000');
        $emp1->setsecteur('métallurgie');
        $emp1->setMagasin($magasin);
        $emp1->setEnfant($enfant1);
        $emp1->afficherAnneedeservice();
        $emp1->setPrime();


$emp2 = new Employe();
        $emp2->setNommage("ptit");
        $emp2->setPrenomage("Gregorie");
        $emp2->setdateembauche('16-10-1984');
        $emp2->setposte('Maitre nageur');
        $emp2->setsalaire('10000');
        $emp2->setsecteur("L'etang");
        $emp2->setMagasin($magasin2);
        $emp2->setEnfant($enfant2);
        $emp2->afficherAnneedeservice();
        $emp2->setPrime();

$emp3 = new Employe();
        $emp3->setNommage("Al");
        $emp3->setPrenomage("Dente");
        $emp3->setdateembauche('20-01-2000');
        $emp3->setposte('cuisinier');
        $emp3->setsalaire('25000');
        $emp3->setsecteur('cuisine');
        $emp3->setMagasin($magasin2);
        $emp3->setEnfant($enfant3);
        $emp3->afficherAnneedeservice();
        $emp3->setPrime();

$emp4 = new Employe();
        $emp4->setNommage("Anne");
        $emp4->setPrenomage("Onyme");
        $emp4->setdateembauche('24-05-2024');
        $emp4->setposte('Detective');
        $emp4->setsalaire('30000');
        $emp4->setsecteur('Chercheur');
        $emp4->setMagasin($magasin);
        $emp4->setEnfant($enfant4);
        $emp4->afficherAnneedeservice();
        $emp4->setPrime();

$emp5 = new Employe();
        $emp5->setNommage("Luna");
        $emp5->setPrenomage("Tique");
        $emp5->setdateembauche('31-07-2015');
        $emp5->setposte('Sommelier');
        $emp5->setsalaire('45000');
        $emp5->setsecteur('Cave');
        $emp5->setMagasin($magasin2);
        $emp5->setEnfant($enfant5);
        $emp5->afficherAnneedeservice();
        $emp5->setPrime();


        // Affichage des informations des employés
        createemp($emp1);
        createemp($emp2);
        createemp($emp3);
        createemp($emp4);
        createemp($emp5);

        // Fonction pour afficher les informations des employés
        function createemp($emp){
            echo '<br>nom  :' .$emp->getNom() .
            '<br>Prenom :' . $emp->getPrenom() .
            '<br>Date d\'embauche :' . $emp->getDateembauche() .
            '<br>Poste :' . $emp->getPoste() .
            '<br>Salaire :' . $emp->getSalaire() .
            '<br>Secteur :' . $emp->getSecteur() .
            '<br>Dureembauche :' . $emp->getDureembauche() .
            '<br>Prime :' . $emp->getPrime() .
            '<br>travaille au ' . $emp->getMagasin()->getNom() . 
            '<br>à ' . $emp->getMagasin()->getVille() .
            '<br>au ' . $emp->getMagasin()->getAdresse().' CP ' . $emp->getMagasin()->getCodePostal().
            '<br>restauration '. $emp->getMagasin()->getRestauration() .
            '<br>depuis le ' . $emp->getAnneedeservice() .
            '<br>ticket noel : ' . $emp->getEnfant()->getTicket().'<br>';
        }
    ?>