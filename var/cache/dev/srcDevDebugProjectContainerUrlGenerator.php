<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcDevDebugProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;
    private $defaultLocale;

    public function __construct(RequestContext $context, LoggerInterface $logger = null, string $defaultLocale = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        $this->defaultLocale = $defaultLocale;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'annuaire' => array(array(), array('_controller' => 'App\\Controller\\AnnuaireController::annuaire'), array(), array(array('text', '/annuaire')), array(), array()),
        'liste_docteurs' => array(array(), array('_controller' => 'App\\Controller\\AnnuaireController::liste'), array(), array(array('text', '/annuaire/liste')), array(), array()),
        'cgu' => array(array(), array('_controller' => 'App\\Controller\\CguController::cgu'), array(), array(array('text', '/cgu')), array(), array()),
        'chatbot' => array(array('id'), array('_controller' => 'App\\Controller\\ChatbotController::chatbot'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/chatbot')), array(), array()),
        'question_compare' => array(array('id'), array('_controller' => 'App\\Controller\\ChatbotController::compare'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/chatbot/compare')), array(), array()),
        'configchatbot' => array(array('id'), array('_controller' => 'App\\Controller\\ConfigChatBotController::index'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/ConfigChatBot')), array(), array()),
        'ajout' => array(array('id'), array('_controller' => 'App\\Controller\\ConfigChatBotController::ajout'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/configchatbot/ajout')), array(), array()),
        'modifier' => array(array('id'), array('_controller' => 'App\\Controller\\ConfigChatBotController::modifier'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/configchatbot/modifier')), array(), array()),
        'supprimer' => array(array('id'), array('_controller' => 'App\\Controller\\ConfigChatBotController::supprimer'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/configchatbot/supprimer')), array(), array()),
        'connexion' => array(array(), array('_controller' => 'App\\Controller\\ConnexionController::connexion'), array(), array(array('text', '/connexion')), array(), array()),
        'forgotpwd' => array(array(), array('_controller' => 'App\\Controller\\ConnexionController::forgotpwd'), array(), array(array('text', '/motdepasseoublie')), array(), array()),
        'contact' => array(array(), array('_controller' => 'App\\Controller\\ContactController::mail'), array(), array(array('text', '/contact')), array(), array()),
        'default' => array(array(), array('_controller' => 'App\\Controller\\DefaultController::index'), array(), array(array('text', '/')), array(), array()),
        'editInfos' => array(array(), array('_controller' => 'App\\Controller\\EditInfosController::index'), array(), array(array('text', '/infos/edit')), array(), array()),
        'editUsers' => array(array('id'), array('_controller' => 'App\\Controller\\EditUsersController::index'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/editUsers')), array(), array()),
        'faq' => array(array(), array('_controller' => 'App\\Controller\\FaqController::faq'), array(), array(array('text', '/faq')), array(), array()),
        'help_chat' => array(array(), array('_controller' => 'App\\Controller\\HelpChatController::helpChat'), array(), array(array('text', '/help/chat')), array(), array()),
        'help' => array(array(), array('_controller' => 'App\\Controller\\HelpController::help'), array(), array(array('text', '/help')), array(), array()),
        'infos' => array(array('id'), array('_controller' => 'App\\Controller\\InfosController::index'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/infos')), array(), array()),
        'nouveaute' => array(array(), array('_controller' => 'App\\Controller\\NouveauteController::nouveaute'), array(), array(array('text', '/nouveaute')), array(), array()),
        'offres' => array(array(), array('_controller' => 'App\\Controller\\OffresController::offres'), array(), array(array('text', '/offres')), array(), array()),
        'paiement' => array(array('id'), array('_controller' => 'App\\Controller\\PaiementController::paiement'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/paiement')), array(), array()),
        'presse' => array(array(), array('_controller' => 'App\\Controller\\PresseController::presse'), array(), array(array('text', '/presse')), array(), array()),
        'profile' => array(array(), array('_controller' => 'App\\Controller\\ProfileController::showUser'), array(), array(array('text', '/profile')), array(), array()),
        'qui_sommes_nous' => array(array(), array('_controller' => 'App\\Controller\\QuiSommesNousController::qui_sommes_nous'), array(), array(array('text', '/quisommesnous')), array(), array()),
        'securite' => array(array(), array('_controller' => 'App\\Controller\\SecuriteController::securite'), array(), array(array('text', '/securite')), array(), array()),
        'fos_user_security_login' => array(array(), array('_controller' => 'fos_user.security.controller:loginAction'), array(), array(array('text', '/login')), array(), array()),
        'fos_user_security_check' => array(array(), array('_controller' => 'fos_user.security.controller:checkAction'), array(), array(array('text', '/login_check')), array(), array()),
        'fos_user_security_logout' => array(array(), array('_controller' => 'fos_user.security.controller:logoutAction'), array(), array(array('text', '/logout')), array(), array()),
        'fos_user_profile_show' => array(array(), array('_controller' => 'fos_user.profile.controller:showAction'), array(), array(array('text', '/profile/')), array(), array()),
        'fos_user_profile_edit' => array(array(), array('_controller' => 'fos_user.profile.controller:editAction'), array(), array(array('text', '/profile/edit')), array(), array()),
        'profile_chatbot_show' => array(array(), array('_controller' => 'controller:compare'), array(), array(array('text', '/profile/chatbot')), array(), array()),
        'fos_user_registration_register' => array(array(), array('_controller' => 'fos_user.registration.controller:registerAction'), array(), array(array('text', '/register/')), array(), array()),
        'fos_user_registration_check_email' => array(array(), array('_controller' => 'fos_user.registration.controller:checkEmailAction'), array(), array(array('text', '/register/check-email')), array(), array()),
        'fos_user_registration_confirm' => array(array('token'), array('_controller' => 'fos_user.registration.controller:confirmAction'), array(), array(array('variable', '/', '[^/]++', 'token'), array('text', '/register/confirm')), array(), array()),
        'fos_user_registration_confirmed' => array(array(), array('_controller' => 'fos_user.registration.controller:confirmedAction'), array(), array(array('text', '/register/confirmed')), array(), array()),
        'fos_user_resetting_request' => array(array(), array('_controller' => 'fos_user.resetting.controller:requestAction'), array(), array(array('text', '/resetting/request')), array(), array()),
        'fos_user_resetting_send_email' => array(array(), array('_controller' => 'fos_user.resetting.controller:sendEmailAction'), array(), array(array('text', '/resetting/send-email')), array(), array()),
        'fos_user_resetting_check_email' => array(array(), array('_controller' => 'fos_user.resetting.controller:checkEmailAction'), array(), array(array('text', '/resetting/check-email')), array(), array()),
        'fos_user_resetting_reset' => array(array('token'), array('_controller' => 'fos_user.resetting.controller:resetAction'), array(), array(array('variable', '/', '[^/]++', 'token'), array('text', '/resetting/reset')), array(), array()),
        'fos_user_change_password' => array(array(), array('_controller' => 'fos_user.change_password.controller:changePasswordAction'), array(), array(array('text', '/profile/change-password')), array(), array()),
        '_twig_error_test' => array(array('code', '_format'), array('_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'), array('code' => '\\d+'), array(array('variable', '.', '[^/]++', '_format'), array('variable', '/', '\\d+', 'code'), array('text', '/_error')), array(), array()),
        '_wdt' => array(array('token'), array('_controller' => 'web_profiler.controller.profiler::toolbarAction'), array(), array(array('variable', '/', '[^/]++', 'token'), array('text', '/_wdt')), array(), array()),
        '_profiler_home' => array(array(), array('_controller' => 'web_profiler.controller.profiler::homeAction'), array(), array(array('text', '/_profiler/')), array(), array()),
        '_profiler_search' => array(array(), array('_controller' => 'web_profiler.controller.profiler::searchAction'), array(), array(array('text', '/_profiler/search')), array(), array()),
        '_profiler_search_bar' => array(array(), array('_controller' => 'web_profiler.controller.profiler::searchBarAction'), array(), array(array('text', '/_profiler/search_bar')), array(), array()),
        '_profiler_phpinfo' => array(array(), array('_controller' => 'web_profiler.controller.profiler::phpinfoAction'), array(), array(array('text', '/_profiler/phpinfo')), array(), array()),
        '_profiler_search_results' => array(array('token'), array('_controller' => 'web_profiler.controller.profiler::searchResultsAction'), array(), array(array('text', '/search/results'), array('variable', '/', '[^/]++', 'token'), array('text', '/_profiler')), array(), array()),
        '_profiler_open_file' => array(array(), array('_controller' => 'web_profiler.controller.profiler::openAction'), array(), array(array('text', '/_profiler/open')), array(), array()),
        '_profiler' => array(array('token'), array('_controller' => 'web_profiler.controller.profiler::panelAction'), array(), array(array('variable', '/', '[^/]++', 'token'), array('text', '/_profiler')), array(), array()),
        '_profiler_router' => array(array('token'), array('_controller' => 'web_profiler.controller.router::panelAction'), array(), array(array('text', '/router'), array('variable', '/', '[^/]++', 'token'), array('text', '/_profiler')), array(), array()),
        '_profiler_exception' => array(array('token'), array('_controller' => 'web_profiler.controller.exception::showAction'), array(), array(array('text', '/exception'), array('variable', '/', '[^/]++', 'token'), array('text', '/_profiler')), array(), array()),
        '_profiler_exception_css' => array(array('token'), array('_controller' => 'web_profiler.controller.exception::cssAction'), array(), array(array('text', '/exception.css'), array('variable', '/', '[^/]++', 'token'), array('text', '/_profiler')), array(), array()),
        'index' => array(array(), array('_controller' => 'App\\Controller\\DefaultController::index'), array(), array(array('text', '/')), array(), array()),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        $locale = $parameters['_locale']
            ?? $this->context->getParameter('_locale')
            ?: $this->defaultLocale;

        if (null !== $locale && (self::$declaredRoutes[$name.'.'.$locale][1]['_canonical_route'] ?? null) === $name && null !== $name) {
            unset($parameters['_locale']);
            $name .= '.'.$locale;
        } elseif (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
