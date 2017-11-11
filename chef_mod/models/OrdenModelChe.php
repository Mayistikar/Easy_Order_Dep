<?php

/*
 * PROYECTO EASY ORDER
 * 
 * Módulo:
 * Documento: "OrdenModelChe.php"  Version:  1.0.
 * Descripción:
 * Autor: andersonrodriguezce@gmail.com.
 * Fecha creación: 1/11/2017 | 12:08:41 AM.
 */

/**
 * Description of OrdenModelChe
 *
 * @author andersonrodriguezce@gmail.com
 */
class Orden extends Model{
    
    /**
     *
     * @var string | Contiene el nombre de la tabla. 
     */
    protected $table = "chef_ordenes"; //Para este caso se trata de una vista.
    /**
     *
     * @var string | Contiene el nombre de la llave primaria de la tabla. 
     */
    protected $primaryKey = "orden";

//CRUD VARIABLES.
    
    /**
     *
     * @var string | Contiene el nombre del procedimiento almacenado con la funcionalidad de creación. 
     */
    protected $createProcedure = "";
    
    /**
     *
     * @var string | Contiene el nombre del procedimiento almacenado con la funcionalidad de lectura de un resultado. 
     */
    protected $readProcedure = "READ_ORDEN";
    
    /**
     *
     * @var string | Contiene el nombre del procedimiento almacenado con la funcionalidad de lectura de multiples resultado. 
     */
    protected $readAllProcedure = "READ_ORDENES";
    
    /**
     *
     * @var string | Contiene el nombre del procedimiento almacenado con la funcionalidad de lectura de multiples resultado. 
     */
    protected $readAllDetProcedure = "READ_ORDENES_CHEF";    
    
    /**
     *
     * @var string | Contiene el nombre del procedimiento almacenado con la funcionalidad de actualización de columnas. 
     */
    protected $updateProcedure = "CAMBIAR_ESTADO_ORD";
    
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
    public $orden; 
    public $producto;
    public $cantidad;
    public $mesa;
    public $observaciones;
    public $solicitado;
    public $estimado;
    public $estado;
    
    public function updateOrden($estado, $orden){
        
    }
}
