<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit90bf9ff541b3e7bd3ddbd189cd302b65
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit90bf9ff541b3e7bd3ddbd189cd302b65::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit90bf9ff541b3e7bd3ddbd189cd302b65::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
