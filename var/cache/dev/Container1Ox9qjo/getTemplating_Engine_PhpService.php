<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'templating.engine.php' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/templating/EngineInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/templating/PhpEngine.php';
include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Templating/EngineInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Templating/PhpEngine.php';
include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Templating/TimedPhpEngine.php';
include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Templating/GlobalVariables.php';

$this->privates['templating.engine.php'] = $instance = new \Symfony\Bundle\FrameworkBundle\Templating\TimedPhpEngine(($this->privates['templating.name_parser'] ?? ($this->privates['templating.name_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser(($this->services['kernel'] ?? $this->get('kernel', 1))))), new \Symfony\Component\DependencyInjection\ServiceLocator(array('templating.helper.actions' => function () {
    return ($this->privates['templating.helper.actions'] ?? $this->load('getTemplating_Helper_ActionsService.php'));
}, 'templating.helper.assets' => function () {
    return ($this->privates['templating.helper.assets'] ?? $this->load('getTemplating_Helper_AssetsService.php'));
}, 'templating.helper.code' => function () {
    return ($this->privates['templating.helper.code'] ?? $this->load('getTemplating_Helper_CodeService.php'));
}, 'templating.helper.form' => function () {
    return ($this->privates['templating.helper.form'] ?? $this->load('getTemplating_Helper_FormService.php'));
}, 'templating.helper.logout_url' => function () {
    return ($this->privates['templating.helper.logout_url'] ?? $this->load('getTemplating_Helper_LogoutUrlService.php'));
}, 'templating.helper.request' => function () {
    return ($this->privates['templating.helper.request'] ?? $this->load('getTemplating_Helper_RequestService.php'));
}, 'templating.helper.router' => function () {
    return ($this->privates['templating.helper.router'] ?? $this->load('getTemplating_Helper_RouterService.php'));
}, 'templating.helper.security' => function () {
    return ($this->privates['templating.helper.security'] ?? $this->load('getTemplating_Helper_SecurityService.php'));
}, 'templating.helper.session' => function () {
    return ($this->privates['templating.helper.session'] ?? $this->load('getTemplating_Helper_SessionService.php'));
}, 'templating.helper.slots' => function () {
    return ($this->privates['templating.helper.slots'] ?? ($this->privates['templating.helper.slots'] = new \Symfony\Component\Templating\Helper\SlotsHelper()));
}, 'templating.helper.stopwatch' => function () {
    return ($this->privates['templating.helper.stopwatch'] ?? $this->load('getTemplating_Helper_StopwatchService.php'));
}, 'templating.helper.translator' => function () {
    return ($this->privates['templating.helper.translator'] ?? $this->load('getTemplating_Helper_TranslatorService.php'));
})), ($this->services['templating.loader'] ?? $this->load('getTemplating_LoaderService.php')), ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))), new \Symfony\Bundle\FrameworkBundle\Templating\GlobalVariables($this));

$instance->setCharset('UTF-8');
$instance->setHelpers(array('slots' => 'templating.helper.slots', 'request' => 'templating.helper.request', 'session' => 'templating.helper.session', 'router' => 'templating.helper.router', 'assets' => 'templating.helper.assets', 'actions' => 'templating.helper.actions', 'code' => 'templating.helper.code', 'translator' => 'templating.helper.translator', 'form' => 'templating.helper.form', 'stopwatch' => 'templating.helper.stopwatch', 'logout_url' => 'templating.helper.logout_url', 'security' => 'templating.helper.security'));

return $instance;
