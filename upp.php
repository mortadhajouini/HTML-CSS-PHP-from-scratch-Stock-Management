<?php include ("connexion.php"); ?>
<?php
$sn=$_POST['sn'];
$t=$_POST['t'];
$m=$_POST['m'];
$d=$_POST['d'];
$a=$_POST['a'];

$update_query = "UPDATE produit SET sn='$sn', type='$t', marque='$m', da='$d', aff='$a' WHERE sn='$sn'";
$stmt = $mysqli->prepare($update_query);
if ($stmt === false) {
 die("Erreur de préparation de la requête : " . 
$mysqli->error);}
if($stmt->execute()){
    header("Location: listeprod.php");
    exit();
}
$stmt->close();
?>

<?php $mysqli->close();
?> 