<?php

namespace App\DataFixtures;

use App\Entity\CourseLevel;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CourseLevelFixtures extends Fixture
{
    private array $levels = [
        'Novice'        => 'Acune connaissance n\'est nécessaire',
        'Débutant'      => 'Quelques connaissances de base sont nécessaires',
        'Comfirmé'      => 'Des connaissances avancées sont nécessaires',
        'Expert'        => 'Pratique professionnelle et expertises souhaitées'
    ];

    public function load(ObjectManager $manager): void
    {
        foreach($this->levels as $level => $description) {
            $cat = new CourseLevel();
            $cat->setName($level)
                ->setDescription($description);
            $manager->persist($cat);
        }
        $manager->flush();
    }
}
