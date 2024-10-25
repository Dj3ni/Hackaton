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

        /********** Scene 2 *****************/

        /** Hiro */

        $dialog1Scene2 = new Dialogs();
        $dialog1Scene2 ->setText("Is this old phone still working?");
        $this->addReference("dialog1Scene2", $dialog1Scene2 );
        $dialog1Scene2 ->setStoryNode($this->getReference("storyNodeScene2"))
                    ->setPerso($this->getReference("perso_1"));
        $manager->persist($dialog1Scene2);

        $dialog2Scene2 = new Dialogs();
        $dialog2Scene2 ->setText("(I probably have to answer.)");
        $this->addReference("dialog2Scene2", $dialog2Scene2 );
        $dialog2Scene2 ->setStoryNode($this->getReference("storyNodeScene2"))
                    ->setPerso($this->getReference("perso_1"));
        $manager->persist($dialog2Scene2);

        /** Mysterious Voice */

        $dialog3Scene2= new Dialogs();
        $dialog3Scene2  ->setText("Hiro King? ");
        $this->addReference("dialog3Scene2 ", $dialog3Scene2);
        $dialog3Scene2 ->setStoryNode($this->getReference("storyNodeScene2"))
                    ->setPerso($this->getReference("perso_3"));
        $manager->persist($dialog3Scene2);


        /** Hiro */
        $dialog4Scene2 = new Dialogs();
        $dialog4Scene2 ->setText("Y… yes? (Wow, this guy sounds creepy…)");
        $this->addReference("dialog4Scene2", $dialog4Scene2 );
        $dialog4Scene2 ->setStoryNode($this->getReference("storyNodeScene2"))
                    ->setPerso($this->getReference("perso_1"));
        $manager->persist($dialog4Scene2);

        /** Mysterious Voice */
        $dialog5Scene2= new Dialogs();
        $dialog5Scene2  ->setText("Hiro King. So, you think you can replace the great James Arnold King Jr. as the head of IT CORP?");
        $this->addReference("dialog5Scene2 ", $dialog5Scene2);
        $dialog5Scene2 ->setStoryNode($this->getReference("storyNodeScene2"))
                    ->setPerso($this->getReference("perso_3"));
        $manager->persist($dialog5Scene2);

        /** Hiro */
        $dialog6Scene2 = new Dialogs();
        $dialog6Scene2 ->setText("Err…");
        $this->addReference("dialog6Scene2", $dialog6Scene2 );
        $dialog6Scene2 ->setStoryNode($this->getReference("storyNodeScene2"))
                    ->setPerso($this->getReference("perso_1"));
        $manager->persist($dialog6Scene2);

        /** Mysterious Voice */
        $dialog7Scene2= new Dialogs();
        $dialog7Scene2  ->setText("Very interesting.");
        $this->addReference("dialog7Scene2 ", $dialog7Scene2);
        $dialog7Scene2 ->setStoryNode($this->getReference("storyNodeScene2"))
                        ->setPerso($this->getReference("perso_3"));
        $manager->persist($dialog7Scene2);

        $dialog8Scene2= new Dialogs();
        $dialog8Scene2  ->setText("Let’s see if you can handle that.");
        $this->addReference("dialog8Scene2 ", $dialog8Scene2);
        $dialog8Scene2 ->setStoryNode($this->getReference("storyNodeScene2"))
                        ->setPerso($this->getReference("perso_3"));
        $manager->persist($dialog8Scene2);

        $dialog9Scene2= new Dialogs();
        $dialog9Scene2  ->setText("I will watch you.");
        $this->addReference("dialog9Scene2 ", $dialog9Scene2);
        $dialog9Scene2 ->setStoryNode($this->getReference("storyNodeScene2"))
                        ->setPerso($this->getReference("perso_3"));
        $manager->persist($dialog9Scene2);

        $dialog10Scene2= new Dialogs();
        $dialog10Scene2  ->setText("Very carefully.");
        $this->addReference("dialog10Scene2 ", $dialog10Scene2);
        $dialog10Scene2 ->setStoryNode($this->getReference("storyNodeScene2"))
                        ->setPerso($this->getReference("perso_3"));
        $manager->persist($dialog10Scene2);

        /** Hiro */
        $dialog11Scene2 = new Dialogs();
        $dialog11Scene2 ->setText("(What was that?)");
        $this->addReference("dialog11Scene2", $dialog11Scene2 );
        $dialog11Scene2 ->setStoryNode($this->getReference("storyNodeScene2"))
                    ->setPerso($this->getReference("perso_1"));
        $manager->persist($dialog11Scene2);

        $dialog12Scene2 = new Dialogs();
        $dialog12Scene2 ->setText("Aw. Err… Come in!");
        $this->addReference("dialog12Scene2", $dialog12Scene2 );
        $dialog12Scene2 ->setStoryNode($this->getReference("storyNodeScene2"))
                    ->setPerso($this->getReference("perso_1"));
        $manager->persist($dialog12Scene2);

        $dialog13Scene2 = new Dialogs();
        $dialog13Scene2 ->setText("… Hello?");
        $this->addReference("dialog13Scene2", $dialog13Scene2 );
        $dialog13Scene2 ->setStoryNode($this->getReference("storyNodeScene2"))
                    ->setPerso($this->getReference("perso_1"));
        $manager->persist($dialog13Scene2);

        /** Minako Parsnip */
        $dialog14Scene2 = new Dialogs();
        $dialog14Scene2 ->setText("Hmm…");
        $this->addReference("dialog14Scene2", $dialog14Scene2 );
        $dialog14Scene2 ->setStoryNode($this->getReference("storyNodeScene2"))
                    ->setState("Neutral")
                    ->setPerso($this->getReference("perso_4"));
        $manager->persist($dialog14Scene2);

        $dialog15Scene2 = new Dialogs();
        $dialog15Scene2 ->setText("Ah…");
        $this->addReference("dialog15Scene2", $dialog15Scene2 );
        $dialog15Scene2 ->setStoryNode($this->getReference("storyNodeScene2"))
                    ->setState("Angry")
                    ->setPerso($this->getReference("perso_4"));
        $manager->persist($dialog15Scene2);

        $dialog16Scene2 = new Dialogs();
        $dialog16Scene2 ->setText("S… Sorry! Sorry to interrupt, Mr. King! I’m so sorry!");
        $this->addReference("dialog16Scene2", $dialog16Scene2 );
        $dialog16Scene2 ->setStoryNode($this->getReference("storyNodeScene2"))
                    ->setState("Neutral")
                    ->setPerso($this->getReference("perso_4"));
        $manager->persist($dialog16Scene2);
        
        $dialog17Scene2 = new Dialogs();
        $dialog17Scene2 ->setText("I am Minako Parsnip, from the Research Department.");
        $this->addReference("dialog17Scene2", $dialog17Scene2 );
        $dialog17Scene2 ->setStoryNode($this->getReference("storyNodeScene2"))
                    ->setState("Happy")
                    ->setPerso($this->getReference("perso_4"));
        $manager->persist($dialog17Scene2);

        $dialog18Scene2 = new Dialogs();
        $dialog18Scene2 ->setText("I… I have a request.");
        $this->addReference("dialog18Scene2", $dialog18Scene2 );
        $dialog18Scene2 ->setStoryNode($this->getReference("storyNodeScene2"))
                    ->setState("Neutral")
                    ->setPerso($this->getReference("perso_4"));
        $manager->persist($dialog18Scene2);

        $dialog19Scene2 = new Dialogs();
        $dialog19Scene2 ->setText("Environmental activists complain on FrameBook about our company.");
        $this->addReference("dialog19Scene2", $dialog19Scene2 );
        $dialog19Scene2 ->setStoryNode($this->getReference("storyNodeScene2"))
                    ->setState("Angry")
                    ->setPerso($this->getReference("perso_4"));
        $manager->persist($dialog19Scene2);

        $dialog20Scene2 = new Dialogs();
        $dialog20Scene2 ->setText("They ask us to offset the carbon footprints of our numerical activities. They want us to fund a reforestation project in Niger. What should we do?");
        $this->addReference("dialog20Scene2", $dialog20Scene2 );
        $dialog20Scene2 ->setStoryNode($this->getReference("storyNodeScene2"))
                    ->setState("Neutral")
                    ->setPerso($this->getReference("perso_4"));
        $manager->persist($dialog20Scene2);

        $dialog21Scene2 = new Dialogs();
        $dialog21Scene2 ->setText("Thank you for your time, sir!");
        $this->addReference("dialog21Scene2", $dialog21Scene2 );
        $dialog21Scene2 ->setStoryNode($this->getReference("storyNodeScene2"))
                    ->setState("Happy")
                    ->setPerso($this->getReference("perso_4"));
        $manager->persist($dialog21Scene2);

        $dialog22Scene2 = new Dialogs();
        $dialog22Scene2 ->setText("I will pass on your directives!");
        $this->addReference("dialog22Scene2", $dialog22Scene2 );
        $dialog22Scene2 ->setStoryNode($this->getReference("storyNodeScene2"))
                    ->setState("Happy")
                    ->setPerso($this->getReference("perso_4"));
        $manager->persist($dialog22Scene2);

        /************** Scene 3 ***************/
        /** Hiro */
        $dialog1Scene3 = new Dialogs();
        $dialog1Scene3 ->setText("(Minako Parsnip.)");
        $this->addReference("dialog1Scene3", $dialog1Scene3 );
        $dialog1Scene3 ->setStoryNode($this->getReference("storyNodeScene3"))
                    ->setPerso($this->getReference("perso_1"));
        $manager->persist($dialog1Scene3);

        $dialog2Scene3 = new Dialogs();
        $dialog2Scene3 ->setText("(She seems quite dedicated to her job.)");
        $this->addReference("dialog2Scene3", $dialog2Scene3 );
        $dialog2Scene3 ->setStoryNode($this->getReference("storyNodeScene3"))
                    ->setPerso($this->getReference("perso_1"));
        $manager->persist($dialog2Scene3);

        $dialog3Scene3 = new Dialogs();
        $dialog3Scene3 ->setText("(I wonder if my father’s other employees are as involved in sustainability as she is.) ");
        $this->addReference("dialog3Scene3", $dialog3Scene3 );
        $dialog3Scene3 ->setStoryNode($this->getReference("storyNodeScene3"))
                    ->setPerso($this->getReference("perso_1"));
        $manager->persist($dialog3Scene3);

        /** Kevin Verdâtre */

        $dialog4Scene3 = new Dialogs();
        $dialog4Scene3 ->setText("...");
        $this->addReference("dialog4Scene3", $dialog4Scene3 );
        $dialog4Scene3 ->setStoryNode($this->getReference("storyNodeScene3"))
                ->setState("Neutral")
                ->setPerso($this->getReference("perso_5"));
        $manager->persist($dialog4Scene3);

        /** Hiro */
        $dialog5Scene3 = new Dialogs();
        $dialog5Scene3 ->setText("...");
        $this->addReference("dialog5Scene3", $dialog5Scene3 );
        $dialog5Scene3 ->setStoryNode($this->getReference("storyNodeScene3"))
                    ->setPerso($this->getReference("perso_1"));
        $manager->persist($dialog5Scene3);

        $dialog6Scene3 = new Dialogs();
        $dialog6Scene3 ->setText("... who are you? ");
        $this->addReference("dialog6Scene3", $dialog6Scene3 );
        $dialog6Scene3 ->setStoryNode($this->getReference("storyNodeScene3"))
                    ->setPerso($this->getReference("perso_1"));
        $manager->persist($dialog6Scene3);

        /** Kevin Verdâtre */

        $dialog7Scene3 = new Dialogs();
        $dialog7Scene3 ->setText("You will discover soon enough who I am... Mr. Hiro KING!");
        $this->addReference("dialog7Scene3", $dialog7Scene3 );
        $dialog7Scene3 ->setStoryNode($this->getReference("storyNodeScene3"))
                ->setState("Angry")
                ->setPerso($this->getReference("perso_5"));
        $manager->persist($dialog7Scene3);

        /** Hiro */
        $dialog8Scene3 = new Dialogs();
        $dialog8Scene3 ->setText("(Wow! He’s almost as scary as the guy on the phone!)");
        $this->addReference("dialog8Scene3", $dialog8Scene3 );
        $dialog8Scene3 ->setStoryNode($this->getReference("storyNodeScene3"))
                    ->setPerso($this->getReference("perso_1"));
        $manager->persist($dialog8Scene3);

        /** Kevin Verdâtre */
        $dialog9Scene3 = new Dialogs();
        $dialog9Scene3 ->setText("The graphic designers of the Marketing Department need more powerful computers…!");
        $this->addReference("dialog9Scene3", $dialog9Scene3 );
        $dialog9Scene3 ->setStoryNode($this->getReference("storyNodeScene3"))
                ->setState("Neutral")
                ->setPerso($this->getReference("perso_5"));
        $manager->persist($dialog9Scene3);

        $dialog10Scene3 = new Dialogs();
        $dialog10Scene3 ->setText("We can’t create anything good with these DESPICABLY old machines.");
        $this->addReference("dialog10Scene3", $dialog10Scene3 );
        $dialog10Scene3 ->setStoryNode($this->getReference("storyNodeScene3"))
                ->setState("Angry")
                ->setPerso($this->getReference("perso_5"));
        $manager->persist($dialog10Scene3);

        $dialog11Scene3 = new Dialogs();
        $dialog11Scene3 ->setText("We kept them for two years after all.");
        $this->addReference("dialog11Scene3", $dialog11Scene3 );
        $dialog11Scene3 ->setStoryNode($this->getReference("storyNodeScene3"))
                ->setState("Neutral")
                ->setPerso($this->getReference("perso_5"));
        $manager->persist($dialog11Scene3);

        $dialog12Scene3 = new Dialogs();
        $dialog12Scene3 ->setText("To show the world how GREEN we are, we need our advertising service to be FLAWLESS.");
        $this->addReference("dialog12Scene3", $dialog12Scene3);
        $dialog12Scene3 ->setStoryNode($this->getReference("storyNodeScene3"))
                ->setState("Angry")
                ->setPerso($this->getReference("perso_5"));
        $manager->persist($dialog12Scene3);

        $dialog13Scene3 = new Dialogs();
        $dialog13Scene3 ->setText("Don’t you agree, Mr. Hiro King?");
        $this->addReference("dialog13Scene3", $dialog13Scene3);
        $dialog13Scene3 ->setStoryNode($this->getReference("storyNodeScene3"))
                ->setState("Happy")
                ->setPerso($this->getReference("perso_5"));
        $manager->persist($dialog13Scene3);

        $dialog14Scene3 = new Dialogs();
        $dialog14Scene3 ->setText("Fair enough. See you soon… Mr. Hiro King.");
        $this->addReference("dialog14Scene3", $dialog14Scene3);
        $dialog14Scene3 ->setStoryNode($this->getReference("storyNodeScene3"))
                ->setState("Neutral")
                ->setPerso($this->getReference("perso_5"));
        $manager->persist($dialog14Scene3);

        
        /*************** EndGame ***************/

        /** Hiro */

        $dialog1End = new Dialogs();
        $dialog1End ->setText("I have a bad feeling about this.");
        $this->addReference("dialog1End", $dialog1End );
        $dialog1End ->setStoryNode($this->getReference("storyNodeEnd"))
                    ->setPerso($this->getReference("perso_1"));
        $manager->persist($dialog1End);

        /*** Mysterious Voice */

        $dialog2End = new Dialogs();
        $dialog2End  ->setText("It’s time.");
        $this->addReference("dialog2End ", $dialog2End);
        $dialog2End ->setStoryNode($this->getReference("storyNodeEnd"))
                    ->setPerso($this->getReference("perso_3"));
        $manager->persist($dialog2End);

        $dialog3End = new Dialogs();
        $dialog3End  ->setText("Hiro King. IT CORP has gone through a lot of changes these days.");
        $this->addReference("dialog3End ", $dialog3End);
        $dialog3End ->setStoryNode($this->getReference("storyNodeEnd"))
                    ->setPerso($this->getReference("perso_3"));
        $manager->persist($dialog3End);

        $dialog4End = new Dialogs();
        $dialog4End  ->setText("And that’s all because of you.");
        $this->addReference("dialog4End ", $dialog4End);
        $dialog4End ->setStoryNode($this->getReference("storyNodeEnd"))
                    ->setPerso($this->getReference("perso_3"));
        $manager->persist($dialog4End);

        $dialog5End = new Dialogs();
        $dialog5End  ->setText("Was it for the best? Did you make things you regret?");
        $this->addReference("dialog5End ", $dialog5End);
        $dialog5End ->setStoryNode($this->getReference("storyNodeEnd"))
                    ->setPerso($this->getReference("perso_3"));
        $manager->persist($dialog5End);

        $dialog6End = new Dialogs();
        $dialog6End  ->setText("… or will regret?");
        $this->addReference("dialog6End ", $dialog6End);
        $dialog6End ->setStoryNode($this->getReference("storyNodeEnd"))
                    ->setPerso($this->getReference("perso_3"));
        $manager->persist($dialog6End);

        $dialog7End = new Dialogs();
        $dialog7End  ->setText("It is time now to reveal the truth to you.");
        $this->addReference("dialog7End ", $dialog7End);
        $dialog7End ->setStoryNode($this->getReference("storyNodeEnd"))
                    ->setPerso($this->getReference("perso_3"));
        $manager->persist($dialog7End);

        $dialog8End = new Dialogs();
        $dialog8End  ->setText("I was never really gone… Hiro.");
        $this->addReference("dialog8End ", $dialog8End);
        $dialog8End ->setStoryNode($this->getReference("storyNodeEnd"))
                    ->setPerso($this->getReference("perso_3"));
        $manager->persist($dialog8End);

        /** Hiro */

        $dialog9End = new Dialogs();
        $dialog9End ->setText("...");
        $this->addReference("dialog9End", $dialog9End );
        $dialog9End ->setStoryNode($this->getReference("storyNodeEnd"))
                    ->setPerso($this->getReference("perso_1"));
        $manager->persist($dialog9End);

        $dialog10End = new Dialogs();
        $dialog10End ->setText("DAD???");
        $this->addReference("dialog10End", $dialog10End );
        $dialog10End ->setStoryNode($this->getReference("storyNodeEnd"))
                    ->setPerso($this->getReference("perso_1"));
        $manager->persist($dialog10End);

        /** Hiro Senior */
        $dialog11End = new Dialogs();
        $dialog11End ->setText("Yes. I wanted to see what kind of ruler you would be for our company.");
        $this->addReference("dialog11End", $dialog11End );
        $dialog11End ->setStoryNode($this->getReference("storyNodeEnd"))
                    ->setPerso($this->getReference("perso_6"));
        $manager->persist($dialog11End);

        $dialog12End = new Dialogs();
        $dialog12End ->setText("I made some mistakes… ");
        $this->addReference("dialog12End", $dialog12End );
        $dialog12End ->setStoryNode($this->getReference("storyNodeEnd"))
                    ->setPerso($this->getReference("perso_6"));
        $manager->persist($dialog12End);

        $dialog13End = new Dialogs();
        $dialog13End ->setText("I hoped you would know better than I what to do.");
        $this->addReference("dialog13End", $dialog13End );
        $dialog13End ->setStoryNode($this->getReference("storyNodeEnd"))
                    ->setPerso($this->getReference("perso_6"));
        $manager->persist($dialog13End);

        $dialog14End = new Dialogs();
        $dialog14End ->setText("You know... saving the planet and all that. I was never good at caring about others' future.");
        $this->addReference("dialog14End", $dialog14End );
        $dialog14End ->setStoryNode($this->getReference("storyNodeEnd"))
                    ->setPerso($this->getReference("perso_6"));
        $manager->persist($dialog14End);

        $dialog15End = new Dialogs();
        $dialog15End ->setText("But you know that better than me. Don’t you, son?");
        $this->addReference("dialog15End", $dialog15End );
        $dialog15End ->setStoryNode($this->getReference("storyNodeEnd"))
                    ->setPerso($this->getReference("perso_6"));
        $manager->persist($dialog15End);

        $dialog16End = new Dialogs();
        $dialog16End ->setText("Before we end this, let me ask you a last question.");
        $this->addReference("dialog16End", $dialog16End );
        $dialog16End ->setStoryNode($this->getReference("storyNodeEnd"))
                    ->setPerso($this->getReference("perso_6"));
        $manager->persist($dialog16End);

        $dialog17End = new Dialogs();
        $dialog17End ->setText("IT CORP needs a Green IT supervisor. Who would you choose to lead the company to a more sustainable future?");
        $this->addReference("dialog17End", $dialog17End );
        $dialog17End ->setStoryNode($this->getReference("storyNodeEnd"))
                    ->setPerso($this->getReference("perso_6"));
        $manager->persist($dialog17End);

        $dialog18End = new Dialogs();
        $dialog18End ->setText("Good. Now look through the window and look at what you did.");
        $this->addReference("dialog18End", $dialog18End );
        $dialog18End ->setStoryNode($this->getReference("storyNodeEnd"))
                    ->setPerso($this->getReference("perso_6"));
        $manager->persist($dialog18End);


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
