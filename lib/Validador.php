<?php

/*
 * PROYECTO EASY ORDER
 * 
 * Módulo:
 * Documento: "Validador.php"  Version:  1.0.
 * Descripción:
 * Autor: andersonrodriguezce@gmail.com.
 * Fecha creación: 5/10/2017 | 01:49:14 AM.
 */

/**
 * Description of Validador
 *
 * @author andersonrodriguezce@gmail.com
 */
class Validador {
    private function __construct() {}
    
    /**
     * Descripcion: Dada una cadena de texto y utilizando expresiones regulares, verifica
     * que dicha cadena se compone de solo letras.
     * 
     * @param string $cadena | El texto a validar
     * @return La misma cadena en caso de que el texto sea correcto o null en caso de
     * que el texto no contenga solo letras.
     */
    public static function soloLetras($cadena) {  
        $str = mb_convert_encoding($cadena, "UTF-8");
        $pattern = '/^[\S][A-Za-z\x{00C0}\x{017F}\s]*$/u';
        if(preg_match($pattern, $str, $coincide, PREG_OFFSET_CAPTURE)){
            return $coincide[0][0];
        }        
        return null;        
    }
    
    /**
     * Descripcion: Dada una cadena de texto y utilizando expresiones regulares, verifica
     * que dicha cadena se compone de solo números.
     * 
     * @param string $cadena | El texto a validar
     * @return La misma cadena en caso de que el texto sea correcto o null en caso de
     * que el texto sea incorrecto.
     */
    public static function soloNumeros($cadena) {          
        $pattern = '/^[\d]*$/';
        if(preg_match($pattern, $cadena, $coincide, PREG_OFFSET_CAPTURE)){
            return $coincide[0][0];
        }        
        return null;        
    }
    
    /**
     * Descripcion: Dada una cadena de texto y utilizando expresiones regulares, verifica
     * que dicha cadena compone una fecha valida al formato DD/MM/AAAA.
     * 
     * @param string $cadena | El texto con la fecha a validar
     * @return La misma cadena en caso de que la fecha cumpla con el formato o null en caso de
     * que la fecha no lo cumpla.
     */
    public static function fechas($cadena) {        
        $pattern = '#^(?:(?:(?:0?[1-9]|1\d|2[0-8])[-](?:0?[1-9]|1[0-2])|(?:29|30)[-](?:0?[13-9]|1[0-2])|31[-](?:0?[13578]|1[02]))[-](?:0{2,3}[1-9]|0{1,2}[1-9]\d|0?[1-9]\d{2}|[1-9]\d{3})|29[-]0?2[-](?:\d{1,2}(?:0[48]|[2468][048]|[13579][26])|(?:0?[48]|[13579][26]|[2468][048])00))$#';
        if(preg_match($pattern, $cadena, $coincide, PREG_OFFSET_CAPTURE)){            
            return $coincide[0][0];
        }                
        return null;        
    }
    
    /**
     * Descripcion: Dada una cadena de texto y utilizando expresiones regulares, verifica
     * que dicha cadena compone una hora valida al formato HH:MM.
     * 
     * @param string $cadena | El texto con la hora a validar
     * @return La misma cadena en caso de que la hora cumpla con el formato o null en caso de
     * que la hora no lo cumpla.
     */
    public static function horas($cadena) {          
        $pattern = '/^([0-9]|0[0-9]|1[0-9]|2[0-3]):[0-5][0-9]$/';
        if(preg_match($pattern, $cadena, $coincide, PREG_OFFSET_CAPTURE)){            
            return $coincide[0][0];            
        }
        return null;        
    }
    
    /**
     * Descripcion: Dada una cadena de texto y utilizando expresiones regulares, verifica
     * que dicha cadena compone una hora valida al formato HH:MM.
     * 
     * @param string $cadena | El texto con la hora a validar
     * @return La misma cadena en caso de que la hora cumpla con el formato o null en caso de
     * que la hora no lo cumpla.
     */
    public static function obligatorio($cadena) {          
        $pattern = '/^[\S]+/';
        if(preg_match($pattern, $cadena, $coincide, PREG_OFFSET_CAPTURE)){            
            return $coincide[0][0];            
        }
        return null;        
    }    
    
}
