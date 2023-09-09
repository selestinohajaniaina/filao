<form action="ajout.php" method="post">
    <input type="text" name="nom" placeholder="entrer le nom" required>
    <input type="text" name="adresse" placeholder="entrer le adresse" required>
    <input type="text" name="contact" placeholder="entrer le contact" required>
    <input type="submit" value="sauvegarder">
</form>
<table border="1">
    <?php require('liste.php');?>
</table>
    