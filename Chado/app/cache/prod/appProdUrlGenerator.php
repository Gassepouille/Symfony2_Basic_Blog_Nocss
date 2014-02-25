<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRoutes = array(
        'chado_main_index' => array (  0 =>   array (    0 => 'page',    1 => 'filter',  ),  1 =>   array (    '_controller' => 'Chado\\MainBundle\\Controller\\DefaultController::indexAction',    'page' => 0,    'filter' => NULL,  ),  2 =>   array (    'page' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'filter',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'page',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'chado_main_single' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Chado\\MainBundle\\Controller\\DefaultController::singleAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/single',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'chado_main_search' => array (  0 =>   array (    0 => 'kw',  ),  1 =>   array (    '_controller' => 'Chado\\MainBundle\\Controller\\DefaultController::searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'kw',    ),    1 =>     array (      0 => 'text',      1 => '/search',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'chado_main_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Chado\\MainBundle\\Controller\\UserfuncController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'chado_main_login_check' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'chado_main_logout' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'chado_main_register' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Chado\\MainBundle\\Controller\\UserfuncController::registerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'chado_main_forgot' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Chado\\MainBundle\\Controller\\UserfuncController::forgotAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/forgot/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'chado_main_resetpass' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'Chado\\MainBundle\\Controller\\UserfuncController::resetpassAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/resetpass',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'chado_main_admin' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Chado\\MainBundle\\Controller\\AdminController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'chado_main_admincreate' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Chado\\MainBundle\\Controller\\AdminController::createAction',    'id' => 0,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'chado_main_adminstatus' => array (  0 =>   array (    0 => 'id',    1 => 'status',  ),  1 =>   array (    '_controller' => 'Chado\\MainBundle\\Controller\\AdminController::statusAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'status',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/status',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'chado_main_admindelete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Chado\\MainBundle\\Controller\\AdminController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'chado_main_admincreatetag' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Chado\\MainBundle\\Controller\\AdminController::createTagAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/createtag/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'chado_main_admintaglist' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Chado\\MainBundle\\Controller\\AdminController::tagListAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/taglist/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'chado_main_admincomments' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Chado\\MainBundle\\Controller\\AdminController::commentsListAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/comments',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'chado_main_admincomdel' => array (  0 =>   array (    0 => 'id',    1 => 'article_id',  ),  1 =>   array (    '_controller' => 'Chado\\MainBundle\\Controller\\AdminController::deletecomAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'article_id',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/comdel',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
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
