<?php

        require('../db.php');
        $sql = "SELECT * FROM client ORDER BY nom ASC";
        $stmt = $db->prepare($sql);
        $stmt->execute();
    
        $clients = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
?>
 <?php foreach ($clients as $client_d) : ?>
       <tr>
           <td><?= $client_d['id'] ?></td> <td><?= $client_d['nom'] ?></td> <td><?= $client_d['adresse'] ?></td> <td><?= $client_d['contact'] ?></td>
       </tr>
 <?php endforeach; ?>