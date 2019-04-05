<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        }

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Admin\\UserBundle\\Controller\\DefaultController::homeAction',  '_route' => '_welcome',);
        }

        if (0 === strpos($pathinfo, '/d')) {
            if (0 === strpos($pathinfo, '/dec/planm')) {
                // planmejoramiento
                if (rtrim($pathinfo, '/') === '/dec/planm') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_planmejoramiento;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'planmejoramiento');
                    }

                    return array (  '_controller' => 'Admin\\MedBundle\\Controller\\PlanmejoramientoController::indexAction',  '_route' => 'planmejoramiento',);
                }
                not_planmejoramiento:

                // planmejoramiento_create
                if ($pathinfo === '/dec/planm/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_planmejoramiento_create;
                    }

                    return array (  '_controller' => 'Admin\\MedBundle\\Controller\\PlanmejoramientoController::createAction',  '_route' => 'planmejoramiento_create',);
                }
                not_planmejoramiento_create:

                // planmejoramiento_new
                if ($pathinfo === '/dec/planm/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_planmejoramiento_new;
                    }

                    return array (  '_controller' => 'Admin\\MedBundle\\Controller\\PlanmejoramientoController::newAction',  '_route' => 'planmejoramiento_new',);
                }
                not_planmejoramiento_new:

                if (0 === strpos($pathinfo, '/dec/planm/add')) {
                    // planmejoramiento_add
                    if ($pathinfo === '/dec/planm/add') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_planmejoramiento_add;
                        }

                        return array (  '_controller' => 'Admin\\MedBundle\\Controller\\PlanmejoramientoController::addAction',  '_route' => 'planmejoramiento_add',);
                    }
                    not_planmejoramiento_add:

                    // planmejoramiento_agregar
                    if (preg_match('#^/dec/planm/add/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_planmejoramiento_agregar;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'planmejoramiento_agregar')), array (  '_controller' => 'Admin\\MedBundle\\Controller\\PlanmejoramientoController::agregarAction',));
                    }
                    not_planmejoramiento_agregar:

                }

                // planmejoramiento_show
                if (preg_match('#^/dec/planm/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_planmejoramiento_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'planmejoramiento_show')), array (  '_controller' => 'Admin\\MedBundle\\Controller\\PlanmejoramientoController::showAction',));
                }
                not_planmejoramiento_show:

                // planmejoramiento_edit
                if (preg_match('#^/dec/planm/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_planmejoramiento_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'planmejoramiento_edit')), array (  '_controller' => 'Admin\\MedBundle\\Controller\\PlanmejoramientoController::editAction',));
                }
                not_planmejoramiento_edit:

                // planmejoramiento_update
                if (preg_match('#^/dec/planm/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_planmejoramiento_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'planmejoramiento_update')), array (  '_controller' => 'Admin\\MedBundle\\Controller\\PlanmejoramientoController::updateAction',));
                }
                not_planmejoramiento_update:

                // planmejoramiento_delete
                if (preg_match('#^/dec/planm/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_planmejoramiento_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'planmejoramiento_delete')), array (  '_controller' => 'Admin\\MedBundle\\Controller\\PlanmejoramientoController::deleteAction',));
                }
                not_planmejoramiento_delete:

                if (0 === strpos($pathinfo, '/dec/planm/acciones')) {
                    // accionespm
                    if (rtrim($pathinfo, '/') === '/dec/planm/acciones') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_accionespm;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'accionespm');
                        }

                        return array (  '_controller' => 'Admin\\MedBundle\\Controller\\AccionespmController::indexAction',  '_route' => 'accionespm',);
                    }
                    not_accionespm:

                    // accionespm_create
                    if ($pathinfo === '/dec/planm/acciones/') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_accionespm_create;
                        }

                        return array (  '_controller' => 'Admin\\MedBundle\\Controller\\AccionespmController::createAction',  '_route' => 'accionespm_create',);
                    }
                    not_accionespm_create:

                    // accionespm_new
                    if (0 === strpos($pathinfo, '/dec/planm/acciones/new') && preg_match('#^/dec/planm/acciones/new/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_accionespm_new;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'accionespm_new')), array (  '_controller' => 'Admin\\MedBundle\\Controller\\AccionespmController::newAction',));
                    }
                    not_accionespm_new:

                    // accionespm_show
                    if (preg_match('#^/dec/planm/acciones/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_accionespm_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'accionespm_show')), array (  '_controller' => 'Admin\\MedBundle\\Controller\\AccionespmController::showAction',));
                    }
                    not_accionespm_show:

                    // accionespm_edit
                    if (preg_match('#^/dec/planm/acciones/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_accionespm_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'accionespm_edit')), array (  '_controller' => 'Admin\\MedBundle\\Controller\\AccionespmController::editAction',));
                    }
                    not_accionespm_edit:

                    // accionespm_editar
                    if (preg_match('#^/dec/planm/acciones/(?P<id>[^/]++)/editar$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'accionespm_editar')), array (  '_controller' => 'Admin\\MedBundle\\Controller\\AccionespmController::editarAction',));
                    }

                    // accionespm_update
                    if (preg_match('#^/dec/planm/acciones/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PUT') {
                            $allow[] = 'PUT';
                            goto not_accionespm_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'accionespm_update')), array (  '_controller' => 'Admin\\MedBundle\\Controller\\AccionespmController::updateAction',));
                    }
                    not_accionespm_update:

                    // accionespm_delete
                    if (preg_match('#^/dec/planm/acciones/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_accionespm_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'accionespm_delete')), array (  '_controller' => 'Admin\\MedBundle\\Controller\\AccionespmController::deleteAction',));
                    }
                    not_accionespm_delete:

                }

            }

            if (0 === strpos($pathinfo, '/doc')) {
                if (0 === strpos($pathinfo, '/doc/redtutores')) {
                    // redtutores
                    if (rtrim($pathinfo, '/') === '/doc/redtutores') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_redtutores;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'redtutores');
                        }

                        return array (  '_controller' => 'Admin\\MedBundle\\Controller\\redTutoresController::indexAction',  '_route' => 'redtutores',);
                    }
                    not_redtutores:

                    // redtutores_create
                    if ($pathinfo === '/doc/redtutores/') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_redtutores_create;
                        }

                        return array (  '_controller' => 'Admin\\MedBundle\\Controller\\redTutoresController::createAction',  '_route' => 'redtutores_create',);
                    }
                    not_redtutores_create:

                    // redtutores_new
                    if ($pathinfo === '/doc/redtutores/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_redtutores_new;
                        }

                        return array (  '_controller' => 'Admin\\MedBundle\\Controller\\redTutoresController::newAction',  '_route' => 'redtutores_new',);
                    }
                    not_redtutores_new:

                    // redtutores_show
                    if (preg_match('#^/doc/redtutores/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_redtutores_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'redtutores_show')), array (  '_controller' => 'Admin\\MedBundle\\Controller\\redTutoresController::showAction',));
                    }
                    not_redtutores_show:

                    // redtutores_edit
                    if (preg_match('#^/doc/redtutores/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_redtutores_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'redtutores_edit')), array (  '_controller' => 'Admin\\MedBundle\\Controller\\redTutoresController::editAction',));
                    }
                    not_redtutores_edit:

                    // redtutores_update
                    if (preg_match('#^/doc/redtutores/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PUT') {
                            $allow[] = 'PUT';
                            goto not_redtutores_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'redtutores_update')), array (  '_controller' => 'Admin\\MedBundle\\Controller\\redTutoresController::updateAction',));
                    }
                    not_redtutores_update:

                    // redtutores_delete
                    if (preg_match('#^/doc/redtutores/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_redtutores_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'redtutores_delete')), array (  '_controller' => 'Admin\\MedBundle\\Controller\\redTutoresController::deleteAction',));
                    }
                    not_redtutores_delete:

                }

                if (0 === strpos($pathinfo, '/doc/plangestion')) {
                    // plangestion_create
                    if ($pathinfo === '/doc/plangestion/') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_plangestion_create;
                        }

                        return array (  '_controller' => 'Admin\\MedBundle\\Controller\\PlangestionController::createAction',  '_route' => 'plangestion_create',);
                    }
                    not_plangestion_create:

                    // plangestion_add
                    if ($pathinfo === '/doc/plangestion/add') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_plangestion_add;
                        }

                        return array (  '_controller' => 'Admin\\MedBundle\\Controller\\PlangestionController::addAction',  '_route' => 'plangestion_add',);
                    }
                    not_plangestion_add:

                    // plangestion_show
                    if (preg_match('#^/doc/plangestion/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_plangestion_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'plangestion_show')), array (  '_controller' => 'Admin\\MedBundle\\Controller\\PlangestionController::showAction',));
                    }
                    not_plangestion_show:

                    // plangestion_dofe
                    if (preg_match('#^/doc/plangestion/(?P<id>[^/]++)/dofe$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_plangestion_dofe;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'plangestion_dofe')), array (  '_controller' => 'Admin\\MedBundle\\Controller\\PlangestionController::dofeAction',));
                    }
                    not_plangestion_dofe:

                    // plangestion_conf
                    if ($pathinfo === '/doc/plangestion/conf/plan') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_plangestion_conf;
                        }

                        return array (  '_controller' => 'Admin\\MedBundle\\Controller\\PlangestionController::confAction',  '_route' => 'plangestion_conf',);
                    }
                    not_plangestion_conf:

                    // plangestion_crear
                    if ($pathinfo === '/doc/plangestion/agregar/roles') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_plangestion_crear;
                        }

                        return array (  '_controller' => 'Admin\\MedBundle\\Controller\\PlangestionController::crearAction',  '_route' => 'plangestion_crear',);
                    }
                    not_plangestion_crear:

                    // plangestion_edit
                    if (preg_match('#^/doc/plangestion/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_plangestion_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'plangestion_edit')), array (  '_controller' => 'Admin\\MedBundle\\Controller\\PlangestionController::editAction',));
                    }
                    not_plangestion_edit:

                    // plangestion_update
                    if (preg_match('#^/doc/plangestion/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PUT') {
                            $allow[] = 'PUT';
                            goto not_plangestion_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'plangestion_update')), array (  '_controller' => 'Admin\\MedBundle\\Controller\\PlangestionController::updateAction',));
                    }
                    not_plangestion_update:

                    // plangestion_cerrar
                    if (preg_match('#^/doc/plangestion/(?P<id>[^/]++)/cerrar$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_plangestion_cerrar;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'plangestion_cerrar')), array (  '_controller' => 'Admin\\MedBundle\\Controller\\PlangestionController::cerrarAction',));
                    }
                    not_plangestion_cerrar:

                    // plangestion_confirm
                    if (preg_match('#^/doc/plangestion/(?P<id>[^/]++)/confirm$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_plangestion_confirm;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'plangestion_confirm')), array (  '_controller' => 'Admin\\MedBundle\\Controller\\PlangestionController::confirmAction',));
                    }
                    not_plangestion_confirm:

                    // plangestion_delete
                    if (preg_match('#^/doc/plangestion/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_plangestion_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'plangestion_delete')), array (  '_controller' => 'Admin\\MedBundle\\Controller\\PlangestionController::deleteAction',));
                    }
                    not_plangestion_delete:

                }

                if (0 === strpos($pathinfo, '/doc/actividadrol')) {
                    // actividadrol
                    if (rtrim($pathinfo, '/') === '/doc/actividadrol') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_actividadrol;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'actividadrol');
                        }

                        return array (  '_controller' => 'Admin\\MedBundle\\Controller\\ActividadrolController::indexAction',  '_route' => 'actividadrol',);
                    }
                    not_actividadrol:

                    // actividadrol_select
                    if (0 === strpos($pathinfo, '/doc/actividadrol/select') && preg_match('#^/doc/actividadrol/select/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_actividadrol_select;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'actividadrol_select')), array (  '_controller' => 'Admin\\MedBundle\\Controller\\ActividadrolController::selectAction',));
                    }
                    not_actividadrol_select:

                    // actividadrol_create
                    if ($pathinfo === '/doc/actividadrol/') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_actividadrol_create;
                        }

                        return array (  '_controller' => 'Admin\\MedBundle\\Controller\\ActividadrolController::createAction',  '_route' => 'actividadrol_create',);
                    }
                    not_actividadrol_create:

                    // actividadrol_new
                    if ($pathinfo === '/doc/actividadrol/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_actividadrol_new;
                        }

                        return array (  '_controller' => 'Admin\\MedBundle\\Controller\\ActividadrolController::newAction',  '_route' => 'actividadrol_new',);
                    }
                    not_actividadrol_new:

                    // actividadrol_show
                    if (preg_match('#^/doc/actividadrol/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_actividadrol_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'actividadrol_show')), array (  '_controller' => 'Admin\\MedBundle\\Controller\\ActividadrolController::showAction',));
                    }
                    not_actividadrol_show:

                    // actividadrol_edit
                    if (preg_match('#^/doc/actividadrol/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_actividadrol_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'actividadrol_edit')), array (  '_controller' => 'Admin\\MedBundle\\Controller\\ActividadrolController::editAction',));
                    }
                    not_actividadrol_edit:

                    // actividadrol_update
                    if (preg_match('#^/doc/actividadrol/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PUT') {
                            $allow[] = 'PUT';
                            goto not_actividadrol_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'actividadrol_update')), array (  '_controller' => 'Admin\\MedBundle\\Controller\\ActividadrolController::updateAction',));
                    }
                    not_actividadrol_update:

                    // actividadrol_delete
                    if (preg_match('#^/doc/actividadrol/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_actividadrol_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'actividadrol_delete')), array (  '_controller' => 'Admin\\MedBundle\\Controller\\ActividadrolController::deleteAction',));
                    }
                    not_actividadrol_delete:

                }

            }

        }

        if (0 === strpos($pathinfo, '/unad/rolacademico')) {
            // rolacademico
            if (rtrim($pathinfo, '/') === '/unad/rolacademico') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_rolacademico;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'rolacademico');
                }

                return array (  '_controller' => 'Admin\\MedBundle\\Controller\\RolacademicoController::indexAction',  '_route' => 'rolacademico',);
            }
            not_rolacademico:

            // rolacademico_create
            if ($pathinfo === '/unad/rolacademico/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_rolacademico_create;
                }

                return array (  '_controller' => 'Admin\\MedBundle\\Controller\\RolacademicoController::createAction',  '_route' => 'rolacademico_create',);
            }
            not_rolacademico_create:

            // rolacademico_new
            if ($pathinfo === '/unad/rolacademico/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_rolacademico_new;
                }

                return array (  '_controller' => 'Admin\\MedBundle\\Controller\\RolacademicoController::newAction',  '_route' => 'rolacademico_new',);
            }
            not_rolacademico_new:

            // rolacademico_show
            if (preg_match('#^/unad/rolacademico/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_rolacademico_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'rolacademico_show')), array (  '_controller' => 'Admin\\MedBundle\\Controller\\RolacademicoController::showAction',));
            }
            not_rolacademico_show:

            // rolacademico_edit
            if (preg_match('#^/unad/rolacademico/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_rolacademico_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'rolacademico_edit')), array (  '_controller' => 'Admin\\MedBundle\\Controller\\RolacademicoController::editAction',));
            }
            not_rolacademico_edit:

            // rolacademico_update
            if (preg_match('#^/unad/rolacademico/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_rolacademico_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'rolacademico_update')), array (  '_controller' => 'Admin\\MedBundle\\Controller\\RolacademicoController::updateAction',));
            }
            not_rolacademico_update:

            // rolacademico_delete
            if (preg_match('#^/unad/rolacademico/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_rolacademico_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'rolacademico_delete')), array (  '_controller' => 'Admin\\MedBundle\\Controller\\RolacademicoController::deleteAction',));
            }
            not_rolacademico_delete:

        }

        if (0 === strpos($pathinfo, '/d')) {
            if (0 === strpos($pathinfo, '/doc')) {
                if (0 === strpos($pathinfo, '/doc/actividadplang')) {
                    // actividadplang
                    if (rtrim($pathinfo, '/') === '/doc/actividadplang') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_actividadplang;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'actividadplang');
                        }

                        return array (  '_controller' => 'Admin\\MedBundle\\Controller\\ActividadplangController::indexAction',  '_route' => 'actividadplang',);
                    }
                    not_actividadplang:

                    // actividadplang_create
                    if ($pathinfo === '/doc/actividadplang/') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_actividadplang_create;
                        }

                        return array (  '_controller' => 'Admin\\MedBundle\\Controller\\ActividadplangController::createAction',  '_route' => 'actividadplang_create',);
                    }
                    not_actividadplang_create:

                    // actividadplang_add
                    if (0 === strpos($pathinfo, '/doc/actividadplang/add') && preg_match('#^/doc/actividadplang/add/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_actividadplang_add;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'actividadplang_add')), array (  '_controller' => 'Admin\\MedBundle\\Controller\\ActividadplangController::addAction',));
                    }
                    not_actividadplang_add:

                    // actividadplang_new
                    if (0 === strpos($pathinfo, '/doc/actividadplang/new') && preg_match('#^/doc/actividadplang/new/(?P<id>[^/]++)/(?P<ida>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_actividadplang_new;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'actividadplang_new')), array (  '_controller' => 'Admin\\MedBundle\\Controller\\ActividadplangController::newAction',));
                    }
                    not_actividadplang_new:

                    // actividadplang_show
                    if (preg_match('#^/doc/actividadplang/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_actividadplang_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'actividadplang_show')), array (  '_controller' => 'Admin\\MedBundle\\Controller\\ActividadplangController::showAction',));
                    }
                    not_actividadplang_show:

                    // actividadplang_edit
                    if (preg_match('#^/doc/actividadplang/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_actividadplang_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'actividadplang_edit')), array (  '_controller' => 'Admin\\MedBundle\\Controller\\ActividadplangController::editAction',));
                    }
                    not_actividadplang_edit:

                    // actividadplang_dofe
                    if (preg_match('#^/doc/actividadplang/(?P<id>[^/]++)/dofe$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_actividadplang_dofe;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'actividadplang_dofe')), array (  '_controller' => 'Admin\\MedBundle\\Controller\\ActividadplangController::dofeAction',));
                    }
                    not_actividadplang_dofe:

                    // actividadplang_borrar
                    if (0 === strpos($pathinfo, '/doc/actividadplang/borrar') && preg_match('#^/doc/actividadplang/borrar/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_actividadplang_borrar;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'actividadplang_borrar')), array (  '_controller' => 'Admin\\MedBundle\\Controller\\ActividadplangController::borrarAction',));
                    }
                    not_actividadplang_borrar:

                    // actividadplang_update
                    if (preg_match('#^/doc/actividadplang/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PUT') {
                            $allow[] = 'PUT';
                            goto not_actividadplang_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'actividadplang_update')), array (  '_controller' => 'Admin\\MedBundle\\Controller\\ActividadplangController::updateAction',));
                    }
                    not_actividadplang_update:

                    // actividadplang_updatedofe
                    if (preg_match('#^/doc/actividadplang/(?P<id>[^/]++)/dofe$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PUT') {
                            $allow[] = 'PUT';
                            goto not_actividadplang_updatedofe;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'actividadplang_updatedofe')), array (  '_controller' => 'Admin\\MedBundle\\Controller\\ActividadplangController::updatedofeAction',));
                    }
                    not_actividadplang_updatedofe:

                    // actividadplang_delete
                    if (preg_match('#^/doc/actividadplang/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_actividadplang_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'actividadplang_delete')), array (  '_controller' => 'Admin\\MedBundle\\Controller\\ActividadplangController::deleteAction',));
                    }
                    not_actividadplang_delete:

                    // actividadplang_borrarreg
                    if (0 === strpos($pathinfo, '/doc/actividadplang/borrar') && preg_match('#^/doc/actividadplang/borrar/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_actividadplang_borrarreg;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'actividadplang_borrarreg')), array (  '_controller' => 'Admin\\MedBundle\\Controller\\ActividadplangController::borrarregAction',));
                    }
                    not_actividadplang_borrarreg:

                }

                if (0 === strpos($pathinfo, '/doc/rolplang')) {
                    // rolplang
                    if (rtrim($pathinfo, '/') === '/doc/rolplang') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_rolplang;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'rolplang');
                        }

                        return array (  '_controller' => 'Admin\\MedBundle\\Controller\\RolplangController::indexAction',  '_route' => 'rolplang',);
                    }
                    not_rolplang:

                    // rolplang_create
                    if (preg_match('#^/doc/rolplang/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_rolplang_create;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'rolplang_create')), array (  '_controller' => 'Admin\\MedBundle\\Controller\\RolplangController::createAction',));
                    }
                    not_rolplang_create:

                    // rolplang_new
                    if (0 === strpos($pathinfo, '/doc/rolplang/new') && preg_match('#^/doc/rolplang/new/(?P<id>[^/]++)/(?P<idr>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_rolplang_new;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'rolplang_new')), array (  '_controller' => 'Admin\\MedBundle\\Controller\\RolplangController::newAction',));
                    }
                    not_rolplang_new:

                    // rolplang_show
                    if (preg_match('#^/doc/rolplang/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_rolplang_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'rolplang_show')), array (  '_controller' => 'Admin\\MedBundle\\Controller\\RolplangController::showAction',));
                    }
                    not_rolplang_show:

                    // rolplang_edit
                    if (preg_match('#^/doc/rolplang/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_rolplang_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'rolplang_edit')), array (  '_controller' => 'Admin\\MedBundle\\Controller\\RolplangController::editAction',));
                    }
                    not_rolplang_edit:

                    // rolplang_update
                    if (preg_match('#^/doc/rolplang/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PUT') {
                            $allow[] = 'PUT';
                            goto not_rolplang_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'rolplang_update')), array (  '_controller' => 'Admin\\MedBundle\\Controller\\RolplangController::updateAction',));
                    }
                    not_rolplang_update:

                    // rolplang_delete
                    if (preg_match('#^/doc/rolplang/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_rolplang_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'rolplang_delete')), array (  '_controller' => 'Admin\\MedBundle\\Controller\\RolplangController::deleteAction',));
                    }
                    not_rolplang_delete:

                }

                if (0 === strpos($pathinfo, '/doc/coeval')) {
                    if (0 === strpos($pathinfo, '/doc/coevaltutor')) {
                        // coevaltutor_create
                        if ($pathinfo === '/doc/coevaltutor/') {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_coevaltutor_create;
                            }

                            return array (  '_controller' => 'Admin\\MedBundle\\Controller\\coevalTutorController::createAction',  '_route' => 'coevaltutor_create',);
                        }
                        not_coevaltutor_create:

                        // coevaltutor_new
                        if ($pathinfo === '/doc/coevaltutor/new') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_coevaltutor_new;
                            }

                            return array (  '_controller' => 'Admin\\MedBundle\\Controller\\coevalTutorController::newAction',  '_route' => 'coevaltutor_new',);
                        }
                        not_coevaltutor_new:

                        // coevaltutor_show
                        if (preg_match('#^/doc/coevaltutor/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_coevaltutor_show;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'coevaltutor_show')), array (  '_controller' => 'Admin\\MedBundle\\Controller\\coevalTutorController::showAction',));
                        }
                        not_coevaltutor_show:

                        // coevaltutor_edit
                        if (preg_match('#^/doc/coevaltutor/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_coevaltutor_edit;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'coevaltutor_edit')), array (  '_controller' => 'Admin\\MedBundle\\Controller\\coevalTutorController::editAction',));
                        }
                        not_coevaltutor_edit:

                        // coevaltutor_update
                        if (preg_match('#^/doc/coevaltutor/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'PUT') {
                                $allow[] = 'PUT';
                                goto not_coevaltutor_update;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'coevaltutor_update')), array (  '_controller' => 'Admin\\MedBundle\\Controller\\coevalTutorController::updateAction',));
                        }
                        not_coevaltutor_update:

                        // coevaltutor_delete
                        if (preg_match('#^/doc/coevaltutor/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'DELETE') {
                                $allow[] = 'DELETE';
                                goto not_coevaltutor_delete;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'coevaltutor_delete')), array (  '_controller' => 'Admin\\MedBundle\\Controller\\coevalTutorController::deleteAction',));
                        }
                        not_coevaltutor_delete:

                    }

                    if (0 === strpos($pathinfo, '/doc/coevalpares')) {
                        // docente_coevalpares
                        if (rtrim($pathinfo, '/') === '/doc/coevalpares') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_docente_coevalpares;
                            }

                            if (substr($pathinfo, -1) !== '/') {
                                return $this->redirect($pathinfo.'/', 'docente_coevalpares');
                            }

                            return array (  '_controller' => 'Admin\\MedBundle\\Controller\\coevalParesController::indexAction',  '_route' => 'docente_coevalpares',);
                        }
                        not_docente_coevalpares:

                        // coevalpares_create
                        if ($pathinfo === '/doc/coevalpares/') {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_coevalpares_create;
                            }

                            return array (  '_controller' => 'Admin\\MedBundle\\Controller\\coevalParesController::createAction',  '_route' => 'coevalpares_create',);
                        }
                        not_coevalpares_create:

                        // coevalpares_new
                        if ($pathinfo === '/doc/coevalpares/new') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_coevalpares_new;
                            }

                            return array (  '_controller' => 'Admin\\MedBundle\\Controller\\coevalParesController::newAction',  '_route' => 'coevalpares_new',);
                        }
                        not_coevalpares_new:

                        // coevalpares_show
                        if (preg_match('#^/doc/coevalpares/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_coevalpares_show;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'coevalpares_show')), array (  '_controller' => 'Admin\\MedBundle\\Controller\\coevalParesController::showAction',));
                        }
                        not_coevalpares_show:

                        // coevalpares_edit
                        if (0 === strpos($pathinfo, '/doc/coevalpares/send') && preg_match('#^/doc/coevalpares/send/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_coevalpares_edit;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'coevalpares_edit')), array (  '_controller' => 'Admin\\MedBundle\\Controller\\coevalParesController::editAction',));
                        }
                        not_coevalpares_edit:

                        // coevalpares_update
                        if (preg_match('#^/doc/coevalpares/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'PUT') {
                                $allow[] = 'PUT';
                                goto not_coevalpares_update;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'coevalpares_update')), array (  '_controller' => 'Admin\\MedBundle\\Controller\\coevalParesController::updateAction',));
                        }
                        not_coevalpares_update:

                        // coevalpares_delete
                        if (preg_match('#^/doc/coevalpares/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'DELETE') {
                                $allow[] = 'DELETE';
                                goto not_coevalpares_delete;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'coevalpares_delete')), array (  '_controller' => 'Admin\\MedBundle\\Controller\\coevalParesController::deleteAction',));
                        }
                        not_coevalpares_delete:

                        // coevalpares_crear
                        if ($pathinfo === '/doc/coevalpares/crear/eval') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_coevalpares_crear;
                            }

                            return array (  '_controller' => 'Admin\\MedBundle\\Controller\\coevalParesController::crearAction',  '_route' => 'coevalpares_crear',);
                        }
                        not_coevalpares_crear:

                    }

                    if (0 === strpos($pathinfo, '/doc/coevaldirector')) {
                        // docente_coevaldirector
                        if (rtrim($pathinfo, '/') === '/doc/coevaldirector') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_docente_coevaldirector;
                            }

                            if (substr($pathinfo, -1) !== '/') {
                                return $this->redirect($pathinfo.'/', 'docente_coevaldirector');
                            }

                            return array (  '_controller' => 'Admin\\MedBundle\\Controller\\coevalDirectorController::indexAction',  '_route' => 'docente_coevaldirector',);
                        }
                        not_docente_coevaldirector:

                        // coevaldirector_create
                        if ($pathinfo === '/doc/coevaldirector/') {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_coevaldirector_create;
                            }

                            return array (  '_controller' => 'Admin\\MedBundle\\Controller\\coevalDirectorController::createAction',  '_route' => 'coevaldirector_create',);
                        }
                        not_coevaldirector_create:

                        // coevaldirector_new
                        if ($pathinfo === '/doc/coevaldirector/new') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_coevaldirector_new;
                            }

                            return array (  '_controller' => 'Admin\\MedBundle\\Controller\\coevalDirectorController::newAction',  '_route' => 'coevaldirector_new',);
                        }
                        not_coevaldirector_new:

                        // coevaldirector_show
                        if (preg_match('#^/doc/coevaldirector/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_coevaldirector_show;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'coevaldirector_show')), array (  '_controller' => 'Admin\\MedBundle\\Controller\\coevalDirectorController::showAction',));
                        }
                        not_coevaldirector_show:

                        // coevaldirector_edit
                        if (preg_match('#^/doc/coevaldirector/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_coevaldirector_edit;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'coevaldirector_edit')), array (  '_controller' => 'Admin\\MedBundle\\Controller\\coevalDirectorController::editAction',));
                        }
                        not_coevaldirector_edit:

                        // coevaldirector_update
                        if (preg_match('#^/doc/coevaldirector/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'PUT') {
                                $allow[] = 'PUT';
                                goto not_coevaldirector_update;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'coevaldirector_update')), array (  '_controller' => 'Admin\\MedBundle\\Controller\\coevalDirectorController::updateAction',));
                        }
                        not_coevaldirector_update:

                        // coevaldirector_delete
                        if (preg_match('#^/doc/coevaldirector/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'DELETE') {
                                $allow[] = 'DELETE';
                                goto not_coevaldirector_delete;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'coevaldirector_delete')), array (  '_controller' => 'Admin\\MedBundle\\Controller\\coevalDirectorController::deleteAction',));
                        }
                        not_coevaldirector_delete:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/dec/coevallider')) {
                // coevallider
                if ($pathinfo === '/dec/coevallider/lista') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_coevallider;
                    }

                    return array (  '_controller' => 'Admin\\MedBundle\\Controller\\coevalLiderController::indexAction',  '_route' => 'coevallider',);
                }
                not_coevallider:

                // coevallider_create
                if ($pathinfo === '/dec/coevallider/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_coevallider_create;
                    }

                    return array (  '_controller' => 'Admin\\MedBundle\\Controller\\coevalLiderController::createAction',  '_route' => 'coevallider_create',);
                }
                not_coevallider_create:

                // coevallider_new
                if ($pathinfo === '/dec/coevallider/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_coevallider_new;
                    }

                    return array (  '_controller' => 'Admin\\MedBundle\\Controller\\coevalLiderController::newAction',  '_route' => 'coevallider_new',);
                }
                not_coevallider_new:

                // coevallider_show
                if (preg_match('#^/dec/coevallider/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_coevallider_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'coevallider_show')), array (  '_controller' => 'Admin\\MedBundle\\Controller\\coevalLiderController::showAction',));
                }
                not_coevallider_show:

                // coevallider_edit
                if (preg_match('#^/dec/coevallider/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_coevallider_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'coevallider_edit')), array (  '_controller' => 'Admin\\MedBundle\\Controller\\coevalLiderController::editAction',));
                }
                not_coevallider_edit:

                // coevallider_update
                if (preg_match('#^/dec/coevallider/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_coevallider_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'coevallider_update')), array (  '_controller' => 'Admin\\MedBundle\\Controller\\coevalLiderController::updateAction',));
                }
                not_coevallider_update:

                // coevallider_delete
                if (preg_match('#^/dec/coevallider/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_coevallider_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'coevallider_delete')), array (  '_controller' => 'Admin\\MedBundle\\Controller\\coevalLiderController::deleteAction',));
                }
                not_coevallider_delete:

            }

        }

        if (0 === strpos($pathinfo, '/aval')) {
            // avalplang
            if (rtrim($pathinfo, '/') === '/aval') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_avalplang;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'avalplang');
                }

                return array (  '_controller' => 'Admin\\MedBundle\\Controller\\AvalplangController::indexAction',  '_route' => 'avalplang',);
            }
            not_avalplang:

            // aval_lista
            if ($pathinfo === '/aval/lista') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_aval_lista;
                }

                return array (  '_controller' => 'Admin\\MedBundle\\Controller\\AvalplangController::listaAction',  '_route' => 'aval_lista',);
            }
            not_aval_lista:

            if (0 === strpos($pathinfo, '/aval/planesg')) {
                // aval_porescuela
                if ($pathinfo === '/aval/planesg') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_aval_porescuela;
                    }

                    return array (  '_controller' => 'Admin\\MedBundle\\Controller\\AvalplangController::porescuelaAction',  '_route' => 'aval_porescuela',);
                }
                not_aval_porescuela:

                // aval_plangestion
                if (preg_match('#^/aval/planesg/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_aval_plangestion;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'aval_plangestion')), array (  '_controller' => 'Admin\\MedBundle\\Controller\\AvalplangController::plangestionAction',));
                }
                not_aval_plangestion:

            }

            // avalplang_create
            if ($pathinfo === '/aval/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_avalplang_create;
                }

                return array (  '_controller' => 'Admin\\MedBundle\\Controller\\AvalplangController::createAction',  '_route' => 'avalplang_create',);
            }
            not_avalplang_create:

            // avalplang_new
            if ($pathinfo === '/aval/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_avalplang_new;
                }

                return array (  '_controller' => 'Admin\\MedBundle\\Controller\\AvalplangController::newAction',  '_route' => 'avalplang_new',);
            }
            not_avalplang_new:

            // avalplang_show
            if (preg_match('#^/aval/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_avalplang_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'avalplang_show')), array (  '_controller' => 'Admin\\MedBundle\\Controller\\AvalplangController::showAction',));
            }
            not_avalplang_show:

            // avalplang_edit
            if (preg_match('#^/aval/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_avalplang_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'avalplang_edit')), array (  '_controller' => 'Admin\\MedBundle\\Controller\\AvalplangController::editAction',));
            }
            not_avalplang_edit:

            // avalplang_update
            if (preg_match('#^/aval/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_avalplang_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'avalplang_update')), array (  '_controller' => 'Admin\\MedBundle\\Controller\\AvalplangController::updateAction',));
            }
            not_avalplang_update:

            // avalplang_delete
            if (preg_match('#^/aval/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_avalplang_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'avalplang_delete')), array (  '_controller' => 'Admin\\MedBundle\\Controller\\AvalplangController::deleteAction',));
            }
            not_avalplang_delete:

        }

        if (0 === strpos($pathinfo, '/user/archivo')) {
            // archivo_pordoc
            if (0 === strpos($pathinfo, '/user/archivo/per') && preg_match('#^/user/archivo/per/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_archivo_pordoc;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'archivo_pordoc')), array (  '_controller' => 'Admin\\MedBundle\\Controller\\ArchivoController::porperiodoAction',));
            }
            not_archivo_pordoc:

            // archivo_docente
            if ($pathinfo === '/user/archivo/docente') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_archivo_docente;
                }

                return array (  '_controller' => 'Admin\\MedBundle\\Controller\\ArchivoController::docenteAction',  '_route' => 'archivo_docente',);
            }
            not_archivo_docente:

            // archivo_create
            if ($pathinfo === '/user/archivo/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_archivo_create;
                }

                return array (  '_controller' => 'Admin\\MedBundle\\Controller\\ArchivoController::createAction',  '_route' => 'archivo_create',);
            }
            not_archivo_create:

            // archivo_new
            if ($pathinfo === '/user/archivo/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_archivo_new;
                }

                return array (  '_controller' => 'Admin\\MedBundle\\Controller\\ArchivoController::newAction',  '_route' => 'archivo_new',);
            }
            not_archivo_new:

            // archivo_show
            if (preg_match('#^/user/archivo/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_archivo_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'archivo_show')), array (  '_controller' => 'Admin\\MedBundle\\Controller\\ArchivoController::showAction',));
            }
            not_archivo_show:

            // archivo_edit
            if (preg_match('#^/user/archivo/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_archivo_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'archivo_edit')), array (  '_controller' => 'Admin\\MedBundle\\Controller\\ArchivoController::editAction',));
            }
            not_archivo_edit:

            // archivo_update
            if (preg_match('#^/user/archivo/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_archivo_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'archivo_update')), array (  '_controller' => 'Admin\\MedBundle\\Controller\\ArchivoController::updateAction',));
            }
            not_archivo_update:

            // archivo_delete
            if (preg_match('#^/user/archivo/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_archivo_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'archivo_delete')), array (  '_controller' => 'Admin\\MedBundle\\Controller\\ArchivoController::deleteAction',));
            }
            not_archivo_delete:

        }

        if (0 === strpos($pathinfo, '/admin/instrumento')) {
            // admin_instrumento
            if (rtrim($pathinfo, '/') === '/admin/instrumento') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_admin_instrumento;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'admin_instrumento');
                }

                return array (  '_controller' => 'Admin\\MedBundle\\Controller\\InstrumentoController::indexAction',  '_route' => 'admin_instrumento',);
            }
            not_admin_instrumento:

            // admin_instrumento_create
            if ($pathinfo === '/admin/instrumento/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_admin_instrumento_create;
                }

                return array (  '_controller' => 'Admin\\MedBundle\\Controller\\InstrumentoController::createAction',  '_route' => 'admin_instrumento_create',);
            }
            not_admin_instrumento_create:

            // admin_instrumento_new
            if ($pathinfo === '/admin/instrumento/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_admin_instrumento_new;
                }

                return array (  '_controller' => 'Admin\\MedBundle\\Controller\\InstrumentoController::newAction',  '_route' => 'admin_instrumento_new',);
            }
            not_admin_instrumento_new:

            // admin_instrumento_show
            if (preg_match('#^/admin/instrumento/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_admin_instrumento_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_instrumento_show')), array (  '_controller' => 'Admin\\MedBundle\\Controller\\InstrumentoController::showAction',));
            }
            not_admin_instrumento_show:

            // admin_instrumento_edit
            if (preg_match('#^/admin/instrumento/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_admin_instrumento_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_instrumento_edit')), array (  '_controller' => 'Admin\\MedBundle\\Controller\\InstrumentoController::editAction',));
            }
            not_admin_instrumento_edit:

            // admin_instrumento_update
            if (preg_match('#^/admin/instrumento/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_admin_instrumento_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_instrumento_update')), array (  '_controller' => 'Admin\\MedBundle\\Controller\\InstrumentoController::updateAction',));
            }
            not_admin_instrumento_update:

            // admin_instrumento_delete
            if (preg_match('#^/admin/instrumento/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_admin_instrumento_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_instrumento_delete')), array (  '_controller' => 'Admin\\MedBundle\\Controller\\InstrumentoController::deleteAction',));
            }
            not_admin_instrumento_delete:

        }

        if (0 === strpos($pathinfo, '/d')) {
            if (0 === strpos($pathinfo, '/doc/formatoplang')) {
                // formatoplang
                if (rtrim($pathinfo, '/') === '/doc/formatoplang') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_formatoplang;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'formatoplang');
                    }

                    return array (  '_controller' => 'Admin\\MedBundle\\Controller\\formatoPlangController::indexAction',  '_route' => 'formatoplang',);
                }
                not_formatoplang:

                // formatoplang_create
                if (0 === strpos($pathinfo, '/doc/formatoplang/crear') && preg_match('#^/doc/formatoplang/crear/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_formatoplang_create;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'formatoplang_create')), array (  '_controller' => 'Admin\\MedBundle\\Controller\\formatoPlangController::createAction',));
                }
                not_formatoplang_create:

                // formatoplang_new
                if (0 === strpos($pathinfo, '/doc/formatoplang/new') && preg_match('#^/doc/formatoplang/new/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_formatoplang_new;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'formatoplang_new')), array (  '_controller' => 'Admin\\MedBundle\\Controller\\formatoPlangController::newAction',));
                }
                not_formatoplang_new:

                // formatoplang_show
                if (preg_match('#^/doc/formatoplang/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_formatoplang_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'formatoplang_show')), array (  '_controller' => 'Admin\\MedBundle\\Controller\\formatoPlangController::showAction',));
                }
                not_formatoplang_show:

                // formatoplang_edit
                if (preg_match('#^/doc/formatoplang/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_formatoplang_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'formatoplang_edit')), array (  '_controller' => 'Admin\\MedBundle\\Controller\\formatoPlangController::editAction',));
                }
                not_formatoplang_edit:

            }

            if (0 === strpos($pathinfo, '/dec/pdfplang')) {
                // pdfplang
                if (rtrim($pathinfo, '/') === '/dec/pdfplang') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_pdfplang;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'pdfplang');
                    }

                    return array (  '_controller' => 'Admin\\MedBundle\\Controller\\pdfPlangController::indexAction',  '_route' => 'pdfplang',);
                }
                not_pdfplang:

                // pdfplang_create
                if (0 === strpos($pathinfo, '/dec/pdfplang/crear') && preg_match('#^/dec/pdfplang/crear/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_pdfplang_create;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pdfplang_create')), array (  '_controller' => 'Admin\\MedBundle\\Controller\\pdfPlangController::createAction',));
                }
                not_pdfplang_create:

                // pdfplang_new
                if (0 === strpos($pathinfo, '/dec/pdfplang/new') && preg_match('#^/dec/pdfplang/new/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_pdfplang_new;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pdfplang_new')), array (  '_controller' => 'Admin\\MedBundle\\Controller\\pdfPlangController::newAction',));
                }
                not_pdfplang_new:

                // pdfplang_edit
                if (preg_match('#^/dec/pdfplang/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_pdfplang_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pdfplang_edit')), array (  '_controller' => 'Admin\\MedBundle\\Controller\\pdfPlangController::editAction',));
                }
                not_pdfplang_edit:

                // formatoplang_update
                if (preg_match('#^/dec/pdfplang/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_formatoplang_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'formatoplang_update')), array (  '_controller' => 'Admin\\MedBundle\\Controller\\pdfPlangController::updateAction',));
                }
                not_formatoplang_update:

                // formatoplang_delete
                if (preg_match('#^/dec/pdfplang/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_formatoplang_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'formatoplang_delete')), array (  '_controller' => 'Admin\\MedBundle\\Controller\\pdfPlangController::deleteAction',));
                }
                not_formatoplang_delete:

            }

        }

        // heteroeval_info
        if (0 === strpos($pathinfo, '/unad/doc') && preg_match('#^/unad/doc/(?P<id>[^/]++)/heteroeval$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_heteroeval_info;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'heteroeval_info')), array (  '_controller' => 'Admin\\MedBundle\\Controller\\BaseController::heteroevalAction',));
        }
        not_heteroeval_info:

        if (0 === strpos($pathinfo, '/admin/panel')) {
            // admin_consolidar_index
            if (rtrim($pathinfo, '/') === '/admin/panel') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_admin_consolidar_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'admin_consolidar_index');
                }

                return array (  '_controller' => 'Admin\\MedBundle\\Controller\\ConsolidarController::indexAction',  '_route' => 'admin_consolidar_index',);
            }
            not_admin_consolidar_index:

            // consolidar_index
            if ($pathinfo === '/admin/panel/auto') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_consolidar_index;
                }

                return array (  '_controller' => 'Admin\\MedBundle\\Controller\\ConsolidarController::heterocursosAction',  '_route' => 'consolidar_index',);
            }
            not_consolidar_index:

        }

        if (0 === strpos($pathinfo, '/unad/hetero')) {
            if (0 === strpos($pathinfo, '/unad/hetero/p')) {
                // hetero_index
                if (0 === strpos($pathinfo, '/unad/hetero/pcurso') && preg_match('#^/unad/hetero/pcurso/(?P<pe>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_hetero_index;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'hetero_index')), array (  '_controller' => 'Admin\\MedBundle\\Controller\\HeteroController::indexAction',));
                }
                not_hetero_index:

                // hetero_prom_esc
                if ($pathinfo === '/unad/hetero/prom_esc') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_hetero_prom_esc;
                    }

                    return array (  '_controller' => 'Admin\\MedBundle\\Controller\\HeteroController::heteroescuelasAction',  '_route' => 'hetero_prom_esc',);
                }
                not_hetero_prom_esc:

            }

            // hetero_esc_per
            if (0 === strpos($pathinfo, '/unad/hetero/es_pe') && preg_match('#^/unad/hetero/es_pe/(?P<esc>[^/]++)/(?P<pe>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_hetero_esc_per;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'hetero_esc_per')), array (  '_controller' => 'Admin\\MedBundle\\Controller\\HeteroController::escuelaperiodoAction',));
            }
            not_hetero_esc_per:

        }

        if (0 === strpos($pathinfo, '/do')) {
            if (0 === strpos($pathinfo, '/dofe')) {
                // dofe_index
                if (rtrim($pathinfo, '/') === '/dofe') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_dofe_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'dofe_index');
                    }

                    return array (  '_controller' => 'Admin\\MedBundle\\Controller\\DofeController::indexAction',  '_route' => 'dofe_index',);
                }
                not_dofe_index:

                if (0 === strpos($pathinfo, '/dofe/eval')) {
                    // dofe_evaluar
                    if ($pathinfo === '/dofe/evaluar') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_dofe_evaluar;
                        }

                        return array (  '_controller' => 'Admin\\MedBundle\\Controller\\DofeController::evaluarAction',  '_route' => 'dofe_evaluar',);
                    }
                    not_dofe_evaluar:

                    // dofe_eval
                    if (preg_match('#^/dofe/eval/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_dofe_eval;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'dofe_eval')), array (  '_controller' => 'Admin\\MedBundle\\Controller\\DofeController::evalAction',));
                    }
                    not_dofe_eval:

                }

                if (0 === strpos($pathinfo, '/dofe/c')) {
                    if (0 === strpos($pathinfo, '/dofe/calificar')) {
                        // dofe_calificaredit
                        if (preg_match('#^/dofe/calificar/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_dofe_calificaredit;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'dofe_calificaredit')), array (  '_controller' => 'Admin\\MedBundle\\Controller\\DofeController::editAction',));
                        }
                        not_dofe_calificaredit:

                        // dofe_calificarupdate
                        if (preg_match('#^/dofe/calificar/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'PUT') {
                                $allow[] = 'PUT';
                                goto not_dofe_calificarupdate;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'dofe_calificarupdate')), array (  '_controller' => 'Admin\\MedBundle\\Controller\\DofeController::updateAction',));
                        }
                        not_dofe_calificarupdate:

                    }

                    // dofe_cerrar
                    if (0 === strpos($pathinfo, '/dofe/cerrar') && preg_match('#^/dofe/cerrar/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_dofe_cerrar;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'dofe_cerrar')), array (  '_controller' => 'Admin\\MedBundle\\Controller\\DofeController::cerrarAction',));
                    }
                    not_dofe_cerrar:

                }

            }

            if (0 === strpos($pathinfo, '/doc/p')) {
                if (0 === strpos($pathinfo, '/doc/prodinv')) {
                    // productividad_new
                    if (0 === strpos($pathinfo, '/doc/prodinv/new') && preg_match('#^/doc/prodinv/new/(?P<tipo>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_productividad_new;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'productividad_new')), array (  '_controller' => 'Admin\\MedBundle\\Controller\\ProductividadController::newAction',));
                    }
                    not_productividad_new:

                    // productividad_projectnew
                    if ($pathinfo === '/doc/prodinv/project/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_productividad_projectnew;
                        }

                        return array (  '_controller' => 'Admin\\MedBundle\\Controller\\ProductividadController::newprojectAction',  '_route' => 'productividad_projectnew',);
                    }
                    not_productividad_projectnew:

                    // productividad_add
                    if (0 === strpos($pathinfo, '/doc/prodinv/add') && preg_match('#^/doc/prodinv/add/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_productividad_add;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'productividad_add')), array (  '_controller' => 'Admin\\MedBundle\\Controller\\ProductividadController::addAction',));
                    }
                    not_productividad_add:

                    // productividad_projectadd
                    if ($pathinfo === '/doc/prodinv/project/add') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_productividad_projectadd;
                        }

                        return array (  '_controller' => 'Admin\\MedBundle\\Controller\\ProductividadController::addprojectAction',  '_route' => 'productividad_projectadd',);
                    }
                    not_productividad_projectadd:

                    // productividad_delete
                    if (preg_match('#^/doc/prodinv/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_productividad_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'productividad_delete')), array (  '_controller' => 'Admin\\MedBundle\\Controller\\ProductividadController::deleteAction',));
                    }
                    not_productividad_delete:

                    // productividad_show
                    if (preg_match('#^/doc/prodinv/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_productividad_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'productividad_show')), array (  '_controller' => 'Admin\\MedBundle\\Controller\\ProductividadController::showAction',));
                    }
                    not_productividad_show:

                }

                if (0 === strpos($pathinfo, '/doc/planm')) {
                    // accionespm_editdoc
                    if (0 === strpos($pathinfo, '/doc/planm/acc') && preg_match('#^/doc/planm/acc/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'accionespm_editdoc')), array (  '_controller' => 'Admin\\MedBundle\\Controller\\AccionespmController::editdocAction',));
                    }

                    // planmejoramiento_doc
                    if (preg_match('#^/doc/planm/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'planmejoramiento_doc')), array (  '_controller' => 'Admin\\MedBundle\\Controller\\PlanmejoramientoController::docAction',));
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/unad')) {
            if (0 === strpos($pathinfo, '/unad/doc')) {
                // plangestion_info
                if (preg_match('#^/unad/doc/(?P<id>[^/]++)/plan$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'plangestion_info')), array (  '_controller' => 'Admin\\MedBundle\\Controller\\PlangestionController::infoAction',));
                }

                // plangestion_autoeval
                if (preg_match('#^/unad/doc/(?P<id>[^/]++)/autoeval$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'plangestion_autoeval')), array (  '_controller' => 'Admin\\MedBundle\\Controller\\PlangestionController::autoevalAction',));
                }

                // redtutores_info
                if (preg_match('#^/unad/doc/(?P<id>[^/]++)/redtutor$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'redtutores_info')), array (  '_controller' => 'Admin\\UnadBundle\\Controller\\DocenteController::redtutoresinfoAction',));
                }

                // coeval_info
                if (preg_match('#^/unad/doc/(?P<id>[^/]++)/coeval$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'coeval_info')), array (  '_controller' => 'Admin\\UnadBundle\\Controller\\DocenteController::coevalinfoAction',));
                }

            }

            // user_info
            if (0 === strpos($pathinfo, '/unad/user') && preg_match('#^/unad/user/(?P<id>[^/]++)/info$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_info')), array (  '_controller' => 'Admin\\UserBundle\\Controller\\UserController::showAction',));
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

                // escuela_info
                if ($pathinfo === '/unad/escuela/mi/info') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_escuela_info;
                    }

                    return array (  '_controller' => 'Admin\\UnadBundle\\Controller\\EscuelaController::infoAction',  '_route' => 'escuela_info',);
                }
                not_escuela_info:

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

                if (0 === strpos($pathinfo, '/unad/escuela/mi')) {
                    // escuela_heteroeval
                    if ($pathinfo === '/unad/escuela/mi/heteroeval') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_escuela_heteroeval;
                        }

                        return array (  '_controller' => 'Admin\\UnadBundle\\Controller\\EscuelaController::heteroevalAction',  '_route' => 'escuela_heteroeval',);
                    }
                    not_escuela_heteroeval:

                    // escuela_resultados
                    if ($pathinfo === '/unad/escuela/mi/resultados') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_escuela_resultados;
                        }

                        return array (  '_controller' => 'Admin\\UnadBundle\\Controller\\EscuelaController::resultadosAction',  '_route' => 'escuela_resultados',);
                    }
                    not_escuela_resultados:

                }

            }

            if (0 === strpos($pathinfo, '/unad/zona')) {
                // zona
                if (rtrim($pathinfo, '/') === '/unad/zona') {
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
                if ($pathinfo === '/unad/zona/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_zona_create;
                    }

                    return array (  '_controller' => 'Admin\\UnadBundle\\Controller\\ZonaController::createAction',  '_route' => 'zona_create',);
                }
                not_zona_create:

                // zona_new
                if ($pathinfo === '/unad/zona/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_zona_new;
                    }

                    return array (  '_controller' => 'Admin\\UnadBundle\\Controller\\ZonaController::newAction',  '_route' => 'zona_new',);
                }
                not_zona_new:

                // zona_show
                if (preg_match('#^/unad/zona/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_zona_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'zona_show')), array (  '_controller' => 'Admin\\UnadBundle\\Controller\\ZonaController::showAction',));
                }
                not_zona_show:

                // zona_edit
                if (preg_match('#^/unad/zona/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_zona_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'zona_edit')), array (  '_controller' => 'Admin\\UnadBundle\\Controller\\ZonaController::editAction',));
                }
                not_zona_edit:

                // zona_update
                if (preg_match('#^/unad/zona/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_zona_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'zona_update')), array (  '_controller' => 'Admin\\UnadBundle\\Controller\\ZonaController::updateAction',));
                }
                not_zona_update:

                // zona_delete
                if (preg_match('#^/unad/zona/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_zona_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'zona_delete')), array (  '_controller' => 'Admin\\UnadBundle\\Controller\\ZonaController::deleteAction',));
                }
                not_zona_delete:

                // zona_index
                if ($pathinfo === '/unad/zona/docs/index') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_zona_index;
                    }

                    return array (  '_controller' => 'Admin\\UnadBundle\\Controller\\ZonaController::listaAction',  '_route' => 'zona_index',);
                }
                not_zona_index:

            }

            if (0 === strpos($pathinfo, '/unad/centro')) {
                // centro
                if (rtrim($pathinfo, '/') === '/unad/centro') {
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
                if ($pathinfo === '/unad/centro/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_centro_create;
                    }

                    return array (  '_controller' => 'Admin\\UnadBundle\\Controller\\CentroController::createAction',  '_route' => 'centro_create',);
                }
                not_centro_create:

                // centro_new
                if ($pathinfo === '/unad/centro/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_centro_new;
                    }

                    return array (  '_controller' => 'Admin\\UnadBundle\\Controller\\CentroController::newAction',  '_route' => 'centro_new',);
                }
                not_centro_new:

                // centro_show
                if (preg_match('#^/unad/centro/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_centro_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'centro_show')), array (  '_controller' => 'Admin\\UnadBundle\\Controller\\CentroController::showAction',));
                }
                not_centro_show:

                // centro_edit
                if (preg_match('#^/unad/centro/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_centro_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'centro_edit')), array (  '_controller' => 'Admin\\UnadBundle\\Controller\\CentroController::editAction',));
                }
                not_centro_edit:

                // centro_update
                if (preg_match('#^/unad/centro/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_centro_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'centro_update')), array (  '_controller' => 'Admin\\UnadBundle\\Controller\\CentroController::updateAction',));
                }
                not_centro_update:

                // centro_delete
                if (preg_match('#^/unad/centro/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_centro_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'centro_delete')), array (  '_controller' => 'Admin\\UnadBundle\\Controller\\CentroController::deleteAction',));
                }
                not_centro_delete:

                if (0 === strpos($pathinfo, '/unad/centro/docs')) {
                    // centro_docs
                    if (preg_match('#^/unad/centro/docs/(?P<id>[^/]++)/pc$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_centro_docs;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'centro_docs')), array (  '_controller' => 'Admin\\UnadBundle\\Controller\\CentroController::docsAction',));
                    }
                    not_centro_docs:

                    // centro_index
                    if ($pathinfo === '/unad/centro/docs/index') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_centro_index;
                        }

                        return array (  '_controller' => 'Admin\\UnadBundle\\Controller\\CentroController::listaAction',  '_route' => 'centro_index',);
                    }
                    not_centro_index:

                }

            }

            if (0 === strpos($pathinfo, '/unad/programa')) {
                // programa
                if (rtrim($pathinfo, '/') === '/unad/programa') {
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

                // programa_periodo
                if (0 === strpos($pathinfo, '/unad/programa/pe') && preg_match('#^/unad/programa/pe/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_programa_periodo;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'programa_periodo')), array (  '_controller' => 'Admin\\UnadBundle\\Controller\\ProgramaController::porperiodoAction',));
                }
                not_programa_periodo:

                // programa_create
                if ($pathinfo === '/unad/programa/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_programa_create;
                    }

                    return array (  '_controller' => 'Admin\\UnadBundle\\Controller\\ProgramaController::createAction',  '_route' => 'programa_create',);
                }
                not_programa_create:

                // programa_new
                if ($pathinfo === '/unad/programa/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_programa_new;
                    }

                    return array (  '_controller' => 'Admin\\UnadBundle\\Controller\\ProgramaController::newAction',  '_route' => 'programa_new',);
                }
                not_programa_new:

                // programa_show
                if (preg_match('#^/unad/programa/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_programa_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'programa_show')), array (  '_controller' => 'Admin\\UnadBundle\\Controller\\ProgramaController::showAction',));
                }
                not_programa_show:

                // programa_modal
                if (preg_match('#^/unad/programa/(?P<id>[^/]++)/modal$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_programa_modal;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'programa_modal')), array (  '_controller' => 'Admin\\UnadBundle\\Controller\\ProgramaController::modalAction',));
                }
                not_programa_modal:

                // programa_edit
                if (preg_match('#^/unad/programa/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_programa_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'programa_edit')), array (  '_controller' => 'Admin\\UnadBundle\\Controller\\ProgramaController::editAction',));
                }
                not_programa_edit:

                // programa_update
                if (preg_match('#^/unad/programa/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_programa_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'programa_update')), array (  '_controller' => 'Admin\\UnadBundle\\Controller\\ProgramaController::updateAction',));
                }
                not_programa_update:

                // programa_delete
                if (preg_match('#^/unad/programa/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_programa_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'programa_delete')), array (  '_controller' => 'Admin\\UnadBundle\\Controller\\ProgramaController::deleteAction',));
                }
                not_programa_delete:

                // programa_addlider
                if ($pathinfo === '/unad/programa/add/lider') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_programa_addlider;
                    }

                    return array (  '_controller' => 'Admin\\UnadBundle\\Controller\\ProgramaController::addliderAction',  '_route' => 'programa_addlider',);
                }
                not_programa_addlider:

            }

            if (0 === strpos($pathinfo, '/unad/doc')) {
                // docente
                if (0 === strpos($pathinfo, '/unad/doc/pe') && preg_match('#^/unad/doc/pe/(?P<periodo>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_docente;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'docente')), array (  '_controller' => 'Admin\\UnadBundle\\Controller\\DocenteController::indexAction',));
                }
                not_docente:

                // docente_home
                if (0 === strpos($pathinfo, '/unad/doc/home') && preg_match('#^/unad/doc/home/(?P<periodo>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_docente_home;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'docente_home')), array (  '_controller' => 'Admin\\UnadBundle\\Controller\\DocenteController::homeAction',));
                }
                not_docente_home:

                // docente_escuela
                if (0 === strpos($pathinfo, '/unad/doc/esc') && preg_match('#^/unad/doc/esc/(?P<id>[^/]++)/(?P<periodo>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_docente_escuela;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'docente_escuela')), array (  '_controller' => 'Admin\\UnadBundle\\Controller\\DocenteController::indexEscuelaAction',));
                }
                not_docente_escuela:

                // docente_vinculacion
                if (0 === strpos($pathinfo, '/unad/doc/vinc') && preg_match('#^/unad/doc/vinc/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_docente_vinculacion;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'docente_vinculacion')), array (  '_controller' => 'Admin\\UnadBundle\\Controller\\DocenteController::indexVinculacionAction',));
                }
                not_docente_vinculacion:

                if (0 === strpos($pathinfo, '/unad/doc/dc')) {
                    // docente_dc
                    if ($pathinfo === '/unad/doc/dc') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_docente_dc;
                        }

                        return array (  '_controller' => 'Admin\\UnadBundle\\Controller\\DocenteController::indexDcAction',  '_route' => 'docente_dc',);
                    }
                    not_docente_dc:

                    // docente_dcescuela
                    if ($pathinfo === '/unad/doc/dc') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_docente_dcescuela;
                        }

                        return array (  '_controller' => 'Admin\\UnadBundle\\Controller\\DocenteController::indexDcescuelaAction',  '_route' => 'docente_dcescuela',);
                    }
                    not_docente_dcescuela:

                }

                // docente_dczona
                if ($pathinfo === '/unad/doc/zn') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_docente_dczona;
                    }

                    return array (  '_controller' => 'Admin\\UnadBundle\\Controller\\DocenteController::indexZonaAction',  '_route' => 'docente_dczona',);
                }
                not_docente_dczona:

                // docente_create
                if ($pathinfo === '/unad/doc/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_docente_create;
                    }

                    return array (  '_controller' => 'Admin\\UnadBundle\\Controller\\DocenteController::createAction',  '_route' => 'docente_create',);
                }
                not_docente_create:

                // docente_new
                if ($pathinfo === '/unad/doc/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_docente_new;
                    }

                    return array (  '_controller' => 'Admin\\UnadBundle\\Controller\\DocenteController::newAction',  '_route' => 'docente_new',);
                }
                not_docente_new:

                // docente_show
                if (preg_match('#^/unad/doc/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_docente_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'docente_show')), array (  '_controller' => 'Admin\\UnadBundle\\Controller\\DocenteController::showAction',));
                }
                not_docente_show:

                // docente_inicio
                if (rtrim($pathinfo, '/') === '/unad/doc/inicio') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_docente_inicio;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'docente_inicio');
                    }

                    return array (  '_controller' => 'Admin\\UnadBundle\\Controller\\DocenteController::inicioAction',  '_route' => 'docente_inicio',);
                }
                not_docente_inicio:

                // docente_info
                if (preg_match('#^/unad/doc/(?P<id>[^/]++)/info$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_docente_info;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'docente_info')), array (  '_controller' => 'Admin\\UnadBundle\\Controller\\DocenteController::infoAction',));
                }
                not_docente_info:

                // docente_edit
                if (preg_match('#^/unad/doc/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_docente_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'docente_edit')), array (  '_controller' => 'Admin\\UnadBundle\\Controller\\DocenteController::editAction',));
                }
                not_docente_edit:

                // docente_update
                if (preg_match('#^/unad/doc/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_docente_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'docente_update')), array (  '_controller' => 'Admin\\UnadBundle\\Controller\\DocenteController::updateAction',));
                }
                not_docente_update:

                // docente_delete
                if (preg_match('#^/unad/doc/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_docente_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'docente_delete')), array (  '_controller' => 'Admin\\UnadBundle\\Controller\\DocenteController::deleteAction',));
                }
                not_docente_delete:

                // docente_final
                if (0 === strpos($pathinfo, '/unad/doc/final') && preg_match('#^/unad/doc/final/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_docente_final;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'docente_final')), array (  '_controller' => 'Admin\\UnadBundle\\Controller\\DocenteController::finalAction',));
                }
                not_docente_final:

                if (0 === strpos($pathinfo, '/unad/doc/observ')) {
                    // docente_observ
                    if (preg_match('#^/unad/doc/observ/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_docente_observ;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'docente_observ')), array (  '_controller' => 'Admin\\UnadBundle\\Controller\\DocenteController::observAction',));
                    }
                    not_docente_observ:

                    // docente_observaciones
                    if (0 === strpos($pathinfo, '/unad/doc/observaciones') && preg_match('#^/unad/doc/observaciones/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PUT') {
                            $allow[] = 'PUT';
                            goto not_docente_observaciones;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'docente_observaciones')), array (  '_controller' => 'Admin\\UnadBundle\\Controller\\DocenteController::observacionesAction',));
                    }
                    not_docente_observaciones:

                }

            }

            if (0 === strpos($pathinfo, '/unad/curso')) {
                // curso
                if (rtrim($pathinfo, '/') === '/unad/curso') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_curso;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'curso');
                    }

                    return array (  '_controller' => 'Admin\\UnadBundle\\Controller\\CursoController::indexAction',  '_route' => 'curso',);
                }
                not_curso:

                // curso_escuela
                if (0 === strpos($pathinfo, '/unad/curso/pe') && preg_match('#^/unad/curso/pe/(?P<sigla>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_curso_escuela;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'curso_escuela')), array (  '_controller' => 'Admin\\UnadBundle\\Controller\\CursoController::porescuelaAction',));
                }
                not_curso_escuela:

                // curso_create
                if ($pathinfo === '/unad/curso/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_curso_create;
                    }

                    return array (  '_controller' => 'Admin\\UnadBundle\\Controller\\CursoController::createAction',  '_route' => 'curso_create',);
                }
                not_curso_create:

                // curso_new
                if ($pathinfo === '/unad/curso/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_curso_new;
                    }

                    return array (  '_controller' => 'Admin\\UnadBundle\\Controller\\CursoController::newAction',  '_route' => 'curso_new',);
                }
                not_curso_new:

                // curso_show
                if (preg_match('#^/unad/curso/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_curso_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'curso_show')), array (  '_controller' => 'Admin\\UnadBundle\\Controller\\CursoController::showAction',));
                }
                not_curso_show:

                // oferta
                if (preg_match('#^/unad/curso/(?P<id>[^/]++)/oferta$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oferta;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oferta')), array (  '_controller' => 'Admin\\UnadBundle\\Controller\\CursoController::ofertaAction',));
                }
                not_oferta:

                // oferta_curso
                if (preg_match('#^/unad/curso/(?P<id>[^/]++)/addoferta$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oferta_curso;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oferta_curso')), array (  '_controller' => 'Admin\\UnadBundle\\Controller\\CursoController::ofertaCursoAction',));
                }
                not_oferta_curso:

                // oferta_tutor
                if (preg_match('#^/unad/curso/(?P<id>[^/]++)/tutor$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oferta_tutor;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oferta_tutor')), array (  '_controller' => 'Admin\\UnadBundle\\Controller\\CursoController::ofertaTutorAction',));
                }
                not_oferta_tutor:

                // curso_modal
                if (preg_match('#^/unad/curso/(?P<id>[^/]++)/modal$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_curso_modal;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'curso_modal')), array (  '_controller' => 'Admin\\UnadBundle\\Controller\\CursoController::modalAction',));
                }
                not_curso_modal:

                // curso_edit
                if (preg_match('#^/unad/curso/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_curso_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'curso_edit')), array (  '_controller' => 'Admin\\UnadBundle\\Controller\\CursoController::editAction',));
                }
                not_curso_edit:

                // oferta_edit
                if (preg_match('#^/unad/curso/(?P<id>[^/]++)/ofertaedit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oferta_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oferta_edit')), array (  '_controller' => 'Admin\\UnadBundle\\Controller\\CursoController::ofertaeditAction',));
                }
                not_oferta_edit:

                // oferta_update
                if (preg_match('#^/unad/curso/(?P<id>[^/]++)/ofertaupdate$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oferta_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oferta_update')), array (  '_controller' => 'Admin\\UnadBundle\\Controller\\CursoController::ofertaupdateAction',));
                }
                not_oferta_update:

                // curso_update
                if (preg_match('#^/unad/curso/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_curso_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'curso_update')), array (  '_controller' => 'Admin\\UnadBundle\\Controller\\CursoController::updateAction',));
                }
                not_curso_update:

                // curso_delete
                if (preg_match('#^/unad/curso/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_curso_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'curso_delete')), array (  '_controller' => 'Admin\\UnadBundle\\Controller\\CursoController::deleteAction',));
                }
                not_curso_delete:

                // tutor_delete
                if (0 === strpos($pathinfo, '/unad/curso/tutor') && preg_match('#^/unad/curso/tutor/(?P<id>[^/]++)/del$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_tutor_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tutor_delete')), array (  '_controller' => 'Admin\\UnadBundle\\Controller\\CursoController::borrartutorAction',));
                }
                not_tutor_delete:

            }

        }

        if (0 === strpos($pathinfo, '/d')) {
            // docente_coevaltutor
            if ($pathinfo === '/doc/coevaltutor') {
                return array (  '_controller' => 'Admin\\UnadBundle\\Controller\\DocenteController::coevaltutorAction',  '_route' => 'docente_coevaltutor',);
            }

            // decano_coevallider
            if ($pathinfo === '/dec/coevallider') {
                return array (  '_controller' => 'Admin\\UnadBundle\\Controller\\EscuelaController::coevalliderAction',  '_route' => 'decano_coevallider',);
            }

        }

        if (0 === strpos($pathinfo, '/admin/user')) {
            // admin_user
            if (rtrim($pathinfo, '/') === '/admin/user') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_admin_user;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'admin_user');
                }

                return array (  '_controller' => 'Admin\\UserBundle\\Controller\\UserController::indexAction',  '_route' => 'admin_user',);
            }
            not_admin_user:

            // admin_user_buscarpor
            if ($pathinfo === '/admin/user/') {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_admin_user_buscarpor;
                }

                return array (  '_controller' => 'Admin\\UserBundle\\Controller\\UserController::buscarporAction',  '_route' => 'admin_user_buscarpor',);
            }
            not_admin_user_buscarpor:

            // admin_user_create
            if ($pathinfo === '/admin/user/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_admin_user_create;
                }

                return array (  '_controller' => 'Admin\\UserBundle\\Controller\\UserController::createAction',  '_route' => 'admin_user_create',);
            }
            not_admin_user_create:

            // admin_user_new
            if ($pathinfo === '/admin/user/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_admin_user_new;
                }

                return array (  '_controller' => 'Admin\\UserBundle\\Controller\\UserController::newAction',  '_route' => 'admin_user_new',);
            }
            not_admin_user_new:

            // admin_user_edit
            if (preg_match('#^/admin/user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_admin_user_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_user_edit')), array (  '_controller' => 'Admin\\UserBundle\\Controller\\UserController::editAction',));
            }
            not_admin_user_edit:

            // admin_user_update
            if (preg_match('#^/admin/user/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_admin_user_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_user_update')), array (  '_controller' => 'Admin\\UserBundle\\Controller\\UserController::updateAction',));
            }
            not_admin_user_update:

            // admin_user_newpass
            if (preg_match('#^/admin/user/(?P<id>[^/]++)/newpass$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_admin_user_newpass;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_user_newpass')), array (  '_controller' => 'Admin\\UserBundle\\Controller\\UserController::newpassAction',));
            }
            not_admin_user_newpass:

            // admin_user_delete
            if (preg_match('#^/admin/user/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_admin_user_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_user_delete')), array (  '_controller' => 'Admin\\UserBundle\\Controller\\UserController::deleteAction',));
            }
            not_admin_user_delete:

        }

        if (0 === strpos($pathinfo, '/home')) {
            // home_user
            if ($pathinfo === '/home') {
                return array (  '_controller' => 'Admin\\UserBundle\\Controller\\DefaultController::homeAction',  '_route' => 'home_user',);
            }

            // home_user_send
            if ($pathinfo === '/home/send') {
                return array (  '_controller' => 'Admin\\UserBundle\\Controller\\DefaultController::sendAction',  '_route' => 'home_user_send',);
            }

            // home_user_inicio
            if ($pathinfo === '/home/inicio') {
                return array (  '_controller' => 'Admin\\UserBundle\\Controller\\DefaultController::indexAction',  '_route' => 'home_user_inicio',);
            }

        }

        // admin_user_show
        if (0 === strpos($pathinfo, '/unad/user') && preg_match('#^/unad/user/(?P<id>[^/]++)/doc$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_user_show')), array (  '_controller' => 'Admin\\UserBundle\\Controller\\UserController::showAction',));
        }

        if (0 === strpos($pathinfo, '/admon/user')) {
            // admon_user
            if ($pathinfo === '/admon/user') {
                return array (  '_controller' => 'Admin\\UserBundle\\Controller\\UserController::indexAction',  '_route' => 'admon_user',);
            }

            // admon_user_buscarpor
            if ($pathinfo === '/admon/user/') {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_admon_user_buscarpor;
                }

                return array (  '_controller' => 'Admin\\UserBundle\\Controller\\UserController::buscarporAction',  '_route' => 'admon_user_buscarpor',);
            }
            not_admon_user_buscarpor:

        }

        // home_user_info
        if ($pathinfo === '/home/info') {
            return array (  '_controller' => 'Admin\\UserBundle\\Controller\\UserController::infoAction',  '_route' => 'home_user_info',);
        }

        // home_pass
        if ($pathinfo === '/getpass') {
            return array (  '_controller' => 'Admin\\UserBundle\\Controller\\UserController::passmedAction',  '_route' => 'home_pass',);
        }

        // home_pass2
        if ($pathinfo === '/setpass') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_home_pass2;
            }

            return array (  '_controller' => 'Admin\\UserBundle\\Controller\\UserController::setpassAction',  '_route' => 'home_pass2',);
        }
        not_home_pass2:

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

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
