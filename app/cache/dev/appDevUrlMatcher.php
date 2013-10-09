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

        if (0 === strpos($pathinfo, '/hello')) {
            // volunteer_management_system_stat_homepage
            if (preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'volunteer_management_system_stat_homepage')), array (  '_controller' => 'VolunteerManagementSystem\\StatBundle\\Controller\\DefaultController::indexAction',));
            }

            // volunteer_management_system_event_homepage
            if (preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'volunteer_management_system_event_homepage')), array (  '_controller' => 'VolunteerManagementSystem\\EventBundle\\Controller\\DefaultController::indexAction',));
            }

            // volunteer_management_system_news_homepage
            if (preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'volunteer_management_system_news_homepage')), array (  '_controller' => 'VolunteerManagementSystem\\NewsBundle\\Controller\\DefaultController::indexAction',));
            }

        }

        // volunteer_management_system_notification_homepage
        if ($pathinfo === '/email') {
            return array (  '_controller' => 'VolunteerManagementSystem\\NotificationBundle\\Controller\\EmailController::sendAction',  '_route' => 'volunteer_management_system_notification_homepage',);
        }

        // just
        if ($pathinfo === '/just') {
            return array (  '_controller' => 'VolunteerManagementSystem\\NotificationBundle\\Controller\\DefaultController::indexAction',  '_route' => 'just',);
        }

        // volunteer_management_system_report_generation_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'volunteer_management_system_report_generation_homepage')), array (  '_controller' => 'VolunteerManagementSystem\\ReportGenerationBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/TrackRecord')) {
            // _track_record
            if ($pathinfo === '/TrackRecord') {
                return array (  '_controller' => 'VolunteerManagementSystem\\ReportGenerationBundle\\Controller\\TrackRecordController::TrackRecordAction',  '_route' => '_track_record',);
            }

            // _track_record_initialize
            if ($pathinfo === '/TrackRecordInitialize') {
                return array (  '_controller' => 'VolunteerManagementSystem\\ReportGenerationBundle\\Controller\\TrackRecordController::InitializeTrackRecordAction',  '_route' => '_track_record_initialize',);
            }

        }

        // news
        if ($pathinfo === '/news') {
            return array (  '_controller' => 'VolunteerManagementSystem\\PagesBundle\\Controller\\NewspageController::newsAction',  '_route' => 'news',);
        }

        if (0 === strpos($pathinfo, '/project')) {
            // projects
            if ($pathinfo === '/projects') {
                return array (  '_controller' => 'VolunteerManagementSystem\\PagesBundle\\Controller\\ProjectspageController::projectsAction',  '_route' => 'projects',);
            }

            // projectcreation
            if ($pathinfo === '/projectcreation') {
                return array (  '_controller' => 'VolunteerManagementSystem\\ProjectBundle\\Controller\\ProjectCreationController::projectcreationAction',  '_route' => 'projectcreation',);
            }

            // projectsubmission
            if ($pathinfo === '/projectsubmission') {
                return array (  '_controller' => 'VolunteerManagementSystemProjectBundle:ProjectSubmission:projectsubmission',  '_route' => 'projectsubmission',);
            }

            // projectconfirmation
            if ($pathinfo === '/projectconfirmation') {
                return array (  '_controller' => 'VolunteerManagementSystem\\ProjectBundle\\Controller\\ProjectConfirmationController::projectconfirmationAction',  '_route' => 'projectconfirmation',);
            }

        }

        // contact
        if ($pathinfo === '/contact') {
            return array (  '_controller' => 'VolunteerManagementSystem\\PagesBundle\\Controller\\ContactpageController::contactAction',  '_route' => 'contact',);
        }

        // edit_UserName
        if ($pathinfo === '/edit_UserName') {
            return array (  '_controller' => 'VolunteerManagementSystem\\PagesBundle\\Controller\\EditProfileController::editUserNameAction',  '_route' => 'edit_UserName',);
        }

        // save_UserName
        if ($pathinfo === '/save_UserName') {
            return array (  '_controller' => 'VolunteerManagementSystem\\PagesBundle\\Controller\\SaveUserController::saveUserNameAction',  '_route' => 'save_UserName',);
        }

        // edit_Name
        if ($pathinfo === '/edit_Name') {
            return array (  '_controller' => 'VolunteerManagementSystem\\PagesBundle\\Controller\\EditProfileController::editNameAction',  '_route' => 'edit_Name',);
        }

        // save_Name
        if ($pathinfo === '/save_Name') {
            return array (  '_controller' => 'VolunteerManagementSystem\\PagesBundle\\Controller\\SaveUserController::saveNameAction',  '_route' => 'save_Name',);
        }

        // edit_Password
        if ($pathinfo === '/edit_Password') {
            return array (  '_controller' => 'VolunteerManagementSystem\\PagesBundle\\Controller\\EditProfileController::editPasswordAction',  '_route' => 'edit_Password',);
        }

        // save_Password
        if ($pathinfo === '/save_Password') {
            return array (  '_controller' => 'VolunteerManagementSystem\\PagesBundle\\Controller\\SaveUserController::savePasswordAction',  '_route' => 'save_Password',);
        }

        // edit_NIC
        if ($pathinfo === '/edit_NIC') {
            return array (  '_controller' => 'VolunteerManagementSystem\\PagesBundle\\Controller\\EditProfileController::editNICAction',  '_route' => 'edit_NIC',);
        }

        // save_NIC
        if ($pathinfo === '/save_NIC') {
            return array (  '_controller' => 'VolunteerManagementSystem\\PagesBundle\\Controller\\SaveUserController::saveNICAction',  '_route' => 'save_NIC',);
        }

        // edit_DOB
        if ($pathinfo === '/edit_DOB') {
            return array (  '_controller' => 'VolunteerManagementSystem\\PagesBundle\\Controller\\EditProfileController::editDOBAction',  '_route' => 'edit_DOB',);
        }

        // save_DOB
        if ($pathinfo === '/save_DOB') {
            return array (  '_controller' => 'VolunteerManagementSystem\\PagesBundle\\Controller\\SaveUserController::saveDOBAction',  '_route' => 'save_DOB',);
        }

        // edit_Gender
        if ($pathinfo === '/edit_Gender') {
            return array (  '_controller' => 'VolunteerManagementSystem\\PagesBundle\\Controller\\EditProfileController::editGenderAction',  '_route' => 'edit_Gender',);
        }

        // save_Gender
        if ($pathinfo === '/save_Gender') {
            return array (  '_controller' => 'VolunteerManagementSystem\\PagesBundle\\Controller\\SaveUserController::saveGenderAction',  '_route' => 'save_Gender',);
        }

        // edit_Email
        if ($pathinfo === '/edit_Email') {
            return array (  '_controller' => 'VolunteerManagementSystem\\PagesBundle\\Controller\\EditProfileController::editEmailAction',  '_route' => 'edit_Email',);
        }

        // save_Email
        if ($pathinfo === '/save_Email') {
            return array (  '_controller' => 'VolunteerManagementSystem\\PagesBundle\\Controller\\SaveUserController::saveEmailAction',  '_route' => 'save_Email',);
        }

        // edit_MobileNumb
        if ($pathinfo === '/edit_MobileNumb') {
            return array (  '_controller' => 'VolunteerManagementSystem\\PagesBundle\\Controller\\EditProfileController::editMobileNumbAction',  '_route' => 'edit_MobileNumb',);
        }

        // save_MobileNumb
        if ($pathinfo === '/save_MobileNumb') {
            return array (  '_controller' => 'VolunteerManagementSystem\\PagesBundle\\Controller\\SaveUserController::saveMobileNumbAction',  '_route' => 'save_MobileNumb',);
        }

        // edit_ContactNumb
        if ($pathinfo === '/edit_ContactNumb') {
            return array (  '_controller' => 'VolunteerManagementSystem\\PagesBundle\\Controller\\EditProfileController::editContactNumbAction',  '_route' => 'edit_ContactNumb',);
        }

        // save_ContactNumb
        if ($pathinfo === '/save_contactNumb') {
            return array (  '_controller' => 'VolunteerManagementSystem\\PagesBundle\\Controller\\SaveUserController::saveContactNumbAction',  '_route' => 'save_ContactNumb',);
        }

        // edit_Address
        if ($pathinfo === '/edit_Address') {
            return array (  '_controller' => 'VolunteerManagementSystem\\PagesBundle\\Controller\\EditProfileController::editAddressAction',  '_route' => 'edit_Address',);
        }

        // save_Address
        if ($pathinfo === '/save_Address') {
            return array (  '_controller' => 'VolunteerManagementSystem\\PagesBundle\\Controller\\SaveUserController::saveAddressAction',  '_route' => 'save_Address',);
        }

        if (0 === strpos($pathinfo, '/login')) {
            // login
            if ($pathinfo === '/login') {
                return array (  '_controller' => 'VolunteerManagementSystem\\RegistrationBundle\\Controller\\LoginController::loginAction',  '_route' => 'login',);
            }

            // logout
            if ($pathinfo === '/loginout') {
                return array (  '_controller' => 'VolunteerManagementSystem\\RegistrationBundle\\Controller\\LoginController::logoutAction',  '_route' => 'logout',);
            }

        }

        // search_result
        if ($pathinfo === '/result') {
            return array (  '_controller' => 'VolunteerManagementSystem\\PagesBundle\\Controller\\SearchController::searchAction',  '_route' => 'search_result',);
        }

        // volunteer_management_system_styles_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'volunteer_management_system_styles_homepage')), array (  '_controller' => 'VolunteerManagementSystem\\StylesBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/register')) {
            // account_register
            if ($pathinfo === '/register') {
                return array (  '_controller' => 'VolunteerManagementSystem\\RegistrationBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'account_register',);
            }

            // account_create
            if ($pathinfo === '/register/create') {
                return array (  '_controller' => 'VolunteerManagementSystem\\RegistrationBundle\\Controller\\SubmissionController::submissionAction',  '_route' => 'account_create',);
            }

        }

        // confirm
        if ($pathinfo === '/confirm') {
            return array (  '_controller' => 'VolunteerManagementSystem\\RegistrationBundle\\Controller\\ConfirmController::confirmAction',  '_route' => 'confirm',);
        }

        // profile
        if ($pathinfo === '/profile') {
            return array (  '_controller' => 'VolunteerManagementSystem\\PagesBundle\\Controller\\ProfilepageController::profileAction',  '_route' => 'profile',);
        }

        // welcome
        if ($pathinfo === '/home') {
            return array (  '_controller' => 'VolunteerManagementSystem\\PagesBundle\\Controller\\HomepageController::welcomeAction',  '_route' => 'welcome',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            // account_login
            if ($pathinfo === '/login') {
                return array (  '_controller' => 'VolunteerManagementSystem\\RegistrationBundle\\Controller\\LoginController::loginAction',  '_route' => 'account_login',);
            }

            // account_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'VolunteerManagementSystem\\RegistrationBundle\\Controller\\LoginController::logoutAction',  '_route' => 'account_logout',);
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
