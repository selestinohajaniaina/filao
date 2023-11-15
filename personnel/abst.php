<?php

// obtenir le jour actuel

$jourActuel = date("d");

function pointage($id_selector, $jour)
{
    require('../db.php');
    $getBy = $db->prepare("SELECT * FROM present WHERE id_personnel=$id_selector AND YEAR(date) = YEAR(CURDATE()) AND MONTH(date) = MONTH(CURDATE()) AND DAY(date) = $jour");
    $getBy->execute();
    $fetchBy = $getBy->fetch();
    return ($fetchBy);
}

function total_heure_month($id_selector, $mois)
{
    require('../db.php');
    $getBy = $db->prepare("SELECT id, id_personnel, SUM(TIME_TO_SEC(TIMEDIFF(fin, debut))/3600) AS total_heure FROM present WHERE id_personnel=$id_selector AND  MONTH(date) = $mois");
    $getBy->execute();
    $fetchBy = $getBy->fetch();
    return ($fetchBy);
}

require('../db.php');
$per = "SELECT * FROM personnel WHERE poste='$ville' ORDER BY nom ASC";
$stmt_per = $db->prepare($per);
$stmt_per->execute();

$stmt_per_pre = $stmt_per->fetchAll(PDO::FETCH_ASSOC);

?>


<div class="container-fluid flex-grow-1 container-p-y col-md-12 col-lg-12 order-2 mb-12">
    <div class="card">
        <h5 class="card-header">Liste de suivis pendant cette mois</h5>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr class="text-nowrap">
                        <th>Nom</th>
                        <?php for ($i = 1; $i <= $jourActuel; $i++) : ?>
                            <th><?=$i ?></th>
                        <?php endfor; ?>
                        <th>Total heure</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($stmt_per_pre as $all_per) : ?>
                        <tr>
                            <td><?= $all_per['nom'] ?></td>
                            <?php for ($i = 1; $i <= $jourActuel; $i++) : ?>
                                <!-- si la date $i est avoir l'heure d'entre alors marquer vert -->
                                <?php if (pointage($all_per['id'], $i)['debut']) : ?>
                                    <td><?php require('icon/ico2.php') ?></td>
                                <?php else : ?>
                                    <!-- sinon marquer rouge -->
                                    <td><?php require('icon/ico.php') ?></td>
                                <?php endif ?>
                            <?php endfor; ?>
                            <td><?= total_heure_month($all_per['id'], date("n"))['total_heure'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <!--/ Layout Demo -->
</div>