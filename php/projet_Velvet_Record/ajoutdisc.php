<?php
require_once('header.php')
?>
    <div class='container'>
     
        <form action='script_ajout.php' method='POST'  class='row justify-content-center'>
    
            <label class='mt-2 text-white' for='title'>Titre</label><br><input type='text' class='mt-2' id='title' name='ajouttitle'><br>
            <label class='mt-2 text-white' for='artiste'>Artiste</label><br><input type='text' class='mt-2' id='artiste' name='ajoutartist'><br>
            <label class='mt-2 text-white' for='year'>Année</label><br><input type='text' class='mt-2' id='year' name='ajoutyear'><br>
            <label class='mt-2 text-white' for='genre'>Genre</label><br><input type='text' class='mt-2' id='genre' name='ajoutgenre'><br>
            <label class='mt-2 text-white' for='label'>label</label><br><input type='text' class='mt-2' id='label' name='ajoutlabel'><br>
            <label class='mt-2 text-white' for='price'>Prix</label><br><input type='text' class='mt-2' id='price' name='ajoutprix'><br>
            <label class='mt-2 text-white' for='jaquette'>Jaquette d'album</label><br><input type='file' class='mt-2' id='jaquette' name='ajoutimage'><br>
            <button type='submit' class='btn btn-primary mt-2'>Ajouter</button>
        </form>

    </div>


</body>
</html>