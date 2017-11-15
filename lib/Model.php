<?php

/*
 * PROYECTO EASY ORDER
 * 
 * Módulo: /lib
 * Documento: "Model.php"  Version:  1.0.
 * Descripción: Clase base de todos los modelos a crear.
 * Autor: andersonrodriguezce@gmail.com.
 * Fecha creación: 4/10/2017 | 01:31:29 AM.
 */

/**
 * Description of Model
 *
 * @author andersonrodriguezce@gmail.com
 */
class Model {        

    /**
     *
     * @var string | Contiene el nombre de la tabla de la base de datos usada en el modelo.
     */
    protected $table;
    
    /**
     *
     * @var string | Contiene el nombre de la llave primaria. 
     */
    protected $primaryKey = "id";    

    //CRUD VARIABLES.
    
    /**
     *
     * @var string | Contiene el nombre del procedimiento almacenado con la funcionalidad de creación. 
     */
    protected $createProcedure;
    
    /**
     *
     * @var string | Contiene el nombre del procedimiento almacenado con la funcionalidad de lectura de un resultado. 
     */
    protected $readProcedure;     
    
    /**
     *
     * @var string | Contiene el nombre del procedimiento almacenado con la funcionalidad de lectura de multiples resultado. 
     */
    protected $readAllProcedure;
    
    /**
     *
     * @var string | Contiene el nombre del procedimiento almacenado con la funcionalidad de lectura de multiples resultado. 
     */
    protected $readAllDetProcedure;    
    
    /**
     *
     * @var string | Contiene el nombre del procedimiento almacenado con la funcionalidad de actualización de columnas. 
     */
    protected $updateProcedure;
    
    /**
     *
     * @var string | Contiene el nombre del procedimiento almacenado con la funcionalidad de eliminación de filas. 
     */
    protected $deleteProcedure;
    
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
                                        "readProcedure", 
                                        "readAllProcedure", "readAllDetProcedure",
                                        "updateProcedure", "deleteProcedure",
                                        "rows", "variablesProtegidas"];

   
    /**
     * Descripción: Dada la llave primaria de una tabla me permite encontrar la fila
     * con los datos correspondientes a la llave primaria.
     * 
     * @param String $id | La llave primaria asociada a los datos buscados.     
     * @return Un objeto con las propiedades seteadas según la columna de la base de datos
     * representada. Dicho objeto es una encapsulación de los resultados de la consulta.
     * 
     * @version 1.0.1.
     * @author andersonrodriguezce@gmail.com
     */
    public static function find($id){
        //El objeto se instancia  a si mismo para retornar un objeto con sus propiedades base.
        $model = new static();
        $sql = "CALL ".$model->readProcedure."(:id);";              
        $params = ["id" => $id];
        $result = DB::query($sql, $params);        
        
        //Se controla el error en caso de que el resultado del query sea vacio.
        if(empty($result)){
            // Tomamos cada variable de la clase y la reseteamos a NULL
            $resultVacio = get_class_vars(get_class($model));
            foreach ($resultVacio as $key => $value) {                
                if(!in_array($key, $model->variablesProtegidas)){                    
                    $model->$key=null;
                }           
            }
            return $model;
        }else{
            //El result trae un arreglo de (filas)arreglos, por tanto
            //Por cada fila(arreglo) extraigo cada valor de columna para setear
            //las variables del modelo hijo.
            foreach ($result as $row) {
                foreach ($row as $key => $value) {                    
                    $model->$key = $value;
                }
            }
            return $model;
        }        
    }
    
    
    /**
     * Descripción: Dado el tiempo de insercción, me permite encontrar el registro
     * con los datos correspondientes.
     * 
     * @param String $time | Tiempo de inserccion asociado a los datos buscados.     
     * @return Un objeto con las propiedades seteadas según la columna de la base de datos
     * representada. Dicho objeto es una encapsulación de los resultados de la consulta.
     * 
     * @version 1.0.1.
     * @author andersonrodriguezce@gmail.com
     */
    public static function findByTime($time){
        //El objeto se instancia  a si mismo para retornar un objeto con sus propiedades base.
        $model = new static();
        $sql = "CALL ".$model->readProcedureTm."(".$time.");";              
        $result = DB::query($sql);
        //print_r($result);
        
        //Se controla el error en caso de que el resultado del query sea vacio.
        if(empty($result)){
            // Tomamos cada variable de la clase y la reseteamos a NULL
            $resultVacio = get_class_vars(get_class($model));
            foreach ($resultVacio as $key => $value) {                
                if(!in_array($key, $model->variablesProtegidas)){                    
                    $model->$key=null;
                }           
            }            
            return $model;
        }else{
            //El result trae un arreglo de (filas)arreglos, por tanto
            //Por cada fila(arreglo) extraigo cada valor de columna para setear
            //las variables del modelo hijo.
            foreach ($result as $row) {
                foreach ($row as $key => $value) {                    
                    $model->$key = $value;
                }
            }
            return $model;
        }        
    }
    
    public static function findAll(){
        $model = new static();
        $sql = "CALL ".$model->readAllProcedure."();";        
        $result = DB::query($sql);
        //print_r($result);
        //Se controla el error en caso de que el resultado del query sea vacio.
        if(empty($result)){            
            // Tomamos cada variable de la clase y la reseteamos a NULL
            $resultVacio = get_class_vars(get_class($model));
            foreach ($resultVacio as $key => $value) {
                //Se evita nulalizar las variables protegidas
                if(!in_array($key, $model->variablesProtegidas)){                    
                    $model->$key=null;
                }
            }            
            return $model;
        }else{
            $model->rows = $result;
            return $model;
        } 
    }
    
   /**
    * Descripción: Trae una matriz con todos los elementos de una tabla, usando por 
    * cada columna el nombre de la misma en base de datos como índice de acceso.
    * 
    * @param 
    * @return array[][] retorna una matriz con todos los elementos de la tabla.
    * @version 1.0.
    * @author andersonrodriguezce@gmail.com
    */
    public static function findAll2(){
        $model = new static();
        $sql = "CALL ".$model->readAllProcedure."();";        
        $result = DB::queryFetchOnly($sql);
        //print_r($result);
        //Se controla el error en caso de que el resultado del query sea vacio.
        if(empty($result)){            
            // Tomamos cada variable de la clase y la reseteamos a NULL
            $resultVacio = get_class_vars(get_class($model));
            foreach ($resultVacio as $key => $value) {
                //Se evita nulalizar las variables protegidas
                if(!in_array($key, $model->variablesProtegidas)){                    
                    $model->$key=null;
                }
            }            
            return $model;
        }else{
            $model->rows = $result;
            return $model;
        } 
    }

   /**
    * Descripción: Trae una matriz con todos los elementos de una VISTA, usando por 
    * cada columna el nombre de la misma en la vista de la base de datos como índice de acceso.
    * 
    * @param 
    * @return array[][] retorna una matriz con todos los elementos de la VISTA.
    * @version 1.0.
    * @author andersonrodriguezce@gmail.com
    */
    public static function getAllView(){
        $model = new static();
        $sql = "CALL ".$model->readAllDetProcedure."();";        
        $result = DB::queryFetchOnly($sql);
        //print_r($result);
        //Se controla el error en caso de que el resultado del query sea vacio.
        if(empty($result)){            
            // Tomamos cada variable de la clase y la reseteamos a NULL
            $resultVacio = get_class_vars(get_class($model));
            foreach ($resultVacio as $key => $value) {
                //Se evita nulalizar las variables protegidas
                if(!in_array($key, $model->variablesProtegidas)){                    
                    $model->$key=null;
                }
            }
            return $model;
        }else{
            $model->rows = $result;
            return $model;
        } 
    }
    
    public static function crear($model){
        //Se obtiene todas las propiedades del objeto
        $variables = get_object_vars($model);
        
        //Se filtra obteniendo solo los valores de las propiedades publicas del objeto
        $valPublicos = [];
        foreach ($variables as $key => $value) {
            if(!in_array($key, $model->variablesProtegidas)){ 
                $key." => ".$value."<br>";
                $valPublicos[] = $value;
            }
        }
        
        //Se crea las variables de consulta sql
        $varsConsulta = "";        
        for ($i = 0; $i < count($valPublicos)-1; $i++) {            
            $varsConsulta.=$valPublicos[$i].",";
        }
        $varsConsulta.=$valPublicos[count($valPublicos)-1];
                
        $sql = "CALL ".$model->createProcedure."(".$varsConsulta.");";
        //echo $sql;
        $result = DB::query($sql);
        echo (empty($result)==true)?1:0;        
        //echo $sql;
        //echo $varsConsulta."---";
        //print_r("CANTIDAD VARS: ".count($varPublicas));        

    }
    
    public static function actualizar($model){
        //Se obtiene todas las propiedades del objeto
        $variables = get_object_vars($model);
        
        //Se filtra obteniendo solo los valores de las propiedades publicas del objeto
        $valPublicos = [];
        foreach ($variables as $key => $value) {
            if(!in_array($key, $model->variablesProtegidas)){ 
                //echo $key." => ".$value."<br>";
                $valPublicos[] = $value;
            }
        }
        
        //Se crea las variables de consulta sql
        $varsConsulta = "";        
        for ($i = 0; $i < count($valPublicos)-1; $i++) {            
            $varsConsulta.=$valPublicos[$i].",";
        }
        $varsConsulta.=$valPublicos[count($valPublicos)-1];
                
        $sql = "CALL ".$model->updateProcedure."(".$varsConsulta.");";
        $result = DB::querySimple($sql);
        echo $result; //Retorna 1 si es correcto o 0 si hay error
        //echo $sql;
        //echo $varsConsulta."---";
        //print_r("CANTIDAD VARS: ".count($varPublicas));        

    }
    
    public static function eliminar($model){
        //Se obtiene todas las propiedades del objeto
        $variables = get_object_vars($model);        
        //Se filtra obteniendo solo los valores de las propiedades publicas del objeto
        $valPublicos = [];
        foreach ($variables as $key => $value) {
            if(!in_array($key, $model->variablesProtegidas) and isset($value)){ 
                //echo $key." => ".$value."<br>";
                $valPublicos[] = $value;
            }
        }
                
        $sql = "CALL ".$model->deleteProcedure."(".$valPublicos[0].");";
        $result = DB::querySimple($sql);
        echo $result; //Retorna 1 si es correcto o 0 si hay error
        //echo $sql;
        //echo $varsConsulta."---";
        //print_r("CANTIDAD VARS: ".count($varPublicas));        

    }
    
   /**
    * Descripción: Dados dos parametros trae un arreglo con todas las filas de datos de una columna.
    * 
    * @param String $procedure El procedimiento a ejecutar según la base de datos.
    * @param String $columna La columna a traer.
    * @return retorna un arreglo.
    * @version 1.0.
    * @author andersonrodriguezce@gmail.com
    */
    public static function executeProcedMult($procedure, $columna = 0){
        $model = new static();
        $sql = "CALL ".$procedure."();";        
        $result = DB::queryFetch($sql, $columna);        
        //Se controla el error en caso de que el resultado del query sea vacio.
        if(empty($result)){            
            //echo "vacio";
            // Tomamos cada variable de la clase y la reseteamos a NULL
            $resultVacio = get_class_vars(get_class($model));
            foreach ($resultVacio as $key => $value) {
                //Se evita nulalizar las variables protegidas
                if(!in_array($key, $model->variablesProtegidas)){                    
                    $model->$key=null;
                }
            }            
            return $model;
        }else{
            //print_r($result);
            $model->rows = $result;
            return $model;
        } 
    }
    
    /**
     * Descripción: Dado un procedimiento y sus parametros, esta función me permite 
     * ejecutar el procedemiento respectivo
     * 
     * @param Array $params | Los parametros para la ejecución del procedimiento.
     * @return True o false según se lleve acabo la ejecución con exitos o no respectivamente.
     * 
     * @version 1.0.1.
     * @author andersonrodriguezce@gmail.com
     */
    public static function execProcedure($procedure, $params){
        //El objeto se instancia  a si mismo para retornar un objeto con sus propiedades base.
        $model = new static();
        $sql = "CALL ".$procedure."(:estado, :orden);";              
        //echo $sql;
        //$params = ["estado" => $estado];
        $result = DB::query($sql, $params);
        //print_r($result);        
    }    
    
    
    /**
     * Descripción: Dado un procedimiento de logue y un parametro, esta función me permite 
     * ejecutar el procedemiento respectivo
     * 
     * @param Array $params | Los parametros para la ejecución del procedimiento.
     * @return True o false según se lleve acabo la ejecución con exitos o no respectivamente.
     * 
     * @version 1.0.1.
     * @author andersonrodriguezce@gmail.com
     */
    public static function logProcedure($procedure, $params){
        //El objeto se instancia  a si mismo para retornar un objeto con sus propiedades base.
        $model = new static();        
        $sql = "SELECT `cod_cargo` FROM `usuario` WHERE `user_usuario` LIKE '".
                $params['user']."' AND `pass_usuario` LIKE '".
                $params['pass']."' AND `activo_usuario` = 1;";              
        //echo $sql;
        //$params = ["estado" => $estado];
        $result = DB::query($sql);
        //print_r($result);
        if(!empty($result)){
            return $result[0]['cod_cargo'];
        }else{
            return 0;
        }
    }    
}
