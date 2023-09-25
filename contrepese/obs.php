<?php
$id_obs=$get_fact["id"];
require('../db.php');
$num=$_GET['num'];
$selection_obs = $db -> prepare("SELECT * FROM observation WHERE id_obs=$id_obs");
$selection_obs -> execute();
$fetch_obs = $selection_obs -> fetch();
?>

<td>
      <form action="add_obs.php" method="post">
      <input type="hidden" name="num" value="<?=$numeroFacture?>">
      <input type="hidden" value="<?=$id_obs?>" name="id_obs"/>
<?php

if(empty($fetch_obs["obs"])){

    ?>
        <input type="text" class="form-control" name="obs" placeholder="Appuyer 'Entrer' pour envoyer">
    <?php

}else{

    ?>
        <p><?=$fetch_obs["obs"]?></p>
<?php

}
    ?>
      </form>                            
</td>