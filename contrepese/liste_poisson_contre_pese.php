
<?php

        require('../db.php');

        function get_name($id_to_get) {
            require('../db.php');
        $new_sql = "SELECT * FROM poisson WHERE id = $id_to_get";
        $new_st = $db->prepare($new_sql);
        $new_st->execute();
        $fetch_name = $new_st -> fetch();
        return $fetch_name["nomFilao"];
        }

        function return_type($num_to_get) {
            require('../db.php');
            $numeroFacture = $_GET["num"];
            $selection = $db -> prepare("SELECT * FROM detailfilaocontre WHERE NumFac=$numeroFacture AND id_poisson=$num_to_get");
            $selection -> execute();
            $fetchAll = $selection -> fetchAll();
            $nbr = count($fetchAll);
            if($nbr) {
              $qtt_f = $fetchAll[0]['qtt'];
        return $qtt_f;

            }
        return false;
        }

        // avant entrer dans la chambre froid
        function return_type_avant($num_to_get) {
          require('../db.php');
          $numeroFacture = $_GET["num"];
          $selection = $db -> prepare("SELECT * FROM detailavant WHERE NumFac=$numeroFacture AND id_poisson=$num_to_get");
          $selection -> execute();
          $fetchAll = $selection -> fetchAll();
          $nbr = count($fetchAll);
          if($nbr) {
            $qtt_f = $fetchAll[0]['qtt'];
      return $qtt_f;

          }
      return false;
      }

        $numeroFacture = $_GET["num"];
        $select_sql = "SELECT * FROM detailfilao WHERE NumFac=$numeroFacture";
        $stmt_contre = $db->prepare($select_sql);
        $stmt_contre->execute();
    
        $all_produit = $stmt_contre->fetchAll(PDO::FETCH_ASSOC);
        $count = 0;
?>
<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/"
  data-template="vertical-menu-template-free">

<head>
  <meta charset="utf-8" />
  <meta name="viewport"
    content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>Logiciel de Gestion</title>

  <meta name="description" content="" />

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet" />

  <!-- Icons. Uncomment required icon fonts -->
  <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

  <!-- Core CSS -->
  <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
  <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
  <link rel="stylesheet" href="../assets/css/demo.css" />

  <!-- Vendors CSS -->
  <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

  <link rel="stylesheet" href="../assets/vendor/libs/apex-charts/apex-charts.css" />

  <!-- Page CSS -->

  <!-- Helpers -->
  <script src="../assets/vendor/js/helpers.js"></script>

  <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
  <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
  <script src="../assets/js/config.js"></script>
</head>

<body>
  <!-- Layout wrapper -->
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <!-- Menu -->

      <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
        <div class="app-brand demo">
          <a href="index.html" class="app-brand-link">

            <center>
              <img src="../assets/img/logo.jpg" alt class="w-px-150 h-auto rounded-circle" />
            </center>

          </a>


        </div>


        <ul class="menu-inner py-1">
          <!-- Dashboard -->
          <li class="menu-item active">
            <a href="../html/index.php" class="menu-link">
              <i class="menu-icon tf-icons bx bx-home-circle"></i>
              <div data-i18n="Analytics">Dashboard</div>
            </a>
          </li>


          <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Opération</span>
          </li>
          <li class="menu-item">
            <a href="../html/choixFournisseur.php" class="menu-link ">
              <i class="menu-icon tf-icons bx bx-dock-top"></i>
              <div>Nouvelle Achat</div>
            </a>

          </li>
          <li class="menu-item">
            <a href="../html/listeFact.php" class="menu-link">
              <i class="menu-icon tf-icons bx bx-dock-top"></i>
              <div>Suivi Traitement</div>
            </a>

          </li>
          <li class="menu-item">
            <a href="#" class="menu-link">
              <i class="menu-icon tf-icons bx bx-dock-top"></i>
              <div>Gestion de Stock</div>
            </a>

          </li>
          <li class="menu-item">
            <a href="" class="menu-link">
              <i class="menu-icon tf-icons bx bx-dock-top"></i>
              <div>Gestion de Chargement</div>
            </a>

          </li>
        </ul>
      </aside>
      <!-- / Menu -->

      <!-- Layout container -->
      <div class="layout-page">
        <!-- Navbar -->

        <nav
          class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
          id="layout-navbar">
          <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
            <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
              <i class="bx bx-menu bx-sm"></i>
            </a>
          </div>

          <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
            <!-- Search -->
            <div class="navbar-nav align-items-center">
              <div class="nav-item d-flex align-items-center">
              </div>
            </div>
            <!-- /Search -->

            <ul class="navbar-nav flex-row align-items-center ms-auto">
              <!-- Place this tag where you want the button to render. -->
              <li>
                <a class="dropdown-item" href="auth-login-basic.html">
                  <i class="bx bx-power-off me-2"></i>
                  <span class="align-middle">Se déconnecter</span>
                </a>
              </li>

              <!-- User -->
              <li class="nav-item navbar-dropdown dropdown-user dropdown">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                  <div class="avatar avatar-online">
                    <img src="../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                  </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                  <li>
                    <a class="dropdown-item" href="#">
                      <i class="bx bx-cog me-2"></i>
                      <span class="align-middle">Changer le Mot de passe</span>
                    </a>
                  </li>
                  <li>
                    <div class="dropdown-divider"></div>
                  </li>

                </ul>
              </li>
              <!--/ User -->
            </ul>
          </div>
        </nav>
<div class="content-wrapper">
          <!-- Content -->

          <div class="container-fluid flex-grow-1 container-p-y">
            <div class="card">
              <h5 class="card-header"> Traitement Facture n° <?=$numeroFacture?></h5>
              <div class="table-responsive text-nowrap">
                <table class="table">
                  <thead>
                   <td>Nom</td>
                   <td>Initial</td>
                   <td>Apres</td>
                   <td>decalage</td>
                   <td>Apres Traitement</td>
                  </thead>
                  <tbody>
                    <!-- selection des facture aujourd'hui -->
                    <?php 
                        foreach ($all_produit as $get_fact) {
                            

                            ?>
                            <tr>
                                <form action="add_new.php" method="post">
                                    <input type="hidden" name="num" value="<?=$numeroFacture?>">
                                    <input type="hidden" name="id_poisson" value="<?=$get_fact['id_poisson']?>">
                                    <td><?=get_name($get_fact['id_poisson'])?></td>
                                    <td id="poid_init"><?=$get_fact['qtt']?> KG</td>
                                  <?php if(!return_type($get_fact['id_poisson'])) {$count +=1;?>
                                    <td><input type="text" name="qtt" value="<?=$get_fact['qtt']?>" id="input_qtt" onkeyup="maka_p(<?=$get_fact['qtt']?>,event,<?=$count?>)"> KG
                                    <button type="submit">Sauvegarder</button></td>
                                    <td><span id="valeur_apres"></span></td>
                                    <?php }else { ?>
                                    <td><?=return_type($get_fact['id_poisson'])?> KG
                                  </td>
                                    <?php  
                                  if(return_type($get_fact['id_poisson'])) {
                                   $rest = $get_fact['qtt'] - return_type($get_fact['id_poisson']);
                                   $pourcentage = (( return_type($get_fact['id_poisson']) * 100 ) / $get_fact['qtt']);
                                   $decicationPourcentage = 100 - $pourcentage;
                                   $decicationPourcentage = round($decicationPourcentage,2);
                                   echo "<td> $decicationPourcentage %</td>";
                                  }else{
                                    echo "<td>la valeur ne doit pas etre null</td>";
                                  }
                                  } 
                                  ?>
                                </form>
                                <?php
                                  if(return_type($get_fact['id_poisson'])) {
                                    ?>
                                      <td>
                                  <!-- apres traitement -->
                                <form action="avant_chambre.php" method="post">
                                    <input type="hidden" name="num" value="<?=$numeroFacture?>">
                                    <input type="hidden" name="id_poisson" value="<?=$get_fact['id_poisson']?>">
                                  <?php if(!return_type_avant($get_fact['id_poisson'])) {$count +=1;?>
                                    <input type="text" name="qtt" value="<?=return_type($get_fact['id_poisson'])?>" id="input_qtt" onkeyup="maka_p(<?=return_type($get_fact['id_poisson'])?>,event,<?=$count?>)"> KG
                                    <button type="submit">Sauvegarder</button>
                                    <span id="valeur_apres"></span>
                                    <?php }else { ?>
                                    <?=return_type_avant($get_fact['id_poisson'])?> KG
                                  
                                    <?php
                                  } 
                                  ?>
                                </form>
                                </td>
                                    <?php
                                  }else{
                                    ?>
                                      <td><i>Vous devriez sauvegarder</i></td>
                                    <?php
                                  }
                                ?>
                            </tr>
                            <?php  } ?>

                
                  </tbody>
                </table>
              </div>
            </div>
            <!--/ Layout Demo -->
          </div>
          <!-- / Content -->

          <!-- Footer -->


          <div class="content-backdrop fade"></div>
        </div>

<script>
    let poid_init = document.querySelector('#poid_init');
    let input_qtt = document.querySelector('#input_qtt');
    var valeur_apres = document.querySelectorAll('#valeur_apres');
    let poisson = document.querySelector('#poisson');
    
    function maka_p(valeur,e,x) {
        if(valeur>=e.target.value) {
        let rest = valeur - e.target.value;
        let pourcentage = (( e.target.value * 100 ) / valeur);
        let decicationPourcentage = 100 - pourcentage;
        valeur_apres[x-1].innerText = `${decicationPourcentage.toFixed(2)} %`;
        }else{
        valeur_apres[x-1].innerText = "la valeur doit etre inferieur au initiale";
        alert("la valeur doit etre inferieur au initiale");
        input_qtt.value = 0;
        }
    }
</script>