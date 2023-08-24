<?php

        require('../db.php');
        $sql = "SELECT id, nomfournisseur FROM fournisseur";
        $stmt = $db->prepare($sql);
        $stmt->execute();
    
        $fournisseurs = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    ?>
<!DOCTYPE html>
<html>
<head>
    <title>Fournisseur</title>
    <link rel="stylesheet" href="modal.css">
</head>

<body>

<form method="post" action="select.php">
        <label for="fournisseur">Sélectionnez un fournisseur :</label>
        <select id="fournisseur updateDiv"  name="fournisseur">
            <option value=""></option>
            <?php foreach ($fournisseurs as $fournisseur) : ?>
                <option value="<?= $fournisseur['id'] ?>"><?= $fournisseur['nomfournisseur'] ?> <br></option>
            <?php endforeach; ?>
        </select>
        <textarea name="description" cols="30" rows="1" placeholder="Ecrire votre text ici!"></textarea>
       <input type="submit" value="Creer une facture pour ce fournisseur" name="create">
    </form>
<button id="openModalBtn">Fournisseur Vaovao</button>
    <div id="modal" class="modal">
        <div class="modal-content">
            <span class="close" id="closeModalBtn">&times;</span>
            <h2>Ajouter un fournisseur</h2>

            <form action="back.php" method="post">
                NomFournisseur <input type="text" name="nom"><br>
                Adresse: <input type="text" name="adressF"><br>
                Numéro: <input type="text" name="numeroF"><br>
                <input type="submit" value="Ajouter">
            </form>
        </div>
    </div>

    <script>
        // Affiche la modal
        document.getElementById("openModalBtn").addEventListener("click", function() {
            document.getElementById("modal").style.display = "block"; 
        });

        // Cache la modal
        document.getElementById("closeModalBtn").addEventListener("click", function() {
            document.getElementById("modal").style.display = "none"; 
        });
        // Ferme la modal 
        window.addEventListener("click", function(event) {
            if (event.target === document.getElementById("modal")) {
                document.getElementById("modal").style.display = "none"; 
            }
        });

    </script>
</body>
</html>