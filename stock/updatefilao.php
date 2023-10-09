<?php 
    require('../db.php');
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $oldid = $_POST['idf'];
        $newid = $_POST['newid'];

        $sql = $sql = "UPDATE detailavant SET idfilao = '$newid' WHERE id_poisson = $oldid";
        $stmt = $db->prepare($sql);

        if ($stmt->execute()) {
            ?>
                <script>
                    document.location.href = "../stock";
                </script>
           <?php
        } else {
            echo " $sql Erreur";
        }
      
      }

?>
