<?php

namespace ECommBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;

/**
* Product
*
* @ORM\Table("product")
* @ORM\Entity(repositoryClass="ECommBundle\Repository\ProductRepository")
*/
class Product
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
  *
  * @ORM\Column(name="nom", type="string", length=125)
  */
  private $nom;

  /**
  * @var string
  *
  * @ORM\Column(name="description", type="text")
  */
  private $description;

  /**
  * @var float
  *
  * @ORM\Column(name="prix", type="float")
  */
  private $prix;

  /**
  * @var integer
  *
  * @ORM\Column(name="quantity", type="integer", nullable=false)
  * @Assert\Range(
  *      min = 0,
  *      minMessage = "Quantité min {{ limit }}",
  *      max = 2147483647,
  *      maxMessage = "Quantité max : {{ limit }}"
  * )
  */
  private $quantity;

  /**
  * @ORM\ManyToOne(targetEntity="Category", inversedBy="products")
  * @ORM\JoinColumn(name="category_id", referencedColumnName="id")
  */
  private $category;

  public function __construct()
  {
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
  * Set nom
  *
  * @param string $nom
  * @return Product
  */
  public function setNom($nom)
  {
    $this->nom = $nom;

    return $this;
  }

  /**
  * Get nom
  *
  * @return string
  */
  public function getNom()
  {
    return $this->nom;
  }

  /**
  * Set description
  *
  * @param string $description
  * @return Product
  */
  public function setDescription($description)
  {
    $this->description = $description;

    return $this;
  }

  /**
  * Get description
  *
  * @return string
  */
  public function getDescription()
  {
    return $this->description;
  }

  /**
  * Set prix
  *
  * @param float $prix
  * @return Product
  */
  public function setPrix($prix)
  {
    $this->prix = $prix;

    return $this;
  }

  /**
  * Get prix
  *
  * @return float
  */
  public function getPrix()
  {
    return $this->prix;
  }

  /**
  * Set category
  *
  * @param \ECommBundle\Entity\Category $category
  * @return Product
  */
  public function setCategory(\ECommBundle\Entity\Category $category = null)
  {
    $this->category = $category;

    return $this;
  }

  /**
  * Get category
  *
  * @return \ECommBundle\Entity\Category
  */
  public function getCategory()
  {
    return $this->category;
  }
  /**
  * Set quantity
  *
  * @param integer $quantity
  * @return Product
  */
  public function setQuantity($quantity)
  {
    $this->quantity = $quantity;

    return $this;
  }

  /**
  * Get quantity
  *
  * @return integer
  */
  public function getQuantity()
  {
    return $this->quantity;
  }

  /**
  * @ORM\Column(type="string", nullable=true)
  *
  * @Assert\NotBlank(message="Please, upload the product image as jpeg or png file.")
  * @Assert\File(mimeTypes={ "image/jpeg","image/png","image/jpg" })
  */
  private $imagefile;

  public function getImagefile()
  {
    return $this->imagefile;
  }

  public function setImagefile($imagefile)
  {
    $this->imagefile = $imagefile;

    return $this;
  }


}
