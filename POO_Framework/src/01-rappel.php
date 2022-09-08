<?php


// Instanciation de la classe DateTimeImmutable
// Le résultat est enregistré dans une variable de type objet
$date = new DateTimeImmutable();
var_dump($date);

// Invocation de la méthode format
print '<br>' . $date->format('d/m/Y') . '<br>';

$connect = new PDO('mysql:dbname=travel;host=localhost;charset=utf8', 'root', 'root');
$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$stmt = $connect->prepare('SELECT * FROM user WHERE id = 5');
$result = $stmt->execute();
$results = $stmt->fetchAll();



