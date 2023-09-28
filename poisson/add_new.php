<?php
    require('../db.php');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nomfilao = $_POST["nom"];
        $num_fournisseur_one = $_POST['id_fournisseur'];
        $num_facture_one = $_POST['numFact'];
        // echo $nomfilao.$num_facture_one.$num_fournisseur_one;

        $sql = "INSERT INTO poisson(`nomFilao`) VALUES ('$nomfilao')";
        $stmt = $db->prepare($sql);
        
        if ($stmt->execute()) {
            
            // header("location:../html/FactureAchat.php?id_fournisseur=".$num_fournisseur_one."&numFact=".$num_facture_one);
            ?>
    <script>
        window.document.location.href = "../html/FactureAchat.php?id_fournisseur=<?=$num_fournisseur_one?>&numFact=<?=$num_facture_one?>";
    </script>
<?php
        } else {
            echo "Erreur lors de l'insertion des données au poisson.";
        }
    }
        
?>

