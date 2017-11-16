<!DOCTYPE html>
<!--
PROYECTO EASY ORDER

Módulo: Administrador
Documento: "headerViewMenu.php"  Version:  1.0.
Descripción: Vista plantilla general para pintar el header y el background de todas
las vistas que se rendericen en el módulo menu.

Autor: andersonrodriguezce@gmail.com.
Fecha creación: 30/09/2017 | 04:02:54 AM.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>EASY ORDER</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <!-- AGREGANDO BOOTSTRAP -->
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        
        <link rel="stylesheet" href="/Easy_Order_Dev_ARC/lib/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="/Easy_Order_Dev_ARC/lib/bootstrap/css/bootstrap-theme.css">
        
        <script src="/Easy_Order_Dev_ARC/lib/bootstrap/js/jquery.js"></script>
        <script src="/Easy_Order_Dev_ARC/lib/bootstrap/js/bootstrap.min.js"></script>
        <!-- AGREGANDO BOOTSTRAP -->
        
        <!-- AGREGANDO ESTILOS -->
        <link rel="stylesheet" href="/Easy_Order_Dev_ARC/menu_mod/views/css/misestilosmenu.css">
		<link rel="stylesheet" href="/Easy_Order_Dev_ARC/menu_mod/views/fonts/style.css">
		<link rel="stylesheet" href="/Easy_Order_Dev_ARC/menu_mod/views/css/slider.css">
        <!-- AGREGANDO ESTILOS --> 
                       
		<!-- AGREGANDO ESTILOS ALERTIFY -->
		<link rel="stylesheet" href="/Easy_Order_Dev_ARC/lib/alertifyjs/css/alertify.min.css">
		<link rel="stylesheet" href="/Easy_Order_Dev_ARC/lib/alertifyjs/css/themes/bootstrap.min.css">
		<!-- AGREGANDO ESTILOS ALERTIFY -->   
   
             
    </head>
    <body>
        <header>           

        <nav class="nav navbar navbar-inverse">
			<div class="container container-fluid sinpadding">
                    <!---  LOGO EO  --->
                    <div class="container col-md-1 col-sm-1 col-xs-1" >
                        <a  class="navbar-brand" href="#">
                            <img src="/Easy_Order_Dev_ARC/menu_mod/views/img/logoEOFondoXSMPestana.png">
                        </a>                        
                    </div>
                    <!---  LOGO EO  --->                     
                      
            <div class="container  col-xs-11 col-sm-11 col-md-1 col-bg-1">
               
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar6">
                        <span class="sr-only">MENU</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand text-hide" href="#"></a>
                </div>
            </div>
            
                <div class="collapse navbar-collapse" id="navbar6">
                   <div class="container col-sm-11 col-md-10 paddingInterno">
                    <ul class="nav navbar-nav navbar-right">                                           
                        
                        <?php if(!isset($superController)){?>                        
                        <li>
                            <a href="">
                                <h4><span class="icon-cafe"></span> Entradas</h4>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <h4><span class="icon-comida-3"></span> Plato Fuerte</h4>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <h4><span class="icon-hamburguesa"></span> Comida Rapida</h4>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <h4><span class="icon-copa"></span> Bebidas</h4>
                            </a>
                        </li>
                        <li>
                            <a href="" id="adm" onclick="window.location='../Easy_Order_Tests/trunk/mod_admin/views/registrarProducto.html'">                               
                                <h4><span class="glyphicon glyphicon-info-sign"></span></h4>
                            </a>
                        </li>
                        <?php }else{ ?>
                        <li>
                            <a href="<?=$superController->setControllerMenu("Menu", "Entradas")?>">
                                <h4><span class="icon-cafe"></span> Entradas</h4>
                            </a>
                        </li>
                        <li>
                            <a href="<?=$superController->setControllerMenu("Menu", "Platofuerte")?>">
                                <h4><span class="icon-comida-3"></span> Plato Fuerte</h4>
                            </a>
                        </li>
                        <li>
                            <a href="<?=$superController->setControllerMenu("Menu", "Comidarapida")?>">
                                <h4><span class="icon-hamburguesa"></span> Comida Rapida</h4>
                            </a>
                        </li>
                        <li>
                            <a href="<?=$superController->setControllerMenu("Menu", "Bebidas")?>">
                                <h4><span class="icon-copa"></span> Bebidas</h4>
                            </a>
                        </li>
                        <li>
                            <a href="" id="adm" onclick="window.location='../Easy_Order_Tests/trunk/mod_admin/views/registrarProducto.html'">                               
                                <h4><span class="glyphicon glyphicon-info-sign"></span></h4>
                            </a>
                        </li>                        
                        <?php } ?>
                    </ul>
                    </div>
                </div>            
            
            </div>                        
            
        </nav>               

        </header>