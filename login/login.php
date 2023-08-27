<!DOCTYPE html>
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
</form>

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
</body>
</html>