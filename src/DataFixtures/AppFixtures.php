<?php

namespace App\DataFixtures;

use App\Entity\Content;
use App\Entity\Box;
use App\Entity\Aliments;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{


    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
        $sushi = ['Makis-sushis', 'Futomakis', 'Hosomakis', 'Nigiris', 'Sashimis', 'Poke bowl au saumon', 'Poke bowl au thon', 'Poke bowl aux crevettes', 'Poke bowl aux crevettes popcorn'];

        for ($i = 0; $i < 8; $i++) {
            $Aliments = new Aliments();
            $Aliments->setName($sushi[$i]);
            $manager->persist($Aliments);
        }
        for ($i = 0; $i < 8; $i++) {
            $box = new Box();
            $box->setName('Box' . $i);
            $box->setImage('https://www.sushibar-voiron.fr/media/4098/800x800/sushi-bar-voiron-115.png');
            $box->setPrice($i + 5, 99);
            $box->setPieces($i);
            $manager->persist($box);
        }

        $manager->flush();
    }
}
