<?php

function is_present($id_selector) {
    require('../db.php');
    $getBy = $db -> prepare("SELECT * FROM present WHERE id_personnel=$id_selector AND date(`date`)=CURDATE()");
    $getBy -> execute();
    $fetchBy = $getBy -> fetch();
    return ($fetchBy["id"]);
}

        require('../db.php');
        $sql_personnel = "SELECT * FROM personnel WHERE poste='Mahajanga' ORDER BY nom ASC";
        $stmt_personnel = $db->prepare($sql_personnel);
        $stmt_personnel->execute();
    
        $stmt_personnel_pre = $stmt_personnel->fetchAll(PDO::FETCH_ASSOC);
    
?>


<div class="container-fluid flex-grow-1 container-p-y col-md-8 col-lg-8 order-2 mb-8">
    <div class="card">
              <h5 class="card-header">Fiche de presence aujourd'hui</h5>
              <div class="table-responsive text-nowrap">
                <table class="table">
                  <thead>
                    <tr class="text-nowrap">
                      <th>Nom</th>
                      <th>Presence</th>
                       
                    </tr>
                </thead>
                <tbody>
                    <!-- selection des facture aujourd'hui -->
                    
                    
                    <?php foreach ($stmt_personnel_pre as $get_per_pre) : ?>
                        <tr class="tr">
                            <td><?=($get_per_pre['nom'])?></td>
                            <td>
                                <?php
                                    if(!is_present($get_per_pre['id'])){
                                ?>
                            <a class="btn btn-success" title="Marquer <?=($get_per_pre['nom'])?> comme present" href="present.php?id=<?=$get_per_pre['id']?>">
                            Absent
                            </a>
                            <?php
                                    }else{
                                ?>
                            <a class="btn btn-primary" title="Marquer <?=($get_per_pre['nom'])?> comme absent" href="absent.php?id=<?=$get_per_pre['id']?>">
                                Present
                            </a>
                            <?php
                                   }
                                ?>
                            </td>
                    </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
            <!--/ Layout Demo -->
          </div>