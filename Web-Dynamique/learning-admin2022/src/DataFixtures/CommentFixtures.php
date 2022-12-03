<?php

namespace App\DataFixtures;

use App\Entity\Comment;
use App\Entity\Course;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class CommentFixtures extends Fixture implements DependentFixtureInterface
{

    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create();
        $users = $manager->getRepository(User::class)->findAll();
        $courses = $manager->getRepository(Course::class)->findAll();
        $nbUsers = count($users);
        $nbCourses = count($courses);
        for($i = 1; $i <= 30; $i++) {
            $comment = new Comment();
            $comment->setCreatedAt(new \DateTimeImmutable());
            $comment->setRating($faker->numberBetween(1, 5));
            $comment->setComment($faker->paragraph(2, true));
            $comment->setUser($users[$faker->numberBetween(0, $nbUsers -1)]);
            $comment->setCourse($courses[$faker->numberBetween(0, $nbCourses -1)]);
            $comment->setTitle($faker->words(3, true));
            $manager->persist($comment);
        }

        $manager->flush();
    }

    public function getDependencies()
    {
       return [
           UserFixtures::class,
           CourseFixtures::class
       ];
    }
}
