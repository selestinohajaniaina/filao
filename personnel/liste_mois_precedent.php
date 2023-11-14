<?php

$moisActuel = date("n"); // Obtenez le mois en cours (1 = janvier, 2 = février, etc.)
$anneeActuelle = date("Y"); // Obtenez l'année en cours

// Gérez le cas particulier où le mois actuel est janvier
if ($moisActuel == 1) {
    $moisPrecedent = 12; // Le mois précédent est décembre
    $anneePrecedente = $anneeActuelle - 1; // L'année précédente
} else {
    $moisPrecedent = $moisActuel - 1;
    $anneePrecedente = $anneeActuelle;
}

$nombreDeJours = cal_days_in_month(CAL_GREGORIAN, $moisPrecedent, $anneePrecedente);
$jrtrav = $nombreDeJours - 2;
$htrav = 8 * $jrtrav;

$nombreDeJours2 = cal_days_in_month(CAL_GREGORIAN, date('m'), $anneePrecedente);

// echo "Le mois précédent avait $nombreDeJours jours.";


function pointage_precedant($id_selector, $annee, $mois, $jour)
{
    require('../db.php');
    $getBy = $db->prepare("SELECT * FROM present WHERE id_personnel=$id_selector AND YEAR(date) = $annee AND MONTH(date) = $mois AND DAY(date) = $jour");
    $getBy->execute();
    $fetchBy = $getBy->fetch();
    return ($fetchBy);
}

function pointage_precedantday($id_selector, $annee, $mois)
{
    require('../db.php');
    $getBy = $db->prepare("SELECT  COUNT(id_personnel) AS nbrjr  FROM present WHERE id_personnel=$id_selector AND YEAR(date) = $annee AND MONTH(date)=$mois ");
    $getBy->execute();
    $fetchBy = $getBy->fetch();
    return ($fetchBy);
}


// commenter cette car il est deja existe depuis le fichier liste_absent.php

// require('../db.php');
//     $per = "SELECT * FROM personnel WHERE poste='Mahajanga' ORDER BY nom ASC";
//     $stmt_per = $db->prepare($per);
//     $stmt_per->execute();
//     $stmt_per_pre = $stmt_per->fetchAll(PDO::FETCH_ASSOC);

// Obtenez le nom complet du mois précédent
$nomMoisPrecedent = date("F", mktime(0, 0, 0, $moisPrecedent, 1, $anneePrecedente));
$jrpresent = pointage_precedantday($all_per['id'], $anneeActuelle, $moisPrecedent)['nbrjr'];

?>


<div class="container-fluid flex-grow-1 container-p-y col-md-12 col-lg-12 order-2 mb-12">
    <div class="card">
        <h5 class="card-header">Liste de suivis pendant le precedant (<?= $nomMoisPrecedent ?>)</h5>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr class="text-nowrap">
                        <th>Nom</th>
                        <?php for ($i = 1; $i <= $nombreDeJours; $i++) : ?>
                            <th><?= $i ?></th>
                        <?php endfor; ?>
                        <th>Heur de travail</th>
                        <th>nbr Jour</th>
                        <th>Salaire</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($stmt_per_pre as $all_per) : ?>
                        <tr>
                            <td><?= $all_per['nom'] ?></td>
                            <?php for ($i = 1; $i <= $nombreDeJours; $i++) : ?>
                                <!-- si la date $i est avoir l'heure d'entre alors marquer vert -->
                                <?php if (pointage_precedant($all_per['id'], $anneeActuelle, $moisPrecedent, $i)['debut']) : ?>
                                    <td><?php require('icon/ico2.php') ?></td>
                                <?php else : ?>
                                    <!-- sinon marquer rouge -->
                                    <td><?php require('icon/ico.php') ?></td>
                                <?php endif ?>
                            <?php endfor; ?>
                            <td><?= total_heure_month($all_per['id'], $moisPrecedent)['total_heure'] ?></td>
                            <td><?= pointage_precedantday($all_per['id'], $anneeActuelle, $moisPrecedent)['nbrjr'] ?></td>
                            <td><?php
                                $slr = pointage_precedantday($all_per['id'], $anneeActuelle, $moisPrecedent)['nbrjr'];
                                if ($slr  ==  $jrtrav) {
                                    $karama = 300000;
                                    echo $karama;
                                } elseif ($slr  > $jrtrav) {
                                    $karama = 300000 + 10000 * (pointage_precedantday($all_per['id'], $anneeActuelle, $moisPrecedent)['nbrjr'] - $jrtrav);
                                    echo $karama;
                                } elseif ($slr  == 0) {
                                    $karama = 300000 * 0;
                                    echo $karama;
                                } else {
                                    $karama = 300000 - 10000 * ($jrtrav - $slr );
                                    echo $karama;
                                }

                                ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <!--/ Layout Demo -->
</div>