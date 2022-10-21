<?php

namespace App\DataFixtures;


use App\Entity\News;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Cocur\Slugify\Slugify;
use Faker;


class NewsFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Faker\Factory::create('fr_FR');
        $slugify = new Slugify();
        $x = 1;
        while($x <= 50){
            $name = $faker->words($faker->numberBetween(2,4), true);
            $news = new News();
            $news->setName($name);
            $news->setCreatedAt(new \DateTimeImmutable());
            $news->setUpdatedAt(new \DateTimeImmutable());
            $news->setContent($faker->paragraphs(2, true));
            $news->setImageName('0'. $x . '.png');
            $news->setIsPublished($faker->boolean(90));
            $news->setSlug($slugify->slugify($name));
            $manager->persist($news);
            $x++;
        }

        $manager->flush();
    }
}