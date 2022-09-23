<?php

require_once 'db.php';
require_once 'Articles.php';

$fr = new Articles() ;

var_dump($fr->getArticles());


