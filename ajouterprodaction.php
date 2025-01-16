<?php include ("connexion.php"); ?>
<?php
$sn=$_POST['sn'];
$t=$_POST['tt'];
$m=$_POST['m'];
$d=$_POST['d'];
$a=$_POST['a'];

$insert_query = "INSERT INTO produit(sn,type,marque,da,aff) VALUES ('$sn','$t','$m','$d','$a')";
$stmt = $mysqli->prepare($insert_query);
if ($stmt === false) {
 die("Erreur de préparation de la requête : " . 
$mysqli->error);}
if ($stmt->execute()) {
    $update_query = "UPDATE stock SET quantite=quantite-1 WHERE marquee='$m' and typee='$t'";
    $stmt4 = $mysqli->prepare($update_query);
    $stmt4->execute();
    $stmt4->close();
    header("Location: listeprod.php");
    exit();
} else {
 echo "Erreur lors de l'enregistrement des données : " 
. $stmt->error;
}
$stmt->close();
?>

<?php $mysqli->close();
?> 