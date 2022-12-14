<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit32f55fe1705b9f0918d01e37e3e61c89
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'CommencementTechnology\\Botcheck\\' => 32,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'CommencementTechnology\\Botcheck\\' => 
        array (
            0 => __DIR__ . '/../..' . '/CommencementTechnology/Botcheck',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit32f55fe1705b9f0918d01e37e3e61c89::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit32f55fe1705b9f0918d01e37e3e61c89::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit32f55fe1705b9f0918d01e37e3e61c89::$classMap;

        }, null, ClassLoader::class);
    }
}
