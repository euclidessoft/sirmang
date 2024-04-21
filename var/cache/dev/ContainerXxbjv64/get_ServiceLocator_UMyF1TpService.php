<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.UMyF1Tp' shared service.

return $this->privates['.service_locator.UMyF1Tp'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'encoder' => ['services', 'security.password_encoder', 'getSecurity_PasswordEncoderService.php', true],
    'mail' => ['services', 'swiftmailer.mailer.default', 'getSwiftmailer_Mailer_DefaultService.php', true],
    'tokenGenerator' => ['privates', 'security.csrf.token_generator', 'getSecurity_Csrf_TokenGeneratorService.php', true],
], [
    'encoder' => '?',
    'mail' => '?',
    'tokenGenerator' => '?',
]);