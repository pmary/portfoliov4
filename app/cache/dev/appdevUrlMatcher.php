<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appdevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        // _assetic_3e83e26
        if ($pathinfo === '/css/3e83e26.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '3e83e26',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_3e83e26',);
        }

        // _assetic_3e83e26_0
        if ($pathinfo === '/css/3e83e26_style_1.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '3e83e26',  'pos' => '0',  '_format' => 'css',  '_route' => '_assetic_3e83e26_0',);
        }

        // _assetic_6b27d25
        if ($pathinfo === '/css/6b27d25.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '6b27d25',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_6b27d25',);
        }

        // _assetic_6b27d25_0
        if ($pathinfo === '/css/6b27d25_style_1.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '6b27d25',  'pos' => '0',  '_format' => 'css',  '_route' => '_assetic_6b27d25_0',);
        }

        // _assetic_6b27d25_1
        if ($pathinfo === '/css/6b27d25_responsive_2.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '6b27d25',  'pos' => '1',  '_format' => 'css',  '_route' => '_assetic_6b27d25_1',);
        }

        // _assetic_6b27d25_2
        if ($pathinfo === '/css/6b27d25_menu_3.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '6b27d25',  'pos' => '2',  '_format' => 'css',  '_route' => '_assetic_6b27d25_2',);
        }

        // _assetic_6b27d25_3
        if ($pathinfo === '/css/6b27d25_bootstrap_4.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '6b27d25',  'pos' => '3',  '_format' => 'css',  '_route' => '_assetic_6b27d25_3',);
        }

        // _assetic_6b27d25_4
        if ($pathinfo === '/css/6b27d25_bootstrap-responsive_5.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '6b27d25',  'pos' => '4',  '_format' => 'css',  '_route' => '_assetic_6b27d25_4',);
        }

        // _assetic_6b27d25_5
        if ($pathinfo === '/css/6b27d25_admin_6.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '6b27d25',  'pos' => '5',  '_format' => 'css',  '_route' => '_assetic_6b27d25_5',);
        }

        // _assetic_8018e4f
        if ($pathinfo === '/js/8018e4f.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '8018e4f',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_8018e4f',);
        }

        // _assetic_8018e4f_0
        if ($pathinfo === '/js/8018e4f_modernizr_1.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '8018e4f',  'pos' => '0',  '_format' => 'js',  '_route' => '_assetic_8018e4f_0',);
        }

        // _assetic_8018e4f_1
        if ($pathinfo === '/js/8018e4f_masonry.min_2.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '8018e4f',  'pos' => '1',  '_format' => 'js',  '_route' => '_assetic_8018e4f_1',);
        }

        // _assetic_8018e4f_2
        if ($pathinfo === '/js/8018e4f_easing_3.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '8018e4f',  'pos' => '2',  '_format' => 'js',  '_route' => '_assetic_8018e4f_2',);
        }

        // _assetic_8018e4f_3
        if ($pathinfo === '/js/8018e4f_jquery.ui.totop.min_4.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '8018e4f',  'pos' => '3',  '_format' => 'js',  '_route' => '_assetic_8018e4f_3',);
        }

        // _assetic_8018e4f_4
        if ($pathinfo === '/js/8018e4f_main_5.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '8018e4f',  'pos' => '4',  '_format' => 'js',  '_route' => '_assetic_8018e4f_4',);
        }

        // _assetic_8018e4f_5
        if ($pathinfo === '/js/8018e4f_bootstrap.min_6.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '8018e4f',  'pos' => '5',  '_format' => 'js',  '_route' => '_assetic_8018e4f_5',);
        }

        // _assetic_e84afde
        if ($pathinfo === '/css/e84afde.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'e84afde',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_e84afde',);
        }

        // _assetic_e84afde_0
        if ($pathinfo === '/css/e84afde_style_1.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'e84afde',  'pos' => '0',  '_format' => 'css',  '_route' => '_assetic_e84afde_0',);
        }

        // _assetic_e84afde_1
        if ($pathinfo === '/css/e84afde_responsive_2.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'e84afde',  'pos' => '1',  '_format' => 'css',  '_route' => '_assetic_e84afde_1',);
        }

        // _assetic_e84afde_2
        if ($pathinfo === '/css/e84afde_menu_3.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'e84afde',  'pos' => '2',  '_format' => 'css',  '_route' => '_assetic_e84afde_2',);
        }

        // _assetic_cb01551
        if ($pathinfo === '/js/cb01551.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'cb01551',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_cb01551',);
        }

        // _assetic_cb01551_0
        if ($pathinfo === '/js/cb01551_modernizr_1.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'cb01551',  'pos' => '0',  '_format' => 'js',  '_route' => '_assetic_cb01551_0',);
        }

        // _assetic_cb01551_1
        if ($pathinfo === '/js/cb01551_masonry.min_2.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'cb01551',  'pos' => '1',  '_format' => 'js',  '_route' => '_assetic_cb01551_1',);
        }

        // _assetic_cb01551_2
        if ($pathinfo === '/js/cb01551_easing_3.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'cb01551',  'pos' => '2',  '_format' => 'js',  '_route' => '_assetic_cb01551_2',);
        }

        // _assetic_cb01551_3
        if ($pathinfo === '/js/cb01551_jquery.ui.totop.min_4.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'cb01551',  'pos' => '3',  '_format' => 'js',  '_route' => '_assetic_cb01551_3',);
        }

        // _assetic_cb01551_4
        if ($pathinfo === '/js/cb01551_main_5.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'cb01551',  'pos' => '4',  '_format' => 'js',  '_route' => '_assetic_cb01551_4',);
        }

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Pm\\PortfolioBundle\\Controller\\PortfolioController::indexAction',  '_route' => '_welcome',);
        }

        // _wdt
        if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',)), array('_route' => '_wdt'));
        }

        if (0 === strpos($pathinfo, '/_profiler')) {
            // _profiler_search
            if ($pathinfo === '/_profiler/search') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',  '_route' => '_profiler_search',);
            }

            // _profiler_purge
            if ($pathinfo === '/_profiler/purge') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',  '_route' => '_profiler_purge',);
            }

            // _profiler_info
            if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::infoAction',)), array('_route' => '_profiler_info'));
            }

            // _profiler_import
            if ($pathinfo === '/_profiler/import') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',  '_route' => '_profiler_import',);
            }

            // _profiler_export
            if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]+)\\.txt$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',)), array('_route' => '_profiler_export'));
            }

            // _profiler_phpinfo
            if ($pathinfo === '/_profiler/phpinfo') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::phpinfoAction',  '_route' => '_profiler_phpinfo',);
            }

            // _profiler_search_results
            if (preg_match('#^/_profiler/(?P<token>[^/]+)/search/results$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',)), array('_route' => '_profiler_search_results'));
            }

            // _profiler
            if (preg_match('#^/_profiler/(?P<token>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',)), array('_route' => '_profiler'));
            }

            // _profiler_redirect
            if (rtrim($pathinfo, '/') === '/_profiler') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_profiler_redirect');
                }

                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => '_profiler_search_results',  'token' => 'empty',  'ip' => '',  'url' => '',  'method' => '',  'limit' => '10',  '_route' => '_profiler_redirect',);
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
            if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',)), array('_route' => '_configurator_step'));
            }

            // _configurator_final
            if ($pathinfo === '/_configurator/final') {
                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
            }

        }

        // pm_user_default_index
        if (0 === strpos($pathinfo, '/back/hello') && preg_match('#^/back/hello/(?P<name>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Pm\\UserBundle\\Controller\\DefaultController::indexAction',)), array('_route' => 'pm_user_default_index'));
        }

        // pm_portfolio_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'pm_portfolio_homepage');
            }

            return array (  '_controller' => 'Pm\\PortfolioBundle\\Controller\\PortfolioController::indexAction',  '_route' => 'pm_portfolio_homepage',);
        }

        // pm_portfolio_creationpage
        if ($pathinfo === '/portfolio') {
            return array (  '_controller' => 'Pm\\PortfolioBundle\\Controller\\PortfolioController::portfolioAction',  '_route' => 'pm_portfolio_creationpage',);
        }

        // pm_portfolio_projectcard
        if (0 === strpos($pathinfo, '/portfolio') && preg_match('#^/portfolio/(?P<id>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Pm\\PortfolioBundle\\Controller\\PortfolioController::projectcardAction',)), array('_route' => 'pm_portfolio_projectcard'));
        }

        // pm_portfolio_admin_homepage
        if (rtrim($pathinfo, '/') === '/admin') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'pm_portfolio_admin_homepage');
            }

            return array (  '_controller' => 'Pm\\PortfolioBundle\\Controller\\PortfolioController::adminhomeAction',  '_route' => 'pm_portfolio_admin_homepage',);
        }

        // pm_portfolio_admin_projects
        if (rtrim($pathinfo, '/') === '/admin/projects') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'pm_portfolio_admin_projects');
            }

            return array (  '_controller' => 'Pm\\PortfolioBundle\\Controller\\PortfolioController::adminprojectsAction',  '_route' => 'pm_portfolio_admin_projects',);
        }

        // pm_portfolio_admin_projects_edit
        if (0 === strpos($pathinfo, '/admin/projects/edit') && preg_match('#^/admin/projects/edit/(?P<id>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Pm\\PortfolioBundle\\Controller\\PortfolioController::adminprojectseditAction',)), array('_route' => 'pm_portfolio_admin_projects_edit'));
        }

        // fos_user_security_login
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
        }

        // fos_user_security_check
        if ($pathinfo === '/login_check') {
            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
        }

        // fos_user_security_logout
        if ($pathinfo === '/logout') {
            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
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
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }

        }

        if (0 === strpos($pathinfo, '/register')) {
            // fos_user_registration_register
            if (rtrim($pathinfo, '/') === '/register') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
            }

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
            if (0 === strpos($pathinfo, '/register/confirm') && preg_match('#^/register/confirm/(?P<token>[^/]+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_registration_confirm;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',)), array('_route' => 'fos_user_registration_confirm'));
            }
            not_fos_user_registration_confirm:

            // fos_user_registration_confirmed
            if ($pathinfo === '/register/confirmed') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_registration_confirmed;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
            }
            not_fos_user_registration_confirmed:

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
            if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_resetting_reset;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',)), array('_route' => 'fos_user_resetting_reset'));
            }
            not_fos_user_resetting_reset:

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

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
