<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdd8c16f0c95944ec2e7328ef6275146d
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Rodrigodev\\CursoPhp\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Rodrigodev\\CursoPhp\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitdd8c16f0c95944ec2e7328ef6275146d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdd8c16f0c95944ec2e7328ef6275146d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitdd8c16f0c95944ec2e7328ef6275146d::$classMap;

        }, null, ClassLoader::class);
    }
}
