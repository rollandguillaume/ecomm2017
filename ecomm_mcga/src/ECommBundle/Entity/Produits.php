<?php

namespace ECommBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;

/**
* Produits
*
* @ORM\Table("produits")
* @ORM\Entity(repositoryClass="ECommBundle\Repository\ProduitsRepository")
*/
class Produits
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
  *      minMessage = "Must be at least {{ limit }}",
  * )
  */
  private $quantity;

  /**
  * @ORM\OneToMany(targetEntity="ECommBundle\Entity\Media", cascade={"persist", "remove"}, mappedBy="produit")
  * @Assert\Valid()
  */
  private $medias;

  /**
  * @ORM\ManyToOne(targetEntity="Category", inversedBy="products")
  * @ORM\JoinColumn(name="category_id", referencedColumnName="id", onDelete="CASCADE")
  **/
  private $category;

  public function __construct()
  {
    $this->medias = new ArrayCollection();
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
  * @return Produits
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
  * @return Produits
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
  * @return Produits
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
  * Add media
  *
  * @param Media $media
  *
  * @return Produits
  */
  public function addMedias(Media $media)
  {
    $this->medias[] = $media;

    // On lie l'annonce à la candidature
    $media->setProduit($this);

    return $this;
  }

  /**
  * Remove medias
  *
  * @param Media $media
  */
  public function removeMedias(Media $media)
  {
    $this->medias->removeElement($media);

    // Et si notre relation était facultative (nullable=true, ce qui n'est pas notre cas ici attention) :
    // $media->setAdvert(null);
  }

  /**
  * Get media
  *
  * @return ArrayCollection
  */
  public function getMedias()
  {
    return $this->medias;
  }

  /**
  * Set category
  *
  * @param \ECommBundle\Entity\Category $category
  * @return Produits
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
     * @return Produits
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

}
