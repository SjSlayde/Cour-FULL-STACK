<?php
require_once('header.php');

// echo $_POST['ajouttitle'].'<br>';
// echo $_POST['ajoutartist'].'<br>';
// echo $_POST['ajoutyear'].'<br>';
// echo $_POST['ajoutgenre'].'<br>';
// echo $_POST['ajoutlabel'].'<br>';
// echo $_POST['ajoutprix'].'<br>';
// echo $_POST['ajoutimage'].'<br>';

if (isset($_FILES['ajoutimage'])) {

    $file = $_FILES['ajoutimage'];

    $tmp_name = $file['tmp_name'];

    $name = $file['name'];

    $type = $file['type'];

    $size = $file['size'];

    echo $type;


    // Vérification du type de fichier et de la taille

    if ($type != 'image/jpeg' && $type != 'image/png') {

        echo 'Erreur : seul les fichiers JPEG et PNG sont autorisés.';

        exit;

    }

    if ($size > 1024 * 1024) { // 1Mo

        echo 'Erreur : le fichier est trop volumineux.';

        exit;

    }


    // Définition du chemin de destination sécurisé

    $destination = '../../pictures/' . uniqid() . '_' . $name;


    // Déplacement du fichier uploadé

    if (move_uploaded_file($tmp_name, $destination)) {

        echo 'Fichier uploadé avec succès !';

    } else {

        echo 'Erreur lors de l\'upload du fichier.';

    }

}

$name = $_POST['ajoutartist'];

$stmt = $conn->prepare("INSERT INTO artist (artist_name) SELECT (:artist) WHERE NOT EXISTS (SELECT * FROM artist WHERE artist_name = :artist);");//ne peut pas mettre values quand il y a un where
$stmt->bindValue(':artist', $name);
$stmt->execute();

$stock = $conn->prepare("SELECT * FROM artist WHERE artist_name = :artist");
$stock->bindValue(':artist', $name);
$stock->execute();

$artist_id = $stock->fetch()['artist_id'];

$stmt = $conn->prepare("SELECT * FROM disc WHERE EXISTS (SELECT * FROM disc WHERE disc_title = :title AND disc_year = :year);");
$stmt->bindValue(':title', $_POST['ajouttitle']);
$stmt->bindValue(':year', $_POST['ajoutyear']);
$stmt->execute();
$disc_id = $stmt->fetch()['disc_id'];
echo $disc_id;

if($disc_id==NULL){
$stmt = $conn->prepare("INSERT INTO disc (disc_title, disc_year, disc_picture, disc_label, disc_genre, disc_price, artist_id) VALUES (:title, :year, :picture, :label, :genre, :prix, :artist_id);");
$stmt->bindValue(':title', $_POST['ajouttitle']);
$stmt->bindValue(':year', $_POST['ajoutyear']);
$stmt->bindValue(':prix', $_POST['ajoutprix']);
$stmt->bindParam(':picture', $destination);
$stmt->bindValue(':label', $_POST['ajoutlabel']); 
$stmt->bindValue(':genre', $_POST['ajoutgenre']); 
$stmt->bindParam(':artist_id', $artist_id);//bind param permet de transmettre une variable php en parametre utile pour mettre un int
$stmt->execute();}
?>