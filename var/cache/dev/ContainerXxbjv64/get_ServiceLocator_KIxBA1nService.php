<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.KIxBA1n' shared service.

return $this->privates['.service_locator.KIxBA1n'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'transfertRepository' => ['privates', 'App\\Repository\\TransfertRepository', 'getTransfertRepositoryService.php', true],
], [
    'transfertRepository' => 'App\\Repository\\TransfertRepository',
]);