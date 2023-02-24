<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit33ee420eed4d6ad654794c7ce81fe509
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit33ee420eed4d6ad654794c7ce81fe509::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit33ee420eed4d6ad654794c7ce81fe509::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit33ee420eed4d6ad654794c7ce81fe509::$classMap;

        }, null, ClassLoader::class);
    }
}
