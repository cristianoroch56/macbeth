<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc95460a735be7bdcfa6e1349b1c5339b
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Macbeth\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Macbeth\\' => 
        array (
            0 => __DIR__ . '/../..' . '/inc',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc95460a735be7bdcfa6e1349b1c5339b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc95460a735be7bdcfa6e1349b1c5339b::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
