<?php

require_once '../src/User5.php';

$admin = new User5('Henry Creel', 26, 'admin');
$user = new User5('Elf', 11, 'student');

print $user::SCHOOL_NAME . '<br>';
print 'Prix standard: ' . User5::BASE_SUBSCRIPTION . '€<br>'; // ++

$user->reduction($user);

print '<hr>Utilisateur: ' . $user->getName() . '<br>';
print 'Prix de votre abonnement avec réduction: ' . $user->reduction($user) . '€<hr>'; // ++

print '<hr>Utilisateur: ' . $admin->getName() . '<br>';
print 'Prix pour un admin: ' . $user->reduction($admin) . '€';