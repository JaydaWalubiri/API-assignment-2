<?php
$pdo = new PDO('mysql:host=localhost;dbname=user_data', 'root', '');

$stmt = $pdo->query("SELECT * FROM users");
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>