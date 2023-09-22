<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitbe425e74c9c11e408d4c3be45ecbc4cd
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

        spl_autoload_register(array('ComposerAutoloaderInitbe425e74c9c11e408d4c3be45ecbc4cd', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitbe425e74c9c11e408d4c3be45ecbc4cd', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitbe425e74c9c11e408d4c3be45ecbc4cd::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
