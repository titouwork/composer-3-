<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite90925aa65a21a63ccdd44ade3f75f11
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'CowSay\\Traits\\' => 14,
            'CowSay\\Core\\' => 12,
            'CowSay\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'CowSay\\Traits\\' => 
        array (
            0 => __DIR__ . '/..' . '/gipetto/cowsay/src/Traits',
        ),
        'CowSay\\Core\\' => 
        array (
            0 => __DIR__ . '/..' . '/gipetto/cowsay/src/Core',
        ),
        'CowSay\\' => 
        array (
            0 => __DIR__ . '/..' . '/gipetto/cowsay/src/Carcases',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite90925aa65a21a63ccdd44ade3f75f11::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite90925aa65a21a63ccdd44ade3f75f11::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite90925aa65a21a63ccdd44ade3f75f11::$classMap;

        }, null, ClassLoader::class);
    }
}
