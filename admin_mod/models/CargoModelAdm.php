<?php

/*
 * PROYECTO EASY ORDER
 * 
 * Módulo:
 * Documento: "CargoModelAdm.php"  Version:  1.0.
 * Descripción:
 * Autor: andersonrodriguezce@gmail.com.
 * Fecha creación: 4/10/2017 | 08:15:45 PM.
 */

/**
 * Description of CargoModelAdm
 *
 * @author andersonrodriguezce@gmail.com
 */
class CargoModelAdm extends Model{
    
    /**
     *
     * @var string | Contiene el nombre de la tabla. 
     */
    protected $table = "cargo";
    /**
     *
     * @var string | Contiene el nombre de la llave primaria de la tabla. 
     */
    protected $primaryKey = "cod_cargo";

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
    protected $readProcedure = "READ_CARGO";
    
    /**
     *
     * @var string | Contiene el nombre del procedimiento almacenado con la funcionalidad de lectura de multiples resultado. 
     */
    protected $readAllProcedure = "READ_CARGOS";
    
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
                                        "rows", "variablesProtegidas" ];
    
    // Todos los campos de la tabla;
    public $cod_cargo; 
    public $cargo;
}