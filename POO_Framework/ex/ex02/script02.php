<?php

require_once 'exProduct01.php';

$screen = new exProduct01('Asus R12',
    120, 50);

print $screen->reduce(10);
$screen->sell(5);