<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'twig.mailer.message_listener' shared service.

include_once \dirname(__DIR__, 4).'/vendor/symfony/mailer/EventListener/MessageListener.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/mime/BodyRendererInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Mime/BodyRenderer.php';

return $this->privates['twig.mailer.message_listener'] = new \Symfony\Component\Mailer\EventListener\MessageListener(NULL, new \Symfony\Bridge\Twig\Mime\BodyRenderer(($this->services['twig'] ?? $this->getTwigService())));