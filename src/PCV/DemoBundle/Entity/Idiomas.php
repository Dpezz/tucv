<?php

namespace PCV\DemoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;


/**
 * Idiomas
 *
 * @ORM\Table()
 * @ORM\Entity()
 */
class Idiomas  
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
     * @ORM\Column(name="value", type="integer")
     */
    private $value;

    /**
     * @var boolean
     *
     * @ORM\Column(name="nativo", type="boolean", nullable=true)
     */
    private $nativo;


    /**
     * Set id
     *
     * @param string $id
     * @return Idiomas
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
     * @return Idiomas
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
     * @return Idiomas
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
     * Set nativo
     *
     * @param boolean $nativo
     * @return Idiomas
     */
    public function setNativo($nativo)
    {
        $this->nativo = $nativo;

        return $this;
    }

    /**
     * Get nativo
     *
     * @return boolean 
     */
    public function getNativo()
    {
        return $this->nativo;
    }

    /**
     * Set id_user
     *
     * @param string $idUser
     * @return Idiomas
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
