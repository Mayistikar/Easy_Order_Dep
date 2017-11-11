<?php

/*
 * PROYECTO EASY ORDER
 * 
 * Módulo:
 * Documento: "PedidoModelMen.php"  Version:  1.0.
 * Descripción:
 * Autor: andersonrodriguezce@gmail.com.
 * Fecha creación: 24/10/2017 | 11:11:44 PM.
 */

/**
 * Description of PedidoModelMen
 *
 * @author andersonrodriguezce@gmail.com
 */
class PedidoModelMenu extends Model {
    /**
     *
     * @var string | Contiene el nombre de la tabla. 
     */
    protected $table = "orden";
    /**
     *
     * @var string | Contiene el nombre de la llave primaria de la tabla. 
     */
    protected $primaryKey = "cod_orden";

//CRUD VARIABLES.
    
    /**
     *
     * @var string | Contiene el nombre del procedimiento almacenado con la funcionalidad de creación. 
     */
    protected $createProcedure = "CREATE_ORDEN";
    
    /**
     *
     * @var string | Contiene el nombre del procedimiento almacenado con la funcionalidad de lectura de un resultado. 
     */
    protected $readProcedure = "READ_ORDEN";
    
    /**
     *
     * @var string | Contiene el nombre del procedimiento almacenado con la funcionalidad de lectura de un resultado basado en el tiempo de insert. 
     */
    protected $readProcedureTm = "READ_ORDEN_TIME";
    
    /**
     *
     * @var string | Contiene el nombre del procedimiento almacenado con la funcionalidad de lectura de multiples resultado. 
     */
    protected $readAllProcedure = "READ_ORDENES";
    
    /**
     *
     * @var string | Contiene el nombre del procedimiento almacenado con la funcionalidad de lectura de multiples resultado. 
     */
    protected $readAllDetProcedure = "";    
    
    /**
     *
     * @var string | Contiene el nombre del procedimiento almacenado con la funcionalidad de actualización de columnas. 
     */
    protected $updateProcedure = "UPDATE_ORDEN";
    
    /**
     *
     * @var string | Contiene el nombre del procedimiento almacenado con la funcionalidad de eliminación de filas. 
     */
    protected $deleteProcedure = "DELETE_ORDEN";

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
                                        "readProcedure", "readProcedureTm", 
                                        "readAllProcedure", "readAllDetProcedure",
                                        "updateProcedure", "deleteProcedure",
                                        "rows", "variablesProtegidas"];
    
    // Todos los campos de la tabla;
    public $cod_orden = "''";
    public $numero_mesa_ord = "";
    public $observaciones_ord = "''";
    public $calificacion_consum_ord = "''";
    public $etapa_ord = "''";
    public $hora_ord = "''";
    private $fecha_ord = "''";
}
