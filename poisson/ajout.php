<div id="ModalForFish" class="modal">

                <!-- Modal content -->
                <div class="modal-content">
                  <span id="closeForFish">&times;</span>

                  <form action="../poisson/back.php" method="post">
                          <div class="mb-3" id ="monParagraphe">
                            <label for="" class="form-label">Sélectionnez un Fournisseur</label>
                            <div class="mb-3 d-flex">
                              <input type="text" name="nom" placeholder="Nom du poisson" class="form-control" require/>
                              <input type="number" name="id_fournisseur" value="<?=$_GET['id_fournisseur']?>" style="display:none;"/>
                          <input type="number" name="numFact" value="<?=$_GET['numFact']?>" style="display:none;">
                            </div>
                           
                           
                            
                           
                          </div>
                          
                         
                          <button type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Ajouter</button>
                          <div class="d-flex align-items-center justify-content-center">
                           
                          </div>
                        </form>
                        <script>
                              var bouton = document.getElementById("monBouton");
                              var elementCache = document.getElementById("elementCache");

                              bouton.addEventListener("click", function() {
                                  // Changer le style pour afficher l'élément caché
                                  elementCache.style.display = "none";
                              });
                          </script>
                </div>

              </div>

              <script>
    // Get the modal
    var modal = document.getElementById("ModalForFish");
    
    // Get the button that opens the modal
    var btn = document.getElementById("btnForFish");
    
    // Get the <span> element that closes the modal
    var span = document.getElementById("closeForFish");
    
    // When the user clicks the button, open the modal 
    btn.onclick = function() {
      modal.style.display = "block";
    }
    
    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
      modal.style.display = "none";
    }
    
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
  </script>