<?php
/*
 * PROYECTO EASY ORDER
 * 
 * Módulo: General/lib #LIBRERIA
 * Documento: "DB.php"  Version:  1.0.
 * Descripción: Permite crear una conexión con base de datos y ejecutar una consulta.
 * Autor: andersonrodriguezce@gmail.com.
 * Fecha creación: 04/10/2017 | 02:18:50 AM.
 */
class DB{
    
    private function __construct() {}
    
    /**
     * Descripción: Dados dos parametros realiza la consulta preparada mediante el 
     * objeto PDO y retorna un arreglo con los resultados de la consulta.
     * 
     * @param string $sql | La query especificada para consulta.
     * @param array $params | Un arreglo con cada uno de los valores de la query.
     * @return array Retorna un  array asociativo con los datos de la consulta.
     * @version 1.0
     * @author andersonrodriguezce@gmail.com
     */
    public static function query($sql, $params = []){
        $statement = static::connection()->prepare($sql);   
        $statement->execute($params);          
        $result = $statement->fetchAll();        
        return $result;
    }
    
    /**
     * Descripción: Dados dos parametros realiza la consulta preparada mediante el 
     * objeto PDO y retorna true si se realizo la query o false en caso de error.
     * 
     * @param string $sql | La query especificada para consulta.
     * @param array $params | Un arreglo con cada uno de los valores de la query.
     * @return boolean Retorna true en caso de exito, false en caso de error.
     * @version 1.0
     * @author andersonrodriguezce@gmail.com
     */
    public static function querySimple($sql, $params = []){
        $statement = static::connection()->prepare($sql);
        $result = $statement->execute($params);
        return $result;
    }
    
    /**
     * Descripción: Dados 3 parametros realiza la consulta preparada mediante el 
     * objeto PDO y retorna un arreglo con todos los resultados de la columna de la consulta .
     * 
     * @param string $sql | La query especificada para consulta.
     * @param string $column | La columna a consultar.
     * @param array $params | Un arreglo con cada uno de los valores de la query.
     * @return array Retorna un  array asociativo con los datos de la consulta.
     * @version 1.0
     * @author andersonrodriguezce@gmail.com
     */
    public static function queryFetch($sql, $column=0, $params = []){        
        $statement = static::connection()->prepare($sql);   
        $statement->execute($params);          
        $result = $statement->fetchAll(PDO::FETCH_COLUMN, $column);        
        return $result;
    }
    
        /**
     * Descripción: Dados 3 parametros realiza la consulta preparada mediante el 
     * objeto PDO y retorna un arreglo con todos los resultados de la columna de la consulta .
     * 
     * @param string $sql | La query especificada para consulta.
     * @param string $column | La columna a consultar.
     * @param array $params | Un arreglo con cada uno de los valores de la query.
     * @return array Retorna un  array asociativo con los datos de la consulta.
     * @version 1.0
     * @author andersonrodriguezce@gmail.com
     */
    public static function queryFetchOnly($sql, $params = []){        
        $statement = static::connection()->prepare($sql);   
        $statement->execute($params);
        //print_r($statement);
        $results = array();
        while($row = $statement->fetch(PDO::FETCH_ASSOC)){
            $results[] = $row;            
        }
        return $results;
    }
    
    /**
     * Descripción: Permite crear una conexión a la base de datos.
     * @package /lib
     * @category Libreria
     * @abstract
     * @author andersonrodriguezce@gmail.com
     */
    private static function connection(){
        $accesos = AccesoExt::get_access();
        return new PDO(
                "mysql:host=".$accesos["ip"].
                ";dbname=".$accesos["bd"],
                $accesos["user"],
                $accesos["pass"]);        
    }           
    
}