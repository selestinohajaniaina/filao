<?php
    require('../db.php');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = $_POST["id"];
        $debut = $_POST['debut'];
        $fin = $_POST['fin'];
        $suple = empty($_POST['suple'])?"00:00":$_POST['suple'];
        
        $sql = "INSERT INTO present(`id_personnel`, `debut`, `fin`, `suple`) VALUES ($id, '$debut', '$fin', '$suple')";
        echo $sql;
        $stmt = $db->prepare($sql);
        
        if ($stmt->execute()) {
            
            // header("location:../html/FactureAchat.php?id_fournisseur=".$num_fournisseur_one."&numFact=".$num_facture_one);
            ?> 
    <script>
        window.document.location.href = "../personnel";
    </script>
<?php
        } else {
            echo "Erreur lors de l'insertion des données au personnnel.";
        }
    }
        
?>

