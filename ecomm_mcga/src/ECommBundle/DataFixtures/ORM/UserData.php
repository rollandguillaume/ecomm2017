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
    $user->setFirstname('name');
    $user->setLastname('lastname');
    $encoder = $this->container->get('security.password_encoder');
    $password = $encoder->encodePassword($user, 'admin');
    $user->setPassword($password);
    $user->setEmail('admin@admin.fr');
    $user->setRoles(array('ROLE_VENDEUR'));
    $manager->persist($user);

    $user2 = new User();
    $user2->setFirstname('name');
    $user2->setLastName('lastname');
    $encoder = $this->container->get('security.password_encoder');
    $password = $encoder->encodePassword($user2, 'user');
    $user2->setPassword($password);
    $user2->setEmail('user@user.fr');
    $manager->persist($user2);

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
