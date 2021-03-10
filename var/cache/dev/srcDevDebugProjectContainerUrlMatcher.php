<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = $allowSchemes = array();
        if ($ret = $this->doMatch($pathinfo, $allow, $allowSchemes)) {
            return $ret;
        }
        if ($allow) {
            throw new MethodNotAllowedException(array_keys($allow));
        }
        if (!in_array($this->context->getMethod(), array('HEAD', 'GET'), true)) {
            // no-op
        } elseif ($allowSchemes) {
            redirect_scheme:
            $scheme = $this->context->getScheme();
            $this->context->setScheme(key($allowSchemes));
            try {
                if ($ret = $this->doMatch($pathinfo)) {
                    return $this->redirect($pathinfo, $ret['_route'], $this->context->getScheme()) + $ret;
                }
            } finally {
                $this->context->setScheme($scheme);
            }
        } elseif ('/' !== $pathinfo) {
            $pathinfo = '/' !== $pathinfo[-1] ? $pathinfo.'/' : substr($pathinfo, 0, -1);
            if ($ret = $this->doMatch($pathinfo, $allow, $allowSchemes)) {
                return $this->redirect($pathinfo, $ret['_route']) + $ret;
            }
            if ($allowSchemes) {
                goto redirect_scheme;
            }
        }

        throw new ResourceNotFoundException();
    }

    private function doMatch(string $rawPathinfo, array &$allow = array(), array &$allowSchemes = array()): array
    {
        $allow = $allowSchemes = array();
        $pathinfo = rawurldecode($rawPathinfo) ?: '/';
        $context = $this->context;
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        switch ($trimmedPathinfo = '/' !== $pathinfo && '/' === $pathinfo[-1] ? substr($pathinfo, 0, -1) : $pathinfo) {
            case '/annuaire/liste':
                // liste_docteurs
                if ('/' !== $pathinfo && '/' === $pathinfo[-1]) {
                    if ('GET' === $canonicalMethod) {
                        return $allow = $allowSchemes = array();
                    }
                    goto not_liste_docteurs;
                }

                if (($request = $request ?? $this->request ?: $this->createRequest($pathinfo)) && $request->isXmlHttpRequest()) {
                    return array('_route' => 'liste_docteurs', '_controller' => 'App\\Controller\\AnnuaireController::liste');
                }
                not_liste_docteurs:
                break;
            case '/':
                // default
                return array('_route' => 'default', '_controller' => 'App\\Controller\\DefaultController::index');
                not_default:
                // index
                return array('_route' => 'index', '_controller' => 'App\\Controller\\DefaultController::index');
                not_index:
                break;
            case '/profile':
                // profile
                if ('/' !== $pathinfo && '/' === $pathinfo[-1]) {
                    if ('GET' === $canonicalMethod) {
                        return $allow = $allowSchemes = array();
                    }
                    goto not_profile;
                }

                return array('_route' => 'profile', '_controller' => 'App\\Controller\\ProfileController::showUser');
                not_profile:
                // fos_user_profile_show
                if ('/' !== $pathinfo && '/' !== $pathinfo[-1]) {
                    if ('GET' === $canonicalMethod) {
                        return $allow = $allowSchemes = array();
                    }
                    goto not_fos_user_profile_show;
                }

                $ret = array('_route' => 'fos_user_profile_show', '_controller' => 'fos_user.profile.controller:showAction');
                if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                    $allow += $a;
                    goto not_fos_user_profile_show;
                }

                return $ret;
                not_fos_user_profile_show:
                break;
            default:
                $routes = array(
                    '/annuaire' => array(array('_route' => 'annuaire', '_controller' => 'App\\Controller\\AnnuaireController::annuaire'), null, null, null, false),
                    '/cgu' => array(array('_route' => 'cgu', '_controller' => 'App\\Controller\\CguController::cgu'), null, null, null, false),
                    '/connexion' => array(array('_route' => 'connexion', '_controller' => 'App\\Controller\\ConnexionController::connexion'), null, null, null, false),
                    '/motdepasseoublie' => array(array('_route' => 'forgotpwd', '_controller' => 'App\\Controller\\ConnexionController::forgotpwd'), null, null, null, false),
                    '/contact' => array(array('_route' => 'contact', '_controller' => 'App\\Controller\\ContactController::mail'), null, null, null, false),
                    '/infos/edit' => array(array('_route' => 'editInfos', '_controller' => 'App\\Controller\\EditInfosController::index'), null, null, null, false),
                    '/faq' => array(array('_route' => 'faq', '_controller' => 'App\\Controller\\FaqController::faq'), null, null, null, false),
                    '/help/chat' => array(array('_route' => 'help_chat', '_controller' => 'App\\Controller\\HelpChatController::helpChat'), null, null, null, false),
                    '/help' => array(array('_route' => 'help', '_controller' => 'App\\Controller\\HelpController::help'), null, null, null, false),
                    '/nouveaute' => array(array('_route' => 'nouveaute', '_controller' => 'App\\Controller\\NouveauteController::nouveaute'), null, null, null, false),
                    '/offres' => array(array('_route' => 'offres', '_controller' => 'App\\Controller\\OffresController::offres'), null, null, null, false),
                    '/presse' => array(array('_route' => 'presse', '_controller' => 'App\\Controller\\PresseController::presse'), null, null, null, false),
                    '/quisommesnous' => array(array('_route' => 'qui_sommes_nous', '_controller' => 'App\\Controller\\QuiSommesNousController::qui_sommes_nous'), null, null, null, false),
                    '/securite' => array(array('_route' => 'securite', '_controller' => 'App\\Controller\\SecuriteController::securite'), null, null, null, false),
                    '/login' => array(array('_route' => 'fos_user_security_login', '_controller' => 'fos_user.security.controller:loginAction'), null, array('GET' => 0, 'POST' => 1), null, false),
                    '/login_check' => array(array('_route' => 'fos_user_security_check', '_controller' => 'fos_user.security.controller:checkAction'), null, array('POST' => 0), null, false),
                    '/logout' => array(array('_route' => 'fos_user_security_logout', '_controller' => 'fos_user.security.controller:logoutAction'), null, array('GET' => 0, 'POST' => 1), null, false),
                    '/profile/edit' => array(array('_route' => 'fos_user_profile_edit', '_controller' => 'fos_user.profile.controller:editAction'), null, array('GET' => 0, 'POST' => 1), null, false),
                    '/profile/chatbot' => array(array('_route' => 'profile_chatbot_show', '_controller' => 'controller:compare'), null, array('GET' => 0, 'POST' => 1), null, false),
                    '/register' => array(array('_route' => 'fos_user_registration_register', '_controller' => 'fos_user.registration.controller:registerAction'), null, array('GET' => 0, 'POST' => 1), null, true),
                    '/register/check-email' => array(array('_route' => 'fos_user_registration_check_email', '_controller' => 'fos_user.registration.controller:checkEmailAction'), null, array('GET' => 0), null, false),
                    '/register/confirmed' => array(array('_route' => 'fos_user_registration_confirmed', '_controller' => 'fos_user.registration.controller:confirmedAction'), null, array('GET' => 0), null, false),
                    '/resetting/request' => array(array('_route' => 'fos_user_resetting_request', '_controller' => 'fos_user.resetting.controller:requestAction'), null, array('GET' => 0), null, false),
                    '/resetting/send-email' => array(array('_route' => 'fos_user_resetting_send_email', '_controller' => 'fos_user.resetting.controller:sendEmailAction'), null, array('POST' => 0), null, false),
                    '/resetting/check-email' => array(array('_route' => 'fos_user_resetting_check_email', '_controller' => 'fos_user.resetting.controller:checkEmailAction'), null, array('GET' => 0), null, false),
                    '/profile/change-password' => array(array('_route' => 'fos_user_change_password', '_controller' => 'fos_user.change_password.controller:changePasswordAction'), null, array('GET' => 0, 'POST' => 1), null, false),
                    '/_profiler' => array(array('_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'), null, null, null, true),
                    '/_profiler/search' => array(array('_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'), null, null, null, false),
                    '/_profiler/search_bar' => array(array('_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'), null, null, null, false),
                    '/_profiler/phpinfo' => array(array('_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'), null, null, null, false),
                    '/_profiler/open' => array(array('_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'), null, null, null, false),
                );

                if (!isset($routes[$trimmedPathinfo])) {
                    break;
                }
                list($ret, $requiredHost, $requiredMethods, $requiredSchemes, $hasTrailingSlash) = $routes[$trimmedPathinfo];

                if ('/' !== $pathinfo) {
                    if ($hasTrailingSlash !== ('/' === $pathinfo[-1])) {
                        if ((!$requiredMethods || isset($requiredMethods['GET'])) && 'GET' === $canonicalMethod) {
                            return $allow = $allowSchemes = array();
                        }
                        break;
                    }
                }

                $hasRequiredScheme = !$requiredSchemes || isset($requiredSchemes[$context->getScheme()]);
                if ($requiredMethods && !isset($requiredMethods[$canonicalMethod]) && !isset($requiredMethods[$requestMethod])) {
                    if ($hasRequiredScheme) {
                        $allow += $requiredMethods;
                    }
                    break;
                }
                if (!$hasRequiredScheme) {
                    $allowSchemes += $requiredSchemes;
                    break;
                }

                return $ret;
        }

        $matchedPathinfo = $pathinfo;
        $regexList = array(
            0 => '{^(?'
                    .'|/c(?'
                        .'|hatbot/(?'
                            .'|([^/]++)(*:30)'
                            .'|compare/([^/]++)(*:53)'
                        .')'
                        .'|onfigchatbot/(?'
                            .'|ajout/([^/]++)(*:91)'
                            .'|modifier/([^/]++)(*:115)'
                            .'|supprimer/([^/]++)(*:141)'
                        .')'
                    .')'
                    .'|/ConfigChatBot/([^/]++)(*:174)'
                    .'|/editUsers/([^/]++)(*:201)'
                    .'|/infos/([^/]++)(*:224)'
                    .'|/paiement/([^/]++)(*:250)'
                    .'|/re(?'
                        .'|gister/confirm/([^/]++)(*:287)'
                        .'|setting/reset/([^/]++)(*:317)'
                    .')'
                    .'|/_(?'
                        .'|error/(\\d+)(?:\\.([^/]++))?(*:357)'
                        .'|wdt/([^/]++)(*:377)'
                        .'|profiler/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:423)'
                                .'|router(*:437)'
                                .'|exception(?'
                                    .'|(*:457)'
                                    .'|\\.css(*:470)'
                                .')'
                            .')'
                            .'|(*:480)'
                        .')'
                    .')'
                .')(?:/?)$}sD',
        );

        foreach ($regexList as $offset => $regex) {
            while (preg_match($regex, $matchedPathinfo, $matches)) {
                switch ($m = (int) $matches['MARK']) {
                    case 53:
                        $matches = array('id' => $matches[1] ?? null);

                        // question_compare
                        if ('/' !== $pathinfo && '/' === $pathinfo[-1] && preg_match($regex, substr($pathinfo, 0, -1), $n) && $m === (int) $n['MARK']) {
                            if ('GET' === $canonicalMethod) {
                                return $allow = $allowSchemes = array();
                            }
                            goto not_question_compare;
                        }

                        if (($request = $request ?? $this->request ?: $this->createRequest($pathinfo)) && $request->isXmlHttpRequest()) {
                            return $this->mergeDefaults(array('_route' => 'question_compare') + $matches, array('_controller' => 'App\\Controller\\ChatbotController::compare'));
                        }
                        not_question_compare:

                        break;
                    case 91:
                        $matches = array('id' => $matches[1] ?? null);

                        // ajout
                        if ('/' !== $pathinfo && '/' === $pathinfo[-1] && preg_match($regex, substr($pathinfo, 0, -1), $n) && $m === (int) $n['MARK']) {
                            if ('GET' === $canonicalMethod) {
                                return $allow = $allowSchemes = array();
                            }
                            goto not_ajout;
                        }

                        if (($request = $request ?? $this->request ?: $this->createRequest($pathinfo)) && $request->isXmlHttpRequest()) {
                            return $this->mergeDefaults(array('_route' => 'ajout') + $matches, array('_controller' => 'App\\Controller\\ConfigChatBotController::ajout'));
                        }
                        not_ajout:

                        break;
                    case 115:
                        $matches = array('id' => $matches[1] ?? null);

                        // modifier
                        if ('/' !== $pathinfo && '/' === $pathinfo[-1] && preg_match($regex, substr($pathinfo, 0, -1), $n) && $m === (int) $n['MARK']) {
                            if ('GET' === $canonicalMethod) {
                                return $allow = $allowSchemes = array();
                            }
                            goto not_modifier;
                        }

                        if (($request = $request ?? $this->request ?: $this->createRequest($pathinfo)) && $request->isXmlHttpRequest()) {
                            return $this->mergeDefaults(array('_route' => 'modifier') + $matches, array('_controller' => 'App\\Controller\\ConfigChatBotController::modifier'));
                        }
                        not_modifier:

                        break;
                    case 141:
                        $matches = array('id' => $matches[1] ?? null);

                        // supprimer
                        if ('/' !== $pathinfo && '/' === $pathinfo[-1] && preg_match($regex, substr($pathinfo, 0, -1), $n) && $m === (int) $n['MARK']) {
                            if ('GET' === $canonicalMethod) {
                                return $allow = $allowSchemes = array();
                            }
                            goto not_supprimer;
                        }

                        if (($request = $request ?? $this->request ?: $this->createRequest($pathinfo)) && $request->isXmlHttpRequest()) {
                            return $this->mergeDefaults(array('_route' => 'supprimer') + $matches, array('_controller' => 'App\\Controller\\ConfigChatBotController::supprimer'));
                        }
                        not_supprimer:

                        break;
                    default:
                        $routes = array(
                            30 => array(array('_route' => 'chatbot', '_controller' => 'App\\Controller\\ChatbotController::chatbot'), array('id'), null, null, false),
                            174 => array(array('_route' => 'configchatbot', '_controller' => 'App\\Controller\\ConfigChatBotController::index'), array('id'), null, null, false),
                            201 => array(array('_route' => 'editUsers', '_controller' => 'App\\Controller\\EditUsersController::index'), array('id'), null, null, false),
                            224 => array(array('_route' => 'infos', '_controller' => 'App\\Controller\\InfosController::index'), array('id'), null, null, false),
                            250 => array(array('_route' => 'paiement', '_controller' => 'App\\Controller\\PaiementController::paiement'), array('id'), null, null, false),
                            287 => array(array('_route' => 'fos_user_registration_confirm', '_controller' => 'fos_user.registration.controller:confirmAction'), array('token'), array('GET' => 0), null, false),
                            317 => array(array('_route' => 'fos_user_resetting_reset', '_controller' => 'fos_user.resetting.controller:resetAction'), array('token'), array('GET' => 0, 'POST' => 1), null, false),
                            357 => array(array('_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'), array('code', '_format'), null, null, false),
                            377 => array(array('_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'), array('token'), null, null, false),
                            423 => array(array('_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'), array('token'), null, null, false),
                            437 => array(array('_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'), array('token'), null, null, false),
                            457 => array(array('_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'), array('token'), null, null, false),
                            470 => array(array('_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'), array('token'), null, null, false),
                            480 => array(array('_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'), array('token'), null, null, false),
                        );

                        list($ret, $vars, $requiredMethods, $requiredSchemes, $hasTrailingSlash) = $routes[$m];

                        if ('/' !== $pathinfo) {
                            if ('/' === $pathinfo[-1]) {
                                if (preg_match($regex, substr($pathinfo, 0, -1), $n) && $m === (int) $n['MARK']) {
                                    $matches = $n;
                                } else {
                                    $hasTrailingSlash = true;
                                }
                            }

                            if ($hasTrailingSlash !== ('/' === $pathinfo[-1])) {
                                if ((!$requiredMethods || isset($requiredMethods['GET'])) && 'GET' === $canonicalMethod) {
                                    return $allow = $allowSchemes = array();
                                }
                                break;
                            }
                        }

                        foreach ($vars as $i => $v) {
                            if (isset($matches[1 + $i])) {
                                $ret[$v] = $matches[1 + $i];
                            }
                        }

                        $hasRequiredScheme = !$requiredSchemes || isset($requiredSchemes[$context->getScheme()]);
                        if ($requiredMethods && !isset($requiredMethods[$canonicalMethod]) && !isset($requiredMethods[$requestMethod])) {
                            if ($hasRequiredScheme) {
                                $allow += $requiredMethods;
                            }
                            break;
                        }
                        if (!$hasRequiredScheme) {
                            $allowSchemes += $requiredSchemes;
                            break;
                        }

                        return $ret;
                }

                if (480 === $m) {
                    break;
                }
                $regex = substr_replace($regex, 'F', $m - $offset, 1 + strlen($m));
                $offset += strlen($m);
            }
        }
        if ('/' === $pathinfo && !$allow && !$allowSchemes) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        return array();
    }
}
