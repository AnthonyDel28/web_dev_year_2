<?php

namespace App\DataFixtures;

use App\Entity\Comment;
use App\Entity\Course;
use App\Entity\User;
use App\Repository\CourseRepository;
use App\Repository\UserRepository;
use Cocur\Slugify\Slugify;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class CommentsFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create();
        $courses = $manager->getRepository(Course::class)->findAll();
        $users = $manager->getRepository(User::class)->findAll();
        $x = 0;
        while($x <= 30)
        {
            $comment = new Comment();
            $comment->setCreatedAt(new \DateTimeImmutable());
            $comment->setRating($faker->numberBetween(1, 5));
            $comment->setComment($faker->paragraph(3));
            $comment->setUser($users[$faker->numberBetween(1, count($users))]);
            $comment->setCourse($courses[$faker->numberBetween(1, count($courses))]);
            $comment->setTitle($faker->words(3, true));
            $manager->persist($comment);
            $x++;
        }
        $manager->flush();
    }


    public function getDependencies()
    {
        return [
            UserFixtures::class,
            CourseFixtures::class,
        ];
    }
}