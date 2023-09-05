<?php

        require('../db.php');

        function get_name($id_to_get) {
            require('../db.php');
        $new_sql = "SELECT * FROM poisson WHERE id = $id_to_get";
        $new_st = $db->prepare($new_sql);
        $new_st->execute();
        $fetch_name = $new_st -> fetch();
        return $fetch_name["nomFilao"];
        }

        function return_type($num_to_get) {
            require('../db.php');
            $numeroFacture = $_GET["num"];
            $selection = $db -> prepare("SELECT * FROM detailfilaocontre WHERE NumFac=$numeroFacture AND id_poisson=$num_to_get");
            $selection -> execute();
            $fetchAll = $selection -> fetchAll();
            $nbr = count($fetchAll);
            if($nbr) {
        return true;

            }
        return false;
        }

        $numeroFacture = $_GET["num"];
        $select_sql = "SELECT * FROM detailfilao WHERE NumFac=$numeroFacture";
        $stmt_contre = $db->prepare($select_sql);
        $stmt_contre->execute();
    
        $all_produit = $stmt_contre->fetchAll(PDO::FETCH_ASSOC);
        $count = 0;
?>
<table>
    <?php 
    foreach ($all_produit as $get_fact) {
        $count +=1;

        if(!return_type($get_fact['id_poisson'])) :
        ?>
        <tr>
            <form action="add_new.php" method="post">
            <td><input type="hidden" name="num" value="<?=$numeroFacture?>"></td>
            <td><input type="hidden" name="id_poisson" value="<?=$get_fact['id_poisson']?>"></td>
            <td><?=get_name($get_fact['id_poisson'])?></td>
            <td id="poid_init"><?=$get_fact['qtt']?> KG</td>
            <td><input type="text" name="qtt" onkeyup="maka_p(<?=$get_fact['qtt']?>,event,<?=$count?>)"></td>
            <td><button type="submit">Sauvegarder</button></td>
            <td><span id="valeur_apres"></span></td>
            </form>
        </tr>
        <?php endif; } ?>
        
</table>

<script>
    let poid_init = document.querySelector('#poid_init');
    var valeur_apres = document.querySelectorAll('#valeur_apres');
    let poisson = document.querySelector('#poisson');
    
    function maka_p(valeur,e,x) {
        if(valeur>e.target.value) {
        let rest = valeur - e.target.value;
        let pourcentage = (( e.target.value * 100 ) / valeur).toFixed(2);
        valeur_apres[x-1].innerText = `soit ${pourcentage} % par rapport a initiale, alors ` + rest + ' perte';
        }else{
        valeur_apres[x-1].innerText = "la valeur doit etre inferieur au initiale";
        }
    }
</script>