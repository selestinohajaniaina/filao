<?php
require('../db.php');

if (isset($_GET['id'])) {
    $fournisseurId = $_GET['id'];

    try {
       

        $sql = "SELECT id, nomfournisseur, Adress, contact FROM fournisseur WHERE id = :fournisseurId";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(":fournisseurId", $fournisseurId, PDO::PARAM_INT);
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($row) {
            echo "<h1>Détails du Fournisseur</h1>";
            echo "<input type='hidden' name='idFournisseur' value='{$row['id']}'>";
            echo "<p><strong>Nom du Fournisseur :</strong> {$row['nomfournisseur']}</p>";
            echo "<p><strong>Adresse :</strong> {$row['Adress']}</p>";
            echo "<p><strong>Contact :</strong> {$row['contact']}</p>";
        } else {
            echo "Aucun fournisseur trouvé avec cet ID.";
        }
    } catch (PDOException $e) {
        echo "Erreur de connexion à la base de données : " . $e->getMessage();
    }
} else {
    echo "ID du fournisseur non spécifié.";
}
?>

