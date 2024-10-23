<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\Dialogs;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class DialogsFixture extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        
        $faker = Factory::create('fr_FR');

        for ($i = 0; $i < 5; $i++) {

            $dialog = new Dialogs();
            
            $dialog ->setText($faker->paragraph())
            ->setState($faker->catchPhrase());
            // ->setPerso($this->getReference("perso$i"))
            // ->setStoryNode($this->getReference("story_node_$i"))
            $this->addReference("dialog_$i",$dialog);
            
            $manager->persist($dialog);
        }
        
        $manager->flush();

            // Link Dialog and choice (after to avoid circular reference)
            for ($i=0; $i <5 ; $i++) { 
                $dialog = $this->getReference("dialog_$i");
                $choice = $this->getReference("choice_$i");
                $dialog->setChoice($choice);
            }
        $manager->flush();
    }


    
    public function getDependencies(){
        return([
            ChoiceFixtures::class,
            // CharacterFixtures::class,
            // StoryNodeFixtures::class,
        ]);
    }
    
    
}
