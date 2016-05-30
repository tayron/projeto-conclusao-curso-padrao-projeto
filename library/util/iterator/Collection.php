<?php

namespace library\util\iterator;

/**
 * 
 */
class Collection implements \Iterator 
{
    /**
     *
     * @var type 
     */
    protected $elements = array();
    
    /**
     *
     * @var type 
     */
    protected $key = 0;

    /**
     * 
     * @param array $elements
     */
    public function __construct(array $elements) 
    {
        $this->elements = $elements;
    }

    /**
     * 
     * @return type
     */
    public function getElements() 
    {
        return $this->elements;
    }

    /**
     * 
     * @return type
     */
    public function current() 
    {
        return $this->elements[$this->key];
    }

    /**
     * 
     */
    public function next() 
    {
        $this->key++;
    }

    /**
     * 
     * @return type
     */
    public function valid() 
    {
        return ($this->key < count($this->elements));
    }

    /**
     * 
     */
    public function rewind() 
    {
        $this->key = 0;
    }

    /**
     * 
     * @return type
     */
    public function key() 
    {
        return $this->key;
    }
}