<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc9754de4e94d67d5ee86d830ec24f1f0
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'SebastianBergmann\\CliParser\\AmbiguousOptionException' => __DIR__ . '/..' . '/sebastian/cli-parser/src/exceptions/AmbiguousOptionException.php',
        'SebastianBergmann\\CliParser\\Exception' => __DIR__ . '/..' . '/sebastian/cli-parser/src/exceptions/Exception.php',
        'SebastianBergmann\\CliParser\\OptionDoesNotAllowArgumentException' => __DIR__ . '/..' . '/sebastian/cli-parser/src/exceptions/OptionDoesNotAllowArgumentException.php',
        'SebastianBergmann\\CliParser\\Parser' => __DIR__ . '/..' . '/sebastian/cli-parser/src/Parser.php',
        'SebastianBergmann\\CliParser\\RequiredOptionArgumentMissingException' => __DIR__ . '/..' . '/sebastian/cli-parser/src/exceptions/RequiredOptionArgumentMissingException.php',
        'SebastianBergmann\\CliParser\\UnknownOptionException' => __DIR__ . '/..' . '/sebastian/cli-parser/src/exceptions/UnknownOptionException.php',
        'SebastianBergmann\\FileIterator\\Facade' => __DIR__ . '/..' . '/phpunit/php-file-iterator/src/Facade.php',
        'SebastianBergmann\\FileIterator\\Factory' => __DIR__ . '/..' . '/phpunit/php-file-iterator/src/Factory.php',
        'SebastianBergmann\\FileIterator\\Iterator' => __DIR__ . '/..' . '/phpunit/php-file-iterator/src/Iterator.php',
        'SebastianBergmann\\PHPLOC\\Analyser' => __DIR__ . '/..' . '/phploc/phploc/src/Analyser.php',
        'SebastianBergmann\\PHPLOC\\Application' => __DIR__ . '/..' . '/phploc/phploc/src/CLI/Application.php',
        'SebastianBergmann\\PHPLOC\\Arguments' => __DIR__ . '/..' . '/phploc/phploc/src/CLI/Arguments.php',
        'SebastianBergmann\\PHPLOC\\ArgumentsBuilder' => __DIR__ . '/..' . '/phploc/phploc/src/CLI/ArgumentsBuilder.php',
        'SebastianBergmann\\PHPLOC\\ArgumentsBuilderException' => __DIR__ . '/..' . '/phploc/phploc/src/Exception/ArgumentsBuilderException.php',
        'SebastianBergmann\\PHPLOC\\Collector' => __DIR__ . '/..' . '/phploc/phploc/src/Collector.php',
        'SebastianBergmann\\PHPLOC\\Exception' => __DIR__ . '/..' . '/phploc/phploc/src/Exception/Exception.php',
        'SebastianBergmann\\PHPLOC\\Log\\Csv' => __DIR__ . '/..' . '/phploc/phploc/src/Log/Csv.php',
        'SebastianBergmann\\PHPLOC\\Log\\Json' => __DIR__ . '/..' . '/phploc/phploc/src/Log/Json.php',
        'SebastianBergmann\\PHPLOC\\Log\\Text' => __DIR__ . '/..' . '/phploc/phploc/src/Log/Text.php',
        'SebastianBergmann\\PHPLOC\\Log\\Xml' => __DIR__ . '/..' . '/phploc/phploc/src/Log/Xml.php',
        'SebastianBergmann\\PHPLOC\\Publisher' => __DIR__ . '/..' . '/phploc/phploc/src/Publisher.php',
        'SebastianBergmann\\PHPLOC\\RuntimeException' => __DIR__ . '/..' . '/phploc/phploc/src/Exception/RuntimeException.php',
        'SebastianBergmann\\Version' => __DIR__ . '/..' . '/sebastian/version/src/Version.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitc9754de4e94d67d5ee86d830ec24f1f0::$classMap;

        }, null, ClassLoader::class);
    }
}
