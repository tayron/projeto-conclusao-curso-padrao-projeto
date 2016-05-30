<?php

namespace library\util;

/**
 * 
 */
class Autoloader 
{
    /**
     *
     * @var type 
     */
    private static $instance;

    /**
     * 
     */
    private function __construct() 
    {
        spl_autoload_register(array($this, 'autoload'));
    }

    /**
     * 
     * @return type
     */
    public static function getInstance() 
    {
        if (self::$instance == null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    /**
     * 
     * @param type $class
     */
    public function autoload($class) 
    {
        $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);

        require $class . '.php';
    }
}