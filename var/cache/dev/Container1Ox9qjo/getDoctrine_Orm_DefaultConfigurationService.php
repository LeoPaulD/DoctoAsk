<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'doctrine.orm.default_configuration' shared service.

include_once $this->targetDirs[3].'/vendor/doctrine/dbal/lib/Doctrine/DBAL/Configuration.php';
include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/Configuration.php';
include_once $this->targetDirs[3].'/vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/Driver/MappingDriver.php';
include_once $this->targetDirs[3].'/vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/Driver/MappingDriverChain.php';
include_once $this->targetDirs[3].'/vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/Driver/AnnotationDriver.php';
include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/Driver/AnnotationDriver.php';
include_once $this->targetDirs[3].'/vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/Driver/FileDriver.php';
include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/Driver/XmlDriver.php';
include_once $this->targetDirs[3].'/vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/Driver/FileLocator.php';
include_once $this->targetDirs[3].'/vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/Driver/SymfonyFileLocator.php';
include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/NamingStrategy.php';
include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/UnderscoreNamingStrategy.php';
include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/QuoteStrategy.php';
include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/DefaultQuoteStrategy.php';
include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/EntityListenerResolver.php';
include_once $this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Mapping/EntityListenerServiceResolver.php';
include_once $this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Mapping/ContainerAwareEntityListenerResolver.php';
include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/Repository/RepositoryFactory.php';
include_once $this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Repository/ContainerRepositoryFactory.php';

$this->privates['doctrine.orm.default_configuration'] = $instance = new \Doctrine\ORM\Configuration();

$a = new \Doctrine\Common\Persistence\Mapping\Driver\MappingDriverChain();
$a->addDriver(new \Doctrine\ORM\Mapping\Driver\AnnotationDriver(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()), array(0 => ($this->targetDirs[3].'/src/Entity'))), 'App\\Entity');
$a->addDriver(new \Doctrine\ORM\Mapping\Driver\XmlDriver(new \Doctrine\Common\Persistence\Mapping\Driver\SymfonyFileLocator(array(($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/config/doctrine-mapping') => 'FOS\\UserBundle\\Model'), '.orm.xml')), 'FOS\\UserBundle\\Model');

$instance->setEntityNamespaces(array('App' => 'App\\Entity'));
$instance->setMetadataCacheImpl(($this->services['doctrine_cache.providers.doctrine.orm.default_metadata_cache'] ?? $this->load('getDoctrineCache_Providers_Doctrine_Orm_DefaultMetadataCacheService.php')));
$instance->setQueryCacheImpl(($this->services['doctrine_cache.providers.doctrine.orm.default_query_cache'] ?? $this->load('getDoctrineCache_Providers_Doctrine_Orm_DefaultQueryCacheService.php')));
$instance->setResultCacheImpl(($this->services['doctrine_cache.providers.doctrine.orm.default_result_cache'] ?? $this->load('getDoctrineCache_Providers_Doctrine_Orm_DefaultResultCacheService.php')));
$instance->setMetadataDriverImpl($a);
$instance->setProxyDir(($this->targetDirs[0].'/doctrine/orm/Proxies'));
$instance->setProxyNamespace('Proxies');
$instance->setAutoGenerateProxyClasses(true);
$instance->setClassMetadataFactoryName('Doctrine\\ORM\\Mapping\\ClassMetadataFactory');
$instance->setDefaultRepositoryClassName('Doctrine\\ORM\\EntityRepository');
$instance->setNamingStrategy(new \Doctrine\ORM\Mapping\UnderscoreNamingStrategy());
$instance->setQuoteStrategy(new \Doctrine\ORM\Mapping\DefaultQuoteStrategy());
$instance->setEntityListenerResolver(new \Doctrine\Bundle\DoctrineBundle\Mapping\ContainerAwareEntityListenerResolver($this));
$instance->setRepositoryFactory(new \Doctrine\Bundle\DoctrineBundle\Repository\ContainerRepositoryFactory(new \Symfony\Component\DependencyInjection\ServiceLocator(array('App\\Repository\\ContactRepository' => function () {
    return ($this->privates['App\Repository\ContactRepository'] ?? $this->load('getContactRepositoryService.php'));
}, 'App\\Repository\\InfosRepository' => function () {
    return ($this->privates['App\Repository\InfosRepository'] ?? $this->load('getInfosRepositoryService.php'));
}, 'App\\Repository\\NouveauteRepository' => function () {
    return ($this->privates['App\Repository\NouveauteRepository'] ?? $this->load('getNouveauteRepositoryService.php'));
}, 'App\\Repository\\OffreRepository' => function () {
    return ($this->privates['App\Repository\OffreRepository'] ?? $this->load('getOffreRepositoryService.php'));
}, 'App\\Repository\\QuestionsRepository' => function () {
    return ($this->privates['App\Repository\QuestionsRepository'] ?? $this->load('getQuestionsRepositoryService.php'));
}, 'App\\Repository\\ReponsesRepository' => function () {
    return ($this->privates['App\Repository\ReponsesRepository'] ?? $this->load('getReponsesRepositoryService.php'));
}))));

return $instance;
