<?php

namespace ECommBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Order
 *
 * @ORM\Table("orders")
 * @ORM\Entity(repositoryClass="ECommeBundle\Repository\OrderRepository")
 */
class Order
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
     * @ORM\ManyToOne(targetEntity="ECommBundle\Entity\User", inversedBy="orders")
     * @ORM\JoinColumn(nullable=true)
     */
    private $utilisateur;

    /**
     * @var boolean
     *
     * @ORM\Column(name="valider", type="boolean")
     */
    private $valider;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var array
     *
     * @ORM\Column(name="commande", type="array")
     */
    private $commande;


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
     * Set valider
     *
     * @param boolean $valider
     * @return Order
     */
    public function setValider($valider)
    {
        $this->valider = $valider;

        return $this;
    }

    /**
     * Get valider
     *
     * @return boolean
     */
    public function getValider()
    {
        return $this->valider;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Order
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set commande
     *
     * @param array $commande
     * @return Order
     */
    public function setCommande($commande)
    {
        $this->commande = $commande;

        return $this;
    }

    /**
     * Get commande
     *
     * @return array
     */
    public function getCommande()
    {
        return $this->commande;
    }

    /**
     * Set utilisateur
     *
     * @param \ECommBundle\Entity\User $utilisateur
     * @return Order
     */
    public function setUtilisateur(\ECommBundle\Entity\User $utilisateur = null)
    {
        $this->utilisateur = $utilisateur;

        return $this;
    }

    /**
     * Get utilisateur
     *
     * @return \ECommBundle\Entity\User
     */
    public function getUtilisateur()
    {
        return $this->utilisateur;
    }
}
