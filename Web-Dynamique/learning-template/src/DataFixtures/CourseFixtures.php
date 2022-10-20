<?php

namespace App\DataFixtures;

use App\Entity\Course;
use App\Entity\CourseLevel;
use App\Entity\CourseCategory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use Cocur\Slugify\Slugify;
use Faker;

class CourseFixtures extends Fixture implements DependentFixtureInterface
{
    private array $durations = [40, 60, 50, 70, 100, 80, 90, 140, 160, 200];
    private array $prices = [100, 200, 220, 150, 180, 300];
    public function load(ObjectManager $manager): void
    {
        $faker = Faker\Factory::create('fr_FR');
        $categories = $manager->getRepository(CourseCategory::class)->findAll();
        $levels = $manager->getRepository(CourseLevel::class)->findAll();
        $slugify = new Slugify();
        $nbCat = count($categories);
        $nbLevel = count($levels);
        $nbPrice = count($this->prices);
        $nbDuration = count($this->durations);
        $x = 1;
        while($x <= 26){
            $name = $faker->words($faker->numberBetween(1,3), true);
            $course = new Course();
            $course->setCategory($categories[$faker->numberBetween(0, $nbCat - 1)]);
            $course->setLevel($levels[$faker->numberBetween(0, $nbLevel - 1)]);
            $course->setName($name);
            $course->setSmallDescription($faker->paragraph(1,true));
            $course->setFullDescription($faker->paragraphs(1, true));
            $course->setDuration($this->durations[$faker->numberBetween(0, $nbDuration - 1)]);
            $course->setPrice($this->prices[$faker->numberBetween(0, $nbPrice - 1)]);
            $course->setCreatedAt(new \DateTimeImmutable());
            $course->setUpdatedAt(new \DateTimeImmutable());
            $course->setIsPublished($faker->boolean(90));
            $course->setSlug($slugify->slugify($name));
            $course->setImageName($x. '.jpg');
            $course->setPdfName($x. '.pdf');
            $manager->persist($course);
            $x++;
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