<!DOCTYPE html>
<html lang="en">
    <?php

session_start();

$servername = "localhost";
$username = "admin";
$password = "Afpa1234";
$dbname = "les_iles";

            try {

                // Création de la connexion PDO
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                // configurer le mode d'erreur PDO pour générer des exceptions
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            } catch(PDOException $e) {

                // Afficher l'erreur en cas de problème de connexion
                echo "Erreur de connexion à la base de données: " . $e->getMessage();
            
            }
    ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<style>
body{
    background-image: url("<?php if ($_SERVER['REQUEST_URI'] == "/index.php") echo "img/thaiti.webp"; else echo "../img/thaiti.webp";?>");
    background-size: cover;
}
</style>
</head>
<body>
    <head>
    <nav class="navbar navbar-dark navbar-expand-lg bg-dark border-bottom border-body">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php if ($_SERVER['REQUEST_URI'] == "/index.php") echo "index.php"; else echo "../index.php";?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php if ($_SERVER['REQUEST_URI'] == "/index.php") echo "php/page_detail.php?name=1"; else echo 'page_detail.php?name=1';?>" >l'île de Sable</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php if ($_SERVER['REQUEST_URI'] == "/index.php") echo "php/page_detail.php?name=2"; else echo 'page_detail.php?name=2';?>">l'île de Fernando de Noronha</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href='<?php if ($_SERVER['REQUEST_URI'] == "/index.php") echo "php/page_detail.php?name=3"; else echo 'page_detail.php?name=3';?>'>La péninsule de Valdés</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</head>