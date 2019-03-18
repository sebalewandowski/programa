<?php
declare(strict_types = 1);

use Programa\ConsoleCommand;
use Symfony\Component\Console\Application;

require __DIR__ . '/../../vendor/autoload.php';

$container = require __DIR__ . '/../bootstrap.php';

$application = new Application();

$commands = [
    ConsoleCommand::class,
];

foreach ($commands as $command) {
    $instance = $container->get($command);
    $application->add($instance);
}

$application->run();
