<?php
declare(strict_types = 1);
spl_autoload_register(function($class)
{
    require_once '../src/' . $class . '.php';
});



print '<b>Liste des articles pour l\'administrateur: </b><br>';
$admin01 = new Admin('Admin', 'test');
print '<hr><b>Options Admin: <br></b> ';
$admin01->viewRoles();
print '<br><hr>';
$superadmin01 = new SuperAdmin('Kaniel', 'Outis');
print '<b>Options SuperAdmin: <br> </b>';
$superadmin01->viewRoles();