<?php
include("connexion.php");
$x=$_POST['rad'];
 echo "$x";
 $delete_query = "DELETE FROM stock WHERE code = '$x'";
 $stmt = $mysqli->prepare($delete_query);
 if ($stmt->execute()) {
    header("Location: stock.php");
    exit();
} 
 $stmt->close();
$mysqli->close();
?>