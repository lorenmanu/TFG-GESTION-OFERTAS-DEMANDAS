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

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'UserBundle\\Controller\\DefaultController::indexUserAction',  '_route' => 'homepage',);
        }

        // registrovisitasdemanda_default_index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'registrovisitasdemanda_default_index');
            }

            return array (  '_controller' => 'RegistroVisitasDemandaBundle\\Controller\\DefaultController::indexAction',  '_route' => 'registrovisitasdemanda_default_index',);
        }

        if (0 === strpos($pathinfo, '/demandas')) {
            // addDemanda
            if (rtrim($pathinfo, '/') === '/demandas/addDemanda') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'addDemanda');
                }

                return array (  '_controller' => 'DemandaBundle\\Controller\\DefaultController::subirDemandaAction',  '_route' => 'addDemanda',);
            }

            if (0 === strpos($pathinfo, '/demandas/mostrarDemanda')) {
                // mostrarDemandas
                if (rtrim($pathinfo, '/') === '/demandas/mostrarDemandas') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'mostrarDemandas');
                    }

                    return array (  '_controller' => 'DemandaBundle\\Controller\\DefaultController::mostrarDemandasAction',  '_route' => 'mostrarDemandas',);
                }

                // mostrarDemanda
                if (rtrim($pathinfo, '/') === '/demandas/mostrarDemanda') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'mostrarDemanda');
                    }

                    return array (  '_controller' => 'DemandaBundle\\Controller\\DefaultController::mostrarDemandaAction',  '_route' => 'mostrarDemanda',);
                }

            }

            if (0 === strpos($pathinfo, '/demandas/se')) {
                // demanda_search
                if (rtrim($pathinfo, '/') === '/demandas/search_demanda') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'demanda_search');
                    }

                    return array (  '_controller' => 'DemandaBundle\\Controller\\DefaultController::searchDemandaAction',  '_route' => 'demanda_search',);
                }

                // send_emailDemanda
                if (rtrim($pathinfo, '/') === '/demandas/send_email') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'send_emailDemanda');
                    }

                    return array (  '_controller' => 'DemandaBundle\\Controller\\DefaultController::sendEmailAction',  '_route' => 'send_emailDemanda',);
                }

            }

            // editDemanda
            if (rtrim($pathinfo, '/') === '/demandas/editDemanda') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'editDemanda');
                }

                return array (  '_controller' => 'DemandaBundle\\Controller\\DefaultController::editDemandaAction',  '_route' => 'editDemanda',);
            }

            // eliminarDemanda
            if (rtrim($pathinfo, '/') === '/demandas/deleteDemanda') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'eliminarDemanda');
                }

                return array (  '_controller' => 'DemandaBundle\\Controller\\DefaultController::eliminarDemandaAction',  '_route' => 'eliminarDemanda',);
            }

        }

        if (0 === strpos($pathinfo, '/palabrasClave')) {
            // eliminarPalabrasClaveOferta
            if (rtrim($pathinfo, '/') === '/palabrasClaveOferta/eliminarPalabrasClaveOferta') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'eliminarPalabrasClaveOferta');
                }

                return array (  '_controller' => 'PalabrasClaveOfertaBundle\\Controller\\DefaultController::eliminarPalabrasClaveOfertaAction',  '_route' => 'eliminarPalabrasClaveOferta',);
            }

            // eliminarPalabrasClaveDemanda
            if (rtrim($pathinfo, '/') === '/palabrasClaveDemanda/eliminarPalabrasClaveDemanda') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'eliminarPalabrasClaveDemanda');
                }

                return array (  '_controller' => 'PalabrasClaveDemandaBundle\\Controller\\DefaultController::eliminarPalabrasClaveDemandaAction',  '_route' => 'eliminarPalabrasClaveDemanda',);
            }

        }

        // eliminarComentario
        if (rtrim($pathinfo, '/') === '/eliminarComentario') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'eliminarComentario');
            }

            return array (  '_controller' => 'ComentarioBundle\\Controller\\DefaultController::eliminarComentarioAction',  '_route' => 'eliminarComentario',);
        }

        if (0 === strpos($pathinfo, '/admin/tipos')) {
            // addTipo
            if (rtrim($pathinfo, '/') === '/admin/tipos/addTipo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'addTipo');
                }

                return array (  '_controller' => 'TipoBundle\\Controller\\DefaultController::addTipoAction',  '_route' => 'addTipo',);
            }

            // editTipo
            if (rtrim($pathinfo, '/') === '/admin/tipos/editarTipo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'editTipo');
                }

                return array (  '_controller' => 'TipoBundle\\Controller\\DefaultController::editarTipoAction',  '_route' => 'editTipo',);
            }

            // deleteTipo
            if (rtrim($pathinfo, '/') === '/admin/tipos/deleteTipo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'deleteTipo');
                }

                return array (  '_controller' => 'TipoBundle\\Controller\\DefaultController::deleteTipoAction',  '_route' => 'deleteTipo',);
            }

        }

        // registrovisitasoferta_default_index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'registrovisitasoferta_default_index');
            }

            return array (  '_controller' => 'RegistroVisitasOfertaBundle\\Controller\\DefaultController::indexAction',  '_route' => 'registrovisitasoferta_default_index',);
        }

        // registrovisitasusuario_default_index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'registrovisitasusuario_default_index');
            }

            return array (  '_controller' => 'RegistroVisitasUsuarioBundle\\Controller\\DefaultController::indexAction',  '_route' => 'registrovisitasusuario_default_index',);
        }

        // registroofertasdemandas_default_index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'registroofertasdemandas_default_index');
            }

            return array (  '_controller' => 'RegistroOfertasDemandasBundle\\Controller\\DefaultController::indexAction',  '_route' => 'registroofertasdemandas_default_index',);
        }

        // visitas_anio_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'visitas_anio_homepage');
            }

            return array (  '_controller' => 'VisitasAnioBundle\\Controller\\DefaultController::indexAction',  '_route' => 'visitas_anio_homepage',);
        }

        // visitas_mes_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'visitas_mes_homepage');
            }

            return array (  '_controller' => 'VisitasMesBundle\\Controller\\DefaultController::indexAction',  '_route' => 'visitas_mes_homepage',);
        }

        // visitas_dia_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'visitas_dia_homepage');
            }

            return array (  '_controller' => 'VisitasDiaBundle\\Controller\\DefaultController::indexAction',  '_route' => 'visitas_dia_homepage',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_registration_register;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    // fos_user_registration_confirm
                    if (0 === strpos($pathinfo, '/register/confirm') && preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_confirm;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                    }
                    not_fos_user_registration_confirm:

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        // fos_user_registration_confirmed
        if ($pathinfo === '/registration/confirmed') {
            return array (  '_controller' => 'UserBundle\\Controller\\DefaultController::indexUserAction',  '_route' => 'fos_user_registration_confirmed',);
        }

        if (0 === strpos($pathinfo, '/admin')) {
            // deleteUser
            if (rtrim($pathinfo, '/') === '/admin/removeUser') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'deleteUser');
                }

                return array (  '_controller' => 'UserBundle\\Controller\\DefaultController::removeUserAction',  '_route' => 'deleteUser',);
            }

            // editUsers
            if (rtrim($pathinfo, '/') === '/admin/editUsers') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'editUsers');
                }

                return array (  '_controller' => 'UserBundle\\Controller\\DefaultController::editUsersAction',  '_route' => 'editUsers',);
            }

            // perfilUser
            if (rtrim($pathinfo, '/') === '/admin/perfilUser') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'perfilUser');
                }

                return array (  '_controller' => 'UserBundle\\Controller\\DefaultController::perfilUserAction',  '_route' => 'perfilUser',);
            }

        }

        // registroVisitasUser
        if (rtrim($pathinfo, '/') === '/registroVisitasUsers') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'registroVisitasUser');
            }

            return array (  '_controller' => 'UserBundle\\Controller\\DefaultController::registroVisitasUserAction',  '_route' => 'registroVisitasUser',);
        }

        if (0 === strpos($pathinfo, '/ad')) {
            // addUser
            if (rtrim($pathinfo, '/') === '/addUser') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'addUser');
                }

                return array (  '_controller' => 'UserBundle\\Controller\\DefaultController::addUserAction',  '_route' => 'addUser',);
            }

            // select_tipo
            if (rtrim($pathinfo, '/') === '/admin/selectTipo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'select_tipo');
                }

                return array (  '_controller' => 'TipoBundle\\Controller\\DefaultController::selectTipoAction',  '_route' => 'select_tipo',);
            }

        }

        // registroOfertasDemandas
        if ($pathinfo === '/registroOfertasDemandas') {
            return array (  '_controller' => 'UserBundle\\Controller\\DefaultController::registroOfertasDemandasAction',  '_route' => 'registroOfertasDemandas',);
        }

        if (0 === strpos($pathinfo, '/admin/mostrar')) {
            // mostrarOfertasUser
            if ($pathinfo === '/admin/mostrarOfertasUser') {
                return array (  '_controller' => 'UserBundle\\Controller\\DefaultController::mostrarOfertasUserAction',  '_route' => 'mostrarOfertasUser',);
            }

            // mostrarDemandasUser
            if ($pathinfo === '/admin/mostrarDemandasUser') {
                return array (  '_controller' => 'UserBundle\\Controller\\DefaultController::mostrarDemandasUserAction',  '_route' => 'mostrarDemandasUser',);
            }

        }

        if (0 === strpos($pathinfo, '/disciplinas')) {
            // addDisciplina
            if (rtrim($pathinfo, '/') === '/disciplinas/addDisciplina') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'addDisciplina');
                }

                return array (  '_controller' => 'DisciplinaBundle\\Controller\\DefaultController::addDisciplinaAction',  '_route' => 'addDisciplina',);
            }

            // editDisciplina
            if (rtrim($pathinfo, '/') === '/disciplinas/editarDisciplina') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'editDisciplina');
                }

                return array (  '_controller' => 'DisciplinaBundle\\Controller\\DefaultController::editarDisciplinaAction',  '_route' => 'editDisciplina',);
            }

        }

        // select_disciplina
        if (rtrim($pathinfo, '/') === '/selectDisciplina') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'select_disciplina');
            }

            return array (  '_controller' => 'DisciplinaBundle\\Controller\\DefaultController::selectDisciplinaAction',  '_route' => 'select_disciplina',);
        }

        // deleteDisciplina
        if (rtrim($pathinfo, '/') === '/areas/deleteDisciplina') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'deleteDisciplina');
            }

            return array (  '_controller' => 'DisciplinaBundle\\Controller\\DefaultController::deleteDisciplinaAction',  '_route' => 'deleteDisciplina',);
        }

        if (0 === strpos($pathinfo, '/ramas')) {
            // addRama
            if (rtrim($pathinfo, '/') === '/ramas/addRama') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'addRama');
                }

                return array (  '_controller' => 'RamaBundle\\Controller\\DefaultController::addRamaAction',  '_route' => 'addRama',);
            }

            // editRama
            if (rtrim($pathinfo, '/') === '/ramas/editarRama') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'editRama');
                }

                return array (  '_controller' => 'RamaBundle\\Controller\\DefaultController::editarRamaAction',  '_route' => 'editRama',);
            }

        }

        // select_rama
        if (rtrim($pathinfo, '/') === '/selectRama') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'select_rama');
            }

            return array (  '_controller' => 'RamaBundle\\Controller\\DefaultController::selectRamaAction',  '_route' => 'select_rama',);
        }

        // deleteRama
        if (rtrim($pathinfo, '/') === '/ramas/deleteRama') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'deleteRama');
            }

            return array (  '_controller' => 'RamaBundle\\Controller\\DefaultController::deleteRamaAction',  '_route' => 'deleteRama',);
        }

        if (0 === strpos($pathinfo, '/admin/areas')) {
            // addArea
            if (rtrim($pathinfo, '/') === '/admin/areas/addArea') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'addArea');
                }

                return array (  '_controller' => 'AreaBundle\\Controller\\DefaultController::addAreaAction',  '_route' => 'addArea',);
            }

            if (0 === strpos($pathinfo, '/admin/areas/editar')) {
                // editarMenu
                if (rtrim($pathinfo, '/') === '/admin/areas/editarMenu') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'editarMenu');
                    }

                    return array (  '_controller' => 'AreaBundle\\Controller\\DefaultController::editarMenuAction',  '_route' => 'editarMenu',);
                }

                // editArea
                if (rtrim($pathinfo, '/') === '/admin/areas/editarArea') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'editArea');
                    }

                    return array (  '_controller' => 'AreaBundle\\Controller\\DefaultController::editarAreaAction',  '_route' => 'editArea',);
                }

            }

            // deleteArea
            if (rtrim($pathinfo, '/') === '/admin/areas/deleteArea') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'deleteArea');
                }

                return array (  '_controller' => 'AreaBundle\\Controller\\DefaultController::deleteAreaAction',  '_route' => 'deleteArea',);
            }

        }

        if (0 === strpos($pathinfo, '/ofertas')) {
            // addOferta
            if (rtrim($pathinfo, '/') === '/ofertas/addOferta') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'addOferta');
                }

                return array (  '_controller' => 'OfertaBundle\\Controller\\DefaultController::subirOfertaAction',  '_route' => 'addOferta',);
            }

            if (0 === strpos($pathinfo, '/ofertas/mostrarOferta')) {
                // mostrarOfertas
                if (rtrim($pathinfo, '/') === '/ofertas/mostrarOfertas') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'mostrarOfertas');
                    }

                    return array (  '_controller' => 'OfertaBundle\\Controller\\DefaultController::mostrarOfertasAction',  '_route' => 'mostrarOfertas',);
                }

                // mostrarOferta
                if (rtrim($pathinfo, '/') === '/ofertas/mostrarOferta') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'mostrarOferta');
                    }

                    return array (  '_controller' => 'OfertaBundle\\Controller\\DefaultController::mostrarOfertaAction',  '_route' => 'mostrarOferta',);
                }

            }

            // oferta_lista
            if (rtrim($pathinfo, '/') === '/ofertas/area_lista') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'oferta_lista');
                }

                return array (  '_controller' => 'OfertaBundle\\Controller\\DefaultController::searchAreaAction',  '_route' => 'oferta_lista',);
            }

            if (0 === strpos($pathinfo, '/ofertas/se')) {
                // oferta_search
                if (rtrim($pathinfo, '/') === '/ofertas/search_oferta') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'oferta_search');
                    }

                    return array (  '_controller' => 'OfertaBundle\\Controller\\DefaultController::searchOfertaAction',  '_route' => 'oferta_search',);
                }

                // send_emailOferta
                if (rtrim($pathinfo, '/') === '/ofertas/send_email') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'send_emailOferta');
                    }

                    return array (  '_controller' => 'OfertaBundle\\Controller\\DefaultController::sendEmailAction',  '_route' => 'send_emailOferta',);
                }

            }

            // editOferta
            if (rtrim($pathinfo, '/') === '/ofertas/editOferta') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'editOferta');
                }

                return array (  '_controller' => 'OfertaBundle\\Controller\\DefaultController::editOfertaAction',  '_route' => 'editOferta',);
            }

            // eliminarOferta
            if (rtrim($pathinfo, '/') === '/ofertas/deleteOferta') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'eliminarOferta');
                }

                return array (  '_controller' => 'OfertaBundle\\Controller\\DefaultController::eliminarOfertaAction',  '_route' => 'eliminarOferta',);
            }

            // sumarVisitas
            if (rtrim($pathinfo, '/') === '/ofertas/sumarVisitas') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sumarVisitas');
                }

                return array (  '_controller' => 'OfertaBundle\\Controller\\DefaultController::sumarVisitasOfertaAction',  '_route' => 'sumarVisitas',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
