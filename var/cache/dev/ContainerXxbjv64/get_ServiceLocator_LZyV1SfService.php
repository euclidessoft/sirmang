<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.lZyV1Sf' shared service.

return $this->privates['.service_locator.lZyV1Sf'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'AcquitAssignationRepository' => ['privates', 'App\\Repository\\AcquitAssignationRepository', 'getAcquitAssignationRepositoryService.php', true],
    'assignationRepository' => ['privates', 'App\\Repository\\AssignationRepository', 'getAssignationRepositoryService.php', true],
    'cellule' => ['privates', '.errored..service_locator.lZyV1Sf.App\\Entity\\Cellule', NULL, 'Cannot autowire service ".service_locator.lZyV1Sf": it references class "App\\Entity\\Cellule" but no such service exists.'],
    'userRepository' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService.php', true],
], [
    'AcquitAssignationRepository' => 'App\\Repository\\AcquitAssignationRepository',
    'assignationRepository' => 'App\\Repository\\AssignationRepository',
    'cellule' => 'App\\Entity\\Cellule',
    'userRepository' => 'App\\Repository\\UserRepository',
]);
