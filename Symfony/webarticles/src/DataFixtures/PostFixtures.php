<?php

namespace App\DataFixtures;

use App\Entity\Category;
use App\Entity\Level;
use App\Entity\Post;
use Cocur\Slugify\Slugify;
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
    $levels = $manager->getRepository(Level::class)->findAll();
    $slugify = new Slugify(); // Création des slugs
    for($i = 1; $i <= 35; $i++) {
      $post = new Post();
      $title = $faker->words($faker->numberBetween(3,5), true);
      $post ->setTitle($title)
            ->setContent($faker->paragraphs(3,true))
            ->setCreatedAt(new \DateTimeImmutable())
            ->setImage($i.'.png')
            ->setIsPublished($faker->boolean(90))
            ->setCategory($categories[$faker->numberBetween(0, count($categories) -1)])
            ->setSlug($slugify->slugify($title))
            ->setLevel($levels[$faker->numberBetween(0, count($levels) -1)]);
      $manager->persist($post);
    }

    $manager->flush();
  }

  public function getDependencies()
  {
    return [
      CategoryFixtures::class,
    ];
  }
}
