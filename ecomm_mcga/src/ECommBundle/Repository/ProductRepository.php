<?php

namespace ECommBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
* ProductRepository
*
* This class was generated by the Doctrine ORM. Add your own custom
* repository methods below.
*/
class ProductRepository extends EntityRepository
{

  /**
  *
  */
  public function existProduit ($idProduit) {

    $qb =  $this->createQueryBuilder('p')
    ->andWhere('p.id = :id')
    ->setParameter('id', $idProduit)
    ;

    return sizeof($qb->getQuery()->getResult()) == 1;
  }

  public function getAllProduct()
  {
    $query = $this->createQueryBuilder('a')
    // Jointure sur l'attribut image
    ;

    return $query
    ->getQuery()
    ->getResult();
  }


  /**
   * @param Category $category
   * @return QueryBuilder
   */
  public function findByCategoryQB($category)
  {
      $qb = $this->getEntityManager()->createQueryBuilder();

      $qb->select(['p',])
          ->from('ECommBundle:Product', 'p')
          ->innerJoin('p.category', 'ca')
          ->where('ca = :category')
          ->andWhere('p.quantity <> 0')
          ->setParameter('category', $category);

      return $qb;
  }

}
