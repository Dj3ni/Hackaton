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
        // $faker = Factory::create('fr_FR');

        // for ($i = 0; $i < 5; $i++) {

        //     $dialog = new Dialogs();
            
        //     $dialog ->setText($faker->paragraph())
        //     ->setState($faker->catchPhrase());
        //     $this->addReference("dialog_$i",$dialog);
            
        //     $manager->persist($dialog);
        // }
        
        // $manager->flush();

        //     // Link Dialog and choice (after to avoid circular reference)
        //     for ($i=1; $i <5 ; $i++) { 
        //         $dialog = $this->getReference("dialog_$i");
        //         $choice = $this->getReference("choice_$i");
        //         $dialog->setChoice($choice);
        //         // ->setPerso($this->getReference("perso_$i"))
        //         // ->setStoryNode($this->getReference("storyNode_$i"));
        //     }
        // $manager->flush();

        /********************** Scene 1 **************/

        /********** You ******/ 
        $dialog1Scene1 = new Dialogs();
        $dialog1Scene1 ->setText("A few days ago, I was only an intern here at IT CORP…");
        $this->addReference("dialog1Scene1", $dialog1Scene1 );
        // $manager->persist($dialog1Scene1);
        // $manager->flush();

        $dialog1Scene1 ->setStoryNode($this->getReference("storyNodeStart"))
                    ->setPerso($this->getReference("perso_1"));
        $manager->persist($dialog1Scene1);

        $dialog2Scene1 = new Dialogs();
        $dialog2Scene1 ->setText("My father, the CEO of the company, disappeared after a money laundering scandal.");
        $this->addReference("dialog2Scene1", $dialog2Scene1 );
        $dialog2Scene1 ->setStoryNode($this->getReference("storyNodeStart"))
                    ->setPerso($this->getReference("perso_1"));
        $manager->persist($dialog2Scene1);

        $dialog3Scene1 = new Dialogs();
        $dialog3Scene1 ->setText("After that, the board decided to put me in charge.");
        $this->addReference("dialog3Scene1", $dialog3Scene1 );
        $dialog3Scene1 ->setStoryNode($this->getReference("storyNodeStart"))
                    ->setPerso($this->getReference("perso_1"));
        $manager->persist($dialog3Scene1);

        $dialog4Scene1 = new Dialogs();
        $dialog4Scene1 ->setText("How am I supposed to know what to do??? I was only the coffee boy until now!");
        $this->addReference("dialog4Scene1", $dialog4Scene1 );
        $dialog4Scene1 ->setStoryNode($this->getReference("storyNodeStart"))
                    ->setPerso($this->getReference("perso_1"));
        $manager->persist($dialog4Scene1);

        $dialog5Scene1 = new Dialogs();
        $dialog5Scene1 ->setText("Aaah!");
        $this->addReference("dialog5Scene1", $dialog5Scene1 );
        $dialog5Scene1 ->setStoryNode($this->getReference("storyNodeStart"))
                    ->setPerso($this->getReference("perso_1"));
        $manager->persist($dialog5Scene1);

        $dialog6Scene1 = new Dialogs();
        $dialog6Scene1 ->setText("(What should I do?)");
        $this->addReference("dialog6Scene1", $dialog6Scene1 );
        $dialog6Scene1 ->setStoryNode($this->getReference("storyNodeStart"))
                    ->setPerso($this->getReference("perso_1"));
        $manager->persist($dialog6Scene1);

        $dialog7Scene1 = new Dialogs();
        $dialog7Scene1 ->setText("(OK, let\'s do this.)");
        $this->addReference("dialog7Scene1", $dialog7Scene1 );
        $dialog7Scene1 ->setStoryNode($this->getReference("storyNodeStart"))
                    ->setPerso($this->getReference("perso_1"));
        $manager->persist($dialog7Scene1);

        $dialog8Scene1 = new Dialogs();
        $dialog8Scene1 ->setText("Come in!");
        $this->addReference("dialog8Scene1", $dialog8Scene1 );
        $dialog8Scene1 ->setStoryNode($this->getReference("storyNodeStart"))
                    ->setPerso($this->getReference("perso_1"));
        $manager->persist($dialog8Scene1);

        /********** Agatha Clarke ******/ 
        $dialog9Scene1 = new Dialogs();
        $dialog9Scene1 ->setText("Mr. Hiro King?");
        $this->addReference("dialog9Scene1", $dialog9Scene1 );
        $dialog9Scene1 ->setStoryNode($this->getReference("storyNodeStart"))
                    ->setState("Happy")
                    ->setPerso($this->getReference("perso_2"));
        $manager->persist($dialog9Scene1);

        $dialog10Scene1 = new Dialogs();
        $dialog10Scene1 ->setText("I am Agatha Clarke, executive assistant at IT CORP… ");
        $this->addReference("dialog10Scene1", $dialog10Scene1 );
        $dialog10Scene1 ->setStoryNode($this->getReference("storyNodeStart"))
                    ->setState("Neutral")
                    ->setPerso($this->getReference("perso_2"));
        $manager->persist($dialog10Scene1);

        $dialog11Scene1 = new Dialogs();
        $dialog11Scene1 ->setText("The direction board mandated me to help your father, James A. King Jr, before he disappeared.");
        $this->addReference("dialog11Scene1", $dialog11Scene1 );
        $dialog11Scene1 ->setStoryNode($this->getReference("storyNodeStart"))
                    ->setState("Neutral")
                    ->setPerso($this->getReference("perso_2"));
        $manager->persist($dialog11Scene1);

        $dialog12Scene1 = new Dialogs();
        $dialog12Scene1 ->setText("I am here to help you now.");
        $this->addReference("dialog12Scene1", $dialog12Scene1 );
        $dialog12Scene1 ->setStoryNode($this->getReference("storyNodeStart"))
                    ->setState("Happy")
                    ->setPerso($this->getReference("perso_2"));
        $manager->persist($dialog12Scene1);

        $dialog13Scene1 = new Dialogs();
        $dialog13Scene1 ->setText("We need to talk about the Green directives at IT CORP, Mr. Hiro.");
        $this->addReference("dialog13Scene1", $dialog13Scene1 );
        $dialog13Scene1 ->setStoryNode($this->getReference("storyNodeStart"))
                    ->setState("Angry")
                    ->setPerso($this->getReference("perso_2"));
        $manager->persist($dialog13Scene1);
        /** Hiro */
        $dialog14Scene1 = new Dialogs();
        $dialog14Scene1 ->setText("Green directives?");
        $this->addReference("dialog14Scene1", $dialog14Scene1 );
        $dialog14Scene1 ->setStoryNode($this->getReference("storyNodeStart"))
                    ->setPerso($this->getReference("perso_1"));
        $manager->persist($dialog14Scene1);

        /** Agatha */
        $dialog15Scene1 = new Dialogs();
        $dialog15Scene1 ->setText("I\'m sorry to bother you so early. I know that you are still adjusting to your new position…");
        $this->addReference("dialog15Scene1", $dialog15Scene1 );
        $dialog15Scene1 ->setStoryNode($this->getReference("storyNodeStart"))
                        ->setState("Angry")
                        ->setPerso($this->getReference("perso_2"));
        $manager->persist($dialog15Scene1);

        $dialog16Scene1 = new Dialogs();
        $dialog16Scene1 ->setText("But the “Green” question has been ignored for far too long under the influence of your father. It’s time for you to change the way things work over here!");
        $this->addReference("dialog16Scene1", $dialog16Scene1 );
        $dialog16Scene1 ->setStoryNode($this->getReference("storyNodeStart"))
                        ->setState("Neutral")
                        ->setPerso($this->getReference("perso_2"));
        $manager->persist($dialog16Scene1);

        /** Hiro */
        $dialog17Scene1 = new Dialogs();
        $dialog17Scene1 ->setText("But I don\'t know anything about that…  ");
        $this->addReference("dialog17Scene1", $dialog17Scene1 );
        $dialog17Scene1 ->setStoryNode($this->getReference("storyNodeStart"))
                    ->setPerso($this->getReference("perso_1"));
        $manager->persist($dialog17Scene1);

        /**Agatha */
        $dialog18Scene1 = new Dialogs();
        $dialog18Scene1 ->setText("Oh, don\'t sell yourself short, Mr. Hiro!");
        $this->addReference("dialog18Scene1", $dialog18Scene1 );
        $dialog18Scene1 ->setStoryNode($this->getReference("storyNodeStart"))
                        ->setState("Happy")
                        ->setPerso($this->getReference("perso_2"));
        $manager->persist($dialog18Scene1);

        $dialog19Scene1 = new Dialogs();
        $dialog19Scene1 ->setText("I\'m certain you will make the right choices.");
        $this->addReference("dialog19Scene1", $dialog19Scene1 );
        $dialog19Scene1 ->setStoryNode($this->getReference("storyNodeStart"))
                        ->setState("Neutral")
                        ->setPerso($this->getReference("perso_2"));
        $manager->persist($dialog19Scene1);

        $dialog20Scene1 = new Dialogs();
        $dialog20Scene1 ->setText("That\'s simple. ");
        $this->addReference("dialog20Scene1", $dialog20Scene1 );
        $dialog20Scene1 ->setStoryNode($this->getReference("storyNodeStart"))
                        ->setState("Neutral")
                        ->setPerso($this->getReference("perso_2"));
        $manager->persist($dialog20Scene1);

        $dialog21Scene1 = new Dialogs();
        $dialog21Scene1 ->setText("A lot of people are concerned here about the future of our planet.");
        $this->addReference("dialog21Scene1", $dialog21Scene1 );
        $dialog21Scene1 ->setStoryNode($this->getReference("storyNodeStart"))
                        ->setState("Neutral")
                        ->setPerso($this->getReference("perso_2"));
        $manager->persist($dialog21Scene1);

        $dialog22Scene1 = new Dialogs();
        $dialog22Scene1 ->setText("Listen to them and make the right decision.");
        $this->addReference("dialog22Scene1", $dialog22Scene1 );
        $dialog22Scene1 ->setStoryNode($this->getReference("storyNodeStart"))
                        ->setState("Neutral")
                        ->setPerso($this->getReference("perso_2"));
        $manager->persist($dialog22Scene1);

        $dialog23Scene1 = new Dialogs();
        $dialog23Scene1 ->setText("We want to work together on a better world!");
        $this->addReference("dialog23Scene1", $dialog23Scene1 );
        $dialog23Scene1 ->setStoryNode($this->getReference("storyNodeStart"))
                        ->setState("Happy")
                        ->setPerso($this->getReference("perso_2"));
        $manager->persist($dialog23Scene1);

        $dialog24Scene1 = new Dialogs();
        $dialog24Scene1 ->setText("IT CORP has a lot of influence. Your choices might have consequences.");
        $this->addReference("dialog24Scene1", $dialog24Scene1 );
        $dialog24Scene1 ->setStoryNode($this->getReference("storyNodeStart"))
                        ->setState("Angry")
                        ->setPerso($this->getReference("perso_2"));
        $manager->persist($dialog24Scene1);

        $dialog25Scene1 = new Dialogs();
        $dialog25Scene1 ->setText("My advice is to think carefully before you act.");
        $this->addReference("dialog25Scene1", $dialog25Scene1 );
        $dialog25Scene1 ->setStoryNode($this->getReference("storyNodeStart"))
                        ->setState("Neutral")
                        ->setPerso($this->getReference("perso_2"));
        $manager->persist($dialog25Scene1);

        /** Hiro */

        $dialog26Scene1 = new Dialogs();
        $dialog26Scene1 ->setText("Alright then, let\'s see…");
        $this->addReference("dialog26Scene1", $dialog26Scene1 );
        $dialog26Scene1 ->setStoryNode($this->getReference("storyNodeStart"))
                    ->setPerso($this->getReference("perso_1"));
        $manager->persist($dialog26Scene1);

        /** Agatha */
        $dialog27Scene1 = new Dialogs();
        $dialog27Scene1 ->setText("Thank you, Mr. Hiro. I can already see what a great president you will become!");
        $this->addReference("dialog27Scene1", $dialog27Scene1 );
        $dialog27Scene1 ->setStoryNode($this->getReference("storyNodeStart"))
                        ->setState("Happy")
                        ->setPerso($this->getReference("perso_2"));
        $manager->persist($dialog27Scene1);

        /** Dialog post choice */
        $dialog28Scene1 = new Dialogs();
        $dialog28Scene1 ->setText("Thank you, Mr. Hiro.");
        $this->addReference("dialog28Scene1", $dialog28Scene1 );
        $dialog28Scene1 ->setStoryNode($this->getReference("storyNodeStart"))
                        ->setState("Happy")
                        ->setChoice($this->getReference("choice_2"))
                        ->setPerso($this->getReference("perso_2"));
        $manager->persist($dialog28Scene1);

        $manager->flush();




    }

    
    public function getDependencies(){
        return([
            ChoiceFixtures::class,
            CharacterFixtures::class,
            StoryNodeFixture::class,
        ]);
    }
    
}
