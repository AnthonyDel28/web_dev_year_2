<?php
declare(strict_types = 1);
require_once '../src/User6.php';

$user1 = new User6('Alex Mason');
$user2 = new User6('Alice Stark');
$user3 = new User6('Jon Snow');
$admin1 = new User6('Administrateur');

print '<b>BIENVENUE</b><br>';

$admin1->setBan($user1->getName());
$admin1->setBan($user2->getName());
print_r($admin1->ban);
