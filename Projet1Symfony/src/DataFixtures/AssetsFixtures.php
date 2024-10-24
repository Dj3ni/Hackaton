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
        for ($i=0; $i < 5; $i++) { 
            $asset = new Asset();
            $asset  ->setType(["sound","avatar","background"][rand(0,2)])
                    ->setChoiceCondition("true");
            $this->addReference("asset_$i",$asset);
            $manager->persist($asset);
        }
        
        $manager->flush();

        for ($i = 1; $i < 5; $i++) {
            $asset = $this->getReference("asset_$i");
            $character = $this->getReference("perso_$i");

            // Assigner le character aux assets
            $asset->setPerso($character);

            // Re-persister l'asset avec la relation
            $manager->persist($asset);
        }

    //     $assetPersoUser = new Asset();
    //     $assetPersoUser  ->setType("avatar")
    //             ->setChoiceCondition("neutral")
    //             ->setFilePath("/avatars/userneutral");
    //     $this->addReference("assetPersoUserNeutral", $assetPersoUser);
    //     $manager->persist($assetPersoUser);
    //     $manager->flush();



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

