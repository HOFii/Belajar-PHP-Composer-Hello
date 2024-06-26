<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf23bebb41b2461984aaa706b3a4fe578
{
    public static $prefixLengthsPsr4 = array (
        'G' => 
        array (
            'Gustiakabar\\BelajarPhpComposerHello\\' => 36,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Gustiakabar\\BelajarPhpComposerHello\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitf23bebb41b2461984aaa706b3a4fe578::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf23bebb41b2461984aaa706b3a4fe578::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf23bebb41b2461984aaa706b3a4fe578::$classMap;

        }, null, ClassLoader::class);
    }
}
