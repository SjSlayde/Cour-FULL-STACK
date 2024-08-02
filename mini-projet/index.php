<?php
require_once 'header.php';
$select = $conn->prepare("SELECT * FROM ile ;");
$select->execute();
$ile = $select->fetchAll();
$select->closeCursor();
?>
<div class="container">

<article class='mt-5'>

<div class="text-center">
L'île de Fernando de Noronha, l'île de Sable et l'île de Socotra partagent plusieurs caractéristiques distinctives malgré leurs emplacements variés.
</div>
<div class="text-center">
Chacune est une île isolée offrant des paysages naturels époustouflants et des écosystèmes uniques.
</div>
<div class="text-center">
Elles sont toutes reconnues pour leur biodiversité exceptionnelle, abritant des espèces endémiques de faune et de flore. 
</div>
<div class="text-center">
En tant que destinations écologiques, ces îles jouent un rôle crucial dans la conservation des habitats marins et terrestres. 
</div>
<div class="text-center">
Leur éloignement géographique contribue à préserver leur beauté intacte et leur importance écologique, 
</div>
<div class="text-center">
faisant d'elles des refuges pour la nature et des sites de recherche scientifique.
</div>

</article>
<div class='row mt-3'>
    <?php foreach($ile as $result): ?>
    <img class='col-md-4 col-12 img-fluid' src='img/<?php echo $result['image'];?>' alt='<?php echo $result['title'];?>'>
    <?php endforeach ?>
</div>
</div>

<?php
require_once 'footer.php';
?>