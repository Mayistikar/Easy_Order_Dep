<?php
/*
 * PROYECTO EASY ORDER
 * 
 * Módulo:
 * Documento: "OrdenesController.php"  Version:  1.0.
 * Descripción:
 * Autor: andersonrodriguezce@gmail.com.
 * Fecha creación: 1/11/2017 | 12:06:14 AM.
 */

/**
 * Description of OrdenesController
 *
 * @author andersonrodriguezce@gmail.com
 */
class OrdenesController extends Controller{
    protected $selfController;
    protected $orden;
    protected $ordenes;
            
    function __construct() {}
    
    public function actionListarordenes(){
        
        $this->selfController = new OrdenesController();
        $this->orden = new Orden();
        $this->ordenes = $this->orden->getAllView();
        
        //Renderizando el HEADER
        Render::render(
                CHE_PATH,
                "headerViewChe",
                ["user" => "Chef",
                 "superController" => $this->selfController]);
        
        //Renderizando el MAIN-BODY Y SU TABLA DE ORDENES
        Render::render(CHE_PATH,"ordenesViewChe",
                ["ordenes" => $this->ordenes->rows, 
                 "cantidad" => 0]);
        
        //Renderizando el MODAL DE EDICIÓN DE USUARIO EN MODO HIDDEN
/*        Render::render(CHE_PATH, "editarUserViewAdm",
                ["documentos" => $docs->rows, 
                 "horarios" => $horarios->rows,
                 "generos" => $generos->rows, 
                 "cargos" => $cargos->rows]);    */
        
        //Renderizando el FOOTER
        Render::render(CHE_PATH,"footerViewChe");
    }
}