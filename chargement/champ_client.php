<?php
    $sql_new = "SELECT destination FROM facturesortie WHERE id=".$_GET["id"];
    $execute = $db->prepare($sql_new);
    $execute->execute();
    $resultat = $execute -> fetch(); 
    $destin = $resultat["destination"];
    if($destin == "client") :
?>
    <form action="" method="post">
        <input type="text" name="nom" id="nom" placeholder="Nom du client">
        <input type="text" name="Adresse" id="Adresse" placeholder="Adress du client">
        <input type="text" name="contact" id="contact" placeholder="Contact">
    </form>
<?php endif; ?>