<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\Choice;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class ChoiceFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        
        $faker = Factory::create('fr_FR');

        for ($i = 0; $i < 5; $i++) {
            $choice = new Choice();
            $choice->setText($faker->paragraph());
            $this->addReference("choice_$i",$choice);
            
            $manager->persist($choice);
        }
        
        // One choice leads directly to ending
        $choice6 = new Choice();
        $choice6->setEnding($this->getReference("ending_1"))
                ->setText($faker->paragraph());
        $manager->persist($choice6);
        
        $manager->flush();

    }

    public function getDependencies()
    {
        return([
            EndingFixture::class,
        ]);
    }

}
