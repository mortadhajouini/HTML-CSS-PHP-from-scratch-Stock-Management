<?php
include("connexion.php");
$x=$_POST['rad'];
 echo "$x";
 $delete_query = "DELETE FROM produit WHERE sn = '$x'";
 $stmt = $mysqli->prepare($delete_query);
 if ($stmt->execute()) {
    header("Location: listeprod.php");
    exit();
} 
 $stmt->close();
$mysqli->close();
?>