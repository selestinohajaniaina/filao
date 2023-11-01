<?php

require('../db.php');
$sql = "SELECT idfilao, SUM(qtt) AS qtt_total FROM detailavant GROUP BY idfilao ORDER BY idfilao ASC";
$stmt = $db->prepare($sql);
$stmt->execute();

$all_facture = $stmt->fetchAll(PDO::FETCH_ASSOC);

function getNomPoisson($id_selector)
{
  require('../db.php');
  $getBy = $db->prepare("SELECT nomFilao FROM poisson WHERE id=$id_selector");
  $getBy->execute();
  $fetchBy = $getBy->fetch();
  return $fetchBy["nomFilao"];
}

?>


<div class="container-fluid flex-grow-1 container-p-y col-md-8 col-lg-8 order-3 mb-8">
  <div class="card">
    <h5 class="card-header"> Liste d' entré à chambre froid</h5>
    <div class="table-responsive text-nowrap">
      <table class="table">
        <thead>
          <tr class="text-nowrap">
            <th>categorie poisson</th>
            <th>Poid</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <!-- selection des facture aujourd'hui -->


          <?php foreach ($all_facture as $get_fact) : ?>
            <tr>
              <th scope="row"><?= getNomPoisson($get_fact['idfilao']) ?></th>
              <td><?= ($get_fact['qtt_total']) ?></td>
              
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>

    </div>
  </div>
  <!--/ Layout Demo -->
</div>