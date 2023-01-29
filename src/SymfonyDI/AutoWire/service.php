<?php

declare(strict_types=1);

namespace My\PhpDiSandbox\SymfonyDI\AutoWire;

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return function (ContainerConfigurator $containerConfigurator) {
    // ...
    $services = $containerConfigurator->services()
        ->defaults()
        ->autowire()
        ->autoconfigure()
    ;

    $services->set(TwitterClient::class)
        // redundant thanks to defaults, but value is overridable on each service
        ->autowire()
    ;

    $services->set(Rot13Transformer::class)
        ->autowire()
    ;
};
