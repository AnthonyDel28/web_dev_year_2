<?php

require_once '../src/User4.php';

$user = new User4('Thomas', 'test');


print '<b>User:</b> ' . $user->getName() . '<br>';
print '<b>Password:</b> ' . $user->getPassword();
