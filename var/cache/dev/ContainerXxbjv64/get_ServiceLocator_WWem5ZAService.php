<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.WWem5ZA' shared service.

return $this->privates['.service_locator.WWem5ZA'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'cellule' => ['privates', '.errored..service_locator.WWem5ZA.App\\Entity\\Cellule', NULL, 'Cannot autowire service ".service_locator.WWem5ZA": it references class "App\\Entity\\Cellule" but no such service exists.'],
    'transfertcelluleRepository' => ['privates', 'App\\Repository\\TransfertcelluleRepository', 'getTransfertcelluleRepositoryService.php', true],
], [
    'cellule' => 'App\\Entity\\Cellule',
    'transfertcelluleRepository' => 'App\\Repository\\TransfertcelluleRepository',
]);
