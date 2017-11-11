<?php    
/*
 * PROYECTO EASY ORDER
 * 
 * Módulo:
 * Documento: "App.php"  Version:  1.0.
 * 
 * Descripción: Permite encapsular el inicio de la aplicación.
 *
 * Autor: andersonrodriguezce@gmail.com.
 * Fecha creación: 30/09/2017 | 12:59:08 AM.
 */

/**
 * @package lib\API
 */


/**
 * Descripción: Permite renderizar la URL y redireccionar los controladores a 
 * ejectuar.
 *
 * @package lib\API  
 * @category Libreria
 * @abstract
 * @author andersonrodriguezce@gmail.com
 */
class App{
    
    /**
     * 
     * @var string Tipo protected que almacena el módulo por defecto. 
     */
    protected $modulo = "app";

    /**
     *
     * @var string Tipo protected y almacena el controlador por defecto 
     */
    protected  $controller = "HomeController"; 
    
    /**
     *
     * @var string Tipo protected que almacena el metodo por defecto 
     */
    protected  $method = "actionIndex";

    /**
     *
     * @var array Tipo protected que almacena los parametros obtenidos por URL 
     */
    protected  $params = [];

    public function __construct() {
        
        $url = $this->parseUrl(); //Para obtener la URL  
//##=====>         print_r($url);
                
    //######    MODULO      ######
        //Si el módulo existe lo asignamos.
        $moduloName = $url[0];       
//##=====>        print_r($url);
        if(file_exists($moduloName)){            
            $this->modulo = $moduloName;
            unset($url[0]); //Eliminamos el valor del controlador de la URL actual
        }
    
    //######    CONTROLADOR      ######
        //Si esta definido un controlador en la url se guarda el nombre del controlador
        if(isset($url[1])){
            /**         
             * @var string Variable que almacena el nombre del controlador con el 
             * formato por convencion: NombrecontroladorController
             */
            $controllerName = ucfirst(strtolower($url[1]))."Controller";    
            
            //Se verifica si existe el controlador definido en la url.
            if(file_exists($this->modulo."/controllers/".$controllerName.".php")){
                $this->controller = $controllerName;
                unset($url[1]); //Eliminamos el valor del controlador de la URL actual
                
                //Se trae el controlador existente para ser instanciado.
                require $this->modulo."/controllers/".$this->controller.".php"; 

                //Se instancia el controlador existente.
                $this->controller = new $this->controller;
            }else{
                //Se trae el controlador existente para ser instanciado.
                require_once APP_PATH."/controllers/".$this->controller.".php"; 

                //Se instancia el controlador existente.
                $this->controller = new $this->controller;
            }
        }                
        
    
    //######    METODO      ######
        //Si esta definido un método en la url se guarda el nombre del método
        if(isset($url[2])){
            /**         
             * @var string Variable que almacena el nombre del controlador con el 
             * formato por convencion: NombrecontroladorController
             */
            $methodName = "action".ucfirst(strtolower($url[2]));
            
            //Se verifica si existe el método en el objeto dado (en el controlador)
            if(method_exists($this->controller, $methodName)){
                $this->method = $methodName;
                unset($url[2]); //Eliminamos el valor del método de la URL actual
            }           
        }
    
    //######    PARAMETROS      ######
        //Si la URL todavia existe, sasume que cuenta con parametros, por tanto
        //Se extraen los parametros restantes como un arreglo.
        $this->params = $url ? array_values($url) : $this->params; 
//##=====> print_r($this->params);
        //######    EJECUCIÓN      ######
        //Finalmente se llama el método del controlador pasandole los parametros si existen        
        call_user_func_array([$this->controller, $this->method], $this->params);
    }
    
    /**
     * Transforma la url para que tenga un formato: 
     *      modulo/controlador/accion/param1/param2/paramEtc...
     * 
     * @return Array Retorna un arreglo de a forma:
     *      Array ( [0] => modulo [1] => controlador 
     *              [2] => accion [3] => param1 
     *              [4] => param2 [5] => paramEtc...
     */
    public function parseUrl(){
    if (isset($_GET["url"])) {
            return explode("/", filter_var(rtrim($_GET["url"], "/"), FILTER_SANITIZE_URL));                        
        }
    }    
}