<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\Ending;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class EndingFixture extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        // $faker = Factory::create('fr_FR');

        // for ($i = 1; $i < 5; $i++) {    
        //     $ending = new Ending();
        //     $ending->setText($faker->paragraph());
        //     $this->addReference("ending_$i",$ending);

        //     $manager->persist($ending);
        // }
        // $manager->flush();

        // for ($i = 1; $i < 5; $i++) {
        //     $storyNode = $this->getReference("storyNode_$i");
        //     $ending = $this->getReference("ending_$i");

        //     $ending->setStoryNode($storyNode);
        //     $manager->persist($ending);
        // }

        // // Flush final après avoir mis à jour les relations
        // $manager->flush();
    }

    public function getDependencies()
    {
        return([
            StoryNodeFixture::class,
        ]);
    }
}