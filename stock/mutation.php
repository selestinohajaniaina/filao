<?php
require('../db.php');
$selection = $db->prepare("SELECT * FROM detailavant WHERE id!=0 ORDER BY id DESC");
$selection->execute();
$fetchAll = $selection->fetchAll();

// function getNomPoisson($id_selector)
// {
//     require('../db.php');
//     $getBy = $db->prepare("SELECT nomFilao FROM poisson WHERE id=$id_selector");
//     $getBy->execute();
//     $fetchBy = $getBy->fetch();
//     return $fetchBy["nomFilao"];
// }

foreach ($fetchAll as $fetch) {
    $id_poisson = getNomPoisson($fetch['idfilao']);
    $nom_poisson = getNomPoisson($fetch['id_poisson']);

    $qtt_poisson = $fetch['qtt'];
    $id = $fetch['id'];


?>

    <tr>
        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong><?= $id_poisson ?>
            </strong></td>
        <td><?= $nom_poisson ?></td>
        <td>
            <form action="updatefilao.php" method="post">
                <input type="hidden" name="idf" value="<?= $id ?>">
                <select name="newid" class="form-control" id="">
                    <?= require("../poisson/liste.php"); ?>
                </select>
        </td>
        <td>
            <input class="btn btn-primary" type="submit" value="ok">
            </form>
        <td>
            
        </td>
    </tr>
<?php

}
?>
</table>