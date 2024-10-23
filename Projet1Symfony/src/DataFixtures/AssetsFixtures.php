<?php

namespace App\DataFixtures;

use App\Entity\Asset;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AssetsFixtures extends Fixture
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
    }
}
