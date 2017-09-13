<?php
namespace ECommBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use ECommBundle\Entity\Produits;

class ProduitsData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $produit1 = new Produits();
        $produit1->setDescription("excelent cidre");
        $produit1->setDisponible('1');
        $produit1->setNom('cidre');
        $produit1->setPrix('1.99');
        $manager->persist($produit1);
        
        $produit2 = new Produits();
        $produit2->setDescription("excelent vin");
        $produit2->setDisponible('1');
        $produit2->setNom('vin');
        $produit2->setPrix('1.99');
        $manager->persist($produit2);

        $produit3 = new Produits();
        $produit3->setDescription("excelent vin");
        $produit3->setDisponible('1');
        $produit3->setNom('vin2');
        $produit3->setPrix('1.99');
        $manager->persist($produit3);
        
        $manager->flush();
    }
    
    public function getOrder()
    {
        return 4;
    }
}
