<?php
    require('../db.php');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nom_client = $_POST["nom"];
        $adresse = $_POST["adresse"];
        $contact = $_POST["contact"];
    
        $sql = "INSERT INTO client(`nom`, `adresse`, `contact`) VALUES ('$nom_client', '$adresse', '$contact')";
        $stmt = $db->prepare($sql);

        if ($stmt->execute()) {
            // header("location: ../html/choixFournisseur.php");
            ?>
            <script>
                window.document.location.href = "../client/";
            </script>
            <?php
        } else {
            echo "$sql Erreur lors de l'insertion des données.";
        }
    }

?>