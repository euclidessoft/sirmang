<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'doctrine.clear_entity_region_command' shared service.

include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/AbstractEntityManagerCommand.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/ClearCache/EntityRegionCommand.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Command/Proxy/EntityRegionCacheDoctrineCommand.php';

$this->privates['doctrine.clear_entity_region_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\EntityRegionCacheDoctrineCommand();

$instance->setName('doctrine:cache:clear-entity-region');

return $instance;