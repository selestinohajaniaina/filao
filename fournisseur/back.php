 <?php
    require('../db.php');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nomfournisseur = $_POST["nom"];
        $adressF = $_POST["adressF"];
        $numeroF = $_POST["numeroF"];
    
        $sql = "INSERT INTO fournisseur(`nomfournisseur`, `Adress`, `contact`) VALUES ('$nomfournisseur', '$adressF', '$numeroF')";
        $stmt = $db->prepare($sql);

        if ($stmt->execute()) {
            header("location: front.php");
        } else {
            echo "Erreur lors de l'insertion des données.";
        }
    }







        

 
