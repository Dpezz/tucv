<?php

namespace PCV\DemoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;


/**
 * Conocimientos
 *
 * @ORM\Table()
 * @ORM\Entity()
 */
class Conocimientos  
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
     * @ORM\Column(name="id_user", type="string", length=30)
     */
    private $id_user;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="value", type="integer", nullable=true)
     */
    private $value;


    /**
     * Set id
     *
     * @param string $id
     * @return Conocimientos
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
     * Set name
     *
     * @param string $name
     * @return Conocimientos
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
     * Set value
     *
     * @param integer $value
     * @return Conocimientos
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return integer 
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set id_user
     *
     * @param string $idUser
     * @return Conocimientos
     */
    public function setIdUser($idUser)
    {
        $this->id_user = $idUser;

        return $this;
    }

    /**
     * Get id_user
     *
     * @return string 
     */
    public function getIdUser()
    {
        return $this->id_user;
    }
}
