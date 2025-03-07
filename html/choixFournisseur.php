<?php
  require('../session.php');
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
      <?php require('../nav/menu.php')?>
      <!-- / Menu -->


      <!-- Layout container -->
      <div class="layout-page">
        
        <!-- Navbar -->
        <?php $title='Choix du Fournisseur'?>
        <?php require('../nav/header.php')?>
        <!-- / Navbar -->

        <!-- Content wrapper -->
        <div class="content-wrapper">
          <!-- Content -->

          <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span> </h4>

            <!-- Basic Bootstrap Table -->
            <form action="../fournisseur/select.php" method="post">
              <div class="card">
                <h5 class="card-header"></h5>
                <div class="table-responsive text-nowrap">
                  <center>
                    <div class="col-md-6">
                      <div class="card mb-4">
                        <h5 class="card-header">Choix de Fournisseur </h5>
                        <div class="card-body">
                          <div class="mb-3 col">
                            <select id="defaultSelect" class="form-select" name="fournisseur">
                              <?php require('../fournisseur/select_list.php') ?>
                            </select>
                            <br>

                            <div class="mb-3">
                              <button class="btn btn-primary d-grid w-100" type="submit">Valider</button>
                            </div>
                            <!-- <div class=" mb-3">
                              <small class="text-light fw-semibold">Ou</small>
                              <div class="mt-3"> -->
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-secondary d-grid w-100" data-bs-toggle="modal"
                              data-bs-target="#basicModl">
                              Ajouter Un Nouvelle Fournisseur
                            </button>


                            
                          </div>
                        </div>
                      </div>


                    </div>
                </div>
                </center>

              </div>
          </form>
          <!--/ Basic Bootstrap Table -->

          <!-- Modal -->
          <div class="modal fade" id="basicModl" tabindex="-1" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel1">Nouvelle Fournisseur</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                      aria-label="Close"></button>
                                  </div>
                                  <form action="../fournisseur/add_new.php" method="POST">
                                    <div class="modal-body">
                                      <div class="row">
                                        <div class="col mb-3">
                                          <label for="nameBasic" class="form-label">Nom</label>
                                          <input type="text" id="nameBasic" autocomplete="off" class="form-control"
                                            placeholder="Non de Fournisseur" name="nom"/>
                                        </div>
                                      </div>
                                      <div class="row g-2">
                                        <div class="col mb-0">
                                          <label for="" class="form-label">Adresse</label>
                                          <input type="text" id="" autocomplete="off" class="form-control"
                                            placeholder="Adresse de Fournisseur" name="adressF"/>
                                        </div>
                                        <div class="col mb-0">
                                          <label for="dobBasic" class="form-label">Contact</label>
                                          <input type="text" id="dobBasic" autocomplete="off" class="form-control"
                                            placeholder="Contact de Fournisseur" name="numeroF"/>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="modal-footer">

                                      <button  class="btn btn-primary">Enregistrer</button>
                                    </div>
                                  </form>
                                </div>
                              </div>
                            </div>

          <!-- / Footer -->

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

  <!-- Core JS -->
  <!-- build:js assets/vendor/js/core.js -->
  <script src="../assets/vendor/libs/jquery/jquery.js"></script>
  <script src="../assets/vendor/libs/popper/popper.js"></script>
  <script src="../assets/vendor/js/bootstrap.js"></script>
  <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

  <script src="../assets/vendor/js/menu.js"></script>
  <!-- endbuild -->

  <!-- Vendors JS -->

  <!-- Main JS -->
  <script src="../assets/js/main.js"></script>

  <!-- Page JS -->

  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>