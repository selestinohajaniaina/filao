<?php 
  require('../session.php');
  require('../sessioncontrole.php');
?>
<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>Logiciel de Gestion</title>

  <meta name="description" content="" />

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />

  <!-- Icons. Uncomment required icon fonts -->
  <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

  <!-- Core CSS -->
  <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
  <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
  <link rel="stylesheet" href="../assets/css/demo.css" />

  <!-- Vendors CSS -->
  <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

  <!-- <link rel="stylesheet" href="../assets/vendor/libs/apex-charts/apex-charts.css" /> -->

  <!-- Page CSS -->
  <script src="../dashboardata/chart.js"></script>
  <!-- Helpers -->
  <script src="../assets/vendor/js/helpers.js"></script>

  <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
  <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
  <script src="../assets/js/config.js"></script>
  <style>
    /* Style the tab */
    .tab {
      overflow: hidden;
      border: 1px solid #ccc;
      background-color: #f1f1f1;
    }

    /* Style the buttons that are used to open the tab content */
    .tab button {
      background-color: inherit;
      float: left;
      border: none;
      outline: none;
      cursor: pointer;
      padding: 14px 16px;
      transition: 0.3s;
    }

    /* Change background color of buttons on hover */
    .tab button:hover {
      background-color: #ddd;
    }

    /* Create an active/current tablink class */
    .tab button.active {
      background-color: #ccc;
    }

    /* Style the tab content */
    .tabcontent {
      display: none;
      padding: 6px 12px;
      border: 1px solid #ccc;
      border-top: none;
    }
  </style>
  <script>
    function openCity(evt, cityName) {
      var i, tabcontent, tablinks;
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }
      tablinks = document.getElementsByClassName("tablinks");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
      }
      document.getElementById(cityName).style.display = "block";
      evt.currentTarget.className += " active";

    }
  </script>
</head>

<body>
  <!-- Layout wrapper -->
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <!-- Menu -->
      <?php require('../nav/menu.php') ?>
      <!-- / Menu -->

      <!-- Layout container -->
      <div class="layout-page">

        <!-- Navbar -->
        <?php $title = 'Gestion des Personnelles' ?>
        <?php require('../nav/header.php') ?>
        <!-- / Navbar -->

        <!-- add bar -->
        <div class="container-fluid flex-grow-1 container-p-y col-md-8 col-lg-12 order-2 mb-12">
          <center>
            <div class="tab">
              <button class="tablinks" id="defaultOpen" onclick="openCity(event, 'London')">Liste Majunga</button>
              <button class="tablinks" onclick="openCity(event, 'Paris')">Liste Antananarivo</button>
            </div>
          </center>

          <!-- Tab content -->
          <div id="London" class="tabcontent">

            <?php
            if ($placeSession = 'majunga'){
              ?>
              <a href="presecepage.php"class="btn btn-primary">
                Liste de presence
              </button></a>
              <?php 

            }
            $ville = "Mahajanga";
            require('liste_mj.php');
            ?>
          </div>
          <div id="Paris" class="tabcontent">
            <h3>Personnel à Antananarivo</h3>
            <?php
            $ville = "Antananarivo";
            require('liste_mj.php');
            ?>
          </div>
        </div>
        <div class="container-fluid flex-grow-1 container-p-y col-md-8 col-lg-8 order-2 mb-8">
          <div class="card">
            <div class="card-body">
              <center>
                <h3 class="card-header">Ajout Personnel</h3>
              </center>
              <form method="post" action="add.php">
                <br>
                <div class="mx-2">Nom: </div>
                <div>
                  <input type="text" name="name" class="form-control" />
                </div><br>
                <div class="mx-2">Contact: </div>
                <div>
                  <input type="text" name="contact" class="form-control" />
                </div><br>
                <div class="mx-2">Poste: </div>
                <div>
                  <select name="poste" class="form-select">
                    <option value="Mahajanga">Mahajanga</option>
                    <option value="Antananarivo">Antananarivo</option>
                  </select>

                </div>
                <br>
                <button class="btn btn-primary form-control" type="submit" name="btn_search">Ajouter</button>

              </form>
            </div>
          </div>
        </div>
        <!--/ Layout Demo -->
      </div>

      <!-- / add bar -->

      <?php
      // ajouter a la variable $vile le poste

      // require('presence.php');

      // // liste pendant un mois
      // require('abst.php');

      // presence
      ?>
    </div>
    <!-- / Layout page -->
  </div>
  <!-- Tab links -->

  <!-- Overlay -->
  <div class="layout-overlay layout-menu-toggle"></div>
  </div>

  <!-- / Layout wrapper -->
  <!-- Core JS -->
  <!-- build:js assets/vendor/js/core.js -->
  <script src="../assets/vendor/libs/jquery/jquery.js"></script>
  <script src="../assets/vendor/libs/popper/popper.js"></script>
  <script src="../assets/vendor/js/bootstrap.js"></script>
  <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

  <script src="../assets/vendor/js/menu.js"></script>
  <!-- endbuild -->

  <!-- Vendors JS -->
  <script src="../assets/vendor/libs/apex-charts/apexcharts.js"></script>

  <!-- Main JS -->
  <script src="../assets/js/main.js"></script>

  <!-- Page JS -->
  <script src="../assets/js/dashboards-analytics.js"></script>

  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>