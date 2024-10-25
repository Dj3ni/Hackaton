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

        /////assistant avatars \\\\\\\\\\\\\\
        $assetAvatarAssistantNormal = new Asset();
        $assetAvatarAssistantNormal 
                ->setType("avatar")
                ->setFilepath("/avatars/assistant_normal.png")
                ->setDescription("assistant normal");
        $this->addReference("assistant_normal",$assetAvatarAssistantNormal);
        $manager->persist($assetAvatarAssistantNormal);

        $assetAvatarAssistantHappy = new Asset();
        $assetAvatarAssistantHappy 
                ->setType("avatar")
                ->setFilepath("/avatars/assistant_happy.png")
                ->setDescription("assistant happy");
        $this->addReference("assistant_happy",$assetAvatarAssistantHappy);
        $manager->persist($assetAvatarAssistantHappy);

        $assetAvatarAssistantAngry = new Asset();
        $assetAvatarAssistantAngry
                ->setType("avatar")
                ->setFilepath("/avatars/assistant_angry.png")
                ->setDescription("assistant angry");
        $this->addReference("assistant_angry",$assetAvatarAssistantAngry);
        $manager->persist($assetAvatarAssistantAngry);


        ////////parsnip avatars \\\\\\\\\\\\\\
        $assetAvatarParsnipNormal = new Asset();
        $assetAvatarParsnipNormal 
                ->setType("avatar")
                ->setFilepath("/avatars/parsnip_normal.png")
                ->setDescription("parsnip normal");
               
        $this->addReference("parsnip_normal",$assetAvatarParsnipNormal);
        $manager->persist($assetAvatarParsnipNormal);

        $assetAvatarParsnipHappy = new Asset();
        $assetAvatarParsnipHappy 
                ->setType("avatar")
                ->setFilepath("/avatars/parsnip_happy.png")
                ->setDescription("parsnip happy");
        $this->addReference("parsnip_happy",$assetAvatarParsnipHappy);
        $manager->persist($assetAvatarParsnipHappy);

        $assetAvatarParsnipAngry = new Asset();
        $assetAvatarParsnipAngry
                ->setType("avatar")
                ->setFilepath("/avatars/parsnip_angry.png")
                ->setDescription("parsnip angry");
        $this->addReference("parsnip_angry",$assetAvatarParsnipAngry);
        $manager->persist($assetAvatarParsnipAngry);

        /////// verdatre avatars \\\\\\\\\\\\\\
        $assetAvatarVerdatreNormal = new Asset();
        $assetAvatarVerdatreNormal 
                ->setType("avatar")
                ->setFilepath("/avatars/verdatre_normal.png")
                ->setDescription("verdatre normal");
        $this->addReference("verdatre_normal",$assetAvatarVerdatreNormal);
        $manager->persist($assetAvatarVerdatreNormal);

        $assetAvatarVerdatreHappy = new Asset();        
        $assetAvatarVerdatreHappy
                ->setType("avatar")     
                ->setFilepath("/avatars/verdatre_happy.png")
                ->setDescription("verdatre happy");
        $this->addReference("verdatre_happy",$assetAvatarVerdatreHappy);
        $manager->persist($assetAvatarVerdatreHappy);

        $assetAvatarVerdatreAngry = new Asset();
        $assetAvatarVerdatreAngry
                ->setType("avatar")
                ->setFilepath("/avatars/verdatre_angry.png")
                ->setDescription("verdatre angry");
        $this->addReference("verdatre_angry",$assetAvatarVerdatreAngry);
        $manager->persist($assetAvatarVerdatreAngry);



        ///////////// les backgrounds ////////////////

        $assetBackgroundOffice = new Asset();
        $assetBackgroundOffice
                ->setType("background")
                ->setFilepath("/backgrounds/office-GIF.gif")
                ->setDescription("office background");
        $this->addReference("backgroundOffice",$assetBackgroundOffice);
        $manager->persist($assetBackgroundOffice);

        $assetBackgroundBurningCity = new Asset();
        $assetBackgroundBurningCity
                ->setType("background")
                ->setFilepath("/backgrounds/burning-city-GIF.gif")
                ->setDescription("burning city background");
        $this->addReference("backgroundBurningCity",$assetBackgroundBurningCity);
        $manager->persist($assetBackgroundBurningCity);
      

        ////////////// les images ////////////

        $assetImageEggBad = new Asset();
        $assetImageEggBad
                ->setType("image")
                ->setFilepath("/images/egg-goes-bad.gif")
                ->setDescription("egg goes bad");
        $this->addReference("imageEggBad",$assetImageEggBad);
        $manager->persist($assetImageEggBad);

        $assetImageEggGood = new Asset();
        $assetImageEggGood
                ->setType("image")
                ->setFilepath("/images/egg-goes-good.gif")
                ->setDescription("egg goes good");
        $this->addReference("imageEggGood",$assetImageEggGood);

        $assetImageHeroLogo = new Asset();
        $assetImageHeroLogo
                ->setType("image")
                ->setFilepath("/images/GreenHiro_logo.png")
                ->setDescription("hero logo");
        $this->addReference("imageHeroLogo",$assetImageHeroLogo);

        $assetImageStartBtn = new Asset();
        $assetImageStartBtn
                ->setType("image")
                ->setFilepath("/images/start_button.png")
                ->setDescription("start button");
        $this->addReference("imageStartBtn",$assetImageStartBtn);
        $manager->persist($assetImageStartBtn);










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

