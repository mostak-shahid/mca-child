<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd601106236003c499e94bd1e170ef410
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Carbon_Fields\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Carbon_Fields\\' => 
        array (
            0 => __DIR__ . '/..' . '/htmlburger/carbon-fields/core',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd601106236003c499e94bd1e170ef410::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd601106236003c499e94bd1e170ef410::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd601106236003c499e94bd1e170ef410::$classMap;

        }, null, ClassLoader::class);
    }
}