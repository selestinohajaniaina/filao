<?php
    require('../db.php');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nomfilao = $_POST["nom"];
        $num_fournisseur_one = $_POST['id_fournisseur'];
        $num_facture_one = $_POST['numFact'];
        
        $sql = "INSERT INTO poisson(`nomFilao`) VALUES ('$nomfilao')";
        $stmt = $db->prepare($sql);
        
        if ($stmt->execute()) {
            echo $nomfilao.
        "<br><center><img class='profile-pic-image' src='../img/load.gif' width='250'/></center>";
        ;
            // header("location:../html/achatFact.php?id_fournisseur=".$num_fournisseur_one."&numFact=".$num_facture_one);
            ?>
    <script>
        window.document.location.href = "../html/achatFact.php?id_fournisseur=<?=$num_fournisseur_one?>&numFact=<?=$num_facture_one?>";
    </script>
<?php
        } else {
            echo "Erreur lors de l'insertion des données au poisson.";
        }
    }
        
?>

