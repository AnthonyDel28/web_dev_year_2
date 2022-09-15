<?php

require_once 'Strict.php';

$product = new Strict(12.5);

var_dump($product);
print '<br>' . $product->getPrice() . ' €';


$screen = new Strict(50.4);