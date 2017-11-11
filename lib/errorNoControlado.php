<?php

/*
 * PROYECTO EASY ORDER
 * 
 * Módulo:
 * Documento: "errorNoControlado.php"  Version:  1.0.
 * Descripción:
 * Autor: andersonrodriguezce@gmail.com.
 * Fecha creación: 21/10/2017 | 04:08:52 AM.
 */

/**
 * Description of errorNoControlado
 *
 * @author andersonrodriguezce@gmail.com
 */
class errorNoControlado {
    private function __construct() {}
    
    public static function msjError($msj="SIN ERROR!"){
        return $msj." 
            <script type=\"text/javascript\">
                alertify.error(\"<span><h4><i class='glyphicon glyphicon-thumbs-down'></i>OOPS! ESTO: ".$msj." PASO!</h4></span>\");
            </script>    
        ";
    }
}
