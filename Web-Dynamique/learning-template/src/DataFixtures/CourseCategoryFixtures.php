<?php

namespace App\DataFixtures;

use App\Entity\CourseCategory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CourseCategoryFixtures extends Fixture
{
    private array $categories = ['Design', 'Développement', 'Marketing', 'Business', 'Musique', 'Langues', 'Photographie'];

    public function load(ObjectManager $manager): void
    {
        foreach($this->categories as $category) {
            $cat = new CourseCategory();
            $cat->setName($category);
            $manager->persist($cat);
        }

        $manager->flush();
    }
}