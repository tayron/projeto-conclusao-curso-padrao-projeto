<?php

namespace library\db\factory\sql;

use library\db\factory\DbInterface;
use library\db\factory\FactoryInterface;

/**
 * 
 */
class Db implements FactoryInterface 
{
    /**
     *
     * @var type 
     */
    private $config = null;

    /**
     * 
     * @param array $config
     */
    public function __construct(array $config) 
    {
        $this->config = $config;
    }

    /**
     *
     * @return DbInterface
     */
    public function factory() 
    {
        $db = $this->config['db'];

        $class = __NAMESPACE__ . '\DbAdapter' . $db;

        return new $class($this->config);
    }
}