<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\Ending;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class EndingFixture extends Fixture
{
    public function load(ObjectManager $manager): void
    {
    
        $faker = Factory::create('fr_FR');

        for ($i = 0; $i < 5; $i++) {    
            $ending = new Ending();
            $ending->setText($faker->paragraph());
            $this->addReference("ending_$i",$ending);

            $manager->persist($ending);
            
        }
        $manager->flush();
    }
}