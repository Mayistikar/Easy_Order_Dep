<?php

/*
 * PROYECTO EASY ORDER
 * 
 * Módulo:
 * Documento: "Usuario.php"  Version:  1.0.
 * Descripción:
 * Autor: andersonrodriguezce@gmail.com.
 * Fecha creación: 4/10/2017 | 02:44:33 AM.
 */

/**
 * Description of Usuario
 *
 * @author andersonrodriguezce@gmail.com
 */
class Usuario extends Model{
    
    /**
     *
     * @var string | Contiene el nombre de la tabla. 
     */
    protected $table = "usuario";
    /**
     *
     * @var string | Contiene el nombre de la llave primaria de la tabla. 
     */
    protected $primaryKey = "cod_usuario";

//CRUD VARIABLES.
    
    /**
     *
     * @var string | Contiene el nombre del procedimiento almacenado con la funcionalidad de creación. 
     */
    protected $createProcedure = "CREATE_USUARIO";
    
    /**
     *
     * @var string | Contiene el nombre del procedimiento almacenado con la funcionalidad de lectura de un resultado. 
     */
    protected $readProcedure = "READ_USUARIO";
    
    /**
     *
     * @var string | Contiene el nombre del procedimiento almacenado con la funcionalidad de lectura de multiples resultado. 
     */
    protected $readAllProcedure = "READ_USUARIOS";
    
    /**
     *
     * @var string | Contiene el nombre del procedimiento almacenado con la funcionalidad de lectura de multiples resultado. 
     */
    protected $readAllDetProcedure = "READ_USUARIOS_DETALLE";    
    
    /**
     *
     * @var string | Contiene el nombre del procedimiento almacenado con la funcionalidad de actualización de columnas. 
     */
    protected $updateProcedure = "UPDATE_USUARIO";
    
    /**
     *
     * @var string | Contiene el nombre del procedimiento almacenado con la funcionalidad de eliminación de filas. 
     */
    protected $deleteProcedure = "DELETE_USUARIO";

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
    public $documento_usu; 
    public $primer_nombre_usu;
    public $segundo_nombre_usu;
    public $primer_apell_usu;
    public $segundo_apell_usu;
    public $fecha_nacimiento_usu;
    public $celular_usu;
    public $direccion_usu;
    public $telefono_fijo_usu;
    public $salario_usu;
    public $hora_entrada_usu;
    public $hora_salida_usu;
    public $user_usu;
    public $pass_usu;
    public $activo_usu;
    public $cod_genero;
    public $cod_cargo;
    public $cod_documento;
}
