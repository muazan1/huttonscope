<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4b5740c6683be3e9228e480ece691a24
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Sty\\Hutton\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Sty\\Hutton\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4b5740c6683be3e9228e480ece691a24::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4b5740c6683be3e9228e480ece691a24::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4b5740c6683be3e9228e480ece691a24::$classMap;

        }, null, ClassLoader::class);
    }
}