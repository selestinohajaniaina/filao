<?php

//including db

require('../db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $password = $_POST["password"];
    $name = $_POST["name"];

// start a session
session_start();
$_SESSION['username'] = $name;

//selecting to db and count if it exist

$select=$db->prepare("select * from user where username='$name'");
$select->execute();
$nbrExist=$select->rowCount();
$fetch=$select->fetch();

//test if selected exist

if($nbrExist>0){

    $dbpassword=$fetch["password"];
    $dbname=$fetch["username"];
    
    if(($password == $dbpassword) & ($dbname == $name)  ) {
        $_SESSION["id"] = true;
        $_SESSION["id"] = $fetch["id"];
        $_SESSION["name"] = $fetch["username"];
        ?>
        <script>
            document.location.href = "../html/";
        </script>
        <?php
            }else{
                echo "
                <script>
                    alert('votre mot de passe est incorrect, veillez ressayer');
                    document.location.href = '../html/login.php;
                </script>
                ";
            }
            
        }else{

            echo "
            <script>
                alert('BCHDSBFHSDBFHK')
            </script>
            ";

        }

    }

?>
