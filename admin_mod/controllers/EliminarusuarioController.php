<?php

/*
 * PROYECTO EASY ORDER
 * 
 * Módulo:
 * Documento: "EliminarusuarioController.php"  Version:  1.0.
 * Descripción:
 * Autor: andersonrodriguezce@gmail.com.
 * Fecha creación: 19/10/2017 | 06:44:03 AM.
 */

/**
 * Description of EliminarusuarioController
 *
 * @author andersonrodriguezce@gmail.com
 */
class EliminarusuarioController extends Controller{
    public function actionValidarusuario(){
        
        $this->usuario = new Usuario();                
        
        //Validación del documento
        $this->usuario->documento_usu = Validador::soloNumeros($_POST["doc"]);
        if(empty( $this->usuario->documento_usu )){
            echo "MAL docu";
            $this->setController("Homecontroller", "index");// Pendiente por renderizar una página de error
        }

    }
    
    public function actionEliminaruser(){ 
                
        $this->actionValidarusuario();
        $this->usuario->eliminar($this->usuario);         
        //$this->actionFormusuario(88); //ID 88 muestra la modal de usuario guardado con exito        
    }
}
