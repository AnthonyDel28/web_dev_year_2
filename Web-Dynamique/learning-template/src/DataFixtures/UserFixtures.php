<?php

namespace App\DataFixtures;

use App\Entity\User;
use Cocur\Slugify\Slugify;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;


class UserFixtures extends Fixture
{
    private object $hasher;
    private array $genders = ['Male', 'Female'];
    public function __construct(UserPasswordHasherInterface $hasher)
    {
            $this->hasher = $hasher;
    }

    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create();
        $slug = new Slugify(); // Uniquement nettoyer le prefixe du mail
        $i = 1;
        while($i <= 50){
            $user = new User();
            $gender = $faker->randomElement($this->genders);
            $user->setFirstName($faker->firstName($gender));
            $user->setLastName($faker->lastName());
            $user->setEmail($slug->slugify($user->getFirstName()) . '.' . $slug->slugify($user->getLastName()) . '@' . $faker->freeEmailDomain());
            $gender = $gender == 'male' ? 'm' : 'f';
            $user->setImageName('0' . ($i + 9) . $gender . '.jpg');
            $user->setPassword($this->hasher->hashPassword($user, 'password'));
            $user->setUpdatedAt(new \DateTimeImmutable());
            $user->setCreatedAt(new \DateTimeImmutable());
            $user->setIsDisabled($faker->boolean(chanceOfGettingTrue: 10));
            $user->setRoles(['ROLE_USER']);
            $manager->persist($user);
            $i++;
        }

        $user = new User();
        $gender = $faker->randomElement($this->genders);
        $user->setFirstName('Jon');
        $user->setLastName('Snow');
        $user->setEmail('anthonydelmeire2709@gmail.com');
        $user->setImageName('062m.jpg');
        $user->setPassword($this->hasher->hashPassword($user, 'password'));
        $user->setUpdatedAt(new \DateTimeImmutable());
        $user->setCreatedAt(new \DateTimeImmutable());
        $user->setIsDisabled(FALSE);
        $user->setRoles(['ROLE_ADMIN']);
        $manager->persist($user);
        $manager->flush();
    }
}
