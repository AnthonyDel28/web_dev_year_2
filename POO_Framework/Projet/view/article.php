<?php

$article = new Articles();
$art = $article->getArticle($_GET['id']);

?>
<div class="container-fluid">
    <h2><?= $art->title ?></h2>
    <p><?= $art->content ?></p>
    <p><?= $art->creat_at ?></p>
</div>