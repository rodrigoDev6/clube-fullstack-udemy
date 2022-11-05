<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitf1f48c98619c899fba45047c51f58a64
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInitf1f48c98619c899fba45047c51f58a64', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitf1f48c98619c899fba45047c51f58a64', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitf1f48c98619c899fba45047c51f58a64::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
