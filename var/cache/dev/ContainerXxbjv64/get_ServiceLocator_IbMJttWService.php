<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.IbMJttW' shared service.

return $this->privates['.service_locator.IbMJttW'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'assignation' => ['privates', '.errored..service_locator.IbMJttW.App\\Entity\\Assignation', NULL, 'Cannot autowire service ".service_locator.IbMJttW": it references class "App\\Entity\\Assignation" but no such service exists.'],
], [
    'assignation' => 'App\\Entity\\Assignation',
]);