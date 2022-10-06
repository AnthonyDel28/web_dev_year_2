<?php

namespace App\DataFixtures;

use App\Entity\Category;
use App\Entity\Post;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use Faker;

class PostFixtures extends Fixture implements DependentFixtureInterface
{

  public function load(ObjectManager $manager)
  {
    $faker = Faker\Factory::create();
    $categories = $manager->getRepository(Category::class)->findAll();
    for($i = 1; $i <= 35; $i++) {
      $post = new Post();
      $post->setTitle($faker->words($faker->numberBetween(3,5), true))
        ->setContent($faker->paragraphs(3,true))
        ->setCreatedAt(new \DateTimeImmutable())
        ->setImage($i.'.png')
        ->setIsPublished($faker->boolean(90))
        ->setCategory($categories[$faker->numberBetween(0, count($categories) -1)]);
      $manager->persist($post);
    }

    $manager->flush();
  }

  public function getDependencies()
  {
    return [
      CategoryFixtures::class
    ];
  }
}
