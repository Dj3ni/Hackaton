<?php

namespace App\DataFixtures;

use App\Entity\AssetStory;
use Faker\Factory;
use App\Entity\StoryNode;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class StoryNodeFixture extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create('fr_FR');

        for ($i = 0; $i < 5; $i++) {    
            $storyNode = new StoryNode();
            $storyNode  ->setTitle($faker->paragraph);

            // for ($j=1; $j < 5 ; $j++) { 
            //     # code...
            //     $storyNode->addStoryChoice($this->getReference("choice_$j"))
            //                 ->addEnding($this->getReference("ending_$j"))
            //                 ->addDialog($this->getReference("dialog_$j"))
            //                 ->addAssetsStory($this->getReference("assetsStory_$j"));
            // }

            
            $this->addReference("storyNode_$i",$storyNode);

            $manager->persist($storyNode);
            
        }
        $manager->flush();
    
    }

    
    public function getDependencies()
    {
        return ([
            // StoryChoiceFixtures::class,
            // AssetsStoryFixture::class,
            EndingFixture::class,
            DialogsFixture::class,
        ]);
    
    }
    
}
