<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcc4d53c13e871e95ea4f0d9ca305ae0d
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Stefan\\LaravelLocalisation\\' => 27,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Stefan\\LaravelLocalisation\\' => 
        array (
            0 => __DIR__.'/../..'.'/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__.'/vendor'. '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcc4d53c13e871e95ea4f0d9ca305ae0d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcc4d53c13e871e95ea4f0d9ca305ae0d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitcc4d53c13e871e95ea4f0d9ca305ae0d::$classMap;

        }, null, ClassLoader::class);
    }
}
