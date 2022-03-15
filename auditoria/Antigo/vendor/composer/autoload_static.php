<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit37d3fb49bb1c8f397dda8437133611be
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Talita\\' => 7,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Talita\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit37d3fb49bb1c8f397dda8437133611be::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit37d3fb49bb1c8f397dda8437133611be::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit37d3fb49bb1c8f397dda8437133611be::$classMap;

        }, null, ClassLoader::class);
    }
}
