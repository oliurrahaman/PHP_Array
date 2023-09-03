<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit465cff0c82daaef02f4233c26553feae
{
    public static $files = array (
        'e9abbc8f1fa40f93ee5f6c2657c1113c' => __DIR__ . '/../..' . '/app/helper/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit465cff0c82daaef02f4233c26553feae::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit465cff0c82daaef02f4233c26553feae::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit465cff0c82daaef02f4233c26553feae::$classMap;

        }, null, ClassLoader::class);
    }
}
