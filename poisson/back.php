<?php
    require('../db.php');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nomfilao = $_POST["nom"];

    
        $sql = "INSERT INTO poisson (nomfilao) VALUES ('$nomfilao')";
        $stmt = $db->prepare($sql);

        if ($stmt->execute()) {
            header("location: front.php");
        } else {
            echo "Erreur lors de l'insertion des données.";
        }
    }
        
?>

