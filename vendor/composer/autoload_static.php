<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb1b11fa8f0ff1775c2cd1f6a650dcaa7
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Stripe\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Stripe\\' => 
        array (
            0 => __DIR__ . '/..' . '/stripe/stripe-php/lib',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb1b11fa8f0ff1775c2cd1f6a650dcaa7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb1b11fa8f0ff1775c2cd1f6a650dcaa7::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb1b11fa8f0ff1775c2cd1f6a650dcaa7::$classMap;

        }, null, ClassLoader::class);
    }
}