<?php

//including db

require('../db.php');

//selecting to db and count if it exist

$select=$db->prepare("select * from user where username='$name'");
$select->execute();
$nbrExist=$select->rowCount();
$fetch=$select->fetch();

//test if selected exist

if($nbrExist>0){

    $dbname=$fetch["username"];
    $dbpassword=$fetch["password"];
    
    if($password == $dbpassword ) {
         $_SESSION['username'] = $dbname;
        echo "vous ete connecté en tant que ($dbname)connexion autorisé: test login passed";
?>
<script>
    document.location.href = "../fournisseur/front.php";
</script>
<?php
    }else{
        echo "
        <script>
            alert('votre mot de passe est incorrect, veillez ressayer')
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

?>
