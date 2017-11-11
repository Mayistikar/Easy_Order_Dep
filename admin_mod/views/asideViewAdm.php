<!DOCTYPE html>
<!--
PROYECTO EASY ORDER

Módulo:
Documento: "articleViewAdm.php"  Version:  1.0.
Descripción:
Autor: andersonrodriguezce@gmail.com.
Fecha creación: 30/09/2017 | 03:37:33 PM.
-->
<div class="container">
    <section class="main row">
        <aside class="col-md-3">
            <div class="container-fluid">
                <br>
                
                <div class="panel-group" id="acordion" role="tablist">

                    <!-- PANEL PERFIL DEL USUARIO -->                   
                    <div class="panel pan-color">
                       
                        <div class="panel-heading" role="tab" id="heading1">
                            <h4 class="panel-title">
                                <a href="#collapse1" data-toggle="collapse" data-parent="#acordion">
                                   <i class="glyphicon glyphicon-file"></i>
                                    Perfil
                                </a>
                            </h4>
                        </div>                                                
                        
                        <div id="collapse1" class="panel-collapse collapse">
                            <div class="panel-body">
                              <?php if(!isset($superController)){?>                                
                              <a href="" class="btn btn-easy-order btn-sm btn-block" role="button">
                              <i class="glyphicon glyphicon-plus-sign"></i>
                              Datos Usuario
                              </a>
                              <?php }else{?>
                              <a href=" <?=$superController->setController("admin", "admin")?> " 
                                class="btn btn-easy-order btn-sm btn-block" role="button">Crear usuario</a>
                              <?php }?>
                            </div>
                        </div>                                                
                        
                    </div>                    
                    
                    <!-- PANEL USUARIOS -->                   
                    <div class="panel pan-color">
                       
                        <div class="panel-heading" role="tab" id="heading2">
                            <h4 class="panel-title">
                                <a href="#collapse2" data-toggle="collapse" data-parent="#acordion">
                                   <i class="glyphicon glyphicon-duplicate"></i>
                                    Usuarios
                                </a>
                            </h4>
                        </div>                                                
                        
                        <div id="collapse2" class="panel-collapse collapse">
                            <div class="panel-body center-block">                           
                              <?php if(!isset($superController)){?>                                
                              <a href="" class="btn btn-easy-order btn-sm btn-block" role="button">
                              <i class="glyphicon glyphicon-plus-sign"></i>
                              Crear usuario
                              </a>
                              <a href="" class="btn btn-easy-order btn-sm btn-block" role="button">
                              <i class="glyphicon glyphicon-list-alt"></i>
                              Lista usuarios
                              </a>                                
                              <?php }else{ ?>
                              <a href=" <?=$superController->setController("Crearusuario", "Formusuario")?> " 
                                class="btn btn-easy-order btn-sm btn-block" role="button">
                              <i class="glyphicon glyphicon-plus-sign"></i>
                              Crear usuario
                              </a>
                                
                              <a href=" <?=$superController->setController("Listarusuarios", "Listar") ?>" class="btn btn-easy-order btn-sm btn-block" role="button">
                              <i class="glyphicon glyphicon-list-alt"></i>
                              Lista usuarios
                              </a>
                              <?php } ?>

                            </div>
                        </div>                                                
                        
                    </div>
                    
                    <!-- PANEL PRODUCTOS -->                   
                    <div class="panel pan-color">
                       
                        <div class="panel-heading" role="tab" id="heading3">
                            <h4 class="panel-title">
                                <a href="#collapse3" data-toggle="collapse" data-parent="#acordion"> 
                                   <i class="glyphicon glyphicon-apple"></i>           
                                    Productos
                                </a>
                            </h4>
                        </div>
                        
                        <div id="collapse3" class="panel-collapse collapse">
                            <div class="panel-body center-block">                           
                              <?php if(!isset($superController)){?>                                
                              <a href="" class="btn btn-easy-order btn-sm btn-block" role="button">
                              <i class="glyphicon glyphicon-plus-sign"></i>
                              Registrar producto
                              </a>
                              <a href="" class="btn btn-easy-order btn-sm btn-block" role="button">
                              <i class="glyphicon glyphicon-list-alt"></i>
                              Listar productos
                              </a>                                
                              <?php }else{ ?>
                              <a href=" <?=$superController->setController("Crearprod", "Formprod")?> " 
                                class="btn btn-easy-order btn-sm btn-block" role="button">
                              <i class="glyphicon glyphicon-plus-sign"></i>
                              Registrar producto
                              </a>
                                
                              <a href=" <?=$superController->setController("Listarusuarios", "Listar") ?>" class="btn btn-easy-order btn-sm btn-block" role="button">
                              <i class="glyphicon glyphicon-list-alt"></i>
                              Listar productos
                              </a>
                              <?php } ?>

                            </div>
                        </div>                                                
                        
                    </div>
                    
                </div>
                               
            </div>
        </aside>
        