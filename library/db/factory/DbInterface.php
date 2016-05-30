<?php

namespace library\db\factory;

/**
 * 
 */
interface DbInterface 
{
    /**
     * 
     * @param array $config
     */
    public function __construct(array $config);

    /**
     * 
     * @param type $table
     * @param array $fields
     */
    public function insert($table, array $fields);

    /**
     * 
     * @param type $table
     * @param array $fields
     * @param type $where
     */
    public function update($table, array $fields, $where);

    /**
     * 
     * @param type $table
     * @param type $where
     */
    public function delete($table, $where);

    /**
     * 
     * @param type $table
     * @param type $cols
     * @param type $where
     */
    public function select($table, $cols = '*', $where = null);
}
