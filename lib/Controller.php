<?php

class Controller{
        
    function __construct() {
        
    }

    public function actionIndex(){
            echo "Hola desde el inicio";
    }
            
    public function setController($controller = "Homecontroller", $action = "index", $param = ""){        
        return ROOT.ADM_PATH.$controller."/".$action."/".$param;
    }
    
    public function setControllerChef($controller = "Ordenes", $action = "Listarordenes", $param = ""){
        return ROOT.CHE_PATH.$controller."/".$action."/".$param;
    }
    
    public function setControllerMenu($controller = "Homecontroller", $action = "index", $param = ""){        
        return ROOT.MEN_PATH.$controller."/".$action."/".$param;
    }
    
    public function setControllerLog($controller = "Inicio", $action = "login", $param = ""){        
        return ROOT.APP_PATH.$controller."/".$action."/".$param;
    }
}

