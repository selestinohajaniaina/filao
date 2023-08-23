<?php

        require('../db.php');
        $sql = "SELECT id, nomfilao FROM poisson";
        $stmt = $db->prepare($sql);
        $stmt->execute();
    
        $filaos = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    ?>
<!DOCTYPE html>
<html>
<head>
    <title>poisson</title>
    <link rel="stylesheet" href="modal.css">
</head>

<body>
<p id="result"></p>
<form>
        <label for="filao">Sélectionnez un filao :</label>
        <select id="poisson updateDiv"  name="poisson">
            <option value=""></option>
            <?php foreach ($filaos as $filao) : ?>
                <option value="<?= $filao['id'] ?>"><?= $filao['nomfilao'] ?> <br></option>
            <?php endforeach; ?>
        </select><br>
        <input type="text" id="Qtt" name="qtt"><br>
        <input type="text" id="Pu" name="pu"><br>
       <label for="prixtotal"></label>
       </form>   
       <input type="submit" onclick="calculateMultiplication()" value="Ajouter">
    
<button id="openModalBtn">filao Vaovao</button>
    <div id="modal" class="modal">
        <div class="modal-content">
            <span class="close" id="closeModalBtn">&times;</span>
            <h2>Ajouter un Poisson</h2>

            <form action="back.php" method="post">
                NomFilao <input type="text" name="nom"><br>

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

        //Calcul Prix 
        function calculateMultiplication() {
        var qtt = parseFloat(document.getElementById("Qtt").value);
        var punit = parseFloat(document.getElementById("Pu").value);

        var result = qtt * punit;

        if (!isNaN(result)) {
            document.getElementById("result").textContent = "Résultat: " + result;
        } else {
            document.getElementById("result").textContent = "";
        }
}

    </script>
</body>
</html>