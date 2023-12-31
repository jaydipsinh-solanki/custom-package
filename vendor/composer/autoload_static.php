<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb2ea13a343884876a6213ab8139de1d9
{
    public static $prefixLengthsPsr4 = array (
        'G' => 
        array (
            'Gd\\Qoutes\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Gd\\Qoutes\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitb2ea13a343884876a6213ab8139de1d9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb2ea13a343884876a6213ab8139de1d9::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb2ea13a343884876a6213ab8139de1d9::$classMap;

        }, null, ClassLoader::class);
    }
}
