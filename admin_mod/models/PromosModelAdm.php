<?php

/*
 * PROYECTO EASY ORDER
 * 
 * Módulo:
 * Documento: "PromosModelAdm.php"  Version:  1.0.
 * Descripción:
 * Autor: andersonrodriguezce@gmail.com.
 * Fecha creación: 4/10/2017 | 03:13:11 AM.
 */

/**
 * Description of TipoDocumentoModelAdm
 *
 * @author andersonrodriguezce@gmail.com
 */
class PromosModelAdm extends Model{
    
    /**
     *
     * @var string | Contiene el nombre de la tabla. 
     */
    protected $table = "promocion";
    /**
     *
     * @var string | Contiene el nombre de la llave primaria de la tabla. 
     */
    protected $primaryKey = "cod_promocion";


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
    protected $readProcedure = "READ_PROMO";
    
    /**
     *
     * @var string | Contiene el nombre del procedimiento almacenado con la funcionalidad de lectura de multiples resultados. 
     */
    protected $readAllProcedure = "READ_PROMOS";
    
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
                                        "readProcedure", "readAllProcedure",
                                        "updateProcedure", "deleteProcedure",
                                        "rows", "variablesProtegidas"];
    
    // Todos los campos de la tabla;
    public $cod_promocion;
    public $nom_promo;
    public $imagen_promo;
    public $descuento_promo;
    public $iva_promo;
    public $fecha_inicio_promo;
    public $fecha_final_promo;
    public $hora_inicio_promo;
    public $hora_final_promo;
    public $descripcion_promo;
    public $activo_promo;
}
