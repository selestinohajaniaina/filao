<?php
require('../db.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $oldid = $_POST['idf'];
    $newid = $_POST['newid'];
    $_id = 14;
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