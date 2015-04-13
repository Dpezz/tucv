<?php

namespace PCV\DemoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;


/**
 * Proyectos
 *
 * @ORM\Table()
 * @ORM\Entity()
 */
class Proyectos  
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
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="cliente", type="string", length=255)
     */
    private $cliente;

    /**
     * @var string
     *
     * @ORM\Column(name="fecha", type="string", length=255)
     */
    private $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=255, nullable=true)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="imagenUrl", type="string", length=255, nullable=true)
     */
    private $imagenUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="link", type="string", length=255, nullable=true)
     */
    private $link;


    /**
     * Set id
     *
     * @param string $id
     * @return Proyectos
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
     * Set title
     *
     * @param string $title
     * @return Proyectos
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
     * Set cliente
     *
     * @param string $cliente
     * @return Proyectos
     */
    public function setCliente($cliente)
    {
        $this->cliente = $cliente;

        return $this;
    }

    /**
     * Get cliente
     *
     * @return string 
     */
    public function getCliente()
    {
        return $this->cliente;
    }

    /**
     * Set fecha
     *
     * @param string $fecha
     * @return Proyectos
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return string 
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Proyectos
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set imagenUrl
     *
     * @param string $imagenUrl
     * @return Proyectos
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
     * Set link
     *
     * @param string $link
     * @return Proyectos
     */
    public function setLink($link)
    {
        $this->link = $link;

        return $this;
    }

    /**
     * Get link
     *
     * @return string 
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Set id_user
     *
     * @param string $idUser
     * @return Proyectos
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
