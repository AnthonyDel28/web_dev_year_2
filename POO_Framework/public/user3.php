<?php

require_once '../src/User3.php';

$user = new User3;
$admin = new User3;

$user->setName('Alexandre Piereau');
$admin->setName('WebMaster');

print $admin->ban($user) . '<br>';

