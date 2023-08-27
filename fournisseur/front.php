<?php

        require('../db.php');
        $sql = "SELECT id, nomfournisseur FROM fournisseur ORDER BY nomfournisseur";
        $stmt = $db->prepare($sql);
        $stmt->execute();
    
        $fournisseurs = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    ?>
<!DOCTYPE html>
<html>
<head>
    <title>Fournisseur</title>
    <link rel="stylesheet" href="modal.css">
    <link rel="stylesheet" href="../assets/css/styles.min.css" />
</head>

<body>

    <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-md-5">
                  <div class="card">
                    <div class="card mb-0">
                      <div class="card-body">
                        <a class="text-nowrap logo-img text-center d-block py-3 w-100">
                          <img src="../assets/images/logos/dark-logo.svg" width="180" alt="">
                        </a>
                        <p class="text-center"></p>
                        <form method="post" action="select.php">
                          <div class="mb-3">
                            <label for="" class="form-label">Selectionner un Fournisseur</label>
                            <div class="mb-3 d-flex">
                              <select name="fournisseur" class="form-select">
                              <?php foreach ($fournisseurs as $fournisseur) : ?>
                                    <option value="<?= $fournisseur['id'] ?>"><?= $fournisseur['nomfournisseur'] ?> <br></option>
                              <?php endforeach; ?>
                              </select>
                              <button id="openModalBtn" class="btn btn-primary mr-20 mb-12  w-25" type="button" title="Ajouter un nouveau">+</button>
                            </div>
                            
                           
                          </div>
                          <div class="mb-4">
                            <label for="exampleInputPassword1" class="form-label">Ajouter une description (facultatif*)</label>
                            <textarea name="description" rows="2" class="form-control" placeholder="Ecrire votre text ici!"></textarea>
                          </div>
                          <button type="submit" name="create" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Creer une facture pour ce fournisseur</button>
                          <div class="d-flex align-items-center justify-content-center">
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
    </div>

    
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