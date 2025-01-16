<?php include ("connexion.php"); ?>
<?php
$c=$_POST['c'];
$t=$_POST['t'];
$m=$_POST['m'];
$d=$_POST['d'];

$update_query = "UPDATE stock SET code='$c', typee='$t', marquee='$m', quantite='$d' WHERE code='$c'";
$stmt = $mysqli->prepare($update_query);
if ($stmt === false) {
 die("Erreur de préparation de la requête : " . 
$mysqli->error);}
if ($stmt->execute()) {
    header("Location: stock.php");
    exit();
}
$stmt->close();
?>

<?php $mysqli->close();
?> 