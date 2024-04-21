<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.T5v7ifo' shared service.

return $this->privates['.service_locator.T5v7ifo'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'activitecelluleRepository' => ['privates', 'App\\Repository\\ActivitecelluleRepository', 'getActivitecelluleRepositoryService.php', true],
    'cellule' => ['privates', '.errored..service_locator.T5v7ifo.App\\Entity\\Cellule', NULL, 'Cannot autowire service ".service_locator.T5v7ifo": it references class "App\\Entity\\Cellule" but no such service exists.'],
], [
    'activitecelluleRepository' => 'App\\Repository\\ActivitecelluleRepository',
    'cellule' => 'App\\Entity\\Cellule',
]);
