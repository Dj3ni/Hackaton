<?php

namespace App\DataFixtures;

use App\Entity\AssetStory;
use Faker\Factory;
use App\Entity\StoryNode;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class StoryNodeFixture extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $faker = Factory::create('fr_FR');

        // for ($i = 0; $i < 5; $i++) {    
        //     $storyNode = new StoryNode();
        //     $storyNode  ->setTitle($faker->paragraph);
        //     $this->addReference("storyNode_$i",$storyNode);
            
        //     $manager->persist($storyNode);
            
        // }

        $storyNodeStart = new StoryNode();
        $storyNodeStart->setTitle("StartGame in CEO office");
        $this->addReference("storyNodeStart",$storyNodeStart);
        $manager->persist($storyNodeStart);


        $manager->flush();

    }
    
}
