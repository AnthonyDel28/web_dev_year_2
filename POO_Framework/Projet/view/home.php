<?php
// le require est fait dans le fichier index en autoloading
$stmt = new Articles();


?>


<table>
    <thead>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Created</th>
        <th>Image</th>
    </tr>
    </thead>
    <tbody>
    <?php

    foreach ($stmt->getArticles() as $result): ?>
        <tr>
            <td><?= $result->id ?></td>
            <td><a href="index.php?page=article&id=<?= $result->id ?>"> <?= $result->title ?></a></td>
            <td><?= $result->creat_at ?></td>
            <td><?= $result->image ?></td>
        </tr>

    <?php endforeach; ?>
    </tbody>
</table>
