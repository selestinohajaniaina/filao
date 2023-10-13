<?php
require('../session.php');
function getpaied($id_selector)
{
  require('../db.php');
  $getBy = $db->prepare("SELECT payee FROM facture WHERE id=$id_selector");
  $getBy->execute();
  $fetchBy = $getBy->fetch();
  return $fetchBy["payee"];
}
function getRest($id_selector)
{
  require('../db.php');
  $getBy = $db->prepare("SELECT restapayer FROM facture WHERE id=$id_selector");
  $getBy->execute();
  $fetchBy = $getBy->fetch();
  return $fetchBy["restapayer"];
}
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
        <?php $title = 'Facture Numero: ' . $_GET['num'] ?>
        <?php require('../nav/header.php') ?>
        <!-- / Navbar -->

        <!-- Content wrapper -->
        <div class="content-wrapper">
          <!-- Content -->

          <div class="card-body">
            <?php require('detail_fournisseur.php') ?>

            <!-- Social Accounts -->
            <div class="card" id="content">
              <div class="col-md">
                <h5 class="mt-4 mx-2">Facture Numero : <?= $_GET['num'] ?></h5>
                <h5 class="my-2 mx-2">Nom Fournisseur : <?= $nom_fou ?></h5>
                <h5 class="my-2 mx-2">Adresse : <?= $Adresse_fou ?></h5>
                <h5 class="mb-4 mx-2">Contact : <?= $contact_fou ?></h5>
              </div>
              <div class="table-responsive text-nowrap">
                <table class="table">
                  <thead>
                    <tr>
                      <th>Poisson</th>
                      <th>Poid</th>
                      <th>Prix Unitaire</th>
                      <th>Prix Total</th>

                    </tr>
                  </thead>
                  <tbody class="table-border-bottom-0">
                    <?php require('liste_all_facture.php') ?>
                  </tbody>
                </table>
              </div>
              <h6>Prix total a payer: <i><?= $total ?></i> AR</h6>
            </div>
            <h6>somme payer : <i><?= getpaied($_GET['num']) ?> </i> AR</h6>
            <h6>Reste à payer: <i><?= getRest($_GET['num']) ?> </i> AR</h6>
            <?php
            $vita =  $total;
            $paid =  Getpaied($_GET['num']);
            if ($vita == $paid) {
            ?>
              <h2>facture fa vita</h2>
            <?php
            } else {
            ?>
              <form action="non_payer.php" method="post">
                <input type="hidden" name="totalapayer" value="<?= $total ?>">
                <input type="hidden" name="numfac" value="<?= $_GET['num'] ?>">
                <input type="number" name="payeena" id="">
              </form>
            <?php
            }
            ?>


            <button class="btn btn-primary" onclick="imprimerContenu()">Imprimer</button>
            <?php require('is_payer.php') ?>
            <!-- /Social Accounts -->


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
    function imprimerContenu() {
      var contenuDiv = document.getElementById('content').innerHTML;
      var fenetreImpression = window.open('', '_blank');
      fenetreImpression.document.write('<html><head><link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css"/><link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" /><link rel="stylesheet" href="../assets/css/demo.css" /><title>Impression</title></head><body>');
      fenetreImpression.document.write(contenuDiv);
      fenetreImpression.document.write('</body></html>');
      fenetreImpression.document.close();
      fenetreImpression.print();
      fermerModal(); // Fermer la modal après l'impression
    }
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