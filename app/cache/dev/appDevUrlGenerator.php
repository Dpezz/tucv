<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appDevUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes = array(
        '_wdt' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:toolbarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_wdt',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_bar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchBarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search_bar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_purge' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:purgeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/purge',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_info' => array (  0 =>   array (    0 => 'about',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:infoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'about',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler/info',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_phpinfo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/phpinfo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_results' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchResultsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search/results',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_router' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.router:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/router',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception_css' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:cssAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception.css',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_configurator_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_configurator/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_configurator_step' => array (  0 =>   array (    0 => 'index',  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'index',    ),    1 =>     array (      0 => 'text',      1 => '/_configurator/step',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_configurator_final' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_configurator/final',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_twig_error_test' => array (  0 =>   array (    0 => 'code',    1 => '_format',  ),  1 =>   array (    '_controller' => 'twig.controller.preview_error:previewErrorPageAction',    '_format' => 'html',  ),  2 =>   array (    'code' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => '[^/]++',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'code',    ),    2 =>     array (      0 => 'text',      1 => '/_error',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pcv_demo_home_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PCV\\DemoBundle\\Controller\\HomeController::homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_demo_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PCV\\DemoBundle\\Controller\\HomeController::homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/inicio',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_demo_message' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PCV\\DemoBundle\\Controller\\HomeController::messageAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/message',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pcv_demo_home_createuser' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PCV\\DemoBundle\\Controller\\HomeController::createUser',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/create_user',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_security_check' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PCV\\DemoBundle\\Controller\\HomeController::securityCheckAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/private/login_check',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_demo_logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PCV\\DemoBundle\\Controller\\HomeController::logoutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/private/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pcv_demo_home_findemail' => array (  0 =>   array (    0 => 'email',  ),  1 =>   array (    '_controller' => 'PCV\\DemoBundle\\Controller\\HomeController::findEmail',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'email',    ),    1 =>     array (      0 => 'text',      1 => '/find',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_count_cv' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PCV\\DemoBundle\\Controller\\HomeController::countCV',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/count_cv',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_edit_cuenta' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PCV\\DemoBundle\\Controller\\EditController::editCuentaAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/private/edit_cuenta',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_edit_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PCV\\DemoBundle\\Controller\\EditController::editEmailAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/private/edit_email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_edit_password' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PCV\\DemoBundle\\Controller\\EditController::editPasswordAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/private/edit_password',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_edit_datos' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PCV\\DemoBundle\\Controller\\EditController::editDatosAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/private/edit_datos',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_edit_bio' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PCV\\DemoBundle\\Controller\\EditController::editBioAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/private/edit_bio',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_edit_profesion' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PCV\\DemoBundle\\Controller\\EditController::editProfesionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/private/edit_profesion',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_new_idioma' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PCV\\DemoBundle\\Controller\\EditController::newIdiomaAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/private/new_idioma',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_edit_idioma' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PCV\\DemoBundle\\Controller\\EditController::editIdiomaAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/private/edit_idioma',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_new_conocimiento' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PCV\\DemoBundle\\Controller\\EditController::newConocimientoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/private/new_conocimiento',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_edit_conocimiento' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PCV\\DemoBundle\\Controller\\EditController::editConocimientoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/private/edit_conocimiento',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_edit_habilidad' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PCV\\DemoBundle\\Controller\\EditController::editHabilidadAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/private/edit_habilidad',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_edit_red' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PCV\\DemoBundle\\Controller\\EditController::editRedAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/private/edit_red',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_new_experiencia' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PCV\\DemoBundle\\Controller\\EditController::newExperienciaAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/private/new_experiencia',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_edit_experiencia' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PCV\\DemoBundle\\Controller\\EditController::editExperienciaAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/private/edit_experiencia',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_new_educacion' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PCV\\DemoBundle\\Controller\\EditController::newEducacionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/private/new_educacion',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_edit_educacion' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PCV\\DemoBundle\\Controller\\EditController::editEducacionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/private/edit_educacion',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_new_premio' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PCV\\DemoBundle\\Controller\\EditController::newPremioAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/private/new_premio',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_edit_premios' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PCV\\DemoBundle\\Controller\\EditController::editPremiosAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/private/edit_premios',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_new_certificado' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PCV\\DemoBundle\\Controller\\EditController::newCertificadoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/private/new_certificado',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_edit_certificados' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PCV\\DemoBundle\\Controller\\EditController::editCertificadosAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/private/edit_certificados',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_edit_imagen' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PCV\\DemoBundle\\Controller\\EditController::editImagenAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/private/edit_image',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_delete_image' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PCV\\DemoBundle\\Controller\\EditController::deleteImageAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/private/delete_image',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_edit_video' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PCV\\DemoBundle\\Controller\\EditController::editVideoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/private/edit_video',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_delete_video' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PCV\\DemoBundle\\Controller\\EditController::deleteVideoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/private/delete_video',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_new_project' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PCV\\DemoBundle\\Controller\\EditController::newProjectAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/private/new_project',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_edit_project' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PCV\\DemoBundle\\Controller\\EditController::editProjectAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/private/edit_project',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_send_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PCV\\DemoBundle\\Controller\\EditController::sendEmailAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/private/send_email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_private_secured_account' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PCV\\DemoBundle\\Controller\\SecuredController::accountAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/private/account',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_private_secured_password' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PCV\\DemoBundle\\Controller\\SecuredController::passwordAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/private/password',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_secured_resend' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PCV\\DemoBundle\\Controller\\SecuredController::resendAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resend',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_private_secured_resend' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PCV\\DemoBundle\\Controller\\SecuredController::resendAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/private/resend',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_edit_resend' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PCV\\DemoBundle\\Controller\\SecuredController::editResendAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit_resend',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_secured_restore' => array (  0 =>   array (    0 => 'codigo',  ),  1 =>   array (    '_controller' => 'PCV\\DemoBundle\\Controller\\SecuredController::restoreAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'codigo',    ),    1 =>     array (      0 => 'text',      1 => '/restore',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_search_public' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PCV\\DemoBundle\\Controller\\SearchController::searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_search_private' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PCV\\DemoBundle\\Controller\\SearchController::searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/private/search',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_search_advanced_public' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PCV\\DemoBundle\\Controller\\SearchController::searchAdvAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search_advanced',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_search_advanced_private' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PCV\\DemoBundle\\Controller\\SearchController::searchAdvAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/private/search_advanced',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_search_idioma_public' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PCV\\DemoBundle\\Controller\\SearchController::searchIdiomaAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search_idioma',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_search_idioma_private' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PCV\\DemoBundle\\Controller\\SearchController::searchIdiomaAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/private/search_idioma',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_search_skill_public' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PCV\\DemoBundle\\Controller\\SearchController::searchSkillAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search_skill',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_search_skill_private' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PCV\\DemoBundle\\Controller\\SearchController::searchSkillAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/private/search_skill',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_search_competencia_public' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PCV\\DemoBundle\\Controller\\SearchController::searchCompetenciaAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search_competencia',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_search_competencia_private' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PCV\\DemoBundle\\Controller\\SearchController::searchCompetenciaAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/private/search_competencia',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_load_city' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PCV\\DemoBundle\\Controller\\SearchController::loadCity',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search_city',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pcv_demo_resumen_resumen' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PCV\\DemoBundle\\Controller\\ResumenController::resumenAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/private',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_private_resume_profile' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PCV\\DemoBundle\\Controller\\ResumenController::resumenAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/private/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_resume_public' => array (  0 =>   array (    0 => 'url',  ),  1 =>   array (    '_controller' => 'PCV\\DemoBundle\\Controller\\ResumenController::resumenPublicAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'url',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_private_resume_public' => array (  0 =>   array (    0 => 'url',  ),  1 =>   array (    '_controller' => 'PCV\\DemoBundle\\Controller\\ResumenController::resumenPublicAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'url',    ),    1 =>     array (      0 => 'text',      1 => '/private',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}