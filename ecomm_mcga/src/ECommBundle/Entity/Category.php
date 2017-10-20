<?php

namespace ECommBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
* Category
*
* @ORM\Table("category")
* @ORM\Entity(repositoryClass="ECommBundle\Repository\CategoryRepository")
* @UniqueEntity(fields="name", message="name already taken")
*/
class Category
{
  /**
  * @var integer
  *
  * @ORM\Column(name="id", type="integer")
  * @ORM\Id
  * @ORM\GeneratedValue(strategy="AUTO")
  */
  private $id;


  /**
  * @var string
  * @Assert\Regex(
  *     pattern     = "/^[a-z]+$/i",
  *     htmlPattern = "^[a-zA-Z]+$"
  * )
  * @ORM\Column(name="name", type="string", length=255)
  */
  private $name;

  /**
  * @ORM\OneToMany(targetEntity="Product", mappedBy="category")
  */
  private $products;

  public function __construct()
  {
    $this->products = new ArrayCollection();
  }

  public function __toString()
  {
    return $this->getName();
  }

  /**
  * Get id
  *
  * @return integer
  */
  public function getId()
  {
    return $this->id;
  }

  /**
  * Set name
  *
  * @param string $name
  * @return Category
  */
  public function setName($name)
  {
    $this->name = $name;

    return $this;
  }

  /**
  * Get name
  *
  * @return string
  */
  public function getName()
  {
    return $this->name;
  }

  /**
  * Add products
  *
  * @param \ECommBundle\Entity\Product $products
  * @return Category
  */
  public function addProduct(\ECommBundle\Entity\Product $products)
  {
    $this->products[] = $products;

    return $this;
  }

  /**
  * Remove products
  *
  * @param \ECommBundle\Entity\Product $products
  */
  public function removeProduct(\ECommBundle\Entity\Product $products)
  {
    $this->products->removeElement($products);
  }

  /**
  * Get products
  *
  * @return \Doctrine\Common\Collections\Collection
  */
  public function getProducts()
  {
    return $this->products;
  }
}
