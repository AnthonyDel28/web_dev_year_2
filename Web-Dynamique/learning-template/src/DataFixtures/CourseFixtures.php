<?php

namespace App\DataFixtures;

use App\Entity\Course;
use App\Entity\CourseCategory;
use App\Entity\CourseLevel;
use Cocur\Slugify\Slugify;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;


class CourseFixtures extends Fixture implements DependentFixtureInterface
{
    private array $prices = [80, 100, 120, 150, 170, 190, 200, 220];
    private array $durations = [60, 90, 120, 160, 180, 260, 320, 400, 500, 600];

    public function load(ObjectManager $manager): void
    {
        // Création d'une instance du générateur de Faker
        $faker = Factory::create('fr_FR');
        // Création d'une instance de la classe Slugify (cocur/slugify)
        $slugify = new Slugify();
        // Récupération de toutes les instances (objets) des entités CourseCategory et CourseLevel
        $categories = $manager->getRepository(CourseCategory::class)->findAll();
        $levels = $manager->getRepository(CourseLevel::class)->findAll();
        // Externalisation de la fonction count()
        $nbCat      = count($categories);
        $nbLevel    = count($levels);
        $nbPrice    = count($this->prices);
        $nbDuration = count($this->durations);
        for($i = 1; $i <= 26; $i++) {
            $course = new Course();
            $course ->setCategory($categories[$faker->numberBetween(0, $nbCat -1)])
                    ->setLevel($levels[$faker->numberBetween(0, $nbLevel -1)])
                    ->setName($faker->words(3, true))
                    ->setSmallDescription($faker->words(10, true))
                    ->setFullDescription($faker->paragraph(5, true))
                    ->setDuration($this->durations[$faker->numberBetween(0, $nbDuration -1)])
                    ->setPrice($this->prices[$faker->numberBetween(0, $nbPrice -1)])
                    ->setCreatedAt(new \DateTimeImmutable())
                    ->setUpdatedAt(new \DateTimeImmutable())
                    ->setIsPublished($faker->boolean(90))
                    ->setSlug($slugify->slugify($course->getName()))
                    ->setImageName($i . '.jpg')
                    ->setPdfName($i . '.pdf');
            $manager->persist($course);
        }
        $manager->flush();
    }

    public function getDependencies()
    {
        // TODO: Implement getDependencies() method.
        return [
            CourseCategoryFixtures::class,
            CourseLevelFixtures::class,
        ];
    }
}
