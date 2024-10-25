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

        $ending1 = new Ending();
        $ending1
        ->setStoryNode($this->getReference("storyConclusion"))
        ->setText("You funded a reforestation project to offset the carbon footprints of IT CORP. This was the right thing to do. The digital sector is responsible for 4% of global CO₂ emissions. This is almost twice the carbon footprint of civil air travel, which is estimated at around 2.5%! (Source: The Shift Project, 2019.)");
        $this->addReference("ending_1", $ending1);
        $manager->persist($ending1);

        $ending2 = new Ending();
        $ending2 
        ->setStoryNode($this->getReference("storyConclusion"))
        ->setText("You ignored the numerical emissions of IT CORP and rather restrained access to air travel. This is not a bad idea, but you missed the point. The digital sector is responsible for 4% of global CO₂ emissions. This is almost twice the carbon footprint of civil air travel, which is estimated at around 2.5%! (Source: The Shift Project, 2019.)");
        $this->addReference("ending_2", $ending2);
        $manager->persist($ending2);

        $ending3 = new Ending();
        $ending3 
        ->setStoryNode($this->getReference("storyConclusion"))
        ->setText("You gave new computers to Verdâtre and chose to communicate about your green attitude in place of saving resources. This is greenwashing! The manufacture of a digital device (computer or smartphone) represents 80% of its environmental impact. About 240 kg of fossil fuels, 22 kg of chemicals and 1.5 tons of water are necessary to produce a laptop! (Source: ADEME, 2018.)");
        $this->addReference("ending_3", $ending3);
        $manager->persist($ending3);
        
        $ending4 = new Ending();
        $ending4
        ->setStoryNode($this->getReference("storyConclusion"))
        ->setText("You chose to change only the necessary components on Verdâtre’s computers. Good! The manufacture of a digital device (computer or smartphone) represents 80% of its environmental impact. About 240 kg of fossil fuels, 22 kg of chemicals and 1.5 tons of water are necessary to produce a laptop! (Source: ADEME, 2018.)");
        $this->addReference("ending_4", $ending4);
        $manager->persist($ending4);
        
        $manager->flush();
    }

    public function getDependencies()
    {
        return([
            StoryNodeFixture::class,
        ]);
    }
}