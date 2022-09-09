<?php

require_once '../src/User2.php';

$user = new User2;
$admin = new User2;


$user->setName('Alexandre');
$user->setOld(25);


print '<p>' . $user->message();
print '<p>' . $user->getName() . ' a ' . $user->getOld() . ' ans';
