<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\Character;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class CharacterFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create('fr_FR');

        for ($i = 0; $i < 5; $i++) {
            $perso = new Character();
            $perso->setName($faker->lastName());
            $this->addReference("perso_$i",$perso);
            
            $manager->persist($perso);
        }

        $manager->flush();
    }


}
