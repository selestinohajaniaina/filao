<table border="1">
    <tr>
        <td>Nom du poisson</td>
        <td>Quantite</td>
        <td>Prix pour 1 kg</td>
    </tr>
    <?php
    require('../db.php');

    $selection = $db -> prepare("SELECT * FROM detailfilao");
    $selection -> execute();
    $fetchAll = $selection -> fetchAll();

    function getNomPoisson($id_selector) {
        require('../db.php');
        $getBy = $db -> prepare("SELECT nomFilao FROM poisson WHERE id=$id_selector");
        $getBy -> execute();
        $fetchBy = $getBy -> fetch();
        return $fetchBy["nomFilao"];
    }

    foreach($fetchAll as $fetch){
        $id_poisson = getNomPoisson($fetch['id_poisson']);
        $qtt_poisson = $fetch['qtt'];
        $prix_poisson = $fetch['prixUnit'];



        echo "<tr><td>$id_poisson</td><td> $qtt_poisson</td><td> $prix_poisson </td></tr>";
    }
    ?>
    </table>