<?php
    require('../db.php');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $poisson = $_POST["poisson"];
        $qtt = $_POST["qtt"];
        $pu = $_POST["pu"];
        $fournisseur = $_POST["id_fournisseur"];
        $numFact = $_POST["numFact"];
        // echo " $poisson $qtt $pu $fournisseur $numFact";
        
        
        $sql = "INSERT INTO detailfilao(`id_poisson`, `qtt`, `prixUnit`, `NumFac`, `idFournisseur`) VALUES ($poisson, $qtt, $pu, $numFact, $fournisseur)";
        $stmt = $db->prepare($sql);

        if ($stmt->execute()) {
            ?>
                <script>
                    document.location.href = "../accueil?id_fournisseur=<?=$fournisseur?>&numFact=<?=$numFact?>";
                </script>
           <?php
        } else {
            echo " $sql Erreur lors de l'insertion des datail filao.";
        }
    
    }
?>