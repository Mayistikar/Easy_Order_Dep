<?php

/*
 * PROYECTO EASY ORDER
 * 
 * Módulo:
 * Documento: "DetallePedidoModelMen.php"  Version:  1.0.
 * Descripción:
 * Autor: andersonrodriguezce@gmail.com.
 * Fecha creación: 24/10/2017 | 11:11:44 PM.
 */

/**
 * Description of DetallePedidoModelMen
 *
 * @author andersonrodriguezce@gmail.com
 */
class DetallePedidoModelMen extends Model {
    /**
     *
     * @var string | Contiene el nombre de la tabla. 
     */
    protected $table = "detalle_orden";
    /**
     *
     * @var string | Contiene el nombre de la llave primaria de la tabla. 
     */
    protected $primaryKey = "cod_detalle_orden";

//CRUD VARIABLES.
    
    /**
     *
     * @var string | Contiene el nombre del procedimiento almacenado con la funcionalidad de creación. 
     */
    protected $createProcedure = "CREATE_DET_ORDEN";
    
    /**
     *
     * @var string | Contiene el nombre del procedimiento almacenado con la funcionalidad de lectura de un resultado. 
     */
    protected $readProcedure = "";
    
    /**
     *
     * @var string | Contiene el nombre del procedimiento almacenado con la funcionalidad de lectura de multiples resultado. 
     */
    protected $readAllProcedure = "";
    
    /**
     *
     * @var string | Contiene el nombre del procedimiento almacenado con la funcionalidad de lectura de multiples resultado. 
     */
    protected $readAllDetProcedure = "";    
    
    /**
     *
     * @var string | Contiene el nombre del procedimiento almacenado con la funcionalidad de actualización de columnas. 
     */
    protected $updateProcedure = "";
    
    /**
     *
     * @var string | Contiene el nombre del procedimiento almacenado con la funcionalidad de eliminación de filas. 
     */
    protected $deleteProcedure = "";

// ADD VARIABLES
    /**
     *
     * @var array | Contiene un arreglo de filas como resultado de una query multiple.
     */
    public $rows;
    
    /**
     *
     * @var array | Contiene las variables protegidas del modelo para evitar ser nuleadas. 
     */
    protected $variablesProtegidas = [  "table", "primaryKey", "createProcedure",
                                        "readProcedure", "readAllProcedure", "readAllDetProcedure",
                                        "updateProcedure", "deleteProcedure",
                                        "rows", "variablesProtegidas"];
    
    // Todos los campos de la tabla;
    public $cod_producto = "''";
    public $cod_promocion = "''";
    public $cod_combo = "''";
    public $cod_orden = "''";
    public $cod_detalle_orden = "''";
    public $cantidad_adquirida = "''";
    public $hora_ord = "''";
}
