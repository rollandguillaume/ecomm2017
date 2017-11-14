<?php
namespace ECommBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use ECommBundle\Entity\Product;
use ECommBundle\Entity\Media;
use Eshop\ShopBundle\Entity\Category;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Filesystem\Exception\IOExceptionInterface;

class ProductData extends AbstractFixture implements OrderedFixtureInterface
{
  public function load(ObjectManager $manager)
  {
    $categoryRepository = $manager->getRepository('ECommBundle:Category');

    $ormurl='src/ECommBundle/DataFixtures/ORM/image/';
    $tabproduct= array(
      array('nom' => 'Les Lanes rouge Domaine de la Baronne',
      'description' => "Bouche ronde, vive et gouleyante, une matière gourmande sur un fruit juteux et les épices, accompagnée par une belle fraîcheur, des tanins souples, une finale friande.",
      'prix' => '11',
      'category' => 'Vin',
      'image' => 'les-lanes-rouge-domaine-de-la-baronne.jpg',
      'quantity' => mt_rand(1, 10)
    ),
    array('nom' => "Cuvée lArdoise Château Fardel Laurens",
    'description' => "Robe grenat évolué. Nez mûr, ambiance forestière, touche de cuir, d'épices, de fruits noirs confitures. Bouche à maturité, assez souple. Les parfums sont présents, le boisé déjà fondu. Médaillé d'Or aux Vinalies Internationales 2016",
    'prix' => '7.90',
    'category' => 'Vin',
    'image' => 'chateau-fardel-laurens.jpg',
    'quantity' => mt_rand(1, 10)
  ),
  array('nom' => 'CIDRE LE BRUN BREIZH BRUT',
  'description' => "Cidre fermier Brut - LE BRUN - cidre fermier - Vendu à l'unité - 1x 75cl - Cidre Breton - Pommes issues des vergers du propriétaire récoltant",
  'prix' => '3.90',
  'category' => 'Cidre',
  'image' => 'cidre-le-brun-breizh-brut.jpg',
  'quantity' => mt_rand(1, 10)
),
array('nom' => 'Cidre Kerisac doux 2° 70cl',
'description' => "cidre fermier - Vendu à l'unité - 1x 70cl - Cidre Breton - Pommes issues des vergers du propriétaire récoltant",
'prix' => '3.90',
'category' => 'Cidre',
'image' => 'cidre-kerisac-doux-2deg-70cl.jpg',
'quantity' => mt_rand(1, 10)
)

);


$fs = new Filesystem();
$fs->remove(array('symlink','web/uploads/images', 'activity.log'));
foreach ($tabproduct as $value) {
  $produit = new Product();
  $produit->setNom($value['nom']);
  $produit->setPrix($value['prix']);
  $produit->setDescription($value['description']);
  $produit->setCategory($categoryRepository->findByName($value['category']));
  $produit->setQuantity($value['quantity']);

  $file = new File($ormurl.$value['image']);
  $fileName = md5(uniqid()).'.'.$file->guessExtension();
  $fs->copy($file,
  'web/uploads/images/'.$fileName
);
$produit->setImagefile($fileName);


$manager->persist($produit);

}
$manager->flush();
}




/**
* @return int
*/
public function getOrder()
{
  return 3; // the order in which fixtures will be loaded
}
}
