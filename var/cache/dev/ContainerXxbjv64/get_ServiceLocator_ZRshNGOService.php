<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.zRshNGO' shared service.

return $this->privates['.service_locator.zRshNGO'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'servicemensualite' => ['privates', 'App\\Complement\\Mensualite', 'getMensualiteService.php', true],
    'servicemois' => ['privates', 'App\\Complement\\Mois', 'getMois4Service.php', true],
], [
    'servicemensualite' => 'App\\Complement\\Mensualite',
    'servicemois' => 'App\\Complement\\Mois',
]);
