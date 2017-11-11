<?php

/*
 * PROYECTO EASY ORDER
 * 
 * Módulo:
 * Documento: "TipoProdModelAdm.php"  Version:  1.0.
 * Descripción:
 * Autor: andersonrodriguezce@gmail.com.
 * Fecha creación: 4/10/2017 | 03:13:11 AM.
 */

/**
 * Description of TipoProdModelAdm
 *
 * @author andersonrodriguezce@gmail.com
 */
class TipoProdModelAdm extends model{
    
    /**
     *
     * @var string | Contiene el nombre de la tabla. 
     */
    protected $table = "tipo_productos";
    /**
     *
     * @var string | Contiene el nombre de la llave primaria de la tabla. 
     */
    protected $primaryKey = "cod_tipo_prod";


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
    protected $readProcedure = "READ_TIPO_PROD";
    
    /**
     *
     * @var string | Contiene el nombre del procedimiento almacenado con la funcionalidad de lectura de multiples resultados. 
     */
    protected $readAllProcedure = "READ_TIPOS_PRODS";
    
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
    public $cod_tipo_prod;
    public $nom_tipo_prod;
    public $super_tipo_prod;
}
