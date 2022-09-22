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
$personnage1->parler('Cherchez vous des marchandises?<br>');

print 'Vous attaquez: ' . $personnage2->getNom() . '<br>';
print 'Il perd ' . $personnage1->frapper($personnage2) . ' points de vie<br>';
print 'Il ne lui resque désormais que ' . $personnage2->getVie() . ' PDV<hr>';
print 'Votre attaque est désormais à ' . $personnage1->getAttaque() . ' points<br>';
$personnage1->trouverArmes('Dague');
print '<br>Vos armes actuelles: ';
$personnage1->getArmes();
$warrior = new Guerrier('Stark');
print '<hr>';
print 'Vie actuelle du guerrier: ' . $warrior->getVie() . '<br>';
$warrior->frapper($personnage1);
print 'Vie après l\'attaque: ' . $warrior->getVie() . '<hr>';
$magicien = new Mage('Melisandre');
$magicien->setMagie(100);
print 'Notre magicien ' . $magicien->getNom() . ' a ' . $magicien->getMagie() . ' pts de magie<br>';
print 'Il attaque le guerrier !<br>';
$magicien->frapper($warrior);
print 'Sa magie est maintenant de: ' . $magicien->getMagie();