<?php include ("connexion.php"); ?>
<?php
$u=$_POST['u'];
$p=$_POST['p'];
$p1=$_POST['p1'];

if($p1!=$p){
    header("Location: signuperr.html");
    exit();
}
$insert_query = "INSERT INTO login(username,pass) VALUES ('$u','$p')";
$stmt = $mysqli->prepare($insert_query);
if ($stmt === false) {
 die("Erreur de préparation de la requête : " . 
$mysqli->error);}
if ($stmt->execute()) {
    header("Location: login.html");
    exit();
} else {
 echo "Erreur lors de l'enregistrement des données : " 
. $stmt->error;
}
$stmt->close();
?>

<?php $mysqli->close();
?> 