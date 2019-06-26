<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2b226da018ff9221f63f849d463e23d9
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'Laravist\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Laravist\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2b226da018ff9221f63f849d463e23d9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2b226da018ff9221f63f849d463e23d9::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}