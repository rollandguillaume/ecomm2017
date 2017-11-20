<?php

namespace ECommBundle\Repository;

use Symfony\Bridge\Doctrine\Security\User\UserLoaderInterface;
use Doctrine\ORM\EntityRepository;

class UserRepository extends EntityRepository implements UserLoaderInterface
{
  public function loadUserByUsername($username)
  {
    return $this->createQueryBuilder('u')
    ->where('u.email = :email')
    ->setParameter('email', $username)
    ->getQuery()
    ->getOneOrNullResult();
  }
  public function count()
  {
      $qb = $this->createQueryBuilder('u');
      $qb ->select($qb->expr()->count('u'));
      return (int) $qb->getQuery()->getSingleScalarResult();
  }

}
