<?php include ("connexion.php"); ?>
<?php
$n = $_POST['n'];
$p = $_POST['p'];
$x=0;
$stmt = $mysqli->query("SELECT * FROM login ");
if (!$stmt){
    echo "erreur".$mysqli->erreur;
}
if(($n=='admin')&&($p=='123')){
    header("Location: listeprod.php");
    exit();
}
while ((($row = $stmt->fetch_assoc()) && ($x==0))){
     if((($row['username'])==$n)&&(($row['pass'])==$p)){
        header("Location: listeproduser.php");
        exit();
        $x=1;
     }
}
if($x==0){
    header("Location: loginerr.html");
    exit();
}


$mysqli->close();
?>