<?php

declare(strict_types=1);

use DI\Container;
use My\PhpDiSandbox\PHPDI\AutoWire\Controller\MyPageController;

/** @var Container $container */
$container = require_once __DIR__.'/../Bootstrap/container.php';

$container->call(function (MyPageController $controller) {
    // 本当は `$_GET['user_id']`みたない感じで取りたいがApacheないので妥協
    $controller->index(1)->send();
});
