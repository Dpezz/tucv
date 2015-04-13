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
use PCV\DemoBundle\Entity\Datos;



class SecuredController extends Controller
{
	/**
     * @Route("/private/account", name="_private_secured_account")
     * @Template()
     */
    public function accountAction(Request $request){
        //Asignar el FLAG
        if(!$request->getSession()->get('flag'))
        {$request->getSession()->set('flag',-1);}

        $flag = $request->getSession()->get('flag');
        $request->getSession()->set('flag',-1);

        $id = $this->getUser() -> getId();
        //Cargar User
        $user = $this->getDoctrine()->getRepository('PCVDemoBundle:User')->find($id);

        return array(
            'datosU'=>$user,
            'flag'=>$flag
        );
    }

    /**
     * @Route("/private/password", name="_private_secured_password")
     * @Template()
     */
    public function passwordAction(Request $request){
        //Asignar el FLAG
        if(!$request->getSession()->get('flag'))
        {$request->getSession()->set('flag',-1);}

        $flag = $request->getSession()->get('flag');
        $request->getSession()->set('flag',-1);
        
        return array('flag'=>$flag);
    }

    /**
     * @Route("/resend", name="_secured_resend")
     * @Route("/private/resend", name="_private_secured_resend")
     * @Template()
     */
    public function resendAction(Request $request){
        //Asignar el FLAG
        if(!$request->getSession()->get('flag'))
        {$request->getSession()->set('flag',-1);}

        $flag = $request->getSession()->get('flag');
        $request->getSession()->set('flag',-1);
        
        return array('flag'=>$flag);
    }

    /**
     * @Route("/edit_resend", name="_edit_resend")
     */
    public function editResendAction(Request $request){
        try{

            $email = trim($request->get('_email'));
            //$id = $this->getUser() -> getId();

            $em = $this->getDoctrine()->getManager();
            $user = $em->getRepository('PCVDemoBundle:User')->findOneBy(array('email'=>$email));

            if(!$user){
                //Error email no exist
                 $request->getSession()->set('flag',2);
            }else{
                $emailESecured =  password_hash( $email, PASSWORD_BCRYPT);
                if(strpos($emailESecured,'/') !== false){
                    $exist= true;
                    while($exist){
                        $emailESecured =  password_hash( $email, PASSWORD_BCRYPT);
                        if(strpos($emailESecured,'/') === false){
                            //ya no se ecuentra
                            $exist =false;
                        }
                    }
                }

                $message = \Swift_Message::newInstance()
                ->setSubject('tucv - Restablecer tu contraseña')
                ->setFrom('contacto@tucv.cl')
                ->setTo($email)
                ->setBody(
                    $this->renderView(
                        'PCVDemoBundle:Contenido:emailcontenido.html.twig',
                        array('emailSeguro' => $emailESecured, 'email'=>$email,'name'=> $user->getName())
                    ),'text/html'
                    )
                ;
                $this->get('mailer')->send($message);
                //exito
                $request->getSession()->set('flag',1);
            }
        }catch(exception $e){
            //Error email
            $request->getSession()->set('flag',0);
        }

        if($request->getSession()->get('name')){
            return $this->redirect($this->generateUrl('_private_secured_resend'));
        }else{
            return $this->redirect($this->generateUrl('_secured_resend'));
        }
    }

    /**
     * @Route("/restore/{codigo}", name="_secured_restore")
     * @Template()
     */
    public function restoreAction($codigo, Request $request)
    {
        if($request->isMethod('POST')){
            try{
                $email = trim($request->get('_email'));
                //$codigo = trim($request->get('_codigo'));

                $em = $this->getDoctrine()->getManager();
                $user = $em->getRepository('PCVDemoBundle:User')->findOneBy(array('email'=>$email));

                if(!$user){
                    //Error email no exist
                     $request->getSession()->set('flag',2);
                }else{

                    if(password_verify($email, $codigo))
                    {
                        $user->setPassword($request->get('_passwordNew'));
                        $em->flush();
                        $this->sendMessage($user->getName(),$email);
                        $request->getSession()->set('flag',1);
                    }else{
                        //Error email
                        $request->getSession()->set('flag',2);
                    }
                }
            }catch(exception $e){
                //Error email
                $request->getSession()->set('flag',0);
            }
        }

        //Asignar el FLAG
        if(!$request->getSession()->get('flag'))
        {$request->getSession()->set('flag',-1);}

        $flag = $request->getSession()->get('flag');
        $request->getSession()->set('flag',-1);
        
        return array('flag'=>$flag,'codigo'=>$codigo);
    }

   
    private function sendMessage($name, $email){
        $message = \Swift_Message::newInstance()
                ->setSubject('tucv - Cambio de Contraseña!')
                ->setFrom('contacto@tucv.cl')
                ->setTo($email)
                ->setBody(
                    $this->renderView(
                        'PCVDemoBundle:Contenido:emailpassword.html.twig',
                        array('name'=> $name,'email'=> $email)
                    ),'text/html'
                );
                $this->get('mailer')->send($message);
                
    }

}
  