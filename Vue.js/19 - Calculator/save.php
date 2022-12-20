<?php
$conn = new mysqli('localhost', 'root', '', 'mathscore');
$pseudo = $_POST['pseudo'];
$score = $_POST['score'];
$date = new DateTimeImmutable();
$sql = "INSERT INTO `scores`(`pseudo`, `score`, `date`) 
	VALUES ('$pseudo','$score', now())";

    if ($conn->query($sql) === TRUE) {
        echo "data inserted";
    }
    else
    {
        echo "failed";
    }

?>