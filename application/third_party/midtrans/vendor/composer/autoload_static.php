<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd6298a82d8c0a59b855810e623881c77
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Midtrans\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Midtrans\\' => 
        array (
            0 => __DIR__ . '/..' . '/midtrans/midtrans-php/Midtrans',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd6298a82d8c0a59b855810e623881c77::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd6298a82d8c0a59b855810e623881c77::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
