<?php
$conn = new mysqli('localhost', 'root', '', 'mathscore');
$pseudo = $_POST['pseudo'];
$score = $_POST['score'];
$sql = "INSERT INTO `scores`( `id`, `pseudo`, `score`, `date`) 
	VALUES (1,'$pseudo','$score','NOW')";
if ($conn->query($sql) === TRUE) {
    echo "data inserted";
}
else
{
    echo "failed";
}
?>