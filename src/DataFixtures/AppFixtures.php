<?php

namespace App\DataFixtures;

use App\Entity\Ad;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager ): void
    {
         $work = new Ad();
         $work->setTitle('Ingenieur');
         $work->setDescription('Rechercher un emploi');
         $manager->persist($work);


        $mover= new Ad();
        $mover->setTitle('Demenageur');
        $mover->setDescription('demenageur de de meubles');
        $manager->persist($mover);

        $seller= new Ad();
        $seller->setTitle('vendeur professionnel');
        $seller->setDescription('experimenter dans la vente de divers');
        $manager->persist($seller);


        $cooker= new Ad();
        $cooker->setTitle('Cuisinier professionnel');
        $cooker->setDescription('le cuisinier choisit les produits, élabore les recettes et réalise les différents plats prévus au menu. Selon son lieu ');
        $manager->persist($cooker);

        $teach= new Ad();
        $teach->setTitle('Formateur');
        $teach->setDescription('Formation en ligne et presentiel');
        $manager->persist($teach);

        $florist = new Ad();
        $florist->setTitle('Fleuriste');
        $florist->setDescription('Rechercher un emploi dans le jardinage');
        $manager->persist($florist);


        $manager->flush();

    }



}
