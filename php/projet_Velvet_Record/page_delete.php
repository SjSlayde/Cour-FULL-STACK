<?php
require_once('header.php');

                $stmt = $conn->prepare("SELECT * FROM disc d LEFT JOIN artist a ON d.artist_id = a.artist_id WHERE disc_id=?");
                
                $stmt->execute(array($_GET['delete']));
            
                $result = $stmt->fetch();

                ?>
            <div class='container'>
                <div class='row justify-content-center'>
                    <img src="../../pictures/<?php echo $result['disc_picture'];?>" class="img-fluid rounded-start col-6">
                    <div class="col-6">
                        <h2 class='text-white'><?php echo $result['disc_title'];?></h2>
                        <p class='text-white'>Artist : <?php echo $result['artist_name'];?></p>
                        <p class='text-white'>Label : <?php echo $result['disc_label'];?></p>
                        <p class='text-white'>Year : <?php echo $result['disc_year'];?></p>
                        <p class='text-white'>Genre : <?php echo $result['disc_genre'];?></p>
                        <p class='text-white'>Prix : <?php echo $result['disc_price'];?></p>
                    </div>

     
        <form action='script_delete.php' method='POST' class='row justify-content-center'>

            <label class='mt-2 text-white' for='SUPP'>Veuillez confirmer la suppresione en ecrivant la phrase suivante : johnny hallyday est meilleur que serge gainsbourg</label><br><input type='text' class='mt-2' id='SUPP' name='SUPP' required><br>
            <button type='submit' name='delete' value='<?php echo $_GET['delete']; ?>' class='btn btn-primary mt-2'>Suppresion</button>

        </form>
    </div>


</body>
</html>
