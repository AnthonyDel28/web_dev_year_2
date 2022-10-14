<?php

namespace App\DataFixtures;

use App\Entity\Level;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class LevelFixtures extends Fixture
{
    private array $levels = ['Débutant', 'Avancé', 'Expert'];

    public function load(ObjectManager $manager): void
    {
        foreach($this->levels as $level) {
            $lvl = new Level();
            $lvl->setName($level);
            $manager->persist($lvl);
        }

        $manager->flush();
    }
}
