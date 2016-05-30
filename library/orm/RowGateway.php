<?php

namespace library\orm;

/**
 * 
 */
class RowGateway 
{
    /**
     *
     * @var type 
     */
    protected $adapter = null;
    
    /**
     *
     * @var type 
     */
    protected $element = null;
    
    /**
     *
     * @var type 
     */
    protected $mapper = null;

    /**
     * 
     * @param type $element
     * @param type $adapter
     * @param type $mapper
     */
    public function __construct($element, $adapter, $mapper) 
    {
        $this->adapter = $adapter;
        $this->element = $element;
        $this->mapper = $mapper;
    }

    /**
     * 
     * @param type $attribute
     * @return type
     */
    public function __get($attribute) 
    {
        return $this->element[$attribute];
    }

    /**
     * 
     * @param type $attribute
     * @param type $value
     */
    public function __set($attribute, $value) 
    {
        $this->element[$attribute] = $value;
    }
}