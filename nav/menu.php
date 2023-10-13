<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
        <br><br>

            <center>
              <img src="../assets/img/logonordine.jpg" alt class="w-px-150 h-auto rounded-circle" />
            </center>
            <!-- <br> -->
        <ul class="menu-inner py-1">
          <!-- Dashboard -->
          <li class="menu-item active">
            <a href="../html/index.php" class="menu-link">
              <i class="menu-icon tf-icons bx bx-home-circle"></i>
              <div data-i18n="Analytics">Dashboard</div>
            </a>
          </li>


          <li class="menu-header small text-uppercase">
            <span class="menu-header-text text-black"><strong>Opération</strong></span>
          </li>
          <li class="menu-item">
            <a href="../html/choixFournisseur.php" id="menumenu" class="menu-link ">
              <i class="menu-icon tf-icons bx bx-dock-top"></i>
              <div class="card-title mb-9 fw-semibold text-black">Nouvelle Achat</div>
            </a>

          </li>
          <li class="menu-item">
          <?php 
            $isessid = $_SESSION['id'];
            if ($isessid == 1) {
              ?>
                <a href="../html/listeFact.php" class="menu-link">
                  <i class="menu-icon tf-icons bx bx-dock-top"></i>
                  <div class=" card-title mb-9 fw-semibold text-black">Suivi Traitement</div>
                </a>
              <?php
            }elseif ($isessid == 2) {
              ?>
                <a href="../html/listeFact.php" class="menu-link">
                  <i class="menu-icon tf-icons bx bx-dock-top"></i>
                  <div class=" card-title mb-9 fw-semibold text-black">Suivi Traitement</div>
                </a>
              <?php
            }
            ?>
            

          </li>
          <li class="menu-item">
            <a href="../stock" class="menu-link">
              <i class="menu-icon tf-icons bx bx-dock-top"></i>
              <div class="card-title mb-9 fw-semibold text-black">Gestion de Stock</div>
            </a>

          </li>
          <li class="menu-item">
            <a href="../livraison" class="menu-link">
              <i class="menu-icon tf-icons bx bx-dock-top"></i>
              <div class="card-title mb-9 fw-semibold text-black">Gestion de Chargement</div>
            </a>

            
          </li>
          <li class="menu-item">
            <a href="../particulier" class="menu-link">
              <i class="menu-icon tf-icons bx bx-dock-top"></i>
              <div class="card-title mb-9 fw-semibold text-black">Vente Particulier</div>
              
            </a>

          </li>

          </li>
          <li class="menu-item">
            <a href="../personnel" class="menu-link">
              <i class="menu-icon tf-icons bx bx-dock-top"></i>
              <div class="card-title mb-9 fw-semibold text-black">Gestion Personnel</div>
              
            </a>

          </li>

          <li class="menu-item">
            <a href="../depense" class="menu-link">
              <i class="menu-icon tf-icons bx bx-dock-top"></i>
              <div class="card-title mb-9 fw-semibold text-black">Suivie de Depence</div>
              
            </a>

          </li>


        </ul>
      </aside>