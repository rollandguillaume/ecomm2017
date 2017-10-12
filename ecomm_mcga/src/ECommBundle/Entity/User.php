<?php
// src/ECommBundle/Entity/User.php
namespace ECommBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\AdvancedUserInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
* @ORM\Table(name="user")
* @ORM\Entity(repositoryClass="ECommBundle\Repository\UserRepository")
* @UniqueEntity(fields="email", message="Email already taken")
*/
class User implements AdvancedUserInterface, \Serializable
{
  /**
  * @ORM\Column(type="integer")
  * @ORM\Id
  * @ORM\GeneratedValue(strategy="AUTO")
  */
  private $id;

  /**
  * The below length depends on the "algorithm" you use for encoding
  * the password, but this works well with bcrypt.
  *
  * @ORM\Column(type="string", length=64)
  */
  private $password;

  /**
  * @ORM\Column(type="string", length=255, unique=true)
  * @Assert\NotBlank()
  * @Assert\Email()
  */
  private $email;

  /**
  * @ORM\Column(name="is_active", type="boolean")
  */
  private $isActive;

  /**
  * @Assert\NotBlank()
  * @Assert\Length(max=4096)
  */
  private $plainPassword;

  /**
  * @ORM\OneToMany(targetEntity="ECommBundle\Entity\Order", mappedBy="utilisateur")
  * @ORM\JoinColumn(nullable=true)
  */
  private $orders;

  /**
  * @ORM\Column(type="string", nullable=true)
  * @Assert\NotBlank
  */
  private $address=null;

  /**
  * @ORM\Column(type="string", length=255)
  */
  private $firstname;

  /**
  * @ORM\Column(type="string", length=255)
  */
  private $lastname;

  /**
  * @ORM\Column(type="json_array")
  */
  private $roles = array();


  public function __construct()
  {
    $this->isActive = true;
    // may not be needed, see section on salt below
    // $this->salt = md5(uniqid('', true));
  }

  public function getId()
  {
    return $this->id;
  }

  public function getEmail()
  {
    return $this->email;
  }

  public function setEmail($email)
  {
    $this->email = $email;
  }

  public function getUsername()
  {
    return $this->email;
  }

  public function setUsername($username)
  {
    $this->email = $username;
  }

  /**
  * Set firstname
  *
  * @param string $firstname
  * @return User
  */
  public function setFirstname($firstname)
  {
    $this->firstname = $firstname;

    return $this;
  }

  /**
  * Get firstname
  *
  * @return string
  */
  public function getFirstname()
  {
    return $this->firstname;
  }

  /**
  * Set lastname
  *
  * @param string $lastname
  * @return User
  */
  public function setLastName($lastname)
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

  public function getPlainPassword()
  {
    return $this->plainPassword;
  }

  public function setPlainPassword($password)
  {
    $this->plainPassword = $password;
  }


  public function getSalt()
  {
    // you *may* need a real salt depending on your encoder
    // see section on salt below
    return null;
  }

  public function getPassword()
  {
    return $this->password;
  }
  public function setPassword($password)
  {
    $this->password = $password;
  }

  public function eraseCredentials()
  {
  }
  public function isAccountNonExpired()
  {
    return true;
  }

  public function isAccountNonLocked()
  {
    return true;
  }

  public function isCredentialsNonExpired()
  {
    return true;
  }

  public function isEnabled()
  {
    return $this->isActive;
  }

  /** @see \Serializable::serialize() */
  public function serialize()
  {
    return serialize(array(
      $this->id,
      $this->password,
      $this->isActive
      // see section on salt below
      // $this->salt,
    ));
  }

  /** @see \Serializable::unserialize() */
  public function unserialize($serialized)
  {
    list (
      $this->id,
      $this->password,
      $this->isActive
      // see section on salt below
      // $this->salt
      ) = unserialize($serialized);
    }

    public function getRoles()
    {
      $roles = $this->roles;
      $roles[] = 'ROLE_USER';

      return array_unique($roles);
    }

    public function setRoles(array $roles)
    {
      $this->roles = $roles;

      // allows for chaining
      return $this;
    }
    /**
    * Set address
    *
    * @param string $address
    * @return User
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

  }
