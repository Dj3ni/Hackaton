<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\Choice;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class ChoiceFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        
        $faker = Factory::create('fr_FR');

        for ($i = 0; $i < 5; $i++) {
            $choice = new Choice();
            $choice->setText($faker->paragraph());
                    // ->addDialog($this->getReference("dialog_$i"));
            $this->addReference("choice_$i",$choice);
            
            $manager->persist($choice);
        }

        // One choice leads directly to ending
        // $choice6 = new Choice();
        // $choice2->setEnding($this->getReference("ending_1"));
        // $manager->persist($choice6);

        $manager->flush();
    }
}
