<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4f6616120f0bce7de49b7ae9522d795b
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

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'PHPExcel' => 
            array (
                0 => __DIR__ . '/..' . '/phpoffice/phpexcel/Classes',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4f6616120f0bce7de49b7ae9522d795b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4f6616120f0bce7de49b7ae9522d795b::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit4f6616120f0bce7de49b7ae9522d795b::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
