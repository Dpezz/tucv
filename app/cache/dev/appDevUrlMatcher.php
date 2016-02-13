<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // pcv_demo_home_home
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'pcv_demo_home_home');
            }

            return array (  '_controller' => 'PCV\\DemoBundle\\Controller\\HomeController::homeAction',  '_route' => 'pcv_demo_home_home',);
        }

        // _demo_login
        if ($pathinfo === '/inicio') {
            return array (  '_controller' => 'PCV\\DemoBundle\\Controller\\HomeController::homeAction',  '_route' => '_demo_login',);
        }

        // _demo_message
        if ($pathinfo === '/message') {
            return array (  '_controller' => 'PCV\\DemoBundle\\Controller\\HomeController::messageAction',  '_route' => '_demo_message',);
        }

        // pcv_demo_home_createuser
        if ($pathinfo === '/create_user') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_pcv_demo_home_createuser;
            }

            return array (  '_controller' => 'PCV\\DemoBundle\\Controller\\HomeController::createUser',  '_route' => 'pcv_demo_home_createuser',);
        }
        not_pcv_demo_home_createuser:

        if (0 === strpos($pathinfo, '/private/log')) {
            // _security_check
            if ($pathinfo === '/private/login_check') {
                return array (  '_controller' => 'PCV\\DemoBundle\\Controller\\HomeController::securityCheckAction',  '_route' => '_security_check',);
            }

            // _demo_logout
            if ($pathinfo === '/private/logout') {
                return array (  '_controller' => 'PCV\\DemoBundle\\Controller\\HomeController::logoutAction',  '_route' => '_demo_logout',);
            }

        }

        // pcv_demo_home_findemail
        if (0 === strpos($pathinfo, '/find') && preg_match('#^/find/(?P<email>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_pcv_demo_home_findemail;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pcv_demo_home_findemail')), array (  '_controller' => 'PCV\\DemoBundle\\Controller\\HomeController::findEmail',));
        }
        not_pcv_demo_home_findemail:

        // _count_cv
        if ($pathinfo === '/count_cv') {
            return array (  '_controller' => 'PCV\\DemoBundle\\Controller\\HomeController::countCV',  '_route' => '_count_cv',);
        }

        if (0 === strpos($pathinfo, '/private')) {
            if (0 === strpos($pathinfo, '/private/edit_')) {
                // _edit_cuenta
                if ($pathinfo === '/private/edit_cuenta') {
                    return array (  '_controller' => 'PCV\\DemoBundle\\Controller\\EditController::editCuentaAction',  '_route' => '_edit_cuenta',);
                }

                // _edit_email
                if ($pathinfo === '/private/edit_email') {
                    return array (  '_controller' => 'PCV\\DemoBundle\\Controller\\EditController::editEmailAction',  '_route' => '_edit_email',);
                }

                // _edit_password
                if ($pathinfo === '/private/edit_password') {
                    return array (  '_controller' => 'PCV\\DemoBundle\\Controller\\EditController::editPasswordAction',  '_route' => '_edit_password',);
                }

                // _edit_datos
                if ($pathinfo === '/private/edit_datos') {
                    return array (  '_controller' => 'PCV\\DemoBundle\\Controller\\EditController::editDatosAction',  '_route' => '_edit_datos',);
                }

                // _edit_bio
                if ($pathinfo === '/private/edit_bio') {
                    return array (  '_controller' => 'PCV\\DemoBundle\\Controller\\EditController::editBioAction',  '_route' => '_edit_bio',);
                }

                // _edit_profesion
                if ($pathinfo === '/private/edit_profesion') {
                    return array (  '_controller' => 'PCV\\DemoBundle\\Controller\\EditController::editProfesionAction',  '_route' => '_edit_profesion',);
                }

            }

            // _new_idioma
            if ($pathinfo === '/private/new_idioma') {
                return array (  '_controller' => 'PCV\\DemoBundle\\Controller\\EditController::newIdiomaAction',  '_route' => '_new_idioma',);
            }

            // _edit_idioma
            if ($pathinfo === '/private/edit_idioma') {
                return array (  '_controller' => 'PCV\\DemoBundle\\Controller\\EditController::editIdiomaAction',  '_route' => '_edit_idioma',);
            }

            // _new_conocimiento
            if ($pathinfo === '/private/new_conocimiento') {
                return array (  '_controller' => 'PCV\\DemoBundle\\Controller\\EditController::newConocimientoAction',  '_route' => '_new_conocimiento',);
            }

            if (0 === strpos($pathinfo, '/private/edit_')) {
                // _edit_conocimiento
                if ($pathinfo === '/private/edit_conocimiento') {
                    return array (  '_controller' => 'PCV\\DemoBundle\\Controller\\EditController::editConocimientoAction',  '_route' => '_edit_conocimiento',);
                }

                // _edit_habilidad
                if ($pathinfo === '/private/edit_habilidad') {
                    return array (  '_controller' => 'PCV\\DemoBundle\\Controller\\EditController::editHabilidadAction',  '_route' => '_edit_habilidad',);
                }

                // _edit_red
                if ($pathinfo === '/private/edit_red') {
                    return array (  '_controller' => 'PCV\\DemoBundle\\Controller\\EditController::editRedAction',  '_route' => '_edit_red',);
                }

            }

            // _new_experiencia
            if ($pathinfo === '/private/new_experiencia') {
                return array (  '_controller' => 'PCV\\DemoBundle\\Controller\\EditController::newExperienciaAction',  '_route' => '_new_experiencia',);
            }

            // _edit_experiencia
            if ($pathinfo === '/private/edit_experiencia') {
                return array (  '_controller' => 'PCV\\DemoBundle\\Controller\\EditController::editExperienciaAction',  '_route' => '_edit_experiencia',);
            }

            // _new_educacion
            if ($pathinfo === '/private/new_educacion') {
                return array (  '_controller' => 'PCV\\DemoBundle\\Controller\\EditController::newEducacionAction',  '_route' => '_new_educacion',);
            }

            // _edit_educacion
            if ($pathinfo === '/private/edit_educacion') {
                return array (  '_controller' => 'PCV\\DemoBundle\\Controller\\EditController::editEducacionAction',  '_route' => '_edit_educacion',);
            }

            // _new_premio
            if ($pathinfo === '/private/new_premio') {
                return array (  '_controller' => 'PCV\\DemoBundle\\Controller\\EditController::newPremioAction',  '_route' => '_new_premio',);
            }

            // _edit_premios
            if ($pathinfo === '/private/edit_premios') {
                return array (  '_controller' => 'PCV\\DemoBundle\\Controller\\EditController::editPremiosAction',  '_route' => '_edit_premios',);
            }

            // _new_certificado
            if ($pathinfo === '/private/new_certificado') {
                return array (  '_controller' => 'PCV\\DemoBundle\\Controller\\EditController::newCertificadoAction',  '_route' => '_new_certificado',);
            }

            if (0 === strpos($pathinfo, '/private/edit_')) {
                // _edit_certificados
                if ($pathinfo === '/private/edit_certificados') {
                    return array (  '_controller' => 'PCV\\DemoBundle\\Controller\\EditController::editCertificadosAction',  '_route' => '_edit_certificados',);
                }

                // _edit_imagen
                if ($pathinfo === '/private/edit_image') {
                    return array (  '_controller' => 'PCV\\DemoBundle\\Controller\\EditController::editImagenAction',  '_route' => '_edit_imagen',);
                }

            }

            // _delete_image
            if ($pathinfo === '/private/delete_image') {
                return array (  '_controller' => 'PCV\\DemoBundle\\Controller\\EditController::deleteImageAction',  '_route' => '_delete_image',);
            }

            // _edit_video
            if ($pathinfo === '/private/edit_video') {
                return array (  '_controller' => 'PCV\\DemoBundle\\Controller\\EditController::editVideoAction',  '_route' => '_edit_video',);
            }

            // _delete_video
            if ($pathinfo === '/private/delete_video') {
                return array (  '_controller' => 'PCV\\DemoBundle\\Controller\\EditController::deleteVideoAction',  '_route' => '_delete_video',);
            }

            // _new_project
            if ($pathinfo === '/private/new_project') {
                return array (  '_controller' => 'PCV\\DemoBundle\\Controller\\EditController::newProjectAction',  '_route' => '_new_project',);
            }

            // _edit_project
            if ($pathinfo === '/private/edit_project') {
                return array (  '_controller' => 'PCV\\DemoBundle\\Controller\\EditController::editProjectAction',  '_route' => '_edit_project',);
            }

            // _send_email
            if ($pathinfo === '/private/send_email') {
                return array (  '_controller' => 'PCV\\DemoBundle\\Controller\\EditController::sendEmailAction',  '_route' => '_send_email',);
            }

            // _private_secured_account
            if ($pathinfo === '/private/account') {
                return array (  '_controller' => 'PCV\\DemoBundle\\Controller\\SecuredController::accountAction',  '_route' => '_private_secured_account',);
            }

            // _private_secured_password
            if ($pathinfo === '/private/password') {
                return array (  '_controller' => 'PCV\\DemoBundle\\Controller\\SecuredController::passwordAction',  '_route' => '_private_secured_password',);
            }

        }

        // _secured_resend
        if ($pathinfo === '/resend') {
            return array (  '_controller' => 'PCV\\DemoBundle\\Controller\\SecuredController::resendAction',  '_route' => '_secured_resend',);
        }

        // _private_secured_resend
        if ($pathinfo === '/private/resend') {
            return array (  '_controller' => 'PCV\\DemoBundle\\Controller\\SecuredController::resendAction',  '_route' => '_private_secured_resend',);
        }

        // _edit_resend
        if ($pathinfo === '/edit_resend') {
            return array (  '_controller' => 'PCV\\DemoBundle\\Controller\\SecuredController::editResendAction',  '_route' => '_edit_resend',);
        }

        // _secured_restore
        if (0 === strpos($pathinfo, '/restore') && preg_match('#^/restore/(?P<codigo>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => '_secured_restore')), array (  '_controller' => 'PCV\\DemoBundle\\Controller\\SecuredController::restoreAction',));
        }

        // _search_public
        if ($pathinfo === '/search') {
            return array (  '_controller' => 'PCV\\DemoBundle\\Controller\\SearchController::searchAction',  '_route' => '_search_public',);
        }

        // _search_private
        if ($pathinfo === '/private/search') {
            return array (  '_controller' => 'PCV\\DemoBundle\\Controller\\SearchController::searchAction',  '_route' => '_search_private',);
        }

        // _search_advanced_public
        if ($pathinfo === '/search_advanced') {
            return array (  '_controller' => 'PCV\\DemoBundle\\Controller\\SearchController::searchAdvAction',  '_route' => '_search_advanced_public',);
        }

        // _search_advanced_private
        if ($pathinfo === '/private/search_advanced') {
            return array (  '_controller' => 'PCV\\DemoBundle\\Controller\\SearchController::searchAdvAction',  '_route' => '_search_advanced_private',);
        }

        // _search_idioma_public
        if ($pathinfo === '/search_idioma') {
            return array (  '_controller' => 'PCV\\DemoBundle\\Controller\\SearchController::searchIdiomaAction',  '_route' => '_search_idioma_public',);
        }

        // _search_idioma_private
        if ($pathinfo === '/private/search_idioma') {
            return array (  '_controller' => 'PCV\\DemoBundle\\Controller\\SearchController::searchIdiomaAction',  '_route' => '_search_idioma_private',);
        }

        // _search_skill_public
        if ($pathinfo === '/search_skill') {
            return array (  '_controller' => 'PCV\\DemoBundle\\Controller\\SearchController::searchSkillAction',  '_route' => '_search_skill_public',);
        }

        // _search_skill_private
        if ($pathinfo === '/private/search_skill') {
            return array (  '_controller' => 'PCV\\DemoBundle\\Controller\\SearchController::searchSkillAction',  '_route' => '_search_skill_private',);
        }

        // _search_competencia_public
        if ($pathinfo === '/search_competencia') {
            return array (  '_controller' => 'PCV\\DemoBundle\\Controller\\SearchController::searchCompetenciaAction',  '_route' => '_search_competencia_public',);
        }

        // _search_competencia_private
        if ($pathinfo === '/private/search_competencia') {
            return array (  '_controller' => 'PCV\\DemoBundle\\Controller\\SearchController::searchCompetenciaAction',  '_route' => '_search_competencia_private',);
        }

        // _load_city
        if ($pathinfo === '/search_city') {
            return array (  '_controller' => 'PCV\\DemoBundle\\Controller\\SearchController::loadCity',  '_route' => '_load_city',);
        }

        if (0 === strpos($pathinfo, '/private')) {
            // pcv_demo_resumen_resumen
            if ($pathinfo === '/private') {
                return array (  '_controller' => 'PCV\\DemoBundle\\Controller\\ResumenController::resumenAction',  '_route' => 'pcv_demo_resumen_resumen',);
            }

            // _private_resume_profile
            if (rtrim($pathinfo, '/') === '/private') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_private_resume_profile');
                }

                return array (  '_controller' => 'PCV\\DemoBundle\\Controller\\ResumenController::resumenAction',  '_route' => '_private_resume_profile',);
            }

        }

        // _resume_public
        if (preg_match('#^/(?P<url>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => '_resume_public')), array (  '_controller' => 'PCV\\DemoBundle\\Controller\\ResumenController::resumenPublicAction',));
        }

        // _private_resume_public
        if (0 === strpos($pathinfo, '/private') && preg_match('#^/private/(?P<url>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => '_private_resume_public')), array (  '_controller' => 'PCV\\DemoBundle\\Controller\\ResumenController::resumenPublicAction',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
