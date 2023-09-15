<?php
    require('../db.php');
    $id = $_GET["id"];
    $sql = "DELETE FROM `particulier` WHERE id=$id";
    $stmt = $db->prepare($sql);

    if ($stmt->execute()) {
        ?>
            <script>
                document.location.href = "../particulier";
            </script>
       <?php
    } else {
        echo " $sql Erreur lors de supression des particulier filao.";
    }
?>