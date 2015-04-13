<?php

namespace PCV\DemoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;


/**
 * Certificaciones
 *
 * @ORM\Table()
 * @ORM\Entity()
 */
class Certificaciones
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
     * @ORM\Column(name="startDate", type="string", length=255)
     */
    private $startDate;

    /**
     * @var string
     *
     * @ORM\Column(name="endDate", type="string", length=255)
     */
    private $endDate;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=255)
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=255)
     */
    private $country;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="emisor", type="string", length=255)
     */
    private $emisor;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;


    /**
     * Set id
     *
     * @param string $id
     * @return Certificaciones
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
     * Set startDate
     *
     * @param string $startDate
     * @return Certificaciones
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * Get startDate
     *
     * @return string 
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Set endDate
     *
     * @param string $endDate
     * @return Certificaciones
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * Get endDate
     *
     * @return string 
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Set city
     *
     * @param string $city
     * @return Certificaciones
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

    /**
     * Set country
     *
     * @param string $country
     * @return Certificaciones
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string 
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Certificaciones
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set emisor
     *
     * @param string $emisor
     * @return Certificaciones
     */
    public function setEmisor($emisor)
    {
        $this->emisor = $emisor;

        return $this;
    }

    /**
     * Get emisor
     *
     * @return string 
     */
    public function getEmisor()
    {
        return $this->emisor;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Certificaciones
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
     * Set id_user
     *
     * @param string $idUser
     * @return Certificaciones
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
