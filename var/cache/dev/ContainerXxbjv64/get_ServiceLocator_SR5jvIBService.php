<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.sR5jvIB' shared service.

return $this->privates['.service_locator.sR5jvIB'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'cellule' => ['privates', '.errored..service_locator.sR5jvIB.App\\Entity\\Cellule', NULL, 'Cannot autowire service ".service_locator.sR5jvIB": it references class "App\\Entity\\Cellule" but no such service exists.'],
    'cotisation' => ['privates', '.errored..service_locator.sR5jvIB.App\\Entity\\Cotisation', NULL, 'Cannot autowire service ".service_locator.sR5jvIB": it references class "App\\Entity\\Cotisation" but no such service exists.'],
], [
    'cellule' => 'App\\Entity\\Cellule',
    'cotisation' => 'App\\Entity\\Cotisation',
]);
