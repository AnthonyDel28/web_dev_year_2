<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\User;
use Cocur\Slugify\Slugify;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserFixtures extends Fixture
{
    private object $hasher;
    private array $genders = ['male', 'female'];
    public function __construct(UserPasswordHasherInterface $hasher) {
        $this->hasher = $hasher;
    }
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create();
        $slug = new Slugify(); // uniquement pour nettoyer le prefixe du mail
        for($i = 1; $i <= 40; $i++) {
            $user = new User();
            $gender = $faker->randomElement($this->genders);
            $user   ->setFirstName($faker->firstName($gender))
                    ->setLastName($faker->lastName)
                    ->setEmail($slug->slugify($user->getFirstName()) . '.' . $slug->slugify($user->getLastName()) . '@' . $faker->freeEmailDomain());
            $gender = $gender == 'male' ? 'm' : 'f';
            $user   ->setImageName('0' . ($i + 9) . $gender . '.jpg')
                    ->setPassword($this->hasher->hashPassword($user, 'password'))
                    ->setCreatedAt(new \DateTimeImmutable())
                    ->setUpdatedAt(new \DateTimeImmutable())
                    ->setIsDisabled($faker->boolean(10))
                    ->setRoles(['ROLE_USER']);
            $manager->persist($user);
        }


        for($i = 41; $i <= 50; $i++) {
            $user = new User();
            $gender = $faker->randomElement($this->genders);
            $user   ->setFirstName($faker->firstName($gender))
                ->setLastName($faker->lastName)
                ->setEmail($slug->slugify($user->getFirstName()) . '.' . $slug->slugify($user->getLastName()) . '@' . $faker->freeEmailDomain());
            $gender = $gender == 'male' ? 'm' : 'f';
            $user   ->setImageName('0' . ($i + 9) . $gender . '.jpg')
                ->setPassword($this->hasher->hashPassword($user, 'password'))
                ->setCreatedAt(new \DateTimeImmutable())
                ->setUpdatedAt(new \DateTimeImmutable())
                ->setIsDisabled($faker->boolean(10))
                ->setRoles(['ROLE_TEACHER']);
            $manager->persist($user);
        }
        // Admin John Doe
        $user = new User();
        $user   ->setFirstName('John')
                ->setLastName('Doe')
                ->setEmail('john.doe@gmail.com')
                ->setImageName('062m.jpg')
                ->setPassword($this->hasher->hashPassword($user, 'password'))
                ->setCreatedAt(new \DateTimeImmutable())
                ->setUpdatedAt(new \DateTimeImmutable())
                ->setIsDisabled(false)
                ->setRoles(['ROLE_ADMIN']);
        $manager->persist($user);
        $manager->flush();
        // Super Admin Pat Mar
      $user = new User();
      $user   ->setFirstName('Pat')
              ->setLastName('Mar')
              ->setEmail('pat.mar@gmail.com')
              ->setImageName('074m.jpg')
              ->setPassword($this->hasher->hashPassword($user, 'password'))
              ->setCreatedAt(new \DateTimeImmutable())
              ->setUpdatedAt(new \DateTimeImmutable())
              ->setIsDisabled(false)
              ->setRoles(['ROLE_SUPER_ADMIN']);
      $manager->persist($user);
      $manager->flush();

        $user = new User();
        $user   ->setFirstName('Anthony')
            ->setLastName('Delmeire')
            ->setEmail('root@gmail.com')
            ->setImageName('072m.jpg')
            ->setPassword($this->hasher->hashPassword($user, 'password'))
            ->setCreatedAt(new \DateTimeImmutable())
            ->setUpdatedAt(new \DateTimeImmutable())
            ->setIsDisabled(false)
            ->setRoles(['ROLE_SUPER_ADMIN']);
        $manager->persist($user);
        $manager->flush();
    }
}
