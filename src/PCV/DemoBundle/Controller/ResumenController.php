<?php

namespace PCV\DemoBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

use PCV\DemoBundle\Entity\User;

class ResumenController extends Controller
{
    /**
     * @Route("/private")
     * @Route("/private/", name="_private_resume_profile")
     * @Template()
     */
    public function resumenAction(Request $request)
    {
        $id = $this->getUser() -> getId();
        //creamos una cookie con el name
        $request->getSession()->set('name', $id);

        //Cargar User
        $user = $this->getDoctrine()->getRepository('PCVDemoBundle:User')->find($id);

        //Cargar Datos
        $datos = $this->getDoctrine()->getRepository('PCVDemoBundle:Datos')->find($id);

        //Cargar Proyectos
        $proyectos = $this->getDoctrine()->getRepository('PCVDemoBundle:Proyectos')->findBy(array('id_user'=>$id));

        //Cargar Premios
        $premios = $this->getDoctrine()->getRepository('PCVDemoBundle:Premios')->findBy(array('id_user'=>$id));

        //Cargar Idiomas
        $idiomas = $this->getDoctrine()->getRepository('PCVDemoBundle:Idiomas')->findBy(array('id_user'=>$id));

        //Cargar Experiencia
        $experiencias = $this->getDoctrine()->getRepository('PCVDemoBundle:Experiencia')->findBy(array('id_user'=>$id));

        //Cargar Educacion
        $educacion = $this->getDoctrine()->getRepository('PCVDemoBundle:Educacion')->findBy(array('id_user'=>$id));

        //Cargar Conocimientos
        $conocimientos = $this->getDoctrine()->getRepository('PCVDemoBundle:Conocimientos')->findBy(array('id_user'=>$id));

        //Cargar Certificados
        $Certificados = $this->getDoctrine()->getRepository('PCVDemoBundle:Certificaciones')->findBy(array('id_user'=>$id));

        return array(
            'datosU' => $user,
            'datosD' => $datos,
            'datosP' => $proyectos,
            'datosPr' => $premios,
            'datosI' => $idiomas,
            'datosE' => $experiencias,
            'datosEd' => $educacion,
            'datosC' => $conocimientos,
            'datosCe' => $Certificados,
            );
    }

     /**
     * @Route("/{url}", name="_resume_public")
     * @Route("/private/{url}", name="_private_resume_public")
     * @Template()
     */
    public function resumenPublicAction($url,Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->getDoctrine()->getRepository('PCVDemoBundle:User')->findOneBy(array('resumenUrl'=>$url));
        $datos = $proyectos = $premios = $idiomas = $experiencias = $educacion = $conocimientos = $Certificados = null;

         if( $user ){

            $id = $user->getId();

            //Cargar Datos
            $datos = $this->getDoctrine()->getRepository('PCVDemoBundle:Datos')->find($id);

            //Cargar Proyectos
            $proyectos = $this->getDoctrine()->getRepository('PCVDemoBundle:Proyectos')->findBy(array('id_user'=>$id));

            //Cargar Premios
            $premios = $this->getDoctrine()->getRepository('PCVDemoBundle:Premios')->findBy(array('id_user'=>$id));

            //Cargar Idiomas
            $idiomas = $this->getDoctrine()->getRepository('PCVDemoBundle:Idiomas')->findBy(array('id_user'=>$id));

            //Cargar Experiencia
            $experiencias = $this->getDoctrine()->getRepository('PCVDemoBundle:Experiencia')->findBy(array('id_user'=>$id));

            //Cargar Educacion
            $educacion = $this->getDoctrine()->getRepository('PCVDemoBundle:Educacion')->findBy(array('id_user'=>$id));

            //Cargar Conocimientos
            $conocimientos = $this->getDoctrine()->getRepository('PCVDemoBundle:Conocimientos')->findBy(array('id_user'=>$id));

            //Cargar Certificados
            $Certificados = $this->getDoctrine()->getRepository('PCVDemoBundle:Certificaciones')->findBy(array('id_user'=>$id));

            if($request->getSession()->get('name'))
            //$nameSession = $this->get('security.context')->getToken()->getUser();
            //if($nameSession != 'anon.')
            {
                $id = $this->getUser() -> getId();
                if($id != $user->getId())
                {
                    $user->setVisitas($user->getVisitas() +1);
                    $em->flush();
                }
            }else{
                $user->setVisitas($user->getVisitas() +1);
                $em->flush();   
            }
        }

        return array(
            'datosU' => $user,
            'datosD' => $datos,
            'datosP' => $proyectos,
            'datosPr' => $premios,
            'datosI' => $idiomas,
            'datosE' => $experiencias,
            'datosEd' => $educacion,
            'datosC' => $conocimientos,
            'datosCe' => $Certificados,
            );
    }

}