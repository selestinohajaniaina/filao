<?php
    require('../db.php');
    function getpaied($id_selector) {
        require('../db.php');
        $getBy = $db -> prepare("SELECT payee FROM facture WHERE id=$id_selector");
        $getBy -> execute();
        $fetchBy = $getBy -> fetch();
        return $fetchBy["payee"];
    }
    
    $id = $_POST["numfac"];
    $payee = $_POST["payeena"];
    $total = $_POST["totalapayer"];
    $apayee= getpaied( $id ) + $payee;
    $rest = $_POST["totalapayer"] - $apayee ;

    $sql = "UPDATE `facture` SET `payee`= $apayee,`restapayer`=$rest WHERE id=$id";
    $stmt = $db->prepare($sql);

    if ($stmt->execute()) {
        ?>
            <script>
                document.location.href = "facture.php?num=<?=$id?>";
            </script>
       <?php
    } else {
        echo " $sql Erreur lors de supression des personnel.";
    }
?>