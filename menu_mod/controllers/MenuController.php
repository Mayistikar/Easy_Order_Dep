<?php

/*
 * PROYECTO EASY ORDER
 * 
 * Módulo:
 * Documento: "MenuController.php"  Version:  1.0.
 * Descripción: Permite traer todos los productos de la base de datos .
 * Autor: andersonrodriguezce@gmail.com.
 * Fecha creación: 13/10/2017 | 03:02:20 AM.
 */

/**
 * Description of MenuController
 *
 * @author andersonrodriguezce@gmail.com
 */
class MenuController extends Controller{
    protected $selfController;
    protected $producto;
    
    function __construct() {}
    
    public function actionEntradas($mesa = 999){
        
        $this->selfController = new MenuController();
        //$this->producto = new Producto();
        
        /**
         * @var array | Contiene los ids de los productos existentes, pasando el procedimiento
         * a ejecutar y el número de columna.
         */
        $idProds = Producto::executeProcedMult(P_ENTRADAS, 0); 
        
        /**
         * @var array | Contiene los nombres de los productos existentes, pasando el procedimiento
         * a ejecutar y el número de columna.
         */
        $nomProds = Producto::executeProcedMult(P_ENTRADAS, 1);        
        
        /**
         * @var array | Contiene el valor 0, variable utilizada para realizar el conteo
         * de los elementos del menú.
         */
        $data = 0;
        
        /**
         * @var String | Contiene el valor active, variable utilizada para definir como activo
         * el primer elemento del menú.
         */
        $active = "active";
        
        /**
         * @var array | Contiene los precios de los productos existentes, pasando el procedimiento
         * a ejecutar y el número de columna.
         */
        $precios = Producto::executeProcedMult(P_ENTRADAS, 2);
        
        /**
         * @var array | Contiene la descripción de los productos existentes, pasando el procedimiento
         * a ejecutar y el número de columna.
         */
        $descProd = Producto::executeProcedMult(P_ENTRADAS, 13);
        
        //Renderizando el HEADER
        Render::render(MEN_PATH,"headerViewMen", ["superController" => $this->selfController]);
        
        $viewDefault = (!empty($idProds->cod_prod))? "entradasViewMen":"nonprodViewMen";      
                   
        //Renderizando el BODY
        Render::render(MEN_PATH,$viewDefault, 
                ["mesa"=>$mesa,
                 "idProds" => $idProds->rows,
                 "nomProds" => $nomProds->rows,
                 "data" => $data,
                 "active" => $active,
                 "precios" => $precios->rows,
                 "desc" => $descProd->rows]);
        
        //Renderizando el FOOTER
        Render::render(MEN_PATH,"footerViewMen");
    }
    
    public function actionPlatofuerte($mesa = 999){
        
        $this->selfController = new MenuController();
        //$this->producto = new Producto();
        
        /**
         * @var array | Contiene los ids de los productos existentes, pasando el procedimiento
         * a ejecutar y el número de columna.
         */
        $idProds = Producto::executeProcedMult(P_PLATO_FUERTE, 0); 
        
        /**
         * @var array | Contiene los nombres de los productos existentes, pasando el procedimiento
         * a ejecutar y el número de columna.
         */
        $nomProds = Producto::executeProcedMult(P_PLATO_FUERTE, 1);        
        
        /**
         * @var array | Contiene el valor 0, variable utilizada para realizar el conteo
         * de los elementos del menú.
         */
        $data = 0;
        
        /**
         * @var String | Contiene el valor active, variable utilizada para definir como activo
         * el primer elemento del menú.
         */
        $active = "active";
        
        /**
         * @var array | Contiene los precios de los productos existentes, pasando el procedimiento
         * a ejecutar y el número de columna.
         */
        $precios = Producto::executeProcedMult(P_PLATO_FUERTE, 2);
        
        /**
         * @var array | Contiene la descripción de los productos existentes, pasando el procedimiento
         * a ejecutar y el número de columna.
         */
        $descProd = Producto::executeProcedMult(P_PLATO_FUERTE, 13);
        
        //Renderizando el HEADER
        Render::render(MEN_PATH,"headerViewMen", ["superController" => $this->selfController]);        
                
        $viewDefault = (!empty($idProds->cod_prod))? "platofuerteViewMen":"nonprodViewMen";
                   
        //Renderizando el BODY
        Render::render(MEN_PATH,$viewDefault,
                ["mesa"=>$mesa,
                 "idProds" => $idProds->rows,
                 "nomProds" => $nomProds->rows,
                 "data" => $data,
                 "active" => $active,
                 "precios" => $precios->rows,
                 "desc" => $descProd->rows]);
        
        //Renderizando el FOOTER
        Render::render(MEN_PATH,"footerViewMen");
    }
    
    public function actionComidarapida($mesa = 999){
        
        $this->selfController = new MenuController();
        //$this->producto = new Producto();
        
        /**
         * @var array | Contiene los ids de los productos existentes, pasando el procedimiento
         * a ejecutar y el número de columna.
         */
        $idProds = Producto::executeProcedMult(P_COMIDA_RAPIDA, 0); 
        
        /**
         * @var array | Contiene los nombres de los productos existentes, pasando el procedimiento
         * a ejecutar y el número de columna.
         */
        $nomProds = Producto::executeProcedMult(P_COMIDA_RAPIDA, 1);        
        
        /**
         * @var array | Contiene el valor 0, variable utilizada para realizar el conteo
         * de los elementos del menú.
         */
        $data = 0;
        
        /**
         * @var String | Contiene el valor active, variable utilizada para definir como activo
         * el primer elemento del menú.
         */
        $active = "active";
        
        /**
         * @var array | Contiene los precios de los productos existentes, pasando el procedimiento
         * a ejecutar y el número de columna.
         */
        $precios = Producto::executeProcedMult(P_COMIDA_RAPIDA, 2);
        
        /**
         * @var array | Contiene la descripción de los productos existentes, pasando el procedimiento
         * a ejecutar y el número de columna.
         */
        $descProd = Producto::executeProcedMult(P_COMIDA_RAPIDA, 13);
        
        //Renderizando el HEADER
        Render::render(MEN_PATH,"headerViewMen", ["superController" => $this->selfController]);        
                        
        $viewDefault = (!empty($idProds->cod_prod))? "comidarapidaViewMen":"nonprodViewMen";
                   
        //Renderizando el BODY
        Render::render(MEN_PATH,$viewDefault,
                ["mesa"=>$mesa,
                 "idProds" => $idProds->rows,
                 "nomProds" => $nomProds->rows,
                 "data" => $data,
                 "active" => $active,
                 "precios" => $precios->rows,
                 "desc" => $descProd->rows]);
        
        //Renderizando el FOOTER
        Render::render(MEN_PATH,"footerViewMen");
    }
    
    public function actionBebidas($mesa = 999){
        
        $this->selfController = new MenuController();
        //$this->producto = new Producto();
        
        /**
         * @var array | Contiene los ids de los productos existentes, pasando el procedimiento
         * a ejecutar y el número de columna.
         */
        $idProds = Producto::executeProcedMult(P_BEBIDAS, 0); 
        
        /**
         * @var array | Contiene los nombres de los productos existentes, pasando el procedimiento
         * a ejecutar y el número de columna.
         */
        $nomProds = Producto::executeProcedMult(P_BEBIDAS, 1);        
        
        /**
         * @var array | Contiene el valor 0, variable utilizada para realizar el conteo
         * de los elementos del menú.
         */
        $data = 0;
        
        /**
         * @var String | Contiene el valor active, variable utilizada para definir como activo
         * el primer elemento del menú.
         */
        $active = "active";
        
        /**
         * @var array | Contiene los precios de los productos existentes, pasando el procedimiento
         * a ejecutar y el número de columna.
         */
        $precios = Producto::executeProcedMult(P_BEBIDAS, 2);
        
        /**
         * @var array | Contiene la descripción de los productos existentes, pasando el procedimiento
         * a ejecutar y el número de columna.
         */
        $descProd = Producto::executeProcedMult(P_BEBIDAS, 13);
        
        //Renderizando el HEADER
        Render::render(MEN_PATH,"headerViewMen", ["superController" => $this->selfController]);        
                        
        $viewDefault = (!empty($idProds->cod_prod))? "bebidasViewMen":"nonprodViewMen";
                   
        //Renderizando el BODY
        Render::render(MEN_PATH,$viewDefault,
                ["mesa"=>$mesa,
                 "idProds" => $idProds->rows,
                 "nomProds" => $nomProds->rows,
                 "data" => $data,
                 "active" => $active,
                 "precios" => $precios->rows,
                 "desc" => $descProd->rows]);
        
        //Renderizando el FOOTER
        Render::render(MEN_PATH,"footerViewMen");
    }
}