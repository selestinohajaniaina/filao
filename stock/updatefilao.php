<?php
require('../db.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $oldid = $_POST['idf'];
    $newid = $_POST['newid'];
    $poi = $_POST['qttf'];

    
    $sql01 = $db->prepare("UPDATE froidf SET qtt = qtt + $poi WHERE id = $newid");







    $sql01->execute();
    $sql = $sql = "UPDATE detailavant SET idfilao = '$newid' WHERE id = $oldid";
    $stmt = $db->prepare($sql);

    if ($stmt->execute()) {
?> 
        <script>
            document.location.href = "../stock";
        </script>
<?php
    } else {
        echo " $sql Erreur";
    }
}

?>