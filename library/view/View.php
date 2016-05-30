<?php

namespace library\view;

/**
 * 
 */
class View 
{
    /**
     *
     * @var type 
     */
    protected $path = null;
    
    /**
     *
     * @var type 
     */
    protected $controller = null;
    
    /**
     *
     * @var type 
     */
    protected $element = array();

    /**
     * 
     * @param type $controller
     */
    public function __construct($controller) 
    {
        $this->controller = $controller;
    }

    /**
     * 
     * @param type $path
     */
    public function setPath($path) 
    {
        $this->path = $path;
    }

    /**
     * 
     * @param type $action
     */
    public function render($action) 
    {
        $action = str_replace('Action', '', $action);

        require $this->path . DIRECTORY_SEPARATOR . $this->controller->getName() .
                DIRECTORY_SEPARATOR . $action . '.php';
    }

    /**
     * 
     * @param type $name
     * @return type
     */
    public function __get($name) 
    {
        return $this->element[$name];
    }

    /**
     * 
     * @param type $name
     * @param type $value
     */
    public function __set($name, $value) 
    {
        $this->element[$name] = $value;
    }
}