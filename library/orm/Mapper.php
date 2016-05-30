<?php

namespace library\orm;

use library\orm\TableGateway;
use library\db\factory\DbInterface;

/**
 * 
 */
class Mapper extends TableGateway 
{
    /**
     *
     * @var type 
     */
    protected $primaryKey = null;
    
    /**
     *
     * @var type 
     */
    protected $rowClass = '\\library\\orm\\ActiveRecord';
    
    /**
     *
     * @var type 
     */
    public static $defaultAdapter = null;

    /**
     * 
     * @param type $table
     * @param type $primaryKey
     * @param type $adapter
     */
    public function __construct($table = null, $primaryKey = null, $adapter = null) 
    {
        if (!is_null($primaryKey))
            $this->primaryKey = $primaryKey;
        if (!is_null($table) && !is_null($adapter))
            parent::__construct($table, $adapter);
        if (self::$defaultAdapter !== null)
            $this->adapter = self::$defaultAdapter;
    }

    /**
     * 
     * @return type
     */
    public function getPrimaryKey() 
    {
        return $this->primaryKey;
    }

    /**
     * 
     * @return type
     */
    public function getTable() 
    {
        return $this->table;
    }

    /**
     * 
     * @param array $cols
     */
    public function insert(array $cols) 
    {
        $this->adapter->insert($this->table, $cols);
    }

    /**
     * 
     * @param array $cols
     * @param type $where
     */
    public function update(array $cols, $where) 
    {
        $this->adapter->update($this->table, $cols, $where);
    }

    /**
     * 
     * @param type $where
     */
    public function delete($where) 
    {
        $this->adapter->delete($this->table, $where);
    }

    /**
     * 
     */
    public function newRow() 
    {
        $element = $this->adapter->getFields($this->table);

        $row = new ActiveRecord($element, $this->adapter, $this, array('state' => 'new'));

        return $row;
    }
}