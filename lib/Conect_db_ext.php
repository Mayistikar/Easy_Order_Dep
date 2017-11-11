<?php
/*Esta clase sirve para conectarse a la base de datos, al constuirla, 
 * es necesario pasarle los datos de IP, USUARIO, CONTRASEÑA y NOMBREBD para 
 * permitir que la base de datos realice la conexión y devuelve un 
 * objeto con la conexión realizada*/
class Conect_db_ext{    
    private $ip; //Direccion de la BD
    private $user; //Usuario de acceso a la BD
    private $pass; //Contraseña de la BD
    private $database; //Nombre de la BD
    private $conexion; //Conexion a la bd    

        
    /*Sobrecarga de constructores para crear varios constructores con distinto numero de parametros*/
    function __CONSTRUCT()
	{
		//obtengo un array con los parámetros enviados a la función
		$params = func_get_args();
        
		//saco el número de parámetros que estoy recibiendo
		$num_params = func_num_args();
        
		//cada constructor de un número dado de parámtros tendrá un nombre de función
		//atendiendo al siguiente modelo __construct1() __construct2()...
		$funcion_constructor ='__construct'.$num_params;
        
		//compruebo si hay un constructor con ese número de parámetros
		if (method_exists($this,$funcion_constructor)) {
			//si existía esa función, la invoco, reenviando los parámetros que recibí en el constructor original
			call_user_func_array(array($this,$funcion_constructor),$params);
		}
	}
    
    public function __construct0(){
        $this->ip = "127.0.0.1";
        $this->user = "root";
        $this->pass = "";
        $this->database = "easy_order";
        //$this->conectar(); //Se conecta  a la base de datos una vez se crea el objeto
    }
    
    public function __construct4($ip, $user, $pass, $database){
        $this->ip = $ip;
        $this->user = $user;
        $this->pass = $pass;
        $this->database = $database;
        //$this->conectar(); //Se conecta  a la base de datos una vez se crea el objeto        
    }

// <editor-fold defaultstate="collapsed" desc="GETTERS Y SETTERS">  
    /*Permite obtener la ip, que tiene el objeto*/
     public function getIp(){
        return $this->ip;
    }
    
    /*Permite obtener el usuario, que tiene el objeto*/
    public function getUser(){
        return $this->user;
    }
    
    /*Permite obtener la contraseña, que tiene el objeto*/
    public function getPass(){
        return $this->pass;
    }
    
    /*Permite obtener la base de datos, que tiene el objeto*/
    public function getDataBase(){
        return $this->database;
    }        
    
    /*Permite definir la ip, que tiene el objeto*/
    public function setIp($Ip){
        $this->ip = $Ip;
    }

    /*Permite definir el usuario, que tiene el objeto*/
    public function setUser($User){
        $this->user = $User;
    }
    
    /*Permite definir la contraseña, que tiene el objeto*/
    public function setPass($Pass){
        $this->pass = $Pass;
    }
    
    /*Permite definir la base de datos, que tiene el objeto*/
    public function setDatabase($Database){
        $this->database = $Database;
    }        
// </editor-fold>    
        
    /**
     * FUNCION CONECTAR()
     * 
     * Esta funcion me permite realizar una conexion a base de datos, usando los
     * parametros (ip, user, pass, database) definidos al crear el objeto.
     * 
     * @since 1.0
     * @package extensiones
     * @param null no_necesita no requiere parametros
     * @return boolean Verdadero en caso de conexión completa.
     * 
     * Ejemplo:
     * <pre><code>      
     *      <?php
     *          $objeto = new Mod_Conect(); //Se crea el objeto Mod_Conect().
     *          $objeto->conectar(); //Y se llama la funcion.
     *      ?>              
     * <code>
     * @example /extensiones/Mod_Conect.php Un ejemplo de la funcion     
     * @author Anderson Rodriguez <andersonrodriguezce@gmail.com>    
     */
    private function conectar(){      
        $accesos = Acceso_ext::get_access();
        $this->conexion = new mysqli(                
                $accesos["ip"], 
                $accesos["user"], 
                $accesos["pass"], 
                $accesos["bd"]); //Conexion a la BD
            if ($this->conexion->connect_errno) {
                echo "Fallo al conectar a MySQL: (" 
                    . $this->conexion->connect_errno 
                    . ") " 
                    . $this->conexion->connect_error;
                    return FALSE;
            }            
            $this->conexion->set_charset("utf8");             
            return TRUE;                    
    }
    
    /**
     * FUNCION DESCONECTAR()
     * 
     * Esta funcion me permite desconectarme de laa base de datos, no requiere
     * parametros y se ejecuta con un llamado simple.
     * 
     * @since 1.0
     * @package extensiones
     * @param null no_necesita no requiere parametros
     * @return null No tiene retorno.
     * 
     * Ejemplo:
     * <pre><code>      
     *      <?php
     *          $objeto = new Mod_Conect(); //Se crea el objeto Mod_Conect().
     *          $objeto->desconectar(); //Y se llama la funcion.
     *      ?>              
     * <code>
     * @example /mod_menu/models/Mod_Conect.php Un ejemplo de la funcion     
     * @author Anderson Rodriguez <andersonrodriguezce@gmail.com>    
     */
    public function  desconectar(){
        $this->conexion->close();        
    }
        
    /**
     * FUNCION HACERCONSULTA()
     * 
     * Esta funcion ejecuta una query sobre la base de datos mediante la conexion 
     * generada con la ayuda del objeto Mod_Conect y la funcion conectar();
     *      
     * @param string $Sql El parametro debe ser la QUERY de tipo String, Ejm:
     * "SELECT * FROM producto;"
     * 
     * @return Objeto Devuelve el objeto que resulta de hacer una QUERY; 
     * el objeto retornado es del tipo result_set, 
     * mas info: http://php.net/manual/es/class.mysqli-result.php
     * 
     * @link http://php.net/manual/es/class.mysqli-result.php  documentación PHP   
     * 
     * Ejemplo:
     * <pre><code>      
     *      <?php
     *          $objeto = new Mod_Conect(); //Se crea el objeto Mod_Conect().
     *          $sql = "SELECT * FROM producto;" //Se define la QUERY
     *          $objeto->hacerConsulta($sql); //Y se llama la funcion.
     *      ?>              
     * <code>
     * @example /mod_menu/models/Mod_Conect.php Un ejemplo de la funcion     
     * 
     * @author Anderson Rodriguez <andersonrodriguezce@gmail.com>    
     */
    public function ejecutarConsulta($Sql){ 
        $this->conectar();
        $resultado = $this->conexion->query($Sql);                              
        if($this->conexion->errno){
            die($this->conexion->error);
        }else{            
            $this->desconectar();
            return $resultado;
        }        
    }             
}
