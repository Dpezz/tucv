<?php

namespace PCV\DemoBundle\Controller;

// these import the "@Route" and "@Template" annotations
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;

use PCV\DemoBundle\Entity\User;
use PCV\DemoBundle\Entity\Datos;
use PCV\DemoBundle\Entity\Educacion;
use PCV\DemoBundle\Entity\Experiencia;
use PCV\DemoBundle\Entity\Certificaciones;
use PCV\DemoBundle\Entity\Premios;
use PCV\DemoBundle\Entity\Proyectos;
use PCV\DemoBundle\Entity\Idiomas;
use PCV\DemoBundle\Entity\Conocimientos;


class HomeController extends Controller
{
    /**
    * @Route("/")    
    * @Route("/inicio", name="_demo_login")
    * @Template()
    */
    public function homeAction(Request $request){
        if($request->getSession()->get('name')){
            return $this->redirect($this->generateUrl('_private_resume_profile'));
        }

        if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
            $error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
        } else {
            $error = $request->getSession()->get(SecurityContext::AUTHENTICATION_ERROR);
        }
        return array(
            'last_username' => $request->getSession()->get(SecurityContext::LAST_USERNAME),
            'error'         => $error
        );
    }


    /**
    * @Route("/message", name="_demo_message")
    * @Template()
    */
    public function messageAction(Request $request){
        return array();
    }

    /**
    * @Route("/create_user")
    * @Method("POST")
    */
    public function createUser(Request $request){
        $data = json_decode($request->getContent(), true);
        $request->request->replace($data);
        $email = trim($request->get('email'));

        $em = $this->getDoctrine()->getManager();
        if(!$user = $em->getRepository('PCVDemoBundle:User')->findByEmail($email)){
            try{
                $email = trim($request->get('email'));
                $username = ucwords(strtolower(trim($request->get('name'))));
                $plastname = ucwords(strtolower(trim($request->get('plast'))));
                $mlastname = ucwords(strtolower(trim($request->get('mlast'))));
                $email = trim($request->get('email'));
                $password = $request->get('password');

                $user = new User();
                $user->setId($this->createId());

                $user->setUsername($username);
                $user->setPlastname($plastname);
                $user->setMlastname($mlastname);
                $user->setName($username.' '.$plastname.' '.$mlastname);
                $user->setEmail($email);
                $user->setPassword($password);

                $user->setRole("usuario");
                $user->setCreateAt(new \DateTime("now"));
                $user->setVisitas(0);
                $user->setIsActive(1);
                
                //verificar disponibilidad de name
                $url = $this->findUrl($username,$plastname,$mlastname);
                $user->setResumenUrl($url);

                $em = $this->getDoctrine()->getManager();
                $em->persist($user);
                $em->flush();
                
                //enviar mensaje de registro
                $this->sendMessage($username.' '.$plastname.' '.$mlastname, $email);

                // Poner el nombre del firewall de tu aplicación  
                $firewall = 'demo_secured_area';  
          
                //puedes sacar así los roles del user  
                $roles = $user->getRoles();  
          
                // Finalmente logueamos al usuario  
                $token = new UsernamePasswordToken($user, null, $firewall, $roles); 

                $this->get('security.context')->setToken($token);  
                $session = $this->get('session');
                $session->set('_security_'.$firewall,serialize($token));

                return new Response(1);
            } catch (Exception $e) {
            }
        }
        return new Response(0);
    }


    /**
     * @Route("/private/login_check", name="_security_check")
     */
    public function securityCheckAction()
    {
        // The security layer will intercept this request
    }

    /**
     * @Route("/private/logout", name="_demo_logout")
     */
    public function logoutAction()
    {
        // The security layer will intercept this request
    }

    /**
     * @Route("/find/{email}")
     * @Method("GET")
     */
    public function findEmail($email){   
        //$email = $request->get('email');
        $em = $this->getDoctrine()->getManager();
        if (!$user = $em->getRepository('PCVDemoBundle:User')->findByEmail($email)) {
            return new Response(0);
        }else{
            return new Response(1);
        }
    }

    private function findUrl($username,$plastname,$mlastname){
        $name = $username.' '.$plastname.' '.$mlastname;
        
        $uname = str_replace(' ', '', $username);
        $uplast = str_replace(' ', '', $plastname);
        $umlast = str_replace(' ', '', $mlastname);

        $url = strtolower($uname).'.'.strtolower($uplast). '.'.strtolower($umlast);

        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('PCVDemoBundle:User')->findByName($name);

        if (!$user){
            //throw $this->createNotFoundException('No User found for email '.$url);
            return $url;
        }else{
            $cont=0;
            foreach ($user as $value) {
                $cont++;
            }
            return $url.'.'.$cont;
        }
    }

    private function createId(){
        $caracteres = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
        $id = '';
        for($i=0; $i<15; $i++){
            $id .= $caracteres[rand(0, strlen($caracteres)-1)];
        }
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('PCVDemoBundle:User')->find($id);

        if ($user){
           $exit = true;
           while($exit){
                $id = '';
                for($i=0; $i<15; $i++){
                    $id .= $caracteres[rand(0, strlen($caracteres)-1)];
                }
                $em = $this->getDoctrine()->getManager();
                $user = $em->getRepository('PCVDemoBundle:User')->find($id);

                if (!$user)
                    $exit = false;
           }
        }
        return $id;
    }

    /**
     * @Route("/count_cv", name="_count_cv")
     */
    public function countCV(){ 
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('PCVDemoBundle:User')->findByIsActive(1);
        return new Response(count($user));
    }


    private function sendMessage($name, $email){
        $message = \Swift_Message::newInstance()
                ->setSubject('tucv - Registrado Exitosamente!')
                ->setFrom('contacto@tucv.cl')
                ->setTo($email)
                ->setBody(
                    $this->renderView(
                        'PCVDemoBundle:Contenido:email_signup.html.twig',
                        array('name'=> $name)
                    ),'text/html'
                );
                $this->get('mailer')->send($message);
                
    }

   
    private function testAction(Request $request)
    {

                $url = 'userDB.txt';
                $file = fopen($url, 'r');
                $contenido = fread($file, filesize($url));
                fclose($file);

                $listas = split(']', rtrim($contenido,']'));
                $start = 900;
                $end = count($listas);
                //$end = 900;

                for ($i=$start; $i < $end ; $i++) { 
                    $value = str_replace('[', '', $listas[$i]);
                    $lista = split('>',$value);
                    $usuario = split(',',str_replace('<', '',$lista[0]));
                    $dDatos = explode('|',str_replace('<', '',$lista[1]));

                    $dEdu = str_replace('<', '',$lista[2]);
                    $dExe = str_replace('<', '',$lista[3]);
                    $dCer = str_replace('<', '',$lista[4]);
                    $dPre = str_replace('<', '',$lista[5]);
                    $dPro = str_replace('<', '',$lista[6]);
                    $dIdi = str_replace('<', '',$lista[7]);
                    $dCon = str_replace('<', '',$lista[8]);

                    //Insertar Usuario
            /*          $user = new User();
                    $user->setId($usuario[0]);
                    $user->setUsername($usuario[1]);
                    $user->setPlastname($usuario[2]);
                    $user->setMlastname($usuario[3]);
                    $user->setEmail($usuario[4]);
                    $user->setPassword($usuario[5]);
                    $user->setRole("usuario");
                    $fecha = $usuario[6];
                    $fecha = new \DateTime($fecha);
                    $user->setCreateAt($fecha);
                    $user->setName($usuario[7]);
                    $user->setResumenUrl(strtolower($usuario[8]) );
                    $user->setVisitas($usuario[9]);
                    $user->setIsActive(1);
                    $user->setImagenUrl($usuario[10]);

                    $em = $this->getDoctrine()->getManager();
                    $em->persist($user);
                    $em->flush();
            */

                        //insertar Datos
            /*              $datos = new Datos();
                        $datos->setId($dDatos[0]);
                        $fecha = $dDatos[1];
                        $fecha = new \DateTime($fecha);
                        $datos->setBirthday($fecha);
                        $datos->setSex($dDatos[2]);
                        $datos->setRegion($dDatos[3]);
                        $datos->setCity($dDatos[4]);
                        $datos->setAddress($dDatos[5]);
                        $datos->setNationality($dDatos[6]);
                        $datos->setPhone($dDatos[7]);
                        $datos->setStatus($dDatos[8]);
                        $datos->setProfesion($dDatos[9]);
                        $datos->setProfesionsecond($dDatos[10]);
                        $datos->setCategoriaProfesion($dDatos[11]);
                        $datos->setLevel($dDatos[12]);
                        $datos->setActual($dDatos[13]);
                        $datos->setBio($dDatos[14]);
                        $datos->setRedes($dDatos[15]);
                        $datos->setHabilidades($dDatos[16]);
                        $datos->setVideoUrl($dDatos[17]);
                        $datos->setLicencia($dDatos[18]);
                        $datos->setDisponible($dDatos[19]);

                        $em = $this->getDoctrine()->getManager();
                        $em->persist($datos); 
                        $em->flush(); 
            */
                        //insertar Educacion
            /*               if(!empty($dEdu)){
                            $dEdu = split('}', $dEdu);
                            for ($j=0; $j < count($dEdu)-1; $j++) { 
                                $item = split(',', str_replace('{', '',$dEdu[$j]) );

                                $educacion = new Educacion();
                                $educacion->setIdUser($item[0]);
                                $educacion->setFecha(str_replace('.',',',$item[1]));
                                $educacion->setCity($item[2]);
                                $educacion->setCountry($item[3]);
                                $educacion->setSchool($item[4]);
                                $educacion->setSubject($item[5]);
                                $educacion->setCourse($item[6]);
                                $educacion->setDescription($item[7]);
                                
                                $em = $this->getDoctrine()->getManager();
                                $em->persist($educacion);
                                $em->flush();
                            }
                        }
            */
                        //insertar Experiencias
            /*                if(!empty($dExe)){
                            $temp = split('}', $dExe);
                            for ($j=0; $j < count($temp)-1; $j++) { 
                                $item = split(',', str_replace('{', '',$temp[$j]) );

                                $experiencia = new Experiencia();
                                $experiencia->setIdUser($item[0]);
                                $experiencia->setStartDate(str_replace('.', ',', $item[1]));
                                $experiencia->setEndDate(str_replace('.', ',', $item[2]));
                                $experiencia->setCity($item[3]);
                                $experiencia->setCountry($item[4]);
                                $experiencia->setCompany($item[5]);
                                $experiencia->setRol($item[6]);
                                $experiencia->setDescription($item[7]);
                                
                                $em = $this->getDoctrine()->getManager();
                                $em->persist($experiencia);
                                $em->flush();
                            }
                        }
            */                
                        //insertar Certificaciones
            /*                if(!empty($dCer)){
                            $temp = split('}', $dCer);
                            for ($j=0; $j < count($temp)-1; $j++) { 
                                $item = split(',', str_replace('{', '',$temp[$j]) );

                                $certificacion = new Certificaciones();
                                $certificacion->setIdUser($item[0]);
                                $certificacion->setStartDate(str_replace('.', ',', $item[1]));
                                $certificacion->setEndDate(str_replace('.', ',', $item[2]));
                                $certificacion->setCity($item[3]);
                                $certificacion->setCountry($item[4]);
                                $certificacion->setTitle($item[5]);
                                $certificacion->setEmisor($item[6]);
                                $certificacion->setDescription($item[7]);
                                
                                $em = $this->getDoctrine()->getManager();
                                $em->persist($certificacion);
                                $em->flush();
                            }
                        }
            */              
                        //insertar Premios
            /*                if(!empty($dPre)){
                            $temp = split('}', $dPre);
                            for ($j=0; $j < count($temp)-1; $j++) { 
                                $item = split(',', str_replace('{', '',$temp[$j]) );

                                $premio = new Premios();
                                $premio->setIdUser($item[0]);
                                $premio->setDate(str_replace('.', ',', $item[1]));
                                $premio->setCity($item[2]);
                                $premio->setCountry($item[3]);
                                $premio->setTitle($item[4]);
                                $premio->setEmisor($item[5]);
                                $premio->setRol($item[6]);
                                $premio->setDescription($item[7]);
                                
                                $em = $this->getDoctrine()->getManager();
                                $em->persist($premio);
                                $em->flush();
                            }
                        }
            */
                        //insertar Proyectos
            /*                if(!empty($dPro)){
                            $temp = split('}', $dPro);
                            for ($j=0; $j < count($temp)-1; $j++) { 
                                $item = split(',', str_replace('{', '',$temp[$j]) );

                                $proyecto = new Proyectos();
                                $proyecto->setIdUser($item[0]);
                                $proyecto->setTitle($item[1]);
                                $proyecto->setCliente($item[2]);
                                $proyecto->setFecha(str_replace('.', ',', $item[3]));
                                $proyecto->setDescripcion($item[4]);
                                $proyecto->setImagenUrl($item[5]);
                                $proyecto->setLink($item[6]);
                                
                                $em = $this->getDoctrine()->getManager();
                                $em->persist($proyecto);
                                $em->flush();
                            }
                        }
            */
                        //insertar IDiomas
            /*                if(!empty($dIdi)){
                            $temp = split('}', $dIdi);
                            for ($j=0; $j < count($temp)-1; $j++) { 
                                $item = split(',', str_replace('{', '',$temp[$j]) );

                                $idioma = new Idiomas();
                                $idioma->setIdUser($item[0]);
                                $idioma->setName($item[1]);
                                $idioma->setvalue($item[2]);
                                $idioma->setNativo($item[3]);

                                $em = $this->getDoctrine()->getManager();
                                $em->persist($idioma);
                                $em->flush();
                            }
                        }
            */
                        //insertar Conocimientos
            /*               if(!empty($dCon)){
                            $temp = split('}', $dCon);
                            for ($j=0; $j < count($temp)-1; $j++) { 
                                $item = split(',', str_replace('{', '',$temp[$j]) );

                                $conocimiento = new Conocimientos();
                                $conocimiento->setIdUser($item[0]);
                                $conocimiento->setName($item[1]);
                                $conocimiento->setvalue($item[2]);

                                $em = $this->getDoctrine()->getManager();
                                $em->persist($conocimiento);
                                $em->flush();
                            }
                        }
            */
        }


        return new Response("Ok..user");

    }

}
