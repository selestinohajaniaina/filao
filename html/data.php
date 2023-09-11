<?php
    function get_all($place) {
        require('../db.php');
        $sql = "SELECT SUM(qtt) as qtt FROM stock WHERE place=$place";
        $sql1 = "SELECT SUM(nombre_sac) as sac FROM stock WHERE place=$place";
        $stmt = $db->prepare($sql);
        $stmt1 = $db->prepare($sql1);
        $stmt->execute();
        $stmt1->execute();
        $fetch=$stmt->fetch();
        $fetch1=$stmt1->fetch();
        return [$fetch["qtt"],$fetch1["sac"]];
    }

    function get_sortie($place) {
        require('../db.php');
        $sql = "SELECT SUM(qtt) as qtt FROM detailfilaosortie WHERE place=$place";
        $sql1 = "SELECT SUM(sac) as sac FROM detailfilaosortie WHERE place=$place";
        $stmt = $db->prepare($sql);
        $stmt1 = $db->prepare($sql1);
        $stmt->execute();
        $stmt1->execute();
        $fetch=$stmt->fetch();
        $fetch1=$stmt1->fetch();
        return [$fetch["qtt"],$fetch1["sac"]];
    }

    function get_particulier($date) {
        require('../db.php');
        $sql = "SELECT SUM(qtt) as qtt FROM particulier WHERE date(`date`)='$date'";
        $stmt = $db->prepare($sql);
        $stmt->execute();
        $fetch=$stmt->fetch();
        return $fetch['qtt'] | 0;
    }

    function get_achat($date) {
        require('../db.php');
        $sql = "SELECT SUM(qtt) as qtt FROM detailfilao WHERE date(`date`)='$date'";
        $stmt = $db->prepare($sql);
        $stmt->execute();
        $fetch=$stmt->fetch();
        return $fetch['qtt'] | 0;
    }

?>