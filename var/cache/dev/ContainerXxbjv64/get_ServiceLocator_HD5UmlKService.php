<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.HD5UmlK' shared service.

return $this->privates['.service_locator.HD5UmlK'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'depense' => ['privates', '.errored..service_locator.HD5UmlK.App\\Entity\\Depensecellule', NULL, 'Cannot autowire service ".service_locator.HD5UmlK": it references class "App\\Entity\\Depensecellule" but no such service exists.'],
], [
    'depense' => 'App\\Entity\\Depensecellule',
]);
