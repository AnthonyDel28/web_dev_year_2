<?php

require_once 'exProduct01.php';

$screen = new exProduct01('Asus R12',
    120, 50);

print '<b>Bienvenue!</b><br>';
print 'Stock de base: <b>' . $screen->getStock() . '</b><br>';
print 'Prix de base: <b>'  . $screen->getProductPrice() . '€</b><br>';
print 'Prix avec réduction: <b>' . $screen->reduce(10) . '€</b><br><hr>';

print '<b>VOTRE COMMANDE: </b><br>';
print 'Vous avez acheté 5 écrans pour un montant de ' . $screen->sell(5) . '€ HTVA<br>';
print 'Il reste désormais ' . $screen->getStock() . ' unités en stock.<br>';


