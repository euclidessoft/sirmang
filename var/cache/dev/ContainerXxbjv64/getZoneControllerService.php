<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'App\Controller\ZoneController' shared autowired service.

include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/ControllerTrait.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
include_once \dirname(__DIR__, 4).'/src/Controller/ZoneController.php';

$this->services['App\\Controller\\ZoneController'] = $instance = new \App\Controller\ZoneController();

$instance->setContainer(($this->privates['.service_locator.AVaUqzz'] ?? $this->load('get_ServiceLocator_AVaUqzzService.php'))->withContext('App\\Controller\\ZoneController', $this));

return $instance;
