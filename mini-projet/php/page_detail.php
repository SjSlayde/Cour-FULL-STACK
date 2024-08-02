<?php
require '../header.php';
if($_GET['name']!= ''){
$select = $conn->prepare("SELECT * FROM ile WHERE id = :id");
$select->bindParam(':id', $_GET['name']);
}else {
    $select = $conn->prepare("SELECT * FROM ile ;");
}
$select->execute();
$iles = $select->fetchAll();
$select->closeCursor();
?>
<div class='container mt-5'>
    <div class='row'>
        <?php foreach($iles as $result):?>
        <div class='col-md-6 col-10'>
            <img src='../img/<?php echo $result['image'] ?>' alt='<?php echo $result['title'] ?>' class='img-fluid'>
        </div>
        <div class='col-md-6 col-10'>
            <h1>nom de l'ile : <?php echo $result['title'] ?></h1>
            <p>description : <?php echo $result['description'] ?></p>
            <p>superficie de l'ile : <?php echo $result['superficie'] ?> km</p>
        </div>
        <?php endforeach ?>
    </div>
</div>
<?php
require '../footer.php';
?>