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

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
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

        }

        if (0 === strpos($pathinfo, '/unad/escuela')) {
            // escuela
            if (rtrim($pathinfo, '/') === '/unad/escuela') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_escuela;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'escuela');
                }

                return array (  '_controller' => 'Admin\\UnadBundle\\Controller\\EscuelaController::indexAction',  '_route' => 'escuela',);
            }
            not_escuela:

            // escuela_create
            if ($pathinfo === '/unad/escuela/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_escuela_create;
                }

                return array (  '_controller' => 'Admin\\UnadBundle\\Controller\\EscuelaController::createAction',  '_route' => 'escuela_create',);
            }
            not_escuela_create:

            // escuela_new
            if ($pathinfo === '/unad/escuela/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_escuela_new;
                }

                return array (  '_controller' => 'Admin\\UnadBundle\\Controller\\EscuelaController::newAction',  '_route' => 'escuela_new',);
            }
            not_escuela_new:

            // escuela_show
            if (preg_match('#^/unad/escuela/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_escuela_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'escuela_show')), array (  '_controller' => 'Admin\\UnadBundle\\Controller\\EscuelaController::showAction',));
            }
            not_escuela_show:

            // escuela_edit
            if (preg_match('#^/unad/escuela/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_escuela_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'escuela_edit')), array (  '_controller' => 'Admin\\UnadBundle\\Controller\\EscuelaController::editAction',));
            }
            not_escuela_edit:

            // escuela_update
            if (preg_match('#^/unad/escuela/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_escuela_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'escuela_update')), array (  '_controller' => 'Admin\\UnadBundle\\Controller\\EscuelaController::updateAction',));
            }
            not_escuela_update:

            // escuela_delete
            if (preg_match('#^/unad/escuela/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_escuela_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'escuela_delete')), array (  '_controller' => 'Admin\\UnadBundle\\Controller\\EscuelaController::deleteAction',));
            }
            not_escuela_delete:

        }

        if (0 === strpos($pathinfo, '/zona')) {
            // zona
            if (rtrim($pathinfo, '/') === '/zona') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_zona;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'zona');
                }

                return array (  '_controller' => 'Admin\\UnadBundle\\Controller\\ZonaController::indexAction',  '_route' => 'zona',);
            }
            not_zona:

            // zona_create
            if ($pathinfo === '/zona/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_zona_create;
                }

                return array (  '_controller' => 'Admin\\UnadBundle\\Controller\\ZonaController::createAction',  '_route' => 'zona_create',);
            }
            not_zona_create:

            // zona_new
            if ($pathinfo === '/zona/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_zona_new;
                }

                return array (  '_controller' => 'Admin\\UnadBundle\\Controller\\ZonaController::newAction',  '_route' => 'zona_new',);
            }
            not_zona_new:

            // zona_show
            if (preg_match('#^/zona/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_zona_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'zona_show')), array (  '_controller' => 'Admin\\UnadBundle\\Controller\\ZonaController::showAction',));
            }
            not_zona_show:

            // zona_edit
            if (preg_match('#^/zona/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_zona_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'zona_edit')), array (  '_controller' => 'Admin\\UnadBundle\\Controller\\ZonaController::editAction',));
            }
            not_zona_edit:

            // zona_update
            if (preg_match('#^/zona/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_zona_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'zona_update')), array (  '_controller' => 'Admin\\UnadBundle\\Controller\\ZonaController::updateAction',));
            }
            not_zona_update:

            // zona_delete
            if (preg_match('#^/zona/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_zona_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'zona_delete')), array (  '_controller' => 'Admin\\UnadBundle\\Controller\\ZonaController::deleteAction',));
            }
            not_zona_delete:

        }

        if (0 === strpos($pathinfo, '/centro')) {
            // centro
            if (rtrim($pathinfo, '/') === '/centro') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_centro;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'centro');
                }

                return array (  '_controller' => 'Admin\\UnadBundle\\Controller\\CentroController::indexAction',  '_route' => 'centro',);
            }
            not_centro:

            // centro_create
            if ($pathinfo === '/centro/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_centro_create;
                }

                return array (  '_controller' => 'Admin\\UnadBundle\\Controller\\CentroController::createAction',  '_route' => 'centro_create',);
            }
            not_centro_create:

            // centro_new
            if ($pathinfo === '/centro/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_centro_new;
                }

                return array (  '_controller' => 'Admin\\UnadBundle\\Controller\\CentroController::newAction',  '_route' => 'centro_new',);
            }
            not_centro_new:

            // centro_show
            if (preg_match('#^/centro/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_centro_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'centro_show')), array (  '_controller' => 'Admin\\UnadBundle\\Controller\\CentroController::showAction',));
            }
            not_centro_show:

            // centro_edit
            if (preg_match('#^/centro/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_centro_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'centro_edit')), array (  '_controller' => 'Admin\\UnadBundle\\Controller\\CentroController::editAction',));
            }
            not_centro_edit:

            // centro_update
            if (preg_match('#^/centro/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_centro_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'centro_update')), array (  '_controller' => 'Admin\\UnadBundle\\Controller\\CentroController::updateAction',));
            }
            not_centro_update:

            // centro_delete
            if (preg_match('#^/centro/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_centro_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'centro_delete')), array (  '_controller' => 'Admin\\UnadBundle\\Controller\\CentroController::deleteAction',));
            }
            not_centro_delete:

        }

        if (0 === strpos($pathinfo, '/programa')) {
            // programa
            if (rtrim($pathinfo, '/') === '/programa') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_programa;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'programa');
                }

                return array (  '_controller' => 'Admin\\UnadBundle\\Controller\\ProgramaController::indexAction',  '_route' => 'programa',);
            }
            not_programa:

            // programa_create
            if ($pathinfo === '/programa/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_programa_create;
                }

                return array (  '_controller' => 'Admin\\UnadBundle\\Controller\\ProgramaController::createAction',  '_route' => 'programa_create',);
            }
            not_programa_create:

            // programa_new
            if ($pathinfo === '/programa/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_programa_new;
                }

                return array (  '_controller' => 'Admin\\UnadBundle\\Controller\\ProgramaController::newAction',  '_route' => 'programa_new',);
            }
            not_programa_new:

            // programa_show
            if (preg_match('#^/programa/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_programa_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'programa_show')), array (  '_controller' => 'Admin\\UnadBundle\\Controller\\ProgramaController::showAction',));
            }
            not_programa_show:

            // programa_edit
            if (preg_match('#^/programa/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_programa_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'programa_edit')), array (  '_controller' => 'Admin\\UnadBundle\\Controller\\ProgramaController::editAction',));
            }
            not_programa_edit:

            // programa_update
            if (preg_match('#^/programa/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_programa_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'programa_update')), array (  '_controller' => 'Admin\\UnadBundle\\Controller\\ProgramaController::updateAction',));
            }
            not_programa_update:

            // programa_delete
            if (preg_match('#^/programa/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_programa_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'programa_delete')), array (  '_controller' => 'Admin\\UnadBundle\\Controller\\ProgramaController::deleteAction',));
            }
            not_programa_delete:

        }

        // admin_user_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_user_homepage')), array (  '_controller' => 'Admin\\UserBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/admin/user')) {
            // admin_user
            if ($pathinfo === '/admin/user/lista') {
                return array (  '_controller' => 'Admin\\UserBundle\\Controller\\UserController::indexAction',  '_route' => 'admin_user',);
            }

            // admin_user_show
            if (preg_match('#^/admin/user/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_user_show')), array (  '_controller' => 'Admin\\UserBundle\\Controller\\UserController::showAction',));
            }

            // admin_user_buscarpor
            if ($pathinfo === '/admin/user/buscarpor') {
                return array (  '_controller' => 'Admin\\UserBundle\\Controller\\UserController::buscarporAction',  '_route' => 'admin_user_buscarpor',);
            }

            // admin_user_cedula
            if (preg_match('#^/admin/user/(?P<text>[^/]++)/cedula$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_user_cedula')), array (  '_controller' => 'Admin\\UserBundle\\Controller\\UserController::buscarcedulaAction',));
            }

            // admin_user_apellidos
            if (preg_match('#^/admin/user/(?P<text>[^/]++)/apellido$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_user_apellidos')), array (  '_controller' => 'Admin\\UserBundle\\Controller\\UserController::buscarapellidoAction',));
            }

            // admin_user_nombres
            if (preg_match('#^/admin/user/(?P<text>[^/]++)/nombre$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_user_nombres')), array (  '_controller' => 'Admin\\UserBundle\\Controller\\UserController::buscarnombreAction',));
            }

            // admin_user_new
            if ($pathinfo === '/admin/user/new') {
                return array (  '_controller' => 'Admin\\UserBundle\\Controller\\UserController::newAction',  '_route' => 'admin_user_new',);
            }

            // admin_user_create
            if ($pathinfo === '/admin/user/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_admin_user_create;
                }

                return array (  '_controller' => 'Admin\\UserBundle\\Controller\\UserController::createAction',  '_route' => 'admin_user_create',);
            }
            not_admin_user_create:

            // admin_user_edit
            if (preg_match('#^/admin/user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_user_edit')), array (  '_controller' => 'Admin\\UserBundle\\Controller\\UserController::editAction',));
            }

            // admin_user_update
            if (preg_match('#^/admin/user/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_admin_user_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_user_update')), array (  '_controller' => 'Admin\\UserBundle\\Controller\\UserController::updateAction',));
            }
            not_admin_user_update:

            // admin_user_delete
            if (preg_match('#^/admin/user/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_admin_user_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_user_delete')), array (  '_controller' => 'Admin\\UserBundle\\Controller\\UserController::deleteAction',));
            }
            not_admin_user_delete:

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'Admin\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
                }

                // login_check
                if ($pathinfo === '/login_check') {
                    return array('_route' => 'login_check');
                }

            }

            // logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'logout');
            }

        }

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        if (0 === strpos($pathinfo, '/demo')) {
            if (0 === strpos($pathinfo, '/demo/secured')) {
                if (0 === strpos($pathinfo, '/demo/secured/log')) {
                    if (0 === strpos($pathinfo, '/demo/secured/login')) {
                        // _demo_login
                        if ($pathinfo === '/demo/secured/login') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
                        }

                        // _security_check
                        if ($pathinfo === '/demo/secured/login_check') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_security_check',);
                        }

                    }

                    // _demo_logout
                    if ($pathinfo === '/demo/secured/logout') {
                        return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
                    }

                }

                if (0 === strpos($pathinfo, '/demo/secured/hello')) {
                    // acme_demo_secured_hello
                    if ($pathinfo === '/demo/secured/hello') {
                        return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
                    }

                    // _demo_secured_hello
                    if (preg_match('#^/demo/secured/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',));
                    }

                    // _demo_secured_hello_admin
                    if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello_admin')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',));
                    }

                }

            }

            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }

                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
