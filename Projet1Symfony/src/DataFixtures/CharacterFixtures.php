<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\Character;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class CharacterFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $faker = Factory::create('fr_FR');

        // for ($i = 0; $i < 5; $i++) {
        //     $perso = new Character();
        //     $perso->setName($faker->lastName());
        //     // $this->addReference("perso_$i",$perso);
            
        //     $manager->persist($perso);
        // }

        /*** "you" ****/
        $persoUser = new Character();
        $persoUser  ->setName("pseudoUser"); // faire un get de la ref user
        $this->addReference("pseudoUser", $persoUser);
        $manager->persist($persoUser);

        /***** Hiro King **********/ 
        $perso1 = new Character();
        $perso1->setName("Hiro King");
        $this->addReference("perso_1", $perso1);
        $manager->persist($perso1);

        /***** Agatha Clarke **********/ 
        $perso2 = new Character();
        $perso2->setName("Agatha Clarke");
        $this->addReference("perso_2", $perso2);
        $manager->persist($perso2);

        /***** Mysterious voice **********/ 
        $perso3 = new Character();
        $perso3->setName("Mysterious Voice");
        $this->addReference("perso_3", $perso3);
        $manager->persist($perso3);
        
        /***** Minako Parsnip **********/ 
        $perso4 = new Character();
        $perso4->setName("Minako Parsnip");
        $this->addReference("perso_4", $perso4);
        $manager->persist($perso4);

        /***** Kevin Verdâtre **********/ 
        $perso5 = new Character();
        $perso5->setName("Kevin Verdâtre");
        $this->addReference("perso_5", $perso5);
        $manager->persist($perso5);

        $perso6 = new Character();
        $perso6->setName("James Arnold King Jr");
        $this->addReference("perso_6", $perso6);
        $manager->persist($perso6);

        $manager->flush();
    }


}
