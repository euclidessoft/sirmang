<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.pmIbvZ4' shared service.

return $this->privates['.service_locator.pmIbvZ4'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'autreentreecelluleRepository' => ['privates', 'App\\Repository\\AutreentreecelluleRepository', 'getAutreentreecelluleRepositoryService.php', true],
    'cellule' => ['privates', '.errored..service_locator.pmIbvZ4.App\\Entity\\Cellule', NULL, 'Cannot autowire service ".service_locator.pmIbvZ4": it references class "App\\Entity\\Cellule" but no such service exists.'],
], [
    'autreentreecelluleRepository' => 'App\\Repository\\AutreentreecelluleRepository',
    'cellule' => 'App\\Entity\\Cellule',
]);
