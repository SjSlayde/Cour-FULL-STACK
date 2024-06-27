<?php
$servername = "localhost";
$username = "admin";
$password = "Afpa1234";
$dbname = "the_district";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // configurer le mode d'erreur PDO pour générer des exceptions
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connecté avec succès à la base de données";
} catch(PDOException $e) {
    echo "Erreur de connexion à la base de données: " . $e->getMessage();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $stmt = $conn->query("SELECT * FROM plat");

    while ($row = $stmt->fetch()) {
       echo $row['libelle'] . "<br>";
    }
    $qty = 2; // c'est une donnée de type 'int' (entier)
    $stmt = $conn->prepare("SELECT * FROM commande WHERE  quantite > :qty");
    $stmt->bindParam(':qty', $qty, PDO::PARAM_INT);
    $stmt->execute();

    while ($row = $stmt->fetch()) {
        foreach($row as $key => $values){
        echo  $key."=>".$values.",";
        }
        echo '<br>';
     }


$stmt = $conn->query("SELECT * FROM plat");
$results = $stmt->fetchAll();
foreach ($results as $row) {
    echo $row['libelle'] . " - " . $row['prix'] . "<br>";
}

$stmt = $conn->prepare("SELECT * FROM plat ORDER BY prix");
$stmt->execute();
// $errorInfo = $stmt->errorInfo();

// if ($errorInfo[0] != '00000') {

//     echo "Erreur d'exécution de la requête : " . $errorInfo[2];

// }
$resultats = $stmt->fetchAll(PDO::FETCH_ASSOC);

// var_dump($resultats);
foreach ($resultats as $ligne) {
    echo $ligne['description'] . " - " . $ligne['prix'] . "<br>";
    }
// $i = 0;
// while($i != count($resultats)){
//     echo $resultats[$i]['libelle'] . " - " . $resultats[$i]['prix']."<br>";
//     $i++;
// }
// echo 'yop';
// try {
    //$conn nous permettra d'accéder au connecteur PDO

//     $conn->beginTransaction();

//     // Ajouter une nouvelle catégorie
//     $stmt = $conn->prepare("INSERT INTO categorie (libelle, image, active) VALUES (:libelle, :image, :active)");
//     $stmt->bindValue(':libelle', 'Cuisine française');
//     $stmt->bindValue(':image', 'new_cat.jpg');
//     $stmt->bindValue(':active', 'Yes');
//     $stmt->execute();
//     $id_categorie = $conn->lastInsertId();

//     // Ajouter plusieurs nouveaux plats
//     $stmt = $conn->prepare("INSERT INTO plat (libelle, description, prix, image, active, id_categorie) VALUES (:libelle, :description, :prix, :image, :active, :id_categorie)");
//     $stmt->bindValue(':libelle', 'Gratin dauphinois');
//     $stmt->bindValue(':description', 'Un plat hivernal traditionnellement composé de pommes de terre cuites en rondelles, crème fraîche, lait et noix de muscade');
//     $stmt->bindValue(':prix', 13.50);
//     $stmt->bindValue(':image', 'plat1.jpg');
//     $stmt->bindValue(':active', 'Yes');
//     $stmt->bindValue(':id_categorie', $id_categorie);
//     $stmt->execute();
//     $plat_id = $conn->lastInsertId();

//     $stmt = $conn->prepare("INSERT INTO plat (libelle, description, prix, image, active, id_categorie) VALUES (:libelle, :description, :prix, :image, :active, :id_categorie)");
//     $stmt->bindValue(':libelle', 'Ratatouille');
//     $stmt->bindValue(':description', 'En véritable plat méditerranéen, la ratatouille est un ragoût mijoté de légumes du soleil et d’huile d’olive. Tomates, courgettes, aubergines, poivrons, oignons et ail composent la recette.');
//     $stmt->bindValue(':prix', 10.00);
//     $stmt->bindValue(':image', 'plat2.jpg');
//     $stmt->bindValue(':active', 'Yes');
//     $stmt->bindValue(':id_categorie', $id_categorie);
//     $stmt->execute();
//     $plat_id = $conn->lastInsertId();

//     // Valider la transaction
//     $conn->commit();
// } catch (PDOException $e) {
//     // En cas d'erreur, annuler la transaction
//     $conn->rollback();
//     echo "Erreur : " . $e->getMessage();
// }
    ?>
</body>
</html>