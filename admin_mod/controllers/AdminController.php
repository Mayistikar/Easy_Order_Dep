<?php

class AdminController extends Controller{
    protected $selfController;
    
    function __construct() {}


    public function actionAdmin($id=123){
        
        $this->selfController = new AdminController();
        Render::render(ADM_PATH,"headerViewAdm", ["user" => "Admin", "superController" => $this->selfController] );
        Render::render(ADM_PATH,"asideViewAdm", ["superController" => $this->selfController, "id"=>$id]);
        Render::render(ADM_PATH,"articleViewAdm");
        Render::render(ADM_PATH,"footerViewAdm");
    }        
    
}