<?php

require_once '../src/User.php';
require_once '../src/Members.php';
require_once '../src/Admins.php';


$member = new Members();
$member->setFirstname('Kaniel');
$member->setLastname('Outis');