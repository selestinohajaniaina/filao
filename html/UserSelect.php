<!DOCTYPE html>
<?php require('user.php');?>
<html lang="en" class="light-style customizer-hide" dir="ltr" data-theme="theme-default" data-assets-path="../assets/"
  data-template="vertical-menu-template-free">

<head>
  <meta charset="utf-8" />
  <meta name="viewport"
    content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>Nordine Collecte</title>

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

  <!-- Page CSS -->
  <!-- Page -->
  <link rel="stylesheet" href="../assets/vendor/css/pages/page-auth.css" />
  <!-- Helpers -->
  <script src="../assets/vendor/js/helpers.js"></script>

  <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
  <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
  <script src="../assets/js/config.js"></script>
</head>

<body>
  <!-- Content -->
  <div class="container-xxl">
    <div class="authentication-wrapper authentication-basic container-p-y">
      <div class=" w-50">
        <div class=" justify-content-center w-100">
          <center><h1>Nordine Collecte </h1>Choisir ta Session</center>
          <div class="row">
          <div class="col-sm-4 col-md-6 col-lg-4 col-xl-4 order-0 mb-4 mt-10">
            <div class="card">
              <div class="card-body">
                <center>
                <div class="bg-success rounded-circle  align-items-center"style="width: 100px; height: 100px;">
                <!-- <div class="d-flex flex-column  gap-1"> -->
<br>
                  <h1 class="fs-0"><?=strtoupper(get_name(1)[0])?></h1>
                </div>
                <br>
                <a class="btn btn-primary w-100" href="login.php?name=<?=get_name(1)?>" class=""><?=get_name(1)?></a>
                </center>
              </div>
            </div>
          </div>
          <div class="col-sm-4 col-md-6 col-lg-4 col-xl-4 order-0 mb-4 mt-10">
            <div class="card">
              <div class="card-body">
              <center>
                <div class="bg-success rounded-circle  align-items-center"style="width: 100px; height: 100px;">
                <!-- <div class="d-flex flex-column  gap-1"> -->
<br>
                  <h1 class="fs-0"><?=strtoupper(get_name(2)[0])?></h1>
                </div> <br>
                <a class="btn btn-primary w-100" href="login.php?name=<?=get_name(2)?>" class=""><?=get_name(2)?></a>
                </center>
              </div>
            </div>
          </div>
          <div class="col-sm-4 col-md-6 col-lg-4 col-xl-4 order-0 mb-4 mt-10">
            <div class="card">
              <div class="card-body">
              <center>
                <div class="bg-success rounded-circle  align-items-center"style="width: 100px; height: 100px;">
                <!-- <div class="d-flex flex-column  gap-1"> -->
<br> 
                  <h1 class="fs-0"><?=strtoupper(get_name(3)[0])?></h1>
                </div> <br>
                <a class="btn btn-primary w-100" href="login.php?name=<?=get_name(3)?>" class=""><?=get_name(3)?></a>
                </center>
              </div>
            </div>
          </div>
        </div>
        </div>
        </div>
        </div> 
</div>


  <!-- / Content -->



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