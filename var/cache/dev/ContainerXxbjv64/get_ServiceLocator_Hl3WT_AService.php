<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.Hl3WT.a' shared service.

return $this->privates['.service_locator.Hl3WT.a'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'celluleRepository' => ['privates', 'App\\Repository\\CelluleRepository', 'getCelluleRepositoryService.php', true],
], [
    'celluleRepository' => 'App\\Repository\\CelluleRepository',
]);
