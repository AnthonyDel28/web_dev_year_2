<?php

$pdo = new PDO(
    'mysql:host=localhost; dbname=mathscore; charset=utf8',
    'root',
    ''
);

$statement= $pdo->prepare(
    "SELECT * FROM scores ORDER BY score DESC LIMIT 10"
);
$statement->execute();

$result = $statement->fetchAll(PDO::FETCH_ASSOC);

$json = json_encode($result);

echo $json;
