<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\Choice;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class ChoiceFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        
        // $faker = Factory::create('fr_FR');

        // for ($i = 0; $i < 5; $i++) {
        //     $choice = new Choice();
        //     $choice->setText($faker->paragraph());
        //     $this->addReference("choice_$i",$choice);
            
        //     $manager->persist($choice);
        // }
        
        // // One choice leads directly to ending
        // $choice6 = new Choice();
        // $choice6->setEnding($this->getReference("ending_1"))
        //         ->setText($faker->paragraph());
        // $manager->persist($choice6);
        
        // $manager->flush();


        /******* Scene 1 *****************/ 
        $scene1Choice1 = new Choice();
        $scene1Choice1->setText("How does it work?");
        $this->addReference("choice_1",$scene1Choice1);
            
        $manager->persist($scene1Choice1);

        $scene1Choice2 = new Choice();
        $scene1Choice2->setText("OK, let\'s do this!");
        $this->addReference("choice_2",$scene1Choice2);
            
        $manager->persist($scene1Choice2);

        /******* Scene 2 *****************/ 
        $scene2Choice1 = new Choice();
        $scene2Choice1->setText("We cannot ignore the emissions of IT CORP. Let\'s fund this project!");
        $this->addReference("choice_3",$scene2Choice1);
            
        $manager->persist($scene2Choice1);

        $scene2Choice2 = new Choice();
        $scene2Choice2->setText("IT activities have nothing to do with CO₂ emissions.  I\'d rather restrain air travel for the executives.");
        $this->addReference("choice_4",$scene2Choice2);
            
        $manager->persist($scene2Choice2);

        /******* Scene 3 *****************/ 
        $scene3Choice1 = new Choice();
        $scene3Choice1->setText("Of course! The entire world must know how GREEN we have become!");
        $this->addReference("choice_5",$scene3Choice1);
            
        $manager->persist($scene3Choice1);

        $scene3Choice2 = new Choice();
        $scene3Choice2->setText("Just change what’s necessary. I don’t want to waste it.");
        $this->addReference("choice_6",$scene3Choice2);
        $manager->persist($scene3Choice2);

        /***** Conclusion */
        $conclusionChoice1 = new Choice();
        $conclusionChoice1->setText("Kevin Verdâtre.");
        $this->addReference("choice_7",$conclusionChoice1);
        $manager->persist($conclusionChoice1);

        $conclusionChoice2 = new Choice();
        $conclusionChoice2->setText("Minako Parsnip");
        $this->addReference("choice_8",$conclusionChoice2);
        $manager->persist($conclusionChoice2);

        $conclusionChoice3 = new Choice();
        $conclusionChoice3->setText("That would be me.");
        $this->addReference("choice_9",$conclusionChoice3);
        $manager->persist($conclusionChoice3);

        $manager->flush();

    }

    public function getDependencies()
    {
        return([
            EndingFixture::class,
        ]);
    }

}
