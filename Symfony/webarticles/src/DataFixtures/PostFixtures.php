<?php

namespace App\DataFixtures;

use App\Entity\Category;
use App\Entity\Post;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker;
use Monolog\DateTimeImmutable;


class PostFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Faker\Factory::create();
        $categories = $manager->getRepository(Category::class)->findAll();
        $i = 1;
        while ($i <= 35)
        {
            $post = new Post();
            $post->setTitle($faker->words(3, true))
                ->setContent($faker->paragraphs(3, true))
                ->setCreatedAt(new \DateTimeImmutable())
                ->setImage($i . '.png')
                ->setIsPublished(1)
                ->setCategory($categories[$faker->numberBetween(0, count($categories) -1)]);
            $manager->persist($post);
            $i++;
        }

        $manager->flush();
    }
}
