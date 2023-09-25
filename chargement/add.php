<?php
    require('../db.php');
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $poisson = $_POST["poisson"];
      $id_sortie = $_POST["id_sortie"];
      $qtt = $_POST["qtt"];
      $sac = $_POST["sac"];
      $place = 1;
        
        $sql = "INSERT INTO detailfilaosortie(`id_poisson`, `sac`, `qtt`, `id_sortie`, `place`) VALUES ($poisson, $sac, $qtt, $id_sortie, $place)";
        $stmt = $db->prepare($sql);

        if ($stmt->execute()) {
            ?>
                <script>
                    document.location.href = "../chargement?id=<?=$id_sortie?>";
                </script>
           <?php
        } else {
            echo " $sql Erreur lors de l'insertion des datail filao.";
        }
    
    }
?>