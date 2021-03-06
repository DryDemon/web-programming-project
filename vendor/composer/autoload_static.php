<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7d9908fbfe57f91fc0c9773c331c40c9
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Test\\' => 5,
        ),
        'S' => 
        array (
            'Simplon\\Mysql\\' => 14,
        ),
        'F' => 
        array (
            'Firebase\\JWT\\' => 13,
        ),
        'B' => 
        array (
            'Bcrypt\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Test\\' => 
        array (
            0 => __DIR__ . '/..' . '/simplon/mysql/test',
        ),
        'Simplon\\Mysql\\' => 
        array (
            0 => __DIR__ . '/..' . '/simplon/mysql/src',
        ),
        'Firebase\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/firebase/php-jwt/src',
        ),
        'Bcrypt\\' => 
        array (
            0 => __DIR__ . '/..' . '/polarising/bcrypt/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7d9908fbfe57f91fc0c9773c331c40c9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7d9908fbfe57f91fc0c9773c331c40c9::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7d9908fbfe57f91fc0c9773c331c40c9::$classMap;

        }, null, ClassLoader::class);
    }
}
