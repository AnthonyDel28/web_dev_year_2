<?php

require_once '../src/User2.php';

$user = new User2;

$user->setName('Alexandre');
$user->setOld(25);

print $user->getName() . '<br>';
print $user->getOld() . ' ans';