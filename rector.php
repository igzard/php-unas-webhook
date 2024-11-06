<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\Php83\Rector\ClassMethod\AddOverrideAttributeToOverriddenMethodsRector;

try {
    return RectorConfig::configure()
        ->withPaths([
            __DIR__.'/src',
            __DIR__.'/tests',
        ])
        ->withSkip([
            AddOverrideAttributeToOverriddenMethodsRector::class,
        ])
        ->withPreparedSets(
            deadCode: true,
            codeQuality: true,
            typeDeclarations: true,
            privatization: true,
            earlyReturn: true,
            strictBooleans: true,
        )
        ->withPhpSets();
} catch (Rector\Exception\Configuration\InvalidConfigurationException $e) {
    echo $e->getMessage();
    exit(1);
}
