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

        $storyNodeScene2 = new StoryNode();
        $storyNodeScene2->setTitle("Scene 2 in CEO office");
        $this->addReference("storyNodeScene2",$storyNodeScene2);
        $manager->persist($storyNodeScene2);

        $storyNodeScene3 = new StoryNode();
        $storyNodeScene3->setTitle("Scene 3 in CEO office");
        $this->addReference("storyNodeScene3",$storyNodeScene3);
        $manager->persist($storyNodeScene3);

        $storyNodeEnd = new StoryNode();
        $storyNodeEnd->setTitle("EndGame in CEO office: time to see the world you deserve... ");
        $this->addReference("storyNodeEnd",$storyNodeEnd);
        $manager->persist($storyNodeEnd);

        $storyConclusion = new StoryNode();
        $storyConclusion->setTitle("Now, let's see the results");
        $this->addReference("storyConclusion",$storyConclusion);
        $manager->persist($storyConclusion);

        $manager->flush();

    }
    
}
