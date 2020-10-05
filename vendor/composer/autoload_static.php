<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1162b51390267f59b3f48d3243ffb506
{
    public static $files = array (
        '5a1e9b98d4edcbb141825d2ebca87291' => __DIR__ . '/../..' . '/source/Config.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Source\\' => 7,
        ),
        'C' => 
        array (
            'CoffeeCode\\DataLayer\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Source\\' => 
        array (
            0 => __DIR__ . '/../..' . '/source',
        ),
        'CoffeeCode\\DataLayer\\' => 
        array (
            0 => __DIR__ . '/..' . '/coffeecode/datalayer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1162b51390267f59b3f48d3243ffb506::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1162b51390267f59b3f48d3243ffb506::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1162b51390267f59b3f48d3243ffb506::$classMap;

        }, null, ClassLoader::class);
    }
}