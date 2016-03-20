<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
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

        }

        if (0 === strpos($pathinfo, '/api')) {
            // app_api_hello
            if ($pathinfo === '/api/hello') {
                return array (  '_controller' => 'AppBundle\\Controller\\ApiController::helloAction',  '_route' => 'app_api_hello',);
            }

            if (0 === strpos($pathinfo, '/api/t')) {
                // app_api_gettickets
                if (0 === strpos($pathinfo, '/api/tickets') && preg_match('#^/api/tickets/(?P<iddev>\\w+)/(?P<idproj>\\w+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_api_gettickets')), array (  '_controller' => 'AppBundle\\Controller\\ApiController::getTicketsAction',));
                }

                // app_api_todos
                if ($pathinfo === '/api/todos') {
                    return array (  '_controller' => 'AppBundle\\Controller\\ApiController::todosAction',  '_route' => 'app_api_todos',);
                }

            }

        }

        // app_default_index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'app_default_index');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'app_default_index',);
        }

        // app_default_getuser
        if ($pathinfo === '/user') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::getUserAction',  '_route' => 'app_default_getuser',);
        }

        // app_default_salt
        if (preg_match('#^/(?P<username>\\w+)/salt$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_default_salt')), array (  '_controller' => 'AppBundle\\Controller\\DefaultController::saltAction',));
        }

        // app_default_rss
        if ($pathinfo === '/rss') {
            return array (  '_format' => 'xml',  '_controller' => 'AppBundle\\Controller\\DefaultController::rssAction',  '_route' => 'app_default_rss',);
        }

        // app_default_signup
        if ($pathinfo === '/signup') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::signup',  '_route' => 'app_default_signup',);
        }

        // app_default_info
        if (preg_match('#^/(?P<username>\\w+)/info$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_default_info')), array (  '_controller' => 'AppBundle\\Controller\\DefaultController::infoAction',));
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
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
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

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
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

        if (0 === strpos($pathinfo, '/api')) {
            // api_hello
            if (0 === strpos($pathinfo, '/api/hello') && preg_match('#^/api/hello(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_api_hello;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_hello')), array (  '_controller' => 'AppBundle\\Controller\\ApiController::helloAction',  '_format' => 'json',));
            }
            not_api_hello:

            // api_todos
            if (0 === strpos($pathinfo, '/api/todos') && preg_match('#^/api/todos(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_api_todos;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_todos')), array (  '_controller' => 'AppBundle\\Controller\\ApiController::todosAction',  '_format' => 'json',));
            }
            not_api_todos:

            // api_get_user
            if (0 === strpos($pathinfo, '/api/users') && preg_match('#^/api/users/(?P<username>[^/\\.]++)(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_api_get_user;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_get_user')), array (  '_controller' => 'AppBundle\\Controller\\ApiController::getUserAction',  '_format' => 'json',));
            }
            not_api_get_user:

            // api_get_me
            if (0 === strpos($pathinfo, '/api/me') && preg_match('#^/api/me(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_api_get_me;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_get_me')), array (  '_controller' => 'AppBundle\\Controller\\ApiController::getMeAction',  '_format' => 'json',));
            }
            not_api_get_me:

            // api_get_projets
            if (0 === strpos($pathinfo, '/api/projets') && preg_match('#^/api/projets/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_api_get_projets;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_get_projets')), array (  '_controller' => 'AppBundle\\Controller\\ApiController::getProjetsAction',  '_format' => 'json',));
            }
            not_api_get_projets:

            // api_get_rss
            if (0 === strpos($pathinfo, '/api/rsses') && preg_match('#^/api/rsses/(?P<idproj>[^/\\.]++)(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_api_get_rss;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_get_rss')), array (  '_controller' => 'AppBundle\\Controller\\ApiController::getRssAction',  '_format' => 'json',));
            }
            not_api_get_rss:

            // api_get_one_projets
            if (0 === strpos($pathinfo, '/api/ones') && preg_match('#^/api/ones/(?P<idProjet>[^/]++)/projets(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_api_get_one_projets;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_get_one_projets')), array (  '_controller' => 'AppBundle\\Controller\\ApiController::getOneProjetsAction',  '_format' => 'json',));
            }
            not_api_get_one_projets:

            // api_get_team
            if (0 === strpos($pathinfo, '/api/teams') && preg_match('#^/api/teams/(?P<idproj>[^/\\.]++)(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_api_get_team;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_get_team')), array (  '_controller' => 'AppBundle\\Controller\\ApiController::getTeamAction',  '_format' => 'json',));
            }
            not_api_get_team:

            // api_get_all_user
            if (0 === strpos($pathinfo, '/api/all/user') && preg_match('#^/api/all/user(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_api_get_all_user;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_get_all_user')), array (  '_controller' => 'AppBundle\\Controller\\ApiController::getAllUserAction',  '_format' => 'json',));
            }
            not_api_get_all_user:

            // api_get_discussion
            if (0 === strpos($pathinfo, '/api/discussions') && preg_match('#^/api/discussions/(?P<idproj>[^/\\.]++)(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_api_get_discussion;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_get_discussion')), array (  '_controller' => 'AppBundle\\Controller\\ApiController::getDiscussionAction',  '_format' => 'json',));
            }
            not_api_get_discussion:

            // api_get_message
            if (0 === strpos($pathinfo, '/api/messages') && preg_match('#^/api/messages/(?P<iddisc>[^/\\.]++)(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_api_get_message;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_get_message')), array (  '_controller' => 'AppBundle\\Controller\\ApiController::getMessageAction',  '_format' => 'json',));
            }
            not_api_get_message:

            // api_post_projet
            if (0 === strpos($pathinfo, '/api/projets') && preg_match('#^/api/projets(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_api_post_projet;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_post_projet')), array (  '_controller' => 'AppBundle\\Controller\\ApiController::postProjetAction',  '_format' => 'json',));
            }
            not_api_post_projet:

            // api_post_ticket
            if (0 === strpos($pathinfo, '/api/tickets') && preg_match('#^/api/tickets(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_api_post_ticket;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_post_ticket')), array (  '_controller' => 'AppBundle\\Controller\\ApiController::postTicketAction',  '_format' => 'json',));
            }
            not_api_post_ticket:

            // api_post_update_ticket
            if (0 === strpos($pathinfo, '/api/updates') && preg_match('#^/api/updates/(?P<id>[^/]++)/tickets(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_api_post_update_ticket;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_post_update_ticket')), array (  '_controller' => 'AppBundle\\Controller\\ApiController::postUpdateTicketAction',  '_format' => 'json',));
            }
            not_api_post_update_ticket:

            // api_post_delete_ticket
            if (0 === strpos($pathinfo, '/api/deletes') && preg_match('#^/api/deletes/(?P<id>[^/]++)/tickets(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_api_post_delete_ticket;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_post_delete_ticket')), array (  '_controller' => 'AppBundle\\Controller\\ApiController::postDeleteTicketAction',  '_format' => 'json',));
            }
            not_api_post_delete_ticket:

            // api_post_update_teammate
            if (0 === strpos($pathinfo, '/api/updates/teammates') && preg_match('#^/api/updates/teammates(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_api_post_update_teammate;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_post_update_teammate')), array (  '_controller' => 'AppBundle\\Controller\\ApiController::postUpdateTeammateAction',  '_format' => 'json',));
            }
            not_api_post_update_teammate:

            if (0 === strpos($pathinfo, '/api/d')) {
                // api_post_delete_teammate
                if (0 === strpos($pathinfo, '/api/deletes/teammates') && preg_match('#^/api/deletes/teammates(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_api_post_delete_teammate;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_post_delete_teammate')), array (  '_controller' => 'AppBundle\\Controller\\ApiController::postDeleteTeammateAction',  '_format' => 'json',));
                }
                not_api_post_delete_teammate:

                // api_post_discussion
                if (0 === strpos($pathinfo, '/api/discussions') && preg_match('#^/api/discussions(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_api_post_discussion;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_post_discussion')), array (  '_controller' => 'AppBundle\\Controller\\ApiController::postDiscussionAction',  '_format' => 'json',));
                }
                not_api_post_discussion:

            }

            // api_post_message
            if (0 === strpos($pathinfo, '/api/messages') && preg_match('#^/api/messages/(?P<iddisc>[^/\\.]++)(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_api_post_message;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_post_message')), array (  '_controller' => 'AppBundle\\Controller\\ApiController::postMessageAction',  '_format' => 'json',));
            }
            not_api_post_message:

            // api_get_tickets
            if (0 === strpos($pathinfo, '/api/tickets') && preg_match('#^/api/tickets/(?P<iddev>[^/\\.]++)(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_api_get_tickets;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_get_tickets')), array (  '_controller' => 'AppBundle\\Controller\\ApiController::getTicketsAction',  '_format' => 'json',));
            }
            not_api_get_tickets:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
