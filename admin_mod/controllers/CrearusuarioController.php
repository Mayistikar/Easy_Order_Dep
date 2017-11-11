<?php

/*
 * PROYECTO EASY ORDER
 * 
 * Módulo:
 * Documento: "CrearusuarioController.php"  Version:  1.0.
 * Descripción:
 * Autor: andersonrodriguezce@gmail.com.
 * Fecha creación: 30/09/2017 | 11:05:55 PM.
 */

/**
 * Description of CrearusuarioController
 *
 * @author andersonrodriguezce@gmail.com
 */
class CrearusuarioController extends Controller{
    protected $selfController;
    protected $usuario;
    
    function __construct() {
        
    }
    public function actionFormusuario($id=0){
        $this->selfController = new CrearusuarioController();
         
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
        
        //Renderizando el MAIN-BODY
        Render::render(ADM_PATH,"crearUserViewAdm", 
                ["id"=> $id,
                 "documentos" => $docs->rows, 
                 "horarios" => $horarios->rows,
                 "generos" => $generos->rows, 
                 "cargos" => $cargos->rows,
                 "superController" => $this->selfController]);
                 
        //Renderizando el FOOTER
        Render::render(ADM_PATH,"footerViewAdm");
    }
    
    public function actionValidaruser(){
        $this->usuario = new Usuario();
        //Validación del Primer nombre
        $this->usuario->primer_nombre_usu = Validador::soloLetras($_POST["nom1"]);
        if(empty( $this->usuario->primer_nombre_usu )){
            $this->usuario->primer_nombre_usu = "null";
            //Solo se renderiza página de error en campos obligatorios
            Render::render(ADM_PATH,"headerViewAdm"); // Pendiente por renderizar una página de error            
        }else{
            $this->usuario->primer_nombre_usu = "'".$_POST["nom1"]."'";
        }
        
        //Validación del segundo nombre
        $this->usuario->segundo_nombre_usu = Validador::soloLetras($_POST["nom2"]);
        if(empty( $this->usuario->segundo_nombre_usu )){
            $this->usuario->segundo_nombre_usu= "null";            
        }else{
            $this->usuario->segundo_nombre_usu = "'".$_POST["nom2"]."'";
        }
        
        //Validación del Primer apellido
        $this->usuario->primer_apell_usu = Validador::soloLetras($_POST["ape1"]);
        if(empty( $this->usuario->primer_apell_usu)){
            $this->usuario->primer_apell_usu= "null";
            //Solo se renderiza página de error en campos obligatorios
            Render::render(ADM_PATH,"headerViewAdm"); // Pendiente por renderizar una página de error
        }else{
            $this->usuario->primer_apell_usu = "'".$_POST["ape1"]."'";
        }
        
        //Validación del segundo apellido
        $this->usuario->segundo_apell_usu = Validador::soloLetras($_POST["ape2"]);
        if(empty( $this->usuario->segundo_apell_usu )){
            $this->usuario->segundo_apell_usu = "null";            
        }else{
            $this->usuario->segundo_apell_usu = "'".$_POST["ape2"]."'";
        }
        
        //Validación del documento
        $this->usuario->documento_usu = Validador::soloNumeros($_POST["doc"]);
        if(empty( $this->usuario->documento_usu )){
            Render::render(ADM_PATH,"headerViewAdm"); // Pendiente por renderizar una página de error
        }

        //Validación de la fecha de nacimiento
        $this->usuario->fecha_nacimiento_usu = Validador::fechas($_POST["fecha"]);
        if(empty( $this->usuario->fecha_nacimiento_usu )){
             $this->usuario->fecha_nacimiento_usu = "null";
             //Solo se renderiza página de error en campos obligatorios
            Render::render(ADM_PATH,"headerViewAdm"); // Pendiente por renderizar una página de error
        }else{
            $this->usuario->fecha_nacimiento_usu = "STR_TO_DATE('".$_POST["fecha"]."', '%d-%m-%Y')";
        }

        //Agregando tipo documento, no requiere validación
        /**
         * @var array[][] Contiene una matriz de multiples rows de la consulta de todos
         * los tipos de generos que hay en la BD.
         */
        $tipoDocs = TipoDocumentoModelAdm::findAll2();        
        foreach ($tipoDocs->rows as $row) {                    
            //Definimos un patron para evitar campos vacios ya que el $_POST trae campos vacios.
            //Se aplica el patron y se trae el texto sin campos vacios
            $pattern = '/[\S]+/';
            $tipoDocs_POST = $_POST["tipo-doc"];
            $tipoDoc="";
            if(preg_match($pattern, $tipoDocs_POST, $coincide, PREG_OFFSET_CAPTURE)){                
                $tipoDoc = $coincide[0][0];                
            }else{
                $this->usuario->cod_documento = "null";
                //Solo se renderiza página de error en campos obligatorios
                Render::render(ADM_PATH,"headerViewAdm"); // Pendiente por renderizar una página de error
            }
            //print_r($row);
            if($row["tipo_documento"] == $tipoDoc ){  
                //echo " RESULTADO : ".$tipoDocs_POST." => ".$row["cod_documento"];
                $this->usuario->cod_documento = $row["cod_documento"];
            }           
        }        
        
        //Agregando género, no requiere validación
        /**
         * @var array[][] Contiene una matriz de multiples rows de la consulta de todos
         * los tipos de generos que hay en la BD.
         */
        $generos = GeneroModelAdm::findAll2();        
        foreach ($generos->rows as $row) {                    
            //Definimos un patron para evitar campos vacios ya que el $_POST trae campos vacios.
            //Se aplica el patron y se trae el texto sin campos vacios
            $pattern = '/[\S]+/';
            $genero_POST = $_POST["genero"];
            $genero="";
            if(preg_match($pattern, $genero_POST, $coincide, PREG_OFFSET_CAPTURE)){                
                $genero = $coincide[0][0];
            }else{
                $this->usuario->cod_genero = "null";
                //Solo se renderiza página de error en campos obligatorios
                Render::render(ADM_PATH,"headerViewAdm"); // Pendiente por renderizar una página de error
            }
            
            if($row["genero"] == $genero ){  
                //echo " RESULTADO : ".$genero_POST." => ".$row["genero"];
                $this->usuario->cod_genero = $row["cod_genero"];
            }           
        }
        
        //Agregando cargo, no requiere validación
        /**
         * @var array[][] Contiene una matriz de multiples rows de la consulta de todos
         * los cargos que hay en la BD.
         */
        $cargos = CargoModelAdm::findAll2();
        //echo " RESULTADO : ".$_POST["cargo"];
        foreach ($cargos->rows as $row) {                    
            //Definimos un patron para evitar campos vacios ya que el $_POST trae campos vacios.
            //Se aplica el patron y se trae el texto sin campos vacios
            $pattern = '/[\S]+/';
            $cargo_POST = $_POST["cargo"];
            $cargo="";
            if(preg_match($pattern, $_POST["cargo"], $coincide, PREG_OFFSET_CAPTURE)){
                $cargo = $coincide[0][0];
            }else{
                $this->usuario->cod_cargo = "null";
                //Solo se renderiza página de error en campos obligatorios
                Render::render(ADM_PATH,"headerViewAdm"); // Pendiente por renderizar una página de error
            }
            
            if($row["cargo"] == $cargo ){  
                //echo " RESULTADO : ".$cargo." => ".$row["cargo"];
                $this->usuario->cod_cargo = $row["cod_cargo"];
            }           
        }                
        
        //Validación del celular
        $this->usuario->celular_usu = Validador::soloNumeros($_POST["cel"]);
        if(empty(  $this->usuario->celular_usu )){
            $this->usuario->celular_usu = "null";
            //Solo se renderiza página de error en campos obligatorios
            Render::render(ADM_PATH,"headerViewAdm"); // Pendiente por renderizar una página de error            
        }

        //Validación del teléfono
        $this->usuario->telefono_fijo_usu = Validador::soloNumeros($_POST["telf"]);
        if(empty( $this->usuario->telefono_fijo_usu )){
            $this->usuario->telefono_fijo_usu= "null";
            //Solo se renderiza página de error en campos obligatorios
            Render::render(ADM_PATH,"headerViewAdm"); // Pendiente por renderizar una página de error
        }
        
        //No requiere validación.
        if(!isset($_POST["dir"])){
            $this->usuario->direccion_usu = "null";
        }else{
            $this->usuario->direccion_usu = "'".$_POST["dir"]."'";
        }

        //Validación del salario
        $this->usuario->salario_usu = Validador::soloNumeros($_POST["sal"]);
        if(empty( $this->usuario->salario_usu )){
            $this->usuario->salario_usu = "null";
            //Solo se renderiza página de error en campos obligatorios
            Render::render(ADM_PATH,"headerViewAdm"); // Pendiente por renderizar una página de error
        }

        //Validación hora entrada
        $horaIn = Validador::horas($_POST["horaIn"]);
        if(empty( $horaIn )){
            $this->usuario->hora_entrada_usu = "null";
            //Solo se renderiza página de error en campos obligatorios
            Render::render(ADM_PATH,"headerViewAdm"); // Pendiente por renderizar una página de error
        }else{
            $this->usuario->hora_entrada_usu = "'".$horaIn.":00'";
        }
        
        //Validación hora salida
        $horaOut = Validador::horas($_POST["horaOut"]);
        if(empty( $horaOut )){
            $this->usuario->hora_salida_usu = "null";
            //Solo se renderiza página de error en campos obligatorios
            Render::render(ADM_PATH,"headerViewAdm"); // Pendiente por renderizar una página de error
        }else{
            $this->usuario->hora_salida_usu = "'".$horaOut.":00'";
        }
        
        //Validación usuario
        $this->usuario->user_usu = Validador::obligatorio($_POST["user"]);
        if(empty( $this->usuario->user_usu )){
            $this->usuario->user_usu = "usuario";
            //Solo se renderiza página de error en campos obligatorios
            Render::render(ADM_PATH,"headerViewAdm"); // Pendiente por renderizar una página de error
        }else{
            $this->usuario->user_usu = "'".$_POST["user"]."'";
        }
        
        //Validación contraseña
        $this->usuario->pass_usu = Validador::obligatorio($_POST["pass"]);
        if(empty( $this->usuario->pass_usu )){
            $this->usuario->pass_usu = "usuario";
            //Solo se renderiza página de error en campos obligatorios
            Render::render(ADM_PATH,"headerViewAdm"); // Pendiente por renderizar una página de error
        }else{
            $this->usuario->pass_usu = "'".$_POST["pass"]."'";
        }
        
        //Activo, no activo, no requiere validación.
        if(isset($_POST["activo"])){
            $this->usuario->activo_usu = 1;
        }else{
            $this->usuario->activo_usu = 0;
        }
        
    }
    
    public function actionGuardarusuario(){ 
        
        //$this->selfController = new SaveusuarioController();
        $this->actionValidarUser();
        $this->usuario->crear($this->usuario);         
        $this->actionFormusuario(88); //ID 88 muestra la modal de usuario guardado con exito
    }
}
