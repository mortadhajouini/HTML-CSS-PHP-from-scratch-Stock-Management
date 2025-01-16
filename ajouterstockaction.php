<?php include ("connexion.php"); ?>
<?php
$t=$_POST['t'];
$m=$_POST['m'];
$q=$_POST['q'];

$insert_query = "INSERT INTO stock(typee,marquee,quantite) VALUES ('$t','$m','$q')";
$stmt = $mysqli->prepare($insert_query);
if ($stmt === false) {
 die("Erreur de préparation de la requête : " . 
$mysqli->error);}
if ($stmt->execute()) {
    header("Location: stock.php");
    exit();
} else {
 echo "Erreur lors de l'enregistrement des données : " 
. $stmt->error;
}
$stmt->close();
?>

<?php $mysqli->close();
?> 