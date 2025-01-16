<?php
include("connexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["sn"])) {
  $productId = $_POST["sn"];

  // Perform the deletion
  $deleteStmt = $mysqli->prepare("DELETE FROM produit WHERE sn = ?");
  $deleteStmt->bind_param("i", $productId);
  $deleteStmt->execute();
  $deleteStmt->close();
}
?>
