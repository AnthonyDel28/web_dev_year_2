<?php
declare(strict_types = 1);
spl_autoload_register(function($class)
{
    require_once '../src/' . $class . '.php';
});


print '<center><b>BIENVENUE SUR ' . Personnage::NOM_DU_JEU . '</b><br></b><hr>';

$personnage1 = new Personnage('Esek');
$personnage2 = new Personnage('Bob');

print '<b>Niveau de jeu:</b> ' . $personnage1->getLevel() . '<br><hr>';
print '<b>Votre personnage: <br></b>';
print '<b>Nom:</b> ' . $personnage1->getNom() . '<br>';
print '<b>Points de vie:</b> ' . $personnage1->getVie() . '<br>';
print '<b>Points d\'attaque:</b> ' . $personnage1->getAttaque();
print '<br>Vous possédez les armes suivantes: ';
$personnage1->getArmes();
print '<hr>Bob le boulanger vous dit: ';
$personnage1->parler('Que me voulez-vous?<br>');

print 'Vous attaquez: ' . $personnage2->getNom() . '<br>';
print 'Il perd ' . $personnage1->frapper($personnage2) . ' points de vie<br>';
print 'Il ne lui resque désormais que ' . $personnage2->getVie() . ' PDV<hr>';
print 'Votre attaque est désormais à ' . $personnage1->getAttaque() . ' points<br>';
$personnage1->trouverArmes('Dague');