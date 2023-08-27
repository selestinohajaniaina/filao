<table border="1">
    <tr>
        <td>Nom du poisson</td>
        <td>Quantite</td>
        <td>Prix pour 1 kg</td>
    </tr>
    <?php
    require('../db.php');
    $numeroFacture = $_GET["numFact"];
    $selection = $db -> prepare("SELECT * FROM detailfilao WHERE NumFac=$numeroFacture");
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