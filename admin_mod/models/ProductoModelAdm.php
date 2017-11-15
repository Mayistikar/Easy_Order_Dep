<?php

/*
 * PROYECTO EASY ORDER
 * 
 * Módulo:
 * Documento: "ProductoModelAdm.php"  Version:  1.0.
 * Descripción:
 * Autor: andersonrodriguezce@gmail.com.
 * Fecha creación: 4/10/2017 | 02:44:33 AM.
 */

/**
 * Description of Usuario
 *
 * @author andersonrodriguezce@gmail.com
 */
class Producto extends Model{
    
    /**
     *
     * @var string | Contiene el nombre de la tabla. 
     */
    protected $table = "producto";
    /**
     *
     * @var string | Contiene el nombre de la llave primaria de la tabla. 
     */
    protected $primaryKey = "cod_producto";

//CRUD VARIABLES.
    
    /**
     *
     * @var string | Contiene el nombre del procedimiento almacenado con la funcionalidad de creación. 
     */
    protected $createProcedure = "CREATE_PRODUCTO";
    
    /**
     *
     * @var string | Contiene el nombre del procedimiento almacenado con la funcionalidad de lectura de un resultado. 
     */
    protected $readProcedure = "READ_PRODUCTO";
    
    /**
     *
     * @var string | Contiene el nombre del procedimiento almacenado con la funcionalidad de lectura de multiples resultado. 
     */
    protected $readAllProcedure = "READ_PRODUCTOS";
    
    /**
     *
     * @var string | Contiene el nombre del procedimiento almacenado con la funcionalidad de lectura de multiples resultado. 
     */
    protected $readAllDetProcedure = "READ_PRODUCTOS_DETALLE";    
    
    /**
     *
     * @var string | Contiene el nombre del procedimiento almacenado con la funcionalidad de actualización de columnas. 
     */
    protected $updateProcedure = "UPDATE_PRODUCTO";
    
    /**
     *
     * @var string | Contiene el nombre del procedimiento almacenado con la funcionalidad de eliminación de filas. 
     */
    protected $deleteProcedure = "DELETE_PRODUCTO";

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
    public $cod_prod = "''";
    public $nombre_prod = "''";
    public $precio_prod = "''";
    public $imagen_prod = "''";
    public $marca_prod = "''";
    public $fecha_vence_prod = "''";
    public $iva_prod = "''";
    public $tiempo_preparar_prod = "''";
    public $estado_prod = "'EMPACADO'";
    public $ingredientes_prod = "''";
    public $cantidad_prod = "''";
    public $cod_unid_med = "''";
    public $cod_tipo_prod = "''";
    public $descripcion_prod = "''";
    public $cod_promocion = "''";
    public $cod_combo = "''";
    public $menu_prod = "''";
}
