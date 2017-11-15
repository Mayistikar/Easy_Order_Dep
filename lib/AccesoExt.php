<?php 
class AccesoExt{
        
    public static $accesos = ["ip"=>"", "user"=>"", "pass"=>"", "bd"=>""];       
    
    /**
     * FUNCION get_access()
     * 
     * Esta funcion estática permite leer el documento de accesos ..\security_assets\u.txt
     * para usarlos en la conexión a la base de datos.
     * 
     * La edición del archivo u.txt está sujeta a unos parametros definidos.
     * 
     * @since 1.0
     * @package lib -- librerias
     * @param null no_necesita no requiere parametros
     * @return array() Arreglo con los parametros de acceso a la bd (ip,user,pass,bd)
     * 
     * Ejemplo:
     * <pre><code>      
     *      <?php
     *          $objeto = new acceso(); //Se crea el objeto acceso().
     *          $objeto->acceso(); //Y se llama la funcion, que retorna un array.
     *          $objeto->acceso()["ip"]; //LLamando directamente valores del array
     *      ?>              
     * <code>
     * @example /extensiones/acceso.php Un ejemplo de la funcion     
     * @author Anderson Rodriguez <andersonrodriguezce@gmail.com>    
     */
    public static function get_access(){
        
         try
        {
          $fileName = '.\private\u.txt';

          if ( !file_exists($fileName) ) {
            throw new Exception('File not found.');
          }

          $fp = fopen($fileName, "r");
          if ( !$fp ) {
            throw new Exception('File open failed.');
          }  

          while(!feof($fp)){
            $data = fgets($fp);
            $data_local = explode(";", $data, -1);
            self::$accesos["ip"]=$data_local[0];
            self::$accesos["user"]=$data_local[1];
            self::$accesos["pass"]=$data_local[2];
            self::$accesos["bd"]=$data_local[3];            
          }
          fclose($fp);

          // send success JSON

        } catch ( Exception $e ) {
          // send error message if you can
            echo "no funciona";
        } 
        //
//        $u = fopen('.\private\u.txt', "r");
//    	while(!feof($u)){
//            $data = fgets($u);
//            $data_local = explode(";", $data, -1);
//            self::$accesos["ip"]=$data_local[0];
//            self::$accesos["user"]=$data_local[1];
//            self::$accesos["pass"]=$data_local[2];
//            self::$accesos["bd"]=$data_local[3];            
//	}
//        fclose($u);
        return self::$accesos;	        
    }	
}
?>