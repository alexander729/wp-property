<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite8d2a827345e04edd65cbf62cd3eebc7
{
    public static $classMap = array (
        'UsabilityDynamics\\WPP\\Slideshow_Bootstrap' => __DIR__ . '/../..' . '/lib/classes/class-slideshow-bootstrap.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInite8d2a827345e04edd65cbf62cd3eebc7::$classMap;

        }, null, ClassLoader::class);
    }
}