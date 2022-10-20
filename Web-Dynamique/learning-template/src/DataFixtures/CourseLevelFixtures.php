<?php

namespace App\DataFixtures;


use App\Entity\CourseLevel;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CourseLevelFixtures extends Fixture
{
    private array $levels = ['Débutant' => 'Aucun prérequis', 'Avancé' => 'Bases nécéssaires', 'Confirmé' => 'Connaissances approfondies requises'
        , 'Expert' => 'Haut niveau de maîtrise exigé'];
    public function load(ObjectManager $manager): void
    {
        foreach($this->levels as $level => $description) {
            $lvl = new CourseLevel();
            $lvl->setName($level);
            $lvl->setDescription($description);
            $manager->persist($lvl);
        }

        $manager->flush();
    }
}