<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<form class="login" method="POST">
  <input type="text" placeholder="Username" autocomplete="off" name="name">
  <input type="password" placeholder="Password" autocomplete="off" name="password">
  <input type="submit" value="Login"  name="login"/>
</form> -->

<?php
  // if(isset($_POST["login"])){
  //   $name=$_POST["name"];
  //   $password=$_POST["password"];
  //   if(empty($name)||empty($password)){
  //     ?>
  //     <script>
  //       alert("veillez remplir tous les champs");
  //     </script>
  //     <?php
  //   }else{
  //     require('back.php');
  //   }
  // }
 ?>
<!-- </body>
</html> -->

<?php
  if(isset($_POST["login"])){
    $name=$_POST["name"];
    $password=$_POST["password"];
    if(empty($name)||empty($password)){
      ?>
      <script>
        alert("veillez remplir tous les champs");
      </script>
      <?php
    }else{
      require('back.php');
    }
  }
 ?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Modernize Free</title>
  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="../assets/css/styles.min.css" />

</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <div
      class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-3">
            <div class="card mb-0">
              <div class="card-body">
                <a href="./index.html" class="text-nowrap logo-img text-center d-block py-3 w-100">
                  <img src="../assets/images/logos/dark-logo.svg" width="180" alt="">
                </a>
                <p class="text-center"></p>
                <form method="POST">
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nom Utilisateur</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1"autocomplete="off" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-4">
                    <label for="exampleInputPassword1" class="form-label">Mot de Passe</label>
                    <input type="password" class="form-control" name="password" id="exampleInputPassword1">
                  </div>
                  <div class="d-flex align-items-center justify-content-between mb-4">
                   
                  </div>
                  <input type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2" value="Login"  name="login"/>
                  <!-- <a href="./index.html" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Se Connecter</a> -->
                  <div class="d-flex align-items-center justify-content-center">
                    <p class="fs-4 mb-0 fw-bold"></p>
                    <a class="text-primary fw-bold ms-2" href="./authentication-register.html"></a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    // Get the modal
    var modal = document.getElementById("myModal");
    
    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");
    
    // Get the <span> element that closes the modal
    var span = document.getElementById("close");
    
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
</body>

</html>