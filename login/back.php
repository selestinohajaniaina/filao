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
    
    if($password == $dbpassword ) {
        $_SESSION["id"] = $fetch["id"];
        echo "veillez patienter, ($name) connexion ....".
        "<br><center><img class='profile-pic-image' src='../img/load.gif' width='250'/></center>";
?>
<script>
    document.location.href = "../html/";
</script>
<?php
    }else{
        echo "
        <script>
            alert('votre mot de passe est incorrect, veillez ressayer');
            document.location.href = '../html/login?name=$name';
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
