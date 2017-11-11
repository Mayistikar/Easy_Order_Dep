<?php
/*
 * PROYECTO EASY ORDER
 * 
 * Módulo: General/lib #LIBRERIA
 * Documento: "Render.php"  Version:  1.0.1.
 * Descripción: Permite renderizar cualquier vista del sistema.
 * Autor: andersonrodriguezce@gmail.com.
 * Fecha creación: 30/09/2017 | 02:18:50 AM.
 */

/**
 * Render, permite renderizar cualquier vista una vez es llamada.
 * 
 * 
 * @package \lib
 * @category Libreria
 * @abstract
 * @author andersonrodriguezce@gmail.com
 */
class Render{

   /**
    * Descripción: Sin ejecución externa por ser parte de una clase abstracta
    * 
    * @return null no tiene retorno
    * @version 1.0.1.
    * @author andersonrodriguezce@gmail.com
    */    
    private function __construct() {}
    
    /**
     * Dados dos parametros obligatorios y un opcional renderiza la vista deseada, no tiene retorno.
     * 
     * @param String $modulo el módulo desde donde se llamará la vista.
     * @param String $view la vista a renderizar.
     * @param Array $vars cada una de las variables necesarias para la vista.
     * @return null no tiene retorno
     * @version 1.0.1.
     * @author andersonrodriguezce@gmail.com
     */
    public static function render($modulo, $view, $vars = []){
        
        foreach ($vars as $key => $value) {
            /**
             * @var String Se instancia variables con cada valor traido al renderizar
             * y se le asigna su valor respectivo.
             */
            $$key = $value;            
        }
        require $modulo."views/".$view.".php";
    }    
}
