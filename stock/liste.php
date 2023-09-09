<?php
    require('../db.php');
    $range = !empty($_SESSION["emplacement"])?($_SESSION["emplacement"] == "eto" ? 1:2):1;
    $selection = $db -> prepare("SELECT * FROM stock WHERE date(`date`)=CURDATE() AND place=$range ORDER BY id DESC");
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
        $nombre_sac = $fetch['nombre_sac'];


        ?>

<tr>
                                  <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong><?=$id_poisson?>
                                    </strong></td>
                                  <td><?=$qtt_poisson?></td>
                                  <td>
                                  <?=$nombre_sac?>
                                  </td>
                                  <td>
                                    <div class="dropdown">
                                      <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                      </button>
                                      <div class="dropdown-menu">
                                        <a class="dropdown-item" href="javascript:void(0);"><i
                                            class="bx bx-edit-alt me-1"></i>
                                          Modifier</a>
                                        <a class="dropdown-item" href="javascript:void(0);"><i
                                            class="bx bx-trash me-1"></i>
                                          Suprimer</a>
                                      </div>
                                    </div>
                                  </td>
                                </tr>

        <?php

    }
    ?>
    </table>