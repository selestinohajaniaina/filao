<?php
    require('../db.php');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $livraison = $_POST["livraison"];
    
        $sql = "INSERT INTO facturesortie(`destination`) VALUES ('$livraison')";
        $stmt = $db->prepare($sql);

        if ($stmt->execute()) {
            $sql_new = "SELECT MAX(id) AS id FROM facturesortie";
            $execute = $db->prepare($sql_new);
            $execute->execute();
            $resultat = $execute -> fetch(); 
            if ($resultat["id"]) {
                $newNumFact = $resultat["id"];
            } else {
                $newNumFact = 1;
            }
            ?>
            <script>
                window.document.location.href = "../chargement?id=<?=$newNumFact?>";
            </script>
            <?php
        } else {
            echo "$sql Erreur lors de l'insertion des données.";
        }
    }

?>