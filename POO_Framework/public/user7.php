<?php
declare(strict_types = 1);
require_once '../src/User7.php';

$user1 = new User7('Alex Mason');
$user2 = new User7('Alice Stark');
$user3 = new User7('Jon Snow');
$admin1 = new User7('Administrateur');

print '<b>BIENVENUE</b><br>';

$admin1->setBan($user1->getName());
$admin1->setBan($user2->getName());

print 'Liste des bannis: <br>' . $admin1->getBan();

$admin1->setWebsite("IEPSCF");

print $admin1->getWebsite();