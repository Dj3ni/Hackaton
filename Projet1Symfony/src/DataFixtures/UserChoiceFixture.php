<?php

namespace App\DataFixtures;

use App\Entity\UserChoice;
use DateTime;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class UserChoiceFixture extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
    
        $faker = Factory::create('fr_FR');

        for ($i = 0; $i < 5; $i++) {
            $userChoice = new UserChoice();
            $user = $this->getReference("user_$i");
            $choice = $this->getReference("choice_$i");
            
            $userChoice ->setTimestamp(new DateTime())
                        ->setChoice($choice)
                        ->setUser($user);
            $manager->persist($userChoice);
        }

        $manager->flush();

    }

    public function getDependencies()
    {
        return([
            UserFixtures::class,
            ChoiceFixtures::class,
        ]);
    }
}
