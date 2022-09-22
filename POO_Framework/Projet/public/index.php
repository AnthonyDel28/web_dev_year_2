<?php
require_once '../app/Tools.php';
Tools::loading();
if(!isset($_GET['page'])){
    $_GET['page'] = 'home';
}

ob_start();
if($_GET['page'] == 'about'){
    require '../view/about.php';
} else {
    require '../view/home.php';
}
$content = ob_get_clean();

require '../view/templates/default.php';