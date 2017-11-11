<?php

/*
 * PROYECTO EASY ORDER
 * 
 * Módulo:
 * Documento: "PedidoController.php"  Version:  1.0.
 * Descripción:
 * Autor: andersonrodriguezce@gmail.com.
 * Fecha creación: 24/10/2017 | 01:27:10 AM.
 */

/**
 * Description of PedidoController
 *
 * @author andersonrodriguezce@gmail.com
 */
class PedidoController extends Controller{
    protected $selfController;
    protected $pedido;
    protected $detallePedido;
    protected $producto;
    
    protected $cant;
    protected $current_hour;
            
    function __construct() {}    
        
    public function actionDetallepedido($horaRegistro, $cantidad, $id_prod){
        $this->pedido = new PedidoModelMenu();
        $this->detallePedido = new DetallePedidoModelMen();
        $this->producto = new Producto();
        
        //Se obtiene el último registro del pedido para obtener el id del producto;                
        $objDetPedido = $this->pedido->findByTime($horaRegistro);
        //Se obtiene el produto. 
        $objProd = $this->producto->find($id_prod);
        
        $this->detallePedido->cod_producto = $objProd->cod_producto;
        $this->detallePedido->cod_promocion = $objProd->cod_promocion;
        $this->detallePedido->cod_combo = $objProd->cod_combo;
        $this->detallePedido->cod_orden = $objDetPedido->cod_orden;
        $this->detallePedido->cantidad_adquirida = $cantidad;
        $this->detallePedido->hora_ord = $horaRegistro;                
        
        $this->detallePedido->crear($this->detallePedido);     
        
    }
    
    public function actionGuardarpedido(){        
        $this->selfController = new PedidoController();
        // set default timezone
        date_default_timezone_set('America/Bogota');
        $this->current_hour = "'".date('H:i:s')."'";        
        
        $id_prod = $_POST["id_prod"];
        $this->cant = "'".$_POST["cantidad"]."'";        
        
        $this->pedido = new PedidoModelMenu();     
        $this->pedido->numero_mesa_ord = $_POST["numero_mesa"];
        $this->pedido->etapa_ord = "'".$_POST["etapa"]."'";
        $this->pedido->hora_ord = $this->current_hour;
        //Se registra el pedido        
        $this->pedido->crear($this->pedido);
        //Se registra el detalle del pedido        
        $this->selfController->actionDetallepedido($this->current_hour, $this->cant, $id_prod);
    }            
}
