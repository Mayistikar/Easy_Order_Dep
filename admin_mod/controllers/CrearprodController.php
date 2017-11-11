<?php

/*
 * PROYECTO EASY ORDER
 * 
 * Módulo:
 * Documento: "CrearprodController.php"  Version:  1.0.
 * Descripción:
 * Autor: andersonrodriguezce@gmail.com.
 * Fecha creación: 19/10/2017 | 12:42:39 PM.
 */

/**
 * Description of CrearprodController
 *
 * @author andersonrodriguezce@gmail.com
 */
class CrearprodController extends Controller{
    protected $selfController;
    protected $producto;
    
    function __construct() {
        
    }
    public function actionFormprod($id=0){
        $this->selfController = new CrearprodController();
         
        /**
         * @var array | Contiene los tipos de unidades de medida existentes, pasando el procedimiento
         * a ejecutar y el número de columna.
         */
        $uns_medida = UnidadesMedidaModel::executeProcedMult(P_UNS_MEDS, 1);
        
        /**
         * @var array | Contiene los tipos de productos existentes, pasando el procedimiento
         * a ejecutar y el número de columna.
         */
        $tip_prod = TipoProdModelAdm::executeProcedMult(P_TIPOS_PROD, 1);
        
        /**
         * @var array | Contiene los tipos de promociones existentes, pasando el procedimiento
         * a ejecutar y el número de columna.
         */
        $promos = PromosModelAdm::executeProcedMult(P_PROMOS, 1);
        
        /**
         * @var array | Contiene los tipos de documento existentes, pasando el procedimiento
         * a ejecutar y el número de columna.
         */
        $combos = CombosModelAdm::executeProcedMult(P_COMBOS, 1);
        
        //Renderizando el HEADER
        Render::render(ADM_PATH,"headerViewAdm", ["user" => "Admin", "superController" => $this->selfController] );
        
        //Renderizando el ASIDE
        Render::render(ADM_PATH,"asideViewAdm",["superController" => $this->selfController]);

//  CODIGO PARA PROBAR VALIDACIONES        
//        $nombre1 = Validador::horas("12:53");
//        if(isset($nombre1)){
//            print_r($nombre1);
//            echo "CUMPLE";
//        }else{
//            echo "NO CUMPLE";
//            print_r($nombre1);
//        }
//        
//  CODIGO PARA PROBAR VALIDACIONES
        
        //Renderizando el MAIN-BODY
        Render::render(ADM_PATH,"crearProdViewAdm", 
                ["id"=> $id,
                 "uns_medida" => $uns_medida->rows, 
                 "tipo_prods" => $tip_prod->rows,
                 "promos" => $promos->rows, 
                 "combos" => $combos->rows,
                 "superController" => $this->selfController]);
                 
        //Renderizando el FOOTER
        Render::render(ADM_PATH,"footerViewAdm");
    }
    
    public function actionValidarprod(){
        $this->producto = new Producto();
        
        //Validación del codigo
        $this->producto->cod_prod = Validador::soloNumeros($_POST["codProd"]);        
        if(empty( $this->producto->cod_prod )){
            $this->producto->cod_prod = "null";
            //Solo se renderiza página de error en campos obligatorios
            Render::render(APP_PATH,"errorPage", ["msj"=>"cod_prod: ".$this->producto->cod_prod]); // Pendiente por renderizar una página de error
        }else{
            $this->producto->cod_prod = "'".$_POST["codProd"]."'";
        }
        
        //Validación del nombre de producto
        $this->producto->nombre_prod = Validador::soloLetras($_POST["nomProd"]);
        if(empty( $this->producto->nombre_prod )){
            $this->producto->nombre_prod= "null";
            //Solo se renderiza página de error en campos obligatorios
            Render::render(APP_PATH,"errorPage", ["msj"=>"nombre_prod: ".$this->producto->nombre_prod]); // Pendiente por renderizar una página de error
        }else{
            $this->producto->nombre_prod = "'".$_POST["nomProd"]."'";
        }
        
        //Validación del precio producto
        $this->producto->precio_prod = Validador::soloNumeros($_POST["precProd"]);
        if(empty( $this->producto->precio_prod)){
            $this->producto->precio_prod= "null";
            //Solo se renderiza página de error en campos obligatorios
            Render::render(APP_PATH,"errorPage", ["msj"=>"precio_prod: ".$this->producto->precio_prod]); // Pendiente por renderizar una página de error
        }else{
            $this->producto->precio_prod = "'".$_POST["precProd"]."'";
        }
        
        //Validación del IVA
        $this->producto->iva_prod = Validador::soloNumeros($_POST["ivaProd"]);
        if(empty( $this->producto->iva_prod )){
            $this->producto->iva_prod = "null";
            //Solo se renderiza página de error en campos obligatorios
            Render::render(APP_PATH,"errorPage", ["msj"=>"iva_prod: ".$this->producto->iva_prod]); // Pendiente por renderizar una página de error
        }else{
            $this->producto->iva_prod = "'".$_POST["ivaProd"]."'";
        }
        
        //Validación de la MARCA
        $this->producto->marca_prod = Validador::soloLetras($_POST["marcProd"]);
        if(empty( $this->producto->marca_prod )){
            $this->producto->marca_prod= "null";
            //Solo se renderiza página de error en campos obligatorios
            Render::render(APP_PATH,"errorPage", ["msj"=>"marca_prod: ".$this->producto->marca_prod]); // Pendiente por renderizar una página de error            
        }else{
            $this->producto->marca_prod = "'".$_POST["marcProd"]."'";
        }        
        
        //Validación de la fecha de vencimiento
        $this->producto->fecha_vence_prod= Validador::fechas($_POST["fechaProd"]);
        if(empty( $this->producto->fecha_vence_prod )){
             $this->producto->fecha_vence_prod = "null";
             //Solo se renderiza página de error en campos obligatorios
            Render::render(APP_PATH,"errorPage", ["msj"=>"fecha_vence_prod: ".$this->producto->fecha_vence_prod]); // Pendiente por renderizar una página de error
        }else{
            $this->producto->fecha_vence_prod = "STR_TO_DATE('".$_POST["fechaProd"]."', '%d-%m-%Y')";
        }        
        
        //Validación tiempo preparación
        $tPrep = Validador::horas($_POST["tPrep"]);
        if(empty( $tPrep )){
            $this->producto->tiempo_preparar_prod = "null";
            //Solo se renderiza página de error en campos obligatorios
            Render::render(APP_PATH,"errorPage", ["msj"=>"tiempo_preparar_prod: ".$this->producto->tiempo_preparar_prod]); // Pendiente por renderizar una página de error
        }else{
            $this->producto->tiempo_preparar_prod = "'".$tPrep.":00'";
        }        
        
        //Validación de los ingredientes
        $this->producto->ingredientes_prod = Validador::obligatorio($_POST["ingredProd"]);
        if(empty( $this->producto->ingredientes_prod )){
            $this->producto->ingredientes_prod= "null";
            //Solo se renderiza página de error en campos obligatorios
            Render::render(APP_PATH,"errorPage", ["msj"=>"ingredientes_prod: ".$this->producto->ingredientes_prod]); // Pendiente por renderizar una página de error            
        }else{
            $this->producto->ingredientes_prod = "'".$_POST["ingredProd"]."'";
        }             
        
        //Validación de la cantidad
        $this->producto->cantidad_prod = Validador::soloNumeros($_POST["cantProd"]);
        if(empty( $this->producto->cantidad_prod )){
            $this->producto->cantidad_prod = "null";
            //Solo se renderiza página de error en campos obligatorios
            Render::render(APP_PATH,"errorPage", ["msj"=>"cantidad_prod: ".$this->producto->cantidad_prod]); // Pendiente por renderizar una página de error
        }else{
            $this->producto->cantidad_prod = "'".$_POST["cantProd"]."'";
        }        
        
        //Agregando unidades medida, no requiere validación
        /**
         * @var array[][] Contiene una matriz de multiples rows de la consulta de todos
         * los tipos de generos que hay en la BD.
         */
        $unMedProd = UnidadesMedidaModel::findAll2();        
        foreach ($unMedProd->rows as $row) {                    
            //Definimos un patron para evitar campos vacios ya que el $_POST trae campos vacios.
            //Se aplica el patron y se trae el texto sin campos vacios
            $pattern = '/[\S]+/';
            $unMedProd_POST = $_POST["unMedProd"];
            $unMedProd="";
            if(preg_match($pattern, $unMedProd_POST, $coincide, PREG_OFFSET_CAPTURE)){                
                $unMedProd = $coincide[0][0];                
            }else{
                $this->producto->cod_unid_med = "null";
                //Solo se renderiza página de error en campos obligatorios
                Render::render(APP_PATH,"errorPage", ["msj"=>"cod_unid_med: ".$this->producto->cod_unid_med]); // Pendiente por renderizar una página de error
            }
            //print_r($row);
            if($row["nom_unid_med"] == $unMedProd ){  
                //echo " RESULTADO : ".$tipoDocs_POST." => ".$row["cod_documento"];
                $this->producto->cod_unid_med = $row["cod_unid_med"];
            }           
        }
        
        //Agregando tipo producto, no requiere validación
        /**
         * @var array[][] Contiene una matriz de multiples rows de la consulta de todos
         * los tipos de generos que hay en la BD.
         */
        $tiProd = TipoProdModelAdm::findAll2();
        foreach ($tiProd->rows as $row) {                    
            //Definimos un patron para evitar campos vacios ya que el $_POST trae campos vacios.
            //Se aplica el patron y se trae el texto sin campos vacios
            $pattern = '/[\S]+/';
            $tiProd_POST = $_POST["tiProd"];            
            $tiProducto="";
            if(preg_match($pattern, $tiProd_POST, $coincide, PREG_OFFSET_CAPTURE)){                
                $tiProducto = $coincide[0][0];           
            }else{
                $this->producto->cod_tipo_prod = "null";
                //Solo se renderiza página de error en campos obligatorios
                Render::render(APP_PATH,"errorPage", ["msj"=>"cod_tipo_prod: ".$this->producto->cod_tipo_prod]); // Pendiente por renderizar una página de error
            }
            //echo " RESULTADO : ".$tiProd_POST." => ".$row["cod_tipo_prod"];
            //print_r($row);
            if($row["nom_tipo_prod"] == $tiProducto ){  
                //echo " RESULTADO : ".$tiProd_POST." => ".$row["cod_tipo_prod"];
                $this->producto->cod_tipo_prod = $row["cod_tipo_prod"];
            }           
        }        

        //Descripción
        $this->producto->descripcion_prod = $_POST["descProd"];
        if(empty( $this->producto->descripcion_prod )){
            $this->producto->descripcion_prod= "null";
            //Solo se renderiza página de error en campos obligatorios
            Render::render(APP_PATH,"errorPage", ["msj"=>"descripcion_prod: ".$this->producto->descripcion_prod]); // Pendiente por renderizar una página de error            
        }else{
            $this->producto->descripcion_prod = "'".$_POST["descProd"]."'";
        }          

        //Agregando promocion, no requiere validación
        /**
         * @var array[][] Contiene una matriz de multiples rows de la consulta de todos
         * los tipos de generos que hay en la BD.
         */
        $promProd = PromosModelAdm::findAll2();        
        foreach ($promProd->rows as $row) {                    
            //Definimos un patron para evitar campos vacios ya que el $_POST trae campos vacios.
            //Se aplica el patron y se trae el texto sin campos vacios
            $pattern = '/[\S]+/';
            $promProd_POST = $_POST["promProd"];
            $promProd="";
            if(preg_match($pattern, $promProd_POST, $coincide, PREG_OFFSET_CAPTURE)){                
                $promProd = $coincide[0][0];                 
            }else{
                $this->producto->cod_promocion = "null";
                //Solo se renderiza página de error en campos obligatorios
                Render::render(APP_PATH,"errorPage", ["msj"=>"cod_promocion: ".$this->producto->cod_promocion."cod_promocion"]); // Pendiente por renderizar una página de error
            }
            //print_r($row);
            if($row["nom_promo"] == $promProd ){  
                //echo " RESULTADO : ".$tipoDocs_POST." => ".$row["cod_documento"];
                $this->producto->cod_promocion = $row["cod_promocion"];
            }           
        } 
        
        //Agregando combo, no requiere validación
        /**
         * @var array[][] Contiene una matriz de multiples rows de la consulta de todos
         * los tipos de generos que hay en la BD.
         */
        $comProd = CombosModelAdm::findAll2();        
        foreach ($comProd->rows as $row) {                    
            //Definimos un patron para evitar campos vacios ya que el $_POST trae campos vacios.
            //Se aplica el patron y se trae el texto sin campos vacios
            $pattern = '/[\S]+/';
            $comProd_POST = $_POST["comProd"];
            $comProd="";
            if(preg_match($pattern, $comProd_POST, $coincide, PREG_OFFSET_CAPTURE)){                
                $comProd = $coincide[0][0];                
            }else{
                $this->producto->cod_combo = "null";
                //Solo se renderiza página de error en campos obligatorios
                Render::render(APP_PATH,"errorPage", ["msj"=>"cod_combo: ".$this->producto->cod_combo]); // Pendiente por renderizar una página de error
            }
            //print_r($row);
            if($row["nombre_combo"] == $comProd ){  
                //echo " RESULTADO : ".$tipoDocs_POST." => ".$row["cod_documento"];
                $this->producto->cod_combo = $row["cod_combo"];
            }           
        }         
        
        //Activo, no activo, no requiere validación.        
        if(isset($_POST["activoProd"])){
            echo "activo";
            $this->producto->menu_prod = 1;
        }else{
            echo "no activo";
            $this->producto->menu_prod = 0;
        }                             
    }
    
    public function actionGuardarprod(){ 
        
        //$this->selfController = new SaveusuarioController();
        $this->actionValidarprod();        
        $this->producto->crear($this->producto);
        $this->actionFormprod(88); //ID 88 muestra la modal de usuario guardado con exito
    }
}
