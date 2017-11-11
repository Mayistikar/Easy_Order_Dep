<?php

class InicioController extends Controller{
    
    protected $selfController;        
    
    function __construct() {}
    
    public function actionAbout(){
        echo "Hola desde acerca de";
    }        
    
    public function actionSesion(){
        $this->selfController = new InicioController();
        $rol = Model::logProcedure(
                "DO_LOGIN",
                [ "user"=>$_POST["inputUser"], 
                  "pass"=>$_POST["inputPass"]
                ]);
        print_r($rol);
        if($rol == 0){
            $userI = "false";
            header("LOCATION: ".$this->selfController->setControllerLog("Inicio", "Login", $userI));
        }else if($rol == 111){
            $this->selfController->setController();
            header("LOCATION: ".$this->selfController->setController("Listarusuarios", "Listar"));
        }else if($rol == 112){
            header("LOCATION: ".$this->selfController->setControllerChef());
        }    
    }
    
    public function actionLogin($userInc = ""){
        $this->selfController = new InicioController();
        
        Render::render(
                    APP_PATH,
                    "loginView",
                    ["superController" => $this->selfController,
                     "userIncorrect"=>$userInc]);
                
    }
}
