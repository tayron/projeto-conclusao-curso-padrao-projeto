<?php

namespace application\model;

use application\model\mapper\Pedido as PedidoMapper;

/**
 * 
 */
class Pedido 
{
    /**
     *
     * @var type 
     */
    private $mapper = null;

    /**
     * 
     */
    public function __construct() 
    {
        $this->mapper = new PedidoMapper();
    }
    
    /**
     * 
     * @param type $numero
     */
    public function gravarPedido($numero) 
    {
        $pedido = $this->mapper->newRow();
        $pedido->numero = $numero;
        $pedido->save();
    }
}