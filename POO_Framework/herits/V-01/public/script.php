<?php
declare(strict_types = 1);
require_once '../src/User.php';
require_once '../src/Member.php';
require_once '../src/Admin.php';


$user01 = new User('Doe', 'test1');
$member1 = new Member('Kyle', 'test', 100);

$member1->setPassword('azerty');
print $member1->getPassword() . '<br>';

$admin1 = new Admin('Servais', 'abcd');

$admin1->viewRoles();