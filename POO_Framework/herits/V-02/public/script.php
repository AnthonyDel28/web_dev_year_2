<?php
declare(strict_types = 1);
require_once '../src/User.php';
require_once '../src/Member.php';
require_once '../src/Admin.php';


$user01 = new User('Doe', 'test1');
print '<b>Liste des articles pour l\'utilisateur: </b><br>';
$user01->getArticles();
print '<b>Liste des articles pour l\'administrateur: </b><br>';
$admin01 = new Admin('Admin', 'test');
$admin01->getArticles();