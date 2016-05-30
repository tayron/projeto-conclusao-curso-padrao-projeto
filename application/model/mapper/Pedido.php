<?php

namespace application\model\mapper;

use library\orm\Mapper;

/**
 * 
 */
class Pedido extends Mapper 
{
    /**
     *
     * @var type 
     */
    protected $table = 'pedidos';
    
    /**
     *
     * @var type 
     */
    protected $primaryKey = 'numero';
    
    /**
     *
     * @var type 
     */
    protected $adapter = null;

}