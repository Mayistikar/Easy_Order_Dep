<?php

/*
 * PROYECTO EASY ORDER
 * 
 * Módulo:
 * Documento: "ListarusuariosController.php"  Version:  1.0.
 * Descripción: Permite traer todos los usuarios de la base de datos con su respectiva opciones 
 * de edición y eliminación.
 * Autor: andersonrodriguezce@gmail.com.
 * Fecha creación: 13/10/2017 | 03:02:20 AM.
 */

/**
 * Description of ListarusuariosController
 *
 * @author andersonrodriguezce@gmail.com
 */
class ListarusuariosController extends Controller{
    protected $selfController;
    protected $usuario;
    
    function __construct() {}
    
    public function actionListar(){
        
        $this->selfController = new ListarusuariosController();
        $this->usuario = new Usuario();
        $usuarios = Usuario::getAllView();
        
        /**
         * @var array | Contiene los tipos de documento existentes, pasando el procedimiento
         * a ejecutar y el número de columna.
         */
        $docs = TipoDocumentoModelAdm::executeProcedMult(P_TIPO_DOCS, 1);
        
        /**
         * @var array | Contiene los tipos de documento existentes, pasando el procedimiento
         * a ejecutar y el número de columna.
         */
        $horarios = UnidadesMedidaModel::executeProcedMult(P_TIPO_HORA, 1);
        
        /**
         * @var array | Contiene los tipos de documento existentes, pasando el procedimiento
         * a ejecutar y el número de columna.
         */
        $generos = GeneroModelAdm::executeProcedMult(P_GENEROS, 1);
        
        /**
         * @var array | Contiene los tipos de documento existentes, pasando el procedimiento
         * a ejecutar y el número de columna.
         */
        $cargos = CargoModelAdm::executeProcedMult(P_CARGOS, 1);
        
        //Renderizando el HEADER
        Render::render(ADM_PATH,"headerViewAdm", ["user" => "Admin", "superController" => $this->selfController] );
        
        //Renderizando el ASIDE
        Render::render(ADM_PATH,"asideViewAdm",["superController" => $this->selfController]);
        
        //Renderizando el MAIN-BODY Y SU TABLA DE USUARIOS
        Render::render(ADM_PATH,"listarUsersAdm",
                ["users" => $usuarios->rows]);
        
        //Renderizando el MODAL DE EDICIÓN DE USUARIO EN MODO HIDDEN
        Render::render(ADM_PATH, "editarUserViewAdm",
                ["documentos" => $docs->rows, 
                 "horarios" => $horarios->rows,
                 "generos" => $generos->rows, 
                 "cargos" => $cargos->rows]);    
        
        //Renderizando el MODAL DE DETALLE DE USUARIO EN MODO HIDDEN
        Render::render(ADM_PATH, "detalleUserViewAdm");
        
        //Renderizando el FOOTER
        Render::render(ADM_PATH,"footerViewAdm");
    }
}