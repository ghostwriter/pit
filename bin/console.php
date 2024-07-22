#!/usr/bin/env php
<?php

declare(strict_types=1);

namespace Ghostwriter\Wip\Console;

use Ghostwriter\Wip\Foo;

use const PHP_EOL;

use function dirname;
use function is_file;
use function sprintf;

/** @var ?string $_composer_autoload_path */
(static function (string $composerAutoloadPath): void {

    if (! is_file($composerAutoloadPath)) {
        echo sprintf('[ERROR]Cannot locate "%s"\n please run "composer install"\n', $composerAutoloadPath), PHP_EOL;
        exit(1);
    }

    require $composerAutoloadPath;

    /**
     * #BlackLivesMatter.
     */
    echo (new Foo())->test();
})($_composer_autoload_path ??= dirname(__DIR__, 2) . '/vendor/autoload.php');
