<?php
namespace ECommBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use ECommBundle\Entity\Category;

class CategoryData implements FixtureInterface, OrderedFixtureInterface
{
  /**
  * @param ObjectManager $manager
  */
  public function load(ObjectManager $manager)
  {
    $category = new Category();
    $category->setName('vin ');
    $manager->persist($category);

    $category2 = new Category();
    $category2->setName('cidre1');
    $manager->persist($category2);

    $manager->flush();
  }

  /**
  * @return int
  */
  public function getOrder()
  {
    return 2; // the order in which fixtures will be loaded
  }
}
