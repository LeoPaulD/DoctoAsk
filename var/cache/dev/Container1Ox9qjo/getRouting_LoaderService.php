<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'routing.loader' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/config/Loader/LoaderInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/config/Loader/Loader.php';
include_once $this->targetDirs[3].'/vendor/symfony/config/Loader/DelegatingLoader.php';
include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Routing/DelegatingLoader.php';
include_once $this->targetDirs[3].'/vendor/symfony/config/Loader/LoaderResolverInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/config/Loader/LoaderResolver.php';
include_once $this->targetDirs[3].'/vendor/symfony/config/Loader/FileLoader.php';
include_once $this->targetDirs[3].'/vendor/symfony/routing/Loader/XmlFileLoader.php';
include_once $this->targetDirs[3].'/vendor/symfony/routing/Loader/YamlFileLoader.php';
include_once $this->targetDirs[3].'/vendor/symfony/routing/Loader/PhpFileLoader.php';
include_once $this->targetDirs[3].'/vendor/symfony/routing/Loader/GlobFileLoader.php';
include_once $this->targetDirs[3].'/vendor/symfony/routing/Loader/DirectoryLoader.php';
include_once $this->targetDirs[3].'/vendor/symfony/routing/Loader/ObjectRouteLoader.php';
include_once $this->targetDirs[3].'/vendor/symfony/routing/Loader/DependencyInjection/ServiceRouterLoader.php';
include_once $this->targetDirs[3].'/vendor/symfony/routing/Loader/AnnotationClassLoader.php';
include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Routing/AnnotatedRouteControllerLoader.php';
include_once $this->targetDirs[3].'/vendor/symfony/routing/Loader/AnnotationFileLoader.php';
include_once $this->targetDirs[3].'/vendor/symfony/routing/Loader/AnnotationDirectoryLoader.php';

$a = new \Symfony\Component\Config\Loader\LoaderResolver();

$b = ($this->privates['file_locator'] ?? ($this->privates['file_locator'] = new \Symfony\Component\HttpKernel\Config\FileLocator(($this->services['kernel'] ?? $this->get('kernel', 1)), ($this->targetDirs[3].'/src/Resources'), array(0 => ($this->targetDirs[3].'/src')))));
$c = new \Symfony\Bundle\FrameworkBundle\Routing\AnnotatedRouteControllerLoader(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()));

$a->addLoader(new \Symfony\Component\Routing\Loader\XmlFileLoader($b));
$a->addLoader(new \Symfony\Component\Routing\Loader\YamlFileLoader($b));
$a->addLoader(new \Symfony\Component\Routing\Loader\PhpFileLoader($b));
$a->addLoader(new \Symfony\Component\Routing\Loader\GlobFileLoader($b));
$a->addLoader(new \Symfony\Component\Routing\Loader\DirectoryLoader($b));
$a->addLoader(new \Symfony\Component\Routing\Loader\DependencyInjection\ServiceRouterLoader($this));
$a->addLoader($c);
$a->addLoader(new \Symfony\Component\Routing\Loader\AnnotationDirectoryLoader($b, $c));
$a->addLoader(new \Symfony\Component\Routing\Loader\AnnotationFileLoader($b, $c));

return $this->services['routing.loader'] = new \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader(($this->privates['controller_name_converter'] ?? ($this->privates['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(($this->services['kernel'] ?? $this->get('kernel', 1))))), $a);
