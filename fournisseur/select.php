<?php
    require('../db.php');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $fournisseur = $_POST["fournisseur"];
        $description = $_POST["description"];

        $sql = "SELECT MAX(id) AS id FROM facture";
        $stmt = $db->prepare($sql);
        $stmt->execute();
        $resultat = $stmt -> fetch(); 
        if ($resultat["id"]) {
            $newNumFact = $resultat["id"]+1;
        } else {
            $newNumFact = 1;
        }


        echo " $fournisseur avec nouveau numfact = $newNumFact";

        
        
        $creatNewFact = "INSERT INTO facture(`id`, `id_fou`, `text`) VALUES ($newNumFact, $fournisseur, '$description')";
        $validation = $db->prepare($creatNewFact);

        if ($validation->execute()) {
           ?>
                <script>
                    document.location.href = "../accueil?id_fournisseur=<?=$fournisseur?>&numFact=<?=$newNumFact?>";
                </script>
           <?php
        } else {
            echo "Erreur a l'ajout de nouveau facture des données.";
        }
        
    }
?>