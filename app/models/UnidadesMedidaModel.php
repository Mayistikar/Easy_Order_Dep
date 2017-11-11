<?php

/*
 * PROYECTO EASY ORDER
 * 
 * Módulo:
 * Documento: "UnidadesMedidaModel.php"  Version:  1.0.
 * Descripción:
 * Autor: andersonrodriguezce@gmail.com.
 * Fecha creación: 4/10/2017 | 05:43:04 PM.
 */

/**
 * Description of UnidadesMedidaModel
 *
 * @author andersonrodriguezce@gmail.com
 */
class UnidadesMedidaModel extends model{    
    
    
    /**
     *
     * @var string | Contiene el nombre de la tabla. 
     */
    protected $table = "unidades_medida";        
    
    /**
     *
     * @var string | Contiene el nombre de la llave primaria de la tabla. 
     */
    protected $primaryKey = "cod_unid_med";


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
    protected $readProcedure = "READ_UNIDAD_MEDIDA";
    
    /**
     *
     * @var string | Contiene el nombre del procedimiento almacenado con la funcionalidad de lectura de multiples resultados. 
     */
    protected $readAllProcedure = "READ_UNIDAD_MEDIDAS";
    
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
    public $cod_unid_med;
    public $nom_unid_med;
    public $sistema_unidades;
    public $estado_unid;
}
