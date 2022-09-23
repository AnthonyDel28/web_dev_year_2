<?php
require_once '../app/tools.php';
tools::loading(); //appel sur la classe tools la méthode static loading

if (!isset($_GET['page'])){
    $_GET['page'] = 'home';
}

ob_start(); // tout ce qui suit tu l'enregistre.  // et tu va me le rendre dans le ob_get_clean que l'on va stokker dans une variable pour l'affichange dans le template

if ($_GET['page'] == 'about'){
    require '../view/about.php';
}elseif ($_GET['page'] == 'article'){
    require '../view/article.php';
}else  {
    require '../view/home.php';
}
$content = ob_get_clean(); //  va renvoyer tout ce qui se trouve dsans le ob_start


require '../view/templates/default.php';