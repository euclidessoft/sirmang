<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.PMqkwGT' shared service.

return $this->privates['.service_locator.PMqkwGT'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'cellule' => ['privates', '.errored..service_locator.PMqkwGT.App\\Entity\\Cellule', NULL, 'Cannot autowire service ".service_locator.PMqkwGT": it references class "App\\Entity\\Cellule" but no such service exists.'],
    'cotismensuelRepository' => ['privates', 'App\\Repository\\CotismensuelRepository', 'getCotismensuelRepositoryService.php', true],
    'mois' => ['privates', '.errored..service_locator.PMqkwGT.App\\Entity\\Mois', NULL, 'Cannot autowire service ".service_locator.PMqkwGT": it references class "App\\Entity\\Mois" but no such service exists.'],
    'userRepository' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService.php', true],
], [
    'cellule' => 'App\\Entity\\Cellule',
    'cotismensuelRepository' => 'App\\Repository\\CotismensuelRepository',
    'mois' => 'App\\Entity\\Mois',
    'userRepository' => 'App\\Repository\\UserRepository',
]);
