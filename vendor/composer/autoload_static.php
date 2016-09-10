<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit751226aa959bd9ccec3504aeffb117cb
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Component\\Console\\' => 26,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Component\\Console\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/console',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit751226aa959bd9ccec3504aeffb117cb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit751226aa959bd9ccec3504aeffb117cb::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
