<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit381edc009288784450058eb869209783
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit381edc009288784450058eb869209783::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit381edc009288784450058eb869209783::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit381edc009288784450058eb869209783::$classMap;

        }, null, ClassLoader::class);
    }
}
