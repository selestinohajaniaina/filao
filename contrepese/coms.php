<?php
require('../db.php');
$num=$_GET['num'];
$selection = $db -> prepare("SELECT * FROM traitement_coms WHERE num_fact=$num");
$selection -> execute();
$fetch = $selection -> fetch();

if(!empty($fetch["text"])){
    ?>
<textarea name="coms" class="form-control" required><?=$fetch['text']?></textarea>
    <?php
}else{
    ?>
<textarea name="coms" class="form-control" placeholder="Auccun comentaire pour le moment! Ajouter a nouveau" required></textarea>
    <?php
}
    ?>