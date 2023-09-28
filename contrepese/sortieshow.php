<?php
$id_sortie=$get_fact["id"];
require('../db.php');
$num=$_GET['num'];
$selection_obs = $db -> prepare("SELECT * FROM sortie WHERE id_sortie=$id_sortie");
$selection_obs -> execute();
$fetch_obs = $selection_obs -> fetch();
?>

<td id="sortiefilao"> 
<?php
if(empty($fetch_obs["sortieqtt"])){
   $sortie= "hhhhhh"
    ?>
     <form action="sortie.php" method="post">
        <input type="hidden" name="num" value="<?=$numeroFacture?>">
        <input type="hidden" value="<?=$id_sortie?>" name="id_sortie"/>
        <input type="text" class="form-control" name="sortieqtt" autocomplete="off" placeholder="">
     </form>  
    <?php
}else{
    $sortie=$fetch_obs["sortieqtt"];
    ?> 
    <?=$sortie?>
    
    <?php
}
    ?>
                                
</td>