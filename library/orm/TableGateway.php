<?php

namespace library\orm;

use library\util\iterator\Collection;
use library\db\factory\DbInterface;

/**
 * 
 */
class TableGateway extends Collection 
{
    /**
     *
     * @var string
     */
    protected $table = null;

    /**
     *
     * @var DbInterface
     */
    protected $adapter = null;
    
    /**
     *
     * @var type 
     */
    protected $rowClass = '\\library\\orm\\RowGateway';

    /**
     * 
     * @param type $table
     * @param DbInterface $adapter
     */
    public function __construct($table, DbInterface $adapter) 
    {
        $this->table = $table;
        $this->adapter = $adapter;
    }

    /**
     * 
     * @param type $cols
     * @param type $where
     * @return \library\orm\TableGateway
     */
    public function select($cols = '*', $where = null) 
    {
        $rowClass = $this->rowClass;
        $collection = $this->adapter->select($this->table, $cols, $where);
        foreach ($collection->getElements() as $element) {
            $this->elements[] = new $rowClass($element, $this->adapter, $this);
        }
        return $this;
    }

    /**
     * 
     * @return type
     */
    public function getAdapter() 
    {
        return $this->adapter;
    }
}