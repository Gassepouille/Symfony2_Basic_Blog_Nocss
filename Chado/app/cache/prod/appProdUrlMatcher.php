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

        // chado_main_index
        if (preg_match('#^/(?P<page>\\d+)?(?:/(?P<filter>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'chado_main_index')), array (  '_controller' => 'Chado\\MainBundle\\Controller\\DefaultController::indexAction',  'page' => 0,  'filter' => NULL,));
        }

        if (0 === strpos($pathinfo, '/s')) {
            // chado_main_single
            if (0 === strpos($pathinfo, '/single') && preg_match('#^/single/(?P<id>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'chado_main_single');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'chado_main_single')), array (  '_controller' => 'Chado\\MainBundle\\Controller\\DefaultController::singleAction',));
            }

            // chado_main_search
            if (0 === strpos($pathinfo, '/search') && preg_match('#^/search/(?P<kw>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'chado_main_search')), array (  '_controller' => 'Chado\\MainBundle\\Controller\\DefaultController::searchAction',));
            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // chado_main_login
                if (rtrim($pathinfo, '/') === '/login') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'chado_main_login');
                    }

                    return array (  '_controller' => 'Chado\\MainBundle\\Controller\\UserfuncController::loginAction',  '_route' => 'chado_main_login',);
                }

                // chado_main_login_check
                if (rtrim($pathinfo, '/') === '/login_check') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'chado_main_login_check');
                    }

                    return array('_route' => 'chado_main_login_check');
                }

            }

            // chado_main_logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'chado_main_logout');
            }

        }

        // chado_main_register
        if (rtrim($pathinfo, '/') === '/register') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'chado_main_register');
            }

            return array (  '_controller' => 'Chado\\MainBundle\\Controller\\UserfuncController::registerAction',  '_route' => 'chado_main_register',);
        }

        // chado_main_forgot
        if (rtrim($pathinfo, '/') === '/forgot') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'chado_main_forgot');
            }

            return array (  '_controller' => 'Chado\\MainBundle\\Controller\\UserfuncController::forgotAction',  '_route' => 'chado_main_forgot',);
        }

        // chado_main_resetpass
        if (0 === strpos($pathinfo, '/resetpass') && preg_match('#^/resetpass/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'chado_main_resetpass')), array (  '_controller' => 'Chado\\MainBundle\\Controller\\UserfuncController::resetpassAction',));
        }

        if (0 === strpos($pathinfo, '/admin')) {
            // chado_main_admin
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'chado_main_admin');
                }

                return array (  '_controller' => 'Chado\\MainBundle\\Controller\\AdminController::indexAction',  '_route' => 'chado_main_admin',);
            }

            // chado_main_admincreate
            if (0 === strpos($pathinfo, '/admin/create') && preg_match('#^/admin/create(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'chado_main_admincreate')), array (  '_controller' => 'Chado\\MainBundle\\Controller\\AdminController::createAction',  'id' => 0,));
            }

            // chado_main_adminstatus
            if (0 === strpos($pathinfo, '/admin/status') && preg_match('#^/admin/status/(?P<id>[^/]++)/(?P<status>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'chado_main_adminstatus')), array (  '_controller' => 'Chado\\MainBundle\\Controller\\AdminController::statusAction',));
            }

            // chado_main_admindelete
            if (0 === strpos($pathinfo, '/admin/delete') && preg_match('#^/admin/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'chado_main_admindelete')), array (  '_controller' => 'Chado\\MainBundle\\Controller\\AdminController::deleteAction',));
            }

            // chado_main_admincreatetag
            if (rtrim($pathinfo, '/') === '/admin/createtag') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'chado_main_admincreatetag');
                }

                return array (  '_controller' => 'Chado\\MainBundle\\Controller\\AdminController::createTagAction',  '_route' => 'chado_main_admincreatetag',);
            }

            // chado_main_admintaglist
            if (rtrim($pathinfo, '/') === '/admin/taglist') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'chado_main_admintaglist');
                }

                return array (  '_controller' => 'Chado\\MainBundle\\Controller\\AdminController::tagListAction',  '_route' => 'chado_main_admintaglist',);
            }

            if (0 === strpos($pathinfo, '/admin/com')) {
                // chado_main_admincomments
                if (0 === strpos($pathinfo, '/admin/comments') && preg_match('#^/admin/comments/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'chado_main_admincomments')), array (  '_controller' => 'Chado\\MainBundle\\Controller\\AdminController::commentsListAction',));
                }

                // chado_main_admincomdel
                if (0 === strpos($pathinfo, '/admin/comdel') && preg_match('#^/admin/comdel/(?P<id>[^/]++)/(?P<article_id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'chado_main_admincomdel')), array (  '_controller' => 'Chado\\MainBundle\\Controller\\AdminController::deletecomAction',));
                }

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
