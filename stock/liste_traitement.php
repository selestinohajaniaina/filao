<?php

        require('../db.php');
        $sql = "SELECT * FROM detailavant ORDER BY id_poisson DESC";
        $stmt = $db->prepare($sql);
        $stmt->execute();
    
        $all_facture = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // function getNomPoisson($id_selector) {
        //     require('../db.php');
        //     $getBy = $db -> prepare("SELECT nomFilao FROM poisson WHERE id=$id_selector");
        //     $getBy -> execute();
        //     $fetchBy = $getBy -> fetch();
        //     return $fetchBy["nomFilao"];
        // }
    
?>


<div class="container-fluid flex-grow-1 container-p-y col-md-8 col-lg-8 order-3 mb-8">
    <div class="card">
              <h5 class="card-header"> Liste d' entré à chambre froid</h5>
              <div class="table-responsive text-nowrap">
                <table class="table">
                  <thead>
                    <tr class="text-nowrap">
                      <th>Nom poisson</th>
                      <th>Poid</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- selection des facture aujourd'hui -->
                    
                    
                    <?php foreach ($all_facture as $get_fact) : ?>
                        <tr>
                            <th scope="row"><?=getNomPoisson($get_fact['id_poisson'])?></th>
                            <td><?=($get_fact['qtt'])?></td>
                    </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
            <!--/ Layout Demo -->
          </div>