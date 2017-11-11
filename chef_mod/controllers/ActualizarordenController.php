<?php

/*
 * PROYECTO EASY ORDER
 * 
 * Módulo:
 * Documento: "ActualizarordenController.php"  Version:  1.0.
 * Descripción:
 * Autor: andersonrodriguezce@gmail.com.
 * Fecha creación: 19/10/2017 | 02:47:45 AM.
 */

/**
 * Description of ActualizarordenController
 *
 * @author andersonrodriguezce@gmail.com
 */
class ActualizarordenController extends Controller{    
    
    public function actionCambiarestado(){
        Orden::execProcedure(
                "CAMBIAR_ESTADO_ORD", 
                [ "estado"=>$_POST["estado"], 
                  "orden"=>$_POST["orden"]
                ]);
        echo 1;
    }    
}
