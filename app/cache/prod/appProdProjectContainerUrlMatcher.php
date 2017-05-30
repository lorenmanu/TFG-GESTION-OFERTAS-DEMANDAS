<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        // comentario_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'comentario_homepage');
            }

            return array (  '_controller' => 'ComentarioBundle\\Controller\\DefaultController::indexAction',  '_route' => 'comentario_homepage',);
        }

        if (0 === strpos($pathinfo, '/disciplinas')) {
            // addDisciplina
            if (rtrim($pathinfo, '/') === '/disciplinas/addDisciplina') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'addDisciplina');
                }

                return array (  '_controller' => 'DisciplinaBundle\\Controller\\DefaultController::addDisciplinaAction',  '_route' => 'addDisciplina',);
            }

            // mostrarDisciplinas
            if (rtrim($pathinfo, '/') === '/disciplinas/mostrarDisciplinas') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'mostrarDisciplinas');
                }

                return array (  '_controller' => 'DisciplinaBundle\\Controller\\DefaultController::mostrarDisciplinasAction',  '_route' => 'mostrarDisciplinas',);
            }

        }

        if (0 === strpos($pathinfo, '/ramas')) {
            // addRama
            if (rtrim($pathinfo, '/') === '/ramas/addRama') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'addRama');
                }

                return array (  '_controller' => 'RamaBundle\\Controller\\DefaultController::addRamaAction',  '_route' => 'addRama',);
            }

            // mostrarRamas
            if (rtrim($pathinfo, '/') === '/ramas/mostrarRamas') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'mostrarRamas');
                }

                return array (  '_controller' => 'RamaBundle\\Controller\\DefaultController::mostrarRamasAction',  '_route' => 'mostrarRamas',);
            }

        }

        if (0 === strpos($pathinfo, '/areas')) {
            // addArea
            if (rtrim($pathinfo, '/') === '/areas/addArea') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'addArea');
                }

                return array (  '_controller' => 'AreaBundle\\Controller\\DefaultController::addAreaAction',  '_route' => 'addArea',);
            }

            // mostrarAreas
            if (rtrim($pathinfo, '/') === '/areas/mostrarAreas') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'mostrarAreas');
                }

                return array (  '_controller' => 'AreaBundle\\Controller\\DefaultController::mostrarAreasAction',  '_route' => 'mostrarAreas',);
            }

        }

        // demanda_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'demanda_homepage');
            }

            return array (  '_controller' => 'DemandaBundle\\Controller\\DefaultController::indexAction',  '_route' => 'demanda_homepage',);
        }

        // portada
        if (rtrim($pathinfo, '/') === '/demandas') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'portada');
            }

            return array (  '_controller' => 'OfertaBundle\\Controller\\DefaultController::portadaAction',  '_route' => 'portada',);
        }

        // addOferta
        if (rtrim($pathinfo, '/') === '/addOferta') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'addOferta');
            }

            return array (  '_controller' => 'OfertaBundle\\Controller\\DefaultController::subirOfertaAction',  '_route' => 'addOferta',);
        }

        // mostrarOfertas
        if (rtrim($pathinfo, '/') === '/mostrarOfertas') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'mostrarOfertas');
            }

            return array (  '_controller' => 'OfertaBundle\\Controller\\DefaultController::mostrarOfertasAction',  '_route' => 'mostrarOfertas',);
        }

        // showOferta
        if (rtrim($pathinfo, '/') === '/showOferta') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'showOferta');
            }

            return array (  '_controller' => 'OfertaBundle\\Controller\\DefaultController::showOfertaAction',  '_route' => 'showOferta',);
        }

        // deleteComment
        if (rtrim($pathinfo, '/') === '/deleteComment') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'deleteComment');
            }

            return array (  '_controller' => 'OfertaBundle\\Controller\\DefaultController::deleteCommentAction',  '_route' => 'deleteComment',);
        }

        if (0 === strpos($pathinfo, '/select')) {
            // select_ramas
            if (rtrim($pathinfo, '/') === '/selectRamas') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'select_ramas');
                }

                return array (  '_controller' => 'OfertaBundle\\Controller\\DefaultController::selectRamasAction',  '_route' => 'select_ramas',);
            }

            // select_disciplinas
            if (rtrim($pathinfo, '/') === '/selectDisciplinas') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'select_disciplinas');
                }

                return array (  '_controller' => 'OfertaBundle\\Controller\\DefaultController::selectDisciplinasAction',  '_route' => 'select_disciplinas',);
            }

        }

        // oferta_lista
        if (rtrim($pathinfo, '/') === '/area_lista') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'oferta_lista');
            }

            return array (  '_controller' => 'OfertaBundle\\Controller\\DefaultController::searchAreaAction',  '_route' => 'oferta_lista',);
        }

        // oferta_search
        if (rtrim($pathinfo, '/') === '/search_oferta') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'oferta_search');
            }

            return array (  '_controller' => 'OfertaBundle\\Controller\\DefaultController::searchOfertaAction',  '_route' => 'oferta_search',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
