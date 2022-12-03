<?php

namespace App\DataFixtures;

use App\Entity\News;
use Cocur\Slugify\Slugify;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class NewsFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create();
        $slug = new Slugify();

        for($i = 1; $i <= 37; $i++) {
            $news = new News();
            $news->setName($faker->words(3, true))
                ->setCreatedAt(new \DateTimeImmutable())
                ->setUpdatedAt(new \DateTimeImmutable())
                ->setContent($faker->paragraph(5))
                ->setImageName('0'.$i.'.png')
                ->setSlug($slug->slugify($news->getName()))
                ->setIsPublished($faker->boolean(90));
            $manager->persist($news);
        }
        $manager->flush();
    }
}
