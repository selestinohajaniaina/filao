<!DOCTYPE html>
<?php
require('../session.php');
require('../sessioncontrole.php');
require('data.php');
require('date.php');
?>

<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>Collect</title>

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
</head>

<body>
  <!-- Layout wrapper -->
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <!-- Menu -->
      <?php require('../nav/menu.php'); ?>
      <!-- / Menu -->

      <!-- Layout container -->
      <div class="layout-page">

        <!-- Navbar -->
        <?php $title = '$placeSession' ?>
        <?php require('../nav/header.php') ?>
        <!-- / Navbar -->

        <!-- Content wrapper -->
        <div class="content-wrapper">
          <!-- Content -->

          <div class="container-xxl flex-grow-1 container-p-y">

            <div class="row">
              <!-- Order Statistics -->

              <div class="col-md-6 col-lg-4 col-xl-4 order-1 mb-4">
                <div class="card h-100">
                  <div class="card-body">
                    <div class="d-flex justify-content-between  flex-column mb-3">
                      <h1>Nombre de sac</h1>
                      <canvas class="d-flex flex-column align-items-center gap-0" id="myChart2" style="display: block; width: 100%; height: 150px;">
                        <h1></h1>
                      </canvas>
                      <div class="d-flex flex-column  gap-0">
                        <h3 class="mb-2"><?= (get_all(2)[0] - get_sortie(2)[0]) ?> Kg : <?= (get_all(2)[1] - get_sortie(2)[1]) ?> Sac</h3>
                        <span>Poids total externe</span>
                      </div>
                      <div class="d-flex flex-column  gap-0">
                        <h3 class="mb-2"><?= (get_all(1)[0] - get_sortie(1)[0]) ?> Kg : <?= (get_all(1)[1] - get_sortie(1)[1]) ?> Sac</h3>
                        <span>Poids total interne</span>
                      </div>



                    </div>

                  </div>
                </div>
              </div>
              <!--/ Order Statistics -->

              <!-- Expense Overview -->

              <!--/ Expense Overview -->

              <!-- Transactions -->
              <div class="col-md-8 col-lg-8 order-0 mb-8">
                <div class="card h-100">
                  <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="card-title m-0 me-2">Diagramme </h5>

                  </div>
                  <div class="card-body">
                    <div>
                      <canvas id="myChart"></canvas>
                    </div>
                  </div>
                </div>
              </div>
              <!--/ Transactions -->


              <?php require('liste_facture.php') ?>

              <?php require('liste_chargement.php') ?>
              <?php require('liste_stock.php') ?>
            </div>
          </div>
          <!-- / Content -->


          <div class="content-backdrop fade"></div>
        </div>
        <!-- Content wrapper -->
      </div>
      <!-- / Layout page -->
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
  </div>
  <!-- / Layout wrapper -->

  <script>
    let sem = [
      "Dimanche",
      "Lundi",
      "Mardi",
      "Mercredi",
      "Jeudi",
      "Vendredi",
      "Samedi",
    ];
    var date = new Date();

    function get_jour(sous) {
      let code = (date.getDay() - sous);
      code = code < 0 ? 7 + code : code;
      console.log(code);
      return code;
    }

    var ctx = document.getElementById("myChart").getContext("2d");
    var myChart = new Chart(ctx, {
      type: "line",
      data: {
        labels: [
          sem[get_jour(7)],
          sem[get_jour(6)],
          sem[get_jour(5)],
          sem[get_jour(4)],
          sem[get_jour(3)],
          sem[get_jour(2)],
          sem[get_jour(1)],
        ],
        datasets: [{
            label: "Achat effectué",
            data: [
              <?= get_achat($hier_6) ?>,
              <?= get_achat($hier_5) ?>,
              <?= get_achat($hier_4) ?>,
              <?= get_achat($hier_3) ?>,
              <?= get_achat($hier_2) ?>,
              <?= get_achat($hier_1) ?>,
              <?= get_achat($hier) ?>,
            ],
            backgroundColor: "rgba(153,205,1,0.6)",
          },
          {
            label: "vente particulier",
            data: [
              <?= get_particulier($hier_6) ?>,
              <?= get_particulier($hier_5) ?>,
              <?= get_particulier($hier_4) ?>,
              <?= get_particulier($hier_3) ?>,
              <?= get_particulier($hier_2) ?>,
              <?= get_particulier($hier_1) ?>,
              <?= get_particulier($hier) ?>,
            ],
            backgroundColor: "rgba(155,153,10,0.6)",
          },
        ],
      },
    });
    // console.log(get_jour(6),get_jour(5),get_jour(4),get_jour(3),get_jour(2),get_jour(1),get_jour(0),);
    var ctx2 = document.getElementById("myChart2").getContext("2d");
    var stockexterne = <?= (get_all(2)) ?>;
    var stockinterne = <?= (get_all(1)[1] - get_sortie(1)[1]) ?>;
    var myChart2 = new Chart(ctx2, {
      type: "doughnut",
      data: {
        labels: [
          "externe",
          "interne",
        ],
        datasets: [{
          label: "work load",
          data: [stockexterne, stockinterne],
          backgroundColor: [
            'rgb(255, 99, 132)',
            'rgb(54, 162, 235)'
          ],

        }],
      },
    });
  </script>
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