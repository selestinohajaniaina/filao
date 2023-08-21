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
        echo "connexion autorisé: test login passed";
    }else{
        echo "<span>votre mot de passe est incorrect, veillez ressayer</span>";
    }
    
}else{

    echo "<span>ce compte n'existe pas</span>";

}

?>