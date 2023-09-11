<?php

        require('../db.php');
        $sql = "SELECT * FROM facturesortie ORDER BY id DESC LIMIT 7";
        $stmt = $db->prepare($sql);
        $stmt->execute();
    
        $all_facture = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
?>


<div class="container-fluid flex-grow-1 container-p-y col-md-8 col-lg-8 order-3 mb-8">
    <div class="card">
              <h5 class="card-header"> Liste des Chargement Effectué</h5>
              <div class="table-responsive text-nowrap">
                <table class="table">
                  <thead>
                    <tr class="text-nowrap">
                      <th>Numéro</th>
                      <th>destination au</th>
                      <th>Date</th>
                      
                    </tr>
                </thead>
                <tbody>
                    <!-- selection des facture aujourd'hui -->
                    
                    
                    <?php foreach ($all_facture as $get_fact) : ?>
                        <tr>
                            <th scope="row"><?=$get_fact['id']?></th>
                            <td><?=($get_fact['destination'])?></td>
                            <td><?=$get_fact['date']?></td>
                            <td>
                            <a href="../activity/charge_one.php?num=<?=$get_fact['id']?>">
                                Consulter >
                            </a>
                        </td>
                    </tr>
                    <?php endforeach; ?>

                        <tr>
                            <td colspan="4">
                            <center>
                                    <a href="../activity/chargement.php">Voir tout ></a>
                                </center>
                            </td>
                        </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <!--/ Layout Demo -->
          </div>