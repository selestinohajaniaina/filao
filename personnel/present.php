<?php
    require('../db.php');
    $id = $_GET["id"];
    $sql = "INSERT INTO present(`id_personnel`) VALUE ('$id')";
    $stmt = $db->prepare($sql);

    if ($stmt->execute()) {
        ?>
            <script>
                document.location.href = "../personnel";
            </script>
       <?php
    } else {
        echo " $sql Erreur lors de supression des personnel.";
    }
?>