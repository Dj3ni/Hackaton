<?php

namespace App\DataFixtures;

use App\Entity\Asset;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class AssetsFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        // for ($i=0; $i < 5; $i++) { 
        //     $asset = new Asset();
        //     $asset  ->setType(["sound","avatar","background"][rand(0,2)])
        //             ->setChoiceCondition("true");
        //     $this->addReference("asset_$i",$asset);
        //     $manager->persist($asset);
        // }
        
        // $manager->flush();
        //     $assetPersoUser = new Asset();
    //     $assetPersoUser  ->setType("avatar")
    //             ->setChoiceCondition("neutral")
    //             ->setFilePath("/avatars/userneutral");
    //     $this->addReference("assetPersoUserNeutral", $assetPersoUser);
    //     $manager->persist($assetPersoUser);
    //     $manager->flush();

    /**AssetSound */
        $assetPhoneRing = new Asset();
        $assetPhoneRing
                ->setType("sound")
                ->setFilepath("/sound/oldPhone.ogg")
                ->setDescription("old phone ringtone");
        $this->addReference("assetPhoneRing",$assetPhoneRing);
        $manager->persist($assetPhoneRing);

        $assetPhonePick = new Asset();
        $assetPhonePick
                ->setType("sound")
                ->setFilepath("/sound/phoneOnAndOff.ogg")
                ->setDescription("phone on and off");
        $this->addReference("assetPhonePick",$assetPhonePick);
        $manager->persist($assetPhonePick);

        $assetDoorKnock = new Asset();
        $assetDoorKnock
                ->setType("sound")
                ->setFilepath("/sound/doorKnock.wav")
                ->setDescription("knock knock");
        $this->addReference("assetDoorKnock",$assetDoorKnock);
        $manager->persist($assetDoorKnock);

        $assetMainTheme = new Asset();
        $assetMainTheme
                ->setType("sound")
                ->setFilepath("/sound/MainMusic.wav")
                ->setDescription("Main music theme");
        $this->addReference("assetMainTheme",$assetMainTheme);
        $manager->persist($assetMainTheme);

        $assetGoodEnd = new Asset();
        $assetGoodEnd
                ->setType("sound")
                ->setFilepath("/sound/GoodEnding.mp3")
                ->setDescription("Green world music");
        $this->addReference("assetGoodEnd",$assetGoodEnd);
        $manager->persist($assetGoodEnd);

        $assetBadEnd = new Asset();
        $assetBadEnd 
                ->setType("sound")
                ->setFilepath("/sound/BadEnding.wav")
                ->setDescription("Fire world music");
        $this->addReference("assetBadEnd",$assetBadEnd);
        $manager->persist($assetBadEnd);

        $assetCredits = new Asset();
        $assetCredits
                ->setType("sound")
                ->setFilepath("/sound/Credits.ogg")
                ->setDescription("Credits for this awesome team!");
        $this->addReference("assetCredits",$assetCredits);
        $manager->persist($assetCredits);


        // Flush final après avoir mis à jour les relations
        $manager->flush();
    }

    public function getDependencies()
    {
        return([
            CharacterFixtures::class,
        ]);
    }
}

