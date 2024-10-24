<?php

namespace App\DataFixtures;

use App\Entity\AssetStory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class AssetStoryFixture extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        for ($i = 0; $i < 5; $i++) {    
            $assetStory = new AssetStory();
            $asset = $this->getReference("asset_$i");
            $story = $this->getReference("storyNode_$i");
            $assetStory->setAsset($asset)
                        ->setStoryNode($story);
            
            $manager->persist($assetStory);
            
        }

        $manager->flush();
    }

    public function getDependencies()
    {
        return([
            AssetsFixtures::class,
            StoryNodeFixture::class,
        ]);
    }
}
