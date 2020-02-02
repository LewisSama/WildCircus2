<?php

namespace App\DataFixtures;

use App\Entity\Circus;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $circus1 = new Circus();
        $circus1->setName('Pinder');
        $circus1->setImage('pinder.png');
        $circus1->setDescription('False description for our awesome circus : Pinder');
        $manager->persist($circus1);

        $circus2 = new Circus();
        $circus2->setName('Zavatta');
        $circus2->setImage('zavatta.png');
        $circus2->setDescription('False description for our awesome circus : Zavatta');
        $manager->persist($circus2);

        $circus3 = new Circus();
        $circus3->setName('Jokerini');
        $circus3->setImage('jokerini.png');
        $circus3->setDescription('False description for our awesome circus : Jokerini');
        $manager->persist($circus3);

        $circus4 = new Circus();
        $circus4->setName('Wild Circus');
        $circus4->setImage('wildcircus.png');
        $circus4->setDescription('False description for our awesome circus : Wild Circus');
        $manager->persist($circus4);

        $circus5 = new Circus();
        $circus5->setName('Sun\'s circus');
        $circus5->setImage('suncircus.png');
        $circus5->setDescription('False description for our awesome circus : Sun\'s circus');
        $manager->persist($circus5);

        $manager->flush();
    }
}
