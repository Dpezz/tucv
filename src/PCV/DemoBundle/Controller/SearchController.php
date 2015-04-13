<?php

namespace PCV\DemoBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

//use Symfony\Component\HttpFoundation\RedirectResponse;
use PCV\DemoBundle\Entity\User;
use PCV\DemoBundle\Repository\Ciudades;


class SearchController extends Controller
{
    /**
    * @Route("/search", name="_search_public")
    * @Route("/private/search", name="_search_private")
    * @Template()
    */
    public function searchAction(Request $request){
        $page = $request->query->get('page');

        if($request->query->get('search')){
            $name = $request->query->get('search');
        }else{
            $name = $request->get('_search');
        }
        
       
            //$name = $request->getSession()->get('search');
       
            //$name = $request->get('_search');

            //return new Response($name);
            //creamos una cookie con el name
            //$request->getSession()->set('search', $name);
        

        $region = $categoria = $sexo = $conocimientos ='';


        $em = $this->getDoctrine()->getManager();
        $user = $em
        ->createQuery('SELECT u.imagenUrl,u.username, u.plastname, u.mlastname, u.resumenUrl, d.profesion 
            FROM PCVDemoBundle:User u INNER JOIN PCVDemoBundle:Datos d 
            WHERE u.id = d.id and u.name LIKE :name')
        ->setParameter('name', '%'.$name.'%')
        ->setFirstResult($page*20)
        ->setMaxResults(21)
        ->getArrayResult();


        return array(
            'datosU'=>$user,
            'cantidad'=>count($user),
            'page'=>$page,
            'region'=>$region,
            'categoria'=>$categoria,
            'sexo'=>$sexo,
            'conocimientos'=>$conocimientos,
            'type'=> 0,
            'search'=>$name
        );
    }

    /**
    * @Route("/search_advanced", name="_search_advanced_public")
    * @Route("/private/search_advanced", name="_search_advanced_private")
    */
    public function searchAdvAction(Request $request){
        $region = $request->get('_region');
        $categoria = $request->get('_category');
        $sexo = $request->get('_sexo');
        $conocimientos = $request->get('_conocimientos');
        $page = $request->query->get('page');

        $search = $region.'='.$categoria.'='.$sexo.'='.$conocimientos;

        if($request->query->get('search')){
            $search = $request->get('search');
            $lista = explode('=', $search);
            $region = $lista[0];
            $categoria = $lista[1];
            $sexo = $lista[2];
            $conocimientos = $lista[3];

        }
       

        if(empty($conocimientos)){
            $user = $this->search_adv($region,$categoria,$sexo,$page);
        }else{
            $id_skills = $this->search_skill($conocimientos);
            $user = $this->search_adv_all($region,$categoria,$sexo,$id_skills,$page);
        }
        
        return $this->render('PCVDemoBundle:Search:search.html.twig',
            array(
            'datosU'=>$user,
            'cantidad'=>count($user),
            'page'=>$page,
            'region'=>$region,
            'categoria'=>$categoria,
            'sexo'=>$sexo,
            'conocimientos'=>$conocimientos,
            'type'=>4,
            'search'=>$search
            )
        );
    }

    /**
    * @Route("/search_idioma", name="_search_idioma_public")
    * @Route("/private/search_idioma", name="_search_idioma_private")
    */
    public function searchIdiomaAction(Request $request){
        $page = $request->query->get('page');
        $search = $request->query->get('search');

        $region = $categoria = $sexo = $conocimientos ='';

        $em = $this->getDoctrine()->getManager();
        $lista = $em
        ->createQuery(
            'SELECT distinct i.id_user FROM PCVDemoBundle:Idiomas i 
            where i.name Like :idioma'
            )
        ->setParameter('idioma', '%'.$search.'%')
        ->getArrayResult();

        $cadena = '';
        
        foreach ($lista as $value) {
            $cadena .= $value['id_user'].',';
        }
        $cadena = rtrim($cadena,",");

        $lista_id = array_change_key_case ( explode(',',$cadena), CASE_UPPER);

        $user = $em
        ->createQuery(
            'SELECT u.imagenUrl,u.username, u.plastname, u.mlastname, u.resumenUrl, d.profesion 
            FROM PCVDemoBundle:User u INNER JOIN PCVDemoBundle:Datos d 
            WHERE u.id = d.id and u.id IN (:id)'
            )
        ->setParameter('id', $lista_id)
        ->setFirstResult($page*20)
        ->setMaxResults(21)
        ->getArrayResult();

        return $this->render('PCVDemoBundle:Search:search.html.twig',
         array(
            'datosU'=>$user,
            'cantidad'=>count($user),
            'page'=>$page,
            'region'=>$region,
            'categoria'=>$categoria,
            'sexo'=>$sexo,
            'conocimientos'=>$conocimientos,
            'type'=>1,
            'search'=>$search
        ));
    }

    /**
    * @Route("/search_skill", name="_search_skill_public")
    * @Route("/private/search_skill", name="_search_skill_private")
    */
    public function searchSkillAction(Request $request){
        $page = $request->query->get('page');
        $search = $request->query->get('search');

        $region = $categoria = $sexo = $conocimientos ='';

        $em = $this->getDoctrine()->getManager();
        $lista = $em
        ->createQuery(
            'SELECT distinct c.id_user FROM  PCVDemoBundle:Conocimientos c 
            where c.name Like :skill'
            )
        ->setParameter('skill', '%'.$search.'%')
        ->getArrayResult();

        $cadena = '';
        
        foreach ($lista as $value) {
            $cadena .= $value['id_user'].',';
        }
        $cadena = rtrim($cadena,",");
        $lista_id = array_change_key_case ( explode(',',$cadena), CASE_UPPER);


        $user = $em
        ->createQuery('SELECT u.imagenUrl,u.username, u.plastname, u.mlastname, u.resumenUrl, d.profesion 
            FROM PCVDemoBundle:User u INNER JOIN PCVDemoBundle:Datos d 
            WHERE u.id = d.id and u.id IN (:id)')
        ->setParameter('id', $lista_id)
        ->setFirstResult($page*20)
        ->setMaxResults(21)
        ->getArrayResult();

        return $this->render('PCVDemoBundle:Search:search.html.twig',
         array(
            'datosU'=>$user,
            'cantidad'=>count($user),
            'page'=>$page,
            'region'=>$region,
            'categoria'=>$categoria,
            'sexo'=>$sexo,
            'conocimientos'=>$conocimientos,
            'type'=>2,
            'search'=>$search
        ));
    }

    /**
    * @Route("/search_competencia", name="_search_competencia_public")
    * @Route("/private/search_competencia", name="_search_competencia_private")
    */
    public function searchCompetenciaAction(Request $request){
        $page = $request->query->get('page');
        $search = $request->query->get('search');

        $region = $categoria = $sexo = $conocimientos ='';

        $em = $this->getDoctrine()->getManager();
        
        $user = $em
        ->createQuery(
            'SELECT u.imagenUrl,u.username, u.plastname, u.mlastname, u.resumenUrl, d.profesion 
            FROM PCVDemoBundle:User u INNER JOIN PCVDemoBundle:Datos d 
            WHERE u.id = d.id and d.habilidades Like :competencia')
        ->setParameter('competencia', '%'.$search.'%')
        ->setFirstResult($page*20)
        ->setMaxResults(21)
        ->getArrayResult();

        return $this->render('PCVDemoBundle:Search:search.html.twig',
         array(
            'datosU'=>$user,
            'cantidad'=>count($user),
            'page'=>$page,
            'region'=>$region,
            'categoria'=>$categoria,
            'sexo'=>$sexo,
            'conocimientos'=>$conocimientos,
            'type'=>3,
            'search'=>$search
        ));
    }

    private function search_skill($skill){
        $skills[] = array_change_key_case (explode(',', $skill),CASE_UPPER) ;

        $em = $this->getDoctrine()->getManager();

        $list = $em
        ->createQuery(
            'SELECT distinct c.id_user FROM PCVDemoBundle:Conocimientos c 
            where c.name IN (:skill)'
            )
        ->setParameter('skill', $skills)
        ->getArrayResult();

        $cadena = '';
        
        foreach ($list as $value) {
            $cadena .= $value['id_user'].',';
        }
        $cadena = rtrim($cadena,",");
        $lista = array_change_key_case ( explode(',',$cadena), CASE_UPPER);

        return $lista;
    }

    private function search_adv_all($region, $categoria, $sexo, $skill, $page){
        $em = $this->getDoctrine()->getManager();
        $user = $em
        ->createQuery(
            'SELECT u.imagenUrl,u.username, u.plastname, u.mlastname, u.resumenUrl, d.profesion 
            FROM PCVDemoBundle:User u INNER JOIN PCVDemoBundle:Datos d 
            where u.id = d.id and d.region Like :region and d.sex Like :sexo and d.categoriaProfesion Like :categoria and u.id IN (:id)'
            )
        ->setParameter('region', '%'.$region.'%')
        ->setParameter('sexo', '%'.$sexo.'%')
        ->setParameter('categoria', '%'.$categoria.'%')
        ->setParameter('id', $skill)
        ->setFirstResult($page*20)
        ->setMaxResults(21)
        ->getArrayResult();

        return $user; 
    }

    private function search_adv($region, $categoria, $sexo, $page){
        $em = $this->getDoctrine()->getManager();
        $user = $em
        ->createQuery(
            'SELECT u.imagenUrl,u.username, u.plastname, u.mlastname, u.resumenUrl, d.profesion 
            FROM PCVDemoBundle:User u INNER JOIN PCVDemoBundle:Datos d 
            where u.id = d.id and d.region Like :region and d.sex Like :sexo and d.categoriaProfesion Like :categoria'
            )
        ->setParameter('region', '%'.$region.'%')
        ->setParameter('sexo', '%'.$sexo.'%')
        ->setParameter('categoria', '%'.$categoria.'%')
        ->setFirstResult($page*20)
        ->setMaxResults(21)
        ->getArrayResult();

        return $user; 
    }

    /**
     * @Route("/search_city", name="_load_city")
     */
    public function loadCity(Request $request){
        $region = $request->get('region_');
        $ciudad = new Ciudades();

        switch ($region) {
            case 'Arica y Parinacota':
                $ciudades = $ciudad->getArica();
                break;
            case 'Tarapacá':
                $ciudades = $ciudad->getTarapaca();
                break;
            case 'Antofagasta':
                $ciudades = $ciudad->getAntofagasta();
                break;
            case 'Atacama':
                $ciudades = $ciudad->getAtacama();
                break;
            case 'Coquimbo':
                $ciudades = $ciudad->getCoquimbo();
                break;
            case 'Valparaíso':
                $ciudades = $ciudad->getValparaiso();
                break;
            case 'Ohiggins':
                $ciudades = $ciudad->getOhiggins();
                break;
            case 'Maule':
                $ciudades = $ciudad->getMaule();
                break;
            case 'Bío Bío':
                $ciudades = $ciudad->getBioBio();
                break;
            case 'Araucanía':
                $ciudades = $ciudad->getAraucania();
                break;
            case 'Los Ríos':
                $ciudades = $ciudad->getLosRios();
                break;
            case 'Los Lagos':
                $ciudades = $ciudad->getLosLagos();
                break;
            case 'Aysen':
                $ciudades = $ciudad->getAysen();
                break;
            case 'Magallanes y Antártica':
                $ciudades = $ciudad->getMagallanes();
                break;
            case 'Metropolitana':
                $ciudades = $ciudad->getMetropolitana();
                break;
        }
        return new Response($ciudades);
    }
}