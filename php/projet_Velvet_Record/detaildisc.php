<?php
require_once('header.php');
?>
  <?php
                $stmt = $conn->prepare("SELECT * FROM disc d LEFT JOIN artist a ON d.artist_id = a.artist_id WHERE disc_id=?");
               
                $stmt->execute(array($_GET['nodiscs']));
               
                $result = $stmt->fetch();
                $stock = $_GET['nodiscs'];

                ?>
            <div class='container mt-3'>
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
                <form action="page_delete.php" method='GET' class='col-6 mt-5'>
                    <button type='SUBMIT' name='delete' CLASS='btn btn-danger' value='<?php echo $result['disc_id']; ?>'>SUPPRIMER</button>
                </form>
                <form action="page_update.php" method='GET' class='col-6 mt-5'>
                    <button type='SUBMIT' name='modif' CLASS='btn btn-warning' value='<?php echo $result['disc_id']; ?>'>modifier</button>
                </form>
            </div>
        </div>

</body>
</html>
