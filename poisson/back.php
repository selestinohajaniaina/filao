<?php
    require('../db.php');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nomfilao = $_POST["nom"];
        echo $nomfilao;
        
        
        $sql = "INSERT INTO poisson(`nomFilao`) VALUES ('$nomfilao')";
        $stmt = $db->prepare($sql);

        if ($stmt->execute()) {
            ?>
    <script>
        document.location.href = "../accueil?id_fournisseur=<?=$_GET['id_fournisseur']?>&numFact=<?=$_GET['numFact']?>";
    </script>
<?php
        } else {
            echo "Erreur lors de l'insertion des données.";
        }
    }
        
?>

