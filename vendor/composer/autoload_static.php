<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbd0d668aae8597f49d9696e3457c0801
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbd0d668aae8597f49d9696e3457c0801::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbd0d668aae8597f49d9696e3457c0801::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitbd0d668aae8597f49d9696e3457c0801::$classMap;

        }, null, ClassLoader::class);
    }
}