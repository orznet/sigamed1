<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Admin\\UserBundle\\Controller\\DefaultController::indexAction',  '_route' => '_welcome',);
        }

        if (0 === strpos($pathinfo, '/planm')) {
            // planmejoramiento
            if (rtrim($pathinfo, '/') === '/planm') {
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
            if ($pathinfo === '/planm/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_planmejoramiento_create;
                }

                return array (  '_controller' => 'Admin\\MedBundle\\Controller\\PlanmejoramientoController::createAction',  '_route' => 'planmejoramiento_create',);
            }
            not_planmejoramiento_create:

            // planmejoramiento_new
            if ($pathinfo === '/planm/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_planmejoramiento_new;
                }

                return array (  '_controller' => 'Admin\\MedBundle\\Controller\\PlanmejoramientoController::newAction',  '_route' => 'planmejoramiento_new',);
            }
            not_planmejoramiento_new:

            if (0 === strpos($pathinfo, '/planm/add')) {
                // planmejoramiento_add
                if ($pathinfo === '/planm/add') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_planmejoramiento_add;
                    }

                    return array (  '_controller' => 'Admin\\MedBundle\\Controller\\PlanmejoramientoController::addAction',  '_route' => 'planmejoramiento_add',);
                }
                not_planmejoramiento_add:

                // planmejoramiento_agregar
                if (preg_match('#^/planm/add/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_planmejoramiento_agregar;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'planmejoramiento_agregar')), array (  '_controller' => 'Admin\\MedBundle\\Controller\\PlanmejoramientoController::agregarAction',));
                }
                not_planmejoramiento_agregar:

            }

            // planmejoramiento_show
            if (preg_match('#^/planm/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_planmejoramiento_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'planmejoramiento_show')), array (  '_controller' => 'Admin\\MedBundle\\Controller\\PlanmejoramientoController::showAction',));
            }
            not_planmejoramiento_show:

            // planmejoramiento_edit
            if (preg_match('#^/planm/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_planmejoramiento_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'planmejoramiento_edit')), array (  '_controller' => 'Admin\\MedBundle\\Controller\\PlanmejoramientoController::editAction',));
            }
            not_planmejoramiento_edit:

            // planmejoramiento_update
            if (preg_match('#^/planm/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_planmejoramiento_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'planmejoramiento_update')), array (  '_controller' => 'Admin\\MedBundle\\Controller\\PlanmejoramientoController::updateAction',));
            }
            not_planmejoramiento_update:

            // planmejoramiento_delete
            if (preg_match('#^/planm/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_planmejoramiento_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'planmejoramiento_delete')), array (  '_controller' => 'Admin\\MedBundle\\Controller\\PlanmejoramientoController::deleteAction',));
            }
            not_planmejoramiento_delete:

            if (0 === strpos($pathinfo, '/planm/acciones')) {
                // accionespm
                if (rtrim($pathinfo, '/') === '/planm/acciones') {
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
                if ($pathinfo === '/planm/acciones/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_accionespm_create;
                    }

                    return array (  '_controller' => 'Admin\\MedBundle\\Controller\\AccionespmController::createAction',  '_route' => 'accionespm_create',);
                }
                not_accionespm_create:

                // accionespm_new
                if (0 === strpos($pathinfo, '/planm/acciones/new') && preg_match('#^/planm/acciones/new/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_accionespm_new;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'accionespm_new')), array (  '_controller' => 'Admin\\MedBundle\\Controller\\AccionespmController::newAction',));
                }
                not_accionespm_new:

                // accionespm_show
                if (preg_match('#^/planm/acciones/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_accionespm_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'accionespm_show')), array (  '_controller' => 'Admin\\MedBundle\\Controller\\AccionespmController::showAction',));
                }
                not_accionespm_show:

                // accionespm_edit
                if (preg_match('#^/planm/acciones/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_accionespm_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'accionespm_edit')), array (  '_controller' => 'Admin\\MedBundle\\Controller\\AccionespmController::editAction',));
                }
                not_accionespm_edit:

                // accionespm_update
                if (preg_match('#^/planm/acciones/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_accionespm_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'accionespm_update')), array (  '_controller' => 'Admin\\MedBundle\\Controller\\AccionespmController::updateAction',));
                }
                not_accionespm_update:

                // accionespm_delete
                if (preg_match('#^/planm/acciones/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_accionespm_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'accionespm_delete')), array (  '_controller' => 'Admin\\MedBundle\\Controller\\AccionespmController::deleteAction',));
                }
                not_accionespm_delete:

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

        if (0 === strpos($pathinfo, '/docente')) {
            // docente
            if (rtrim($pathinfo, '/') === '/docente') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_docente;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'docente');
                }

                return array (  '_controller' => 'Admin\\UnadBundle\\Controller\\DocenteController::indexAction',  '_route' => 'docente',);
            }
            not_docente:

            // docente_escuela
            if (0 === strpos($pathinfo, '/docente/esc') && preg_match('#^/docente/esc/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_docente_escuela;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'docente_escuela')), array (  '_controller' => 'Admin\\UnadBundle\\Controller\\DocenteController::indexEscuelaAction',));
            }
            not_docente_escuela:

            // docente_create
            if ($pathinfo === '/docente/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_docente_create;
                }

                return array (  '_controller' => 'Admin\\UnadBundle\\Controller\\DocenteController::createAction',  '_route' => 'docente_create',);
            }
            not_docente_create:

            // docente_new
            if ($pathinfo === '/docente/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_docente_new;
                }

                return array (  '_controller' => 'Admin\\UnadBundle\\Controller\\DocenteController::newAction',  '_route' => 'docente_new',);
            }
            not_docente_new:

            // docente_show
            if (preg_match('#^/docente/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_docente_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'docente_show')), array (  '_controller' => 'Admin\\UnadBundle\\Controller\\DocenteController::showAction',));
            }
            not_docente_show:

            // docente_edit
            if (preg_match('#^/docente/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_docente_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'docente_edit')), array (  '_controller' => 'Admin\\UnadBundle\\Controller\\DocenteController::editAction',));
            }
            not_docente_edit:

            // docente_update
            if (preg_match('#^/docente/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_docente_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'docente_update')), array (  '_controller' => 'Admin\\UnadBundle\\Controller\\DocenteController::updateAction',));
            }
            not_docente_update:

            // docente_delete
            if (preg_match('#^/docente/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_docente_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'docente_delete')), array (  '_controller' => 'Admin\\UnadBundle\\Controller\\DocenteController::deleteAction',));
            }
            not_docente_delete:

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

        // admin_user_info
        if ($pathinfo === '/info/user') {
            return array (  '_controller' => 'Admin\\UserBundle\\Controller\\UserController::infoAction',  '_route' => 'admin_user_info',);
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

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
