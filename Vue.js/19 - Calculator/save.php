<?php
$pdo = new PDO(
    'mysql:host=localhost; dbname=mathscore; charset=utf8',
    'root',
    ''
);
$pseudo = $_POST['pseudo'];
$score = $_POST['score'];
$date = new DateTimeImmutable();
$request = $pdo->prepare("INSERT INTO `scores`(`pseudo`, `score`, `date`) 
	VALUES ('$pseudo','$score', now())");
$request->execute();


?>