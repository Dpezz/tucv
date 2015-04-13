<?php

namespace PCV\DemoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;


/**
 * User
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="PCV\DemoBundle\Entity\UserRepository")
 */
class User implements UserInterface, \Serializable
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="string", length=30)
     * @ORM\Id
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=255)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="plastname", type="string", length=255)
     */
    private $plastname;

    /**
     * @var string
     *
     * @ORM\Column(name="mlastname", type="string", length=255)
     */
    private $mlastname;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="resumenUrl", type="string", length=255, nullable=true)
     */
    private $resumenUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="role", type="string", length=255)
     */
    private $role;

    /**
     * @var boolean
     *
     * @ORM\Column(name="isActive", type="boolean")
     */
    private $isActive;

     /**
     * @var datetime
     *
     * @ORM\Column(name="createAt", type="datetime")
     */
    private $createAt;

    /**
     * @var integer
     *
     * @ORM\Column(name="visitas", type="integer", nullable=true)
     */
    private $visitas;


    /**
     * @var string
     *
     * @ORM\Column(name="imagenUrl", type="string", length=255, nullable=true)
     */
    private $imagenUrl;


    /**
     * Set id
     *
     * @param string $id
     * @return User
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id
     *
     * @return string 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set username
     *
     * @param string $username
     * @return User
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     * @inheritDoc
     */
    public function getUsername()
    {
        return $this->username;
    }


    /**
     * Set password
     *
     * @param string $password
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = password_hash( $password, PASSWORD_BCRYPT);
        return $this;
    }

    /**
     * Get password
     * @inheritDoc
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }


        /**
     * Set plastname
     *
     * @param string $plastname
     * @return User
     */
    public function setPlastname($plastname)
    {
        $this->plastname = $plastname;

        return $this;
    }

    /**
     * Get plastname
     *
     * @return string 
     */
    public function getPlastname()
    {
        return $this->plastname;
    }

    /**
     * Set mlastname
     *
     * @param string $mlastname
     * @return User
     */
    public function setMlastname($mlastname)
    {
        $this->mlastname = $mlastname;

        return $this;
    }

    /**
     * Get mlastname
     *
     * @return string 
     */
    public function getMlastname()
    {
        return $this->mlastname;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return User
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
     * Set name
     *
     * @param string $name
     * @return User
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
     * Set resumenUrl
     *
     * @param string $resumenUrl
     * @return User
     */
    public function setResumenUrl($resumenUrl)
    {
        $this->resumenUrl = $resumenUrl;

        return $this;
    }

    /**
     * Get resumenUrl
     *
     * @return string 
     */
    public function getResumenUrl()
    {
        return $this->resumenUrl;
    }

    /**
     * Set visitas
     *
     * @param integer $visitas
     * @return User
     */
    public function setVisitas($visitas)
    {
        $this->visitas = $visitas;

        return $this;
    }

    /**
     * Get visitas
     *
     * @return integer 
     */
    public function getVisitas()
    {
        return $this->visitas;
    }

    /**
     * Set isActive
     *
     * @param boolean $isActive
     * @return User
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * Get isActive
     *
     * @return boolean 
     */
    public function getIsActive()
    {
        return $this->isActive;
    }
    

    /**
     * Set createAt
     *
     * @param \DateTime $createAt
     * @return User
     */
    public function setCreateAt($createAt)
    {
        $this->createAt = $createAt;

        return $this;
    }

    /**
     * Get createAt
     *
     * @return \DateTime 
     */
    public function getCreateAt()
    {
        return $this->createAt;
    }


    /**
     * Set role
     *
     * @param string $role
     * @return User
     */
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get role
     *
     * @return string 
     */
    public function getRole()
    {
        return $this->role;
    }



    /**
     * @inheritDoc
     */
    public function getSalt()
    {
        // you *may* need a real salt depending on your encoder
        // see section on salt below
        return null;
    }

    /**
     * @inheritDoc
     */
    public function getRoles()
    {
        return array('ROLE_USER');
    }

    /**
     * @inheritDoc
     */
    public function eraseCredentials()
    {
    }

    /**
     * @see \Serializable::serialize()
     */
    public function serialize()
    {
        return serialize(array(
            $this->id,
            $this->username,
            $this->password,
            // see section on salt below
            // $this->salt,
        ));
    }

    /**
     * @see \Serializable::unserialize()
     */
    public function unserialize($serialized)
    {
        list (
            $this->id,
            $this->username,
            $this->password,
            // see section on salt below
            // $this->salt
        ) = unserialize($serialized);
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


    /**
     * Set imagenUrl
     *
     * @param string $imagenUrl
     * @return User
     */
    public function setImagenUrl($imagenUrl)
    {
        $this->imagenUrl = $imagenUrl;

        return $this;
    }

    /**
     * Get imagenUrl
     *
     * @return string 
     */
    public function getImagenUrl()
    {
        return $this->imagenUrl;
    }
}
