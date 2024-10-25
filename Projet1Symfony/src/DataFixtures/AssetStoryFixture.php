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
        // for ($i = 0; $i < 5; $i++) {    
        //     $assetStory = new AssetStory();
        //     // $asset = $this->getReference("asset_$i");
        //     // $story = $this->getReference("storyNode_$i");
        //     // $assetStory->setAsset($asset);
        //                 // ->setStoryNode($story);
            
        //     $manager->persist($assetStory);
            
        // }

        /***** Assets sounds******/
        $assetIntro = new AssetStory();
        $assetIntro -> setAsset($this->getReference("assetMainTheme"))
                    -> setStoryNode($this->getReference("storyNodeStart"));
        $manager->persist($assetIntro);

        $assetBadEnd= new AssetStory();
        $assetBadEnd-> setAsset($this->getReference("assetBadEnd"))
                    -> setStoryNode($this->getReference("storyNodeEnd"));
        $manager->persist($assetBadEnd);

        $assetGoodEnd= new AssetStory();
        $assetGoodEnd-> setAsset($this->getReference("assetGoodEnd"))
                    -> setStoryNode($this->getReference("storyNodeEnd"));
        $manager->persist($assetGoodEnd);


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
