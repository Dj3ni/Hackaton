<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\StoryChoice;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class StoryChoiceFixture extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create('fr_FR');

        for ($i = 0; $i < 5; $i++) {    
            $storyChoice = new StoryChoice();
            $storyChoice->setChoice($this->getReference("choice_$i"))
                        ->setStoryNode($this->getReference("storyNode_$i"));
            $manager->persist($storyChoice);
            
        }

        $manager->flush();
    }


    public function getDependencies()
    {
        return([
            StoryNodeFixture::class,
            ChoiceFixtures::class,
        ]);
    }
}
