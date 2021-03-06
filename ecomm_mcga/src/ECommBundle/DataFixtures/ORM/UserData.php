<?php
namespace ECommBundle\DataFixtures\ORM;

use ECommBundle\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class UserData extends Fixture
{
  public function load(ObjectManager $manager)
  {
    $user = new User();
    $user->setFirstname('admin_name');
    $user->setLastname('admin_lastname');
    $encoder = $this->container->get('security.password_encoder');
    $password = $encoder->encodePassword($user,'admin');
    $user->setPassword($password);
    $user->setEmail('admin@admin.fr');
    $user->setRoles(array('ROLE_VENDEUR'));
    $manager->persist($user);

    $manager->flush();
  }

  /**
  * @return int
  */
  public function getOrder()
  {
    return 1; // the order in which fixtures will be loaded
  }

}
