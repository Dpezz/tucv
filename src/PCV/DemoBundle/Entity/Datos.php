<?php

namespace PCV\DemoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;


/**
 * Datos
 *
 * @ORM\Table()
 * @ORM\Entity()
 */
class Datos 
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="string", length=30)
     * @ORM\Id
     */
    private $id;

    /**
     * @var datetime
     *
     * @ORM\Column(name="birthday", type="datetime", nullable=true)
     */
    private $birthday;

    /**
     * @var string
     *
     * @ORM\Column(name="sex", type="string", length=255, nullable=true)
     */
    private $sex;

    /**
     * @var string
     *
     * @ORM\Column(name="region", type="string", length=255, nullable=true)
     */
    private $region;
    
    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=255, nullable=true)
     */
    private $city;
    
    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=255, nullable=true)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="nationality", type="string", length=255, nullable=true)
     */
    private $nationality;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=255, nullable=true)
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=255, nullable=true)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="profesion", type="string", length=255, nullable=true)
     */
    private $profesion;

    /**
     * @var string
     *
     * @ORM\Column(name="profesionsecond", type="string", length=255, nullable=true)
     */
    private $profesionsecond;

    /**
     * @var string
     *
     * @ORM\Column(name="categoriaProfesion", type="string", length=255, nullable=true)
     */
    private $categoriaProfesion;

   /**
     * @var string
     *
     * @ORM\Column(name="level", type="string", length=255, nullable=true)
     */
    private $level;

    /**
     * @var string
     *
     * @ORM\Column(name="actual", type="string", length=255, nullable=true)
     */
    private $actual;

    /**
     * @var string
     *
     * @ORM\Column(name="bio", type="string", length=255, nullable=true)
     */
    private $bio;

    /**
     * @var string
     *
     * @ORM\Column(name="redes", type="string", length=255, nullable=true)
     */
    private $redes;

    /**
     * @var string
     *
     * @ORM\Column(name="habilidades", type="string", length=255, nullable=true)
     */
    private $habilidades;

    /**
     * @var string
     *
     * @ORM\Column(name="videoUrl", type="string", length=255, nullable=true)
     */
    private $videoUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="licencia", type="string", length=255, nullable=true)
     */
    private $licencia;

    /**
     * @var boolean
     *
     * @ORM\Column(name="disponible", type="boolean", nullable=true)
     */
    private $disponible;

    
    /**
     * Set id
     *
     * @param string $id
     * @return Datos
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
     * Set birthday
     *
     * @param \DateTime $birthday
     * @return Datos
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;

        return $this;
    }

    /**
     * Get birthday
     *
     * @return \DateTime 
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * Set sex
     *
     * @param string $sex
     * @return Datos
     */
    public function setSex($sex)
    {
        $this->sex = $sex;

        return $this;
    }

    /**
     * Get sex
     *
     * @return string 
     */
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * Set region
     *
     * @param string $region
     * @return Datos
     */
    public function setRegion($region)
    {
        $this->region = $region;

        return $this;
    }

    /**
     * Get region
     *
     * @return string 
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Set city
     *
     * @param string $city
     * @return Datos
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
     * Set address
     *
     * @param string $address
     * @return Datos
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
     * Set nationality
     *
     * @param string $nationality
     * @return Datos
     */
    public function setNationality($nationality)
    {
        $this->nationality = $nationality;

        return $this;
    }

    /**
     * Get nationality
     *
     * @return string 
     */
    public function getNationality()
    {
        return $this->nationality;
    }

    /**
     * Set phone
     *
     * @param string $phone
     * @return Datos
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
     * Set status
     *
     * @param string $status
     * @return Datos
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set profesion
     *
     * @param string $profesion
     * @return Datos
     */
    public function setProfesion($profesion)
    {
        $this->profesion = $profesion;

        return $this;
    }

    /**
     * Get profesion
     *
     * @return string 
     */
    public function getProfesion()
    {
        return $this->profesion;
    }

    /**
     * Set profesionsecond
     *
     * @param string $profesionsecond
     * @return Datos
     */
    public function setProfesionsecond($profesionsecond)
    {
        $this->profesionsecond = $profesionsecond;

        return $this;
    }

    /**
     * Get profesionsecond
     *
     * @return string 
     */
    public function getProfesionsecond()
    {
        return $this->profesionsecond;
    }

    /**
     * Set categoriaProfesion
     *
     * @param string $categoriaProfesion
     * @return Datos
     */
    public function setCategoriaProfesion($categoriaProfesion)
    {
        $this->categoriaProfesion = $categoriaProfesion;

        return $this;
    }

    /**
     * Get categoriaProfesion
     *
     * @return string 
     */
    public function getCategoriaProfesion()
    {
        return $this->categoriaProfesion;
    }

    /**
     * Set level
     *
     * @param string $level
     * @return Datos
     */
    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Get level
     *
     * @return string 
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Set actual
     *
     * @param string $actual
     * @return Datos
     */
    public function setActual($actual)
    {
        $this->actual = $actual;

        return $this;
    }

    /**
     * Get actual
     *
     * @return string 
     */
    public function getActual()
    {
        return $this->actual;
    }

    /**
     * Set bio
     *
     * @param string $bio
     * @return Datos
     */
    public function setBio($bio)
    {
        $this->bio = $bio;

        return $this;
    }

    /**
     * Get bio
     *
     * @return string 
     */
    public function getBio()
    {
        return $this->bio;
    }

    /**
     * Set redes
     *
     * @param string $redes
     * @return Datos
     */
    public function setRedes($redes)
    {
        $this->redes = $redes;

        return $this;
    }

    /**
     * Get redes
     *
     * @return string 
     */
    public function getRedes()
    {
        return $this->redes;
    }

    /**
     * Set habilidades
     *
     * @param string $habilidades
     * @return Datos
     */
    public function setHabilidades($habilidades)
    {
        $this->habilidades = $habilidades;

        return $this;
    }

    /**
     * Get habilidades
     *
     * @return string 
     */
    public function getHabilidades()
    {
        return $this->habilidades;
    }

    /**
     * Set imagenUrl
     *
     * @param string $imagenUrl
     * @return Datos
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

    /**
     * Set videoUrl
     *
     * @param string $videoUrl
     * @return Datos
     */
    public function setVideoUrl($videoUrl)
    {
        $this->videoUrl = $videoUrl;

        return $this;
    }

    /**
     * Get videoUrl
     *
     * @return string 
     */
    public function getVideoUrl()
    {
        return $this->videoUrl;
    }

    /**
     * Set licencia
     *
     * @param string $licencia
     * @return Datos
     */
    public function setLicencia($licencia)
    {
        $this->licencia = $licencia;

        return $this;
    }

    /**
     * Get licencia
     *
     * @return string 
     */
    public function getLicencia()
    {
        return $this->licencia;
    }

    /**
     * Set disponible
     *
     * @param boolean $disponible
     * @return Datos
     */
    public function setDisponible($disponible)
    {
        $this->disponible = $disponible;

        return $this;
    }

    /**
     * Get disponible
     *
     * @return boolean 
     */
    public function getDisponible()
    {
        return $this->disponible;
    }

}
