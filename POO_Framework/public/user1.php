<?php

require_once '../src/user1.php';

// Instanciations

$user = new User1();
$admin = new User1();


// Assignation directement dans les propriétés

$user->name = 'Anthony';
$admin->name = 'Administrateur';

print $user->message() . $user->name;
