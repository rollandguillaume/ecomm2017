<?php

namespace ECommBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;

/**
* UserAddress
*
* @ORM\Table("useraddress")
* @ORM\Entity(repositoryClass="ECommBundle\Repository\UserAddressRepository")
*/
class UserAddress
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
  * @ORM\Column(name="name", type="string", length=125)
  */
  private $name;

  /**
  * @var string
  *
  * @ORM\Column(name="lastname", type="string", length=125)
  */
  private $lastname;

  /**
  *@ORM\Column(name="email", type="text", length=125)
  *@Assert\NotBlank()
  *@Assert\Email()
  */
  protected $email;

  /**
  *
  * @ORM\Column(name="phone", type="string", length=125)
  */
  private $phone;

  /**
  * @ORM\Column(name="address", type="text", length=125)
  */
  protected $address;

  /**
  * @ORM\Column(name="address2", type="text", length=125)
  */
  protected $address2;



  /**
  * @ORM\Column(name="zip", type="integer", length=125)
  */
  protected $zip;

  /**
  * @ORM\Column(name="city", type="text", length=125)
  */
  protected $city;


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
  *
  * @return UserAddress
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
  * Set lastname
  *
  * @param string $lastname
  *
  * @return UserAddress
  */
  public function setLastname($lastname)
  {
    $this->lastname = $lastname;

    return $this;
  }

  /**
  * Get lastname
  *
  * @return string
  */
  public function getLastname()
  {
    return $this->lastname;
  }

  /**
  * Set email
  *
  * @param string $email
  *
  * @return UserAddress
  */
  public function setEmail($email)
  {
    $this->email = $email;

    return $this;
  }

  /**
  * Get email
  *
  * @return string
  */
  public function getEmail()
  {
    return $this->email;
  }

  /**
  * Set phone
  *
  * @param string $phone
  *
  * @return UserAddress
  */
  public function setPhone($phone)
  {
    $this->phone = $phone;

    return $this;
  }

  /**
  * Get phone
  *
  * @return string
  */
  public function getPhone()
  {
    return $this->phone;
  }

  /**
  * Set address
  *
  * @param string $address
  *
  * @return UserAddress
  */
  public function setAddress($address)
  {
    $this->address = $address;

    return $this;
  }

  /**
  * Get address
  *
  * @return string
  */
  public function getAddress()
  {
    return $this->address;
  }

  /**
  * Set address2
  *
  * @param string $address2
  *
  * @return UserAddress
  */
  public function setAddress2($address2)
  {
    $this->address2 = $address2;

    return $this;
  }

  /**
  * Get address2
  *
  * @return string
  */
  public function getAddress2()
  {
    return $this->address2;
  }

  /**
  * Set zip
  *
  * @param integer $zip
  *
  * @return UserAddress
  */
  public function setZip($zip)
  {
    $this->zip = $zip;

    return $this;
  }

  /**
  * Get zip
  *
  * @return integer
  */
  public function getZip()
  {
    return $this->zip;
  }

  /**
  * Set city
  *
  * @param string $city
  *
  * @return UserAddress
  */
  public function setCity($city)
  {
    $this->city = $city;

    return $this;
  }

  /**
  * Get city
  *
  * @return string
  */
  public function getCity()
  {
    return $this->city;
  }
}
