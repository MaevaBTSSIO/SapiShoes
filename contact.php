<?php 
include('connexion/db.php');

$stmt = $pdo->prepare("SELECT * FROM contact");
$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>