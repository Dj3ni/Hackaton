<?php

namespace App\DataFixtures;
use App\Entity\User;
use Faker;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
     
        $faker = Faker\Factory::create('fr_FR');

        for ($i = 0; $i < 5; $i++) {

            $user = new User();
            $user->setPseudo($faker->userName);
            $user->setEmail($faker->email);
            $user->setPassword($faker->password);
            $user->setRoles(['ROLE_USER']);

            $manager->persist($user);
            
        }
        $manager->flush();
    }
}
