<?php

declare(strict_types=1);

namespace My\PhpDiSandbox\PHPDI\AutoWire\Boostrap;

require_once __DIR__.'/../../../../vendor/autoload.php';

use DI\ContainerBuilder;

$containerBuilder = new ContainerBuilder();
$containerBuilder->addDefinitions(__DIR__.'/config.php');

return $containerBuilder->build();
