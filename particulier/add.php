<?php
    require('../db.php');
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $poisson = $_POST["poisson"];
      $qtt = $_POST["qtt"];
      $pu = $_POST["pu"];
        
        $sql = "INSERT INTO particulier(`id_poisson`, `qtt`, `prix`) VALUES ($poisson, $qtt, $pu)";
        $stmt = $db->prepare($sql);

        if ($stmt->execute()) {
            ?>
                <script>
                    document.location.href = "../particulier";
                </script>
           <?php
        } else {
            echo " $sql Erreur lors de l'insertion des datail filao.";
        }
    
    }
?>