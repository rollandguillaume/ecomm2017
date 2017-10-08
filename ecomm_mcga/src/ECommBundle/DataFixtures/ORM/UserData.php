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
    $user->setUsername('vendeur');
    $encoder = $this->container->get('security.password_encoder');
    $password = $encoder->encodePassword($user, 'vendeur');
    $user->setPassword($password);
    $user->setEmail('admin@admin.fr');
    $user->setRoles(array('ROLE_VENDEUR'));
    $manager->persist($user);

    $user2 = new User();
    $user2->setUsername('user');
    $encoder = $this->container->get('security.password_encoder');
    $password = $encoder->encodePassword($user2, 'user');
    $user2->setPassword($password);
    $user2->setEmail('user@user.fr');
    $user2->setRoles(array('ROLE_USER'));
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
