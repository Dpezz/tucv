<?php
namespace PCV\DemoBundle\Controller\minController;

use PCV\DemoBundle\Entity\Experiencia;
use PCV\DemoBundle\Entity\Educacion;
use PCV\DemoBundle\Entity\Proyectos;
use PCV\DemoBundle\Entity\Premios;
use PCV\DemoBundle\Entity\Certificaciones;
use PCV\DemoBundle\Controller\minController\imageController;


class orderController
{
	
	public function newExperience($id)
	{
        $experiencia = new Experiencia();

        $experiencia->setIdUser($id);
        $experiencia->setStartDate($_POST['_desdeMes'].','.$_POST['_desdeAño']);
        $experiencia->setEndDate($_POST['_hastaMes'].','.$_POST['_hastaAño']);
        $experiencia->setCity($_POST['_city']);
        $experiencia->setCountry($_POST['_country']);
        $experiencia->setCompany($_POST['_company']);
        $experiencia->setRol($_POST['_rol']);
        $experiencia->setDescription($_POST['_description']);

        return $experiencia;
    }

    public function newEducation($id)
    {
        $educacion = new Educacion();

        $educacion->setIdUser($id);
        $educacion->setFecha($_POST['_desdeMes'].','.$_POST['_desdeAño'].'-'.$_POST['_hastaMes'].','.$_POST['_hastaAño']);
        $educacion->setCity($_POST['_city']);
        $educacion->setCountry($_POST['_country']);
        $educacion->setSubject($_POST['_subject']);
        $educacion->setSchool($_POST['_school']);
        $educacion->setCourse($_POST['_course']);
        $educacion->setDescription($_POST['_description']);

        return $educacion;
    }


    public function newPremio($id)
    {
    	$premio = new Premios();

        $premio->setIdUser($id);
        $premio->setDate($_POST['_mes'].','.$_POST['_año']);
        $premio->setCity($_POST['_city']);
        $premio->setCountry($_POST['_country']);
        $premio->setEmisor($_POST['_emisor']);
        $premio->setTitle($_POST['_title']);
        $premio->setRol($_POST['_rol']);
        $premio->setDescription($_POST['_description']);

        return $premio;
    }

    public function newCertificacion($id)
    {
    	$certificado = new Certificaciones();

        $certificado->setIdUser($id);
        $certificado->setStartDate($_POST['_mes'].','.$_POST['_año']);
        $certificado->setEndDate($_POST['_mesFin'].','.$_POST['_añoFin']);
        $certificado->setCity($_POST['_city']);
        $certificado->setCountry($_POST['_country']);
        $certificado->setEmisor($_POST['_emisor']);
        $certificado->setTitle($_POST['_title']);
        $certificado->setDescription($_POST['_description']);
        
        return $certificado;
    }

    public function newProyecto($id)
    {
        $proyecto = new Proyectos();

        $proyecto-> setIdUser($id)
        ->setTitle($_POST['_title'])
        ->setCliente($_POST['_cliente'])
        ->setFecha($_POST['_mes'].','.$_POST['_año'])
        ->setDescripcion($_POST['_description']);
       
        if(! empty($_POST['_dataImagenProyecto']))
        {
            $src = $_POST['_dataImagenProyecto'];
            $funcion = new imageController();
            $imagenUrl = $funcion->imagenPortafolioControl($src,$id);
            $proyecto->setImagenUrl($imagenUrl);
        }
        if( ! is_null($_POST['_link'])){
            $proyecto->setLink($_POST['_link']);
        }
        return $proyecto;
    }
    

}