<?php
$mysqli = new mysqli("localhost", "root", "", 
"gest_stock");

if ($mysqli->connect_error) {
 die("erreur : " . $mysqli->connect_error);
}

?>