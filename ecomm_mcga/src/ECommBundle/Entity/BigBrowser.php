<?php

namespace ECommBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BigBrowser
 *
 * @ORM\Table("bigbrowser")
 * @ORM\Entity(repositoryClass="ECommBundle\Repository\BigBrowserRepository")
 */
class BigBrowser
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
     * @ORM\ManyToOne(targetEntity="ECommBundle\Entity\User", inversedBy="bigbrowser")
     * @ORM\JoinColumn(nullable=true)
     */
    private $utilisateur;

    /**
     * @var boolean
     *
     * @ORM\Column(name="authentification", type="boolean")
     */
    private $authentification;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var array
     *
     * @ORM\Column(name="ip", type="string")
     *
     */
    private $ip;


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
     * Set authentification
     *
     * @param boolean $authentification
     * @return BigBrowser
     */
    public function setAuthentification($authentification)
    {
        $this->authentification = $authentification;

        return $this;
    }

    /**
     * Get authentification
     *
     * @return boolean
     */
    public function getAuthentification()
    {
        return $this->authentification;
    }
    /**
     * Set ip
     *
     * @param string $ip
     * @return BigBrowser
     */
    public function setIp($ip)
    {
        $this->ip = $ip;

        return $this;
    }

    /**
     * Get ip
     *
     * @return string
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return BigBrowser
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
     * Set utilisateur
     *
     * @param \ECommBundle\Entity\User $utilisateur
     * @return BigBrowser
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
