<?php

namespace PCV\DemoBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

use PCV\DemoBundle\Controller\minController\orderController;
use PCV\DemoBundle\Entity\User;
use PCV\DemoBundle\Entity\Datos;
use PCV\DemoBundle\Entity\Idiomas;
use PCV\DemoBundle\Entity\Conocimientos;
use PCV\DemoBundle\Entity\Experiencia;
use PCV\DemoBundle\Entity\Educacion;
use PCV\DemoBundle\Entity\Proyectos;
use PCV\DemoBundle\Entity\Premios;
use PCV\DemoBundle\Entity\Certificaciones;


/**
 * @Route("/private")
 */
class EditController extends Controller
{

//Secured
    /**
     * @Route("/edit_cuenta", name="_edit_cuenta")
     */
    public function editCuentaAction(Request $request){
        try{
        $id = $this->getUser() -> getId();

        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('PCVDemoBundle:User')->find($id);

        $username = ucwords(strtolower(trim($request->get('_username'))));
        $plastname = ucwords(strtolower(trim($request->get('_plastname'))));
        $mlastname = ucwords(strtolower(trim($request->get('_mlastname'))));

        $user->setUsername($username)
        ->setPlastname($plastname)
        ->setMlastname($mlastname);

        $user->setName($username.' '.$plastname.' '.$mlastname);

        //verificar disponibilidad de name
        $url = $this->findUrl($username,$plastname,$mlastname);
        $user->setResumenUrl($url);

        $em->flush();

        $request->getSession()->set('flag',1);
        }catch(Exception $e){
            $request->getSession()->set('flag',0);
        }
        return $this->redirect($this->generateUrl('_private_secured_account'));
    }

    /**
     * @Route("/edit_email", name="_edit_email")
     */
    public function editEmailAction(Request $request){
        try{
        $id = $this->getUser() -> getId();
        $email = $request->get('_email');

        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('PCVDemoBundle:User')->find($id);
        $emails = $em->getRepository('PCVDemoBundle:User')->findBy(array('email'=>$email));

        if(! $emails){
            $user->setEmail($email);
            $em->flush();
            $request->getSession()->set('flag',1);
        }else{
             $request->getSession()->set('flag',3);
        }

        }catch(Exception $e){
            $request->getSession()->set('flag',0);
        }
        return $this->redirect($this->generateUrl('_private_secured_account'));
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
            return $url;
        }else{
            $cont=0;
            foreach ($user as $value) {
                $cont++;
            }
            return $url.'.'.$cont;
        }
    }

    /**
     * @Route("/edit_password", name="_edit_password")
     */
    public function editPasswordAction(Request $request){
        try {
            $id = $this->getUser() -> getId();
            $em = $this->getDoctrine()->getManager();
            if ($user = $em->getRepository('PCVDemoBundle:User')->find($id)) {

                $passwordActual = $request->get('_password');

                if(password_verify($passwordActual, $user->getPassword()))
                {
                    $user->setPassword($request->get('_passwordNew'));
                    $em->flush();

                    //Se envia correo Informando del cambio de Contraseña
                    $this->messageAction($user->getName(),$user->getEmail());

                    $request->getSession()->set('flag',1);
                }else{
                   $request->getSession()->set('flag',2);
                }
            }else{
               $request->getSession()->set('flag',0);
            }
        } 
        catch (Exception $e) 
        {
            $request->getSession()->set('flag',0);
        }
        return $this->redirect($this->generateUrl('_private_secured_password'));
    }

    private function messageAction($name, $email){
        $message = \Swift_Message::newInstance()
        ->setSubject('tucv - Cambio de Contraseña!')
        ->setFrom('contacto@tucv.cl')
        ->setTo($email)
        ->setBody(
            $this->renderView(
                'PCVDemoBundle:Contenido:email_password.html.twig',
                array('name'=> $name,'email'=> $email)
            ),'text/html'
        );
        $this->get('mailer')->send($message);
    }
    
//Datos
    /**
     * @Route("/edit_datos", name="_edit_datos")
     */
    public function editDatosAction(Request $request){
        $id = $this->getUser() -> getId();

        $em = $this->getDoctrine()->getManager();
        if(! $datos = $em->getRepository('PCVDemoBundle:Datos')->find($id))
        {
            //insertar en Datos Conyugue
            $datos = new Datos();
            $datos->setId($id);
            $em = $this->getDoctrine()->getManager();
            $em->persist($datos);
            $em->flush();
        }
        $datos = $em->getRepository('PCVDemoBundle:Datos')->find($id);

        //Agregar la fecha
        $fecha = $request->get('_dia').'-'.$request->get('_mes').'-'.$request->get('_año');
        $fecha = new \DateTime($fecha);
        $datos->setBirthday($fecha);
        
        $datos->setCity($request->get('_city'));

        $datos->setRegion($request->get('_region'));
      
        $datos->setAddress($request->get('_address'));

        $datos->setNationality($request->get('_nationality'));
    
        $datos->setPhone($request->get('_phone'));
       
        $datos->setStatus($request->get('_status'));

        $datos->setSex($request->get('_sex'));

        $datos->setLicencia($request->get('_licencia'));

        if($request->get('_disponible'))
            $datos->setDisponible(1);
        
        $em->flush();

        return $this->redirect($this->generateUrl('_private_resume_profile'));
    }

//Biografia

    /**
     * @Route("/edit_bio", name="_edit_bio")
     * 
     */
    public function editBioAction(Request $request){
        $id = $this->getUser() -> getId();

        $em = $this->getDoctrine()->getManager();
        if(! $datos = $em->getRepository('PCVDemoBundle:Datos')->find($id))
        {
            //insertar en Datos Conyugue
            $datos = new Datos();
            $datos->setId($id);
            $em = $this->getDoctrine()->getManager();
            $em->persist($datos);
            $em->flush();
        }
        $datos = $em->getRepository('PCVDemoBundle:Datos')->find($id);
        
        if( ! is_null($request->get('_bio'))){
            $datos->setBio($request->get('_bio'));
        }
        
        $em->flush();

        return $this->redirect($this->generateUrl('_private_resume_profile'));
    }

//Profesion

    /**
     * @Route("/edit_profesion", name="_edit_profesion")
     */
    public function editProfesionAction(Request $request){
        $id = $this->getUser() -> getId();

        $em = $this->getDoctrine()->getManager();
        if(! $datos = $em->getRepository('PCVDemoBundle:Datos')->find($id))
        {
            //insertar en Datos
            $datos = new Datos();
            $datos->setId($id);
            $em = $this->getDoctrine()->getManager();
            $em->persist($datos);
            $em->flush();
        }
        $datos = $em->getRepository('PCVDemoBundle:Datos')->find($id);

        if( ! is_null($request->get('_categoria'))){
            $datos->setCategoriaProfesion($request->get('_categoria'));
        }
        if( ! is_null($request->get('_titulo'))){
            $datos->setProfesion($request->get('_titulo'));
        }
        if( ! is_null($request->get('_titulosecond'))){
            $datos->setProfesionsecond($request->get('_titulosecond'));
        }
        if( ! is_null($request->get('_level'))){
            $datos->setLevel($request->get('_level'));
        }
        if( ! is_null($request->get('_actual'))){
            $datos->setActual($request->get('_actual'));
        }
        
        $em->flush();

        return $this->redirect($this->generateUrl('_private_resume_profile'));
    }

//Idiomas
    /**
     * @Route("/new_idioma", name="_new_idioma")
     */
    public function newIdiomaAction(Request $request){
        $id = $this->getUser() -> getId();

        //insertar en Idiomas
        $idioma = new Idiomas();
        $idioma->setIdUser($id);

        $nombre = ucwords(strtolower(trim($request->get('_name'))));
        $idioma->setName($nombre);

        $idioma->setValue($request->get('_valorIdioma'));
        if($request->get('_nativo'))
            $idioma ->setNativo(1);
        else
            $idioma ->setNativo(0);
        
        $em = $this->getDoctrine()->getManager();
        $em->persist($idioma);
        $em->flush();

        return $this->redirect($this->generateUrl('_private_resume_profile'));
    }

    /**
     * @Route("/edit_idioma", name="_edit_idioma")
     */
    public function editIdiomaAction(Request $request){
        $id = $this->getUser() -> getId();

        $em = $this->getDoctrine()->getManager();
        $idiomas = $em->getRepository('PCVDemoBundle:Idiomas')->findBy(array('id_user'=>$id));
      
        $cont =1;
        foreach ($idiomas as $idioma) {

            if( empty($request->get('_name'.$cont)))
            {
                $em->remove($idioma);//remueve el idioma(doc) de la coleccion
            }
            else
            {
                $idioma ->setValue($request->get('_value'.$cont));
                $idioma ->setName($request->get('_name'.$cont));
                if($request->get('_nativo'.$cont))
                    $idioma ->setNativo(1);
                else
                    $idioma ->setNativo(0);
            }
            $cont++;
        }
        $em->flush();
        return $this->redirect($this->generateUrl('_private_resume_profile'));
    }

//Conocimientos
    /**
     * @Route("/new_conocimiento", name="_new_conocimiento")
     * 
     */
    public function newConocimientoAction(Request $request){
        $id = $this->getUser() -> getId();

        //insertar en Conocimiento
        $conocimiento = new Conocimientos();
        $conocimiento->setIdUser($id);
        $conocimiento->setName($request->get('_name'));
        $conocimiento->setValue($request->get('_value'));
        
        $em = $this->getDoctrine()->getManager();
        $em->persist($conocimiento);
        $em->flush();

        return $this->redirect($this->generateUrl('_private_resume_profile'));
    }

     /**
     * @Route("/edit_conocimiento", name="_edit_conocimiento")
     * 
     */
    public function editConocimientoAction(Request $request){
        $id = $this->getUser() -> getId();

        $em = $this->getDoctrine()->getManager();
        $conocimientos = $em->getRepository('PCVDemoBundle:Conocimientos')->findBy(array('id_user'=>$id));
      
        $cont =1;
        foreach ($conocimientos as $conocimiento) {

            if( empty($request->get('_name'.$cont)))
            {
                $em->remove($conocimiento);//remueve el conocimiento
            }
            else
            {
                $conocimiento ->setValue($request->get('_value'.$cont));
                $conocimiento ->setName($request->get('_name'.$cont));
            }
            $cont++;
        }
        $em->flush();
        return $this->redirect($this->generateUrl('_private_resume_profile'));
    }

//Habilidades
    /**
     * @Route("/edit_habilidad", name="_edit_habilidad")
     * 
     */
    public function editHabilidadAction(Request $request){
        $id = $this->getUser() -> getId();

        $em = $this->getDoctrine()->getManager();
        if(! $datos = $em->getRepository('PCVDemoBundle:Datos')->find($id))
        {
            //insertar en Datos Conyugue
            $datos = new Datos();
            $datos->setId($id);
            $em = $this->getDoctrine()->getManager();
            $em->persist($datos);
            $em->flush();
        }
        $datos = $em->getRepository('PCVDemoBundle:Datos')->find($id);
        $habilidades = $request->get('_habilidades');
        $datos->setHabilidades($habilidades);
        $em->flush();

        return $this->redirect($this->generateUrl('_private_resume_profile'));
    }


    /**
     * @Route("/edit_red", name="_edit_red")
     * 
     */
    public function editRedAction(Request $request)
    {
        $id = $this->getUser() -> getId();
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('PCVDemoBundle:Datos')->find($id);

        if (!$user) {
            throw $this->createNotFoundException('No User found for id ');
        }

        $array = array("facebook","twitter","google","youtube","instagram","pinterest","flickr","tumblr","soundcloud","linkedin");
        $cadena = null;

        foreach($array as $elemento){
            if(! empty($request->get('_'. $elemento))){
                $cadena = trim($cadena,'\t');
                $cadena = $cadena.$elemento.'{'.trim($request->get('_'. $elemento),"\t").'}';
            }        
        }
        $user->setRedes($cadena);
        $em->flush();

        return $this->redirect($this->generateUrl('_private_resume_profile'));
    }

//Experiencias

    /**
     * @Route("/new_experiencia", name="_new_experiencia")
     * 
     */
    public function newExperienciaAction(Request $request){
        return $this->orderExperiencia(true);
    }
    
    private function orderExperiencia($isNew){
        $id = $this->getUser() -> getId();

        $em = $this->getDoctrine()->getManager();
        $experiencias = $em->getRepository('PCVDemoBundle:Experiencia')->findBy(array('id_user'=>$id));

        //recorrer con un indicador numerico igual que en edit. asi obtenemos los valores.
        $order = new orderController();

        $max = array();
        foreach ($experiencias as $value) {
            $fecha = split(',', $value->getStartDate());
            $max[] = array('id' => $value->getId(), 'año' => $fecha[1]+($fecha[0]*0.01) );    
        }
        if($isNew){
            $max[] = array('id' => 'id_new', 'año' => $_POST['_desdeAño']+($_POST['_desdeMes']*0.01) );    
        }
        usort($max, $this->build_sorter('año')); 

        if(count($max) > 1 ){
            foreach ($max as $value) {
                foreach ($experiencias as $exp) {
                    if($value['id'] == $exp->getId())
                    {
                        $experiencia = new Experiencia();
                        $experiencia->setIdUser($id);
                        $experiencia->setStartDate($exp->getStartDate());
                        $experiencia->setEndDate($exp->getEndDate());
                        $experiencia->setCity($exp->getCity());
                        $experiencia->setCountry($exp->getCountry());
                        $experiencia->setCompany($exp->getCompany());
                        $experiencia->setRol($exp->getRol());
                        $experiencia->setDescription($exp->getDescription());
                        $em->persist($experiencia);

                        $em->remove($exp);//remueve el experiencia(doc) de la coleccion de MongoDB
                        break;
                    }
                    if($isNew){
                        if($value['id'] == 'id_new'){
                            $nueva = $order->newExperience($id);
                            $em = $this->getDoctrine()->getManager();
                            $em->persist($nueva);
                        }
                        break;
                    }
                }
            }
        }else{
            if($isNew){
                 $nueva = $order->newExperience($id);
                $em = $this->getDoctrine()->getManager();
                $em->persist($nueva);
            }
        }
        $em->flush();
        unset($max);
        return $this->redirect($this->generateUrl('_private_resume_profile'));
    }
    
    /**
     * @Route("/edit_experiencia", name="_edit_experiencia")
     */
    public function editExperienciaAction(Request $request){
        $id = $this->getUser() -> getId();

        $em = $this->getDoctrine()->getManager();
        $experiencias = $em->getRepository('PCVDemoBundle:Experiencia')->findBy(array('id_user'=>$id));
        
        $cont = 1;
        foreach ($experiencias as $experiencia) {
            if( empty($request->get('_company'.$cont)) )
            {
                $em->remove($experiencia);//remueve el experiencia(doc) de la coleccion de MongoDB
            }
            else
            {
                $experiencia ->setStartDate($request->get('_desdeMes'.$cont).','.$request->get('_desdeAño'.$cont));
                $experiencia ->setEndDate($request->get('_hastaMes'.$cont).','.$request->get('_hastaAño'.$cont));
                $experiencia ->setCity($request->get('_city'.$cont));
                $experiencia ->setCountry($request->get('_country'.$cont));
                $experiencia ->setCompany($request->get('_company'.$cont));
                $experiencia ->setRol($request->get('_rol'.$cont));
                $experiencia ->setDescription($request->get('_description'.$cont));
            }
            $cont++;
        }
        $em->flush();
        return $this->orderExperiencia(false);
    }

    private function build_sorter($clave) {
        return function ($a, $b) use ($clave) {
            return strnatcmp($b[$clave], $a[$clave]);
        };
    }

//Educacion

    /**
     * @Route("/new_educacion", name="_new_educacion")
     */
    public function newEducacionAction(Request $request){
        return $this->orderEducation(true);
    }

    private function orderEducation($isNew){
        $id = $this->getUser() -> getId();

        $em = $this->getDoctrine()->getManager();
        $educaciones = $em->getRepository('PCVDemoBundle:Educacion')->findBy(array('id_user'=>$id));

        $order = new orderController();
        $max = array();
        foreach ($educaciones as $value) {
            $año = split('-', $value->getFecha());
            $añoFin = split(',', $año[0]);
           
            $max[] = array('id' => $value->getId(), 'año' => $añoFin[1]+($añoFin[0]*0.01) );    
        }
        if($isNew){
            $max[] = array('id' => 'id_new', 'año' => $_POST['_desdeAño']+($_POST['_desdeMes']*0.01) );    
        }
        usort($max, $this->build_sorter('año')); 

        if(count($max) > 1 ){
            foreach ($max as $value) {
                foreach ($educaciones as $edu) {
                    if($value['id'] == $edu->getId())
                    {
                        $educacion = new Educacion();
                        $educacion->setIdUser($id);
                        $educacion->setFecha($edu->getFecha());
                        $educacion ->setSubject($edu->getSubject());
                        $educacion ->setSchool($edu->getSchool());
                        $educacion ->setCourse($edu->getCourse());
                        $educacion->setCity($edu->getCity());
                        $educacion->setCountry($edu->getCountry());
                        $educacion->setDescription($edu->getDescription());
                        $em->persist($educacion);
                        $em->remove($edu);//remueve el experiencia(doc) de la coleccion de MongoDB
                        break;
                    }
                    if($isNew){
                        if($value['id'] == 'id_new'){
                            $nueva = $order->newEducation($id);
                            $em = $this->getDoctrine()->getManager();
                            $em->persist($nueva);
                        }
                        break;
                    }
                }
            }
        }else{
            if($isNew){
                $nueva = $order->newEducation($id);
                $em = $this->getDoctrine()->getManager();
                $em->persist($nueva);
            }
        }

        $em->flush();
        unset($max);
        return $this->redirect($this->generateUrl('_private_resume_profile'));
    }

    /**
     * @Route("/edit_educacion", name="_edit_educacion")
     */
    public function editEducacionAction(Request $request){
       $id = $this->getUser() -> getId();

        $em = $this->getDoctrine()->getManager();
        $educaciones = $em->getRepository('PCVDemoBundle:Educacion')->findBy(array('id_user'=>$id));

        $cont = 1;
        foreach ($educaciones as $educacion) {
            if( empty($request->get('_desdeMes'.$cont)) )
            {
                $em->remove($educacion);//remueve el educacion(doc) de la coleccion de MongoDB
            }
            else
            {
                $educacion ->setFecha($request->get('_desdeMes'.$cont).','.$request->get('_desdeAño'.$cont).'-'.$request->get('_hastaMes'.$cont).','.$request->get('_hastaAño'.$cont));
                $educacion ->setCity($request->get('_city'.$cont));
                $educacion ->setCountry($request->get('_country'.$cont));
                $educacion ->setSubject($request->get('_subject'.$cont));
                $educacion ->setSchool($request->get('_school'.$cont));
                $educacion ->setCourse($request->get('_course'.$cont));
                $educacion ->setDescription($request->get('_description'.$cont));
            }
            $cont++;
        }
        $em->flush();

        return $this->orderEducation(false);

        //return $this->redirect($this->generateUrl('_private_resume_profile'));
    }

//Premios

    /**
     * @Route("/new_premio", name="_new_premio")
     */
    public function newPremioAction(Request $request)
    {
        return $this->orderPremios(true);
    }

    private function orderPremios($isNew){
        $id = $this->getUser() -> getId();

        $em = $this->getDoctrine()->getManager();
        $premios = $em->getRepository('PCVDemoBundle:Premios')->findBy(array('id_user'=>$id));

        //recorrer con un indicador numerico igual que en edit. asi obtenemos los valores.
        $order = new orderController();

        $max = array();
        foreach ($premios as $value) {
            $año = split(',', $value->getDate());
            $max[] = array('id' => $value->getId(), 'año' => $año[1]+($año[0]*0.01));    
        }
        if($isNew){
            $max[] = array('id' => 'id_new', 'año' => $_POST['_año']+($_POST['_mes']*0.01));    
        }
        usort($max, $this->build_sorter('año')); 

        if(count($max) > 1 ){
            foreach ($max as $value) {
                foreach ($premios as $pre) {
                    if($value['id'] == $pre->getId())
                    {
                        $premio = new Premios();
                       
                        $premio ->setIdUser($id);
                        $premio ->setDate($pre->getDate());
                        $premio ->setCity($pre->getCity());
                        $premio ->setCountry($pre->getCountry());
                        $premio ->setEmisor($pre->getEmisor());
                        $premio ->setTitle($pre->getTitle());
                        $premio ->setRol($pre->getRol());
                        $premio ->setDescription($pre->getDescription());
                        $em->persist($premio);
                        $em->remove($pre);//remueve el experiencia(doc) de la coleccion de MongoDB
                        break;
                    }
                    if($isNew){
                        if($value['id'] == 'id_new'){
                            $nueva = $order->newPremio($id);
                            $em = $this->getDoctrine()->getManager();
                            $em->persist($nueva);
                        }
                        break;
                    }
                }
            }
        }else{
            if($isNew){
                $nueva = $order->newPremio($id);
                $em = $this->getDoctrine()->getManager();
                $em->persist($nueva);
            }
        }
        $em->flush();
        unset($max);
        return $this->redirect($this->generateUrl('_private_resume_profile'));
    }

    /**
     * @Route("/edit_premios", name="_edit_premios")
     */
    public function editPremiosAction(Request $request){
        $id = $this->getUser() -> getId();

        $em = $this->getDoctrine()->getManager();
        $premios = $em->getRepository('PCVDemoBundle:Premios')->findBy(array('id_user'=>$id));
        
        $cont = 1;
        foreach ($premios as $premio) {
            if( empty($request->get('_mes'.$cont)) )
            {
                $em->remove($premio);//remueve el educacion(doc) de la coleccion de MongoDB
            }
            else
            {
                $premio ->setDate($request->get('_mes'.$cont).','.$request->get('_año'.$cont));
                $premio ->setCity($request->get('_city'.$cont));
                $premio ->setCountry($request->get('_country'.$cont));
                $premio ->setEmisor($request->get('_emisor'.$cont));
                $premio ->setTitle($request->get('_title'.$cont));
                $premio ->setRol($request->get('_rol'.$cont));
                $premio ->setDescription($request->get('_description'.$cont));
            }
            $cont++;
        }
        $em->flush();
        return $this->orderPremios(false);
    }

//Certificados

    /**
     * @Route("/new_certificado", name="_new_certificado")
     */
    public function newCertificadoAction(Request $request)
    {
        return $this->orderCertificaciones(true);
    }

    private function orderCertificaciones($isNew){
        $id = $this->getUser() -> getId();

        $em = $this->getDoctrine()->getManager();
        $certificaciones = $em->getRepository('PCVDemoBundle:Certificaciones')->findBy(array('id_user'=>$id));

        $order = new orderController();
        $max = array();
        foreach ($certificaciones as $value) {
            $año = split(',', $value->getStartDate());
            $max[] = array('id' => $value->getId(), 'año' => $año[1]+($año[0]*0.01));    
        }
        if($isNew){
            $max[] = array('id' => 'id_new', 'año' => $_POST['_año']+($_POST['_mes']*0.01));    
        }
        usort($max, $this->build_sorter('año')); 

        if(count($max) > 1 ){
            foreach ($max as $value) {
                foreach ($certificaciones as $certi) {
                    if($value['id'] == $certi->getId())
                    {
                        $certificado = new Certificaciones();
                       
                        $certificado ->setIdUser($certi->getIdUser());
                        $certificado ->setStartDate($certi->getStartDate());
                        $certificado ->setEndDate($certi->getEndDate());
                        $certificado ->setCity($certi->getCity());
                        $certificado ->setCountry($certi->getCountry());
                        $certificado ->setEmisor($certi->getEmisor());
                        $certificado ->setTitle($certi->getTitle());
                        $certificado ->setDescription($certi->getDescription());
                        $em->persist($certificado);
                        $em->remove($certi);//remueve el experiencia(doc) de la coleccion de MongoDB
                        break;
                    }
                    if($isNew){
                        if($value['id'] == 'id_new'){
                            $nueva = $order->newCertificacion($id);
                            $em = $this->getDoctrine()->getManager();
                            $em->persist($nueva);
                        }
                        break;
                    }
                }
            }
        }else{
            if($isNew){
                $nueva = $order->newCertificacion($id);
                $em = $this->getDoctrine()->getManager();
                $em->persist($nueva);
            }
        }
        $em->flush();
        unset($max);
        return $this->redirect($this->generateUrl('_private_resume_profile'));
    }

     /**
     * @Route("/edit_certificados", name="_edit_certificados")
     */
    public function editCertificadosAction(Request $request){
        $id = $this->getUser() -> getId();

        $em = $this->getDoctrine()->getManager();
        $certificaciones = $em->getRepository('PCVDemoBundle:Certificaciones')->findBy(array('id_user'=>$id));
        
        $cont = 1;
        foreach ($certificaciones as $certificados) {
            if( empty($request->get('_mes'.$cont)) )
            {
                $em->remove($certificados);//remueve el educacion(doc) de la coleccion de MongoDB
            }
            else
            {
                $certificados ->setStartDate($request->get('_mes'.$cont).','.$request->get('_año'.$cont) );
                $certificados ->setEndDate($request->get('_mesFin'.$cont).','.$request->get('_añoFin'.$cont) );
                $certificados ->setCity($request->get('_city'.$cont));
                $certificados ->setCountry($request->get('_country'.$cont));
                $certificados ->setEmisor($request->get('_emisor'.$cont));
                $certificados ->setTitle($request->get('_title'.$cont));
                $certificados ->setDescription($request->get('_description'.$cont));
            }
            $cont++;
        }
        $em->flush();
        return $this->orderCertificaciones(false);
    }

//Edit Imagen
    /**
     * @Route("/edit_image", name="_edit_imagen")
     */
    public function editImagenAction(Request $request){
        try{
             
            $id = $this->getUser() -> getId();
  
            $imagen = $request->files->get('_file');

            if (($imagen instanceof UploadedFile) && ($imagen->getError() == '0')) {

                if (($imagen->getSize() < 200000000)) {

                    
                    $type = exif_imagetype($imagen);
                    $extension = image_type_to_extension($type);

                    $valid_filetypes = array('.jpg', '.jpeg','.png');
                    if (in_array($extension, $valid_filetypes)) {

                        //$result = move_uploaded_file($imagen, $url);
                        if($this->saveImagen($imagen, $id, $extension, $request)){

                            //update BD USER
                            $em = $this->getDoctrine()->getManager();
                            if($user = $em->getRepository('PCVDemoBundle:User')->find($id)){
                                $user ->setImagenUrl($id.$extension);
                                $em->flush();
                            }else{
                                $url = 'img/profile/'.$id.$extension;
                                //delete Imagen
                                $this->deleteImagen($url);
                            }
                        } else {
                            //Error de type(2)
                            return new Response("error de imagen 1");
                        }
                    }else {
                        //Error de type(2)
                        return new Response("error de tipo");
                    }
                }else {
                    //Error de size(3)
                    return new Response("error tamaño");
                }
            } else {
                //Error de file error (0)
                 return new Response("error de imagen 2");
            }

        }catch(Exception $e){
            return new Response("error de imagen 3");
        } 

        return $this->redirect($this->generateUrl('_private_resume_profile'));
    }

    private function saveImagen($imagen, $id, $extension, Request $request){
        try
        {
            $data = getimagesize($imagen);
            //get width and height de la foto-- tamaño normal
            $width = intval($data[0]);
            $height = intval($data[1]);
            
            //tamaño de Width and Height en la pagina Web
            $wWeb = intval($request->get('_wWeb'));
            $hWeb = intval($request->get('_hWeb'));

            //seleccion del area
            $w = intval($request->get('_w'));
            $h = intval($request->get('_h'));
            $x = intval($request->get('_x1'));
            $y = intval($request->get('_y1'));

            //obtener el valor scalada
            $valorPromedioW = $width/$wWeb;
            $valorPromedioH = $height/$hWeb;
            $origX = $valorPromedioW * $x;
            $origY = $valorPromedioH * $y;
            $origW = $valorPromedioW * $w;
            $origH = $valorPromedioH * $h;

            $name = $id.$extension;


            if($extension == ".png"){
                $origen = imagecreatefrompng($imagen);
                $imagen_crop = imagecrop($origen,array('x' => intval($origX), 'y' => intval($origY), 'width' => intval($origW), 'height' => intval($origH) ));

                imagepng($imagen_crop, "img/profile/temp_".$name);
                imagedestroy($origen);
                imagedestroy($imagen_crop);

                $origen = imagecreatefrompng("img/profile/temp_".$name);
                $imagen_escalada = imagescale($origen,250,250);
                imagepng($imagen_escalada, "img/profile/".$name);
                imagedestroy($origen);
                imagedestroy($imagen_escalada);
                unLink("img/profile/temp_".$name);
            }
            else if(($extension == ".jpg")||($extension == ".jpeg")){
                $origen = imagecreatefromjpeg($imagen);
                $imagen_crop = imagecrop($origen,array('x' => intval($origX), 'y' => intval($origY), 'width' => intval($origW), 'height' => intval($origH) ));

                imagejpeg($imagen_crop, "img/profile/temp_".$name);
                imagedestroy($origen);
                imagedestroy($imagen_crop);

                $origen = imagecreatefromjpeg("img/profile/temp_".$name);
                $imagen_escalada = imagescale($origen,250,250);
                imagejpeg($imagen_escalada, "img/profile/".$name);
                imagedestroy($origen);
                imagedestroy($imagen_escalada);
                unLink("img/profile/temp_".$name);
            }
            return true;
        }catch(Exception $e){
            return false;
        }
    }

    private function deleteImagen($url){
        try{
            if (file_exists($url))
            {
                unlink($url);
            }
            return true;
        }catch(Exception $e){
            return false;
        }
    }

    /**
     * @Route("/delete_image", name="_delete_image")
     */
    public function deleteImageAction(Request $request){
        $id = $this->getUser() -> getId();

        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('PCVDemoBundle:User')->find($id);

        if(! empty($user->getImagenUrl())){
            $url = 'img/profile/'.$user->getImagenUrl();
            if (file_exists($url))
            {
                unlink($url);
            }

            $user-> setImagenUrl('');
            $em->flush();
        }
        
        return $this->redirect($this->generateUrl('_private_resume_profile'));  
    }

//Video

    /**
     * @Route("/edit_video", name="_edit_video")
     */
    public function editVideoAction(Request $request){
        $id = $this->getUser() -> getId();

        $em = $this->getDoctrine()->getManager();
        $datos = $em->getRepository('PCVDemoBundle:Datos')->find($id);
        
        if( ! is_null($request->get('_video'))){
            
            $datos->setVideoUrl($request->get('_video'));
        }
        
        $em->flush();
        
        return $this->redirect($this->generateUrl('_private_resume_profile'));  
    }


    /**
     * @Route("/delete_video", name="_delete_video")
     */
    public function deleteVideoAction(Request $request){
        $id = $this->getUser() -> getId();

        $em = $this->getDoctrine()->getManager();
        $datos = $em->getRepository('PCVDemoBundle:Datos')->find($id);

        if(! empty($datos->getVideoUrl())) {
            $datos-> setVideoUrl('');
        }

        $em->flush();
        return $this->redirect($this->generateUrl('_private_resume_profile'));  
    }

//Proyectos

    /**
     * @Route("/new_project", name="_new_project")
     */
    public function newProjectAction(Request $request)
    {
        return $this->orderProyecto(true);
    }


    private function orderProyecto($isNew){
        $id = $this->getUser() -> getId();

        $em = $this->getDoctrine()->getManager();
        $proyectos = $em->getRepository('PCVDemoBundle:Proyectos')->findBy(array('id_user'=>$id));

        $order = new orderController();
        $max = array();
        foreach ($proyectos as $value) {
            $año = split(',', $value->getFecha());
            $max[] = array('id' => $value->getId(), 'año' => $año[1]+($año[0]*0.01));    
        }
        if($isNew){
            $max[] = array('id' => 'id_new', 'año' => $_POST['_año']+($_POST['_mes']*0.01));    
        }
        usort($max, $this->build_sorter('año')); 

        if(count($max) > 1 ){
            foreach ($max as $value) {
                foreach ($proyectos as $proj) {
                    if($value['id'] == $proj->getId())
                    {
                        $proyecto = new Proyectos();
                       
                        $proyecto ->setIdUser($proj->getIdUser());
                        $proyecto ->setFecha($proj->getFecha());
                        $proyecto ->setTitle($proj->getTitle());
                        $proyecto ->setCliente($proj->getCliente());
                        $proyecto ->setDescripcion($proj->getDescripcion()); 
                        $proyecto ->setLink($proj->getLink());
                        $proyecto ->setImagenUrl($proj->getImagenUrl());
                        $em->persist($proyecto);
                        $em->remove($proj);//remueve el experiencia(doc) de la coleccion de MongoDB
                        break;
                    }
                    if($isNew){
                        if($value['id'] == 'id_new'){
                            $nueva = $order->newProyecto($id);
                            $em = $this->getDoctrine()->getManager();
                            $em->persist($nueva);
                        }
                        break;
                    }
                }
            }
        }else{
            if($isNew){
                $nueva = $order->newProyecto($id);
                $em = $this->getDoctrine()->getManager();
                $em->persist($nueva);
            }
        }
        $em->flush();
        unset($max);
        return $this->redirect($this->generateUrl('_private_resume_profile'));
    }


    /**
     * @Route("/edit_project", name="_edit_project")
     * @Template()
     */
    public function editProjectAction(Request $request){
        $id = $this->getUser() -> getId();

        $em = $this->getDoctrine()->getManager();
        $proyectos = $em->getRepository('PCVDemoBundle:Proyectos')->findBy(array('id_user'=>$id));

        $cont = 1;
        foreach ($proyectos as $proyecto) {
            if( empty($request->get('_title'.$cont))){
                if(! empty($proyecto->getImagenUrl())){
                    $funcion = new imageController();
                    $funcion-> deleteImagenPortafolio($proyecto->getImagenUrl());//remover la imagen
                }
                $em->remove($proyecto);//remueve el proyecto(doc) de la DB
            }
            else
            {
                $proyecto ->setFecha($request->get('_mes'.$cont).','.$request->get('_año'.$cont));
                $proyecto ->setTitle($request->get('_title'.$cont));
                $proyecto ->setCliente($request->get('_cliente'.$cont));
                $proyecto ->setDescripcion($request->get('_description'.$cont));
                if( ! empty($request->get('_link'.$cont))){
                    $proyecto ->setLink($request->get('_link'.$cont));
                }
                
                if(! empty($request->get('_dataImagen'.$cont))){
                    $funcion = new imageController();
                    if(! empty($proyecto->getImagenUrl())){
                        $funcion-> deleteImagenPortafolio($proyecto->getImagenUrl());//remover la imagen
                    }
                        $src = $request->get('_dataImagen'.$cont);
                        $titulo = $request->get('_title'.$cont);
                        $id = $proyecto->getId();
                        $imagenUrl = $funcion->imagenPortafolioControl($src,$id,$titulo);
                        $proyecto ->setImagenUrl($imagenUrl);
                }
            }
            $cont++;
        }
        $em->flush();
        return $this->orderProyecto(false);
    }

//Email
    /**
     * @Route("/send_email", name="_send_email")
     */
    public function sendEmailAction(Request $request){
        $id = $this->getUser() -> getId();

        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('PCVDemoBundle:User')->find($id);
        $datos = $em->getRepository('PCVDemoBundle:Datos')->find($id);

        $toEmail = $request->get('_to_email');
        $toEmail = trim($toEmail,',');
        $asunto = $request->get('_asunto');
        $msg = $request->get('_msg');
        $correos = split(",", $toEmail);

       
        $imagen = $user->getImagenUrl();
        if(empty($imagen)){
            $imagen = 'bundles/pcvdemo/image/noimagen.png';
        }else{
            $imagen = 'img/profile/'.$imagen;
        }

        foreach ($correos as $correo) {
            $this->sendMessage($imagen,$user->getName(),$user->getResumenUrl(),$user->getEmail(),$correo,$asunto,$msg);
        }
        return $this->redirect($this->generateUrl('_private_resume_profile'));  
    }

    
    private function sendMessage($imagen,$name,$url, $email,$toEmail,$subject,$message){
        $message = \Swift_Message::newInstance()
                ->setSubject('TuCV -'.$subject)
                ->setFrom('contacto@tucv.cl')
                ->setTo($toEmail)
                ->setBody(
                    $this->renderView(
                        'PCVDemoBundle:Contenido:email_mail.html.twig',
                        array('imagen'=> $imagen,'name'=> $name,'email'=> $email,'message'=> $message,'url'=> $url)
                    ),'text/html'
                );
                $this->get('mailer')->send($message);
    }


}
